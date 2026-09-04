<?php
/**
 * UrbanPest — Defensive Security & Vulnerability Hardening Module
 * Provides CSRF protection, defense-in-depth headers, honeypot spam detection, and rate limiting.
 */

// Start secure session if not already active
function initSecuritySession() {
    if (session_status() === PHP_SESSION_NONE) {
        // Enforce secure session cookie settings
        $cookieParams = session_get_cookie_params();
        session_set_cookie_params([
            'lifetime' => $cookieParams['lifetime'],
            'path'     => '/',
            'domain'   => $cookieParams['domain'],
            'secure'   => isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on',
            'httponly' => true,
            'samesite' => 'Lax'
        ]);
        @session_start();
    }
}

// Emit defensive HTTP security headers
function emitSecurityHeaders() {
    if (!headers_sent()) {
        header('X-Frame-Options: SAMEORIGIN');
        header('X-Content-Type-Options: nosniff');
        header('X-XSS-Protection: 1; mode=block');
        header('Referrer-Policy: strict-origin-when-cross-origin');
        header("Permissions-Policy: geolocation=(), camera=(), microphone=()");
    }
}

// Generate or retrieve CSRF token
function getCSRFToken() {
    initSecuritySession();
    if (empty($_SESSION['csrf_token'])) {
        if (function_exists('random_bytes')) {
            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        } else {
            $_SESSION['csrf_token'] = bin2hex(openssl_random_pseudo_bytes(32));
        }
    }
    return $_SESSION['csrf_token'];
}

// Render hidden CSRF form input
function renderCSRFField() {
    $token = getCSRFToken();
    return '<input type="hidden" name="csrf_token" value="' . htmlspecialchars($token, ENT_QUOTES, 'UTF-8') . '">';
}

// Verify CSRF token securely
function verifyCSRFToken($submittedToken) {
    initSecuritySession();
    if (empty($_SESSION['csrf_token']) || empty($submittedToken)) {
        return false;
    }
    return hash_equals($_SESSION['csrf_token'], $submittedToken);
}

// Check honeypot field (hidden anti-bot input)
function isHoneypotTriggered() {
    if (!empty($_POST['_hp_company_website']) || !empty($_POST['_hp_trap_check'])) {
        return true;
    }
    return false;
}

// Render invisible honeypot field for bot trapping
function renderHoneypotField() {
    return '<div style="display:none !important; visibility:hidden !important; opacity:0 !important; position:absolute !important; left:-9999px !important;" aria-hidden="true">
        <label for="_hp_company_website">Leave this field blank</label>
        <input type="text" name="_hp_company_website" id="_hp_company_website" tabindex="-1" autocomplete="off" value="">
    </div>';
}

// Simple IP/Session Rate Limiting
function isRateLimited($action = 'contact', $maxRequests = 5, $decaySeconds = 60) {
    initSecuritySession();
    $now = time();
    $key = 'rate_limit_' . $action;
    
    if (!isset($_SESSION[$key])) {
        $_SESSION[$key] = [];
    }
    
    // Filter timestamps within decay window
    $_SESSION[$key] = array_filter($_SESSION[$key], function($timestamp) use ($now, $decaySeconds) {
        return ($now - $timestamp) < $decaySeconds;
    });
    
    if (count($_SESSION[$key]) >= $maxRequests) {
        return true; // Exceeded limit
    }
    
    $_SESSION[$key][] = $now;
    return false;
}

// Sanitize string for HTML context
function sanitizeText($data) {
    return htmlspecialchars(trim($data ?? ''), ENT_QUOTES, 'UTF-8');
}
