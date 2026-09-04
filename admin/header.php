<?php
/**
 * UrbanPest — Admin Shared Navigation Header & Sidebar
 */

require_once __DIR__ . '/auth.php';
requireAdminAuth();

// Count unread / new leads
$leadsFile = __DIR__ . '/../data/leads.json';
$allLeads = [];
if (file_exists($leadsFile)) {
    $decoded = @json_decode(file_get_contents($leadsFile), true);
    if (is_array($decoded)) {
        $allLeads = $decoded;
    }
}

$newLeadsCount = 0;
foreach ($allLeads as $l) {
    if (($l['status'] ?? '') === 'new') {
        $newLeadsCount++;
    }
}

$currentPage = $adminCurrentPage ?? 'dashboard';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($adminTitle ?? 'Admin Portal'); ?> — UrbanPest Commercial</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/css/admin.css">
  <link rel="icon" type="image/svg+xml" href="/assets/icons/favicon.svg">
</head>
<body class="admin-body">
  <div class="admin-layout">
    <!-- Sidebar -->
    <aside class="admin-sidebar">
      <a href="/admin/index.php" class="admin-brand">
        <div class="admin-brand-icon">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
          </svg>
        </div>
        <div class="admin-brand-text">
          UrbanPest <span>Admin</span>
        </div>
      </a>

      <nav class="admin-nav">
        <a href="/admin/index.php" class="admin-nav-item <?php echo ($currentPage === 'dashboard') ? 'active' : ''; ?>">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
          Dashboard
        </a>

        <a href="/admin/leads.php" class="admin-nav-item <?php echo ($currentPage === 'leads') ? 'active' : ''; ?>">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
          Enquiries & Leads
          <?php if ($newLeadsCount > 0): ?>
            <span class="admin-nav-badge"><?php echo $newLeadsCount; ?></span>
          <?php endif; ?>
        </a>

        <a href="/admin/export.php" class="admin-nav-item">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
          Export Leads (CSV)
        </a>

        <a href="/admin/settings.php" class="admin-nav-item <?php echo ($currentPage === 'settings') ? 'active' : ''; ?>">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
          Settings & WhatsApp
        </a>

        <div style="margin-top:auto; padding-top:20px;">
          <a href="/index.php" target="_blank" class="admin-nav-item" style="color:#38BDF8;">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
            Live Website ↗
          </a>
        </div>
      </nav>

      <div class="admin-user-bar">
        <div class="admin-user-info">
          <div class="admin-avatar">
            <?php echo strtoupper(substr($_SESSION['admin_username'] ?? 'A', 0, 1)); ?>
          </div>
          <div>
            <div class="admin-user-name"><?php echo htmlspecialchars($_SESSION['admin_username'] ?? 'Admin'); ?></div>
            <div class="admin-user-role">Super Administrator</div>
          </div>
        </div>
        <a href="/admin/logout.php" title="Sign Out" style="color:#94A3B8; display:flex; align-items:center;">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
        </a>
      </div>
    </aside>

    <!-- Main Content -->
    <main class="admin-main">
      <header class="admin-topbar">
        <h1 class="admin-page-title"><?php echo htmlspecialchars($adminTitle ?? 'Dashboard'); ?></h1>
        <div class="admin-actions">
          <a href="/admin/leads.php" class="btn-admin btn-admin-outline">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
            View Leads
          </a>
          <a href="/admin/export.php" class="btn-admin btn-admin-primary">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
            Export CSV
          </a>
        </div>
      </header>
      <div class="admin-content">
