<?php
/**
 * UrbanPest Perth — Primary Navigation & Header
 * Clean, simple, corporate design modeled for effortless navigation and clarity.
 */
global $appConfig;
require_once __DIR__ . '/../data/config.php';
?>

<!-- Header Wrapper (sticky) -->
<div class="header-wrapper" id="headerWrapper">

  <!-- Utility Bar (Right-aligned, clean, quiet, Rentokil-style) -->
  <div class="utility-bar">
    <div class="container utility-container">
      <div class="utility-left hide-mobile">
        <span class="util-tagline">Perth Commercial Biosecurity</span>
      </div>
      <div class="utility-right">
        <a href="/about-locations.php" class="util-link" title="Service Locations">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
          <span>Locations</span>
        </a>
        <button type="button" class="util-link" id="searchToggle" aria-label="Search site">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
          <span>Search</span>
        </button>
        <a href="/contact.php" class="util-link" title="Contact Us">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
          <span>Contact</span>
        </a>
        <a href="/admin/index.php" class="util-link" title="Staff Portal">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
          <span>Login</span>
        </a>
      </div>
    </div>
  </div>

  <!-- Main Header -->
  <header class="main-header" role="banner">
    <div class="container header-container">
      <!-- Logo: Official UrbanX Pest Control -->
      <a href="/index.php" class="logo" aria-label="UrbanX Pest Control">
        <img src="/assets/images/logo-horizontal.png" alt="UrbanX Pest Control" class="logo-brand-img" height="46" style="height: 46px; width: auto; display: block; object-fit: contain;">
      </a>

      <!-- Primary Navigation (Desktop) -->
      <nav class="primary-nav" id="primaryNav" role="navigation" aria-label="Main navigation">
        <ul class="nav-list">
          <!-- Services Dropdown -->
          <li class="nav-item <?php echo ($currentPage ?? '') === 'services' ? 'current' : ''; ?>" data-menu="services">
            <button class="nav-link" aria-haspopup="true" aria-expanded="false">
              Services
              <svg class="chevron" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </button>
            <div class="mega-menu dropdown-panel" role="menu" aria-label="Commercial Services">
              <div class="dropdown-grid cols-2">
                <div class="dropdown-col">
                  <span class="dropdown-heading">Commercial Treatments</span>
                  <a href="/services-single.php?slug=rodent-control" class="dropdown-link" role="menuitem">Rodent Control & Exclusion</a>
                  <a href="/services-single.php?slug=cockroach-control" class="dropdown-link" role="menuitem">Cockroach Eradication</a>
                  <a href="/services-single.php?slug=termite-control" class="dropdown-link" role="menuitem">Termite Management (AS 3660)</a>
                  <a href="/services-single.php?slug=bird-control" class="dropdown-link" role="menuitem">Bird Proofing & Netting</a>
                  <a href="/services-single.php?slug=fly-control" class="dropdown-link" role="menuitem">Commercial Fly Control</a>
                </div>
                <div class="dropdown-col">
                  <span class="dropdown-heading">Specialist & Digital</span>
                  <a href="/services-single.php?slug=bed-bug-control" class="dropdown-link" role="menuitem">Bed Bug Management</a>
                  <a href="/services-single.php?slug=stored-product-pests" class="dropdown-link" role="menuitem">Stored Product Insects</a>
                  <a href="/services-single.php?slug=disinfection-services" class="dropdown-link" role="menuitem">Disinfection & Hygiene</a>
                  <a href="/services-single.php?slug=smart-traps" class="dropdown-link" role="menuitem">Smart Connected Traps</a>
                  <a href="/services-single.php?slug=connected-rodent-monitoring" class="dropdown-link" role="menuitem">Connected Rodent Network</a>
                </div>
              </div>
              <div class="dropdown-footer">
                <a href="/services.php">View All Commercial Services &rarr;</a>
              </div>
            </div>
          </li>

          <!-- Business Sectors Dropdown -->
          <li class="nav-item <?php echo ($currentPage ?? '') === 'industries' ? 'current' : ''; ?>" data-menu="industries">
            <button class="nav-link" aria-haspopup="true" aria-expanded="false">
              Business sectors
              <svg class="chevron" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </button>
            <div class="mega-menu dropdown-panel" role="menu" aria-label="Business Sectors">
              <div class="dropdown-grid cols-2">
                <div class="dropdown-col">
                  <span class="dropdown-heading">Food & Hospitality</span>
                  <a href="/industries-single.php?slug=food-processing" class="dropdown-link" role="menuitem">Food Processing</a>
                  <a href="/industries-single.php?slug=logistics-warehousing" class="dropdown-link" role="menuitem">Logistics & Warehousing</a>
                  <a href="/industries-single.php?slug=hospitality" class="dropdown-link" role="menuitem">Hospitality & Hotels</a>
                  <a href="/industries-single.php?slug=food-retail" class="dropdown-link" role="menuitem">Food Retail & Supermarkets</a>
                </div>
                <div class="dropdown-col">
                  <span class="dropdown-heading">Commercial & Health</span>
                  <a href="/industries-single.php?slug=facilities-management" class="dropdown-link" role="menuitem">Facilities Management</a>
                  <a href="/industries-single.php?slug=pharmaceutical" class="dropdown-link" role="menuitem">Pharmaceutical</a>
                  <a href="/industries-single.php?slug=offices" class="dropdown-link" role="menuitem">Commercial Offices</a>
                  <a href="/industries-single.php?slug=healthcare" class="dropdown-link" role="menuitem">Healthcare Facilities</a>
                </div>
              </div>
              <div class="dropdown-footer">
                <a href="/industries.php">View All Business Sectors &rarr;</a>
              </div>
            </div>
          </li>

          <!-- About Dropdown -->
          <li class="nav-item <?php echo ($currentPage ?? '') === 'about' ? 'current' : ''; ?>" data-menu="about">
            <button class="nav-link" aria-haspopup="true" aria-expanded="false">
              About
              <svg class="chevron" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </button>
            <div class="mega-menu dropdown-panel dropdown-panel-sm" role="menu" aria-label="About UrbanPest">
              <div class="dropdown-col">
                <span class="dropdown-heading">Company Information</span>
                <a href="/about.php" class="dropdown-link" role="menuitem">Our Company & Operations</a>
                <a href="/about-sustainability.php" class="dropdown-link" role="menuitem">Sustainability & Environmental IPM</a>
                <a href="/about-locations.php" class="dropdown-link" role="menuitem">Perth Service Precincts</a>
                <a href="/about-innovation.php" class="dropdown-link" role="menuitem">Connect™ Digital Platform</a>
                <a href="/about-careers.php" class="dropdown-link" role="menuitem">Careers</a>
              </div>
            </div>
          </li>

          <!-- Blog Link -->
          <li class="nav-item <?php echo ($currentPage ?? '') === 'insights' ? 'current' : ''; ?>">
            <a href="/insights.php" class="nav-link">Blog</a>
          </li>
        </ul>
      </nav>

      <!-- Right Header Actions -->
      <div class="header-actions">
        <a href="/contact.php" class="btn btn-primary btn-sm hide-mobile">Book Survey</a>

        <!-- Mobile Hamburger Toggle -->
        <button class="mobile-toggle" aria-label="Open mobile menu" id="mobileToggle">
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>
    </div>
  </header>
