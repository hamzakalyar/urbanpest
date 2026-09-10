<?php
/**
 * UrbanPest — Header Partial
 * 
 * Variables to set before including:
 *   $pageTitle       — Page title for <title> tag
 *   $pageDescription — Meta description
 *   $currentPage     — Current page identifier for nav highlighting
 */

require_once __DIR__ . '/../data/config.php';
require_once __DIR__ . '/security.php';

initSecuritySession();
emitSecurityHeaders();

$pageTitle       = $pageTitle ?? 'UrbanX Pest Control — Professional Pest Management Perth';
$pageDescription = $pageDescription ?? 'UrbanX Pest Control provides professional pest management services for residential and commercial properties across Greater Perth. Operating in accordance with Western Australian licensing.';
$currentPage     = $currentPage ?? 'home';
$bodyClass       = $bodyClass ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <!-- SEO -->
  <title><?php echo htmlspecialchars($pageTitle); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
  
  <!-- Open Graph -->
  <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="UrbanX Pest Control">
  <meta property="og:image" content="/assets/images/og-image.jpg">
  
  <!-- Favicon & Touch Icons -->
  <link rel="icon" type="image/png" sizes="64x64" href="/assets/images/favicon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon.png">
  <link rel="icon" type="image/x-icon" href="/favicon.ico">
  <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/apple-touch-icon.png">
  
  <!-- CSS -->
  <link rel="stylesheet" href="/css/base.css">
  <link rel="stylesheet" href="/css/layout.css">
  <link rel="stylesheet" href="/css/components.css">
  <link rel="stylesheet" href="/css/responsive.css">
</head>
<body class="<?php echo htmlspecialchars($bodyClass); ?>">
  <div class="page-wrapper">
    <?php include __DIR__ . '/mega-menu.php'; ?>
    <main class="page-main" id="main-content">
