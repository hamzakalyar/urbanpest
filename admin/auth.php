<?php
/**
 * UrbanPest — Admin Authentication Middleware
 * Manages admin session verification, password checking, and role protection.
 */

require_once __DIR__ . '/../partials/security.php';
require_once __DIR__ . '/../data/config.php';

initSecuritySession();
emitSecurityHeaders();

/**
 * Protect admin routes. Call at the top of every admin view.
 */
function requireAdminAuth() {
    if (empty($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
        $returnUrl = urlencode($_SERVER['REQUEST_URI'] ?? '/admin/index.php');
        header('Location: /admin/login.php?return=' . $returnUrl);
        exit;
    }
}

/**
 * Attempt credentials verification
 */
function attemptAdminLogin($username, $password) {
    global $appConfig;

    // Rate limiting login attempts (max 5 attempts per 60s per session/IP)
    if (isRateLimited('admin_login', 5, 60)) {
        return ['success' => false, 'error' => 'Too many login attempts. Please wait 60 seconds before trying again.'];
    }

    $validUser = $appConfig['admin_username'];
    $hash = $appConfig['admin_password_hash'];

    if (hash_equals($validUser, $username) && password_verify($password, $hash)) {
        // Prevent session fixation
        session_regenerate_id(true);
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_username']  = $username;
        $_SESSION['admin_login_at']  = time();
        return ['success' => true];
    }

    return ['success' => false, 'error' => 'Invalid username or password.'];
}

/**
 * Log out and destroy session
 */
function adminLogout() {
    initSecuritySession();
    $_SESSION = [];
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }
    @session_destroy();
    header('Location: /admin/login.php?logged_out=1');
    exit;
}
