<?php
/**
 * UrbanPest — Services Overview Page
 */

$pageTitle = 'Our Services — UrbanPest';
$pageDescription = 'Explore UrbanPest\'s complete range of commercial pest control and digital pest monitoring services. From rodent management to AI-powered smart traps.';
$currentPage = 'services';

require_once __DIR__ . '/data/services.php';
include __DIR__ . '/partials/header.php';
?>

<!-- Page Hero -->
<?php
$heroTitle       = 'Commercial Pest Services';
$heroDesc        = 'Comprehensive pest management solutions backed by entomological science, delivered by certified technicians, and powered by connected IoT surveillance networks.';
$heroTag         = 'CERTIFIED SOLUTIONS // SCIENTIFIC IPM';
$heroBadge       = 'Global Standards & CEPA Certified';
$heroImage       = '/assets/images/hero-technician.jpg';
$heroWatermark   = 'SERVICES';
$heroStatVal     = '90+ Countries';
$heroStatLabel   = 'Global Operational Reach';
$heroCtaText     = 'Request Commercial Assessment';
$heroCtaLink     = '/contact.php';
$heroBreadcrumbs = [
    ['label' => 'Home', 'url' => '/index.php'],
    ['label' => 'Services']
];
include __DIR__ . '/partials/page-hero.php';
?>

<!-- Service Categories -->
<?php foreach ($serviceCategories as $catIndex => $category): ?>
<section class="section <?php echo $catIndex % 2 ? 'section-alt' : ''; ?>" id="<?php echo $category['slug']; ?>">
  <div class="container">
    <div class="section-header text-left">
      <span class="section-label"><?php echo $catIndex === 0 ? 'Traditional + Integrated' : 'Connected Technology'; ?></span>
      <h2 class="section-title"><?php echo htmlspecialchars($category['name']); ?></h2>
      <p class="section-subtitle"><?php echo htmlspecialchars($category['short_desc']); ?></p>
    </div>

    <!-- Category Visual Showcase -->
    <div style="margin-bottom: var(--space-2xl); border-radius: var(--radius-xl); overflow: hidden; max-height: 360px; box-shadow: var(--shadow-md); border: 1px solid var(--color-border); position: relative;">
      <img src="<?php echo $catIndex === 0 ? '/assets/images/connected-monitoring.jpg' : '/assets/images/smart-iot-trap.jpg'; ?>" alt="<?php echo htmlspecialchars($category['name']); ?>" style="width: 100%; height: 360px; object-fit: cover; display: block;">
      <div style="position: absolute; bottom: 16px; left: 16px; background: rgba(11,31,58,0.88); backdrop-filter: blur(8px); padding: 10px 18px; border-radius: var(--radius-md); color: #fff; font-size: var(--text-xs); border-left: 3px solid var(--color-emerald);">
        <strong><?php echo $catIndex === 0 ? 'Enterprise On-Site Service' : 'UrbanPest Connect™ Hardware'; ?></strong> • Certified Commercial Deployment
      </div>
    </div>

    <div class="grid grid-2 grid-gap-lg">
      <?php foreach ($category['subservices'] as $service): ?>
        <?php include __DIR__ . '/partials/service-card.php'; ?>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endforeach; ?>

<!-- CTA -->
<section class="section">
  <div class="container">
    <?php
    $ctaTitle  = 'Need a Tailored Solution?';
    $ctaText   = 'Every facility is different. Our specialists will design a pest management program matched to your industry, your environment, and your compliance requirements.';
    $ctaLabel  = 'Request a Free Survey';
    $ctaLink   = '/contact.php';
    $ctaLabel2 = '';
    $ctaLink2  = '';
    include __DIR__ . '/partials/cta-banner.php';
    ?>
  </div>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>
