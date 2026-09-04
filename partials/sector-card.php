<?php
/**
 * UrbanPest — Sector Card Partial
 * 
 * Variables:
 *   $sector — Array with keys: slug, name, icon
 */
$slug = $sector['slug'] ?? '#';
$name = $sector['name'] ?? 'Sector';
?>

<a href="/industries-single.php?slug=<?php echo urlencode($slug); ?>" class="sector-card">
  <div class="sector-card-icon">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
      <?php
      // Map sector icons
      $iconMap = [
        'factory'       => '<path d="M2 20h20"></path><path d="M5 20V4h14v16"></path><path d="M9 4V2"></path><path d="M15 4V2"></path>',
        'warehouse'     => '<rect x="1" y="3" width="15" height="13"></rect><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon><circle cx="5.5" cy="18.5" r="2.5"></circle><circle cx="18.5" cy="18.5" r="2.5"></circle>',
        'hotel'         => '<path d="M3 21h18"></path><path d="M5 21V7l8-4v18"></path><path d="M19 21V11l-6-4"></path>',
        'shopping-cart'  => '<circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>',
        'building'       => '<rect x="4" y="2" width="16" height="20" rx="2" ry="2"></rect><line x1="12" y1="18" x2="12.01" y2="18"></line>',
        'pill'           => '<path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path>',
        'briefcase'      => '<rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>',
        'medkit'         => '<path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>',
      ];
      $icon = $sector['icon'] ?? 'building';
      echo $iconMap[$icon] ?? $iconMap['building'];
      ?>
    </svg>
  </div>
  <h4><?php echo htmlspecialchars($name); ?></h4>
</a>
