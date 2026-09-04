<?php
/**
 * UrbanPest — Contact Form Handler
 * Server-side validation and sanitization. Email send stubbed with TODO.
 */

// Only accept POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: /contact.php');
    exit;
}

// Sanitize inputs
$name    = htmlspecialchars(trim($_POST['name'] ?? ''), ENT_QUOTES, 'UTF-8');
$company = htmlspecialchars(trim($_POST['company'] ?? ''), ENT_QUOTES, 'UTF-8');
$email   = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
$phone   = htmlspecialchars(trim($_POST['phone'] ?? ''), ENT_QUOTES, 'UTF-8');
$service = htmlspecialchars(trim($_POST['service'] ?? ''), ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars(trim($_POST['message'] ?? ''), ENT_QUOTES, 'UTF-8');

// Validate
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

// If errors, redirect back
if (!empty($errors)) {
    header('Location: /contact.php?error=1');
    exit;
}

// ============================================
// TODO: Send email
// ============================================
// Uncomment and configure the following for production:
//
// $to      = 'info@urbanpest.com';
// $subject = 'New Contact Enquiry from ' . $name . ' (' . $company . ')';
// $body    = "Name: {$name}\n"
//          . "Company: {$company}\n"
//          . "Email: {$email}\n"
//          . "Phone: {$phone}\n"
//          . "Service Interest: {$service}\n"
//          . "Message:\n{$message}\n";
// $headers = "From: noreply@urbanpest.com\r\n"
//          . "Reply-To: {$email}\r\n"
//          . "Content-Type: text/plain; charset=UTF-8\r\n";
//
// $sent = mail($to, $subject, $body, $headers);
//
// if (!$sent) {
//     header('Location: /contact.php?error=1');
//     exit;
// }
// ============================================

// Log submission (for development)
$logEntry = date('Y-m-d H:i:s') . " | {$name} | {$company} | {$email} | {$phone} | {$service} | " . substr($message, 0, 100) . "\n";
@file_put_contents(__DIR__ . '/contact-log.txt', $logEntry, FILE_APPEND);

// Success redirect
header('Location: /contact.php?success=1');
exit;
