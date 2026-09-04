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
      
      <div class="hero-actions">
        <a href="<?php echo htmlspecialchars($heroCtaLink); ?>" class="btn btn-primary btn-lg"><?php echo htmlspecialchars($heroCta); ?></a>
        <?php if ($heroCta2): ?>
          <a href="<?php echo htmlspecialchars($heroCtaLink2); ?>" class="btn btn-secondary btn-lg"><?php echo htmlspecialchars($heroCta2); ?></a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
