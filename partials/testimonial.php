<?php
/**
 * UrbanPest — Testimonial Partial
 * 
 * Variables:
 *   $testimonial — Array with keys: quote, name, role, company, sector
 */
$quote   = $testimonial['quote'] ?? '';
$name    = $testimonial['name'] ?? '';
$role    = $testimonial['role'] ?? '';
$company = $testimonial['company'] ?? '';
?>

<div class="testimonial-block">
  <blockquote class="testimonial-quote">
    <?php echo htmlspecialchars($quote); ?>
  </blockquote>
  <div class="testimonial-author">
    <span class="testimonial-name"><?php echo htmlspecialchars($name); ?></span>
    <span class="testimonial-role"><?php echo htmlspecialchars($role); ?>, <?php echo htmlspecialchars($company); ?></span>
  </div>
</div>