</div>

<!-- Mobile Drawer Navigation -->
<div class="mobile-nav-overlay" id="mobileOverlay"></div>
<nav class="mobile-nav-drawer" id="mobileDrawer" role="navigation" aria-label="Mobile navigation">
  <div class="mobile-drawer__header">
    <a href="/index.php" class="logo" aria-label="UrbanX Pest Control">
      <img src="/assets/images/logo-horizontal.png" alt="UrbanX Pest Control" style="height: 38px; width: auto; display: block; object-fit: contain;">
    </a>
    <button class="mobile-drawer__close" id="mobileClose" aria-label="Close menu">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
    </button>
  </div>
  
  <div style="padding: 12px 20px; background: #F8FAFC; border-bottom: 1px solid #E2E8F0; font-size: 0.85rem; font-weight: 600; color: #0B1F3A; display: flex; justify-content: space-between; align-items: center;">
    <span>Perth Technical Line:</span>
    <a href="tel:<?php echo htmlspecialchars($appConfig['phone_raw'] ?? '+61410148126'); ?>" style="color: #0FA968; text-decoration: none;"><?php echo htmlspecialchars($appConfig['phone_display'] ?? '+61 410 148 126'); ?></a>
  </div>

  <ul class="mobile-nav-list">
    <li class="mobile-nav-item" data-mobile-menu="services">
      <button class="mobile-nav-link">
        Services
        <svg class="chevron" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
      </button>
      <div class="mobile-submenu">
        <a href="/services.php">All Services Overview</a>
        <a href="/services-single.php?slug=rodent-control">Rodent Control</a>
        <a href="/services-single.php?slug=cockroach-control">Cockroach Control</a>
        <a href="/services-single.php?slug=termite-control">Termite Management (AS 3660)</a>
        <a href="/services-single.php?slug=bird-control">Bird Proofing & Netting</a>
        <a href="/services-single.php?slug=fly-control">Fly Control & Lumnia LED</a>
        <a href="/services-single.php?slug=bed-bug-control">Bed Bug Management</a>
        <a href="/services-single.php?slug=stored-product-pests">Stored Product Insects</a>
        <a href="/services-single.php?slug=disinfection-services">Disinfection & Hygiene</a>
        <a href="/services-single.php?slug=smart-traps">Smart Traps</a>
        <a href="/services-single.php?slug=connected-rodent-monitoring">Connected Rodent Network</a>
      </div>
    </li>
    <li class="mobile-nav-item" data-mobile-menu="industries">
      <button class="mobile-nav-link">
        Business sectors
        <svg class="chevron" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
      </button>
      <div class="mobile-submenu">
        <a href="/industries.php">All Industries Overview</a>
        <a href="/industries-single.php?slug=food-processing">Food Processing</a>
        <a href="/industries-single.php?slug=logistics-warehousing">Logistics & Warehousing</a>
        <a href="/industries-single.php?slug=hospitality">Hospitality & Hotels</a>
        <a href="/industries-single.php?slug=food-retail">Food Retail</a>
        <a href="/industries-single.php?slug=facilities-management">Facilities Management</a>
        <a href="/industries-single.php?slug=pharmaceutical">Pharmaceutical</a>
        <a href="/industries-single.php?slug=offices">Commercial Offices</a>
        <a href="/industries-single.php?slug=healthcare">Healthcare</a>
      </div>
    </li>
    <li class="mobile-nav-item" data-mobile-menu="about">
      <button class="mobile-nav-link">
        About
        <svg class="chevron" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
      </button>
      <div class="mobile-submenu">
        <a href="/about.php">Company Overview</a>
        <a href="/about-sustainability.php">Sustainability & IPM</a>
        <a href="/about-locations.php">Perth Precincts & Coverage</a>
        <a href="/about-innovation.php">Innovation & Technology</a>
        <a href="/about-careers.php">Careers</a>
      </div>
    </li>
    <li class="mobile-nav-item">
      <a href="/insights.php" class="mobile-nav-link">Blog</a>
    </li>
    <li class="mobile-nav-item">
      <a href="/about-locations.php" class="mobile-nav-link">Locations</a>
    </li>
    <li class="mobile-nav-item">
      <a href="/contact.php" class="mobile-nav-link">Contact</a>
    </li>
    <li class="mobile-nav-item">
      <a href="/admin/index.php" class="mobile-nav-link" style="color: #0FA968;">Staff Portal Login</a>
    </li>
  </ul>
  <div style="padding: 20px;">
    <a href="/contact.php" class="btn btn-primary" style="width:100%; justify-content:center;">
      Book Commercial Survey
    </a>
  </div>
</nav>

<!-- Search Overlay -->
<div class="search-overlay" id="searchOverlay" role="dialog" aria-label="Search">
  <button class="search-overlay__close" id="searchClose" aria-label="Close search">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
  </button>
  <div class="search-overlay__inner">
    <div class="search-overlay__input-wrap">
      <svg class="search-overlay__icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
      <input type="search" class="search-overlay__input" placeholder="Search Perth commercial pest solutions..." aria-label="Search" id="searchInput">
    </div>
  </div>
</div>
