<?php
/**
 * UrbanPest — Service Card Partial
 * 
 * Variables:
 *   $service — Array with keys: slug, name, icon, short_desc
 *   $categorySlug — Parent category slug (optional)
 */
require_once __DIR__ . '/pest-symbols.php';
require_once __DIR__ . '/../data/config.php';

$slug = $service['slug'] ?? '#';
$name = $service['name'] ?? 'Service';
$desc = $service['short_desc'] ?? '';
$visual = getServiceVisual($slug);
$serviceWaLink = getWhatsAppLink($name);
?>

<div class="service-card">
  <div class="service-card-visual">
    <img src="<?php echo $visual['pic']; ?>" alt="<?php echo htmlspecialchars($name); ?>" class="service-card-thumb" loading="lazy">
    <div class="service-card-icon-badge" style="color: <?php echo $visual['color']; ?>;">
      <?php echo $visual['icon']; ?>
    </div>
  </div>
  <div class="service-card-body" style="display:flex; flex-direction:column;">
    <h3>
      <a href="/services-single.php?slug=<?php echo urlencode($slug); ?>" style="color:inherit; text-decoration:none;">
        <?php echo htmlspecialchars($name); ?>
      </a>
    </h3>
    <p style="flex:1;"><?php echo htmlspecialchars($desc); ?></p>
    <div style="display:flex; align-items:center; justify-content:space-between; gap:12px; margin-top:var(--space-sm);">
      <a href="/services-single.php?slug=<?php echo urlencode($slug); ?>" class="link-arrow">
        Explore solution 
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
      </a>
      <a href="<?php echo htmlspecialchars($serviceWaLink); ?>" target="_blank" rel="noopener" class="btn-whatsapp" title="Chat about <?php echo htmlspecialchars($name); ?> on WhatsApp" style="padding:4px 10px; font-size:0.75rem;">
        <svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.664-.698c.969.586 1.761.887 2.796.887 3.182 0 5.768-2.587 5.768-5.768.001-3.18-2.584-5.772-5.768-5.772zm3.393 8.163c-.144.405-.837.774-1.17.824-.312.045-.694.062-2.18-.553-1.898-.785-3.125-2.73-3.22-2.856-.095-.127-.768-1.021-.768-1.948 0-.927.489-1.383.663-1.572.174-.189.381-.237.508-.237.126 0 .253.002.364.007.117.006.275-.044.43.329.16.386.545 1.33.593 1.428.048.098.08.213.016.34-.064.127-.096.206-.19.317-.095.11-.2.246-.285.331-.095.095-.195.198-.084.388.111.19.493.813 1.057 1.317.727.649 1.339.851 1.53.946.19.095.302.079.414-.047.111-.127.476-.554.603-.744.127-.19.254-.159.428-.095.174.063 1.109.523 1.3.618.19.095.317.143.365.222.048.079.048.46-.096.865z"/></svg>
        WhatsApp
      </a>
    </div>
  </div>
</div>
