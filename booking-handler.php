<?php
/**
 * UrbanPest — Dedicated Service Booking Handler
 * Processes dedicated service bookings directly into the Admin Bookings Pipeline.
 * Supports both AJAX JSON responses and standard POST redirects.
 */

require_once __DIR__ . '/partials/security.php';
require_once __DIR__ . '/data/services.php';
require_once __DIR__ . '/data/config.php';

initSecuritySession();
emitSecurityHeaders();

$isAjax = (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') 
       || (!empty($_POST['is_ajax'])) 
       || (strpos($_SERVER['HTTP_ACCEPT'] ?? '', 'application/json') !== false);

// 1. Only accept POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    if ($isAjax) {
        http_response_code(405);
        header('Content-Type: application/json');
        echo json_encode(['success' => false, 'message' => 'Method not allowed.']);
        exit;
    }
    header('Location: /index.php');
    exit;
}

// 2. Honeypot check (anti-bot trap)
if (isHoneypotTriggered()) {
    if ($isAjax) {
        header('Content-Type: application/json');
        echo json_encode(['success' => true, 'ticket_no' => 'US-' . strtoupper(substr(uniqid(), -6)), 'message' => 'Booking received.']);
        exit;
    }
    header('Location: /book.php?booking_success=1');
    exit;
}

// 3. Rate limiting (max 6 bookings per 60 seconds per IP)
if (isRateLimited('booking', 6, 60)) {
    if ($isAjax) {
        http_response_code(429);
        header('Content-Type: application/json');
        echo json_encode(['success' => false, 'message' => 'Too many requests. Please wait a minute and try again.']);
        exit;
    }
    header('Location: /book.php?error=ratelimit');
    exit;
}

// 4. Sanitize and trim inputs
$name          = sanitizeText($_POST['name'] ?? '');
$company       = sanitizeText($_POST['company'] ?? '');
$email         = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
$phone         = sanitizeText($_POST['phone'] ?? '');
$serviceSlug   = sanitizeText($_POST['service'] ?? 'household-pest-control');
$surveyScope   = sanitizeText($_POST['survey_scope'] ?? 'Residential Survey');
$propertyType  = sanitizeText($_POST['property_type'] ?? 'Residential Property');
$urgency       = sanitizeText($_POST['urgency'] ?? 'Within 24-48 Hours');
$preferredDate = sanitizeText($_POST['preferred_date'] ?? '');
$preferredTime = sanitizeText($_POST['preferred_time'] ?? 'Morning (08:00 – 12:00)');
$message       = sanitizeText($_POST['message'] ?? '');

// 5. Validation
$errors = [];

if (strlen($name) < 2) {
    $errors[] = 'Full name is required.';
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'A valid email address is required.';
}

if (empty($phone) || strlen($phone) < 7) {
    $errors[] = 'A valid contact phone number is required for dispatch.';
}

if (empty($serviceSlug)) {
    $serviceSlug = 'household-pest-control';
}

if (!empty($errors)) {
    if ($isAjax) {
        http_response_code(422);
        header('Content-Type: application/json');
        echo json_encode(['success' => false, 'message' => implode(' ', $errors), 'errors' => $errors]);
        exit;
    }
    $_SESSION['booking_errors'] = $errors;
    $_SESSION['booking_old'] = $_POST;
    header('Location: /book.php?service=' . urlencode($serviceSlug) . '&error=validation');
    exit;
}

// Resolve user-friendly service name
$serviceName = 'General Household Pest Control';
if (isset($allServices[$serviceSlug])) {
    $serviceName = $allServices[$serviceSlug]['name'];
} elseif ($serviceSlug !== 'general') {
    $serviceName = ucwords(str_replace('-', ' ', $serviceSlug));
}

$ticketNo = 'US-' . strtoupper(substr(uniqid(), -6));
$bookingId = 'book_' . uniqid();

