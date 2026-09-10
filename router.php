<?php
/**
 * UrbanPest — Local PHP Server Router
 * Emulates Apache mod_rewrite clean URLs for PHP's built-in web server.
 */

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Serve static assets directly if file exists
$filePath = __DIR__ . $uri;
if ($uri !== '/' && file_exists($filePath) && !is_dir($filePath)) {
    return false;
}

// Canonical Service Clean URL: /services/{slug}
if (preg_match('#^/services/([a-z0-9-]+)/?$#i', $uri, $m)) {
    $_GET['slug'] = $m[1];
    require __DIR__ . '/services-single.php';
    exit;
}

// Clean URL: /services
if (preg_match('#^/services/?$#i', $uri)) {
    require __DIR__ . '/services.php';
    exit;
}

// Canonical Industry Clean URL: /industries/{slug}
if (preg_match('#^/industries/([a-z0-9-]+)/?$#i', $uri, $m)) {
    $_GET['slug'] = $m[1];
    require __DIR__ . '/industries-single.php';
    exit;
}

// Clean URL: /industries
if (preg_match('#^/industries/?$#i', $uri)) {
    require __DIR__ . '/industries.php';
    exit;
}

// Canonical Insights Clean URL: /insights/{slug}
if (preg_match('#^/insights/([a-z0-9-]+)/?$#i', $uri, $m)) {
    $_GET['slug'] = $m[1];
    require __DIR__ . '/insights-single.php';
    exit;
}

// Clean URL: /insights
if (preg_match('#^/insights/?$#i', $uri)) {
    require __DIR__ . '/insights.php';
    exit;
}

// About Sub-pages
if (preg_match('#^/about/sustainability/?$#i', $uri)) {
    require __DIR__ . '/about-sustainability.php';
    exit;
}
if (preg_match('#^/about/innovation/?$#i', $uri)) {
    require __DIR__ . '/about-innovation.php';
    exit;
}
if (preg_match('#^/about/locations/?$#i', $uri)) {
    require __DIR__ . '/about-locations.php';
    exit;
}
if (preg_match('#^/about/careers/?$#i', $uri)) {
    require __DIR__ . '/about-careers.php';
    exit;
}
if (preg_match('#^/about/?$#i', $uri)) {
    require __DIR__ . '/about.php';
    exit;
}

// Contact
if (preg_match('#^/contact/?$#i', $uri)) {
    require __DIR__ . '/contact.php';
    exit;
}

// Booking: /book/{slug} or /book
if (preg_match('#^/book/([a-z0-9-]+)/?$#i', $uri, $m)) {
    $_GET['service'] = $m[1];
    require __DIR__ . '/book.php';
    exit;
}
if (preg_match('#^/book/?$#i', $uri)) {
    require __DIR__ . '/book.php';
    exit;
}

// Let PHP server handle standard static files & scripts (e.g. /index.php, /admin/*, etc.)
return false;
