<?php
/**
 * UrbanPest — Individual Service Page
 * Uses ?slug= parameter to look up service data.
 */

require_once __DIR__ . '/data/services.php';
require_once __DIR__ . '/data/sectors.php';
require_once __DIR__ . '/partials/pest-symbols.php';

$slug = isset($_GET['slug']) ? $_GET['slug'] : 'rodent-control';
$service = isset($allServices[$slug]) ? $allServices[$slug] : $allServices['rodent-control'];

$pageTitle = $service['name'] . ' — UrbanPest';
$pageDescription = $service['short_desc'];
$currentPage = 'services';

include __DIR__ . '/partials/header.php';
?>

<!-- Page Hero -->
<?php
$heroTitle       = $service['name'];
$heroDesc        = $service['short_desc'];
$heroTag         = isset($service['accent_tag']) ? $service['accent_tag'] : 'SPECIALISED SERVICE DIVISION';
$heroBadge       = isset($service['badge_text']) ? $service['badge_text'] : 'BPCA & CEPA Certified';
$heroImage       = isset($service['image']) ? $service['image'] : '/assets/images/hero-technician.jpg';
$heroWatermark   = isset($service['watermark']) ? $service['watermark'] : strtoupper($service['name']);
$heroStatVal     = isset($service['stat_val']) ? $service['stat_val'] : '99.5%';
$heroStatLabel   = isset($service['stat_label']) ? $service['stat_label'] : 'Efficacy Success Rate';
$heroCtaText     = 'Book ' . $service['name'] . ' Assessment';
$heroCtaLink     = '/contact.php?service=' . urlencode($service['slug']);
$heroBreadcrumbs = [
    ['label' => 'Home', 'url' => '/index.php'],
    ['label' => 'Services', 'url' => '/services.php'],
    ['label' => $service['name']]
];
include __DIR__ . '/partials/page-hero.php';
?>

<!-- Description -->
<section class="section">
  <div class="container container-narrow">
    <p style="font-size: var(--text-md); line-height: var(--leading-relaxed); color: var(--color-text-muted);">
      <?php echo htmlspecialchars($service['description']); ?>
    </p>
  </div>
</section>

<!-- Key Challenges Solved -->
<?php if (!empty($service['key_challenges'])): ?>
<section class="section section-alt">
  <div class="container">
    <div class="section-header text-left">
      <span class="section-label">Key Challenges</span>
      <h2 class="section-title">Critical Threats Solved by <?php echo htmlspecialchars($service['name']); ?></h2>
      <p class="section-subtitle">Identified vulnerabilities mitigated by our certified entomologists and connected biosecurity systems.</p>
    </div>

    <div class="risk-list">
      <?php foreach ($service['key_challenges'] as $challenge): 
        $threat = getPestSymbol($challenge['name']);
      ?>
        <div class="risk-item">
          <div class="risk-item-border" style="background: <?php echo $threat['color']; ?>;"></div>
          
          <div class="risk-media-thumb">
            <img src="<?php echo $threat['pic']; ?>" alt="<?php echo htmlspecialchars($challenge['name']); ?>" class="risk-thumb-img" loading="lazy">
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
            <h4><?php echo htmlspecialchars($challenge['name']); ?></h4>
            <p><?php echo htmlspecialchars($challenge['desc']); ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- What's Included -->
<section class="section">
  <div class="container">
    <div class="section-header text-left">
      <span class="section-label">What's Included</span>
      <h2 class="section-title">Service Coverage</h2>
    </div>

    <div class="grid grid-2 grid-gap-lg">
      <?php foreach ($service['includes'] as $item): ?>
        <div class="flex items-center gap-md" style="padding: var(--space-md); background: var(--color-white); border-radius: var(--radius-md); border: 1px solid var(--color-border);">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-emerald)" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
          <span style="font-weight: var(--weight-medium);"><?php echo htmlspecialchars($item); ?></span>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- How It Works -->
<section class="section">
  <div class="container">
    <div class="section-header">
      <span class="section-label">Our Process</span>
      <h2 class="section-title">How It Works</h2>
    </div>

    <div class="process-steps">
      <?php foreach ($service['steps'] as $step): ?>
        <div class="process-step">
          <h4><?php echo htmlspecialchars($step['title']); ?></h4>
          <p><?php echo htmlspecialchars($step['desc']); ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Related Industries -->
<?php if (!empty($service['related_industries'])): ?>
<section class="section section-alt">
  <div class="container">
    <div class="section-header">
      <span class="section-label">Industries</span>
      <h2 class="section-title">Industries We Serve with This Solution</h2>
    </div>

    <div class="sector-grid">
      <?php foreach ($service['related_industries'] as $sectorSlug): ?>
        <?php if (isset($sectorsLookup[$sectorSlug])): ?>
          <?php $sector = $sectorsLookup[$sectorSlug]; ?>
          <?php include __DIR__ . '/partials/sector-card.php'; ?>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- CTA -->
<section class="section">
  <div class="container">
    <?php
    $ctaTitle  = 'Protect Your Business with ' . $service['name'];
    $ctaText   = 'Our specialists are ready to design a tailored program for your facility. Get in touch for a free, no-obligation consultation.';
    $ctaLabel  = 'Request a Consultation';
    $ctaLink   = '/contact.php';
    $ctaLabel2 = '';
    $ctaLink2  = '';
    include __DIR__ . '/partials/cta-banner.php';
    ?>
  </div>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>
