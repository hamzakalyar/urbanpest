<?php
$pageTitle = 'Innovation & Technology — UrbanPest';
$pageDescription = 'Discover UrbanPest Connect, our digital pest monitoring platform powered by IoT devices, AI analytics, and predictive intelligence.';
$currentPage = 'about';
include __DIR__ . '/partials/header.php';
?>

<!-- Page Hero -->
<?php
$heroTitle       = 'Innovation & Technology';
$heroDesc        = 'Pioneering the future of biosecurity through the UrbanPest Connect IoT ecosystem, AI optical traps, predictive risk modeling, and real-time cloud analytics.';
$heroTag         = 'URBANPEST CONNECT // IOT & AI TELEMETRY';
$heroBadge       = 'Proprietary IoT Sensor Network';
$heroImage       = '/assets/images/digital-dashboard.jpg';
$heroWatermark   = 'INNOVATION';
$heroStatVal     = '350K+';
$heroStatLabel   = 'Active Connected Sensors';
$heroCtaText     = 'Explore Connect Platform';
$heroCtaLink     = '#connect-platform';
$heroBreadcrumbs = [
    ['label' => 'Home', 'url' => '/index.php'],
    ['label' => 'About', 'url' => '/about.php'],
    ['label' => 'Innovation & Technology']
];
include __DIR__ . '/partials/page-hero.php';
?>

<!-- UrbanPest Connect Platform -->
<section class="section">
  <div class="container">
    <div class="section-header">
      <span class="section-label">Our Platform</span>
      <h2 class="section-title">UrbanPest Connect</h2>
      <p class="section-subtitle centered">A single, integrated platform that connects all your pest monitoring devices, service activities, and compliance data — giving you total visibility and control.</p>
    </div>

    <!-- Live Dashboard Showcase -->
    <div style="margin-bottom: var(--space-3xl); border-radius: var(--radius-xl); overflow: hidden; box-shadow: var(--shadow-xl); border: 1px solid var(--color-border); position: relative;">
      <img src="/assets/images/digital-dashboard.jpg" alt="UrbanPest Connect Enterprise Dashboard in Action" style="width: 100%; height: auto; max-height: 520px; object-fit: cover; display: block;">
      <div style="position: absolute; bottom: 20px; left: 20px; background: rgba(11,31,58,0.88); backdrop-filter: blur(8px); padding: 10px 20px; border-radius: var(--radius-md); color: #fff; border-left: 3px solid var(--color-emerald); font-size: var(--text-xs);">
        <strong>UrbanPest Connect™ Operations Console</strong> • 24/7 Real-Time Commercial Facility Telemetry
      </div>
    </div>

    <div class="platform-features">
      <?php
      $features = [
        ['title' => 'Real-Time Monitoring', 'icon' => '<path d="M2 16.1A5 5 0 0 1 5.9 20M2 12.05A9 9 0 0 1 9.95 20M2 8V6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2h-6"></path><line x1="2" y1="20" x2="2.01" y2="20"></line>', 'desc' => '24/7 data streams from smart traps, connected bait stations, and environmental sensors — all visible on a single dashboard.'],
        ['title' => 'AI-Powered Analytics', 'icon' => '<polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>', 'desc' => 'Machine learning models analyse activity patterns, predict seasonal trends, and recommend proactive interventions.'],
        ['title' => 'Automated Reporting', 'icon' => '<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline>', 'desc' => 'Compliance reports generated automatically — audit-ready documentation without the administrative burden.'],
        ['title' => 'Multi-Site Management', 'icon' => '<circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>', 'desc' => 'Compare performance across hundreds of sites, identify outliers, and standardise pest management outcomes globally.'],
        ['title' => 'Species Identification', 'icon' => '<circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line>', 'desc' => 'Computer vision models identify pest species from smart trap images with 94%+ accuracy across 30 common commercial species.'],
        ['title' => 'Mobile Access', 'icon' => '<rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect><line x1="12" y1="18" x2="12.01" y2="18"></line>', 'desc' => 'Full platform access on any device. Receive alerts, view dashboards, and approve service actions from your phone.'],
      ];
      foreach ($features as $feat):
      ?>
        <div class="platform-feature">
          <div class="platform-feature-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><?php echo $feat['icon']; ?></svg>
          </div>
          <h3><?php echo $feat['title']; ?></h3>
          <p><?php echo $feat['desc']; ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Stats -->
<section class="section section-dark">
  <div class="container">
    <div class="stats-grid" style="grid-template-columns: repeat(4, 1fr);">
      <div class="stat-item">
        <div class="stat-number"><span data-counter="4200000" data-suffix="+">0</span></div>
        <div class="stat-label">Data Points Analysed</div>
      </div>
      <div class="stat-item">
        <div class="stat-number"><span data-counter="94" data-suffix="%">0</span></div>
        <div class="stat-label">Species ID Accuracy</div>
      </div>
      <div class="stat-item">
        <div class="stat-number"><span data-counter="40" data-suffix="%">0</span></div>
        <div class="stat-label">Fewer Emergency Callouts</div>
      </div>
      <div class="stat-item">
        <div class="stat-number"><span data-counter="12" data-suffix=" hrs/mo">0</span></div>
        <div class="stat-label">Admin Time Saved</div>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <?php
    $ctaTitle  = 'See UrbanPest Connect in Action';
    $ctaText   = 'Request a live demo of our digital pest monitoring platform and discover how connected technology can transform your pest management.';
    $ctaLabel  = 'Request a Demo';
    $ctaLink   = '/contact.php';
    $ctaLabel2 = ''; $ctaLink2 = '';
    include __DIR__ . '/partials/cta-banner.php';
    ?>
  </div>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>
