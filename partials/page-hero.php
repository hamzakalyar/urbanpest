<?php
/**
 * UrbanPest Melbourne — Corporate Enterprise Page Hero Component
 * Inspired by Rentokil Australia corporate enterprise standards:
 * Clean white/off-white canvas, authoritative typography, Australian regulatory seals,
 * direct Melbourne phone (+61 410 148 126), and direct WhatsApp dispatch.
 *
 * Expected variables (all optional with defaults):
 * - $heroTitle (string)
 * - $heroDesc (string)
 * - $heroTag (string)
 * - $heroBadge (string)
 * - $heroImage (string)
 * - $heroStatVal (string)
 * - $heroStatLabel (string)
 * - $heroBreadcrumbs (array of ['label' => '', 'url' => ''])
 * - $heroCtaText (string)
 * - $heroCtaLink (string)
 * - $heroWaLink (string)
 */

global $appConfig;
require_once __DIR__ . '/../data/config.php';

$heroTitle       = !empty($heroTitle) ? $heroTitle : 'Melbourne Commercial Pest Management';
$heroDesc        = !empty($heroDesc) ? $heroDesc : 'HACCP & AEPMA certified biosecurity, proactive prevention, and rapid 24/7 technical dispatch across Greater Melbourne commercial facilities.';
$heroTag         = !empty($heroTag) ? $heroTag : 'Melbourne Commercial Division — AS 3660 & HACCP Certified';
$heroBadge       = !empty($heroBadge) ? $heroBadge : 'AEPMA & HACCP Australia Certified';
$heroImage       = !empty($heroImage) ? $heroImage : '/assets/images/hero-technician.jpg';
$heroStatVal     = !empty($heroStatVal) ? $heroStatVal : '99.4%';
$heroStatLabel   = !empty($heroStatLabel) ? $heroStatLabel : 'Audit Pass Rate';
$heroCtaText     = !empty($heroCtaText) ? $heroCtaText : 'Request Facility Survey';
$heroCtaLink     = !empty($heroCtaLink) ? $heroCtaLink : '/contact.php';
$heroWaLink      = !empty($heroWaLink) ? $heroWaLink : getWhatsAppLink($heroTitle);
$heroBreadcrumbs = !empty($heroBreadcrumbs) ? $heroBreadcrumbs : [
    ['label' => 'Home', 'url' => '/index.php'],
    ['label' => $heroTitle]
];
?>

