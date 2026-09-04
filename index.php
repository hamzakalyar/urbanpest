<?php
/**
 * UrbanPest — Homepage
 * All 10 sections: Hero, Intro Strip, Carousel, Why Choose, Industries, Trust, Stats, Sustainability, Locations, Footer
 */

$pageTitle = 'UrbanPest — Precision Pest Protection for Modern Business';
$pageDescription = 'UrbanPest delivers science-led commercial pest control and digital pest monitoring solutions to businesses across 90+ countries. Protect your facilities, your people, and your brand.';
$currentPage = 'home';

require_once __DIR__ . '/data/services.php';
require_once __DIR__ . '/data/sectors.php';
require_once __DIR__ . '/data/testimonials.php';

include __DIR__ . '/partials/header.php';
?>

<!-- ============================================
     1. HERO SECTION
     ============================================ -->
<?php
$heroLabel    = 'AEPMA & HACCP Australia Accredited Commercial Operator';
$heroTitle    = 'Perth Commercial Pest Control & <span class="highlight">Biosecurity</span>';
$heroSubtitle = 'Science-led commercial pest management, AS 3660 termite protection, and connected 24/7 IoT telemetry operating exclusively across Greater Perth commercial facilities.';
$heroCta      = 'Request Commercial Survey';
$heroCtaLink  = '/contact.php';
$heroCta2     = 'View Services Directory';
$heroCtaLink2 = '/services.php';
include __DIR__ . '/partials/hero.php';
?>


<!-- ============================================
     2. INTRO / VALUE PROPS STRIP
     ============================================ -->
<section class="section" id="value-props">
  <div class="container">
    <div class="value-props">
      <!-- Pest Control Services -->
      <div class="value-prop">
        <div class="value-prop-icon">
          <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
        </div>
        <div>
          <h3>Pest Control Services</h3>
          <p>Comprehensive, integrated pest management programs for commercial environments — from rodent control and insect management to bird deterrent systems and professional disinfection.</p>
          <a href="/services.php" class="link-arrow">
            Learn more
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
          </a>
        </div>
      </div>

      <!-- Digital Pest Monitoring -->
      <div class="value-prop">
        <div class="value-prop-icon">
          <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 16.1A5 5 0 0 1 5.9 20M2 12.05A9 9 0 0 1 9.95 20M2 8V6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2h-6"></path><line x1="2" y1="20" x2="2.01" y2="20"></line></svg>
        </div>
        <div>
          <h3>Digital Pest Monitoring</h3>
          <p>IoT-connected smart traps, sensors, and our UrbanPest Connect platform deliver 24/7 real-time visibility, predictive insights, and automated compliance reporting across all your sites.</p>
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
      <h2 class="section-title">Leading the Digital Pest Revolution</h2>
    </div>

    <div class="carousel" id="mainCarousel">
      <div class="carousel-track">
        <!-- Slide 1 -->
        <div class="carousel-slide" aria-hidden="false">
          <div class="carousel-slide-inner">
            <div class="carousel-slide-content">
              <span class="section-label">Smart Technology</span>
              <h3>Smart Insect Traps with AI Identification</h3>
              <p>Our IoT-enabled traps use optical sensors and machine-learning models to detect, classify, and report insect activity in real time — giving you species-level data without waiting for a technician visit.</p>
              <a href="/services-single.php?slug=smart-traps" class="btn btn-primary">Discover Smart Traps</a>
            </div>
            <div class="carousel-slide-image" style="background: url('/assets/images/smart-iot-trap.jpg') center/cover no-repeat;">
              <div class="slide-badge">IoT Sensor Network</div>
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
     4. WHY CHOOSE URBANPEST
     ============================================ -->
