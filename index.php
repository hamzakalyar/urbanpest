<?php
/**
 * UrbanX Pest Control — Homepage
 * Precision Commercial & Residential Pest Management across Perth
 * Operating under relevant Western Australian pest management licence and applicable legislation.
 * All 9 original sections restored: Hero, Intro Strip, Innovation Carousel, Why Choose Us, Industries, Trust, Credibility/Stats, Sustainability, Locations
 */

$pageTitle = 'UrbanX Pest Control — Precision Commercial & Residential Pest Protection Perth';
$pageDescription = 'UrbanX Pest Control delivers science-led commercial and residential pest management, AS 3660 termite protection, and commercial pest monitoring across Perth, Western Australia.';
$currentPage = 'home';

require_once __DIR__ . '/data/services.php';
require_once __DIR__ . '/data/sectors.php';
require_once __DIR__ . '/data/testimonials.php';
require_once __DIR__ . '/partials/pest-symbols.php';

include __DIR__ . '/partials/header.php';
?>

<!-- ============================================
     1. HERO SECTION
     ============================================ -->
<?php
$heroTitle             = 'Professional Pest Control Services across <span class="highlight">Perth</span>';
$heroSubtitle          = 'At UrbanX Pest Control, we provide professional pest management services for residential and commercial properties across Perth. Science-led IPM, AS 3660 termite protection, and commercial perimeter biosecurity.';
$heroCta               = 'Request Residential Survey';
$heroCtaLink           = '/book.php?type=residential';
$heroCtaCommercial     = 'Request Commercial Survey';
$heroCtaCommercialLink = '/book.php?type=commercial';
include __DIR__ . '/partials/hero.php';
?>

<!-- ============================================
     2. INTRO / VALUE PROPS STRIP & STATUTORY COMPLIANCE
     ============================================ -->
<section class="section" id="value-props">
  <div class="container">
    <!-- Western Australian Regulatory Compliance Strip -->
    <div style="background: #FFFFFF; border-radius: 12px; padding: 18px 24px; border: 1px solid #E2E8F0; border-left: 5px solid var(--color-accent, #D91C24); display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 16px; margin-bottom: 32px; box-shadow: 0 2px 8px rgba(15, 23, 42, 0.04);">
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

    <div class="value-props">
      <!-- Pest Control Services -->
      <div class="value-prop">
        <div class="value-prop-icon">
          <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
        </div>
        <div>
          <h3>Professional Pest Control Services</h3>
          <p>Comprehensive, integrated pest management programs for residential and commercial properties across Perth — from general household pests and insects to bird deterrent systems and specialized treatments.</p>
          <a href="/services.php" class="link-arrow">
            Explore All 12 Pest Services
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
          </a>
        </div>
      </div>

      <!-- Commercial Pest Monitoring -->
      <div class="value-prop">
        <div class="value-prop-icon">
          <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 16.1A5 5 0 0 1 5.9 20M2 12.05A9 9 0 0 1 9.95 20M2 8V6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2h-6"></path><line x1="2" y1="20" x2="2.01" y2="20"></line></svg>
        </div>
        <div>
          <h3>Pest Monitoring & Management</h3>
          <p>Commercial bait stations, scheduled inspections, and structured service documentation deliver proactive site protection, trend insights, and certified compliance reporting across Perth facilities.</p>
          <a href="/services-single.php?slug=smart-traps" class="link-arrow">
            Learn more
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================
     3. FEATURE CAROUSEL
     ============================================ -->
