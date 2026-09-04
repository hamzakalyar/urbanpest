<?php
/**
 * UrbanPest — Individual Industry/Sector Page
 */

require_once __DIR__ . '/data/sectors.php';
require_once __DIR__ . '/data/services.php';
require_once __DIR__ . '/data/testimonials.php';
require_once __DIR__ . '/partials/pest-symbols.php';

$slug = isset($_GET['slug']) ? $_GET['slug'] : 'food-processing';
$sector = isset($sectorsLookup[$slug]) ? $sectorsLookup[$slug] : $sectorsLookup['food-processing'];

$pageTitle = $sector['name'] . ' Pest Management — UrbanPest';
$pageDescription = $sector['short_desc'];
$currentPage = 'industries';

include __DIR__ . '/partials/header.php';
?>

<!-- Page Hero -->
<?php
$heroTitle       = $sector['name'];
$heroDesc        = $sector['short_desc'];
$heroTag         = 'Melbourne Sector Biosecurity — ' . (isset($sector['accent_tag']) ? $sector['accent_tag'] : 'HACCP & AEPMA Aligned');
$heroBadge       = isset($sector['badge_text']) ? $sector['badge_text'] : 'HACCP Australia Endorsed';
$heroImage       = isset($sector['image']) ? $sector['image'] : '/assets/images/food-inspection.jpg';
$heroStatVal     = isset($sector['stat_val']) ? $sector['stat_val'] : '99.8%';
$heroStatLabel   = isset($sector['stat_label']) ? $sector['stat_label'] : 'Audit Compliance Rate';
$heroCtaText     = 'Request ' . $sector['name'] . ' Audit';
$heroCtaLink     = '/contact.php?sector=' . urlencode($sector['slug']);
$heroWaLink      = getWhatsAppLink($sector['name'] . ' Facility Audit');
$heroBreadcrumbs = [
    ['label' => 'Home', 'url' => '/index.php'],
    ['label' => 'Melbourne Sectors', 'url' => '/industries.php'],
    ['label' => $sector['name']]
];
include __DIR__ . '/partials/page-hero.php';
?>

<!-- Description -->
<section class="section">
  <div class="container container-narrow">
    <p style="font-size: var(--text-md); line-height: var(--leading-relaxed); color: var(--color-text-muted);">
      <?php echo htmlspecialchars($sector['description']); ?>
    </p>
  </div>
</section>

<!-- Pest Risks -->
<section class="section section-alt">
  <div class="container">
    <div class="section-header text-left">
      <span class="section-label">Key Challenges</span>
      <h2 class="section-title">Pest Risks in <?php echo htmlspecialchars($sector['name']); ?></h2>
    </div>

    <div class="risk-list">
      <?php foreach ($sector['pest_risks'] as $risk): 
        $threat = getPestSymbol($risk['name']);
      ?>
        <div class="risk-item">
          <div class="risk-item-border" style="background: <?php echo $threat['color']; ?>;"></div>
          
          <div class="risk-media-thumb">
            <img src="<?php echo $threat['pic']; ?>" alt="<?php echo htmlspecialchars($risk['name']); ?>" class="risk-thumb-img" loading="lazy">
            <div class="risk-thumb-badge" style="color: <?php echo $threat['color']; ?>;">
              <?php echo $threat['svg']; ?>
            </div>
          </div>

          <div class="risk-content">
            <div class="risk-meta-row">
              <span class="risk-meta-tag" style="background: <?php echo $threat['tag_bg']; ?>; color: <?php echo $threat['tag_color']; ?>; border: 1px solid <?php echo $threat['border']; ?>;">
                <?php echo htmlspecialchars($threat['tag']); ?>
              </span>
              <span class="risk-severity-badge">
                <span class="severity-dot" style="background: <?php echo $threat['color']; ?>;"></span>
                <?php echo htmlspecialchars($threat['severity']); ?>
              </span>
            </div>
            <h4><?php echo htmlspecialchars($risk['name']); ?></h4>
            <p><?php echo htmlspecialchars($risk['desc']); ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Relevant Services -->
<section class="section">
  <div class="container">
    <div class="section-header text-left">
      <span class="section-label">Our Solutions</span>
      <h2 class="section-title">Relevant Services for <?php echo htmlspecialchars($sector['name']); ?></h2>
    </div>

    <div class="grid grid-2 grid-gap-lg">
      <?php foreach ($sector['relevant_services'] as $serviceSlug): ?>
        <?php if (isset($allServices[$serviceSlug])): ?>
          <?php $service = $allServices[$serviceSlug]; ?>
          <?php include __DIR__ . '/partials/service-card.php'; ?>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Testimonial -->
<section class="section section-dark">
  <div class="container">
    <?php
    $tIndex = $sector['testimonial_index'] ?? 0;
    $testimonial = $testimonials[$tIndex];
    include __DIR__ . '/partials/testimonial.php';
    ?>
  </div>
</section>

<!-- CTA -->
<section class="section">
  <div class="container">
    <?php
    $ctaTitle  = 'Protect Your ' . $sector['name'] . ' Operations';
    $ctaText   = 'Our sector specialists will design a pest management program tailored to your specific risks, regulatory standards, and operational needs.';
    $ctaLabel  = 'Get a Tailored Proposal';
    $ctaLink   = '/contact.php';
    $ctaLabel2 = '';
    $ctaLink2  = '';
    include __DIR__ . '/partials/cta-banner.php';
    ?>
  </div>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>
