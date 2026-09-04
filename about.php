<?php
/**
 * UrbanPest Melbourne — About Our Commercial Operation
 * Operating exclusively in Greater Melbourne & Regional Victorian Commercial Hubs.
 * Direct Line: +61 410 148 126
 */

$pageTitle = 'About UrbanPest Melbourne — Commercial Pest Protection';
$pageDescription = 'UrbanPest operates exclusively across Greater Melbourne, delivering science-led integrated pest management and connected 24/7 digital monitoring.';
$currentPage = 'about';

require_once __DIR__ . '/data/config.php';
require_once __DIR__ . '/data/testimonials.php';
include __DIR__ . '/partials/header.php';
?>

<!-- Page Hero -->
<?php
$heroTitle       = 'Commercial Biosecurity Built for Melbourne';
$heroDesc        = 'Delivering precision integrated pest management, Australian Standard AS 3660 termite protection, and HACCP-certified defense exclusively for Melbourne commercial facilities.';
$heroTag         = 'Melbourne Commercial Division — AEPMA & HACCP Accredited';
$heroBadge       = 'Victorian Licensed Operators';
$heroImage       = '/assets/images/hero-technician.jpg';
$heroStatVal     = '99.4%';
$heroStatLabel   = 'Victorian Audit Pass Rate';
$heroCtaText     = 'Explore Commercial Solutions';
$heroCtaLink     = '/services.php';
$heroWaLink      = getWhatsAppLink('Melbourne Company Consultation');
$heroBreadcrumbs = [
    ['label' => 'Home', 'url' => '/index.php'],
    ['label' => 'About UrbanPest Melbourne']
];
include __DIR__ . '/partials/page-hero.php';
?>

<!-- Mission -->
<section class="section">
  <div class="container">
    <div class="split-layout">
      <div>
        <span class="section-label">Our Operations</span>
        <h2 class="section-title">Corporate Pest Excellence Dedicated to Melbourne</h2>
        <p style="font-size: var(--text-md); color: #475569; line-height: 1.7;">
          UrbanPest was founded with an unyielding mandate: to provide Melbourne's commercial, industrial, and food manufacturing enterprises with institutional-grade biosecurity that exceeds stringent Australian regulatory benchmarks.
        </p>
        <p style="font-size: var(--text-md); color: #475569; line-height: 1.7;">
          Operating exclusively in Greater Melbourne from our central Docklands operations hub, our licensed technicians combine deep entomological science with 24/7 connected IoT sensing. From high-throughput airfreight facilities at Tullamarine to HACCP food processing lines in Campbellfield and massive logistics corridors in Dandenong South, we provide absolute audit compliance.
        </p>
        <p style="font-size: var(--text-md); color: #475569; line-height: 1.7;">
          Every technician is Victorian Department of Health licensed and trained under AEPMA commercial pest management codes. We do not service distant jurisdictions — our entire fleet, inventory, and rapid technical dispatch are dedicated 100% to Melbourne.
        </p>
      </div>
      
      <div style="border-radius: 12px; overflow: hidden; box-shadow: 0 10px 30px rgba(15,23,42,0.08); border: 1px solid #E2E8F0; background: #FFFFFF;">
        <img src="/assets/images/customer-dispatch.jpg" alt="UrbanPest Melbourne Commercial Dispatch" style="width:100%; height:100%; object-fit: cover; display:block;">
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
        <div class="stat-label">Melbourne & Victoria Focus</div>
      </div>
      <div class="stat-item">
        <div class="stat-number"><span data-counter="2500" data-suffix="+">0</span></div>
        <div class="stat-label">Melbourne Commercial Facilities</div>
      </div>
      <div class="stat-item">
        <div class="stat-number"><span data-counter="99" data-suffix=".4%">0</span></div>
        <div class="stat-label">HACCP & AEPMA Pass Rate</div>
      </div>
      <div class="stat-item">
        <div class="stat-number"><span data-counter="25" data-suffix=" years">0</span></div>
        <div class="stat-label">Victorian Commercial Experience</div>
      </div>
    </div>
  </div>
</section>

<!-- Australian Regulatory Compliance -->
<section class="section section-alt">
  <div class="container">
    <div class="section-header text-left">
      <span class="section-label">Accreditations & Compliance</span>
      <h2 class="section-title">Strict Alignment with Australian Standards</h2>
      <p class="section-subtitle">We hold the highest tier of Australian environmental pest management accreditations, ensuring total compliance for your next commercial audit.</p>
    </div>

    <div class="grid grid-3 grid-gap-lg">
      <div class="card" style="border: 1px solid #E2E8F0; border-radius: 12px; background:#fff; padding:24px;">
        <div style="width:44px; height:44px; border-radius:8px; background:#E8F8F0; display:flex; align-items:center; justify-content:center; color:#0FA968; margin-bottom:14px;">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
        </div>
        <h3 style="font-size:1.1rem; color:#0B1F3A; margin:0 0 8px;">AEPMA Member #VIC-4182</h3>
        <p style="font-size:0.875rem; color:#64748B; margin:0; line-height:1.6;">
          Full corporate member of the Australian Environmental Pest Managers Association, adhering to the Code of Practice for Commercial & Industrial Pest Management.
        </p>
      </div>

      <div class="card" style="border: 1px solid #E2E8F0; border-radius: 12px; background:#fff; padding:24px;">
        <div style="width:44px; height:44px; border-radius:8px; background:#E8F8F0; display:flex; align-items:center; justify-content:center; color:#0FA968; margin-bottom:14px;">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="9 12 11 14 15 10"/></svg>
        </div>
        <h3 style="font-size:1.1rem; color:#0B1F3A; margin:0 0 8px;">HACCP Australia Certified</h3>
        <p style="font-size:0.875rem; color:#64748B; margin:0; line-height:1.6;">
          Officially endorsed by HACCP Australia as a certified pest management provider for food manufacturing, packaging, and cold-chain logistics.
        </p>
      </div>

      <div class="card" style="border: 1px solid #E2E8F0; border-radius: 12px; background:#fff; padding:24px;">
        <div style="width:44px; height:44px; border-radius:8px; background:#E8F8F0; display:flex; align-items:center; justify-content:center; color:#0FA968; margin-bottom:14px;">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
        </div>
        <h3 style="font-size:1.1rem; color:#0B1F3A; margin:0 0 8px;">AS 3660 & AS 4349 Certified</h3>
        <p style="font-size:0.875rem; color:#64748B; margin:0; line-height:1.6;">
          Full compliance with Australian Standards for Termite Management in New and Existing Buildings, utilising Termatrac radar and thermal imaging.
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
          Melbourne Commercial Desk
        </span>
        <h3 style="font-family: var(--font-heading); font-size: 1.5rem; font-weight: 800; color: #0B1F3A; margin: 0 0 6px;">
          Need a Commercial Pest Audit in Melbourne?
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
