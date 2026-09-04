<?php
/**
 * UrbanPest — Individual Service Page
 * Uses ?slug= parameter to look up service data.
 */

require_once __DIR__ . '/data/services.php';
require_once __DIR__ . '/data/sectors.php';
require_once __DIR__ . '/data/config.php';
require_once __DIR__ . '/partials/pest-symbols.php';

$slug = isset($_GET['slug']) ? $_GET['slug'] : 'rodent-control';
$service = isset($allServices[$slug]) ? $allServices[$slug] : $allServices['rodent-control'];
$serviceWhatsAppLink = getWhatsAppLink($service['name']);

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
$heroWaLink      = $serviceWhatsAppLink;
$heroBreadcrumbs = [
    ['label' => 'Home', 'url' => '/index.php'],
    ['label' => 'Services', 'url' => '/services.php'],
    ['label' => $service['name']]
];
include __DIR__ . '/partials/page-hero.php';
?>

<!-- WhatsApp Rapid Commercial Dispatch Banner -->
<section class="section" style="padding-top: var(--space-xl); padding-bottom: var(--space-lg);">
  <div class="container">
    <div style="background: linear-gradient(135deg, #071527, #0B1F3A); border-radius: var(--radius-xl); padding: 24px 32px; box-shadow: 0 10px 30px rgba(11,31,58,0.12); border: 1px solid rgba(255,255,255,0.09); display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 20px;">
      <div style="display: flex; align-items: center; gap: 18px;">
        <div style="width: 52px; height: 52px; border-radius: 14px; background: #25D366; display: flex; align-items: center; justify-content: center; color: #fff; box-shadow: 0 4px 14px rgba(37,211,102,0.4); flex-shrink: 0;">
          <svg width="28" height="28" viewBox="0 0 24 24" fill="currentColor">
            <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.664-.698c.969.586 1.761.887 2.796.887 3.182 0 5.768-2.587 5.768-5.768.001-3.18-2.584-5.772-5.768-5.772zm3.393 8.163c-.144.405-.837.774-1.17.824-.312.045-.694.062-2.18-.553-1.898-.785-3.125-2.73-3.22-2.856-.095-.127-.768-1.021-.768-1.948 0-.927.489-1.383.663-1.572.174-.189.381-.237.508-.237.126 0 .253.002.364.007.117.006.275-.044.43.329.16.386.545 1.33.593 1.428.048.098.08.213.016.34-.064.127-.096.206-.19.317-.095.11-.2.246-.285.331-.095.095-.195.198-.084.388.111.19.493.813 1.057 1.317.727.649 1.339.851 1.53.946.19.095.302.079.414-.047.111-.127.476-.554.603-.744.127-.19.254-.159.428-.095.174.063 1.109.523 1.3.618.19.095.317.143.365.222.048.079.048.46-.096.865z"/>
          </svg>
        </div>
        <div>
          <div style="font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.08em; font-weight: 700; color: #34D399; margin-bottom: 3px;">
            Commercial WhatsApp Support
          </div>
          <h3 style="font-family: var(--font-heading); font-size: 1.15rem; color: #fff; margin: 0; font-weight: 700;">
            Need Fast-Track <?php echo htmlspecialchars($service['name']); ?> Assessment?
          </h3>
          <p style="font-size: 0.85rem; color: #94A3B8; margin: 2px 0 0 0;">
            Connect directly with an on-duty technical specialist for same-day triage and site survey dispatch.
          </p>
        </div>
      </div>

      <a href="<?php echo htmlspecialchars($serviceWhatsAppLink); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp" style="padding: 12px 22px; font-size: 0.925rem; font-weight: 700; box-shadow: 0 4px 14px rgba(37,211,102,0.35);">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
          <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.664-.698c.969.586 1.761.887 2.796.887 3.182 0 5.768-2.587 5.768-5.768.001-3.18-2.584-5.772-5.768-5.772zm3.393 8.163c-.144.405-.837.774-1.17.824-.312.045-.694.062-2.18-.553-1.898-.785-3.125-2.73-3.22-2.856-.095-.127-.768-1.021-.768-1.948 0-.927.489-1.383.663-1.572.174-.189.381-.237.508-.237.126 0 .253.002.364.007.117.006.275-.044.43.329.16.386.545 1.33.593 1.428.048.098.08.213.016.34-.064.127-.096.206-.19.317-.095.11-.2.246-.285.331-.095.095-.195.198-.084.388.111.19.493.813 1.057 1.317.727.649 1.339.851 1.53.946.19.095.302.079.414-.047.111-.127.476-.554.603-.744.127-.19.254-.159.428-.095.174.063 1.109.523 1.3.618.19.095.317.143.365.222.048.079.048.46-.096.865z"/>
        </svg>
        Chat on WhatsApp
      </a>
    </div>
  </div>
</section>

<!-- Description -->
<section class="section" style="padding-top: 0;">
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
    $ctaLink   = '/contact.php?service=' . urlencode($service['slug']);
    $ctaLabel2 = 'Chat on WhatsApp';
    $ctaLink2  = $serviceWhatsAppLink;
    include __DIR__ . '/partials/cta-banner.php';
    ?>
  </div>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>
