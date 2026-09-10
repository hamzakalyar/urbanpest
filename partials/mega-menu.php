<?php
/**
 * UrbanX Pest Control — Primary Navigation & Header
 * Professional pest management services for residential and commercial properties across Perth & Western Australia.
 * Operating under relevant Western Australian Department of Health pest management licensing.
 */
global $appConfig;
require_once __DIR__ . '/../data/config.php';
?>

<!-- Header Wrapper (sticky) -->
<div class="header-wrapper" id="headerWrapper">

  <!-- Utility Bar (Right-aligned, clean, quiet) -->
  <div class="utility-bar">
    <div class="container utility-container">
      <div class="utility-left hide-mobile">
        <span class="util-tagline">Perth Pest Management • Residential & Commercial Services</span>
      </div>
      <div class="utility-right">
        <a href="mailto:<?php echo htmlspecialchars($appConfig['email_contact'] ?? 'info@urbanxpestcontrol.com'); ?>" class="util-link" title="Email UrbanX">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
          <span><?php echo htmlspecialchars($appConfig['email_contact'] ?? 'info@urbanxpestcontrol.com'); ?></span>
        </a>
        <a href="tel:<?php echo htmlspecialchars($appConfig['phone_raw'] ?? '+61410148126'); ?>" class="util-link" title="Call UrbanX Perth">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
          <span><?php echo htmlspecialchars($appConfig['phone_display'] ?? '+61 410 148 126'); ?></span>
        </a>
        <a href="/about-locations.php" class="util-link hide-mobile" title="Perth Coverage">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
          <span>Perth Service Areas</span>
        </a>
        <button type="button" class="util-link" id="searchToggle" aria-label="Search site">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
          <span>Search</span>
        </button>
        <a href="/contact.php" class="util-link hide-mobile" title="Contact Us">
          <span>Contact</span>
        </a>
      </div>
    </div>
  </div>

  <!-- Main Header -->
  <header class="main-header" role="banner">
    <div class="container header-container">
      <!-- Logo: Official UrbanX Pest Control -->
      <a href="/index.php" class="logo header-logo" aria-label="UrbanX Pest Control" style="display: flex; align-items: center; text-decoration: none;">
        <img src="/assets/images/logo-horizontal.png" alt="UrbanX Pest Control" class="logo-brand-img" height="48" style="height: 48px; width: auto; display: block; object-fit: contain;">
      </a>

      <!-- Primary Navigation (Desktop) -->
      <nav class="primary-nav" id="primaryNav" role="navigation" aria-label="Main navigation">
        <ul class="nav-list">
          <!-- Services Dropdown -->
          <li class="nav-item <?php echo ($currentPage ?? '') === 'services' ? 'current' : ''; ?>" data-menu="services">
            <button class="nav-link" aria-haspopup="true" aria-expanded="false">
              Pest Services
              <svg class="chevron" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </button>
            <div class="mega-menu dropdown-panel" role="menu" aria-label="Pest Management Services">
              <div class="dropdown-grid cols-2">
                <div class="dropdown-col">
                  <span class="dropdown-heading">Residential & Household</span>
                  <a href="/services/household-pest-control" class="dropdown-link" role="menuitem">General Household Pest Control</a>
                  <a href="/services/cockroach-control" class="dropdown-link" role="menuitem">Cockroach Control</a>
                  <a href="/services/ant-control" class="dropdown-link" role="menuitem">Ant Control</a>
                  <a href="/services/spider-control" class="dropdown-link" role="menuitem">Spider Control</a>
                  <a href="/services/wasp-bee-control" class="dropdown-link" role="menuitem">Wasp & Bee Control</a>
                  <a href="/services/silverfish-control" class="dropdown-link" role="menuitem">Silverfish Control</a>
                </div>
                <div class="dropdown-col">
                  <span class="dropdown-heading">Commercial & Specialized</span>
                  <a href="/services/rodent-control" class="dropdown-link" role="menuitem">Rodent Control & Exclusion</a>
                  <a href="/services/termite-control" class="dropdown-link" role="menuitem">Termite Management (AS 3660)</a>
                  <a href="/services/bird-control" class="dropdown-link" role="menuitem">Bird Proofing & Netting</a>
                  <a href="/services/fly-control" class="dropdown-link" role="menuitem">Commercial Fly Control</a>
                  <a href="/services/bed-bug-control" class="dropdown-link" role="menuitem">Bed Bug Management</a>
                  <a href="/services/smart-traps" class="dropdown-link" role="menuitem">Commercial Trap Monitoring</a>
                </div>
              </div>
              <div class="dropdown-footer">
                <a href="/services.php">View All Pest Management Services &rarr;</a>
              </div>
            </div>
          </li>

          <!-- Business Sectors Dropdown -->
          <li class="nav-item <?php echo ($currentPage ?? '') === 'industries' ? 'current' : ''; ?>" data-menu="industries">
            <button class="nav-link" aria-haspopup="true" aria-expanded="false">
              Properties & Sectors
              <svg class="chevron" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </button>
            <div class="mega-menu dropdown-panel" role="menu" aria-label="Properties & Sectors">
              <div class="dropdown-grid cols-2">
                <div class="dropdown-col">
                  <span class="dropdown-heading">Residential & Living</span>
                  <a href="/services/household-pest-control" class="dropdown-link" role="menuitem">Residential Homes & Units</a>
                  <a href="/industries/hospitality" class="dropdown-link" role="menuitem">Hotels & Short-Stay</a>
                  <a href="/industries/food-retail" class="dropdown-link" role="menuitem">Food Retail & Cafes</a>
                  <a href="/industries/food-processing" class="dropdown-link" role="menuitem">Food Manufacturing</a>
                </div>
                <div class="dropdown-col">
                  <span class="dropdown-heading">Commercial & Workplaces</span>
                  <a href="/industries/facilities-management" class="dropdown-link" role="menuitem">Facilities Management</a>
                  <a href="/industries/offices" class="dropdown-link" role="menuitem">Commercial Offices</a>
                  <a href="/industries/logistics-warehousing" class="dropdown-link" role="menuitem">Logistics & Warehousing</a>
                  <a href="/industries/healthcare" class="dropdown-link" role="menuitem">Healthcare Facilities</a>
                </div>
              </div>
              <div class="dropdown-footer">
                <a href="/industries.php">Explore All Business Sectors &rarr;</a>
              </div>
            </div>
          </li>

          <!-- About Dropdown -->
          <li class="nav-item <?php echo ($currentPage ?? '') === 'about' ? 'current' : ''; ?>" data-menu="about">
            <button class="nav-link" aria-haspopup="true" aria-expanded="false">
              About
              <svg class="chevron" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </button>
            <div class="mega-menu dropdown-panel" role="menu" aria-label="About UrbanX Pest Control">
              <div class="dropdown-simple">
                <a href="/about.php" class="dropdown-link" role="menuitem">Our Company & Operations</a>
                <a href="/about-sustainability.php" class="dropdown-link" role="menuitem">Sustainability & Responsible Practices</a>
                <a href="/about-locations.php" class="dropdown-link" role="menuitem">Perth Service Areas</a>
                <a href="/about-innovation.php" class="dropdown-link" role="menuitem">UrbanX Service Platform</a>
                <a href="/about-careers.php" class="dropdown-link" role="menuitem">Careers</a>
              </div>
            </div>
          </li>

          <!-- Blog Link -->
          <li class="nav-item <?php echo ($currentPage ?? '') === 'insights' ? 'current' : ''; ?>">
            <a href="/insights.php" class="nav-link">Pest Insights</a>
          </li>
        </ul>
      </nav>

      <!-- Right Header Actions -->
      <div class="header-actions">
        <a href="/book.php" class="btn btn-primary btn-sm hide-mobile">Request Survey</a>

        <!-- Mobile Hamburger Toggle -->
        <button class="mobile-toggle" aria-label="Open mobile menu" id="mobileToggle" type="button">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" class="hamburger-svg">
            <line x1="3" y1="6" x2="21" y2="6"></line>
            <line x1="3" y1="12" x2="21" y2="12"></line>
            <line x1="3" y1="18" x2="21" y2="18"></line>
          </svg>
        </button>
      </div>
    </div>
  </header>
