<?php
/**
 * UrbanPest — Admin Booking Detail View
 * Full detail page for a single booking/service request
 */

$adminTitle = 'Booking Detail';
$adminCurrentPage = 'bookings';
require_once __DIR__ . '/header.php';
require_once __DIR__ . '/../data/config.php';
require_once __DIR__ . '/../partials/security.php';

$targetId = $_GET['id'] ?? '';

// Load from both data sources
$bookingsFile = __DIR__ . '/../data/bookings.json';
$leadsFile    = __DIR__ . '/../data/leads.json';

$bookings = [];
$leads = [];
if (file_exists($bookingsFile)) {
    $decoded = @json_decode(file_get_contents($bookingsFile), true);
    if (is_array($decoded)) $bookings = $decoded;
}
if (file_exists($leadsFile)) {
    $decoded = @json_decode(file_get_contents($leadsFile), true);
    if (is_array($decoded)) $leads = $decoded;
}

// Find the booking
$booking = null;
$source = 'bookings';
foreach ($bookings as $b) {
    if ($b['id'] === $targetId) { $booking = $b; break; }
}
if (!$booking) {
    foreach ($leads as $l) {
        if ($l['id'] === $targetId) { $booking = $l; $source = 'leads'; break; }
    }
}

if (!$booking) {
    echo '<div class="admin-alert admin-alert-error">Booking not found. <a href="/admin/bookings">Return to bookings</a></div>';
    require_once __DIR__ . '/footer.php';
    exit;
}

