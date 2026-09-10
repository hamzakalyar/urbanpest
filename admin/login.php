<?php
/**
 * UrbanPest — Admin Portal Login
 */

require_once __DIR__ . '/auth.php';

// If already logged in, redirect to dashboard
if (!empty($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
    header('Location: /admin');
    exit;
}

$errorMsg = '';
$returnUrl = $_GET['return'] ?? '/admin';

// Process login submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $token = $_POST['csrf_token'] ?? '';
    if (!verifyCSRFToken($token)) {
        $errorMsg = 'Security token invalid or expired. Please reload and try again.';
    } else {
        $username = trim($_POST['username'] ?? '');
        $password = trim($_POST['password'] ?? '');

        $result = attemptAdminLogin($username, $password);
        if ($result['success']) {
            $dest = !empty($_POST['return']) ? $_POST['return'] : '/admin';
            header('Location: ' . $dest);
            exit;
        } else {
            $errorMsg = $result['error'];
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Portal Login — UrbanX Pest Control</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/css/admin.css">
  <link rel="icon" type="image/png" sizes="64x64" href="/assets/images/favicon.png">
  <link rel="icon" type="image/x-icon" href="/favicon.ico">
  <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/apple-touch-icon.png">
</head>
<body class="admin-body">
  <div class="login-wrap">
    <div class="login-card">
      <div class="login-header">
        <div style="margin-bottom: 12px;">
          <img src="/assets/images/logo-shield.png" alt="UrbanX Pest Control" style="height: 64px; width: auto; object-fit: contain;">
        </div>
        <h1>UrbanX Admin</h1>
        <p>Perth Pest Management & Booking Administration</p>
      </div>

      <?php if (!empty($errorMsg)): ?>
        <div class="admin-alert admin-alert-error">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
          <?php echo htmlspecialchars($errorMsg); ?>
        </div>
      <?php endif; ?>

      <?php if (isset($_GET['logged_out'])): ?>
        <div class="admin-alert admin-alert-success">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
          You have successfully logged out.
        </div>
      <?php endif; ?>

      <form method="POST" action="/admin/login">
        <?php echo renderCSRFField(); ?>
        <input type="hidden" name="return" value="<?php echo htmlspecialchars($returnUrl); ?>">

        <div style="margin-bottom: 18px;">
          <label style="display:block; font-size:0.8125rem; font-weight:600; color:var(--admin-text); margin-bottom:6px;">Username</label>
          <input type="text" name="username" class="search-input" style="width:100%; height:42px;" placeholder="admin" required autofocus value="<?php echo htmlspecialchars($_POST['username'] ?? 'admin'); ?>">
        </div>

        <div style="margin-bottom: 24px;">
          <label style="display:block; font-size:0.8125rem; font-weight:600; color:var(--admin-text); margin-bottom:6px;">Password</label>
          <input type="password" name="password" class="search-input" style="width:100%; height:42px;" placeholder="••••••••••••" required>
        </div>

        <button type="submit" class="btn-admin btn-admin-primary" style="width:100%; justify-content:center; height:44px; font-size:0.95rem;">
          Sign In to Dashboard
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
        </button>
      </form>

      <div style="margin-top: 24px; text-align: center;">
        <a href="/" style="font-size: 0.825rem; color: var(--admin-text-muted); text-decoration: none;">← Return to UrbanX Main Website</a>
      </div>
    </div>
  </div>
</body>
</html>
