/**
 * UrbanPest — Navigation JS
 * Mega-menu, mobile drawer, sticky header, search overlay, keyboard navigation.
 */

document.addEventListener('DOMContentLoaded', () => {
  // --- Elements ---
  const headerWrapper   = document.getElementById('headerWrapper');
  const mobileToggle    = document.getElementById('mobileToggle');
  const mobileDrawer    = document.getElementById('mobileDrawer');
  const mobileOverlay   = document.getElementById('mobileOverlay');
  const searchToggle    = document.getElementById('searchToggle');
  const searchOverlay   = document.getElementById('searchOverlay');
  const searchClose     = document.getElementById('searchClose');
  const searchInput     = document.getElementById('searchInput');
  const regionSelector  = document.getElementById('regionSelector');
  const regionToggle    = document.getElementById('regionToggle');

  // --- Mega Menu (Desktop) ---
  const navItems = document.querySelectorAll('.nav-item[data-menu]');
  let activeMenu = null;
  let hoverTimeout = null;

  navItems.forEach(item => {
    const button = item.querySelector('.nav-link');
    const megaMenu = item.querySelector('.mega-menu');

    if (!megaMenu) return;

    // Mouse enter
    item.addEventListener('mouseenter', () => {
      clearTimeout(hoverTimeout);
      closeAllMenus();
      item.classList.add('active');
      button.setAttribute('aria-expanded', 'true');
      activeMenu = item;
    });

    // Mouse leave with delay
    item.addEventListener('mouseleave', () => {
      hoverTimeout = setTimeout(() => {
        item.classList.remove('active');
        button.setAttribute('aria-expanded', 'false');
        if (activeMenu === item) activeMenu = null;
      }, 200);
    });

    // Click toggle (for touch devices)
    button.addEventListener('click', (e) => {
      e.preventDefault();
      const isActive = item.classList.contains('active');
      closeAllMenus();
      if (!isActive) {
        item.classList.add('active');
        button.setAttribute('aria-expanded', 'true');
        activeMenu = item;
      }
    });

    // Keyboard navigation
    button.addEventListener('keydown', (e) => {
      if (e.key === 'Enter' || e.key === ' ') {
        e.preventDefault();
        button.click();
      }
      if (e.key === 'Escape') {
        item.classList.remove('active');
        button.setAttribute('aria-expanded', 'false');
        button.focus();
      }
    });

    // Arrow key navigation within mega menu
    megaMenu.addEventListener('keydown', (e) => {
      const links = megaMenu.querySelectorAll('.mega-menu-link');
      const currentIndex = Array.from(links).indexOf(document.activeElement);

      if (e.key === 'ArrowDown') {
        e.preventDefault();
        const next = currentIndex + 1 < links.length ? currentIndex + 1 : 0;
        links[next].focus();
      }
      if (e.key === 'ArrowUp') {
        e.preventDefault();
        const prev = currentIndex - 1 >= 0 ? currentIndex - 1 : links.length - 1;
        links[prev].focus();
      }
      if (e.key === 'Escape') {
        item.classList.remove('active');
        button.setAttribute('aria-expanded', 'false');
        button.focus();
      }
    });
  });

  function closeAllMenus() {
    navItems.forEach(item => {
      item.classList.remove('active');
      const btn = item.querySelector('.nav-link');
      if (btn) btn.setAttribute('aria-expanded', 'false');
    });
    activeMenu = null;
  }

  // Close menus on outside click
  document.addEventListener('click', (e) => {
    if (activeMenu && !activeMenu.contains(e.target)) {
      closeAllMenus();
    }
  });


  // --- Sticky Header ---
  let lastScroll = 0;
  const scrollThreshold = 50;

  window.addEventListener('scroll', () => {
    const currentScroll = window.pageYOffset;

    if (currentScroll > scrollThreshold) {
      headerWrapper.classList.add('scrolled');
    } else {
      headerWrapper.classList.remove('scrolled');
    }

    lastScroll = currentScroll;
  }, { passive: true });


  // --- Mobile Nav Drawer ---
  if (mobileToggle) {
    mobileToggle.addEventListener('click', () => {
      const isOpen = mobileDrawer.classList.contains('active');
      
      if (isOpen) {
        closeMobileNav();
      } else {
        openMobileNav();
      }
    });
  }

  if (mobileOverlay) {
    mobileOverlay.addEventListener('click', closeMobileNav);
  }

  function openMobileNav() {
    mobileToggle.classList.add('active');
    mobileToggle.setAttribute('aria-expanded', 'true');
    mobileDrawer.classList.add('active');
    mobileOverlay.classList.add('active');
    document.body.style.overflow = 'hidden';
  }

  function closeMobileNav() {
    mobileToggle.classList.remove('active');
    mobileToggle.setAttribute('aria-expanded', 'false');
    mobileDrawer.classList.remove('active');
    mobileOverlay.classList.remove('active');
    document.body.style.overflow = '';
  }

  // Mobile accordion submenus
  const mobileNavItems = document.querySelectorAll('.mobile-nav-item[data-mobile-menu]');

  mobileNavItems.forEach(item => {
    const button = item.querySelector('.mobile-nav-link');

    button.addEventListener('click', () => {
      const isActive = item.classList.contains('active');
      
      // Close other submenus
      mobileNavItems.forEach(other => {
        if (other !== item) other.classList.remove('active');
      });

      item.classList.toggle('active', !isActive);
    });
  });


  // --- Search Overlay ---
  if (searchToggle) {
    searchToggle.addEventListener('click', () => {
      searchOverlay.classList.add('active');
      document.body.style.overflow = 'hidden';
      setTimeout(() => searchInput.focus(), 300);
    });
  }

  if (searchClose) {
    searchClose.addEventListener('click', closeSearch);
  }

  if (searchOverlay) {
    searchOverlay.addEventListener('click', (e) => {
      if (e.target === searchOverlay) closeSearch();
    });
  }

  function closeSearch() {
    searchOverlay.classList.remove('active');
    document.body.style.overflow = '';
    searchInput.value = '';
  }


  // --- Region Selector ---
  if (regionToggle) {
    regionToggle.addEventListener('click', (e) => {
      e.stopPropagation();
      const isActive = regionSelector.classList.contains('active');
      regionSelector.classList.toggle('active', !isActive);
      regionToggle.setAttribute('aria-expanded', !isActive);
    });

    document.addEventListener('click', (e) => {
      if (!regionSelector.contains(e.target)) {
        regionSelector.classList.remove('active');
        regionToggle.setAttribute('aria-expanded', 'false');
      }
    });
  }


  // --- Global Escape key ---
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
      closeAllMenus();
      closeMobileNav();
      closeSearch();
      if (regionSelector) {
        regionSelector.classList.remove('active');
        regionToggle.setAttribute('aria-expanded', 'false');
      }
    }
  });
});
