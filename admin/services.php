<?php
/**
 * UrbanPest — Admin Services Management
 * View, toggle active/inactive, add new custom services, and manage all pest control services
 */

$adminTitle = 'Services Management';
$adminCurrentPage = 'services';
require_once __DIR__ . '/header.php';
require_once __DIR__ . '/../data/config.php';
require_once __DIR__ . '/../data/services.php';

$settingsFile = __DIR__ . '/../data/settings.json';
$customServicesFile = __DIR__ . '/../data/custom_services.json';

$settings = [];
if (file_exists($settingsFile)) {
    $decoded = @json_decode(file_get_contents($settingsFile), true);
    if (is_array($decoded)) $settings = $decoded;
}

// Handle actions
$actionNotice = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $token = $_POST['csrf_token'] ?? '';
    if (!verifyCSRFToken($token)) {
        $actionNotice = '<div class="admin-alert admin-alert-error">Security token expired. Please try again.</div>';
    } else {
        $action = $_POST['action'] ?? '';

        // 1. Toggle service
        if ($action === 'toggle_service') {
            $slug = $_POST['service_slug'] ?? '';
            $disabledServices = $settings['disabled_services'] ?? [];
            if (in_array($slug, $disabledServices)) {
                $disabledServices = array_values(array_diff($disabledServices, [$slug]));
                $actionNotice = '<div class="admin-alert admin-alert-success">Service enabled successfully.</div>';
            } else {
                $disabledServices[] = $slug;
                $actionNotice = '<div class="admin-alert admin-alert-success">Service disabled. It will no longer appear on the public website.</div>';
            }
            $settings['disabled_services'] = $disabledServices;
            file_put_contents($settingsFile, json_encode($settings, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
        }

        // 2. Add new service
        if ($action === 'add_service') {
            $name = trim($_POST['name'] ?? '');
            $catSlug = trim($_POST['category_slug'] ?? 'pest-control');
            $shortDesc = trim($_POST['short_desc'] ?? '');
            $desc = trim($_POST['description'] ?? '');
            $image = trim($_POST['image'] ?? '/assets/images/hero-technician.jpg');
            $accentTag = trim($_POST['accent_tag'] ?? 'Perth Pest Management — Rapid Response');
            $badgeText = trim($_POST['badge_text'] ?? 'Targeted Pest Treatment');
            $includesRaw = trim($_POST['includes'] ?? '');

            // Slugify name if slug not provided
            $slug = trim($_POST['slug'] ?? '');
            if (empty($slug)) {
                $slug = preg_replace('/[^a-z0-9]+/i', '-', strtolower($name));
                $slug = trim($slug, '-');
            } else {
                $slug = preg_replace('/[^a-z0-9]+/i', '-', strtolower($slug));
                $slug = trim($slug, '-');
            }

            if (empty($name) || empty($slug)) {
                $actionNotice = '<div class="admin-alert admin-alert-error">Please provide both a Service Name and a valid Slug.</div>';
            } else {
                $customServices = [];
                if (file_exists($customServicesFile)) {
                    $decoded = @json_decode(file_get_contents($customServicesFile), true);
                    if (is_array($decoded)) $customServices = $decoded;
                }

                // Check slug uniqueness
                $slugExists = isset($allServices[$slug]);
                foreach ($customServices as $cs) {
                    if (($cs['slug'] ?? '') === $slug) {
                        $slugExists = true;
                        break;
                    }
                }

                if ($slugExists) {
                    $actionNotice = '<div class="admin-alert admin-alert-error">A service with slug "'.htmlspecialchars($slug).'" already exists. Please choose a unique name or slug.</div>';
                } else {
                    $includesArr = array_filter(array_map('trim', explode("\n", $includesRaw)));
                    if (empty($includesArr)) {
                        $includesArr = [
                            'Comprehensive Perth property inspection & pest species identification',
                            'Targeted safe treatments compliant with Western Australian licensing standards',
                            'Clear service report with professional follow-up advice'
                        ];
                    }

                    $newService = [
                        'slug'        => $slug,
                        'name'        => $name,
                        'category_slug' => $catSlug,
                        'icon'        => 'default',
                        'image'       => !empty($image) ? $image : '/assets/images/hero-technician.jpg',
                        'watermark'   => strtoupper(substr($name, 0, 16)),
                        'accent_tag'  => !empty($accentTag) ? $accentTag : 'Perth Pest Management — Rapid Response',
                        'badge_text'  => !empty($badgeText) ? $badgeText : 'Targeted Pest Treatment',
                        'stat_val'    => '99.5%',
                        'stat_label'  => 'Customer Satisfaction Rate',
                        'short_desc'  => !empty($shortDesc) ? $shortDesc : 'Professional pest management for residential and commercial properties across Greater Perth.',
                        'description' => !empty($desc) ? $desc : 'Professional pest management delivered across Perth properties in accordance with Western Australian Health licensing and safe practices.',
                        'includes'    => array_values($includesArr),
                        'steps'       => [
                            ['title' => 'Property Inspection', 'desc' => 'Licensed technicians inspect your premises, identifying pest species and property conditions.'],
                            ['title' => 'Tailored Treatment Strategy', 'desc' => 'We design a safe treatment plan with clear upfront pricing compliant with Western Australian licensing.'],
                            ['title' => 'Safe & Responsible Treatment', 'desc' => 'Applied with care to protect family, pets, customers, and employees.'],
                            ['title' => 'Documentation & Follow-Up', 'desc' => 'Every service includes documentation and actionable preventative advice.']
                        ],
                        'key_challenges' => [
                            ['name' => 'Facility Contamination Risk', 'desc' => 'Active pest activity threatens staff safety and food/hygiene standards.'],
                            ['name' => 'Regulatory Non-Compliance', 'desc' => 'Evidence of pest activity can trigger council fines and audit failures.']
                        ],
                        'related_industries' => ['food-processing', 'logistics-warehousing', 'hospitality', 'food-retail'],
                        'is_custom'   => true,
                        'created_at'  => date('Y-m-d H:i:s')
                    ];

                    $customServices[] = $newService;
                    file_put_contents($customServicesFile, json_encode($customServices, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));

                    // Reload services
                    require __DIR__ . '/../data/services.php';
                    $actionNotice = '<div class="admin-alert admin-alert-success">✓ Service "<strong>' . htmlspecialchars($name) . '</strong>" has been created and published live on the website!</div>';
                }
            }
        }

        // 3. Delete custom service
        if ($action === 'delete_custom_service') {
            $slug = $_POST['service_slug'] ?? '';
            $customServices = [];
            if (file_exists($customServicesFile)) {
                $decoded = @json_decode(file_get_contents($customServicesFile), true);
                if (is_array($decoded)) $customServices = $decoded;
            }
            $filtered = array_values(array_filter($customServices, function($cs) use ($slug) {
                return ($cs['slug'] ?? '') !== $slug;
            }));
            file_put_contents($customServicesFile, json_encode($filtered, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));

            // Reload services
            require __DIR__ . '/../data/services.php';
            $actionNotice = '<div class="admin-alert admin-alert-success">Custom service deleted successfully.</div>';
        }
    }
}

$disabledServices = $settings['disabled_services'] ?? [];

// Icon map for services
$iconSvgs = [
    'rodent'      => '<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle>',
    'cockroach'   => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>',
    'termite'     => '<path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline>',
    'bird'        => '<circle cx="12" cy="12" r="10"></circle><path d="M8 14s1.5 2 4 2 4-2 4-2"></path><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line>',
    'default'     => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>',
];
?>

<?php echo $actionNotice; ?>

<!-- Overview Stats & Add Service Trigger -->
<div style="display:flex; justify-content:space-between; align-items:center; margin-bottom: 20px; flex-wrap:wrap; gap:12px;">
  <div>
    <h2 style="font-family:var(--admin-heading-font); font-size:1.25rem; font-weight:700; color:var(--admin-navy);">Catalog & Live Services</h2>
    <p style="font-size:0.825rem; color:var(--admin-text-muted);">Manage existing services, toggle visibility, or add new commercial pest management services.</p>
  </div>
  <div>
    <button type="button" id="toggleAddServiceBtn" class="btn-admin btn-admin-primary" onclick="document.getElementById('addServiceCard').style.display = (document.getElementById('addServiceCard').style.display === 'none' ? 'block' : 'none'); window.scrollTo({top: document.getElementById('addServiceCard').offsetTop - 80, behavior: 'smooth'});">
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
      + Add New Service
    </button>
  </div>
</div>

<div class="metrics-grid" style="margin-bottom: 24px;">
  <div class="metric-card">
    <div class="metric-header">
      <span class="metric-title">Total Services</span>
      <div class="metric-icon" style="background:rgba(217,28,36,0.1); color:#D91C24;">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
      </div>
    </div>
    <div class="metric-value"><?php echo count($allServices); ?></div>
    <div class="metric-change">Across <?php echo count($serviceCategories); ?> categories</div>
  </div>

  <div class="metric-card">
    <div class="metric-header">
      <span class="metric-title">Active Services</span>
      <div class="metric-icon" style="background:rgba(16,185,129,0.1); color:#059669;">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
      </div>
    </div>
    <div class="metric-value"><?php echo count($allServices) - count($disabledServices); ?></div>
    <div class="metric-change">Currently live on website</div>
  </div>

  <div class="metric-card">
    <div class="metric-header">
      <span class="metric-title">Disabled</span>
      <div class="metric-icon" style="background:rgba(239,68,68,0.1); color:#EF4444;">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="4.93" y1="4.93" x2="19.07" y2="19.07"></line></svg>
      </div>
    </div>
    <div class="metric-value"><?php echo count($disabledServices); ?></div>
    <div class="metric-change">Hidden from public site</div>
  </div>
</div>

<!-- Add New Service Card (Collapsible) -->
<div id="addServiceCard" class="admin-card" style="display: <?php echo (!empty($actionNotice) && strpos($actionNotice, 'admin-alert-error') !== false && ($_POST['action'] ?? '') === 'add_service') ? 'block' : 'none'; ?>; border: 2px solid var(--admin-accent); margin-bottom: 30px; background:#FFFFFF;">
  <div class="admin-card-header" style="background: #FFF5F5; border-bottom: 1px solid #FED7D7; padding: 18px 24px;">
    <div>
      <h2 class="admin-card-title" style="color: var(--admin-navy); display:flex; align-items:center; gap:8px;">
        <span style="display:inline-block; width:8px; height:8px; border-radius:50%; background:var(--admin-accent);"></span>
        Add New Commercial Service
      </h2>
      <p style="font-size: 0.8125rem; color: var(--admin-text-muted); margin-top: 2px;">
        Fill out the form below. Once saved, the service will instantly be published with its own dedicated page, booking form, and catalog entry.
      </p>
    </div>
    <button type="button" class="btn-admin btn-admin-outline" onclick="document.getElementById('addServiceCard').style.display='none';" style="font-size:0.75rem; padding:4px 10px;">✕ Cancel</button>
  </div>

  <div style="padding: 24px;">
    <form method="POST" action="/admin/services">
      <?php echo renderCSRFField(); ?>
      <input type="hidden" name="action" value="add_service">

      <div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 18px; margin-bottom: 18px;">
        <div>
          <label style="display:block; font-size:0.8125rem; font-weight:600; color:var(--admin-text); margin-bottom:6px;">
            Service Name <span style="color:#DC2626;">*</span>
          </label>
          <input type="text" name="name" class="search-input" style="width:100%; height:42px;" placeholder="e.g. Commercial Spider Control" required onkeyup="if(!document.getElementById('slugInput').dataset.edited){ document.getElementById('slugInput').value = this.value.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/(^-|-$)/g, ''); }">
        </div>

        <div>
          <label style="display:block; font-size:0.8125rem; font-weight:600; color:var(--admin-text); margin-bottom:6px;">
            URL Slug (e.g. spider-control) <span style="color:#DC2626;">*</span>
          </label>
          <input type="text" id="slugInput" name="slug" class="search-input" style="width:100%; height:42px;" placeholder="spider-control" onchange="this.dataset.edited = 'true';" required>
          <span style="font-size:0.72rem; color:var(--admin-text-muted);">Will create clean URL: <code>/services/[slug]</code></span>
        </div>

        <div>
          <label style="display:block; font-size:0.8125rem; font-weight:600; color:var(--admin-text); margin-bottom:6px;">
            Category <span style="color:#DC2626;">*</span>
          </label>
          <select name="category_slug" class="search-input" style="width:100%; height:42px; background:#fff;">
            <?php foreach ($serviceCategories as $cat): ?>
              <option value="<?php echo htmlspecialchars($cat['slug']); ?>">
                <?php echo htmlspecialchars($cat['name']); ?>
              </option>
            <?php endforeach; ?>
          </select>
        </div>

        <div>
          <label style="display:block; font-size:0.8125rem; font-weight:600; color:var(--admin-text); margin-bottom:6px;">
            Header & Card Image
          </label>
          <select name="image" class="search-input" style="width:100%; height:42px; background:#fff;">
            <option value="/assets/images/hero-technician.jpg">Technician Specialist (Default)</option>
            <option value="/assets/images/ant-control.jpg">Ant & Insect Management</option>
            <option value="/assets/images/cockroach-control.jpg">Commercial Kitchen Treatment</option>
            <option value="/assets/images/connected-monitoring.jpg">Commercial Trap Network</option>
            <option value="/assets/images/termite-inspection.jpg">Structural & Termite Inspection</option>
            <option value="/assets/images/bird-proofing.jpg">Bird Proofing & Deterrents</option>
            <option value="/assets/images/food-inspection.jpg">Food Hygiene & Safety Inspection</option>
            <option value="/assets/images/green-fleet.jpg">Commercial Green Fleet</option>
            <option value="/assets/images/smart-iot-trap.jpg">Commercial Bait & Trap Station</option>
          </select>
        </div>
      </div>

      <div style="margin-bottom: 18px;">
        <label style="display:block; font-size:0.8125rem; font-weight:600; color:var(--admin-text); margin-bottom:6px;">
          Short Summary (for Service Cards & Overview) <span style="color:#DC2626;">*</span>
        </label>
        <input type="text" name="short_desc" class="search-input" style="width:100%; height:42px;" placeholder="e.g. Targeted residential and commercial pest management across Greater Perth properties." required>
      </div>

      <div style="margin-bottom: 18px;">
        <label style="display:block; font-size:0.8125rem; font-weight:600; color:var(--admin-text); margin-bottom:6px;">
          Detailed Service Description (for dedicated service page)
        </label>
        <textarea name="description" class="search-input" style="width:100%; height:80px; padding:10px; font-family:var(--admin-font);" placeholder="Provide comprehensive details about this service, property conditions, and Western Australian licensing compliance..."></textarea>
      </div>

      <div style="display:grid; grid-template-columns: 1fr 1fr; gap: 18px; margin-bottom: 18px;">
        <div>
          <label style="display:block; font-size:0.8125rem; font-weight:600; color:var(--admin-text); margin-bottom:6px;">
            Service Highlights / Deliverables (One per line)
          </label>
          <textarea name="includes" class="search-input" style="width:100%; height:90px; padding:10px; font-family:var(--admin-font); font-size:0.8125rem;" placeholder="Comprehensive Perth property inspection
Safe & responsible targeted treatment
Western Australian licensed compliance report"></textarea>
        </div>

        <div>
          <div style="margin-bottom:12px;">
            <label style="display:block; font-size:0.8125rem; font-weight:600; color:var(--admin-text); margin-bottom:6px;">
              Badge Text
            </label>
            <input type="text" name="badge_text" class="search-input" style="width:100%; height:38px;" value="Targeted Pest Treatment">
          </div>
          <div>
            <label style="display:block; font-size:0.8125rem; font-weight:600; color:var(--admin-text); margin-bottom:6px;">
              Accent Sub-Tag
            </label>
            <input type="text" name="accent_tag" class="search-input" style="width:100%; height:38px;" value="Perth Pest Management — Rapid Response">
          </div>
        </div>
      </div>

      <div style="display:flex; justify-content:flex-end; gap:12px; align-items:center;">
        <button type="button" class="btn-admin btn-admin-outline" onclick="document.getElementById('addServiceCard').style.display='none';">Cancel</button>
        <button type="submit" class="btn-admin btn-admin-primary" style="padding: 10px 24px; font-size:0.925rem;">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
          Publish Service to Website
        </button>
      </div>
    </form>
  </div>
</div>

<!-- Services by Category -->
<?php foreach ($serviceCategories as $category): ?>
<div class="admin-card" style="margin-bottom: 24px;">
  <div class="admin-card-header">
    <div>
      <h2 class="admin-card-title"><?php echo htmlspecialchars($category['name']); ?></h2>
      <p style="font-size: 0.8rem; color: var(--admin-text-muted); margin-top: 2px;"><?php echo htmlspecialchars($category['short_desc']); ?></p>
    </div>
    <span style="font-size: 0.78rem; font-weight: 600; color: var(--admin-text-muted); background: var(--admin-bg); padding: 4px 12px; border-radius: 20px;">
      <?php echo count($category['subservices']); ?> services
    </span>
  </div>

  <div class="table-responsive">
    <table class="admin-table">
      <thead>
        <tr>
          <th>Service Name</th>
          <th>Slug</th>
          <th>Image</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($category['subservices'] as $service):
          $isDisabled = in_array($service['slug'], $disabledServices);
          $isCustom = !empty($service['is_custom']);
        ?>
          <tr style="<?php echo $isDisabled ? 'opacity: 0.55;' : ''; ?>">
            <td>
              <div style="display: flex; align-items: center; gap: 10px;">
                <div style="width: 36px; height: 36px; border-radius: 8px; background: <?php echo $isDisabled ? '#F1F5F9' : ($isCustom ? 'rgba(79,70,229,0.1)' : 'rgba(217,28,36,0.08)'); ?>; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="<?php echo $isDisabled ? '#94A3B8' : ($isCustom ? '#4F46E5' : '#D91C24'); ?>" stroke-width="2">
                    <?php echo $iconSvgs[$service['icon'] ?? 'default'] ?? $iconSvgs['default']; ?>
                  </svg>
                </div>
                <div>
                  <div style="display:flex; align-items:center; gap:6px;">
                    <strong style="color: var(--admin-navy); font-size: 0.88rem;"><?php echo htmlspecialchars($service['name']); ?></strong>
                    <?php if ($isCustom): ?>
                      <span style="background:#EEF2FF; color:#4F46E5; border:1px solid #C7D2FE; padding:1px 6px; border-radius:10px; font-size:0.65rem; font-weight:700; text-transform:uppercase;">Custom</span>
                    <?php endif; ?>
                  </div>
                  <div style="font-size: 0.75rem; color: var(--admin-text-muted); max-width: 320px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                    <?php echo htmlspecialchars($service['short_desc']); ?>
                  </div>
                </div>
              </div>
            </td>
            <td>
              <code style="font-size: 0.75rem; background: var(--admin-bg); padding: 2px 8px; border-radius: 4px; color: var(--admin-text-muted);"><?php echo htmlspecialchars($service['slug']); ?></code>
            </td>
            <td>
              <?php if (!empty($service['image'])): ?>
                <img src="<?php echo htmlspecialchars($service['image']); ?>" alt="" style="width: 48px; height: 32px; object-fit: cover; border-radius: 4px; border: 1px solid var(--admin-border);">
              <?php else: ?>
                <span style="font-size: 0.75rem; color: var(--admin-text-muted);">—</span>
              <?php endif; ?>
            </td>
            <td>
              <?php if ($isDisabled): ?>
                <span style="background: #FEF2F2; color: #EF4444; border: 1px solid #FECACA; padding: 4px 10px; border-radius: 20px; font-size: 0.72rem; font-weight: 600;">Disabled</span>
              <?php else: ?>
                <span style="background: #F0FDF4; color: #059669; border: 1px solid #BBF7D0; padding: 4px 10px; border-radius: 20px; font-size: 0.72rem; font-weight: 600;">Active</span>
              <?php endif; ?>
            </td>
            <td>
              <div style="display: flex; gap: 8px; align-items: center; flex-wrap: wrap;">
                <a href="/services/<?php echo urlencode($service['slug']); ?>" target="_blank" class="btn-admin btn-admin-outline" style="padding: 4px 10px; font-size: 0.72rem;">
                  View Page ↗
                </a>

                <form method="POST" style="margin: 0;">
                  <?php echo renderCSRFField(); ?>
                  <input type="hidden" name="action" value="toggle_service">
                  <input type="hidden" name="service_slug" value="<?php echo htmlspecialchars($service['slug']); ?>">
                  <button type="submit" class="btn-admin <?php echo $isDisabled ? 'btn-admin-primary' : 'btn-admin-outline'; ?>" style="padding: 4px 10px; font-size: 0.72rem; <?php echo !$isDisabled ? 'color: #EF4444; border-color: #FECACA;' : ''; ?>">
                    <?php echo $isDisabled ? 'Enable' : 'Disable'; ?>
                  </button>
                </form>

                <?php if ($isCustom): ?>
                  <form method="POST" onsubmit="return confirm('Are you sure you want to permanently delete this custom service?');" style="margin: 0;">
                    <?php echo renderCSRFField(); ?>
                    <input type="hidden" name="action" value="delete_custom_service">
                    <input type="hidden" name="service_slug" value="<?php echo htmlspecialchars($service['slug']); ?>">
                    <button type="submit" class="btn-admin" style="padding: 4px 8px; font-size: 0.72rem; color: #DC2626; border: 1px solid #FCA5A5; background: #FEF2F2;" title="Delete this custom service">
                      Delete
                    </button>
                  </form>
                <?php endif; ?>
              </div>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>
<?php endforeach; ?>

<?php require_once __DIR__ . '/footer.php'; ?>
