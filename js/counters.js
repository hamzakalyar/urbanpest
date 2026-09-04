/**
 * UrbanPest — Counter Animations JS
 * IntersectionObserver-powered scroll-triggered stat counter animations.
 */

document.addEventListener('DOMContentLoaded', () => {
  const counters = document.querySelectorAll('[data-counter]');

  if (!counters.length) return;

  const observerOptions = {
    root: null,
    rootMargin: '0px 0px -50px 0px',
    threshold: 0.3
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting && !entry.target.dataset.counted) {
        animateCounter(entry.target);
        entry.target.dataset.counted = 'true';
      }
    });
  }, observerOptions);

  counters.forEach(counter => observer.observe(counter));

  function animateCounter(element) {
    const target = parseInt(element.dataset.counter, 10);
    const suffix = element.dataset.suffix || '';
    const prefix = element.dataset.prefix || '';
    const duration = parseInt(element.dataset.duration, 10) || 2000;
    
    let start = 0;
    const startTime = performance.now();

    function easeOutQuart(t) {
      return 1 - Math.pow(1 - t, 4);
    }

    function update(currentTime) {
      const elapsed = currentTime - startTime;
      const progress = Math.min(elapsed / duration, 1);
      const easedProgress = easeOutQuart(progress);
      const current = Math.floor(easedProgress * target);

      element.textContent = prefix + formatNumber(current) + suffix;

      if (progress < 1) {
        requestAnimationFrame(update);
      } else {
        element.textContent = prefix + formatNumber(target) + suffix;
      }
    }

    requestAnimationFrame(update);
  }

  function formatNumber(num) {
    return num.toLocaleString('en-US');
  }

  // --- Fade-in-up on scroll ---
  const fadeElements = document.querySelectorAll('.fade-in-up');
  
  if (fadeElements.length) {
    const fadeObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('animate-fade-in-up');
          fadeObserver.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.1,
      rootMargin: '0px 0px -30px 0px'
    });

    fadeElements.forEach(el => fadeObserver.observe(el));
  }
});
