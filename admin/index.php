<?php
/**
 * UrbanPest — Admin Dashboard Overview
 */

$adminTitle = 'Dashboard Overview';
$adminCurrentPage = 'dashboard';
require_once __DIR__ . '/header.php';
require_once __DIR__ . '/../data/config.php';

// Calculate analytics from $allLeads
$totalCount = count($allLeads);
$newCount = 0;
$surveyCount = 0;
$closedCount = 0;
$serviceCounts = [];

foreach ($allLeads as $lead) {
    $st = $lead['status'] ?? 'new';
    if ($st === 'new') $newCount++;
    if ($st === 'survey_scheduled' || $st === 'contacted') $surveyCount++;
    if ($st === 'closed_won') $closedCount++;

    $svc = $lead['service_name'] ?? 'General Enquiry';
    if (!isset($serviceCounts[$svc])) {
        $serviceCounts[$svc] = 0;
    }
    $serviceCounts[$svc]++;
}

// Top 5 most recent enquiries
$recentLeads = array_slice($allLeads, 0, 5);
?>

<!-- Metrics Overview -->
<div class="metrics-grid">
  <div class="metric-card">
    <div class="metric-header">
      <span class="metric-title">Total Enquiries</span>
      <div class="metric-icon" style="background:rgba(15,169,104,0.1); color:#0FA968;">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
      </div>
    </div>
    <div class="metric-value"><?php echo $totalCount; ?></div>
    <div class="metric-change">Commercial requests logged</div>
  </div>

  <div class="metric-card">
    <div class="metric-header">
      <span class="metric-title">Pending Review</span>
      <div class="metric-icon" style="background:rgba(239,68,68,0.1); color:#EF4444;">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
      </div>
    </div>
    <div class="metric-value" style="color:#DC2626;"><?php echo $newCount; ?></div>
    <div class="metric-change">Awaiting initial technician dispatch</div>
  </div>

  <div class="metric-card">
    <div class="metric-header">
      <span class="metric-title">Active Pipeline</span>
      <div class="metric-icon" style="background:rgba(2,132,199,0.1); color:#0284C7;">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
      </div>
    </div>
    <div class="metric-value"><?php echo $surveyCount; ?></div>
    <div class="metric-change">In contact or survey scheduled</div>
  </div>

  <div class="metric-card">
    <div class="metric-header">
      <span class="metric-title">Closed / Won</span>
      <div class="metric-icon" style="background:rgba(16,185,129,0.1); color:#059669;">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
      </div>
    </div>
    <div class="metric-value"><?php echo $closedCount; ?></div>
    <div class="metric-change">Active IPM service contracts</div>
  </div>
</div>

