<?php
$pageTitle = 'Our Locations — UrbanPest';
$pageDescription = 'Find UrbanPest pest management services in your region. Operating across 90+ countries with local expertise.';
$currentPage = 'about';
include __DIR__ . '/partials/header.php';
?>

<!-- Page Hero -->
<?php
$heroTitle       = 'Global Service Network';
$heroDesc        = 'With dedicated operational hubs across 90+ countries, certified local technicians and emergency dispatch units deliver rapid, standardized commercial pest management.';
$heroTag         = 'GLOBAL LOGISTICS // LOCALIZED EXPERTISE';
$heroBadge       = '1,200+ Active Service Depots';
$heroImage       = '/assets/images/green-fleet.jpg';
$heroWatermark   = 'NETWORK';
$heroStatVal     = '90+';
$heroStatLabel   = 'Operating Countries Worldwide';
$heroCtaText     = 'Find Regional Hub';
$heroCtaLink     = '#regions';
$heroBreadcrumbs = [
    ['label' => 'Home', 'url' => '/index.php'],
    ['label' => 'About', 'url' => '/about.php'],
    ['label' => 'Global Locations']
];
include __DIR__ . '/partials/page-hero.php';
?>

<section class="section">
  <div class="container">
    <div class="section-header">
      <span class="section-label">Global Presence</span>
      <h2 class="section-title">Find Your Local UrbanPest Team</h2>
      <p class="section-subtitle centered">Our globally consistent service standards are delivered by locally expert teams who understand your region's pest ecology, regulations, and business environment.</p>
    </div>

    <div class="grid grid-3 grid-gap-xl">
      <?php
      $regions = [
        ['name' => 'United Kingdom & Ireland', 'cities' => 'London, Manchester, Birmingham, Dublin, Edinburgh', 'flag' => '🇬🇧'],
        ['name' => 'United States & Canada', 'cities' => 'New York, Chicago, Los Angeles, Toronto, Vancouver', 'flag' => '🇺🇸'],
        ['name' => 'Germany & Central Europe', 'cities' => 'Berlin, Munich, Frankfurt, Vienna, Zurich', 'flag' => '🇩🇪'],
        ['name' => 'France & Benelux', 'cities' => 'Paris, Lyon, Brussels, Amsterdam, Luxembourg', 'flag' => '🇫🇷'],
        ['name' => 'Australia & New Zealand', 'cities' => 'Sydney, Melbourne, Brisbane, Auckland, Perth', 'flag' => '🇦🇺'],
        ['name' => 'Southeast Asia', 'cities' => 'Singapore, Kuala Lumpur, Bangkok, Jakarta, Manila', 'flag' => '🇸🇬'],
        ['name' => 'Middle East', 'cities' => 'Dubai, Riyadh, Doha, Abu Dhabi, Kuwait City', 'flag' => '🇦🇪'],
        ['name' => 'East Africa', 'cities' => 'Nairobi, Dar es Salaam, Kampala, Addis Ababa', 'flag' => '🇰🇪'],
        ['name' => 'Southern Africa', 'cities' => 'Johannesburg, Cape Town, Durban, Harare', 'flag' => '🇿🇦'],
      ];
      foreach ($regions as $region):
      ?>
        <div class="card card-no-hover">
          <div class="card-body">
            <div style="font-size: 2rem; margin-bottom: var(--space-sm);"><?php echo $region['flag']; ?></div>
            <h3 style="font-size: var(--text-lg); margin-bottom: var(--space-sm);"><?php echo htmlspecialchars($region['name']); ?></h3>
            <p style="font-size: var(--text-sm); color: var(--color-text-muted);"><?php echo htmlspecialchars($region['cities']); ?></p>
            <a href="/contact.php" class="link-arrow" style="margin-top: var(--space-md); display:inline-flex;">
              Contact local team
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section section-alt">
  <div class="container">
    <?php
    $ctaTitle  = 'Can\'t Find Your Region?';
    $ctaText   = 'We\'re expanding rapidly. Contact our global team and we\'ll connect you with the nearest UrbanPest operation.';
    $ctaLabel  = 'Contact Global Team';
    $ctaLink   = '/contact.php';
    $ctaLabel2 = ''; $ctaLink2 = '';
    include __DIR__ . '/partials/cta-banner.php';
    ?>
  </div>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>