// 6. Structured Booking Object
$newBooking = [
    'id'             => $bookingId,
    'ticket_no'      => $ticketNo,
    'created_at'     => date('Y-m-d H:i:s'),
    'name'           => $name,
    'company'        => $company,
    'email'          => $email,
    'phone'          => $phone,
    'service'        => $serviceSlug,
    'service_name'   => $serviceName,
    'survey_scope'   => $surveyScope,
    'property_type'  => $propertyType,
    'urgency'        => $urgency,
    'preferred_date' => $preferredDate ?: date('Y-m-d', strtotime('+1 day')),
    'preferred_time' => $preferredTime,
    'message'        => $message,
    'status'         => 'new', // new, survey_scheduled, in_progress, completed, archived
    'technician'     => 'Unassigned',
    'scheduled_date' => $preferredDate ?: null,
    'scheduled_time' => $preferredTime ?: null,
    'ip'             => $_SERVER['REMOTE_ADDR'] ?? '127.0.0.1',
    'user_agent'     => substr($_SERVER['HTTP_USER_AGENT'] ?? 'Unknown', 0, 150),
    'notes'          => [
        [
            'date'   => date('Y-m-d H:i:s'),
            'author' => 'System',
            'text'   => "Direct service booking request for {$serviceName} ({$urgency}) received."
        ]
    ]
];

// 7. Atomic persistence into data/bookings.json
$bookingsFile = __DIR__ . '/data/bookings.json';
$bookings = [];
if (file_exists($bookingsFile)) {
    $content = @file_get_contents($bookingsFile);
    $decoded = @json_decode($content, true);
    if (is_array($decoded)) {
        $bookings = $decoded;
    }
}
array_unshift($bookings, $newBooking);

$fp = @fopen($bookingsFile, 'w');
if ($fp) {
    if (flock($fp, LOCK_EX)) {
        fwrite($fp, json_encode($bookings, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
        fflush($fp);
        flock($fp, LOCK_UN);
    }
    fclose($fp);
}

// 8. Also mirror into data/leads.json for seamless unified visibility
$leadsFile = __DIR__ . '/data/leads.json';
$leads = [];
if (file_exists($leadsFile)) {
    $content = @file_get_contents($leadsFile);
    $decoded = @json_decode($content, true);
    if (is_array($decoded)) {
        $leads = $decoded;
    }
}
$leadMirror = [
    'id'           => $bookingId,
    'created_at'   => date('Y-m-d H:i:s'),
    'name'         => $name,
    'company'      => $company,
    'email'        => $email,
    'phone'        => $phone,
    'service'      => $serviceSlug,
    'service_name' => $serviceName,
    'message'      => "Booking Request [{$ticketNo}] | Urgency: {$urgency} | Facility: {$propertyType} | Preferred: {$preferredDate} {$preferredTime} | Notes: {$message}",
    'status'       => 'new',
    'technician'   => 'Unassigned',
    'ip'           => $_SERVER['REMOTE_ADDR'] ?? '127.0.0.1',
    'user_agent'   => substr($_SERVER['HTTP_USER_AGENT'] ?? 'Unknown', 0, 150),
    'notes'        => $newBooking['notes']
];
array_unshift($leads, $leadMirror);

$fpLead = @fopen($leadsFile, 'w');
if ($fpLead) {
    if (flock($fpLead, LOCK_EX)) {
        fwrite($fpLead, json_encode($leads, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
        fflush($fpLead);
        flock($fpLead, LOCK_UN);
    }
    fclose($fpLead);
}

// 9. Append to contact log
$logEntry = date('Y-m-d H:i:s') . " | BOOKING | {$ticketNo} | {$name} | {$company} | {$email} | {$phone} | {$serviceName} | {$urgency}\n";
@file_put_contents(__DIR__ . '/data/contact-log.txt', $logEntry, FILE_APPEND);

// 10. Return response
if ($isAjax) {
    header('Content-Type: application/json');
    echo json_encode([
        'success'      => true,
        'ticket_no'    => $ticketNo,
        'booking_id'   => $bookingId,
        'service_name' => $serviceName,
        'name'         => $name,
        'message'      => "Thank you {$name}! Your booking request for {$serviceName} has been received. Ticket #{$ticketNo}. UrbanX Pest Control Perth will contact you shortly to confirm your booking."
    ]);
    exit;
}

unset($_SESSION['booking_errors']);
unset($_SESSION['booking_old']);
header('Location: /book.php?booking_success=1&ticket=' . urlencode($ticketNo) . '&service=' . urlencode($serviceSlug));
exit;
