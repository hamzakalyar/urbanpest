<?php
/**
 * UrbanPest — Reusable Page Hero Component
 * NUST-inspired high-impact layout with dynamic photography, accent bars, glass breadcrumbs, and floating badges.
 *
 * Expected variables (all optional with defaults):
 * - $heroTitle (string)
 * - $heroDesc (string)
 * - $heroTag (string)
 * - $heroBadge (string)
 * - $heroImage (string)
 * - $heroWatermark (string)
 * - $heroStatVal (string)
 * - $heroStatLabel (string)
 * - $heroBreadcrumbs (array of ['label' => '', 'url' => ''])
 * - $heroCtaText (string)
 * - $heroCtaLink (string)
 */

$heroTitle       = !empty($heroTitle) ? $heroTitle : 'Commercial Pest Solutions';
$heroDesc        = !empty($heroDesc) ? $heroDesc : 'Enterprise biosecurity, proactive prevention, and rapid 24/7 technical dispatch across global facilities.';
$heroTag         = !empty($heroTag) ? $heroTag : 'COMMERCIAL DIVISION // SCIENTIFIC IPM';
$heroBadge       = !empty($heroBadge) ? $heroBadge : 'ISO 22000 & BRCGS Aligned';
$heroImage       = !empty($heroImage) ? $heroImage : '/assets/images/hero-technician.jpg';
$heroWatermark   = !empty($heroWatermark) ? $heroWatermark : 'URBANPEST';
$heroStatVal     = !empty($heroStatVal) ? $heroStatVal : '99.8%';
$heroStatLabel   = !empty($heroStatLabel) ? $heroStatLabel : 'Audit Pass Rate';
$heroCtaText     = !empty($heroCtaText) ? $heroCtaText : 'Schedule Facility Audit';
$heroCtaLink     = !empty($heroCtaLink) ? $heroCtaLink : '/contact.php';
$heroBreadcrumbs = !empty($heroBreadcrumbs) ? $heroBreadcrumbs : [
    ['label' => 'Home', 'url' => '/index.php'],
    ['label' => $heroTitle]
];
?>

<section class="page-hero">
  <!-- Full-bleed background photo overlay with deep dark gradient -->
  <div class="page-hero-bg" style="background-image: url('<?php echo htmlspecialchars($heroImage); ?>');" aria-hidden="true"></div>
  
  <!-- Subtle institutional watermark typography -->
  <div class="page-hero-watermark" aria-hidden="true"><?php echo htmlspecialchars($heroWatermark); ?></div>

  <div class="container">
    <div class="page-hero-grid">
      <!-- Left Column: Content & Typography -->
      <div class="page-hero-content">
        <!-- Glassmorphism Breadcrumbs -->
        <nav class="hero-breadcrumbs hero-animate" aria-label="Breadcrumbs">
          <?php 
          $crumbCount = count($heroBreadcrumbs);
          foreach ($heroBreadcrumbs as $index => $crumb): 
            $isLast = ($index === $crumbCount - 1);
          ?>
            <?php if (!$isLast && !empty($crumb['url'])): ?>
              <a href="<?php echo htmlspecialchars($crumb['url']); ?>" class="hero-crumb-link">
                <?php if ($index === 0): ?>
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin-right: 4px; vertical-align: -2px;"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                <?php endif; ?>
                <?php echo htmlspecialchars($crumb['label']); ?>
              </a>
              <span class="hero-crumb-separator" aria-hidden="true">
                <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
              </span>
            <?php else: ?>
              <span class="hero-crumb-current" aria-current="page"><?php echo htmlspecialchars($crumb['label']); ?></span>
            <?php endif; ?>
          <?php endforeach; ?>
        </nav>

        <!-- Division / Sector Pill -->
        <div class="hero-tag-badge hero-animate">
          <span class="hero-tag-pulse" aria-hidden="true"></span>
          <span><?php echo htmlspecialchars($heroTag); ?></span>
        </div>

        <!-- Title Block with NUST-inspired Emerald Vertical Accent Bar -->
        <div class="hero-title-wrap hero-animate">
          <div class="hero-accent-bar" aria-hidden="true"></div>
          <h1 class="hero-title"><?php echo htmlspecialchars($heroTitle); ?></h1>
        </div>

        <!-- Descriptive Copy -->
        <p class="hero-desc hero-animate"><?php echo htmlspecialchars($heroDesc); ?></p>

        <!-- Action / Trust Verification Bar -->
        <div class="hero-actions hero-animate">
          <a href="<?php echo htmlspecialchars($heroCtaLink); ?>" class="btn btn-primary">
            <?php echo htmlspecialchars($heroCtaText); ?>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
          </a>
          <div class="hero-live-badge">
            <span class="hero-live-dot" aria-hidden="true"></span>
            <span>24/7 Global Response Active</span>
          </div>
        </div>
      </div>

      <!-- Right Column: Framed Photographic Hero Card with NUST-inspired Badges -->
      <div class="page-hero-visual hero-animate">
        <div class="hero-visual-decor" aria-hidden="true"></div>
        <div class="hero-image-frame">
          <img src="<?php echo htmlspecialchars($heroImage); ?>" alt="<?php echo htmlspecialchars($heroTitle); ?> Commercial Pest Management" class="hero-visual-img" loading="eager" />
          
          <!-- Top Floating Certification Badge -->
          <div class="hero-visual-badge">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#0FA968" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
            <span><?php echo htmlspecialchars($heroBadge); ?></span>
          </div>

          <!-- Bottom Floating Frosted Glass Stat Chip -->
          <div class="hero-visual-stat">
            <span class="hero-stat-val"><?php echo htmlspecialchars($heroStatVal); ?></span>
            <span class="hero-stat-lbl"><?php echo htmlspecialchars($heroStatLabel); ?></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
