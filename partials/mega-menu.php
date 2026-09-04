<?php
/**
 * UrbanPest Melbourne — Mega Menu & Primary Navigation
 * Operating strictly across Greater Melbourne & Regional Victoria Commercial Hubs.
 * Direct Line & WhatsApp: +61 410 148 126
 */
global $appConfig;
require_once __DIR__ . '/../data/config.php';
?>

<!-- Header Wrapper (sticky) -->
<div class="header-wrapper" id="headerWrapper">

  <!-- Utility Bar -->
  <div class="utility-bar">
    <div class="container">
      <div class="utility-left">
        <a href="tel:<?php echo htmlspecialchars($appConfig['phone_raw'] ?? '+61410148126'); ?>" aria-label="Call UrbanPest Melbourne">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
          <span><?php echo htmlspecialchars($appConfig['phone_display'] ?? '+61 410 148 126'); ?></span>
        </a>
        <a href="<?php echo htmlspecialchars(getWhatsAppLink()); ?>" target="_blank" rel="noopener noreferrer" style="color:#25D366; font-weight:600;">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.664-.698c.969.586 1.761.887 2.796.887 3.182 0 5.768-2.587 5.768-5.768.001-3.18-2.584-5.772-5.768-5.772zm3.393 8.163c-.144.405-.837.774-1.17.824-.312.045-.694.062-2.18-.553-1.898-.785-3.125-2.73-3.22-2.856-.095-.127-.768-1.021-.768-1.948 0-.927.489-1.383.663-1.572.174-.189.381-.237.508-.237.126 0 .253.002.364.007.117.006.275-.044.43.329.16.386.545 1.33.593 1.428.048.098.08.213.016.34-.064.127-.096.206-.19.317-.095.11-.2.246-.285.331-.095.095-.195.198-.084.388.111.19.493.813 1.057 1.317.727.649 1.339.851 1.53.946.19.095.302.079.414-.047.111-.127.476-.554.603-.744.127-.19.254-.159.428-.095.174.063 1.109.523 1.3.618.19.095.317.143.365.222.048.079.048.46-.096.865z"/></svg>
          <span class="hide-mobile">WhatsApp Support</span>
        </a>
        <a href="/contact.php">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
          <span class="hide-mobile">Book Melbourne Survey</span>
        </a>
      </div>
      <div class="utility-right">
        <!-- Melbourne Operational Jurisdiction Indicator -->
        <div class="region-selector">
          <span class="region-selector__btn" style="cursor: default; pointer-events: none; opacity: 0.95;">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
            Melbourne, VIC (Australia Only)
          </span>
        </div>

        <!-- Login Link -->
        <a href="/admin/index.php" class="login-link" title="Open UrbanPest Admin Portal">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
          <span>Staff Portal</span>
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
          <path d="M20 3L5 10v10c0 9.55 6.4 18.48 15 20.5 8.6-2.02 15-10.95 15-20.5V10L20 3z" fill="#0B1F3A"/>
          <circle cx="20" cy="18" r="4" fill="#0FA968"/>
          <circle cx="20" cy="18" r="8" fill="none" stroke="#0FA968" stroke-width="1.5" opacity="0.5"/>
          <circle cx="20" cy="18" r="12" fill="none" stroke="#0FA968" stroke-width="1" opacity="0.3"/>
          <line x1="20" y1="18" x2="28" y2="10" stroke="#0FA968" stroke-width="2" stroke-linecap="round" opacity="0.7"/>
        </svg>
        <span class="logo-text">Urban<span>Pest</span> <small style="font-size: 0.65rem; text-transform: uppercase; letter-spacing: 0.05em; color: #64748B; display: block; line-height: 1; font-weight: 600;">Melbourne</small></span>
      </a>

      <!-- Primary Navigation (Desktop) -->
      <nav class="primary-nav" id="primaryNav" role="navigation" aria-label="Main navigation">
        <ul class="nav-list">
          <!-- Services Mega Menu -->
          <li class="nav-item <?php echo ($currentPage ?? '') === 'services' ? 'current' : ''; ?>" data-menu="services">
            <button class="nav-link" aria-haspopup="true" aria-expanded="false">
              Commercial Services
              <svg class="chevron" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </button>
            <div class="mega-menu" role="menu" aria-label="Commercial Services menu">
              <div class="mega-menu-heading">Melbourne Commercial Pest Solutions (AEPMA & HACCP Certified)</div>
              <div class="mega-menu-grid cols-3">
                <a href="/services-single.php?slug=rodent-control" class="mega-menu-link" role="menuitem">
                  <div class="mega-menu-icon" style="color: #EF4444;"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2C8 2 5 5 5 9c0 3 1.5 5.5 3 7.5L7 21h10l-1-4.5c1.5-2 3-4.5 3-7.5 0-4-3-7-7-7z"/><circle cx="10" cy="9" r="1"/><circle cx="14" cy="9" r="1"/></svg></div>
                  <div class="mega-menu-content">
                    <h4>Rodent Control</h4>
                    <p>Mice, rats, tamper-resistant perimeter baiting</p>
                  </div>
                </a>
                <a href="/services-single.php?slug=cockroach-control" class="mega-menu-link" role="menuitem">
                  <div class="mega-menu-icon" style="color: #B45309;"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><ellipse cx="12" cy="13" rx="4" ry="7"/><path d="M12 6V3M8 4l2 2M16 4l-2 2"/><path d="M8 10l-5-2M8 13H2M8 16l-5 2"/><path d="M16 10l5-2M16 13h6M16 16l5 2"/></svg></div>
                  <div class="mega-menu-content">
                    <h4>Cockroach Control</h4>
                    <p>German & American roaches, kitchen gel baiting</p>
                  </div>
                </a>
                <a href="/services-single.php?slug=termite-control" class="mega-menu-link" role="menuitem">
                  <div class="mega-menu-icon" style="color: #C2410C;"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M7 7l5 5 5-5M7 17l5-5 5 5"/><rect x="4" y="3" width="16" height="18" rx="2" stroke-dasharray="2 2"/></svg></div>
                  <div class="mega-menu-content">
                    <h4>Termite Management</h4>
                    <p>AS 3660 inspections, Termatrac radar, barriers</p>
                  </div>
                </a>
                <a href="/services-single.php?slug=bird-control" class="mega-menu-link" role="menuitem">
                  <div class="mega-menu-icon" style="color: #6366F1;"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 7h.01"/><path d="M3.4 18c3-4 6-5 9-3 3-4 7-6 10-6-1.5 3-2 5-2 7 0 2 1 3 1.6 4-2 0-4-.5-5.6-1.5-2.4 1-5 1.5-8 1.5-2 0-4-.7-6-2z"/></svg></div>
                  <div class="mega-menu-content">
                    <h4>Bird Proofing & Netting</h4>
                    <p>Humane netting, spikes, solar array protection</p>
                  </div>
                </a>
                <a href="/services-single.php?slug=fly-control" class="mega-menu-link" role="menuitem">
                  <div class="mega-menu-icon" style="color: #0284C7;"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"/><path d="M12 9V5M12 19v-4M9 12H3c0-3 3-6 6-6M15 12h6c0-3-3-6-6-6"/></svg></div>
                  <div class="mega-menu-content">
                    <h4>Fly Control & Lumnia LED</h4>
                    <p>Low-energy LED ILTs & HACCP encapsulation</p>
                  </div>
                </a>
                <a href="/services-single.php?slug=bed-bug-control" class="mega-menu-link" role="menuitem">
                  <div class="mega-menu-icon" style="color: #DB2777;"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="7" r="3"/><path d="M6 14a6 6 0 0 0 12 0c0-3-2-5-6-5s-6 2-6 5z"/><path d="M9 14h6M9 17h6M12 9v11"/></svg></div>
                  <div class="mega-menu-content">
                    <h4>Bed Bug Management</h4>
                    <p>100% lethal thermal heat remediation</p>
                  </div>
                </a>
                <a href="/services-single.php?slug=stored-product-pests" class="mega-menu-link" role="menuitem">
                  <div class="mega-menu-icon" style="color: #D97706;"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v4M12 18v4M4 12h4M16 12h4"/><path d="M12 6a6 6 0 0 0-6 6v2a6 6 0 0 0 12 0v-2a6 6 0 0 0-6-6z"/></svg></div>
                  <div class="mega-menu-content">
                    <h4>Stored Product Pests</h4>
                    <p>Beetles, weevils, moths, pheromone tracking</p>
                  </div>
                </a>
                <a href="/services-single.php?slug=smart-traps" class="mega-menu-link" role="menuitem">
                  <div class="mega-menu-icon" style="color: #059669;"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2" fill="currentColor"/></svg></div>
                  <div class="mega-menu-content">
                    <h4>Digital Connected Traps</h4>
                    <p>UrbanPest Connect 24/7 cloud telemetry</p>
                  </div>
                </a>
                <a href="/services.php" class="mega-menu-link" role="menuitem">
                  <div class="mega-menu-icon" style="color: #0FA968;"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                  <div class="mega-menu-content">
                    <h4>All Melbourne Services</h4>
                    <p>View our complete commercial IPM directory</p>
                  </div>
                </a>
              </div>
            </div>
          </li>

          <!-- Industries -->
          <li class="nav-item <?php echo ($currentPage ?? '') === 'industries' ? 'current' : ''; ?>" data-menu="industries">
            <button class="nav-link" aria-haspopup="true" aria-expanded="false">
              Sectors & Industries
              <svg class="chevron" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </button>
            <div class="mega-menu" role="menu" aria-label="Industries menu">
              <div class="mega-menu-heading">Melbourne Commercial Sectors</div>
              <div class="mega-menu-grid cols-3">
                <a href="/industries-single.php?slug=food-processing" class="mega-menu-link" role="menuitem">
                  <div class="mega-menu-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 20h20"></path><path d="M5 20V4h14v16"></path><path d="M9 4V2"></path><path d="M15 4V2"></path></svg></div>
                  <div class="mega-menu-content"><h4>Food Processing</h4><p>HACCP, SQF & BRCGS compliance</p></div>
                </a>
                <a href="/industries-single.php?slug=logistics-warehousing" class="mega-menu-link" role="menuitem">
                  <div class="mega-menu-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="1" y="3" width="15" height="13"></rect><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon><circle cx="5.5" cy="18.5" r="2.5"></circle><circle cx="18.5" cy="18.5" r="2.5"></circle></svg></div>
                  <div class="mega-menu-content"><h4>Logistics & Warehousing</h4><p>Tullamarine & Dandenong hubs</p></div>
                </a>
                <a href="/industries-single.php?slug=hospitality" class="mega-menu-link" role="menuitem">
                  <div class="mega-menu-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18"></path><path d="M5 21V7l8-4v18"></path><path d="M19 21V11l-6-4"></path></svg></div>
                  <div class="mega-menu-content"><h4>Hospitality & Hotels</h4><p>CBD hotels, dining & bars</p></div>
                </a>
                <a href="/industries-single.php?slug=food-retail" class="mega-menu-link" role="menuitem">
                  <div class="mega-menu-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg></div>
                  <div class="mega-menu-content"><h4>Food Retail & Supermarkets</h4><p>Zero-tolerance display zones</p></div>
                </a>
                <a href="/industries-single.php?slug=pharmaceutical" class="mega-menu-link" role="menuitem">
                  <div class="mega-menu-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path></svg></div>
                  <div class="mega-menu-content"><h4>Pharmaceutical & Medical</h4><p>TGA cleanroom standards</p></div>
                </a>
                <a href="/industries.php" class="mega-menu-link" role="menuitem">
                  <div class="mega-menu-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 8 12 12 16 14"></polyline></svg></div>
                  <div class="mega-menu-content"><h4>All Melbourne Sectors</h4><p>Browse all industry solutions</p></div>
                </a>
              </div>
            </div>
          </li>

          <!-- Innovation -->
          <li class="nav-item <?php echo ($currentPage ?? '') === 'innovation' ? 'current' : ''; ?>">
            <a href="/about-innovation.php" class="nav-link">Digital Innovation</a>
          </li>

          <!-- About -->
          <li class="nav-item <?php echo ($currentPage ?? '') === 'about' ? 'current' : ''; ?>" data-menu="about">
            <button class="nav-link" aria-haspopup="true" aria-expanded="false">
              About
              <svg class="chevron" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </button>
            <div class="mega-menu" role="menu" aria-label="About menu">
              <div class="mega-menu-heading">UrbanPest Melbourne Commercial</div>
              <div class="mega-menu-grid">
                <a href="/about.php" class="mega-menu-link" role="menuitem">
                  <div class="mega-menu-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg></div>
                  <div class="mega-menu-content"><h4>Our Melbourne Operation</h4><p>Commercial pest control leadership</p></div>
                </a>
                <a href="/about-sustainability.php" class="mega-menu-link" role="menuitem">
                  <div class="mega-menu-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"></path><path d="M7 12l3-7 4 14 3-7"></path></svg></div>
                  <div class="mega-menu-content"><h4>Environmental IPM</h4><p>Low-chemical & non-toxic solutions</p></div>
                </a>
                <a href="/about-locations.php" class="mega-menu-link" role="menuitem">
                  <div class="mega-menu-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg></div>
                  <div class="mega-menu-content"><h4>Melbourne Coverage</h4><p>CBD, Docklands & Regional Victoria</p></div>
                </a>
                <a href="/insights.php" class="mega-menu-link" role="menuitem">
                  <div class="mega-menu-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg></div>
                  <div class="mega-menu-content"><h4>Audit & Regulatory Insights</h4><p>Victorian pest compliance guidelines</p></div>
                </a>
              </div>
            </div>
          </li>

          <!-- Contact / Audits -->
          <li class="nav-item <?php echo ($currentPage ?? '') === 'contact' ? 'current' : ''; ?>">
            <a href="/contact.php" class="nav-link">Facility Audits</a>
          </li>
        </ul>
      </nav>

      <!-- Right Header Actions -->
      <div class="header-actions">
        <!-- Search Button -->
        <button class="search-toggle" aria-label="Search" id="searchToggle">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
        </button>

        <!-- Direct WhatsApp Header Button -->
        <a href="<?php echo htmlspecialchars(getWhatsAppLink()); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp hide-mobile" style="padding: 9px 15px; font-size: 0.85rem; font-weight: 600; display: inline-flex; align-items: center; gap: 6px;">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.664-.698c.969.586 1.761.887 2.796.887 3.182 0 5.768-2.587 5.768-5.768.001-3.18-2.584-5.772-5.768-5.772zm3.393 8.163c-.144.405-.837.774-1.17.824-.312.045-.694.062-2.18-.553-1.898-.785-3.125-2.73-3.22-2.856-.095-.127-.768-1.021-.768-1.948 0-.927.489-1.383.663-1.572.174-.189.381-.237.508-.237.126 0 .253.002.364.007.117.006.275-.044.43.329.16.386.545 1.33.593 1.428.048.098.08.213.016.34-.064.127-.096.206-.19.317-.095.11-.2.246-.285.331-.095.095-.195.198-.084.388.111.19.493.813 1.057 1.317.727.649 1.339.851 1.53.946.19.095.302.079.414-.047.111-.127.476-.554.603-.744.127-.19.254-.159.428-.095.174.063 1.109.523 1.3.618.19.095.317.143.365.222.048.079.048.46-.096.865z"/></svg>
          <span>WhatsApp</span>
        </a>

        <!-- Emergency / Quote CTA -->
        <a href="/contact.php" class="btn btn-primary btn-sm hide-mobile">Request Survey</a>

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
    <a href="/index.php" class="logo">
      <span class="logo-text">Urban<span>Pest</span> <small style="font-size: 0.65rem; color: #64748B;">Melbourne</small></span>
    </a>
    <button class="mobile-drawer__close" id="mobileClose" aria-label="Close menu">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
    </button>
  </div>
  
  <div style="padding: 12px 16px; background: #F8FAFC; border-bottom: 1px solid #E2E8F0; font-size: 0.825rem; font-weight: 600; color: #0B1F3A; display: flex; justify-content: space-between; align-items: center;">
    <span>Melbourne Dispatch:</span>
    <a href="tel:<?php echo htmlspecialchars($appConfig['phone_raw'] ?? '+61410148126'); ?>" style="color: #0FA968; text-decoration: none;"><?php echo htmlspecialchars($appConfig['phone_display'] ?? '+61 410 148 126'); ?></a>
  </div>

  <ul class="mobile-nav-list">
    <li class="mobile-nav-item" data-mobile-menu="services">
      <button class="mobile-nav-link">
        Commercial Services
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
        Sectors & Industries
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
    <li class="mobile-nav-item">
      <a href="/about-innovation.php" class="mobile-nav-link">Digital Innovation</a>
    </li>
    <li class="mobile-nav-item" data-mobile-menu="about">
      <button class="mobile-nav-link">
        About
        <svg class="chevron" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
      </button>
      <div class="mobile-submenu">
        <a href="/about.php">Our Melbourne Operation</a>
        <a href="/about-sustainability.php">Sustainability & IPM</a>
        <a href="/about-locations.php">Melbourne Precincts & Coverage</a>
        <a href="/about-careers.php">Careers</a>
      </div>
    </li>
    <li class="mobile-nav-item">
      <a href="/insights.php" class="mobile-nav-link">Audit & Knowledge Hub</a>
    </li>
    <li class="mobile-nav-item">
      <a href="/contact.php" class="mobile-nav-link">Book Facility Audit</a>
    </li>
    <li class="mobile-nav-item">
      <a href="/admin/index.php" class="mobile-nav-link" style="color: #0FA968;">Staff Portal Login</a>
    </li>
  </ul>
  <div style="padding: var(--space-md) 16px;">
    <a href="<?php echo htmlspecialchars(getWhatsAppLink()); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp" style="width:100%; justify-content:center; margin-bottom: 8px;">
      Chat on WhatsApp (+61 410 148 126)
    </a>
    <a href="/contact.php" class="btn btn-primary" style="width:100%; justify-content:center;">
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
      <input type="search" class="search-overlay__input" placeholder="Search Melbourne commercial pest solutions..." aria-label="Search" id="searchInput">
    </div>
  </div>
</div>
