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
  <div class="service-card-body" style="display:flex; flex-direction:column; justify-content:space-between;">
    <div>
      <h3>
        <a href="/services/<?php echo urlencode($slug); ?>" style="color:inherit; text-decoration:none;">
          <?php echo htmlspecialchars($name); ?>
        </a>
      </h3>
      <p><?php echo htmlspecialchars($desc); ?></p>
    </div>

    <div class="service-card-actions">
      <div class="service-card-btn-group">
        <button type="button" class="btn-card-survey btn-card-res open-booking-modal" data-service-slug="<?php echo htmlspecialchars($slug); ?>" data-service-name="<?php echo htmlspecialchars($name); ?>" data-property-type="residential">
          <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
          Residential Survey
        </button>
        <button type="button" class="btn-card-survey btn-card-comm open-booking-modal" data-service-slug="<?php echo htmlspecialchars($slug); ?>" data-service-name="<?php echo htmlspecialchars($name); ?>" data-property-type="commercial">
          <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><rect x="4" y="2" width="16" height="20" rx="2" ry="2"/><line x1="9" y1="22" x2="9" y2="2"/><line x1="8" y1="6" x2="10" y2="6"/><line x1="14" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="10" y2="10"/><line x1="14" y1="10" x2="16" y2="10"/><line x1="8" y1="14" x2="10" y2="14"/><line x1="14" y1="14" x2="16" y2="14"/></svg>
          Commercial Survey
        </button>
      </div>
      <div class="service-card-meta-row">
        <a href="/services/<?php echo urlencode($slug); ?>" class="service-card-details-link">
          Explore Service Details
          <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
        </a>
        <a href="<?php echo htmlspecialchars($serviceWaLink); ?>" target="_blank" rel="noopener noreferrer" class="btn-card-wa" title="Chat about <?php echo htmlspecialchars($name); ?> on WhatsApp">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.664-.698c.969.586 1.761.887 2.796.887 3.182 0 5.768-2.587 5.768-5.768.001-3.18-2.584-5.772-5.768-5.772zm3.393 8.163c-.144.405-.837.774-1.17.824-.312.045-.694.062-2.18-.553-1.898-.785-3.125-2.73-3.22-2.856-.095-.127-.768-1.021-.768-1.948 0-.927.489-1.383.663-1.572.174-.189.381-.237.508-.237.126 0 .253.002.364.007.117.006.275-.044.43.329.16.386.545 1.33.593 1.428.048.098.08.213.016.34-.064.127-.096.206-.19.317-.095.11-.2.246-.285.331-.095.095-.195.198-.084.388.111.19.493.813 1.057 1.317.727.649 1.339.851 1.53.946.19.095.302.079.414-.047.111-.127.476-.554.603-.744.127-.19.254-.159.428-.095.174.063 1.109.523 1.3.618.19.095.317.143.365.222.048.079.048.46-.096.865z"/></svg>
          <span>WhatsApp</span>
        </a>
      </div>
    </div>
  </div>
</div>
