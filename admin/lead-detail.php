<?php
/**
 * UrbanPest — Lead Detail & Technician Notes
 */

$adminTitle = 'Enquiry Details';
$adminCurrentPage = 'leads';
require_once __DIR__ . '/header.php';
require_once __DIR__ . '/../data/config.php';

$leadId = $_GET['id'] ?? '';
$leadsFile = __DIR__ . '/../data/leads.json';
$leads = [];
if (file_exists($leadsFile)) {
    $decoded = @json_decode(file_get_contents($leadsFile), true);
    if (is_array($decoded)) {
        $leads = $decoded;
    }
}

// Find target lead
$targetIndex = -1;
foreach ($leads as $idx => $item) {
    if ($item['id'] === $leadId) {
        $targetIndex = $idx;
        break;
    }
}

if ($targetIndex === -1) {
    echo '<div class="admin-alert admin-alert-error">Lead not found. <a href="/admin/leads">Return to directory</a></div>';
    require_once __DIR__ . '/footer.php';
    exit;
}

$lead = &$leads[$targetIndex];
$actionNotice = '';

// Handle status change or new note POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $token = $_POST['csrf_token'] ?? '';
    if (!verifyCSRFToken($token)) {
        $actionNotice = '<div class="admin-alert admin-alert-error">Security token expired. Please reload.</div>';
    } else {
        $action = $_POST['action'] ?? '';

        if ($action === 'add_note') {
            $noteText = trim($_POST['note_text'] ?? '');
            if (!empty($noteText)) {
                $lead['notes'][] = [
                    'date'   => date('Y-m-d H:i:s'),
                    'author' => $_SESSION['admin_username'] ?? 'Admin',
                    'text'   => $noteText
                ];
                file_put_contents($leadsFile, json_encode($leads, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
                $actionNotice = '<div class="admin-alert admin-alert-success">Note recorded in audit trail.</div>';
            }
        }

        if ($action === 'update_status') {
            $newStatus = $_POST['status'] ?? 'new';
            $lead['status'] = $newStatus;
            $lead['notes'][] = [
                'date'   => date('Y-m-d H:i:s'),
                'author' => $_SESSION['admin_username'] ?? 'Admin',
                'text'   => 'Status changed to ' . str_replace('_', ' ', $newStatus)
            ];
            file_put_contents($leadsFile, json_encode($leads, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
            $actionNotice = '<div class="admin-alert admin-alert-success">Status updated.</div>';
        }
    }
}

$st = $lead['status'] ?? 'new';
$waMsg = "Hello " . $lead['name'] . ", this is UrbanPest commercial dispatch regarding your request for " . ($lead['service_name'] ?? 'commercial pest control') . ".";
$waLink = 'https://wa.me/' . preg_replace('/[^\d]/', '', $lead['phone']) . '?text=' . urlencode($waMsg);
?>

<?php echo $actionNotice; ?>

<div style="margin-bottom: 20px;">
  <a href="/admin/leads" style="color:var(--admin-text-muted); text-decoration:none; font-size:0.875rem; font-weight:500;">
    ← Back to All Enquiries
  </a>
</div>

<div style="display:grid; grid-template-columns: 2fr 1fr; gap: 24px;">
  <!-- Main Enquiry Card -->
  <div>
    <div class="admin-card">
      <div class="admin-card-header">
        <div>
          <span class="status-pill <?php echo htmlspecialchars($st); ?>" style="margin-bottom:8px;">
            <?php echo str_replace('_', ' ', htmlspecialchars($st)); ?>
          </span>
          <h2 class="admin-card-title"><?php echo htmlspecialchars($lead['name']); ?> — <?php echo htmlspecialchars($lead['company']); ?></h2>
          <div style="font-size:0.8125rem; color:var(--admin-text-muted); margin-top:4px;">
            Submitted on <?php echo date('F j, Y \a\t g:i A', strtotime($lead['created_at'])); ?> • Lead ID: <code><?php echo htmlspecialchars($lead['id']); ?></code>
          </div>
        </div>

        <div style="display:flex; gap:10px;">
          <?php if (!empty($lead['phone'])): ?>
            <a href="<?php echo htmlspecialchars($waLink); ?>" target="_blank" class="btn-whatsapp">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.664-.698c.969.586 1.761.887 2.796.887 3.182 0 5.768-2.587 5.768-5.768.001-3.18-2.584-5.772-5.768-5.772zm3.393 8.163c-.144.405-.837.774-1.17.824-.312.045-.694.062-2.18-.553-1.898-.785-3.125-2.73-3.22-2.856-.095-.127-.768-1.021-.768-1.948 0-.927.489-1.383.663-1.572.174-.189.381-.237.508-.237.126 0 .253.002.364.007.117.006.275-.044.43.329.16.386.545 1.33.593 1.428.048.098.08.213.016.34-.064.127-.096.206-.19.317-.095.11-.2.246-.285.331-.095.095-.195.198-.084.388.111.19.493.813 1.057 1.317.727.649 1.339.851 1.53.946.19.095.302.079.414-.047.111-.127.476-.554.603-.744.127-.19.254-.159.428-.095.174.063 1.109.523 1.3.618.19.095.317.143.365.222.048.079.048.46-.096.865z"/></svg>
              Chat on WhatsApp
            </a>
          <?php endif; ?>
        </div>
      </div>

      <div style="padding: 24px;">
        <h4 style="font-size:0.875rem; text-transform:uppercase; letter-spacing:0.05em; color:var(--admin-text-muted); margin-bottom:10px;">
          Commercial Service Requested
        </h4>
        <div style="padding:14px 18px; background:#F8FAFC; border-radius:var(--radius-md); border-left:4px solid var(--admin-emerald); margin-bottom:24px;">
          <strong style="color:var(--admin-navy); font-size:1.05rem;"><?php echo htmlspecialchars($lead['service_name'] ?? 'General Pest Control'); ?></strong>
          <div style="font-size:0.8rem; color:var(--admin-text-muted); margin-top:2px;">Service Code: <code><?php echo htmlspecialchars($lead['service'] ?? 'general'); ?></code></div>
        </div>

        <h4 style="font-size:0.875rem; text-transform:uppercase; letter-spacing:0.05em; color:var(--admin-text-muted); margin-bottom:10px;">
          Customer Message & Facility Specifications
        </h4>
        <div style="padding:18px; background:#F8FAFC; border-radius:var(--radius-md); border:1px solid var(--admin-border); line-height:1.6; font-size:0.95rem; color:var(--admin-text); white-space:pre-wrap; margin-bottom:30px;">
<?php echo htmlspecialchars($lead['message'] ?? 'No message text provided.'); ?>
        </div>

        <!-- Internal Notes & Timeline -->
        <h3 style="font-family:var(--admin-heading-font); font-size:1.15rem; color:var(--admin-navy); margin-bottom:16px;">
          Operational Audit Trail & Notes
        </h3>

        <div style="display:flex; flex-direction:column; gap:12px; margin-bottom:24px;">
          <?php if (empty($lead['notes'])): ?>
            <p style="color:var(--admin-text-muted); font-size:0.875rem;">No notes recorded yet.</p>
          <?php else: ?>
            <?php foreach ($lead['notes'] as $note): ?>
              <div style="padding:12px 16px; background:#FFFFFF; border-radius:var(--radius-md); border:1px solid var(--admin-border); box-shadow:var(--shadow-sm);">
                <div style="display:flex; justify-content:space-between; font-size:0.75rem; color:var(--admin-text-muted); margin-bottom:4px;">
                  <strong style="color:var(--admin-navy);"><?php echo htmlspecialchars($note['author'] ?? 'Admin'); ?></strong>
                  <span><?php echo date('M d, Y H:i', strtotime($note['date'])); ?></span>
                </div>
                <div style="font-size:0.875rem; color:var(--admin-text); line-height:1.5;">
                  <?php echo htmlspecialchars($note['text']); ?>
                </div>
              </div>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>

        <!-- Add Note Form -->
        <form method="POST" action="/admin/lead-detail?id=<?php echo urlencode($lead['id']); ?>" style="display:flex; gap:10px;">
          <?php echo renderCSRFField(); ?>
          <input type="hidden" name="action" value="add_note">
          <input type="text" name="note_text" class="search-input" style="flex:1; width:auto;" placeholder="Add internal technician note or dispatch update..." required>
          <button type="submit" class="btn-admin btn-admin-primary">Add Note</button>
        </form>
      </div>
    </div>
  </div>

  <!-- Sidebar Info & Controls -->
  <div>
    <!-- Status Control -->
    <div class="admin-card">
      <div class="admin-card-header">
        <h3 class="admin-card-title" style="font-size:1rem;">Lifecycle Status</h3>
      </div>
      <div style="padding: 20px;">
        <form method="POST" action="/admin/lead-detail?id=<?php echo urlencode($lead['id']); ?>">
          <?php echo renderCSRFField(); ?>
          <input type="hidden" name="action" value="update_status">
          <select name="status" class="filter-select" style="width:100%; margin-bottom:14px;">
            <option value="new" <?php echo ($st === 'new') ? 'selected' : ''; ?>>New Lead</option>
            <option value="contacted" <?php echo ($st === 'contacted') ? 'selected' : ''; ?>>Contacted</option>
            <option value="survey_scheduled" <?php echo ($st === 'survey_scheduled') ? 'selected' : ''; ?>>Survey Scheduled</option>
            <option value="proposal_sent" <?php echo ($st === 'proposal_sent') ? 'selected' : ''; ?>>Proposal Sent</option>
            <option value="closed_won" <?php echo ($st === 'closed_won') ? 'selected' : ''; ?>>Closed / Won</option>
            <option value="archived" <?php echo ($st === 'archived') ? 'selected' : ''; ?>>Archived</option>
          </select>
          <button type="submit" class="btn-admin btn-admin-outline" style="width:100%; justify-content:center;">
            Update Pipeline Status
          </button>
        </form>
      </div>
    </div>

    <!-- Contact Metadata -->
    <div class="admin-card">
      <div class="admin-card-header">
        <h3 class="admin-card-title" style="font-size:1rem;">Contact Card</h3>
      </div>
      <div style="padding: 20px; font-size:0.875rem; display:flex; flex-direction:column; gap:14px;">
        <div>
          <div style="font-size:0.75rem; color:var(--admin-text-muted); text-transform:uppercase;">Email</div>
          <a href="mailto:<?php echo htmlspecialchars($lead['email']); ?>" style="color:var(--admin-emerald); font-weight:600; text-decoration:none;">
            <?php echo htmlspecialchars($lead['email']); ?>
          </a>
        </div>

        <div>
          <div style="font-size:0.75rem; color:var(--admin-text-muted); text-transform:uppercase;">Phone</div>
          <a href="tel:<?php echo htmlspecialchars($lead['phone']); ?>" style="color:var(--admin-navy); font-weight:600; text-decoration:none;">
            <?php echo htmlspecialchars($lead['phone']); ?>
          </a>
        </div>

        <div>
          <div style="font-size:0.75rem; color:var(--admin-text-muted); text-transform:uppercase;">Client IP</div>
          <code><?php echo htmlspecialchars($lead['ip'] ?? '127.0.0.1'); ?></code>
        </div>

        <div>
          <div style="font-size:0.75rem; color:var(--admin-text-muted); text-transform:uppercase;">User Agent</div>
          <span style="font-size:0.75rem; color:var(--admin-text-muted); word-break:break-all;">
            <?php echo htmlspecialchars($lead['user_agent'] ?? 'Browser'); ?>
          </span>
        </div>
      </div>
    </div>
  </div>
</div>

<?php require_once __DIR__ . '/footer.php'; ?>
