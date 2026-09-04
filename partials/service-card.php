<?php
/**
 * UrbanPest — Service Card Partial
 * 
 * Variables:
 *   $service — Array with keys: slug, name, icon, short_desc
 *   $categorySlug — Parent category slug (optional)
 */
require_once __DIR__ . '/pest-symbols.php';

$slug = $service['slug'] ?? '#';
$name = $service['name'] ?? 'Service';
$desc = $service['short_desc'] ?? '';
$visual = getServiceVisual($slug);
?>

<a href="/services-single.php?slug=<?php echo urlencode($slug); ?>" class="service-card">
  <div class="service-card-visual">
    <img src="<?php echo $visual['pic']; ?>" alt="<?php echo htmlspecialchars($name); ?>" class="service-card-thumb" loading="lazy">
    <div class="service-card-icon-badge" style="color: <?php echo $visual['color']; ?>;">
      <?php echo $visual['icon']; ?>
    </div>
  </div>
  <div class="service-card-body">
    <h3><?php echo htmlspecialchars($name); ?></h3>
    <p><?php echo htmlspecialchars($desc); ?></p>
    <span class="link-arrow">
      Explore solution 
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
    </span>
  </div>
</a>
