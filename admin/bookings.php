<?php
/**
 * UrbanPest — Admin Bookings & Service Requests Pipeline
 * Full booking management: view, filter, update status, assign technicians, schedule dates
 */

$adminTitle = 'Bookings & Service Requests';
$adminCurrentPage = 'bookings';
require_once __DIR__ . '/header.php';
require_once __DIR__ . '/../data/config.php';
require_once __DIR__ . '/../partials/security.php';

$bookingsFile = __DIR__ . '/../data/bookings.json';
$bookings = [];
if (file_exists($bookingsFile)) {
    $decoded = @json_decode(file_get_contents($bookingsFile), true);
    if (is_array($decoded)) {
        $bookings = $decoded;
    }
}

// Also load leads and merge them as bookings if they have a service selected
$leadsFile = __DIR__ . '/../data/leads.json';
$leads = [];
if (file_exists($leadsFile)) {
    $decoded = @json_decode(file_get_contents($leadsFile), true);
    if (is_array($decoded)) {
        $leads = $decoded;
    }
}

// Handle POST actions
$actionNotice = '';
if (($_SERVER['REQUEST_METHOD'] ?? '') === 'POST') {
    $token = $_POST['csrf_token'] ?? '';
    if (!verifyCSRFToken($token)) {
        $actionNotice = '<div class="admin-alert admin-alert-error">Security token expired. Please reload.</div>';
    } else {
        $action = $_POST['action'] ?? '';
        $targetId = $_POST['booking_id'] ?? '';

        // Update booking status
        if ($action === 'update_status') {
            $newStatus = $_POST['status'] ?? 'new';
            $found = false;

            // Check bookings first
            foreach ($bookings as &$item) {
                if ($item['id'] === $targetId) {
                    $item['status'] = $newStatus;
                    $item['updated_at'] = date('Y-m-d H:i:s');
                    $item['notes'][] = [
                        'date'   => date('Y-m-d H:i:s'),
                        'author' => $_SESSION['admin_username'] ?? 'Admin',
                        'text'   => 'Status updated to ' . str_replace('_', ' ', $newStatus)
                    ];
                    $found = true;
                    break;
                }
            }
            unset($item);

            // Also check leads
            if (!$found) {
                foreach ($leads as &$item) {
                    if ($item['id'] === $targetId) {
                        $item['status'] = $newStatus;
                        $item['notes'][] = [
                            'date'   => date('Y-m-d H:i:s'),
                            'author' => $_SESSION['admin_username'] ?? 'Admin',
                            'text'   => 'Status updated to ' . str_replace('_', ' ', $newStatus)
                        ];
                        $found = true;
                        break;
                    }
                }
                unset($item);
                file_put_contents($leadsFile, json_encode($leads, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
            }

            file_put_contents($bookingsFile, json_encode($bookings, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
            $actionNotice = '<div class="admin-alert admin-alert-success">Booking status updated successfully.</div>';
        }

        // Assign technician
        if ($action === 'assign_technician') {
            $techName = trim($_POST['technician'] ?? '');
            foreach ($bookings as &$item) {
                if ($item['id'] === $targetId) {
                    $item['technician'] = $techName;
                    $item['updated_at'] = date('Y-m-d H:i:s');
                    $item['notes'][] = [
                        'date'   => date('Y-m-d H:i:s'),
                        'author' => $_SESSION['admin_username'] ?? 'Admin',
                        'text'   => 'Assigned to technician: ' . $techName
                    ];
                    break;
                }
            }
            unset($item);
            foreach ($leads as &$item) {
                if ($item['id'] === $targetId) {
                    $item['technician'] = $techName;
                    $item['notes'][] = [
                        'date'   => date('Y-m-d H:i:s'),
                        'author' => $_SESSION['admin_username'] ?? 'Admin',
                        'text'   => 'Assigned to technician: ' . $techName
                    ];
                    break;
                }
            }
            unset($item);
            file_put_contents($bookingsFile, json_encode($bookings, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
            file_put_contents($leadsFile, json_encode($leads, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
            $actionNotice = '<div class="admin-alert admin-alert-success">Technician assigned successfully.</div>';
        }

        // Schedule date
        if ($action === 'schedule_date') {
            $schedDate = trim($_POST['schedule_date'] ?? '');
            $schedTime = trim($_POST['schedule_time'] ?? '');
            foreach ($bookings as &$item) {
                if ($item['id'] === $targetId) {
                    $item['scheduled_date'] = $schedDate;
                    $item['scheduled_time'] = $schedTime;
                    $item['status'] = 'survey_scheduled';
                    $item['updated_at'] = date('Y-m-d H:i:s');
                    $item['notes'][] = [
                        'date'   => date('Y-m-d H:i:s'),
                        'author' => $_SESSION['admin_username'] ?? 'Admin',
                        'text'   => 'Scheduled for ' . $schedDate . ' at ' . $schedTime
                    ];
                    break;
                }
            }
            unset($item);
            foreach ($leads as &$item) {
                if ($item['id'] === $targetId) {
                    $item['scheduled_date'] = $schedDate;
                    $item['scheduled_time'] = $schedTime;
                    $item['status'] = 'survey_scheduled';
                    $item['notes'][] = [
                        'date'   => date('Y-m-d H:i:s'),
                        'author' => $_SESSION['admin_username'] ?? 'Admin',
                        'text'   => 'Scheduled for ' . $schedDate . ' at ' . $schedTime
                    ];
                    break;
                }
            }
            unset($item);
            file_put_contents($bookingsFile, json_encode($bookings, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
            file_put_contents($leadsFile, json_encode($leads, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
            $actionNotice = '<div class="admin-alert admin-alert-success">Service date scheduled successfully.</div>';
        }

        // Delete booking
        if ($action === 'delete_booking') {
            $bookings = array_values(array_filter($bookings, function($item) use ($targetId) {
                return $item['id'] !== $targetId;
            }));
            $leads = array_values(array_filter($leads, function($item) use ($targetId) {
                return $item['id'] !== $targetId;
            }));
            file_put_contents($bookingsFile, json_encode($bookings, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
            file_put_contents($leadsFile, json_encode($leads, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
            $actionNotice = '<div class="admin-alert admin-alert-success">Booking removed successfully.</div>';
        }

        // Add note
        if ($action === 'add_note') {
            $noteText = trim($_POST['note_text'] ?? '');
            if (!empty($noteText)) {
                $noteEntry = [
                    'date'   => date('Y-m-d H:i:s'),
                    'author' => $_SESSION['admin_username'] ?? 'Admin',
                    'text'   => $noteText
                ];
                foreach ($bookings as &$item) {
                    if ($item['id'] === $targetId) {
                        $item['notes'][] = $noteEntry;
                        break;
                    }
                }
                unset($item);
                foreach ($leads as &$item) {
                    if ($item['id'] === $targetId) {
                        $item['notes'][] = $noteEntry;
                        break;
                    }
                }
                unset($item);
                file_put_contents($bookingsFile, json_encode($bookings, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
                file_put_contents($leadsFile, json_encode($leads, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
                $actionNotice = '<div class="admin-alert admin-alert-success">Note added.</div>';
            }
        }
    }
}

// Merge bookings + leads into a single pipeline (dedupe by id)
$allRequests = [];
$seenIds = [];
foreach ($bookings as $b) {
    $allRequests[] = $b;
    $seenIds[$b['id']] = true;
}
foreach ($leads as $l) {
    if (!isset($seenIds[$l['id']])) {
        $allRequests[] = $l;
    }
}

// Sort by date descending
usort($allRequests, function($a, $b) {
    return strtotime($b['created_at'] ?? '2000-01-01') - strtotime($a['created_at'] ?? '2000-01-01');
});

// Filtering
$filterStatus  = $_GET['status'] ?? 'all';
$filterService = $_GET['service'] ?? 'all';
$searchQuery   = strtolower(trim($_GET['q'] ?? ''));

$filteredRequests = array_filter($allRequests, function($req) use ($filterStatus, $filterService, $searchQuery) {
    if ($filterStatus !== 'all' && ($req['status'] ?? '') !== $filterStatus) return false;
    if ($filterService !== 'all' && ($req['service'] ?? '') !== $filterService) return false;
    if (!empty($searchQuery)) {
        $haystack = strtolower(
            ($req['name'] ?? '') . ' ' . ($req['company'] ?? '') . ' ' .
            ($req['email'] ?? '') . ' ' . ($req['phone'] ?? '') . ' ' .
            ($req['service_name'] ?? '') . ' ' . ($req['message'] ?? '')
        );
        if (strpos($haystack, $searchQuery) === false) return false;
    }
    return true;
});

$filteredRequests = array_values($filteredRequests);

// Status definitions
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

// Count by status for pills
$statusCounts = ['all' => count($allRequests)];
foreach ($allRequests as $r) {
    $st = $r['status'] ?? 'new';
    $statusCounts[$st] = ($statusCounts[$st] ?? 0) + 1;
}
?>

<?php echo $actionNotice; ?>

<!-- Status Pipeline Tabs -->
<div class="admin-card" style="margin-bottom: 24px;">
  <div style="padding: 16px 24px; display: flex; flex-wrap: wrap; gap: 8px; align-items: center;">
    <a href="?status=all" class="status-tab <?php echo $filterStatus === 'all' ? 'active' : ''; ?>">
      All <span class="tab-count"><?php echo $statusCounts['all'] ?? 0; ?></span>
    </a>
    <?php foreach ($statusLabels as $sKey => $sInfo): ?>
      <?php if (($statusCounts[$sKey] ?? 0) > 0): ?>
        <a href="?status=<?php echo $sKey; ?>" class="status-tab <?php echo $filterStatus === $sKey ? 'active' : ''; ?>" style="--tab-color: <?php echo $sInfo['color']; ?>">
          <?php echo $sInfo['label']; ?> <span class="tab-count"><?php echo $statusCounts[$sKey] ?? 0; ?></span>
        </a>
      <?php endif; ?>
    <?php endforeach; ?>
  </div>
</div>

<!-- Search & Filters -->
<div class="admin-card" style="margin-bottom: 24px;">
  <div style="padding: 16px 24px;">
    <form method="GET" style="display: flex; gap: 12px; align-items: center; flex-wrap: wrap;">
      <input type="hidden" name="status" value="<?php echo htmlspecialchars($filterStatus); ?>">
      <div style="flex: 1; min-width: 220px;">
        <input type="text" name="q" value="<?php echo htmlspecialchars($searchQuery); ?>" placeholder="Search by name, company, email, phone..." class="admin-input" style="width: 100%;">
      </div>
      <button type="submit" class="btn-admin btn-admin-primary" style="padding: 10px 20px;">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
        Search
      </button>
      <?php if (!empty($searchQuery)): ?>
        <a href="?status=<?php echo htmlspecialchars($filterStatus); ?>" class="btn-admin btn-admin-outline" style="padding: 10px 16px;">Clear</a>
      <?php endif; ?>
    </form>
  </div>
</div>

<!-- Bookings Table -->
<div class="admin-card">
  <div class="admin-card-header">
    <div>
      <h2 class="admin-card-title">Service Requests Pipeline</h2>
      <p style="font-size: 0.8125rem; color: var(--admin-text-muted); margin-top: 2px;">
        <?php echo count($filteredRequests); ?> request(s) found
      </p>
    </div>
  </div>

  <div class="table-responsive">
    <table class="admin-table">
      <thead>
        <tr>
          <th>Client & Company</th>
          <th>Service</th>
          <th>Technician</th>
          <th>Scheduled</th>
          <th>Date Received</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php if (empty($filteredRequests)): ?>
          <tr>
            <td colspan="7" style="text-align: center; padding: 48px; color: var(--admin-text-muted);">
              <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" style="margin-bottom: 12px; opacity: 0.4;"><rect x="3" y="3" width="18" height="18" rx="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
              <div style="font-size: 0.875rem; font-weight: 600;">No booking requests found</div>
              <div style="font-size: 0.8rem; margin-top: 4px;">Requests from the website contact form will appear here automatically.</div>
            </td>
          </tr>
        <?php else: ?>
          <?php foreach ($filteredRequests as $req):
            $st = $req['status'] ?? 'new';
            $stInfo = $statusLabels[$st] ?? ['label' => ucfirst($st), 'color' => '#6B7280'];
            $waMsg = "Hello " . ($req['name'] ?? 'Client') . ", this is UrbanX Pest Control Perth regarding your enquiry for " . ($req['service_name'] ?? 'pest control') . ". How can we assist you today?";
            $waLink = 'https://wa.me/' . preg_replace('/[^\d]/', '', $req['phone'] ?? '') . '?text=' . urlencode($waMsg);
          ?>
            <tr>
              <td>
                <strong style="color: var(--admin-navy);"><?php echo htmlspecialchars($req['name'] ?? ''); ?></strong>
                <div style="font-size: 0.78rem; color: var(--admin-text-muted);"><?php echo htmlspecialchars($req['company'] ?? '—'); ?></div>
                <div style="font-size: 0.75rem; color: var(--admin-text-muted); margin-top: 2px;">
                  <?php echo htmlspecialchars($req['email'] ?? ''); ?>
                </div>
              </td>
              <td>
                <span style="font-weight: 500; font-size: 0.84rem; display: block;"><?php echo htmlspecialchars($req['service_name'] ?? 'General Enquiry'); ?></span>
                <?php 
                $scope = $req['survey_scope'] ?? (stripos($req['property_type'] ?? '', 'Commercial') !== false ? 'Commercial Survey' : 'Residential Survey');
                $isComm = stripos($scope, 'Commercial') !== false;
                ?>
                <span style="display: inline-block; font-size: 0.7rem; font-weight: 700; padding: 2px 6px; border-radius: 4px; margin-top: 3px; <?php echo $isComm ? 'background: #EFF6FF; color: #1D4ED8;' : 'background: #ECFDF5; color: #047857;'; ?>">
                  <?php echo $isComm ? '🏢 Commercial' : '🏡 Residential'; ?>
                </span>
              </td>
              <td>
                <?php if (!empty($req['technician'])): ?>
                  <span style="font-size: 0.82rem; font-weight: 600; color: var(--admin-navy);"><?php echo htmlspecialchars($req['technician']); ?></span>
                <?php else: ?>
                  <span style="font-size: 0.78rem; color: var(--admin-text-muted);">Unassigned</span>
                <?php endif; ?>
              </td>
              <td>
                <?php if (!empty($req['scheduled_date'])): ?>
                  <span style="font-size: 0.82rem; font-weight: 500;"><?php echo date('M d', strtotime($req['scheduled_date'])); ?></span>
                  <div style="font-size: 0.75rem; color: var(--admin-text-muted);"><?php echo htmlspecialchars($req['scheduled_time'] ?? ''); ?></div>
                <?php else: ?>
                  <span style="font-size: 0.78rem; color: var(--admin-text-muted);">—</span>
                <?php endif; ?>
              </td>
              <td style="font-size: 0.8rem; color: var(--admin-text-muted); white-space: nowrap;">
                <?php echo date('M d, H:i', strtotime($req['created_at'] ?? 'now')); ?>
              </td>
              <td>
                <span class="status-pill" style="background: <?php echo $stInfo['color']; ?>15; color: <?php echo $stInfo['color']; ?>; border: 1px solid <?php echo $stInfo['color']; ?>30; padding: 4px 10px; border-radius: 20px; font-size: 0.72rem; font-weight: 600; white-space: nowrap;">
                  <?php echo $stInfo['label']; ?>
                </span>
              </td>
              <td>
                <div style="display: flex; align-items: center; gap: 6px; flex-wrap: nowrap;">
                  <a href="/admin/booking-detail?id=<?php echo urlencode($req['id']); ?>" class="btn-admin btn-admin-outline" style="padding: 4px 10px; font-size: 0.72rem;">
                    Details
                  </a>
                  <?php if (!empty($req['phone'])): ?>
                    <a href="<?php echo htmlspecialchars($waLink); ?>" target="_blank" class="btn-whatsapp" title="WhatsApp" style="padding: 4px 8px; font-size: 0.72rem;">
                      <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.664-.698c.969.586 1.761.887 2.796.887 3.182 0 5.768-2.587 5.768-5.768.001-3.18-2.584-5.772-5.768-5.772zm3.393 8.163c-.144.405-.837.774-1.17.824-.312.045-.694.062-2.18-.553-1.898-.785-3.125-2.73-3.22-2.856-.095-.127-.768-1.021-.768-1.948 0-.927.489-1.383.663-1.572.174-.189.381-.237.508-.237.126 0 .253.002.364.007.117.006.275-.044.43.329.16.386.545 1.33.593 1.428.048.098.08.213.016.34-.064.127-.096.206-.19.317-.095.11-.2.246-.285.331-.095.095-.195.198-.084.388.111.19.493.813 1.057 1.317.727.649 1.339.851 1.53.946.19.095.302.079.414-.047.111-.127.476-.554.603-.744.127-.19.254-.159.428-.095.174.063 1.109.523 1.3.618.19.095.317.143.365.222.048.079.048.46-.096.865z"/></svg>
                    </a>
                  <?php endif; ?>
                  <form method="POST" style="display: inline; margin: 0;">
                    <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars(generateCSRFToken()); ?>">
                    <input type="hidden" name="action" value="update_status">
                    <input type="hidden" name="booking_id" value="<?php echo htmlspecialchars($req['id']); ?>">
                    <select name="status" onchange="this.form.submit()" class="admin-input" style="padding: 4px 6px; font-size: 0.72rem; min-width: 110px;">
                      <?php foreach ($statusLabels as $sKey => $sInfo): ?>
                        <option value="<?php echo $sKey; ?>" <?php echo $st === $sKey ? 'selected' : ''; ?>><?php echo $sInfo['label']; ?></option>
                      <?php endforeach; ?>
                    </select>
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

<style>
  .status-tab {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 6px 14px;
    border-radius: 20px;
    font-size: 0.78rem;
    font-weight: 500;
    text-decoration: none;
    color: var(--admin-text-muted);
    background: var(--admin-bg);
    border: 1px solid var(--admin-border);
    transition: all 0.15s ease;
  }
  .status-tab:hover { border-color: var(--admin-accent, #D91C24); color: var(--admin-navy); }
  .status-tab.active {
    background: var(--admin-accent, #D91C24);
    color: #fff;
    border-color: var(--admin-accent, #D91C24);
  }
  .tab-count {
    background: rgba(255,255,255,0.2);
    padding: 1px 7px;
    border-radius: 10px;
    font-size: 0.7rem;
    font-weight: 700;
  }
  .status-tab:not(.active) .tab-count {
    background: var(--admin-border);
    color: var(--admin-text-muted);
  }
</style>

<?php require_once __DIR__ . '/footer.php'; ?>
