<?php
/**
 * UrbanPest Perth — About Our Commercial Operation
 * Operating exclusively in Greater Perth & Western Australia Commercial Hubs.
 * Direct Line: +61 410 148 126
 */

$pageTitle = 'About UrbanPest Perth — Commercial Pest Protection';
$pageDescription = 'UrbanPest operates exclusively across Greater Perth, delivering science-led integrated pest management and connected 24/7 digital monitoring.';
$currentPage = 'about';

require_once __DIR__ . '/data/config.php';
require_once __DIR__ . '/data/testimonials.php';
include __DIR__ . '/partials/header.php';
?>

<!-- Page Hero -->
<?php
$heroTitle       = 'Commercial Biosecurity Built for Perth';
$heroDesc        = 'Delivering precision integrated pest management, Australian Standard AS 3660 termite protection, and reliable commercial defense exclusively for Perth commercial facilities.';
$heroTag         = 'Perth Commercial Division — Fast Local Service';
$heroBadge       = 'WA Licensed Operators';
$heroImage       = '/assets/images/hero-technician.jpg';
$heroStatVal     = '99.4%';
$heroStatLabel   = 'WA Compliance Pass Rate';
$heroCtaText     = 'Explore Commercial Solutions';
$heroCtaLink     = '/services.php';
$heroWaLink      = getWhatsAppLink('Perth Company Consultation');
$heroBreadcrumbs = [
    ['label' => 'Home', 'url' => '/index.php'],
    ['label' => 'About UrbanPest Perth']
];
include __DIR__ . '/partials/page-hero.php';
?>

<!-- Mission -->
<section class="section">
  <div class="container">
    <div class="split-layout">
      <div>
        <span class="section-label">Our Operations</span>
        <h2 class="section-title">Corporate Pest Excellence Dedicated to Perth</h2>
        <p style="font-size: var(--text-md); color: #475569; line-height: 1.7;">
          UrbanPest was founded with an unyielding mandate: to provide Perth's commercial, industrial, logistics, and food manufacturing enterprises with institutional-grade biosecurity that exceeds stringent Australian regulatory benchmarks.
        </p>
        <p style="font-size: var(--text-md); color: #475569; line-height: 1.7;">
          Operating exclusively across Greater Perth from our central St Georges Terrace operations hub, our licensed technicians combine deep entomological science with 24/7 connected IoT sensing. From Welshpool & Kewdale freight logistics to Canning Vale warehousing, Osborne Park commercial sites, and the Kwinana industrial strip, we provide reliable local protection.
        </p>
        <p style="font-size: var(--text-md); color: #475569; line-height: 1.7;">
          Every technician is Western Australia Department of Health licensed and trained under commercial pest management codes of practice. We do not service distant jurisdictions — our entire fleet, inventory, and rapid technical dispatch are dedicated 100% to Greater Perth and Western Australia.
        </p>
      </div>
      
      <div style="border-radius: 12px; overflow: hidden; box-shadow: 0 10px 30px rgba(15,23,42,0.08); border: 1px solid #E2E8F0; background: #FFFFFF;">
        <img src="/assets/images/customer-dispatch.jpg" alt="UrbanPest Perth Commercial Dispatch" style="width:100%; height:100%; object-fit: cover; display:block;">
      </div>
    </div>
  </div>
</section>

<!-- Stats Strip -->
<section class="section section-dark">
  <div class="container">
    <div class="stats-grid" style="grid-template-columns: repeat(4, 1fr);">
      <div class="stat-item">
        <div class="stat-number"><span data-counter="100" data-suffix="%">0</span></div>
        <div class="stat-label">Perth & WA Focus</div>
      </div>
      <div class="stat-item">
        <div class="stat-number"><span data-counter="2500" data-suffix="+">0</span></div>
        <div class="stat-label">Perth Commercial Facilities</div>
      </div>
      <div class="stat-item">
        <div class="stat-number"><span data-counter="99" data-suffix=".4%">0</span></div>
        <div class="stat-label">Commercial Pass Rate</div>
      </div>
      <div class="stat-item">
        <div class="stat-number"><span data-counter="25" data-suffix=" years">0</span></div>
        <div class="stat-label">Western Australian Experience</div>
      </div>
    </div>
  </div>
</section>

<!-- Perth Customer Guarantees -->
<section class="section section-alt">
  <div class="container">
    <div class="section-header text-left">
      <span class="section-label">Why Perth Businesses Rely On Us</span>
      <h2 class="section-title">Our Service Commitments</h2>
      <p class="section-subtitle">Practical, reliable, and prompt pest defense designed specifically for Perth commercial properties, warehouses, and hospitality venues.</p>
    </div>

    <div class="grid grid-3 grid-gap-lg">
      <div class="card" style="border: 1px solid #E2E8F0; border-radius: 12px; background:#fff; padding:24px;">
        <div style="width:44px; height:44px; border-radius:8px; background:#E8F8F0; display:flex; align-items:center; justify-content:center; color:#0FA968; margin-bottom:14px;">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
        </div>
        <h3 style="font-size:1.1rem; color:#0B1F3A; margin:0 0 8px;">Rapid Perth Dispatch</h3>
        <p style="font-size:0.875rem; color:#64748B; margin:0; line-height:1.6;">
          Same-day priority response across Greater Perth including CBD, Welshpool, Canning Vale, Osborne Park, Fremantle, Malaga, and surrounding commercial corridors.
        </p>
      </div>

      <div class="card" style="border: 1px solid #E2E8F0; border-radius: 12px; background:#fff; padding:24px;">
        <div style="width:44px; height:44px; border-radius:8px; background:#E8F8F0; display:flex; align-items:center; justify-content:center; color:#0FA968; margin-bottom:14px;">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
        </div>
        <h3 style="font-size:1.1rem; color:#0B1F3A; margin:0 0 8px;">Licensed & Insured Operators</h3>
        <p style="font-size:0.875rem; color:#64748B; margin:0; line-height:1.6;">
          Fully certified commercial pest technicians equipped with high-grade inspection technology, thermal sensors, and proven Integrated Pest Management strategies.
        </p>
      </div>

      <div class="card" style="border: 1px solid #E2E8F0; border-radius: 12px; background:#fff; padding:24px;">
        <div style="width:44px; height:44px; border-radius:8px; background:#E8F8F0; display:flex; align-items:center; justify-content:center; color:#0FA968; margin-bottom:14px;">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"/><path d="M7 12l3-7 4 14 3-7"/></svg>
        </div>
        <h3 style="font-size:1.1rem; color:#0B1F3A; margin:0 0 8px;">Targeted & Safe Treatments</h3>
        <p style="font-size:0.875rem; color:#64748B; margin:0; line-height:1.6;">
          Low-hazard, targeted solutions that resolve infestations at the root cause while maintaining safe conditions for staff, customers, and pets.
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
        <span style="font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.06em; font-weight: 700; color: #0FA968; display: block; margin-bottom: 4px;">
          Perth Commercial Desk
        </span>
        <h3 style="font-family: var(--font-heading); font-size: 1.5rem; font-weight: 800; color: #0B1F3A; margin: 0 0 6px;">
          Need a Commercial Pest Audit in Perth?
        </h3>
        <p style="font-size: 0.95rem; color: #475569; margin: 0; max-width: 580px;">
          Contact our technical team for an on-site facility risk assessment and customized integrated pest management proposal.
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