<section class="section-sm section-alt" id="features-carousel">
  <div class="container">
    <div class="section-header">
      <span class="section-label">Innovation Spotlight</span>
      <h2 class="section-title">Modern Commercial Pest Defense</h2>
    </div>

    <div class="carousel" id="mainCarousel">
      <div class="carousel-track">
        <!-- Slide 1 -->
        <div class="carousel-slide" aria-hidden="false">
          <div class="carousel-slide-inner">
            <div class="carousel-slide-content">
              <span class="section-label">Targeted Technology</span>
              <h3>Precision Insect Trapping & Species Identification</h3>
              <p>Our specialized commercial monitors and targeted inspection protocols detect and accurately classify insect activity, giving you clear species-level data and actionable treatment recommendations without delay.</p>
              <a href="/services-single.php?slug=smart-traps" class="btn btn-primary">Discover Insect Control</a>
            </div>
            <div class="carousel-slide-image" style="background: url('/assets/images/smart-iot-trap.jpg') center/cover no-repeat;">
              <div class="slide-badge">Precision Monitoring Network</div>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-slide" aria-hidden="true">
          <div class="carousel-slide-inner">
            <div class="carousel-slide-content">
              <span class="section-label">Connected Monitoring</span>
              <h3>24/7 Connected Rodent Monitoring</h3>
              <p>Turn passive bait stations into active surveillance with motion and vibration sensors. Receive instant alerts, view activity heat-maps, and automate service scheduling based on real-time data.</p>
              <a href="/services-single.php?slug=connected-rodent-monitoring" class="btn btn-primary">Explore Monitoring</a>
            </div>
            <div class="carousel-slide-image" style="background: url('/assets/images/connected-monitoring.jpg') center/cover no-repeat;">
              <div class="slide-badge">Warehouse Protection</div>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-slide" aria-hidden="true">
          <div class="carousel-slide-inner">
            <div class="carousel-slide-content">
              <span class="section-label">Platform Update</span>
              <h3>UrbanPest Connect v3: Predictive Analytics</h3>
              <p>Our latest platform update introduces machine-learning-driven pest predictions. Anticipate seasonal trends, allocate resources proactively, and reduce emergency callouts by up to 40%.</p>
              <a href="/about-innovation.php" class="btn btn-primary">Learn About Connect</a>
            </div>
            <div class="carousel-slide-image" style="background: url('/assets/images/digital-dashboard.jpg') center/cover no-repeat;">
              <div class="slide-badge">Connect™ Platform</div>
            </div>
          </div>
        </div>

        <!-- Slide 4 -->
        <div class="carousel-slide" aria-hidden="true">
          <div class="carousel-slide-inner">
            <div class="carousel-slide-content">
              <span class="section-label">Eco Responsibility</span>
              <h3>Sustainable & Targeted Pest Solutions</h3>
              <p>Our Perth service team prioritises environmentally conscious integrated pest management — combining low-toxicity formulations, route optimisation, and non-chemical exclusion to protect both your business and the local community.</p>
              <a href="/about-sustainability.php" class="btn btn-primary">Our Sustainability Approach</a>
            </div>
            <div class="carousel-slide-image" style="background: url('/assets/images/green-fleet.jpg') center/cover no-repeat;">
              <div class="slide-badge">Eco-Conscious Fleet</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================
     4. WHY CHOOSE URBANX (THE 6 PILLARS)
     ============================================ -->
