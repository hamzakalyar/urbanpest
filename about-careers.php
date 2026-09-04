<?php
$pageTitle = 'Careers in Perth — UrbanPest Commercial Biosecurity';
$pageDescription = 'Join UrbanPest Western Australia. Explore commercial biosecurity and pest management career opportunities across Greater Perth.';
$currentPage = 'about';
include __DIR__ . '/partials/header.php';
?>

<!-- Page Hero -->
<?php
$heroTitle       = 'Careers at UrbanPest Perth';
$heroDesc        = 'Join a dedicated Western Australian team of licensed commercial technicians, field biologists, and IoT specialists delivering biosecurity across Greater Perth.';
$heroTag         = 'PERTH COMMERCIAL TEAM // WA OPERATIONS';
$heroBadge       = 'WA Department of Health Certified';
$heroImage       = '/assets/images/hero-technician.jpg';
$heroWatermark   = 'CAREERS';
$heroStatVal     = '100%';
$heroStatLabel   = 'WA Licensed Specialists';
$heroCtaText     = 'View Open Positions';
$heroCtaLink     = '#openings';
$heroBreadcrumbs = [
    ['label' => 'Home', 'url' => '/index.php'],
    ['label' => 'About', 'url' => '/about.php'],
    ['label' => 'Careers']
];
include __DIR__ . '/partials/page-hero.php';
?>

<section class="section">
  <div class="container container-narrow">
    <span class="section-label">Why Join Us</span>
    <h2 class="section-title">Build a Career That Makes a Difference</h2>
    <p style="font-size: var(--text-md); color: var(--color-text-muted); line-height: var(--leading-relaxed);">
      At UrbanPest, you'll be part of a dedicated Western Australian team of biosecurity professionals protecting commercial facilities, food supply chains, logistics hubs, and workplaces across Greater Perth. Whether you're an experienced licensed technician, field biologist, or service coordinator, you'll find supportive leadership, top-tier equipment, and clear career progression.
    </p>
  </div>
</section>

<section class="section section-alt" id="openings">
  <div class="container">
    <div class="section-header">
      <span class="section-label">Open Positions</span>
      <h2 class="section-title">Current Perth Opportunities</h2>
    </div>

    <div class="grid grid-auto grid-gap-lg">
      <?php
      $jobs = [
        ['title' => 'Senior Commercial Pest Technician', 'location' => 'Perth, WA (Welshpool Logistics Base)', 'type' => 'Full-time', 'dept' => 'Operations'],
        ['title' => 'Commercial Biosecurity & IPM Specialist', 'location' => 'Perth, WA (Canning Vale & Metro)', 'type' => 'Full-time', 'dept' => 'Technical'],
        ['title' => 'Commercial Key Account Manager', 'location' => 'Perth CBD, WA', 'type' => 'Full-time', 'dept' => 'Commercial'],
      ];
      foreach ($jobs as $job):
      ?>
        <div class="job-card">
          <div class="job-card-header">
            <h3><?php echo htmlspecialchars($job['title']); ?></h3>
            <span class="badge badge-emerald"><?php echo htmlspecialchars($job['dept']); ?></span>
          </div>
          <div class="job-card-details">
            <span class="job-card-detail">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
              <?php echo htmlspecialchars($job['location']); ?>
            </span>
            <span class="job-card-detail">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
              <?php echo htmlspecialchars($job['type']); ?>
            </span>
          </div>
          <a href="#" class="btn btn-outline-emerald btn-sm">Apply Now</a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <?php
    $ctaTitle  = 'Don\'t See the Right Role?';
    $ctaText   = 'We\'re always looking for talented people. Send us your CV and we\'ll keep you in mind for future opportunities.';
    $ctaLabel  = 'Submit Your CV';
    $ctaLink   = '/contact.php';
    $ctaLabel2 = ''; $ctaLink2 = '';
    include __DIR__ . '/partials/cta-banner.php';
    ?>
  </div>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>
