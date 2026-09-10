<?php
/**
 * UrbanPest — Secure Contact & Commercial Quote Handler
 * Incorporates CSRF protection, honeypot bot trap, rate limiting, sanitization,
 * and structured JSON persistence for the UrbanPest Admin Portal.
 */

require_once __DIR__ . '/partials/security.php';
require_once __DIR__ . '/data/services.php';
require_once __DIR__ . '/data/config.php';

initSecuritySession();
emitSecurityHeaders();

// 1. Only accept POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: /contact');
    exit;
}

// 2. Honeypot check (anti-bot trap)
if (isHoneypotTriggered()) {
    // Silently redirect bots to success to prevent probing
    header('Location: /contact?success=1');
    exit;
}

// 3. Rate limiting (max 5 submissions per 60 seconds per session/IP)
if (isRateLimited('contact', 5, 60)) {
    header('Location: /contact?error=ratelimit');
    exit;
}

// 4. CSRF token validation
$csrfToken = $_POST['csrf_token'] ?? '';
if (!verifyCSRFToken($csrfToken)) {
    header('Location: /contact?error=csrf');
    exit;
}

// 5. Sanitize and trim inputs
$name    = sanitizeText($_POST['name'] ?? '');
$company = sanitizeText($_POST['company'] ?? '');
$email   = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
$phone   = sanitizeText($_POST['phone'] ?? '');
$service = sanitizeText($_POST['service'] ?? '');
$message = sanitizeText($_POST['message'] ?? '');

// 6. Validation
$errors = [];

if (strlen($name) < 2) {
    $errors[] = 'Name is required (at least 2 characters).';
}

if (strlen($company) < 2) {
    $errors[] = 'Company name is required.';
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'A valid email address is required.';
}

if ($phone && !preg_match('/^[\+]?[\d\s\-\(\)]{7,20}$/', $phone)) {
    $errors[] = 'Phone number format is invalid.';
}

if (empty($service)) {
    $errors[] = 'Please select a service of interest.';
}

if (strlen($message) < 10) {
    $errors[] = 'Message is required (at least 10 characters).';
}

// If validation errors exist, redirect back
if (!empty($errors)) {
    $_SESSION['form_errors'] = $errors;
    $_SESSION['form_old'] = [
        'name' => $name,
        'company' => $company,
        'email' => $email,
        'phone' => $phone,
        'service' => $service,
        'message' => $message
    ];
    header('Location: /contact?error=validation');
    exit;
}

// Resolve user-friendly service name
$serviceName = 'General Inquiry';
if (isset($allServices[$service])) {
    $serviceName = $allServices[$service]['name'];
} else {
    $serviceName = ucwords(str_replace('-', ' ', $service));
}

// 7. Structured Lead Object
$newLead = [
    'id'           => 'lead_' . uniqid(),
    'created_at'   => date('Y-m-d H:i:s'),
    'name'         => $name,
    'company'      => $company,
    'email'        => $email,
    'phone'        => $phone,
    'service'      => $service,
    'service_name' => $serviceName,
    'message'      => $message,
    'status'       => 'new', // new, contacted, survey_scheduled, proposal_sent, closed_won, archived
    'ip'           => $_SERVER['REMOTE_ADDR'] ?? '127.0.0.1',
    'user_agent'   => substr($_SERVER['HTTP_USER_AGENT'] ?? 'Unknown', 0, 150),
    'notes'        => [
        [
            'date'   => date('Y-m-d H:i:s'),
            'author' => 'System',
            'text'   => 'Commercial enquiry received via website quote form.'
        ]
    ]
];

// 8. Atomic persistence into data/leads.json
$leadsFile = __DIR__ . '/data/leads.json';
$leads = [];

if (file_exists($leadsFile)) {
    $content = @file_get_contents($leadsFile);
    $decoded = @json_decode($content, true);
    if (is_array($decoded)) {
        $leads = $decoded;
    }
}

// Prepend new lead to top of list
array_unshift($leads, $newLead);

// Thread-safe atomic file write
$fp = @fopen($leadsFile, 'w');
if ($fp) {
    if (flock($fp, LOCK_EX)) {
        fwrite($fp, json_encode($leads, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
        fflush($fp);
        flock($fp, LOCK_UN);
    }
    fclose($fp);
}

// 9. Development backup log
$logEntry = date('Y-m-d H:i:s') . " | {$newLead['id']} | {$name} | {$company} | {$email} | {$phone} | {$serviceName}\n";
@file_put_contents(__DIR__ . '/data/contact-log.txt', $logEntry, FILE_APPEND);

// 10. Success redirect
unset($_SESSION['form_errors']);
unset($_SESSION['form_old']);
header('Location: /contact?success=1');
exit;
