<?php
/**
 * UrbanPest — CTA Banner Partial
 * 
 * Variables:
 *   $ctaTitle — Banner heading
 *   $ctaText  — Supporting text
 *   $ctaLink  — Primary button URL
 *   $ctaLabel — Primary button text
 *   $ctaLink2 — Secondary button URL (optional)
 *   $ctaLabel2 — Secondary button text (optional)
 */

$ctaTitle  = $ctaTitle ?? 'Ready to Protect Your Business?';
$ctaText   = $ctaText ?? 'Get in touch with our team to discuss a tailored pest management program for your facilities.';
$ctaLink   = $ctaLink ?? '/contact.php';
$ctaLabel  = $ctaLabel ?? 'Get a Free Consultation';
$ctaLink2  = $ctaLink2 ?? '';
$ctaLabel2 = $ctaLabel2 ?? '';
?>

<div class="cta-banner">
  <h2><?php echo htmlspecialchars($ctaTitle); ?></h2>
  <p><?php echo htmlspecialchars($ctaText); ?></p>
  <div class="cta-actions">
    <a href="<?php echo htmlspecialchars($ctaLink); ?>" class="btn btn-primary btn-lg"><?php echo htmlspecialchars($ctaLabel); ?></a>
    <?php if ($ctaLink2 && $ctaLabel2): ?>
      <a href="<?php echo htmlspecialchars($ctaLink2); ?>" class="btn btn-secondary btn-lg"><?php echo htmlspecialchars($ctaLabel2); ?></a>
    <?php endif; ?>
  </div>
</div>
