<?php
/**
 * UrbanPest — Mega Menu / Navigation Partial
 * Includes utility bar, main header with logo, primary nav (mega-menu), and mobile drawer.
 */
?>

<!-- Header Wrapper (sticky) -->
<div class="header-wrapper" id="headerWrapper">

  <!-- Utility Bar -->
  <div class="utility-bar">
    <div class="container">
      <div class="utility-left">
        <a href="tel:+18005551234" aria-label="Call UrbanPest">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
          <span class="hide-mobile">+1 800 555 1234</span>
        </a>
        <a href="/contact.php">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
          <span class="hide-mobile">Contact Us</span>
        </a>
      </div>
      <div class="utility-right">
        <!-- Region Selector -->
        <div class="region-selector" id="regionSelector">
          <button class="region-selector__btn" aria-haspopup="true" aria-expanded="false" id="regionToggle">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
            Global (EN)
            <svg class="chevron" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
          </button>
          <div class="region-selector__dropdown" role="menu">
            <a href="#" role="menuitem">🇬🇧 United Kingdom</a>
            <a href="#" role="menuitem">🇺🇸 United States</a>
            <a href="#" role="menuitem">🇩🇪 Deutschland</a>
            <a href="#" role="menuitem">🇫🇷 France</a>
            <a href="#" role="menuitem">🇦🇺 Australia</a>
          </div>
        </div>

        <!-- Login Link -->
        <a href="#" class="login-link">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
          <span>myUrbanPest</span>
        </a>
      </div>
    </div>
  </div>

  <!-- Main Header -->
  <header class="main-header" role="banner">
    <div class="container">
      <!-- Logo -->
      <a href="/index.php" class="logo" aria-label="UrbanPest Home">
        <svg class="logo-icon" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
          <!-- Shield shape -->
          <path d="M20 3L5 10v10c0 9.55 6.4 18.48 15 20.5 8.6-2.02 15-10.95 15-20.5V10L20 3z" fill="#0B1F3A" opacity="0.9"/>
          <!-- Radar rings -->
          <circle cx="20" cy="18" r="4" fill="#0FA968"/>
          <circle cx="20" cy="18" r="8" fill="none" stroke="#0FA968" stroke-width="1.5" opacity="0.5"/>
          <circle cx="20" cy="18" r="12" fill="none" stroke="#0FA968" stroke-width="1" opacity="0.3"/>
          <!-- Radar sweep line -->
          <line x1="20" y1="18" x2="28" y2="10" stroke="#0FA968" stroke-width="2" stroke-linecap="round" opacity="0.7"/>
        </svg>
        <span class="logo-text">Urban<span>Pest</span></span>
      </a>

      <!-- Primary Navigation (Desktop) -->
      <nav class="primary-nav" id="primaryNav" role="navigation" aria-label="Main navigation">
        <ul class="nav-list">
          <!-- Services -->
          <li class="nav-item <?php echo $currentPage === 'services' ? 'current' : ''; ?>" data-menu="services">
            <button class="nav-link" aria-haspopup="true" aria-expanded="false">
              Services
              <svg class="chevron" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </button>
            <div class="mega-menu" role="menu" aria-label="Services menu">
              <div class="mega-menu-heading">Our Solutions</div>
              <div class="mega-menu-grid">
                <a href="/services.php" class="mega-menu-link" role="menuitem">
                  <div class="mega-menu-icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                  </div>
                  <div class="mega-menu-content">
                    <h4>All Services</h4>
                    <p>Explore our complete range of pest management solutions</p>
                  </div>
                </a>
                <a href="/services-single.php?slug=rodent-control" class="mega-menu-link" role="menuitem">
                  <div class="mega-menu-icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><path d="M8 12h8"></path><path d="M12 8v8"></path></svg>
                  </div>
                  <div class="mega-menu-content">
                    <h4>Pest Control</h4>
                    <p>Rodents, insects, birds, flies, and disinfection</p>
                  </div>
                </a>
                <a href="/services-single.php?slug=smart-traps" class="mega-menu-link" role="menuitem">
                  <div class="mega-menu-icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 16.1A5 5 0 0 1 5.9 20M2 12.05A9 9 0 0 1 9.95 20M2 8V6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2h-6"></path><line x1="2" y1="20" x2="2.01" y2="20"></line></svg>
                  </div>
                  <div class="mega-menu-content">
                    <h4>Digital Pest Monitoring</h4>
                    <p>IoT-connected devices and real-time analytics</p>
                  </div>
                </a>
              </div>
            </div>
          </li>

          <!-- Global Accounts -->
          <li class="nav-item <?php echo $currentPage === 'global-accounts' ? 'current' : ''; ?>">
            <a href="/contact.php" class="nav-link">Global Accounts</a>
          </li>

          <!-- Industries -->
          <li class="nav-item <?php echo $currentPage === 'industries' ? 'current' : ''; ?>" data-menu="industries">
            <button class="nav-link" aria-haspopup="true" aria-expanded="false">
              Industries We Serve
              <svg class="chevron" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </button>
            <div class="mega-menu" role="menu" aria-label="Industries menu">
              <div class="mega-menu-heading">Sectors</div>
              <div class="mega-menu-grid cols-3">
                <a href="/industries-single.php?slug=food-processing" class="mega-menu-link" role="menuitem">
                  <div class="mega-menu-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 20h20"></path><path d="M5 20V4h14v16"></path><path d="M9 4V2"></path><path d="M15 4V2"></path></svg></div>
                  <div class="mega-menu-content"><h4>Food Processing</h4></div>
                </a>
                <a href="/industries-single.php?slug=logistics-warehousing" class="mega-menu-link" role="menuitem">
                  <div class="mega-menu-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="1" y="3" width="15" height="13"></rect><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon><circle cx="5.5" cy="18.5" r="2.5"></circle><circle cx="18.5" cy="18.5" r="2.5"></circle></svg></div>
                  <div class="mega-menu-content"><h4>Logistics & Warehousing</h4></div>
                </a>
                <a href="/industries-single.php?slug=hospitality" class="mega-menu-link" role="menuitem">
                  <div class="mega-menu-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18"></path><path d="M5 21V7l8-4v18"></path><path d="M19 21V11l-6-4"></path></svg></div>
                  <div class="mega-menu-content"><h4>Hospitality</h4></div>
                </a>
                <a href="/industries-single.php?slug=food-retail" class="mega-menu-link" role="menuitem">
                  <div class="mega-menu-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg></div>
                  <div class="mega-menu-content"><h4>Food Retail</h4></div>
                </a>
                <a href="/industries-single.php?slug=facilities-management" class="mega-menu-link" role="menuitem">
                  <div class="mega-menu-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2" ry="2"></rect><line x1="12" y1="18" x2="12.01" y2="18"></line></svg></div>
                  <div class="mega-menu-content"><h4>Facilities Management</h4></div>
                </a>
                <a href="/industries-single.php?slug=pharmaceutical" class="mega-menu-link" role="menuitem">
                  <div class="mega-menu-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path></svg></div>
                  <div class="mega-menu-content"><h4>Pharmaceutical</h4></div>
                </a>
                <a href="/industries-single.php?slug=offices" class="mega-menu-link" role="menuitem">
                  <div class="mega-menu-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg></div>
                  <div class="mega-menu-content"><h4>Offices</h4></div>
                </a>
                <a href="/industries-single.php?slug=healthcare" class="mega-menu-link" role="menuitem">
                  <div class="mega-menu-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"></path></svg></div>
                  <div class="mega-menu-content"><h4>Healthcare</h4></div>
                </a>
                <a href="/industries.php" class="mega-menu-link" role="menuitem">
                  <div class="mega-menu-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 8 12 12 16 14"></polyline></svg></div>
                  <div class="mega-menu-content"><h4>View All Industries</h4></div>
                </a>
              </div>
            </div>
          </li>

          <!-- About -->
          <li class="nav-item <?php echo $currentPage === 'about' ? 'current' : ''; ?>" data-menu="about">
            <button class="nav-link" aria-haspopup="true" aria-expanded="false">
              About
              <svg class="chevron" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </button>
            <div class="mega-menu" role="menu" aria-label="About menu">
              <div class="mega-menu-heading">Our Company</div>
              <div class="mega-menu-grid">
                <a href="/about.php" class="mega-menu-link" role="menuitem">
                  <div class="mega-menu-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg></div>
                  <div class="mega-menu-content"><h4>Our Story</h4><p>Who we are and what drives us</p></div>
                </a>
                <a href="/about-sustainability.php" class="mega-menu-link" role="menuitem">
                  <div class="mega-menu-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"></path><path d="M7 12l3-7 4 14 3-7"></path></svg></div>
                  <div class="mega-menu-content"><h4>Sustainability</h4><p>Our environmental commitments</p></div>
                </a>
                <a href="/about-innovation.php" class="mega-menu-link" role="menuitem">
                  <div class="mega-menu-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></div>
                  <div class="mega-menu-content"><h4>Innovation & Technology</h4><p>Pioneering digital pest management</p></div>
                </a>
                <a href="/about-locations.php" class="mega-menu-link" role="menuitem">
                  <div class="mega-menu-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg></div>
                  <div class="mega-menu-content"><h4>Locations</h4><p>Find us in 90+ countries</p></div>
                </a>
                <a href="/about-careers.php" class="mega-menu-link" role="menuitem">
                  <div class="mega-menu-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg></div>
                  <div class="mega-menu-content"><h4>Careers</h4><p>Join our global team</p></div>
                </a>
              </div>
            </div>
          </li>

          <!-- Insights -->
          <li class="nav-item <?php echo $currentPage === 'insights' ? 'current' : ''; ?>" data-menu="insights">
            <button class="nav-link" aria-haspopup="true" aria-expanded="false">
              Insights
              <svg class="chevron" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </button>
            <div class="mega-menu" role="menu" aria-label="Insights menu">
              <div class="mega-menu-heading">Knowledge Hub</div>
              <div class="mega-menu-grid">
                <a href="/insights.php" class="mega-menu-link" role="menuitem">
                  <div class="mega-menu-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg></div>
                  <div class="mega-menu-content"><h4>All Insights</h4><p>Articles, news, and expert analysis</p></div>
                </a>
                <a href="/insights.php?cat=Company+News" class="mega-menu-link" role="menuitem">
                  <div class="mega-menu-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 4H5a2 2 0 0 0-2 2v14l4-4h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2z"></path></svg></div>
                  <div class="mega-menu-content"><h4>Company News</h4></div>
                </a>
                <a href="/insights.php?cat=Food+Safety" class="mega-menu-link" role="menuitem">
                  <div class="mega-menu-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg></div>
                  <div class="mega-menu-content"><h4>Food Safety</h4></div>
                </a>
                <a href="/insights.php?cat=Innovation" class="mega-menu-link" role="menuitem">
                  <div class="mega-menu-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18V5l12-2v13"></path><circle cx="6" cy="18" r="3"></circle><circle cx="18" cy="16" r="3"></circle></svg></div>
                  <div class="mega-menu-content"><h4>Innovation</h4></div>
                </a>
              </div>
            </div>
          </li>
        </ul>
      </nav>

      <!-- Header Actions -->
      <div class="header-actions">
        <button class="search-toggle" id="searchToggle" aria-label="Open search">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
        </button>
        <a href="/contact.php" class="btn-quote">Get a Quote</a>
        <!-- Mobile Toggle -->
        <button class="mobile-toggle" id="mobileToggle" aria-label="Open menu" aria-expanded="false">
          <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </button>
      </div>
    </div>
  </header>