<section class="section" id="why-choose">
  <div class="container">
    <div class="section-header text-center">
      <span class="section-label">Our Service Standards</span>
      <h2 class="section-title">Why Choose UrbanX Pest Control?</h2>
      <p class="section-subtitle centered">We combine deep technical expertise, Western Australian regulatory compliance, and responsible pest management to protect your home and business across Perth.</p>
    </div>

    <div class="grid grid-3 grid-gap-lg">
      <div class="feature-item" style="background: #FFFFFF; padding: 28px; border-radius: 12px; border: 1px solid #E2E8F0; box-shadow: 0 2px 8px rgba(0,0,0,0.03);">
        <div style="width: 44px; height: 44px; border-radius: 10px; background: #FEF2F2; color: #D91C24; display: flex; align-items: center; justify-content: center; margin-bottom: 16px;">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><polyline points="9 12 11 14 15 10"></polyline></svg>
        </div>
        <h4 style="color: #0B1F3A; font-size: 1.05rem; margin-bottom: 8px;">Licensed Pest Management Professional</h4>
        <p style="color: #64748B; font-size: 0.88rem; line-height: 1.6; margin: 0;">Certified Western Australian operators operating in strict accordance with relevant pest management licensing and legislation.</p>
      </div>

      <div class="feature-item" style="background: #FFFFFF; padding: 28px; border-radius: 12px; border: 1px solid #E2E8F0; box-shadow: 0 2px 8px rgba(0,0,0,0.03);">
        <div style="width: 44px; height: 44px; border-radius: 10px; background: #DCFCE7; color: #16A34A; display: flex; align-items: center; justify-content: center; margin-bottom: 16px;">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm0 18a8 8 0 1 1 8-8 8 8 0 0 1-8 8z"></path><polyline points="12 6 12 12 16 14"></polyline></svg>
        </div>
        <h4 style="color: #0B1F3A; font-size: 1.05rem; margin-bottom: 8px;">Safe & Responsible Practices</h4>
        <p style="color: #64748B; font-size: 0.88rem; line-height: 1.6; margin: 0;">Family-safe, pet-friendly, and food-compliant applications designed to minimize chemical footprints while maximizing eradication.</p>
      </div>

      <div class="feature-item" style="background: #FFFFFF; padding: 28px; border-radius: 12px; border: 1px solid #E2E8F0; box-shadow: 0 2px 8px rgba(0,0,0,0.03);">
        <div style="width: 44px; height: 44px; border-radius: 10px; background: #EFF6FF; color: #2563EB; display: flex; align-items: center; justify-content: center; margin-bottom: 16px;">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
        </div>
        <h4 style="color: #0B1F3A; font-size: 1.05rem; margin-bottom: 8px;">Residential & Commercial Services</h4>
        <p style="color: #64748B; font-size: 0.88rem; line-height: 1.6; margin: 0;">Specialized solutions tailored to domestic homes, apartments, commercial facilities, food retail, and logistics warehouses.</p>
      </div>

      <div class="feature-item" style="background: #FFFFFF; padding: 28px; border-radius: 12px; border: 1px solid #E2E8F0; box-shadow: 0 2px 8px rgba(0,0,0,0.03);">
        <div style="width: 44px; height: 44px; border-radius: 10px; background: #FEF3C7; color: #D97706; display: flex; align-items: center; justify-content: center; margin-bottom: 16px;">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
        </div>
        <h4 style="color: #0B1F3A; font-size: 1.05rem; margin-bottom: 8px;">Tailored Treatment Plans</h4>
        <p style="color: #64748B; font-size: 0.88rem; line-height: 1.6; margin: 0;">Custom treatment programs formulated around specific pest species biology and unique property construction conditions.</p>
      </div>

      <div class="feature-item" style="background: #FFFFFF; padding: 28px; border-radius: 12px; border: 1px solid #E2E8F0; box-shadow: 0 2px 8px rgba(0,0,0,0.03);">
        <div style="width: 44px; height: 44px; border-radius: 10px; background: #F3E8FF; color: #9333EA; display: flex; align-items: center; justify-content: center; margin-bottom: 16px;">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
        </div>
        <h4 style="color: #0B1F3A; font-size: 1.05rem; margin-bottom: 8px;">Clear Upfront Pricing</h4>
        <p style="color: #64748B; font-size: 0.88rem; line-height: 1.6; margin: 0;">Fixed, transparent quotations with zero hidden surprises, providing honest value and reliable accountability.</p>
      </div>

      <div class="feature-item" style="background: #FFFFFF; padding: 28px; border-radius: 12px; border: 1px solid #E2E8F0; box-shadow: 0 2px 8px rgba(0,0,0,0.03);">
        <div style="width: 44px; height: 44px; border-radius: 10px; background: #CCFBF1; color: #0D9488; display: flex; align-items: center; justify-content: center; margin-bottom: 16px;">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
        </div>
        <h4 style="color: #0B1F3A; font-size: 1.05rem; margin-bottom: 8px;">Professional Service & Follow-Up</h4>
        <p style="color: #64748B; font-size: 0.88rem; line-height: 1.6; margin: 0;">Thorough inspection reports, preventative recommendations, and dedicated follow-up advice after every treatment.</p>
      </div>
    </div>

    <!-- CTA Consultation Banner with Both Residential & Commercial Surveys -->
    <div class="mt-3xl">
      <?php
      $ctaTitle  = 'Partner with UrbanX Pest Control Today';
      $ctaText   = 'Discover how our science-led approach and licensed technicians can protect your home and business across Perth.';
      $ctaLabel  = 'Request Residential Survey';
      $ctaLink   = '/book.php?type=residential';
      $ctaLabel2 = 'Request Commercial Survey';
      $ctaLink2  = '/book.php?type=commercial';
      include __DIR__ . '/partials/cta-banner.php';
      ?>
    </div>
  </div>
</section>

<!-- ============================================
     5. INDUSTRIES GRID
     ============================================ -->
<section class="section section-alt" id="industries">
  <div class="container">
    <div class="section-header">
      <span class="section-label">Industries We Serve</span>
      <h2 class="section-title">Tailored Solutions for Every Sector</h2>
      <p class="section-subtitle centered">From food manufacturing to healthcare, we understand the unique pest challenges and compliance requirements of your industry.</p>
    </div>

    <div class="sector-grid" id="sectorGrid">
      <?php foreach ($sectors as $index => $sector): ?>
        <div class="<?php echo $index >= 4 ? 'sector-hidden' : ''; ?>" data-sector>
          <?php include __DIR__ . '/partials/sector-card.php'; ?>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="text-center mt-xl">
      <button class="btn btn-outline" id="loadMoreSectors" type="button">
        Show More Sectors
      </button>
    </div>
  </div>
</section>

<!-- ============================================
     6. TRUST / ACCREDITATIONS BAR (CLEANED)
     ============================================ -->
<section class="section-sm" id="trust">
  <div class="container">
    <div class="trust-strip trust-logos">
      <div class="trust-logo">
        <div class="trust-logo-icon" style="color: var(--color-accent, #D91C24);">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"></path></svg>
        </div>
        <span>Same-Day Rapid Dispatch</span>
      </div>
      <div class="trust-logo">
        <div class="trust-logo-icon" style="color: var(--color-accent, #D91C24);">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><polyline points="9 12 11 14 15 10"></polyline></svg>
        </div>
        <span>Licensed & Insured Operators</span>
      </div>
      <div class="trust-logo">
        <div class="trust-logo-icon" style="color: var(--color-accent, #D91C24);">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm0 18a8 8 0 1 1 8-8 8 8 0 0 1-8 8z"></path></svg>
        </div>
        <span>Safe & Pet-Friendly Formulations</span>
      </div>
      <div class="trust-logo">
        <div class="trust-logo-icon" style="color: var(--color-accent, #D91C24);">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
        </div>
        <span>100% Satisfaction Guarantee</span>
      </div>
    </div>
  </div>
