<?php
/**
 * UrbanX Pest Control — Services Overview Page
 * Professional pest management services for residential and commercial properties across Perth.
 * Operating in accordance with Western Australian pest management licensing.
 */

$pageTitle = 'Our Pest Management Services — UrbanX Pest Control Perth';
$pageDescription = 'At UrbanX Pest Control, we provide professional pest management services for residential and commercial properties across Perth. Safe practices, licensed professionals, clear upfront pricing.';
$currentPage = 'services';

require_once __DIR__ . '/data/services.php';
include __DIR__ . '/partials/header.php';
?>

<!-- Page Hero -->
<?php
$heroTitle       = 'Professional Pest Control Services across Perth';
$heroDesc        = 'At UrbanX Pest Control, we provide professional pest management services for residential and commercial properties across Perth.';
$heroTag         = 'Perth Residential & Commercial Division';
$heroBadge       = 'Licensed Western Australian Pest Specialists';
$heroImage       = '/assets/images/hero-technician.jpg';
$heroStatVal           = '100%';
$heroStatLabel         = 'Western Australian Licensing Compliance';
$heroCtaText           = 'Request Residential Survey';
$heroCtaLink           = '/book.php?type=residential';
$heroCtaCommercialText = 'Request Commercial Survey';
$heroCtaCommercialLink = '/book.php?type=commercial';
$heroWaLink            = getWhatsAppLink('Perth Pest Management Services');
$heroBreadcrumbs       = [
    ['label' => 'Home', 'url' => '/index.php'],
    ['label' => 'Pest Management Services']
];
include __DIR__ . '/partials/page-hero.php';
?>

<!-- Statutory Western Australian Licensing Notice -->
<section style="background: #F8FAFC; border-bottom: 1px solid #E2E8F0; padding: 18px 0;">
  <div class="container">
    <div style="background: #FFFFFF; border-radius: 12px; padding: 18px 24px; border: 1px solid #E2E8F0; border-left: 5px solid var(--color-accent, #D91C24); display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 16px; box-shadow: 0 2px 8px rgba(15, 23, 42, 0.04);">
      <div style="display: flex; align-items: center; gap: 14px;">
        <div style="width: 44px; height: 44px; border-radius: 10px; background: #FEF2F2; color: #D91C24; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><polyline points="9 12 11 14 15 10"></polyline></svg>
        </div>
        <div>
          <strong style="color: #0B1F3A; font-size: 0.98rem; display: block;">Western Australian Pest Management Licensing Compliance</strong>
          <span style="color: #475569; font-size: 0.875rem;">Pest management services are provided in accordance with the requirements of the relevant Western Australian pest management licence and applicable legislation.</span>
        </div>
      </div>
      <div style="display: flex; align-items: center; gap: 10px; flex-wrap: wrap;">
        <a href="/book.php?type=residential" class="btn btn-sm btn-primary">Residential Survey</a>
        <a href="/book.php?type=commercial" class="btn btn-sm btn-outline" style="border-color: #CBD5E1; color: #0B1F3A;">Commercial Survey</a>
      </div>
    </div>
  </div>
</section>

<!-- Service Categories -->
<?php foreach ($serviceCategories as $catIndex => $category): ?>
<section class="section <?php echo $catIndex % 2 ? 'section-alt' : ''; ?>" id="<?php echo $category['slug']; ?>">
  <div class="container">
    <div class="section-header text-left">
      <span class="section-label"><?php echo $catIndex === 0 ? 'Residential & Commercial Pest Management' : 'Specialist Inspections & Targeted Treatments'; ?></span>
      <h2 class="section-title"><?php echo htmlspecialchars($category['name']); ?></h2>
      <p class="section-subtitle"><?php echo htmlspecialchars($category['short_desc']); ?></p>
    </div>

    <div class="grid grid-2 grid-gap-lg">
      <?php foreach ($category['subservices'] as $service): ?>
        <?php include __DIR__ . '/partials/service-card.php'; ?>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endforeach; ?>

<!-- Why Choose UrbanX (6 Pillars) -->
<section class="section section-alt">
  <div class="container">
    <div class="section-header text-center">
      <span class="section-label">Our Service Standards</span>
      <h2 class="section-title">Why Choose UrbanX?</h2>
      <p class="section-subtitle centered">Trusted by Perth home owners, property managers, and commercial operators for safe, responsible, and effective pest management.</p>
    </div>

    <div class="grid grid-3 grid-gap-lg">
      <div class="feature-item" style="background: #FFFFFF; padding: 24px; border-radius: 12px; border: 1px solid #E2E8F0;">
        <h4 style="color: #0B1F3A; margin-bottom: 8px;">✓ Licensed pest management professional</h4>
        <p style="color: #64748B; font-size: 0.88rem; margin: 0;">Certified Western Australian operators trained in entomology and safe chemical handling.</p>
      </div>
      <div class="feature-item" style="background: #FFFFFF; padding: 24px; border-radius: 12px; border: 1px solid #E2E8F0;">
        <h4 style="color: #0B1F3A; margin-bottom: 8px;">✓ Safe and responsible pest practices</h4>
        <p style="color: #64748B; font-size: 0.88rem; margin: 0;">Pet-friendly, family-safe, and low-toxicity integrated pest management protocols.</p>
      </div>
      <div class="feature-item" style="background: #FFFFFF; padding: 24px; border-radius: 12px; border: 1px solid #E2E8F0;">
        <h4 style="color: #0B1F3A; margin-bottom: 8px;">✓ Residential and commercial services</h4>
        <p style="color: #64748B; font-size: 0.88rem; margin: 0;">Comprehensive solutions tailored for Perth homes, units, cafes, and warehouses.</p>
      </div>
      <div class="feature-item" style="background: #FFFFFF; padding: 24px; border-radius: 12px; border: 1px solid #E2E8F0;">
        <h4 style="color: #0B1F3A; margin-bottom: 8px;">✓ Tailored treatment plans</h4>
        <p style="color: #64748B; font-size: 0.88rem; margin: 0;">Species-calibrated treatments designed around your specific property conditions.</p>
      </div>
      <div class="feature-item" style="background: #FFFFFF; padding: 24px; border-radius: 12px; border: 1px solid #E2E8F0;">
        <h4 style="color: #0B1F3A; margin-bottom: 8px;">✓ Clear upfront pricing</h4>
        <p style="color: #64748B; font-size: 0.88rem; margin: 0;">Transparent quotes with zero hidden fees or surprise add-ons.</p>
      </div>
      <div class="feature-item" style="background: #FFFFFF; padding: 24px; border-radius: 12px; border: 1px solid #E2E8F0;">
        <h4 style="color: #0B1F3A; margin-bottom: 8px;">✓ Professional service & follow-up</h4>
        <p style="color: #64748B; font-size: 0.88rem; margin: 0;">Complete post-treatment advice and proactive hygiene recommendations.</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="section">
  <div class="container">
    <?php
    $ctaTitle  = 'Need a Tailored Pest Solution?';
    $ctaText   = 'Every property is unique. Our licensed Perth specialists will design a pest management program matched to your property, pest species, and requirements.';
    $ctaLabel  = 'Request Residential Survey';
    $ctaLink   = '/book.php?type=residential';
    $ctaLabel2 = 'Request Commercial Survey';
    $ctaLink2  = '/book.php?type=commercial';
    include __DIR__ . '/partials/cta-banner.php';
    ?>
  </div>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>
