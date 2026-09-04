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

$pageTitle       = $pageTitle ?? 'UrbanPest — Precision Pest Protection for Modern Business';
$pageDescription = $pageDescription ?? 'UrbanPest delivers science-led commercial pest control and digital pest monitoring solutions to businesses across 90+ countries. Protect your facilities, your people, and your brand.';
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
  <meta property="og:site_name" content="UrbanPest">
  <meta property="og:image" content="/assets/images/og-image.jpg">
  
  <!-- Favicon -->
  <link rel="icon" type="image/svg+xml" href="/assets/icons/favicon.svg">
  
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
