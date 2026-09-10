<?php
/**
 * UrbanX Pest Control — Enterprise Page Hero Component
 * Clean canvas, authoritative typography,
 * direct Perth phone (+61 410 148 126), and direct WhatsApp dispatch.
 *
 * Expected variables (all optional with defaults):
 * - $heroTitle (string)
 * - $heroDesc (string)
 * - $heroTag (string)
 * - $heroBadge (string)
 * - $heroImage (string)
 * - $heroStatVal (string)
 * - $heroStatLabel (string)
 * - $heroBreadcrumbs (array of ['label' => '', 'url' => ''])
 * - $heroCtaText (string)
 * - $heroCtaLink (string)
 * - $heroWaLink (string)
 */

global $appConfig;
require_once __DIR__ . '/../data/config.php';

$heroTitle       = !empty($heroTitle) ? $heroTitle : 'Perth Pest Management Services';
$heroDesc        = !empty($heroDesc) ? $heroDesc : 'Professional, safe, and responsible pest management for residential and commercial properties across Perth.';
$heroTag         = !empty($heroTag) ? $heroTag : 'Perth Pest Division — Licensed & Responsible';
$heroBadge       = !empty($heroBadge) ? $heroBadge : 'Licensed Western Australian Pest Specialists';
$heroImage       = !empty($heroImage) ? $heroImage : '/assets/images/hero-technician.jpg';
$heroStatVal           = !empty($heroStatVal) ? $heroStatVal : 'Same-Day';
$heroStatLabel         = !empty($heroStatLabel) ? $heroStatLabel : 'Service Dispatch';
$heroCtaText           = !empty($heroCtaText) ? $heroCtaText : 'Request Residential Survey';
$heroCtaLink           = !empty($heroCtaLink) ? $heroCtaLink : '/book?type=residential';
$heroCtaCommercialText = !empty($heroCtaCommercialText) ? $heroCtaCommercialText : 'Request Commercial Survey';
$heroCtaCommercialLink = !empty($heroCtaCommercialLink) ? $heroCtaCommercialLink : '/book?type=commercial';
$heroWaLink            = !empty($heroWaLink) ? $heroWaLink : getWhatsAppLink($heroTitle);
$heroBreadcrumbs       = !empty($heroBreadcrumbs) ? $heroBreadcrumbs : [
    ['label' => 'Home', 'url' => '/'],
    ['label' => $heroTitle]
];
?>

