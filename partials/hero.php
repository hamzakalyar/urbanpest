<?php
/**
 * UrbanPest — Hero Banner Partial
 * 
 * Variables:
 *   $heroTitle    — Main heading (HTML allowed for .highlight spans)
 *   $heroSubtitle — Subheading text
 *   $heroCta      — Primary CTA text
 *   $heroCtaLink  — Primary CTA URL
 *   $heroCta2     — Secondary CTA text (optional)
 *   $heroCtaLink2 — Secondary CTA URL (optional)
 *   $heroLabel    — Small label above title (optional)
 */

$heroTitle             = $heroTitle ?? 'Protecting What Matters Most';
$heroSubtitle          = $heroSubtitle ?? '';
$heroCta               = $heroCta ?? 'Request Residential Survey';
$heroCtaLink           = $heroCtaLink ?? '/book?type=residential';
$heroCtaCommercial     = $heroCtaCommercial ?? 'Request Commercial Survey';
$heroCtaCommercialLink = $heroCtaCommercialLink ?? '/book?type=commercial';
$heroCta2              = $heroCta2 ?? '';
$heroCtaLink2          = $heroCtaLink2 ?? '#';
$heroLabel             = $heroLabel ?? '';
?>

<?php
$heroBgImage = $heroBgImage ?? '/assets/images/hero-technician.jpg';
?>
<section class="hero" id="hero" style="background: linear-gradient(90deg, rgba(11, 31, 58, 0.97) 0%, rgba(11, 31, 58, 0.90) 42%, rgba(11, 31, 58, 0.45) 75%, rgba(11, 31, 58, 0.75) 100%), url('<?php echo htmlspecialchars($heroBgImage); ?>') center right / cover no-repeat;">
  <div class="hero-pattern"></div>
  <div class="container">
    <div class="hero-content animate-fade-in-up">
      <?php if ($heroLabel): ?>
        <div class="hero-label">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
          <?php echo $heroLabel; ?>
        </div>
      <?php endif; ?>
      
      <h1><?php echo $heroTitle; ?></h1>
      
      <?php if ($heroSubtitle): ?>
        <p class="hero-text"><?php echo $heroSubtitle; ?></p>
      <?php endif; ?>

      <!-- Enterprise Trust & Guarantee Badges -->
      <div class="hero-trust-badges">
        <div class="hero-trust-item">
          <div class="hero-stars">
            <span style="color: #F5A623;">★</span><span style="color: #F5A623;">★</span><span style="color: #F5A623;">★</span><span style="color: #F5A623;">★</span><span style="color: #F5A623;">★</span>
          </div>
          <span><strong>4.9/5</strong> Client Satisfaction</span>
        </div>
        <div class="hero-trust-divider"></div>
        <div class="hero-trust-item">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--color-emerald-light)" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
          <span><strong>Licensed</strong> WA Professional</span>
        </div>
        <div class="hero-trust-divider"></div>
        <div class="hero-trust-item">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--color-emerald-light)" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
          <span><strong>Safe & Responsible</strong> Treatments</span>
        </div>
      </div>
      
      <div class="hero-actions" style="display:flex; align-items:center; flex-wrap:wrap; gap:12px;">
        <a href="<?php echo htmlspecialchars($heroCtaLink); ?>" class="btn btn-primary btn-lg open-booking-modal" data-service-slug="household-pest-control" data-service-name="Residential Pest Survey" data-property-type="residential">
          <?php echo htmlspecialchars($heroCta); ?>
        </a>
        <?php if (!empty($heroCtaCommercial)): ?>
          <a href="<?php echo htmlspecialchars($heroCtaCommercialLink); ?>" class="btn btn-lg open-booking-modal" data-service-slug="household-pest-control" data-service-name="Commercial Pest Survey" data-property-type="commercial" style="background: rgba(255,255,255,0.12); color:#FFFFFF; border: 1px solid rgba(255,255,255,0.3); backdrop-filter: blur(8px); font-weight: 600;">
            <?php echo htmlspecialchars($heroCtaCommercial); ?>
          </a>
        <?php endif; ?>
        <?php 
        require_once __DIR__ . '/../data/config.php';
        $heroWaLink = getWhatsAppLink('Perth Pest Survey');
        ?>
        <a href="<?php echo htmlspecialchars($heroWaLink); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp btn-lg">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.477 2 12c0 1.89.525 3.66 1.438 5.168L2.05 21.65a.75.75 0 0 0 .9.9l4.582-1.388A9.957 9.957 0 0 0 12 22c5.523 0 10-4.477 10-10S17.523 2 12 2zm4.86 13.67c-.22.61-1.07 1.18-1.74 1.25-.62.06-1.42.09-3.95-1.02-2.92-1.28-4.83-4.27-4.97-4.47-.15-.2-1.18-1.57-1.18-2.99 0-1.42.74-2.12 1-2.41.27-.29.58-.36.78-.36.2 0 .39.01.56.01.18 0 .42-.07.66.5.25.6.85 2.07.93 2.22.07.15.12.33.02.53-.1.2-.15.32-.3.49-.14.17-.31.38-.44.51-.15.15-.3.31-.13.6.17.29.76 1.25 1.63 2.02 1.12.99 2.06 1.3 2.35 1.45.29.14.46.12.63-.07.17-.2.73-.85.93-1.14.2-.29.39-.24.66-.14.27.1 1.71.81 2 .95.3.15.49.22.56.34.07.12.07.71-.15 1.32z" fill="currentColor"/>
          </svg>
          WhatsApp
        </a>
        <a href="tel:<?php echo htmlspecialchars($appConfig['phone_raw'] ?? '+61410148126'); ?>" class="btn btn-secondary btn-lg" style="background: rgba(255,255,255,0.08); border-color: rgba(255,255,255,0.2);">
          Call <?php echo htmlspecialchars($appConfig['phone_display'] ?? '+61 410 148 126'); ?>
        </a>
      </div>
    </div>
  </div>
</section>
