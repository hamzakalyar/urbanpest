<?php
$pageTitle = 'Safe & Responsible Practices — UrbanX Pest Control';
$pageDescription = 'UrbanX Pest Control is committed to safe and responsible pest management practices for residential and commercial properties across Perth.';
$currentPage = 'about';
include __DIR__ . '/partials/header.php';
?>

<!-- Page Hero -->
<?php
$heroTitle       = 'Safe & Responsible Practices';
$heroDesc        = 'Committed to protecting families, pets, and businesses across Perth through low-toxicity formulations, targeted treatments, and humane exclusion.';
$heroTag         = 'SAFE & RESPONSIBLE PEST PRACTICES // PERTH & WA';
$heroBadge       = 'Western Australian Licensed Operators';
$heroImage       = '/assets/images/green-fleet.jpg';
$heroWatermark   = 'RESPONSIBLE';
$heroStatVal     = '100%';
$heroStatLabel   = 'Western Australian Regulatory Compliance';
$heroCtaText     = 'Contact Our Team';
$heroCtaLink     = '/contact.php';
$heroBreadcrumbs = [
    ['label' => 'Home', 'url' => '/index.php'],
    ['label' => 'About', 'url' => '/about.php'],
    ['label' => 'Safe Practices']
];
include __DIR__ . '/partials/page-hero.php';
?>

<section class="section">
  <div class="container container-narrow">
    <span class="section-label">Our Standards</span>
    <h2 class="section-title">Responsible Pest Management for Perth</h2>
    <p style="font-size: var(--text-md); color: var(--color-text-muted); line-height: var(--leading-relaxed);">
      At UrbanX Pest Control, safe and responsible pest management isn't just an afterthought—it's how we protect homes and businesses. We deliver targeted treatments designed to eliminate pests while safeguarding children, pets, employees, and indoor air quality across Perth.
    </p>

    <!-- Photo Showcase -->
    <div style="margin-top: var(--space-2xl); border-radius: var(--radius-xl); overflow: hidden; box-shadow: var(--shadow-xl); border: 1px solid var(--color-border); position: relative;">
      <img src="/assets/images/green-fleet.jpg" alt="UrbanX Service Fleet" style="width: 100%; height: auto; max-height: 480px; object-fit: cover; display: block;">
      <div style="position: absolute; bottom: 20px; left: 20px; background: rgba(11,31,58,0.88); backdrop-filter: blur(8px); padding: 10px 20px; border-radius: var(--radius-md); color: #fff; border-left: 3px solid var(--color-emerald); font-size: var(--text-xs);">
        <strong>UrbanX Pest Control</strong> • Licensed Western Australian Pest Operators
      </div>
    </div>
  </div>
</section>

<section class="section section-alt">
  <div class="container">
    <div class="section-header">
      <span class="section-label">Core Pillars</span>
      <h2 class="section-title">Our Practice Framework</h2>
    </div>
    <div class="grid grid-2 grid-gap-xl">
      <?php
      $pillars = [
        ['title' => 'Low-Toxicity Formulations', 'icon' => '<path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>', 'desc' => 'We select targeted, low-hazard active ingredients and biological formulations that achieve rapid control while keeping indoor air quality clean and safeguarding people and pets.'],
        ['title' => 'Targeted Precision Programs', 'icon' => '<path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"></path><path d="M7 12l3-7 4 14 3-7"></path>', 'desc' => 'We prioritize physical exclusion and targeted micro-treatments over blanket spraying, minimizing unnecessary chemicals while maximizing lasting efficacy.'],
        ['title' => 'Smart Route Optimisation', 'icon' => '<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>', 'desc' => 'Our Perth technicians are dispatched with smart route planning across CBD, Eastern, Northern, Western, and South Eastern suburbs, ensuring fast on-time arrival.'],
        ['title' => 'Humane Wildlife Solutions', 'icon' => '<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path>', 'desc' => 'Our bird and wildlife management prioritises humane exclusion—such as stainless netting, optical gel deterrents, and physical barrier sealing—strictly adhering to Australian animal welfare standards.'],
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