<section class="corporate-hero" aria-label="<?php echo htmlspecialchars($heroTitle); ?> Overview">
  <div class="container">
    <!-- Breadcrumb Trail -->
    <nav class="corp-breadcrumbs" aria-label="Breadcrumbs">
      <ol class="corp-crumb-list">
        <?php 
        $crumbCount = count($heroBreadcrumbs);
        foreach ($heroBreadcrumbs as $index => $crumb): 
          $isLast = ($index === $crumbCount - 1);
        ?>
          <li class="corp-crumb-item">
            <?php if (!$isLast && !empty($crumb['url'])): ?>
              <a href="<?php echo htmlspecialchars($crumb['url']); ?>" class="corp-crumb-link">
                <?php if ($index === 0): ?>
                  <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="corp-crumb-home-icon"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                <?php endif; ?>
                <?php echo htmlspecialchars($crumb['label']); ?>
              </a>
              <span class="corp-crumb-sep" aria-hidden="true">›</span>
            <?php else: ?>
              <span class="corp-crumb-current" aria-current="page"><?php echo htmlspecialchars($crumb['label']); ?></span>
            <?php endif; ?>
          </li>
        <?php endforeach; ?>
      </ol>
    </nav>

    <!-- Main Hero Grid -->
    <div class="corporate-hero-grid">
      <!-- Left Column: Content & Authority -->
      <div class="corporate-hero-content">
        <!-- Division & Operational Scope Pill -->
        <div class="corp-scope-badge">
          <span class="corp-scope-indicator"></span>
          <span><?php echo htmlspecialchars($heroTag); ?></span>
        </div>

        <!-- Headline -->
        <h1 class="corp-hero-title"><?php echo htmlspecialchars($heroTitle); ?></h1>

        <!-- Executive Description -->
        <p class="corp-hero-desc"><?php echo htmlspecialchars($heroDesc); ?></p>

        <!-- Action CTAs -->
        <div class="corp-hero-actions" style="display:flex; align-items:center; flex-wrap:wrap; gap:10px;">
          <a href="<?php echo htmlspecialchars($heroCtaLink); ?>" class="btn btn-primary corp-btn-primary <?php echo !empty($heroBookingSlug) ? 'open-booking-modal' : ''; ?>" <?php if (!empty($heroBookingSlug)): ?>data-service-slug="<?php echo htmlspecialchars($heroBookingSlug); ?>" data-service-name="<?php echo htmlspecialchars($heroTitle); ?>" data-property-type="residential"<?php endif; ?>>
            <?php echo htmlspecialchars($heroCtaText); ?>
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
          </a>

          <?php if (!empty($heroCtaCommercialText)): ?>
          <a href="<?php echo htmlspecialchars($heroCtaCommercialLink); ?>" class="btn corp-btn-secondary <?php echo !empty($heroBookingSlug) ? 'open-booking-modal' : ''; ?>" <?php if (!empty($heroBookingSlug)): ?>data-service-slug="<?php echo htmlspecialchars($heroBookingSlug); ?>" data-service-name="<?php echo htmlspecialchars($heroTitle); ?>" data-property-type="commercial"<?php endif; ?> style="background: #FFFFFF; border: 1px solid #CBD5E1; color: #0B1F3A; font-weight: 600; padding: 12px 20px; border-radius: 8px;">
            <?php echo htmlspecialchars($heroCtaCommercialText); ?>
          </a>
          <?php endif; ?>
          
          <a href="<?php echo htmlspecialchars($heroWaLink); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp corp-btn-whatsapp">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.477 2 12c0 1.89.525 3.66 1.438 5.168L2.05 21.65a.75.75 0 0 0 .9.9l4.582-1.388A9.957 9.957 0 0 0 12 22c5.523 0 10-4.477 10-10S17.523 2 12 2zm4.86 13.67c-.22.61-1.07 1.18-1.74 1.25-.62.06-1.42.09-3.95-1.02-2.92-1.28-4.83-4.27-4.97-4.47-.15-.2-1.18-1.57-1.18-2.99 0-1.42.74-2.12 1-2.41.27-.29.58-.36.78-.36.2 0 .39.01.56.01.18 0 .42-.07.66.5.25.6.85 2.07.93 2.22.07.15.12.33.02.53-.1.2-.15.32-.3.49-.14.17-.31.38-.44.51-.15.15-.3.31-.13.6.17.29.76 1.25 1.63 2.02 1.12.99 2.06 1.3 2.35 1.45.29.14.46.12.63-.07.17-.2.73-.85.93-1.14.2-.29.39-.24.66-.14.27.1 1.71.81 2 .95.3.15.49.22.56.34.07.12.07.71-.15 1.32z" fill="currentColor"/>
            </svg>
            <span>WhatsApp</span>
          </a>

          <a href="tel:<?php echo htmlspecialchars($appConfig['phone_raw'] ?? '+61410148126'); ?>" class="corp-phone-badge" title="Call Perth Dispatch">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            <div>
              <small>Direct Line</small>
              <strong><?php echo htmlspecialchars($appConfig['phone_display'] ?? '+61 410 148 126'); ?></strong>
            </div>
          </a>
        </div>

        <!-- Service Trust & Reliability Guarantees -->
        <div class="corp-compliance-strip">
          <div class="corp-compliance-item">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent, #D91C24)" stroke-width="2.2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
            <span>Same-Day Perth Dispatch</span>
          </div>
          <div class="corp-compliance-item">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent, #D91C24)" stroke-width="2.2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>
            <span>Licensed Western Australian Pest Technicians</span>
          </div>
          <div class="corp-compliance-item">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent, #D91C24)" stroke-width="2.2"><path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm0 18a8 8 0 1 1 8-8 8 8 0 0 1-8 8z"></path></svg>
            <span>Safe & Responsible Practices</span>
          </div>
          <div class="corp-compliance-item">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent, #D91C24)" stroke-width="2.2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
            <span>Clear Upfront Pricing</span>
          </div>
        </div>
      </div>

      <!-- Right Column: Clean Photographic Showcase -->
      <div class="corporate-hero-visual">
        <div class="corp-visual-card">
          <div class="corp-visual-media">
            <img src="<?php echo htmlspecialchars($heroImage); ?>" alt="<?php echo htmlspecialchars($heroTitle); ?> Perth Pest Services" class="corp-visual-img" loading="eager" />
          </div>
          <div class="corp-visual-caption">
            <div class="corp-caption-main">
              <span class="corp-caption-tag"><?php echo htmlspecialchars($heroBadge); ?></span>
              <h4 class="corp-caption-title">Residential & Commercial Division</h4>
              <p class="corp-caption-sub">Serving Perth CBD, Eastern, Northern, Western & South Eastern Suburbs</p>
            </div>
            <div class="corp-caption-stat">
              <span class="corp-stat-number"><?php echo htmlspecialchars($heroStatVal); ?></span>
              <span class="corp-stat-text"><?php echo htmlspecialchars($heroStatLabel); ?></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
