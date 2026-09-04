<?php
/**
 * UrbanPest — About Page
 */

$pageTitle = 'About UrbanPest — Our Story';
$pageDescription = 'Learn about UrbanPest\'s mission to redefine commercial pest management through science, technology, and a commitment to sustainability.';
$currentPage = 'about';

require_once __DIR__ . '/data/testimonials.php';
include __DIR__ . '/partials/header.php';
?>

<!-- Page Hero -->
<?php
$heroTitle       = 'Our Story & Purpose';
$heroDesc        = 'Founded on the principle that commercial pest management should be scientific, environmentally responsible, and driven by transparent digital intelligence across 90+ countries.';
$heroTag         = 'ABOUT URBANPEST // GLOBAL PURPOSE';
$heroBadge       = 'Global Operational Excellence';
$heroImage       = '/assets/images/hero-technician.jpg';
$heroWatermark   = 'URBANPEST';
$heroStatVal     = '90+';
$heroStatLabel   = 'Countries With Active Operations';
$heroCtaText     = 'Discover Our Solutions';
$heroCtaLink     = '/services.php';
$heroBreadcrumbs = [
    ['label' => 'Home', 'url' => '/index.php'],
    ['label' => 'About UrbanPest']
];
include __DIR__ . '/partials/page-hero.php';
?>

<!-- Mission -->
<section class="section">
  <div class="container">
    <div class="split-layout">
      <div>
        <span class="section-label">Our Mission</span>
        <h2 class="section-title">Redefining Pest Management for a Connected World</h2>
        <p style="font-size: var(--text-md); color: var(--color-text-muted); line-height: var(--leading-relaxed);">
          UrbanPest was founded with a clear purpose: to transform how businesses manage pest risk. We saw an industry that relied too heavily on reactive treatments, paper-based reporting, and one-size-fits-all approaches. We believed it could be better.
        </p>
        <p style="font-size: var(--text-md); color: var(--color-text-muted); line-height: var(--leading-relaxed);">
          Today, UrbanPest operates across 90+ countries, protecting more than 500,000 commercial facilities with integrated pest management programs powered by connected technology. Our approach combines deep entomological expertise with IoT devices, AI analytics, and real-time data — delivering results that traditional pest control simply cannot match.
        </p>
        <p style="font-size: var(--text-md); color: var(--color-text-muted); line-height: var(--leading-relaxed);">
          But technology alone isn't enough. Behind every device and data point are 15,000+ trained technicians who understand the science of pest behaviour, the complexities of your industry, and the urgency of your challenges. They're the heartbeat of UrbanPest.
        </p>
      </div>
      <div style="background: linear-gradient(135deg, var(--color-navy), var(--color-navy-light)); border-radius: var(--radius-xl); min-height: 400px; display: flex; align-items: center; justify-content: center;">
        <svg width="120" height="120" viewBox="0 0 40 40" fill="none" opacity="0.3">
          <path d="M20 3L5 10v10c0 9.55 6.4 18.48 15 20.5 8.6-2.02 15-10.95 15-20.5V10L20 3z" fill="#FFFFFF"/>
          <circle cx="20" cy="18" r="4" fill="#0FA968"/>
          <circle cx="20" cy="18" r="8" fill="none" stroke="#0FA968" stroke-width="1.5" opacity="0.5"/>
          <circle cx="20" cy="18" r="12" fill="none" stroke="#0FA968" stroke-width="1" opacity="0.3"/>
        </svg>
      </div>
    </div>
  </div>
</section>

<!-- Stats -->
<section class="section section-dark">
  <div class="container">
    <div class="stats-grid" style="grid-template-columns: repeat(4, 1fr);">
      <div class="stat-item">
        <div class="stat-number"><span data-counter="90" data-suffix="+">0</span></div>
        <div class="stat-label">Countries</div>
      </div>
      <div class="stat-item">
        <div class="stat-number"><span data-counter="15000" data-suffix="+">0</span></div>
        <div class="stat-label">Technicians</div>
      </div>
      <div class="stat-item">
        <div class="stat-number"><span data-counter="500000" data-suffix="+">0</span></div>
        <div class="stat-label">Customers</div>
      </div>
      <div class="stat-item">
        <div class="stat-number"><span data-counter="42" data-suffix=" years">0</span></div>
        <div class="stat-label">Industry Experience</div>
      </div>
    </div>
  </div>
</section>

<!-- Values -->
<section class="section">
  <div class="container">
    <div class="section-header">
      <span class="section-label">What We Stand For</span>
      <h2 class="section-title">Our Values</h2>
    </div>
    <div class="feature-block">
      <div class="feature-item">
        <div class="feature-icon">
          <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
        </div>
        <h3>Science-Led</h3>
        <p>Every solution is grounded in entomological science, evidence-based practice, and rigorous quality standards.</p>
      </div>
      <div class="feature-item">
        <div class="feature-icon">
          <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
        </div>
        <h3>Innovation-Driven</h3>
        <p>We continuously invest in R&D, connected technology, and AI to stay ahead of evolving pest challenges.</p>
      </div>
      <div class="feature-item">
        <div class="feature-icon">
          <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
        </div>
        <h3>People-First</h3>
        <p>Our technicians are our greatest asset. We invest in training, development, and safety to build the best team in the industry.</p>
      </div>
    </div>
  </div>
</section>

<!-- Leadership -->
<section class="section section-alt">
  <div class="container">
    <div class="section-header">
      <span class="section-label">Leadership</span>
      <h2 class="section-title">Our Executive Team</h2>
    </div>
    <div class="grid grid-4 grid-gap-xl">
      <?php
      $leaders = [
        ['name' => 'Marcus Chen', 'role' => 'Chief Executive Officer', 'initials' => 'MC'],
        ['name' => 'Dr. Elena Vasquez', 'role' => 'Chief Technology Officer', 'initials' => 'EV'],
        ['name' => 'James Harrington', 'role' => 'Technical Director', 'initials' => 'JH'],
        ['name' => 'Anna Lindström', 'role' => 'European Managing Director', 'initials' => 'AL'],
      ];
      foreach ($leaders as $leader):
      ?>
        <div class="leader-card">
          <div class="leader-photo" style="background: linear-gradient(135deg, var(--color-navy), var(--color-navy-light)); display:flex; align-items:center; justify-content:center; color: rgba(255,255,255,0.5); font-family: var(--font-heading); font-size: var(--text-xl); font-weight: var(--weight-bold);">
            <?php echo $leader['initials']; ?>
          </div>
          <h4><?php echo htmlspecialchars($leader['name']); ?></h4>
          <p><?php echo htmlspecialchars($leader['role']); ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="section">
  <div class="container">
    <?php
    $ctaTitle  = 'Join Our Journey';
    $ctaText   = 'Whether you\'re a potential client, partner, or future team member — we\'d love to hear from you.';
    $ctaLabel  = 'Get in Touch';
    $ctaLink   = '/contact.php';
    $ctaLabel2 = 'View Careers';
    $ctaLink2  = '/about-careers.php';
    include __DIR__ . '/partials/cta-banner.php';
    ?>
  </div>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>
