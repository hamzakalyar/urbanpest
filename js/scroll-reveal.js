/**
 * UrbanPest — Scroll Reveal & Entrance Animations
 * IntersectionObserver-driven system that smoothly animates sections, cards,
 * and page elements as they enter the viewport from the bottom.
 */

document.addEventListener('DOMContentLoaded', () => {
  // Respect user preference for reduced motion
  if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    document.querySelectorAll('.reveal-up, .hero-reveal').forEach(el => {
      el.classList.add('is-revealed');
    });
    return;
  }

  // Auto-target major content blocks across all pages if not manually specified
  const targetSelectors = [
    '.section-header',
    '.risk-item',
    '.service-card',
    '.step-card',
    '.stat-card',
    '.testimonial-card',
    '.timeline-item',
    '.split-layout > div',
    '.card',
    '.tech-card',
    '.faq-item',
    '.contact-info-card',
    '#consultation-form',
    '.solution-card',
    '.blog-card'
  ];

  targetSelectors.forEach(selector => {
    document.querySelectorAll(selector).forEach(el => {
      if (!el.classList.contains('reveal-up') && !el.closest('.page-hero')) {
        el.classList.add('reveal-up');
      }
    });
  });

  // Stagger delays for grid items and list children
  const containerSelectors = ['.grid', '.risk-list', '.timeline', '.split-layout', '.faq-list'];
  containerSelectors.forEach(containerSel => {
    document.querySelectorAll(containerSel).forEach(container => {
      const children = Array.from(container.children).filter(ch => ch.classList.contains('reveal-up'));
      children.forEach((child, index) => {
        const delay = Math.min((index % 6) * 0.08, 0.48);
        child.style.transitionDelay = `${delay}s`;
      });
    });
  });

  // Set up IntersectionObserver
  const observerOptions = {
    root: null,
    rootMargin: '0px 0px -50px 0px',
    threshold: 0.12
  };

  const revealObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-revealed');
        // Once revealed, unobserve so animation doesn't repeat awkwardly
        observer.unobserve(entry.target);
      }
    });
  }, observerOptions);

  // Observe all elements with .reveal-up
  const revealElements = document.querySelectorAll('.reveal-up');
  revealElements.forEach(el => {
    // If element is already in initial viewport on page load, reveal it quickly
    const rect = el.getBoundingClientRect();
    if (rect.top < window.innerHeight && rect.bottom > 0) {
      setTimeout(() => {
        el.classList.add('is-revealed');
      }, 100);
    } else {
      revealObserver.observe(el);
    }
  });

  // Trigger hero elements entrance animation with cascading bottom-to-top reveal
  const heroElements = document.querySelectorAll('.page-hero .hero-animate');
  heroElements.forEach((el, index) => {
    setTimeout(() => {
      el.classList.add('is-hero-entered');
    }, 80 + index * 90);
  });
});
