<?php
/**
 * UrbanPest — Admin Leads & Enquiries Management
 */

$adminTitle = 'Commercial Enquiries & Leads';
$adminCurrentPage = 'leads';
require_once __DIR__ . '/header.php';
require_once __DIR__ . '/../data/config.php';

$leadsFile = __DIR__ . '/../data/leads.json';
$leads = [];
if (file_exists($leadsFile)) {
    $decoded = @json_decode(file_get_contents($leadsFile), true);
    if (is_array($decoded)) {
        $leads = $decoded;
    }
}

// Handle status updates or deletion via POST
$actionNotice = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $token = $_POST['csrf_token'] ?? '';
    if (!verifyCSRFToken($token)) {
        $actionNotice = '<div class="admin-alert admin-alert-error">Security token expired. Please reload.</div>';
    } else {
        $action = $_POST['action'] ?? '';
        $targetId = $_POST['lead_id'] ?? '';

        if ($action === 'update_status') {
            $newStatus = $_POST['status'] ?? 'new';
            foreach ($leads as &$item) {
                if ($item['id'] === $targetId) {
                    $item['status'] = $newStatus;
                    $item['notes'][] = [
                        'date'   => date('Y-m-d H:i:s'),
                        'author' => $_SESSION['admin_username'] ?? 'Admin',
                        'text'   => 'Status updated to ' . str_replace('_', ' ', $newStatus)
                    ];
                    break;
                }
            }
            file_put_contents($leadsFile, json_encode($leads, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
            $actionNotice = '<div class="admin-alert admin-alert-success">Lead status successfully updated.</div>';
        }

        if ($action === 'delete_lead') {
            $leads = array_values(array_filter($leads, function($item) use ($targetId) {
                return $item['id'] !== $targetId;
            }));
            file_put_contents($leadsFile, json_encode($leads, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
            $actionNotice = '<div class="admin-alert admin-alert-success">Lead record successfully removed.</div>';
        }
    }
}

// Filtering & Search
$filterStatus = $_GET['status'] ?? 'all';
$searchQuery  = strtolower(trim($_GET['q'] ?? ''));

$filteredLeads = array_filter($leads, function($lead) use ($filterStatus, $searchQuery) {
    // Status filter
    if ($filterStatus !== 'all' && ($lead['status'] ?? '') !== $filterStatus) {
        return false;
    }

    // Search query filter
    if (!empty($searchQuery)) {
        $haystack = strtolower(
            ($lead['name'] ?? '') . ' ' .
            ($lead['company'] ?? '') . ' ' .
            ($lead['email'] ?? '') . ' ' .
            ($lead['phone'] ?? '') . ' ' .
            ($lead['service_name'] ?? '') . ' ' .
            ($lead['message'] ?? '')
        );
        if (strpos($haystack, $searchQuery) === false) {
            return false;
        }
    }

    return true;
});
?>

<?php echo $actionNotice; ?>

<div class="admin-card">
  <div class="admin-card-header">
    <div>
      <h2 class="admin-card-title">Commercial Leads Directory</h2>
      <p style="font-size:0.8125rem; color:var(--admin-text-muted); margin-top:2px;">
        Showing <?php echo count($filteredLeads); ?> of <?php echo count($leads); ?> total customer requests
      </p>
    </div>

    <!-- Search and Filter Form -->
    <form method="GET" action="/admin/leads" class="filter-bar">
      <input type="text" name="q" class="search-input" placeholder="Search by name, company, email..." value="<?php echo htmlspecialchars($_GET['q'] ?? ''); ?>">
      
      <select name="status" class="filter-select" onchange="this.form.submit()">
        <option value="all" <?php echo ($filterStatus === 'all') ? 'selected' : ''; ?>>All Statuses</option>
        <option value="new" <?php echo ($filterStatus === 'new') ? 'selected' : ''; ?>>New Leads</option>
        <option value="contacted" <?php echo ($filterStatus === 'contacted') ? 'selected' : ''; ?>>Contacted</option>
        <option value="survey_scheduled" <?php echo ($filterStatus === 'survey_scheduled') ? 'selected' : ''; ?>>Survey Scheduled</option>
        <option value="proposal_sent" <?php echo ($filterStatus === 'proposal_sent') ? 'selected' : ''; ?>>Proposal Sent</option>
        <option value="closed_won" <?php echo ($filterStatus === 'closed_won') ? 'selected' : ''; ?>>Closed / Won</option>
        <option value="archived" <?php echo ($filterStatus === 'archived') ? 'selected' : ''; ?>>Archived</option>
      </select>

      <button type="submit" class="btn-admin btn-admin-outline" style="padding:8px 12px;">Filter</button>
      <?php if (!empty($searchQuery) || $filterStatus !== 'all'): ?>
        <a href="/admin/leads" class="btn-admin btn-admin-outline" style="padding:8px 12px; color:#DC2626;">Clear</a>
      <?php endif; ?>
    </form>
  </div>

  <div class="table-responsive">
    <table class="admin-table">
      <thead>
        <tr>
          <th>Date & ID</th>
          <th>Client & Company</th>
          <th>Contact Info</th>
          <th>Service Requested</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php if (empty($filteredLeads)): ?>
          <tr>
            <td colspan="6" style="text-align:center; padding: 50px 20px; color:var(--admin-text-muted);">
              No enquiries match your selected filters. Try changing or clearing your search criteria.
            </td>
          </tr>
        <?php else: ?>
          <?php foreach ($filteredLeads as $lead): 
            $st = $lead['status'] ?? 'new';
            $waMsg = "Hello " . $lead['name'] . ", thank you for contacting UrbanPest regarding " . ($lead['service_name'] ?? 'commercial pest control') . ". I am following up on your enquiry.";
            $waLink = 'https://wa.me/' . preg_replace('/[^\d]/', '', $lead['phone']) . '?text=' . urlencode($waMsg);
          ?>
            <tr>
              <td>
                <div style="font-weight:600; color:var(--admin-navy); font-size:0.825rem;">
                  <?php echo date('M d, Y', strtotime($lead['created_at'])); ?>
                </div>
                <div style="font-size:0.75rem; color:var(--admin-text-muted); font-family:monospace;">
                  <?php echo htmlspecialchars($lead['id']); ?>
                </div>
              </td>
              <td>
                <strong style="color:var(--admin-navy); font-size:0.95rem;"><?php echo htmlspecialchars($lead['name']); ?></strong>
                <div style="font-size:0.8125rem; color:var(--admin-text-muted); font-weight:500;"><?php echo htmlspecialchars($lead['company']); ?></div>
              </td>
              <td>
                <div style="font-size:0.825rem;"><a href="mailto:<?php echo htmlspecialchars($lead['email']); ?>" style="color:var(--admin-emerald); text-decoration:none;"><?php echo htmlspecialchars($lead['email']); ?></a></div>
                <div style="font-size:0.8rem; color:var(--admin-text-muted);"><?php echo htmlspecialchars($lead['phone']); ?></div>
              </td>
              <td>
                <span style="font-weight:600; color:var(--admin-navy);"><?php echo htmlspecialchars($lead['service_name'] ?? 'General Enquiry'); ?></span>
                <div style="font-size:0.75rem; color:var(--admin-text-muted); max-width:240px; white-space:nowrap; overflow:hidden; text-overflow:ellipsis;">
                  <?php echo htmlspecialchars($lead['message'] ?? ''); ?>
                </div>
              </td>
              <td>
                <!-- Inline Status Changer -->
                <form method="POST" action="/admin/leads" style="display:inline-block;">
                  <?php echo renderCSRFField(); ?>
                  <input type="hidden" name="action" value="update_status">
                  <input type="hidden" name="lead_id" value="<?php echo htmlspecialchars($lead['id']); ?>">
                  <select name="status" onchange="this.form.submit()" style="padding:4px 8px; border-radius:6px; font-size:0.75rem; font-weight:600; border:1px solid var(--admin-border); cursor:pointer;">
                    <option value="new" <?php echo ($st === 'new') ? 'selected' : ''; ?>>New</option>
                    <option value="contacted" <?php echo ($st === 'contacted') ? 'selected' : ''; ?>>Contacted</option>
                    <option value="survey_scheduled" <?php echo ($st === 'survey_scheduled') ? 'selected' : ''; ?>>Survey Scheduled</option>
                    <option value="proposal_sent" <?php echo ($st === 'proposal_sent') ? 'selected' : ''; ?>>Proposal Sent</option>
                    <option value="closed_won" <?php echo ($st === 'closed_won') ? 'selected' : ''; ?>>Closed / Won</option>
                    <option value="archived" <?php echo ($st === 'archived') ? 'selected' : ''; ?>>Archived</option>
                  </select>
                </form>
              </td>
              <td>
                <div style="display:flex; align-items:center; gap:8px;">
                  <a href="/admin/lead-detail?id=<?php echo urlencode($lead['id']); ?>" class="btn-admin btn-admin-outline" style="padding:4px 10px; font-size:0.75rem;">
                    View & Notes
                  </a>
                  <?php if (!empty($lead['phone'])): ?>
                    <a href="<?php echo htmlspecialchars($waLink); ?>" target="_blank" class="btn-whatsapp" title="Open Client WhatsApp Chat">
                      <svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.664-.698c.969.586 1.761.887 2.796.887 3.182 0 5.768-2.587 5.768-5.768.001-3.18-2.584-5.772-5.768-5.772zm3.393 8.163c-.144.405-.837.774-1.17.824-.312.045-.694.062-2.18-.553-1.898-.785-3.125-2.73-3.22-2.856-.095-.127-.768-1.021-.768-1.948 0-.927.489-1.383.663-1.572.174-.189.381-.237.508-.237.126 0 .253.002.364.007.117.006.275-.044.43.329.16.386.545 1.33.593 1.428.048.098.08.213.016.34-.064.127-.096.206-.19.317-.095.11-.2.246-.285.331-.095.095-.195.198-.084.388.111.19.493.813 1.057 1.317.727.649 1.339.851 1.53.946.19.095.302.079.414-.047.111-.127.476-.554.603-.744.127-.19.254-.159.428-.095.174.063 1.109.523 1.3.618.19.095.317.143.365.222.048.079.048.46-.096.865z"/></svg>
                      WhatsApp
                    </a>
                  <?php endif; ?>
                  <!-- Delete Action -->
                  <form method="POST" action="/admin/leads" onsubmit="return confirm('Permanently delete this enquiry record?');" style="display:inline;">
                    <?php echo renderCSRFField(); ?>
                    <input type="hidden" name="action" value="delete_lead">
                    <input type="hidden" name="lead_id" value="<?php echo htmlspecialchars($lead['id']); ?>">
                    <button type="submit" style="background:none; border:none; color:#94A3B8; cursor:pointer; padding:4px;" title="Delete Record">
                      <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                    </button>
                  </form>
                </div>
              </td>
            </tr>
          <?php endforeach; ?>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
</div>

<?php require_once __DIR__ . '/footer.php'; ?>