<section class="section" id="why-choose">
  <div class="container">
    <div class="section-header">
      <span class="section-label">Why UrbanPest</span>
      <h2 class="section-title">Why Global Businesses Choose UrbanPest</h2>
      <p class="section-subtitle centered">We combine deep technical expertise with connected technology to deliver pest management that's smarter, faster, and more transparent than anything you've experienced before.</p>
    </div>

    <div class="feature-block">
      <div class="feature-item">
        <div class="feature-icon">
          <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
        </div>
        <h3>Global Reach, Local Expertise</h3>
        <p>Operating across 90+ countries with 15,000+ trained technicians, we deliver globally consistent service standards with locally expert teams who understand your region's pest ecology and regulations.</p>
      </div>

      <div class="feature-item">
        <div class="feature-icon">
          <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 16.1A5 5 0 0 1 5.9 20M2 12.05A9 9 0 0 1 9.95 20M2 8V6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2h-6"></path><line x1="2" y1="20" x2="2.01" y2="20"></line></svg>
        </div>
        <h3>Connected Digital Platform</h3>
        <p>UrbanPest Connect provides 24/7 real-time pest monitoring, AI-powered analytics, and automated compliance reporting — giving you total visibility and control across every site.</p>
      </div>

      <div class="feature-item">
        <div class="feature-icon">
          <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
        </div>
        <h3>Single Point of Contact</h3>
        <p>One dedicated account manager, one platform, one invoice. We simplify pest management for multi-site operations — so you can focus on running your business, not managing suppliers.</p>
      </div>
    </div>

    <!-- CTA -->
    <div class="mt-3xl">
      <?php
      $ctaTitle  = 'Partner with UrbanPest Today';
      $ctaText   = 'Discover how our science-led approach and connected technology can transform pest management across your organisation.';
      $ctaLabel  = 'Request a Consultation';
      $ctaLink   = '/contact.php';
      $ctaLabel2 = 'View Our Services';
      $ctaLink2  = '/services.php';
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

    <div class="sector-toggle" id="sectorToggle">
      <button class="btn btn-outline-emerald" id="sectorToggleBtn" onclick="toggleSectors()">
        <span id="sectorToggleText">Show All Industries</span>
        <svg id="sectorToggleIcon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
      </button>
    </div>
  </div>
</section>

<script>
function toggleSectors() {
  const hidden = document.querySelectorAll('.sector-hidden');
  const btn = document.getElementById('sectorToggleText');
  const icon = document.getElementById('sectorToggleIcon');
  const isHidden = hidden.length > 0 && hidden[0].style.display !== 'block';

  hidden.forEach(el => {
    el.style.display = isHidden ? 'block' : 'none';
  });

  btn.textContent = isHidden ? 'Show Fewer Industries' : 'Show All Industries';
  icon.style.transform = isHidden ? 'rotate(180deg)' : 'rotate(0)';
}
</script>


<!-- ============================================
     6. WHY PERTH CHOOSES US
     ============================================ -->
<section class="section-sm" id="trust">
  <div class="container">
    <div class="section-header text-center">
      <span class="section-label">Our Service Commitments</span>
      <h2 class="section-title" style="font-size: 1.75rem;">Why Perth Businesses Rely On Us</h2>
    </div>
    <div class="trust-strip">
      <div class="trust-logo">
        <div class="trust-logo-icon" style="color: #0FA968;">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
        </div>
        <span>Same-Day Rapid Dispatch</span>
      </div>
      <div class="trust-logo">
        <div class="trust-logo-icon" style="color: #0FA968;">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><polyline points="9 12 11 14 15 10"></polyline></svg>
        </div>
        <span>Licensed & Insured Operators</span>
      </div>
      <div class="trust-logo">
        <div class="trust-logo-icon" style="color: #0FA968;">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm0 18a8 8 0 1 1 8-8 8 8 0 0 1-8 8z"></path></svg>
        </div>
        <span>Safe & Pet-Friendly Formulations</span>
      </div>
      <div class="trust-logo">
        <div class="trust-logo-icon" style="color: #0FA968;">
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
      <h2 class="section-title" style="color:#fff;">Proven Results Across Greater Perth</h2>
    </div>

    <div class="stats-grid">
      <div class="stat-item">
        <div class="stat-number">
          <span data-counter="100" data-suffix="%">0</span>
        </div>
        <div class="stat-label">Perth Owned & Operated</div>
      </div>
      <div class="stat-item">
        <div class="stat-number">
          <span data-counter="2500" data-suffix="+">0</span>
        </div>
        <div class="stat-label">Commercial Sites Protected</div>
      </div>
      <div class="stat-item">
        <div class="stat-number">
          <span data-counter="2" data-prefix="< " data-suffix=" Hrs">0</span>
        </div>
        <div class="stat-label">Rapid Emergency Dispatch</div>
      </div>
    </div>

    <!-- Testimonial -->
    <?php
    $testimonial = $testimonials[0];
    include __DIR__ . '/partials/testimonial.php';
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
      <span class="section-label">Global Presence</span>
      <h2 class="section-title">Find Your Local Team</h2>
      <p class="section-subtitle centered">With operations in 90+ countries, we're never far from your business. Find your nearest UrbanPest team.</p>

      <div class="region-grid">
        <a href="/about-locations.php" class="region-item">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
          United Kingdom
        </a>
        <a href="/about-locations.php" class="region-item">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
          North America
        </a>
        <a href="/about-locations.php" class="region-item">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
          Continental Europe
        </a>
        <a href="/about-locations.php" class="region-item">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
          Asia Pacific
        </a>
        <a href="/about-locations.php" class="region-item">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
          Middle East & Africa
        </a>
      </div>
    </div>
  </div>
</section>


<?php include __DIR__ . '/partials/footer.php'; ?>
