<?php
/**
 * UrbanPest — Local PHP Server Router
 * Emulates Apache mod_rewrite clean URLs for PHP's built-in web server.
 * Enforces canonical 301 redirects away from .php extensions (e.g. /contact.php -> /contact, /index.php -> /).
 */

$rawUri = $_SERVER['REQUEST_URI'] ?? '/';
$uri = parse_url($rawUri, PHP_URL_PATH);
$query = parse_url($rawUri, PHP_URL_QUERY);
$queryString = $query ? '?' . $query : '';

// ============================================
// 0. ADMIN ROUTING & CANONICAL 301 REDIRECTS
// ============================================
if (strpos($uri, '/admin') === 0) {
    // 301 Redirect /admin/index.php -> /admin
    if (strcasecmp($uri, '/admin/index.php') === 0) {
        header('Location: /admin' . $queryString, true, 301);
        exit;
    }

    // 301 Redirect /admin/{page}.php -> /admin/{page}
    if (preg_match('#^/admin/([a-z0-9_-]+)\.php$#i', $uri, $m)) {
        header('Location: /admin/' . strtolower($m[1]) . $queryString, true, 301);
        exit;
    }

    // Root /admin or /admin/
    if ($uri === '/admin' || $uri === '/admin/') {
        require __DIR__ . '/admin/index.php';
        exit;
    }

    // Clean admin pages: /admin/{page} -> admin/{page}.php
    if (preg_match('#^/admin/([a-z0-9_-]+)/?$#i', $uri, $m)) {
        $adminPhpFile = __DIR__ . '/admin/' . strtolower($m[1]) . '.php';
        if (file_exists($adminPhpFile)) {
            require $adminPhpFile;
            exit;
        }
    }

    // Static assets inside /admin if any
    $adminFilePath = __DIR__ . $uri;
    if (file_exists($adminFilePath) && !is_dir($adminFilePath)) {
        return false;
    }

    http_response_code(404);
    echo "Admin page not found.";
    exit;
}

// Allow API/Form POST handlers
if (in_array($uri, ['/booking-handler.php', '/contact-handler.php', '/auth-handler.php'])) {
    return false;
}

// ============================================
// 1. CANONICAL 301 REDIRECTS (Enforce clean URLs)
// ============================================

// /index.php -> /
if (strcasecmp($uri, '/index.php') === 0) {
    header('Location: /' . $queryString, true, 301);
    exit;
}

// Standard page .php redirects
$phpRedirectMap = [
    '/contact.php'              => '/contact',
    '/book.php'                 => '/book',
    '/services.php'             => '/services',
    '/industries.php'           => '/industries',
    '/about.php'                => '/about',
    '/insights.php'             => '/insights',
    '/about-sustainability.php' => '/about/sustainability',
    '/about-locations.php'      => '/about/locations',
    '/about-innovation.php'     => '/about/innovation',
    '/about-careers.php'        => '/about/careers',
];

$lowerUri = strtolower($uri);
if (isset($phpRedirectMap[$lowerUri])) {
    header('Location: ' . $phpRedirectMap[$lowerUri] . $queryString, true, 301);
    exit;
}

// Clean redirects for legacy single detail queries
if (strcasecmp($uri, '/services-single.php') === 0 && !empty($_GET['slug'])) {
    header('Location: /services/' . urlencode($_GET['slug']), true, 301);
    exit;
}
if (strcasecmp($uri, '/industries-single.php') === 0 && !empty($_GET['slug'])) {
    header('Location: /industries/' . urlencode($_GET['slug']), true, 301);
    exit;
}
if (strcasecmp($uri, '/insights-single.php') === 0 && !empty($_GET['slug'])) {
    header('Location: /insights/' . urlencode($_GET['slug']), true, 301);
    exit;
}

// ============================================
// 2. STATIC ASSETS
// ============================================
$filePath = __DIR__ . $uri;
if ($uri !== '/' && file_exists($filePath) && !is_dir($filePath)) {
    $ext = strtolower(pathinfo($filePath, PATHINFO_EXTENSION));
    // Serve static files (css, js, images, fonts, etc.)
    if ($ext !== 'php') {
        return false;
    }
}

// ============================================
// 3. ROUTE DISPATCHING (Clean URLs)
// ============================================

// Homepage
if ($uri === '/' || $uri === '') {
    require __DIR__ . '/index.php';
    exit;
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

// About Sub-pages (support both /about/locations and /about-locations)
if (preg_match('#^/about/(sustainability|innovation|locations|careers)/?$#i', $uri, $m) ||
    preg_match('#^/about-(sustainability|innovation|locations|careers)/?$#i', $uri, $m)) {
    require __DIR__ . '/about-' . strtolower($m[1]) . '.php';
    exit;
}

// Clean URL: /about
if (preg_match('#^/about/?$#i', $uri)) {
    require __DIR__ . '/about.php';
    exit;
}

// Clean URL: /contact
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

// Let PHP server handle any unhandled requests
return false;