</div>
<!-- /Header Wrapper -->

<!-- Mobile Nav Overlay -->
<div class="mobile-nav-overlay" id="mobileOverlay"></div>

<!-- Mobile Nav Drawer -->
<nav class="mobile-nav-drawer" id="mobileDrawer" role="navigation" aria-label="Mobile navigation">
  <ul class="mobile-nav-list">
    <li class="mobile-nav-item" data-mobile-menu="services">
      <button class="mobile-nav-link">
        Services
        <svg class="chevron" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
      </button>
      <div class="mobile-submenu">
        <a href="/services.php">All Services</a>
        <a href="/services-single.php?slug=rodent-control">Pest Control</a>
        <a href="/services-single.php?slug=smart-traps">Digital Pest Monitoring</a>
      </div>
    </li>
    <li class="mobile-nav-item">
      <a href="/contact.php" class="mobile-nav-link">Global Accounts</a>
    </li>
    <li class="mobile-nav-item" data-mobile-menu="industries">
      <button class="mobile-nav-link">
        Industries We Serve
        <svg class="chevron" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
      </button>
      <div class="mobile-submenu">
        <a href="/industries.php">All Industries</a>
        <a href="/industries-single.php?slug=food-processing">Food Processing</a>
        <a href="/industries-single.php?slug=logistics-warehousing">Logistics & Warehousing</a>
        <a href="/industries-single.php?slug=hospitality">Hospitality</a>
        <a href="/industries-single.php?slug=food-retail">Food Retail</a>
        <a href="/industries-single.php?slug=facilities-management">Facilities Management</a>
        <a href="/industries-single.php?slug=pharmaceutical">Pharmaceutical</a>
        <a href="/industries-single.php?slug=offices">Offices</a>
        <a href="/industries-single.php?slug=healthcare">Healthcare</a>
      </div>
    </li>
    <li class="mobile-nav-item" data-mobile-menu="about">
      <button class="mobile-nav-link">
        About
        <svg class="chevron" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
      </button>
      <div class="mobile-submenu">
        <a href="/about.php">Our Story</a>
        <a href="/about-sustainability.php">Sustainability</a>
        <a href="/about-innovation.php">Innovation & Technology</a>
        <a href="/about-locations.php">Locations</a>
        <a href="/about-careers.php">Careers</a>
      </div>
    </li>
    <li class="mobile-nav-item" data-mobile-menu="insights">
      <button class="mobile-nav-link">
        Insights
        <svg class="chevron" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
      </button>
      <div class="mobile-submenu">
        <a href="/insights.php">All Insights</a>
        <a href="/insights.php?cat=Company+News">Company News</a>
        <a href="/insights.php?cat=Food+Safety">Food Safety</a>
        <a href="/insights.php?cat=Industry+Insights">Industry Insights</a>
        <a href="/insights.php?cat=Innovation">Innovation</a>
      </div>
    </li>
  </ul>
  <div style="padding: var(--space-lg) 0;">
    <a href="/contact.php" class="btn btn-primary btn-lg" style="width:100%; justify-content:center;">Get a Quote</a>
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
      <input type="search" class="search-overlay__input" placeholder="Search UrbanPest..." aria-label="Search" id="searchInput">
    </div>
  </div>
</div>
