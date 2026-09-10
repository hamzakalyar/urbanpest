<?php
$pageTitle = 'Careers in Perth — UrbanX Pest Control';
$pageDescription = 'Join UrbanX Pest Control in Perth. Explore pest management career opportunities across Greater Perth and Western Australia.';
$currentPage = 'about';
include __DIR__ . '/partials/header.php';
?>

<!-- Page Hero -->
<?php
$heroTitle       = 'Careers at UrbanX';
$heroDesc        = 'Join a dedicated Perth team of licensed pest management technicians delivering safe, responsible pest solutions for residential and commercial properties.';
$heroTag         = 'PERTH PEST DIVISION // WA OPERATIONS';
$heroBadge       = 'Western Australian Licensed Specialists';
$heroImage       = '/assets/images/hero-technician.jpg';
$heroWatermark   = 'CAREERS';
$heroStatVal     = '100%';
$heroStatLabel   = 'WA Licensed Technicians';
$heroCtaText     = 'View Open Positions';
$heroCtaLink     = '#openings';
$heroBreadcrumbs = [
    ['label' => 'Home', 'url' => '/'],
    ['label' => 'About', 'url' => '/about'],
    ['label' => 'Careers']
];
include __DIR__ . '/partials/page-hero.php';
?>

<section class="section">
  <div class="container container-narrow">
    <span class="section-label">Why Join Us</span>
    <h2 class="section-title">Build a Career That Makes a Difference</h2>
    <p style="font-size: var(--text-md); color: var(--color-text-muted); line-height: var(--leading-relaxed);">
      At UrbanX Pest Control, you'll be part of a dedicated Perth team of pest management professionals protecting homes, food businesses, logistics hubs, and workplaces across Western Australia. Whether you're an experienced licensed pest management technician or service coordinator, you'll find supportive leadership, safe modern equipment, clear upfront principles, and genuine career progression.
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
        ['title' => 'Licensed Pest Management Technician', 'location' => 'Perth, WA (Metro & Surrounds)', 'type' => 'Full-time', 'dept' => 'Operations'],
        ['title' => 'Residential & Commercial Pest Inspector', 'location' => 'Perth, WA (Northern & Southern Corridors)', 'type' => 'Full-time', 'dept' => 'Technical'],
        ['title' => 'Client Service Coordinator', 'location' => 'Perth CBD, WA', 'type' => 'Full-time', 'dept' => 'Customer Care'],
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
    $ctaLink   = '/contact';
    $ctaLabel2 = ''; $ctaLink2 = '';
    include __DIR__ . '/partials/cta-banner.php';
    ?>
  </div>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>
