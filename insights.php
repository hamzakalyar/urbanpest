<?php
/**
 * UrbanPest — Insights / Blog Listing Page
 */

$pageTitle = 'Insights — UrbanPest';
$pageDescription = 'Expert insights on pest management, food safety, industry trends, and innovation from the UrbanPest knowledge hub.';
$currentPage = 'insights';

require_once __DIR__ . '/data/blog-posts.php';
include __DIR__ . '/partials/header.php';

// Category filter
$activeCategory = isset($_GET['cat']) ? $_GET['cat'] : 'All';
?>

<!-- Page Hero -->
<?php
$heroTitle       = 'Pest Intelligence & Insights';
$heroDesc        = 'Authoritative research, regulatory compliance updates, audit preparedness guides, and technical briefings from leading commercial entomologists and biosecurity experts.';
$heroTag         = 'KNOWLEDGE REPOSITORY // TECHNICAL BRIEFINGS';
$heroBadge       = 'Global Research & Whitepapers';
$heroImage       = '/assets/images/digital-dashboard.jpg';
$heroWatermark   = 'INSIGHTS';
$heroStatVal     = '50+';
$heroStatLabel   = 'Peer-Reviewed Industry Guides';
$heroCtaText     = 'Browse Knowledge Articles';
$heroCtaLink     = '#articles';
$heroBreadcrumbs = [
    ['label' => 'Home', 'url' => '/'],
    ['label' => 'Insights']
];
include __DIR__ . '/partials/page-hero.php';
?>

<section class="section">
  <div class="container">
    <!-- Category Filters -->
    <div class="blog-filters" id="blogFilters">
      <a href="/insights" class="blog-filter-btn <?php echo $activeCategory === 'All' ? 'active' : ''; ?>">All</a>
      <?php foreach ($blogCategories as $cat): ?>
        <a href="/insights?cat=<?php echo urlencode($cat); ?>" class="blog-filter-btn <?php echo $activeCategory === $cat ? 'active' : ''; ?>">
          <?php echo htmlspecialchars($cat); ?>
        </a>
      <?php endforeach; ?>
    </div>

    <!-- Blog Grid -->
    <div class="grid grid-3 grid-gap-lg">
      <?php foreach ($blogPosts as $post):
        if ($activeCategory !== 'All' && $post['category'] !== $activeCategory) continue;
      ?>
        <article class="blog-card">
          <div class="blog-card-image" style="background: url('<?php echo htmlspecialchars($post['image']); ?>') center/cover no-repeat;">
            <div class="blog-card-category">
              <span class="badge badge-emerald"><?php echo htmlspecialchars($post['category']); ?></span>
            </div>
          </div>
          <div class="blog-card-body">
            <div class="blog-card-meta">
              <span><?php echo date('M j, Y', strtotime($post['date'])); ?></span>
              <span><?php echo $post['read_time']; ?></span>
            </div>
            <h3><a href="/insights/<?php echo urlencode($post['slug']); ?>"><?php echo htmlspecialchars($post['title']); ?></a></h3>
            <p><?php echo htmlspecialchars($post['excerpt']); ?></p>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>