<section class="corporate-hero" aria-label="<?php echo htmlspecialchars($heroTitle); ?> Overview">
  <div class="container">
    <!-- Breadcrumb Trail -->
    <nav class="corp-breadcrumbs" aria-label="Breadcrumbs">
      <ol class="corp-crumb-list">
        <?php 
        $crumbCount = count($heroBreadcrumbs);
        foreach ($heroBreadcrumbs as $index => $crumb): 
          $isLast = ($index === $crumbCount - 1);
        ?>
          <li class="corp-crumb-item">
            <?php if (!$isLast && !empty($crumb['url'])): ?>
              <a href="<?php echo htmlspecialchars($crumb['url']); ?>" class="corp-crumb-link">
                <?php if ($index === 0): ?>
                  <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="corp-crumb-home-icon"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                <?php endif; ?>
                <?php echo htmlspecialchars($crumb['label']); ?>
              </a>
              <span class="corp-crumb-sep" aria-hidden="true">›</span>
            <?php else: ?>
              <span class="corp-crumb-current" aria-current="page"><?php echo htmlspecialchars($crumb['label']); ?></span>
            <?php endif; ?>
          </li>
        <?php endforeach; ?>
      </ol>
    </nav>

    <!-- Main Hero Grid -->
    <div class="corporate-hero-grid">
      <!-- Left Column: Content & Enterprise Authority -->
      <div class="corporate-hero-content">
        <!-- Division & Operational Scope Pill -->
        <div class="corp-scope-badge">
          <span class="corp-scope-indicator"></span>
          <span><?php echo htmlspecialchars($heroTag); ?></span>
        </div>

        <!-- Headline -->
        <h1 class="corp-hero-title"><?php echo htmlspecialchars($heroTitle); ?></h1>

        <!-- Executive Description -->
        <p class="corp-hero-desc"><?php echo htmlspecialchars($heroDesc); ?></p>

        <!-- Action CTAs -->
        <div class="corp-hero-actions">
          <a href="<?php echo htmlspecialchars($heroCtaLink); ?>" class="btn btn-primary corp-btn-primary">
            <?php echo htmlspecialchars($heroCtaText); ?>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
          </a>
          
          <a href="<?php echo htmlspecialchars($heroWaLink); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp corp-btn-whatsapp">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.664-.698c.969.586 1.761.887 2.796.887 3.182 0 5.768-2.587 5.768-5.768.001-3.18-2.584-5.772-5.768-5.772zm3.393 8.163c-.144.405-.837.774-1.17.824-.312.045-.694.062-2.18-.553-1.898-.785-3.125-2.73-3.22-2.856-.095-.127-.768-1.021-.768-1.948 0-.927.489-1.383.663-1.572.174-.189.381-.237.508-.237.126 0 .253.002.364.007.117.006.275-.044.43.329.16.386.545 1.33.593 1.428.048.098.08.213.016.34-.064.127-.096.206-.19.317-.095.11-.2.246-.285.331-.095.095-.195.198-.084.388.111.19.493.813 1.057 1.317.727.649 1.339.851 1.53.946.19.095.302.079.414-.047.111-.127.476-.554.603-.744.127-.19.254-.159.428-.095.174.063 1.109.523 1.3.618.19.095.317.143.365.222.048.079.048.46-.096.865z"/></svg>
            <span>WhatsApp Specialist</span>
          </a>

          <a href="tel:<?php echo htmlspecialchars($appConfig['phone_raw'] ?? '+61410148126'); ?>" class="corp-phone-badge" title="Call Melbourne Technical Dispatch">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            <div>
              <small>Direct Technical Line</small>
              <strong><?php echo htmlspecialchars($appConfig['phone_display'] ?? '+61 410 148 126'); ?></strong>
            </div>
          </a>
        </div>

        <!-- Australian Enterprise Compliance Trust Bar -->
        <div class="corp-compliance-strip">
          <div class="corp-compliance-item" title="Australian Environmental Pest Managers Association">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#0FA968" stroke-width="2.2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>
            <span>AEPMA Accredited</span>
          </div>
          <div class="corp-compliance-item" title="HACCP Australia Food Safety Endorsed">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#0FA968" stroke-width="2.2"><circle cx="12" cy="12" r="10"/><polyline points="9 12 11 14 15 10"/></svg>
            <span>HACCP Australia Endorsed</span>
          </div>
          <div class="corp-compliance-item" title="Australian Standards AS 3660 & AS 4349">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#0FA968" stroke-width="2.2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
            <span>AS 3660 Termite Standard</span>
          </div>
          <div class="corp-compliance-item" title="Victorian Department of Health Commercial Pest Control Operator License">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#0FA968" stroke-width="2.2"><rect x="3" y="4" width="18" height="16" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
            <span>Vic Health Lic. L008412</span>
          </div>
        </div>
      </div>

      <!-- Right Column: Clean Photographic Showcase -->
      <div class="corporate-hero-visual">
        <div class="corp-visual-card">
          <div class="corp-visual-media">
            <img src="<?php echo htmlspecialchars($heroImage); ?>" alt="<?php echo htmlspecialchars($heroTitle); ?> Melbourne Commercial Service" class="corp-visual-img" loading="eager" />
          </div>
          <div class="corp-visual-caption">
            <div class="corp-caption-main">
              <span class="corp-caption-tag"><?php echo htmlspecialchars($heroBadge); ?></span>
              <h4 class="corp-caption-title">Commercial Service Division</h4>
              <p class="corp-caption-sub">Serving CBD, Docklands, Tullamarine, Dandenong & Regional Victoria</p>
            </div>
            <div class="corp-caption-stat">
              <span class="corp-stat-number"><?php echo htmlspecialchars($heroStatVal); ?></span>
              <span class="corp-stat-text"><?php echo htmlspecialchars($heroStatLabel); ?></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