// Handle POST actions
$actionNotice = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $token = $_POST['csrf_token'] ?? '';
    if (!verifyCSRFToken($token)) {
        $actionNotice = '<div class="admin-alert admin-alert-error">Security token expired.</div>';
    } else {
        $action = $_POST['action'] ?? '';

        if ($action === 'update_status') {
            $booking['status'] = $_POST['status'] ?? 'new';
            $booking['notes'][] = [
                'date' => date('Y-m-d H:i:s'),
                'author' => $_SESSION['admin_username'] ?? 'Admin',
                'text' => 'Status updated to ' . str_replace('_', ' ', $booking['status'])
            ];
        }

        if ($action === 'assign_technician') {
            $booking['technician'] = trim($_POST['technician'] ?? '');
            $booking['notes'][] = [
                'date' => date('Y-m-d H:i:s'),
                'author' => $_SESSION['admin_username'] ?? 'Admin',
                'text' => 'Assigned to technician: ' . $booking['technician']
            ];
        }

        if ($action === 'schedule_date') {
            $booking['scheduled_date'] = trim($_POST['schedule_date'] ?? '');
            $booking['scheduled_time'] = trim($_POST['schedule_time'] ?? '');
            $booking['status'] = 'survey_scheduled';
            $booking['notes'][] = [
                'date' => date('Y-m-d H:i:s'),
                'author' => $_SESSION['admin_username'] ?? 'Admin',
                'text' => 'Scheduled for ' . $booking['scheduled_date'] . ' at ' . $booking['scheduled_time']
            ];
        }

        if ($action === 'add_note') {
            $noteText = trim($_POST['note_text'] ?? '');
            if (!empty($noteText)) {
                $booking['notes'][] = [
                    'date' => date('Y-m-d H:i:s'),
                    'author' => $_SESSION['admin_username'] ?? 'Admin',
                    'text' => $noteText
                ];
            }
        }

        // Save back
        if ($source === 'bookings') {
            foreach ($bookings as &$b) {
                if ($b['id'] === $targetId) { $b = $booking; break; }
            }
            unset($b);
            file_put_contents($bookingsFile, json_encode($bookings, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
        } else {
            foreach ($leads as &$l) {
                if ($l['id'] === $targetId) { $l = $booking; break; }
            }
            unset($l);
            file_put_contents($leadsFile, json_encode($leads, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
        }
        $actionNotice = '<div class="admin-alert admin-alert-success">Updated successfully.</div>';
    }
}

$statusLabels = [
    'new'              => ['label' => 'New Request',       'color' => '#EF4444'],
    'contacted'        => ['label' => 'Contacted',         'color' => '#F59E0B'],
    'survey_scheduled' => ['label' => 'Survey Scheduled',  'color' => '#3B82F6'],
    'quote_sent'       => ['label' => 'Quote Sent',        'color' => '#8B5CF6'],
    'approved'         => ['label' => 'Approved',          'color' => '#10B981'],
    'in_progress'      => ['label' => 'In Progress',       'color' => '#0EA5E9'],
    'completed'        => ['label' => 'Completed',         'color' => '#059669'],
    'closed_won'       => ['label' => 'Closed / Won',      'color' => '#047857'],
    'closed_lost'      => ['label' => 'Closed / Lost',     'color' => '#6B7280'],
];

$st = $booking['status'] ?? 'new';
$stInfo = $statusLabels[$st] ?? ['label' => ucfirst($st), 'color' => '#6B7280'];
$waMsg = "Hello " . ($booking['name'] ?? 'Client') . ", this is UrbanX Pest Control Perth. We're following up on your enquiry for " . ($booking['service_name'] ?? 'pest control') . ". How can we help?";
$waLink = 'https://wa.me/' . preg_replace('/[^\d]/', '', $booking['phone'] ?? '') . '?text=' . urlencode($waMsg);
?>

<?php echo $actionNotice; ?>

<div style="margin-bottom: 16px;">
  <a href="/admin/bookings" style="color: var(--admin-accent, #D91C24); text-decoration: none; font-size: 0.84rem; font-weight: 500;">
    ← Back to All Bookings
  </a>
</div>

<div style="display: grid; grid-template-columns: 2fr 1fr; gap: 24px;">
  <!-- Left Column: Client Details -->
  <div>
    <!-- Client Info Card -->
    <div class="admin-card" style="margin-bottom: 24px;">
      <div class="admin-card-header">
        <h2 class="admin-card-title">Client Information</h2>
        <span class="status-pill" style="background: <?php echo $stInfo['color']; ?>15; color: <?php echo $stInfo['color']; ?>; border: 1px solid <?php echo $stInfo['color']; ?>30; padding: 6px 14px; border-radius: 20px; font-size: 0.78rem; font-weight: 600;">
          <?php echo $stInfo['label']; ?>
        </span>
      </div>
      <div style="padding: 24px;">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
          <div>
            <div style="font-size: 0.75rem; font-weight: 600; color: var(--admin-text-muted); text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 4px;">Full Name</div>
            <div style="font-size: 0.95rem; font-weight: 600; color: var(--admin-navy);"><?php echo htmlspecialchars($booking['name'] ?? '—'); ?></div>
          </div>
          <div>
            <div style="font-size: 0.75rem; font-weight: 600; color: var(--admin-text-muted); text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 4px;">Company</div>
            <div style="font-size: 0.95rem; color: var(--admin-navy);"><?php echo htmlspecialchars($booking['company'] ?? '—'); ?></div>
          </div>
          <div>
            <div style="font-size: 0.75rem; font-weight: 600; color: var(--admin-text-muted); text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 4px;">Email</div>
            <a href="mailto:<?php echo htmlspecialchars($booking['email'] ?? ''); ?>" style="font-size: 0.9rem; color: var(--admin-accent, #D91C24); text-decoration: none;"><?php echo htmlspecialchars($booking['email'] ?? '—'); ?></a>
          </div>
          <div>
            <div style="font-size: 0.75rem; font-weight: 600; color: var(--admin-text-muted); text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 4px;">Phone</div>
            <a href="tel:<?php echo htmlspecialchars($booking['phone'] ?? ''); ?>" style="font-size: 0.9rem; color: var(--admin-navy); text-decoration: none; font-weight: 500;"><?php echo htmlspecialchars($booking['phone'] ?? '—'); ?></a>
          </div>
          <div>
            <div style="font-size: 0.75rem; font-weight: 600; color: var(--admin-text-muted); text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 4px;">Service Requested</div>
            <div style="font-size: 0.95rem; font-weight: 600; color: var(--admin-navy);"><?php echo htmlspecialchars($booking['service_name'] ?? 'General Enquiry'); ?></div>
          </div>
          <div>
            <div style="font-size: 0.75rem; font-weight: 600; color: var(--admin-text-muted); text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 4px;">Survey Scope</div>
            <?php 
            $scope = $booking['survey_scope'] ?? (stripos($booking['property_type'] ?? '', 'Commercial') !== false ? 'Commercial Survey' : 'Residential Survey');
            $isComm = stripos($scope, 'Commercial') !== false;
            ?>
            <span style="display: inline-block; font-size: 0.82rem; font-weight: 700; padding: 4px 10px; border-radius: 6px; <?php echo $isComm ? 'background: #EFF6FF; color: #1D4ED8; border: 1px solid #BFDBFE;' : 'background: #ECFDF5; color: #047857; border: 1px solid #A7F3D0;'; ?>">
              <?php echo $isComm ? '🏢 Commercial Survey' : '🏡 Residential Survey'; ?>
            </span>
          </div>
          <div style="grid-column: span 2;">
            <div style="font-size: 0.75rem; font-weight: 600; color: var(--admin-text-muted); text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 4px;">Client Message</div>
            <div style="font-size: 0.88rem; color: var(--admin-navy); line-height: 1.6; padding: 12px; background: var(--admin-bg); border-radius: 8px; border: 1px solid var(--admin-border);">
              <?php echo nl2br(htmlspecialchars($booking['message'] ?? 'No message provided.')); ?>
            </div>
          </div>
        </div>

        <!-- Quick Action Buttons -->
        <div style="display: flex; gap: 10px; margin-top: 24px; padding-top: 20px; border-top: 1px solid var(--admin-border);">
          <?php if (!empty($booking['phone'])): ?>
            <a href="<?php echo htmlspecialchars($waLink); ?>" target="_blank" class="btn-admin btn-whatsapp" style="padding: 8px 16px;">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.664-.698c.969.586 1.761.887 2.796.887 3.182 0 5.768-2.587 5.768-5.768.001-3.18-2.584-5.772-5.768-5.772zm3.393 8.163c-.144.405-.837.774-1.17.824-.312.045-.694.062-2.18-.553-1.898-.785-3.125-2.73-3.22-2.856-.095-.127-.768-1.021-.768-1.948 0-.927.489-1.383.663-1.572.174-.189.381-.237.508-.237.126 0 .253.002.364.007.117.006.275-.044.43.329.16.386.545 1.33.593 1.428.048.098.08.213.016.34-.064.127-.096.206-.19.317-.095.11-.2.246-.285.331-.095.095-.195.198-.084.388.111.19.493.813 1.057 1.317.727.649 1.339.851 1.53.946.19.095.302.079.414-.047.111-.127.476-.554.603-.744.127-.19.254-.159.428-.095.174.063 1.109.523 1.3.618.19.095.317.143.365.222.048.079.048.46-.096.865z"/></svg>
              WhatsApp Client
            </a>
            <a href="tel:<?php echo htmlspecialchars($booking['phone'] ?? ''); ?>" class="btn-admin btn-admin-outline" style="padding: 8px 16px;">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
              Call Client
            </a>
          <?php endif; ?>
          <a href="mailto:<?php echo htmlspecialchars($booking['email'] ?? ''); ?>" class="btn-admin btn-admin-outline" style="padding: 8px 16px;">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
            Email Client
          </a>
        </div>
      </div>
    </div>

    <!-- Notes Timeline -->
    <div class="admin-card">
      <div class="admin-card-header">
        <h2 class="admin-card-title">Activity Notes & Timeline</h2>
      </div>
      <div style="padding: 24px;">
        <!-- Add Note Form -->
        <form method="POST" style="margin-bottom: 24px;">
          <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars(generateCSRFToken()); ?>">
          <input type="hidden" name="action" value="add_note">
          <input type="hidden" name="booking_id" value="<?php echo htmlspecialchars($booking['id']); ?>">
          <div style="display: flex; gap: 8px;">
            <input type="text" name="note_text" placeholder="Add an internal note about this booking..." class="admin-input" style="flex: 1;" required>
            <button type="submit" class="btn-admin btn-admin-primary" style="padding: 8px 16px; white-space: nowrap;">Add Note</button>
          </div>
        </form>

        <!-- Notes List -->
        <?php
        $notes = array_reverse($booking['notes'] ?? []);
        if (empty($notes)):
        ?>
          <p style="color: var(--admin-text-muted); font-size: 0.84rem;">No notes recorded yet.</p>
        <?php else: ?>
          <div style="display: flex; flex-direction: column; gap: 16px;">
            <?php foreach ($notes as $note): ?>
              <div style="display: flex; gap: 12px; padding: 12px; background: var(--admin-bg); border-radius: 8px; border-left: 3px solid var(--admin-accent, #D91C24);">
                <div style="flex-shrink: 0; width: 32px; height: 32px; border-radius: 50%; background: var(--admin-accent, #D91C24); color: #fff; display: flex; align-items: center; justify-content: center; font-size: 0.72rem; font-weight: 700;">
                  <?php echo strtoupper(substr($note['author'] ?? 'S', 0, 1)); ?>
                </div>
                <div style="flex: 1;">
                  <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 4px;">
                    <span style="font-weight: 600; font-size: 0.82rem; color: var(--admin-navy);"><?php echo htmlspecialchars($note['author'] ?? 'System'); ?></span>
                    <span style="font-size: 0.72rem; color: var(--admin-text-muted);"><?php echo date('M d, Y H:i', strtotime($note['date'] ?? 'now')); ?></span>
                  </div>
                  <div style="font-size: 0.84rem; color: var(--admin-text); line-height: 1.5;"><?php echo htmlspecialchars($note['text'] ?? ''); ?></div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>

  <!-- Right Column: Actions & Status -->
  <div>
    <!-- Status Update -->
    <div class="admin-card" style="margin-bottom: 24px;">
      <div class="admin-card-header">
        <h2 class="admin-card-title">Update Status</h2>
      </div>
      <div style="padding: 20px;">
        <form method="POST">
          <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars(generateCSRFToken()); ?>">
          <input type="hidden" name="action" value="update_status">
          <input type="hidden" name="booking_id" value="<?php echo htmlspecialchars($booking['id']); ?>">
          <select name="status" class="admin-input" style="width: 100%; margin-bottom: 12px;">
            <?php foreach ($statusLabels as $sKey => $sInfo): ?>
              <option value="<?php echo $sKey; ?>" <?php echo $st === $sKey ? 'selected' : ''; ?>><?php echo $sInfo['label']; ?></option>
            <?php endforeach; ?>
          </select>
          <button type="submit" class="btn-admin btn-admin-primary" style="width: 100%;">Update Status</button>
        </form>
      </div>
    </div>

    <!-- Assign Technician -->
    <div class="admin-card" style="margin-bottom: 24px;">
      <div class="admin-card-header">
        <h2 class="admin-card-title">Assign Technician</h2>
      </div>
      <div style="padding: 20px;">
        <form method="POST">
          <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars(generateCSRFToken()); ?>">
          <input type="hidden" name="action" value="assign_technician">
          <input type="hidden" name="booking_id" value="<?php echo htmlspecialchars($booking['id']); ?>">
          <input type="text" name="technician" value="<?php echo htmlspecialchars($booking['technician'] ?? ''); ?>" placeholder="Technician name..." class="admin-input" style="width: 100%; margin-bottom: 12px;">
          <button type="submit" class="btn-admin btn-admin-primary" style="width: 100%;">Assign</button>
        </form>
      </div>
    </div>

    <!-- Schedule Service Date -->
    <div class="admin-card" style="margin-bottom: 24px;">
      <div class="admin-card-header">
        <h2 class="admin-card-title">Schedule Service</h2>
      </div>
      <div style="padding: 20px;">
        <form method="POST">
          <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars(generateCSRFToken()); ?>">
          <input type="hidden" name="action" value="schedule_date">
          <input type="hidden" name="booking_id" value="<?php echo htmlspecialchars($booking['id']); ?>">
          <label style="font-size: 0.78rem; font-weight: 600; color: var(--admin-text-muted); display: block; margin-bottom: 4px;">Date</label>
          <input type="date" name="schedule_date" value="<?php echo htmlspecialchars($booking['scheduled_date'] ?? ''); ?>" class="admin-input" style="width: 100%; margin-bottom: 12px;">
          <label style="font-size: 0.78rem; font-weight: 600; color: var(--admin-text-muted); display: block; margin-bottom: 4px;">Time</label>
          <input type="time" name="schedule_time" value="<?php echo htmlspecialchars($booking['scheduled_time'] ?? ''); ?>" class="admin-input" style="width: 100%; margin-bottom: 12px;">
          <button type="submit" class="btn-admin btn-admin-primary" style="width: 100%;">Schedule</button>
        </form>
      </div>
    </div>

    <!-- Metadata -->
    <div class="admin-card">
      <div class="admin-card-header">
        <h2 class="admin-card-title">Request Metadata</h2>
      </div>
      <div style="padding: 20px;">
        <div style="font-size: 0.78rem; color: var(--admin-text-muted); line-height: 2;">
          <div><strong>ID:</strong> <?php echo htmlspecialchars($booking['id'] ?? ''); ?></div>
          <div><strong>Received:</strong> <?php echo date('M d, Y H:i', strtotime($booking['created_at'] ?? 'now')); ?></div>
          <div><strong>IP Address:</strong> <?php echo htmlspecialchars($booking['ip'] ?? '—'); ?></div>
          <div><strong>Source:</strong> <?php echo ucfirst($source); ?></div>
        </div>

        <form method="POST" style="margin-top: 16px; padding-top: 16px; border-top: 1px solid var(--admin-border);">
          <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars(generateCSRFToken()); ?>">
          <input type="hidden" name="action" value="delete_booking">
          <input type="hidden" name="booking_id" value="<?php echo htmlspecialchars($booking['id']); ?>">
          <button type="submit" class="btn-admin btn-admin-outline" style="width: 100%; color: #EF4444; border-color: #FECACA;" onclick="return confirm('Are you sure you want to permanently delete this booking?');">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
            Delete This Booking
          </button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php require_once __DIR__ . '/footer.php'; ?>