</section>

<!-- ============================================
     7. CREDIBILITY / LOCAL STATS + TESTIMONIAL
     ============================================ -->
<section class="section section-dark" id="credibility" style="background: linear-gradient(135deg, rgba(11, 31, 58, 0.94) 0%, rgba(7, 20, 40, 0.96) 100%), url('/assets/images/food-inspection.jpg') center/cover no-repeat; position: relative;">
  <div class="container">
    <div class="section-header">
      <span class="section-label">Perth Dedicated</span>
      <h2 class="section-title" style="color:#fff;">Proven Results Across Perth & Western Australia</h2>
    </div>

    <div class="stats-grid">
      <div class="stat-item">
        <div class="stat-number">
          <span data-counter="100" data-suffix="%">0</span>
        </div>
        <div class="stat-label">Licensed & Compliant</div>
      </div>
      <div class="stat-item">
        <div class="stat-number">
          <span data-counter="2500" data-suffix="+">0</span>
        </div>
        <div class="stat-label">Properties Protected</div>
      </div>
      <div class="stat-item">
        <div class="stat-number">
          <span data-counter="2" data-prefix="< " data-suffix=" Hrs">0</span>
        </div>
        <div class="stat-label">Rapid Response Window</div>
      </div>
    </div>

    <!-- Testimonial -->
    <?php
    $testimonial = $testimonials[0] ?? null;
    if ($testimonial) {
        include __DIR__ . '/partials/testimonial.php';
    }
    ?>
  </div>
</section>

<!-- ============================================
     8. SUSTAINABILITY CALLOUT
     ============================================ -->
<section class="section" id="sustainability">
  <div class="container">
    <div class="sustainability-callout">
      <div class="sustainability-image" style="background: url('/assets/images/green-fleet.jpg') center/cover no-repeat; position: relative; border-radius: var(--radius-xl); overflow: hidden; min-height: 380px; box-shadow: var(--shadow-lg);">
        <div style="position: absolute; bottom: 20px; left: 20px; right: 20px; background: rgba(11, 31, 58, 0.88); backdrop-filter: blur(8px); padding: 12px 18px; border-radius: var(--radius-md); color: #fff; font-size: var(--text-xs); border-left: 3px solid var(--color-emerald); display: flex; align-items: center; justify-content: space-between;">
          <span><strong>Rapid Perth Dispatch</strong> • Commercial Eco Fleet</span>
          <span class="badge badge-emerald" style="font-size: 10px;">Low-Toxicity</span>
        </div>
      </div>
      <div class="sustainability-content">
        <span class="section-label">Responsibility & Sustainability</span>
        <h2>Protecting More Than Your Business</h2>
        <p>We're committed to delivering effective pest management while minimising environmental impact. From eco-friendly treatment methods to reduced-chemical programs, responsible stewardship is woven into everything we do.</p>
        <div class="sustainability-pillars">
          <div class="sustainability-pillar">
            <svg class="check-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
            Low-Toxicity Formulations
          </div>
          <div class="sustainability-pillar">
            <svg class="check-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
            Targeted IPM Programs
          </div>
          <div class="sustainability-pillar">
            <svg class="check-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
            Route Optimisation
          </div>
          <div class="sustainability-pillar">
            <svg class="check-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
            Humane Wildlife Deterrents
          </div>
        </div>
        <a href="/about-sustainability.php" class="btn btn-outline-emerald">Our Sustainability Commitments</a>
      </div>
    </div>
  </div>
</section>

<!-- ============================================
     9. LOCATIONS CALLOUT
     ============================================ -->
<section class="section section-alt" id="locations">
  <div class="container">
    <div class="locations-callout">
      <span class="section-label">Service Presence</span>
      <h2 class="section-title">Find Your Local Perth & Regional Team</h2>
      <p class="section-subtitle centered">Providing fast, compliant pest management across Greater Perth and Western Australia commercial corridors.</p>

      <div class="region-grid">
        <a href="/about-locations.php" class="region-item">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
          Perth CBD & Docklands
        </a>
        <a href="/about-locations.php" class="region-item">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
          Inner Eastern Suburbs
        </a>
        <a href="/about-locations.php" class="region-item">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
          Northern Commercial Corridor
        </a>
        <a href="/about-locations.php" class="region-item">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
          Western Industrial Precincts
        </a>
        <a href="/about-locations.php" class="region-item">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
          South East & Mornington
        </a>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>
