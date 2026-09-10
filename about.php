<?php
/**
 * UrbanX Pest Control — About Us
 * Professional pest management services for residential and commercial properties across Perth.
 * Operating in accordance with Western Australian pest management licensing and applicable legislation.
 */

$pageTitle = 'About UrbanX Pest Control — Professional Pest Control Perth';
$pageDescription = 'At UrbanX Pest Control, we provide professional pest management services for residential and commercial properties across Perth. Safe practices, licensed professionals, clear upfront pricing.';
$currentPage = 'about';

require_once __DIR__ . '/data/config.php';
require_once __DIR__ . '/data/testimonials.php';
include __DIR__ . '/partials/header.php';
?>

<!-- Page Hero -->
<?php
$heroTitle       = 'Professional Pest Management across Perth';
$heroDesc        = 'At UrbanX Pest Control, we provide professional pest management services for residential and commercial properties across Perth.';
$heroTag         = 'UrbanX Pest Control — Perth Division';
$heroBadge       = 'Western Australian Licensed Operators';
$heroImage       = '/assets/images/hero-technician.jpg';
$heroStatVal     = '100%';
$heroStatLabel   = 'Western Australian Licensing Compliance';
$heroCtaText     = 'Explore All Services';
$heroCtaLink     = '/services.php';
$heroWaLink      = getWhatsAppLink('UrbanX Company Enquiry');
$heroBreadcrumbs = [
    ['label' => 'Home', 'url' => '/index.php'],
    ['label' => 'About UrbanX']
];
include __DIR__ . '/partials/page-hero.php';
?>

<!-- Statutory Western Australian Licensing Notice -->
<section style="background: #F8FAFC; border-bottom: 1px solid #E2E8F0; padding: 16px 0;">
  <div class="container">
    <div style="background: #FFFFFF; border-radius: 10px; padding: 16px 20px; border: 1px solid #E2E8F0; border-left: 4px solid var(--color-accent, #D91C24); display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 14px;">
      <p style="margin: 0; font-size: 0.88rem; color: #334155; line-height: 1.5;">
        <strong>Western Australian Regulatory Compliance:</strong> Pest management services are provided in accordance with the requirements of the relevant Western Australian pest management licence and applicable legislation.
      </p>
      <a href="/book.php" class="btn btn-sm btn-primary">Book Online</a>
    </div>
  </div>
</section>

<!-- Mission & Overview -->
<section class="section">
  <div class="container">
    <div class="split-layout">
      <div>
        <span class="section-label">Who We Are</span>
        <h2 class="section-title">Safe, Responsible & Effective Pest Defense in Perth</h2>
        <p style="font-size: var(--text-md); color: #475569; line-height: 1.7;">
          At UrbanX Pest Control, we provide professional pest management services for residential and commercial properties across Perth.
        </p>
        <p style="font-size: var(--text-md); color: #475569; line-height: 1.7;">
          Whether dealing with common household pests like cockroaches, ants, spiders, and silverfish, or requiring targeted preventative treatments for commercial premises, our approach is built around licensed expertise, tailored treatment plans, and clear upfront pricing.
        </p>
        <p style="font-size: var(--text-md); color: #475569; line-height: 1.7;">
          All pest management services are delivered in strict accordance with the requirements of the relevant Western Australian pest management licence and applicable legislation, giving you peace of mind that your family, staff, and properties are in safe, responsible hands.
        </p>
      </div>
      
      <div style="border-radius: 12px; overflow: hidden; box-shadow: 0 10px 30px rgba(15,23,42,0.08); border: 1px solid #E2E8F0; background: #FFFFFF;">
        <img src="/assets/images/customer-dispatch.jpg" alt="UrbanX Perth Pest Management" style="width:100%; height:100%; object-fit: cover; display:block;">
      </div>
    </div>
  </div>
</section>

