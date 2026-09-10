<?php
/**
 * UrbanPest — Individual Blog Article Page
 */

require_once __DIR__ . '/data/blog-posts.php';

// Canonical Clean URL Redirect
if (strpos($_SERVER['REQUEST_URI'] ?? '', 'insights-single.php') !== false && !empty($_GET['slug'])) {
    header('Location: /insights/' . urlencode($_GET['slug']), true, 301);
    exit;
}

$slug = isset($_GET['slug']) ? $_GET['slug'] : '';
$post = isset($blogPostsLookup[$slug]) ? $blogPostsLookup[$slug] : $blogPosts[0];

$pageTitle = $post['title'] . ' — UrbanPest Insights';
$pageDescription = $post['excerpt'];
$currentPage = 'insights';

include __DIR__ . '/partials/header.php';
?>

<!-- Page Hero -->
<?php
$heroTitle       = $post['title'];
$heroDesc        = $post['excerpt'];
$heroTag         = 'TECHNICAL ANALYSIS // ' . strtoupper($post['category']);
$heroBadge       = $post['category'] . ' Briefing';
$heroImage       = !empty($post['image']) ? $post['image'] : '/assets/images/digital-dashboard.jpg';
$heroWatermark   = strtoupper($post['category']);
$heroStatVal     = $post['read_time'];
$heroStatLabel   = 'Estimated Read Time';
$heroCtaText     = 'Read Full Article';
$heroCtaLink     = '#article-body';
$heroBreadcrumbs = [
    ['label' => 'Home', 'url' => '/index.php'],
    ['label' => 'Insights', 'url' => '/insights.php'],
    ['label' => $post['category']]
];
include __DIR__ . '/partials/page-hero.php';
?>

<section class="section">
  <div class="container container-narrow">
    <!-- Article Meta -->
    <div class="article-meta">
      <span>
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display:inline; vertical-align:middle;"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
        <?php echo htmlspecialchars($post['author']); ?>
      </span>
      <span>
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display:inline; vertical-align:middle;"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
        <?php echo date('F j, Y', strtotime($post['date'])); ?>
      </span>
      <span><?php echo $post['read_time']; ?></span>
    </div>

    <!-- Featured Image -->
    <?php if (!empty($post['image'])): ?>
      <div style="margin-bottom: var(--space-2xl); border-radius: var(--radius-xl); overflow: hidden; max-height: 460px; box-shadow: var(--shadow-lg); border: 1px solid var(--color-border);">
        <img src="<?php echo htmlspecialchars($post['image']); ?>" alt="<?php echo htmlspecialchars($post['title']); ?>" style="width: 100%; height: 100%; max-height: 460px; object-fit: cover;">
      </div>
    <?php endif; ?>

    <!-- Article Body -->
    <div class="article-body">
      <?php echo $post['body']; ?>
    </div>

    <!-- Related Posts -->
    <div class="related-posts">
      <h3 style="margin-bottom: var(--space-xl);">Related Articles</h3>
      <div class="grid grid-3 grid-gap-lg">
        <?php
        $count = 0;
        foreach ($blogPosts as $related):
          if ($related['slug'] === $post['slug']) continue;
          if ($count >= 3) break;
          $count++;
        ?>
          <article class="blog-card">
            <div class="blog-card-image" style="background: url('<?php echo htmlspecialchars($related['image']); ?>') center/cover no-repeat;">
              <div class="blog-card-category">
                <span class="badge badge-emerald"><?php echo htmlspecialchars($related['category']); ?></span>
              </div>
            </div>
            <div class="blog-card-body">
              <div class="blog-card-meta">
                <span><?php echo date('M j, Y', strtotime($related['date'])); ?></span>
              </div>
              <h3><a href="/insights-single.php?slug=<?php echo urlencode($related['slug']); ?>"><?php echo htmlspecialchars($related['title']); ?></a></h3>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>
