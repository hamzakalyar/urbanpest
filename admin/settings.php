<?php
/**
 * UrbanPest — Admin Settings & WhatsApp Gateway Configuration
 */

$adminTitle = 'System Settings & WhatsApp';
$adminCurrentPage = 'settings';
require_once __DIR__ . '/header.php';
require_once __DIR__ . '/../data/config.php';

$settingsFile = __DIR__ . '/../data/settings.json';
$actionNotice = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $token = $_POST['csrf_token'] ?? '';
    if (!verifyCSRFToken($token)) {
        $actionNotice = '<div class="admin-alert admin-alert-error">Security token expired. Please reload.</div>';
    } else {
        $formType = $_POST['form_type'] ?? '';

        // 1. Update Contact & WhatsApp Gateway
        if ($formType === 'whatsapp_settings') {
            $newWaNumber = trim($_POST['whatsapp_number'] ?? '');
            $newWaMsg    = trim($_POST['whatsapp_msg'] ?? '');
            $newPhone    = trim($_POST['phone_display'] ?? '');
            $newEmail    = trim($_POST['email_contact'] ?? '');

            if (!empty($newWaNumber)) {
                $appConfig['whatsapp_number'] = $newWaNumber;
                $appConfig['whatsapp_msg']    = $newWaMsg;
                $appConfig['phone_display']   = $newPhone;
                $appConfig['email_contact']   = $newEmail;

                file_put_contents($settingsFile, json_encode($appConfig, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
                $actionNotice = '<div class="admin-alert admin-alert-success">WhatsApp and communication settings saved successfully! All service pages and buttons are updated.</div>';
            } else {
                $actionNotice = '<div class="admin-alert admin-alert-error">WhatsApp number cannot be empty.</div>';
            }
        }

        // 2. Change Admin Password
        if ($formType === 'password_settings') {
            $currentPass = $_POST['current_password'] ?? '';
            $newPass     = $_POST['new_password'] ?? '';
            $confirmPass = $_POST['confirm_password'] ?? '';

            if (!password_verify($currentPass, $appConfig['admin_password_hash'])) {
                $actionNotice = '<div class="admin-alert admin-alert-error">Current password is incorrect.</div>';
            } elseif (strlen($newPass) < 8) {
                $actionNotice = '<div class="admin-alert admin-alert-error">New password must be at least 8 characters long.</div>';
            } elseif ($newPass !== $confirmPass) {
                $actionNotice = '<div class="admin-alert admin-alert-error">New passwords do not match.</div>';
            } else {
                $appConfig['admin_password_hash'] = password_hash($newPass, PASSWORD_DEFAULT);
                file_put_contents($settingsFile, json_encode($appConfig, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
                $actionNotice = '<div class="admin-alert admin-alert-success">Administrator password successfully updated!</div>';
            }
        }
    }
}
?>

<?php echo $actionNotice; ?>

<div style="display:grid; grid-template-columns: 1fr 1fr; gap: 24px;">
  <!-- WhatsApp & Direct Channels Gateway -->
  <div class="admin-card">
    <div class="admin-card-header">
      <div>
        <h2 class="admin-card-title">WhatsApp Business Gateway</h2>
        <p style="font-size:0.8125rem; color:var(--admin-text-muted); margin-top:2px;">
          Configures direct chat buttons on all service pages and the floating consultation widget.
        </p>
      </div>
    </div>

    <div style="padding: 24px;">
      <form method="POST" action="/admin/settings">
        <?php echo renderCSRFField(); ?>
        <input type="hidden" name="form_type" value="whatsapp_settings">

        <div style="margin-bottom: 20px;">
          <label style="display:block; font-size:0.85rem; font-weight:600; color:var(--admin-navy); margin-bottom:6px;">
            WhatsApp Phone Number (with Country Code)
          </label>
          <input type="text" name="whatsapp_number" class="search-input" style="width:100%; height:42px;" placeholder="+447946099100" value="<?php echo htmlspecialchars($appConfig['whatsapp_number']); ?>" required>
          <span style="font-size:0.75rem; color:var(--admin-text-muted);">
            Format: Include country code (e.g. <code>+44 7946 099100</code> or <code>+1 234 567 8900</code>).
          </span>
        </div>

        <div style="margin-bottom: 20px;">
          <label style="display:block; font-size:0.85rem; font-weight:600; color:var(--admin-navy); margin-bottom:6px;">
            Default WhatsApp Pre-filled Message
          </label>
          <textarea name="whatsapp_msg" class="search-input" style="width:100%; height:75px; resize:vertical;" placeholder="Hello UrbanPest, I would like to request an assessment..."><?php echo htmlspecialchars($appConfig['whatsapp_msg']); ?></textarea>
          <span style="font-size:0.75rem; color:var(--admin-text-muted);">
            Note: On individual service pages, the service name is automatically populated dynamically!
          </span>
        </div>

        <div style="margin-bottom: 20px;">
          <label style="display:block; font-size:0.85rem; font-weight:600; color:var(--admin-navy); margin-bottom:6px;">
            Public Company Phone Number
          </label>
          <input type="text" name="phone_display" class="search-input" style="width:100%; height:42px;" value="<?php echo htmlspecialchars($appConfig['phone_display']); ?>">
        </div>

        <div style="margin-bottom: 24px;">
          <label style="display:block; font-size:0.85rem; font-weight:600; color:var(--admin-navy); margin-bottom:6px;">
            Enquiry Notification Email
          </label>
          <input type="email" name="email_contact" class="search-input" style="width:100%; height:42px;" value="<?php echo htmlspecialchars($appConfig['email_contact']); ?>">
        </div>

        <button type="submit" class="btn-admin btn-admin-primary" style="width:100%; justify-content:center; height:42px;">
          Save WhatsApp & Channel Settings
        </button>
      </form>
    </div>
  </div>

  <!-- Security & Password Management -->
  <div class="admin-card">
    <div class="admin-card-header">
      <div>
        <h2 class="admin-card-title">Security & Credentials</h2>
        <p style="font-size:0.8125rem; color:var(--admin-text-muted); margin-top:2px;">
          Update the administrator master password for the UrbanPest management portal.
        </p>
      </div>
    </div>

    <div style="padding: 24px;">
      <form method="POST" action="/admin/settings">
        <?php echo renderCSRFField(); ?>
        <input type="hidden" name="form_type" value="password_settings">

        <div style="margin-bottom: 20px;">
          <label style="display:block; font-size:0.85rem; font-weight:600; color:var(--admin-navy); margin-bottom:6px;">
            Current Password
          </label>
          <input type="password" name="current_password" class="search-input" style="width:100%; height:42px;" required placeholder="••••••••••••">
        </div>

        <div style="margin-bottom: 20px;">
          <label style="display:block; font-size:0.85rem; font-weight:600; color:var(--admin-navy); margin-bottom:6px;">
            New Password (minimum 8 characters)
          </label>
          <input type="password" name="new_password" class="search-input" style="width:100%; height:42px;" required placeholder="••••••••••••">
        </div>

        <div style="margin-bottom: 24px;">
          <label style="display:block; font-size:0.85rem; font-weight:600; color:var(--admin-navy); margin-bottom:6px;">
            Confirm New Password
          </label>
          <input type="password" name="confirm_password" class="search-input" style="width:100%; height:42px;" required placeholder="••••••••••••">
        </div>

        <button type="submit" class="btn-admin btn-admin-outline" style="width:100%; justify-content:center; height:42px;">
          Update Administrator Password
        </button>
      </form>

      <div style="margin-top:24px; padding:14px; background:#F8FAFC; border-radius:var(--radius-md); font-size:0.775rem; color:var(--admin-text-muted); line-height:1.5;">
        <strong style="color:var(--admin-navy);">Session Protection:</strong> All passwords are encrypted with bcrypt (<code>PASSWORD_DEFAULT</code>) salt hashing. Session cookies are protected with HTTPOnly and SameSite flags.
      </div>
    </div>
  </div>
</div>

<?php require_once __DIR__ . '/footer.php'; ?>