<!-- Why Choose UrbanX (6 Pillars) -->
<section class="section section-alt">
  <div class="container">
    <div class="section-header text-center">
      <span class="section-label">Our Service Standards</span>
      <h2 class="section-title">Why Choose UrbanX?</h2>
      <p class="section-subtitle centered">Our core commitments to Perth residential and commercial property owners.</p>
    </div>

    <div class="grid grid-3 grid-gap-lg">
      <div class="card" style="border: 1px solid #E2E8F0; border-radius: 12px; background:#fff; padding:24px;">
        <h4 style="font-size:1.1rem; color:#0B1320; margin:0 0 8px;">✓ Licensed pest management professional</h4>
        <p style="font-size:0.875rem; color:#64748B; margin:0; line-height:1.6;">
          Operating under relevant Western Australian pest management licence and state biosecurity standards.
        </p>
      </div>

      <div class="card" style="border: 1px solid #E2E8F0; border-radius: 12px; background:#fff; padding:24px;">
        <h4 style="font-size:1.1rem; color:#0B1320; margin:0 0 8px;">✓ Safe and responsible practices</h4>
        <p style="font-size:0.875rem; color:#64748B; margin:0; line-height:1.6;">
          Family-conscious and pet-safe formulations applied with modern, low-impact equipment.
        </p>
      </div>

      <div class="card" style="border: 1px solid #E2E8F0; border-radius: 12px; background:#fff; padding:24px;">
        <h4 style="font-size:1.1rem; color:#0B1320; margin:0 0 8px;">✓ Residential and commercial services</h4>
        <p style="font-size:0.875rem; color:#64748B; margin:0; line-height:1.6;">
          Complete coverage for suburban homes, strata units, cafes, restaurants, and warehouses.
        </p>
      </div>

      <div class="card" style="border: 1px solid #E2E8F0; border-radius: 12px; background:#fff; padding:24px;">
        <h4 style="font-size:1.1rem; color:#0B1320; margin:0 0 8px;">✓ Tailored treatment plans</h4>
        <p style="font-size:0.875rem; color:#64748B; margin:0; line-height:1.6;">
          Custom strategies formulated specifically for pest species and property conditions.
        </p>
      </div>

      <div class="card" style="border: 1px solid #E2E8F0; border-radius: 12px; background:#fff; padding:24px;">
        <h4 style="font-size:1.1rem; color:#0B1320; margin:0 0 8px;">✓ Clear upfront pricing</h4>
        <p style="font-size:0.875rem; color:#64748B; margin:0; line-height:1.6;">
          Itemized, honest quotes before we commence any treatment. Zero hidden fees.
        </p>
      </div>

      <div class="card" style="border: 1px solid #E2E8F0; border-radius: 12px; background:#fff; padding:24px;">
        <h4 style="font-size:1.1rem; color:#0B1320; margin:0 0 8px;">✓ Professional service & follow-up</h4>
        <p style="font-size:0.875rem; color:#64748B; margin:0; line-height:1.6;">
          Comprehensive post-service advice and ongoing support to ensure permanent results.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Direct Contact Banner -->
<section class="section">
  <div class="container">
    <div style="background: #FFFFFF; border: 1px solid #E2E8F0; border-radius: 12px; padding: 36px 40px; box-shadow: 0 4px 20px rgba(15,23,42,0.06); display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 24px;">
      <div>
        <span style="font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.06em; font-weight: 700; color: var(--color-accent, #D91C24); display: block; margin-bottom: 4px;">
          UrbanX Perth
        </span>
        <h3 style="font-family: var(--font-heading); font-size: 1.5rem; font-weight: 800; color: #0B1320; margin: 0 0 6px;">
          Need a Pest Management Assessment in Perth?
        </h3>
        <p style="font-size: 0.95rem; color: #475569; margin: 0; max-width: 580px;">
          Contact our licensed team for upfront pricing and prompt dispatch across all Perth suburbs.
        </p>
      </div>

      <div style="display: flex; align-items: center; gap: 14px; flex-wrap: wrap;">
        <a href="tel:<?php echo htmlspecialchars($appConfig['phone_raw'] ?? '+61410148126'); ?>" class="btn btn-secondary btn-lg">
          Call <?php echo htmlspecialchars($appConfig['phone_display'] ?? '+61 410 148 126'); ?>
        </a>
        <a href="<?php echo htmlspecialchars(getWhatsAppLink()); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp btn-lg">
          Chat on WhatsApp
        </a>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>
