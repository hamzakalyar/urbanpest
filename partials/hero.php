<?php
/**
 * UrbanPest — Hero Banner Partial
 * 
 * Variables:
 *   $heroTitle    — Main heading (HTML allowed for .highlight spans)
 *   $heroSubtitle — Subheading text
 *   $heroCta      — Primary CTA text
 *   $heroCtaLink  — Primary CTA URL
 *   $heroCta2     — Secondary CTA text (optional)
 *   $heroCtaLink2 — Secondary CTA URL (optional)
 *   $heroLabel    — Small label above title (optional)
 */

$heroTitle    = $heroTitle ?? 'Protecting What Matters Most';
$heroSubtitle = $heroSubtitle ?? '';
$heroCta      = $heroCta ?? 'Get Started';
$heroCtaLink  = $heroCtaLink ?? '/contact.php';
$heroCta2     = $heroCta2 ?? '';
$heroCtaLink2 = $heroCtaLink2 ?? '#';
$heroLabel    = $heroLabel ?? '';
?>

<?php
$heroBgImage = $heroBgImage ?? '/assets/images/hero-technician.jpg';
?>
<section class="hero" id="hero" style="background: linear-gradient(90deg, rgba(11, 31, 58, 0.97) 0%, rgba(11, 31, 58, 0.90) 42%, rgba(11, 31, 58, 0.45) 75%, rgba(11, 31, 58, 0.75) 100%), url('<?php echo htmlspecialchars($heroBgImage); ?>') center right / cover no-repeat;">
  <div class="hero-pattern"></div>
  <div class="container">
    <div class="hero-content animate-fade-in-up">
      <?php if ($heroLabel): ?>
        <div class="hero-label">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
          <?php echo $heroLabel; ?>
        </div>
      <?php endif; ?>
      
      <h1><?php echo $heroTitle; ?></h1>
      
      <?php if ($heroSubtitle): ?>
        <p class="hero-text"><?php echo $heroSubtitle; ?></p>
      <?php endif; ?>

      <!-- Enterprise Trust & Guarantee Badges -->
      <div class="hero-trust-badges">
        <div class="hero-trust-item">
          <div class="hero-stars">
            <span style="color: #F5A623;">★</span><span style="color: #F5A623;">★</span><span style="color: #F5A623;">★</span><span style="color: #F5A623;">★</span><span style="color: #F5A623;">★</span>
          </div>
          <span><strong>4.9/5</strong> Client Satisfaction</span>
        </div>
        <div class="hero-trust-divider"></div>
        <div class="hero-trust-item">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--color-emerald-light)" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
          <span><strong>99.4%</strong> Audit Pass Rate</span>
        </div>
        <div class="hero-trust-divider"></div>
        <div class="hero-trust-item">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--color-emerald-light)" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
          <span><strong>2-Hour</strong> Rapid Dispatch</span>
        </div>
      </div>
      
      <div class="hero-actions" style="display:flex; align-items:center; flex-wrap:wrap; gap:14px;">
        <a href="<?php echo htmlspecialchars($heroCtaLink); ?>" class="btn btn-primary btn-lg"><?php echo htmlspecialchars($heroCta); ?></a>
        <?php 
        require_once __DIR__ . '/../data/config.php';
        $heroWaLink = getWhatsAppLink('Perth Commercial Biosecurity');
        ?>
        <a href="<?php echo htmlspecialchars($heroWaLink); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp btn-lg">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.664-.698c.969.586 1.761.887 2.796.887 3.182 0 5.768-2.587 5.768-5.768.001-3.18-2.584-5.772-5.768-5.772zm3.393 8.163c-.144.405-.837.774-1.17.824-.312.045-.694.062-2.18-.553-1.898-.785-3.125-2.73-3.22-2.856-.095-.127-.768-1.021-.768-1.948 0-.927.489-1.383.663-1.572.174-.189.381-.237.508-.237.126 0 .253.002.364.007.117.006.275-.044.43.329.16.386.545 1.33.593 1.428.048.098.08.213.016.34-.064.127-.096.206-.19.317-.095.11-.2.246-.285.331-.095.095-.195.198-.084.388.111.19.493.813 1.057 1.317.727.649 1.339.851 1.53.946.19.095.302.079.414-.047.111-.127.476-.554.603-.744.127-.19.254-.159.428-.095.174.063 1.109.523 1.3.618.19.095.317.143.365.222.048.079.048.46-.096.865z"/></svg>
          Chat on WhatsApp
        </a>
        <a href="tel:<?php echo htmlspecialchars($appConfig['phone_raw'] ?? '+61410148126'); ?>" class="btn btn-secondary btn-lg" style="background: rgba(255,255,255,0.08); border-color: rgba(255,255,255,0.2);">
          Call <?php echo htmlspecialchars($appConfig['phone_display'] ?? '+61 410 148 126'); ?>
        </a>
      </div>
    </div>
  </div>
</section>
