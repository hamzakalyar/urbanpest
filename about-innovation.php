<?php
$pageTitle = 'Innovation & Technology — UrbanX Pest Control';
$pageDescription = 'Discover UrbanX Connect, our modern pest monitoring platform and service tracking across Perth.';
$currentPage = 'about';
include __DIR__ . '/partials/header.php';
?>

<!-- Page Hero -->
<?php
$heroTitle       = 'Innovation & Technology';
$heroDesc        = 'Delivering precision pest management through modern tracking, targeted species identification, safe treatment protocols, and certified reporting across Perth.';
$heroTag         = 'URBANX TECH // RESIDENTIAL & COMMERCIAL';
$heroBadge       = 'Modern Pest Intelligence';
$heroImage       = '/assets/images/digital-dashboard.jpg';
$heroWatermark   = 'INNOVATION';
$heroStatVal     = '100%';
$heroStatLabel   = 'Licensed WA Standards';
$heroCtaText     = 'Explore Our Approach';
$heroCtaLink     = '#connect-platform';
$heroBreadcrumbs = [
    ['label' => 'Home', 'url' => '/'],
    ['label' => 'About', 'url' => '/about'],
    ['label' => 'Innovation & Technology']
];
include __DIR__ . '/partials/page-hero.php';
?>

<!-- UrbanX Connect Platform -->
<section class="section">
  <div class="container">
    <div class="section-header">
      <span class="section-label">Our Platform</span>
      <h2 class="section-title">UrbanX Service Tracking</h2>
      <p class="section-subtitle centered">An integrated service workflow that connects inspection logs, targeted treatment records, and compliance data — giving residential and commercial clients total visibility.</p>
    </div>

    <!-- Live Dashboard Showcase -->
    <div style="margin-bottom: var(--space-3xl); border-radius: var(--radius-xl); overflow: hidden; box-shadow: var(--shadow-xl); border: 1px solid var(--color-border); position: relative;">
      <img src="/assets/images/digital-dashboard.jpg" alt="UrbanX Enterprise Dashboard in Action" style="width: 100%; height: auto; max-height: 520px; object-fit: cover; display: block;">
      <div style="position: absolute; bottom: 20px; left: 20px; background: rgba(11,31,58,0.88); backdrop-filter: blur(8px); padding: 10px 20px; border-radius: var(--radius-md); color: #fff; border-left: 3px solid var(--color-emerald); font-size: var(--text-xs);">
        <strong>UrbanX™ Operations Console</strong> • Western Australian Field Operations & Dispatch
      </div>
    </div>

    <div class="platform-features">
      <?php
      $features = [
        ['title' => 'Perimeter Monitoring', 'icon' => '<path d="M2 16.1A5 5 0 0 1 5.9 20M2 12.05A9 9 0 0 1 9.95 20M2 8V6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2h-6"></path><line x1="2" y1="20" x2="2.01" y2="20"></line>', 'desc' => 'Detailed status logs from commercial monitoring stations, preventative baiting, and routine inspection checkpoints.'],
        ['title' => 'Targeted Analytics', 'icon' => '<polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>', 'desc' => 'Targeted pest data analysis identifying seasonal trends, species pressure, and property condition factors.'],
        ['title' => 'Automated Reporting', 'icon' => '<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline>', 'desc' => 'Western Australian compliant reports generated automatically — audit-ready and clear for homeowners and businesses alike.'],
        ['title' => 'Multi-Site Management', 'icon' => '<circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>', 'desc' => 'Manage treatments across residential portfolios or commercial sites across Perth with centralised records.'],
        ['title' => 'Species Identification', 'icon' => '<circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line>', 'desc' => 'Licensed technicians accurately identify pest species across Perth environments to tailor specific, non-toxic IPM treatments.'],
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
    $ctaTitle  = 'See UrbanX in Action';
    $ctaText   = 'Schedule an on-site inspection with our licensed Perth pest technicians and discover how safe, responsible management protects your property.';
    $ctaLabel  = 'Book an Inspection';
    $ctaLink   = '/book';
    $ctaLabel2 = ''; $ctaLink2 = '';
    include __DIR__ . '/partials/cta-banner.php';
    ?>
  </div>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>
