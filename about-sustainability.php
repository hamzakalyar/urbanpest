<?php
$pageTitle = 'Sustainability — UrbanPest';
$pageDescription = 'UrbanPest\'s sustainability commitments: carbon neutral operations, reduced chemical programs, fleet electrification, and community investment.';
$currentPage = 'about';
include __DIR__ . '/partials/header.php';
?>

<!-- Page Hero -->
<?php
$heroTitle       = 'Environmental Sustainability';
$heroDesc        = 'Committed to protecting people, global businesses, and ecological diversity through low-impact IPM, net-zero fleet transformation, and non-toxic innovation.';
$heroTag         = 'ESG COMMITMENT // NET-ZERO PATHWAY';
$heroBadge       = 'Target Net-Zero by 2040';
$heroImage       = '/assets/images/green-fleet.jpg';
$heroWatermark   = 'SUSTAINABLE';
$heroStatVal     = '65%';
$heroStatLabel   = 'Chemical Use Reduction Achieved';
$heroCtaText     = 'Read ESG Impact Report';
$heroCtaLink     = '#targets';
$heroBreadcrumbs = [
    ['label' => 'Home', 'url' => '/index.php'],
    ['label' => 'About', 'url' => '/about.php'],
    ['label' => 'Sustainability']
];
include __DIR__ . '/partials/page-hero.php';
?>

<section class="section">
  <div class="container container-narrow">
    <span class="section-label">Our Commitment</span>
    <h2 class="section-title">Responsible Pest Management</h2>
    <p style="font-size: var(--text-md); color: var(--color-text-muted); line-height: var(--leading-relaxed);">
      Sustainability isn't an add-on at UrbanPest — it's fundamental to how we operate. We're transforming pest management to minimise environmental impact while maximising effectiveness, and we hold ourselves accountable through measurable targets, transparent reporting, and third-party verification.
    </p>

    <!-- Green Fleet Photo Showcase -->
    <div style="margin-top: var(--space-2xl); border-radius: var(--radius-xl); overflow: hidden; box-shadow: var(--shadow-xl); border: 1px solid var(--color-border); position: relative;">
      <img src="/assets/images/green-fleet.jpg" alt="UrbanPest 100% Electric Commercial Service Fleet" style="width: 100%; height: auto; max-height: 480px; object-fit: cover; display: block;">
      <div style="position: absolute; bottom: 20px; left: 20px; background: rgba(11,31,58,0.88); backdrop-filter: blur(8px); padding: 10px 20px; border-radius: var(--radius-md); color: #fff; border-left: 3px solid var(--color-emerald); font-size: var(--text-xs);">
        <strong>UrbanPest Low-Emission Fleet</strong> • 68% Electric & Hybrid Today, 100% by 2027
      </div>
    </div>
  </div>
</section>

<section class="section section-alt">
  <div class="container">
    <div class="section-header">
      <span class="section-label">Four Pillars</span>
      <h2 class="section-title">Our Sustainability Framework</h2>
    </div>
    <div class="grid grid-2 grid-gap-xl">
      <?php
      $pillars = [
        ['title' => 'Carbon Neutral Operations', 'icon' => '<path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>', 'desc' => 'Our European division has achieved certified carbon neutrality. We\'re on track for global carbon neutral operations by 2028 through fleet electrification (68% EV/hybrid today), optimised routing, renewable energy procurement, and verified offset programs.'],
        ['title' => 'Reduced Chemical Programs', 'icon' => '<path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"></path><path d="M7 12l3-7 4 14 3-7"></path>', 'desc' => 'We prioritise non-chemical and reduced-chemical approaches wherever possible. Our digital monitoring technology enables precision treatments — applying the right intervention, at the right time, in the right place — reducing chemical use by up to 60% compared to traditional calendar-based programs.'],
        ['title' => 'Fleet Electrification', 'icon' => '<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>', 'desc' => '68% of our European service fleet is now electric or hybrid, with a commitment to reach 100% by 2027. Our route optimisation algorithms, powered by UrbanPest Connect data, have reduced total kilometres driven by 22% — cutting emissions and fuel costs simultaneously.'],
        ['title' => 'Community & Biodiversity', 'icon' => '<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path>', 'desc' => 'We invest in community education programs, biodiversity research, and partnerships with environmental organisations. Our humane pest management practices prioritise animal welfare, and our teams contribute to urban biodiversity monitoring projects worldwide.'],
      ];
      foreach ($pillars as $pillar):
      ?>
        <div class="card card-no-hover" style="padding: var(--space-xl);">
          <div style="width:56px; height:56px; border-radius: var(--radius-lg); background: var(--color-emerald-bg); color: var(--color-emerald); display:flex; align-items:center; justify-content:center; margin-bottom: var(--space-md);">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><?php echo $pillar['icon']; ?></svg>
          </div>
          <h3 style="margin-bottom: var(--space-sm);"><?php echo $pillar['title']; ?></h3>
          <p style="color: var(--color-text-muted); font-size: var(--text-sm);"><?php echo $pillar['desc']; ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <?php
    $ctaTitle  = 'Partner with a Sustainable Provider';
    $ctaText   = 'Choosing UrbanPest supports your own ESG targets. We provide carbon impact reporting as part of our standard service.';
    $ctaLabel  = 'Learn More';
    $ctaLink   = '/contact.php';
    $ctaLabel2 = ''; $ctaLink2 = '';
    include __DIR__ . '/partials/cta-banner.php';
    ?>
  </div>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>