</div>

<!-- Mobile Drawer Navigation -->
<div class="mobile-nav-overlay" id="mobileOverlay"></div>
<nav class="mobile-nav-drawer" id="mobileDrawer" role="navigation" aria-label="Mobile navigation">
  <div class="mobile-drawer__header">
    <a href="/index.php" class="logo" aria-label="UrbanX Pest Control" style="display: block; margin: 0 auto;">
      <img src="/assets/images/logo-horizontal.png" alt="UrbanX Pest Control" style="height: 38px; width: auto; display: block; object-fit: contain;">
    </a>
    <button class="mobile-drawer__close" id="mobileClose" aria-label="Close menu" type="button">
      <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
    </button>
  </div>
  
  <div style="padding: 14px 20px; background: #F8FAFC; border-bottom: 1px solid #E2E8F0; font-size: 0.84rem; display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center; gap: 6px;">
    <div style="display: flex; align-items: center; justify-content: center; gap: 8px;">
      <span style="color: #64748B; font-weight: 500;">Perth Dispatch:</span>
      <a href="tel:<?php echo htmlspecialchars($appConfig['phone_raw'] ?? '+61410148126'); ?>" style="color: var(--color-accent, #D91C24); font-weight: 700; text-decoration: none;"><?php echo htmlspecialchars($appConfig['phone_display'] ?? '+61 410 148 126'); ?></a>
    </div>
    <div style="display: flex; align-items: center; justify-content: center; gap: 8px;">
      <span style="color: #64748B; font-weight: 500;">Email:</span>
      <a href="mailto:<?php echo htmlspecialchars($appConfig['email_contact'] ?? 'info@urbanxpestcontrol.com'); ?>" style="color: var(--color-navy, #0B1F3A); font-weight: 600; text-decoration: none;"><?php echo htmlspecialchars($appConfig['email_contact'] ?? 'info@urbanxpestcontrol.com'); ?></a>
    </div>
  </div>

  <ul class="mobile-nav-list">
    <li class="mobile-nav-item" data-mobile-menu="services">
      <button class="mobile-nav-link">
        Pest Services
        <svg class="chevron" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
      </button>
      <div class="mobile-submenu">
        <a href="/services.php">All Services Overview</a>
        <a href="/services/rodent-control">Rodent Control & Exclusion</a>
        <a href="/services/cockroach-control">Cockroach Control</a>
        <a href="/services/termite-control">Termite Management (AS 3660)</a>
        <a href="/services/bird-control">Bird Proofing & Netting</a>
        <a href="/services/household-pest-control">General Household Pest Control</a>
        <a href="/services/ant-control">Ant Control</a>
        <a href="/services/spider-control">Spider Control</a>
        <a href="/services/wasp-bee-control">Wasp & Bee Control</a>
        <a href="/services/fly-control">Fly Control</a>
        <a href="/services/smart-traps">Commercial Trap Monitoring</a>
      </div>
    </li>
    <li class="mobile-nav-item" data-mobile-menu="about">
      <button class="mobile-nav-link">
        About UrbanX
        <svg class="chevron" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
      </button>
      <div class="mobile-submenu">
        <a href="/about.php">Why Choose UrbanX</a>
        <a href="/about-locations.php">Perth Service Areas</a>
        <a href="/about-sustainability.php">Safe Practices & Environment</a>
        <a href="/about-careers.php">Careers</a>
      </div>
    </li>
    <li class="mobile-nav-item">
      <a href="/insights.php" class="mobile-nav-link">Pest Insights</a>
    </li>
    <li class="mobile-nav-item">
      <a href="/contact.php" class="mobile-nav-link">Contact & Quotes</a>
    </li>
  </ul>
  <div style="padding: 16px; display: flex; flex-direction: column; gap: 8px;">
    <a href="/book.php?type=residential" class="btn btn-primary open-booking-modal" data-property-type="residential" style="width:100%; justify-content:center;">
      Request Residential Survey
    </a>
    <a href="/book.php?type=commercial" class="btn btn-outline open-booking-modal" data-property-type="commercial" style="width:100%; justify-content:center; border-color: #CBD5E1; color: #0B1F3A; font-weight:600;">
      Request Commercial Survey
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
      <input type="search" class="search-overlay__input" placeholder="Search Perth pest treatments..." aria-label="Search" id="searchInput">
    </div>
  </div>
</div>