<div style="display:grid; grid-template-columns: 2fr 1fr; gap: 24px; margin-bottom: 30px;">
  <!-- Recent Enquiries -->
  <div class="admin-card" style="margin-bottom:0;">
    <div class="admin-card-header">
      <div>
        <h2 class="admin-card-title">Recent Commercial Enquiries</h2>
        <p style="font-size:0.8125rem; color:var(--admin-text-muted); margin-top:2px;">Live stream of requests arriving from website quote forms</p>
      </div>
      <a href="/admin/leads.php" class="btn-admin btn-admin-outline" style="font-size:0.8rem;">View All (<?php echo $totalCount; ?>)</a>
    </div>

    <div class="table-responsive">
      <table class="admin-table">
        <thead>
          <tr>
            <th>Client & Company</th>
            <th>Service</th>
            <th>Date</th>
            <th>Status</th>
            <th>Quick Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php if (empty($recentLeads)): ?>
            <tr>
              <td colspan="5" style="text-align:center; padding: 40px; color:var(--admin-text-muted);">
                No enquiries received yet. Form submissions will appear here instantly.
              </td>
            </tr>
          <?php else: ?>
            <?php foreach ($recentLeads as $lead): 
              $st = $lead['status'] ?? 'new';
              $waMsg = "Hello " . $lead['name'] . ", this is UrbanPest regarding your enquiry for " . ($lead['service_name'] ?? 'commercial pest control') . ".";
              $waLeadLink = 'https://wa.me/' . preg_replace('/[^\d]/', '', $lead['phone']) . '?text=' . urlencode($waMsg);
            ?>
              <tr>
                <td>
                  <strong style="color:var(--admin-navy);"><?php echo htmlspecialchars($lead['name']); ?></strong>
                  <div style="font-size:0.8rem; color:var(--admin-text-muted);"><?php echo htmlspecialchars($lead['company']); ?></div>
                </td>
                <td>
                  <span style="font-weight:500;"><?php echo htmlspecialchars($lead['service_name'] ?? 'General'); ?></span>
                </td>
                <td style="font-size:0.8rem; color:var(--admin-text-muted); white-space:nowrap;">
                  <?php echo date('M d, H:i', strtotime($lead['created_at'])); ?>
                </td>
                <td>
                  <span class="status-pill <?php echo htmlspecialchars($st); ?>">
                    <?php echo str_replace('_', ' ', htmlspecialchars($st)); ?>
                  </span>
                </td>
                <td>
                  <div style="display:flex; align-items:center; gap:8px;">
                    <a href="/admin/lead-detail.php?id=<?php echo urlencode($lead['id']); ?>" class="btn-admin btn-admin-outline" style="padding:4px 10px; font-size:0.75rem;">
                      Details
                    </a>
                    <?php if (!empty($lead['phone'])): ?>
                      <a href="<?php echo htmlspecialchars($waLeadLink); ?>" target="_blank" class="btn-whatsapp" title="Chat with Client on WhatsApp">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.664-.698c.969.586 1.761.887 2.796.887 3.182 0 5.768-2.587 5.768-5.768.001-3.18-2.584-5.772-5.768-5.772zm3.393 8.163c-.144.405-.837.774-1.17.824-.312.045-.694.062-2.18-.553-1.898-.785-3.125-2.73-3.22-2.856-.095-.127-.768-1.021-.768-1.948 0-.927.489-1.383.663-1.572.174-.189.381-.237.508-.237.126 0 .253.002.364.007.117.006.275-.044.43.329.16.386.545 1.33.593 1.428.048.098.08.213.016.34-.064.127-.096.206-.19.317-.095.11-.2.246-.285.331-.095.095-.195.198-.084.388.111.19.493.813 1.057 1.317.727.649 1.339.851 1.53.946.19.095.302.079.414-.047.111-.127.476-.554.603-.744.127-.19.254-.159.428-.095.174.063 1.109.523 1.3.618.19.095.317.143.365.222.048.079.048.46-.096.865z"/></svg>
                        WhatsApp
                      </a>
                    <?php endif; ?>
                  </div>
                </td>
              </tr>
            <?php endforeach; ?>
          <?php endif; ?>
        </tbody>
      </table>
    </div>
  </div>

  <!-- Service Demand Breakdown -->
  <div class="admin-card" style="margin-bottom:0;">
    <div class="admin-card-header">
      <h2 class="admin-card-title">Enquiry by Service</h2>
    </div>
    <div style="padding: 24px;">
      <?php if (empty($serviceCounts)): ?>
        <p style="color:var(--admin-text-muted); font-size:0.875rem;">No service requests logged yet.</p>
      <?php else: ?>
        <div style="display:flex; flex-direction:column; gap:16px;">
          <?php 
          arsort($serviceCounts);
          foreach ($serviceCounts as $sName => $sCount): 
            $pct = $totalCount > 0 ? round(($sCount / $totalCount) * 100) : 0;
          ?>
            <div>
              <div style="display:flex; justify-content:space-between; font-size:0.8125rem; margin-bottom:6px;">
                <span style="font-weight:600; color:var(--admin-navy);"><?php echo htmlspecialchars($sName); ?></span>
                <span style="color:var(--admin-text-muted);"><?php echo $sCount; ?> (<?php echo $pct; ?>%)</span>
              </div>
              <div style="height:8px; background:#E2E8F0; border-radius:999px; overflow:hidden;">
                <div style="width:<?php echo $pct; ?>%; height:100%; background:linear-gradient(90deg, #0FA968, #10B981); border-radius:999px;"></div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>

      <div style="margin-top:28px; padding-top:20px; border-top:1px solid var(--admin-border);">
        <h4 style="font-size:0.85rem; margin-bottom:8px; color:var(--admin-navy);">Direct WhatsApp Gateway</h4>
        <p style="font-size:0.775rem; color:var(--admin-text-muted); line-height:1.5; margin-bottom:12px;">
          Active Number: <strong style="color:#059669;"><?php echo htmlspecialchars($appConfig['whatsapp_number']); ?></strong>
        </p>
        <a href="/admin/settings.php" class="btn-admin btn-admin-outline" style="width:100%; justify-content:center; font-size:0.775rem;">
          Configure WhatsApp & Notifications →
        </a>
      </div>
    </div>
  </div>
</div>

<?php require_once __DIR__ . '/footer.php'; ?>
