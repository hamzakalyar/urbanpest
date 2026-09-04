/**
 * UrbanPest — Carousel JS
 * Lightweight carousel with auto-rotation, manual controls, touch support, and accessibility.
 */

class UrbanPestCarousel {
  constructor(element) {
    this.el = element;
    this.track = element.querySelector('.carousel-track');
    this.slides = element.querySelectorAll('.carousel-slide');
    this.totalSlides = this.slides.length;
    this.currentIndex = 0;
    this.autoplayInterval = null;
    this.autoplayDelay = 5000;
    this.isTransitioning = false;

    // Touch support
    this.startX = 0;
    this.currentX = 0;
    this.isDragging = false;

    if (this.totalSlides <= 1) return;

    this.init();
  }

  init() {
    this.createControls();
    this.bindEvents();
    this.startAutoplay();
    this.updateSlide();
  }

  createControls() {
    // Create controls container
    const controls = document.createElement('div');
    controls.classList.add('carousel-controls');

    // Prev button
    const prevBtn = document.createElement('button');
    prevBtn.classList.add('carousel-btn', 'carousel-prev');
    prevBtn.setAttribute('aria-label', 'Previous slide');
    prevBtn.innerHTML = '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="15 18 9 12 15 6"></polyline></svg>';
    prevBtn.addEventListener('click', () => this.prev());

    // Next button
    const nextBtn = document.createElement('button');
    nextBtn.classList.add('carousel-btn', 'carousel-next');
    nextBtn.setAttribute('aria-label', 'Next slide');
    nextBtn.innerHTML = '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"></polyline></svg>';
    nextBtn.addEventListener('click', () => this.next());

    // Dots
    const dots = document.createElement('div');
    dots.classList.add('carousel-dots');

    for (let i = 0; i < this.totalSlides; i++) {
      const dot = document.createElement('button');
      dot.classList.add('carousel-dot');
      dot.setAttribute('aria-label', `Go to slide ${i + 1}`);
      dot.addEventListener('click', () => this.goTo(i));
      dots.appendChild(dot);
    }

    controls.appendChild(prevBtn);
    controls.appendChild(dots);
    controls.appendChild(nextBtn);
    this.el.appendChild(controls);

    this.dots = dots.querySelectorAll('.carousel-dot');
  }

  bindEvents() {
    // Pause on hover
    this.el.addEventListener('mouseenter', () => this.stopAutoplay());
    this.el.addEventListener('mouseleave', () => this.startAutoplay());

    // Touch events
    this.track.addEventListener('touchstart', (e) => this.onTouchStart(e), { passive: true });
    this.track.addEventListener('touchmove', (e) => this.onTouchMove(e), { passive: true });
    this.track.addEventListener('touchend', () => this.onTouchEnd());

    // Keyboard
    this.el.addEventListener('keydown', (e) => {
      if (e.key === 'ArrowLeft') this.prev();
      if (e.key === 'ArrowRight') this.next();
    });

    // Focus trap for accessibility
    this.el.setAttribute('tabindex', '0');
    this.el.setAttribute('role', 'region');
    this.el.setAttribute('aria-label', 'Feature carousel');
  }

  onTouchStart(e) {
    this.startX = e.touches[0].clientX;
    this.isDragging = true;
    this.stopAutoplay();
  }

  onTouchMove(e) {
    if (!this.isDragging) return;
    this.currentX = e.touches[0].clientX;
  }

  onTouchEnd() {
    if (!this.isDragging) return;
    this.isDragging = false;

    const diff = this.startX - this.currentX;
    const threshold = 50;

    if (Math.abs(diff) > threshold) {
      if (diff > 0) {
        this.next();
      } else {
        this.prev();
      }
    }

    this.startAutoplay();
  }

  prev() {
    if (this.isTransitioning) return;
    this.currentIndex = (this.currentIndex - 1 + this.totalSlides) % this.totalSlides;
    this.updateSlide();
    this.resetAutoplay();
  }

  next() {
    if (this.isTransitioning) return;
    this.currentIndex = (this.currentIndex + 1) % this.totalSlides;
    this.updateSlide();
    this.resetAutoplay();
  }

  goTo(index) {
    if (this.isTransitioning || index === this.currentIndex) return;
    this.currentIndex = index;
    this.updateSlide();
    this.resetAutoplay();
  }

  updateSlide() {
    this.isTransitioning = true;
    this.track.style.transform = `translateX(-${this.currentIndex * 100}%)`;

    // Update dots
    this.dots.forEach((dot, i) => {
      dot.classList.toggle('active', i === this.currentIndex);
    });

    // Update ARIA
    this.slides.forEach((slide, i) => {
      slide.setAttribute('aria-hidden', i !== this.currentIndex);
    });

    setTimeout(() => {
      this.isTransitioning = false;
    }, 500);
  }

  startAutoplay() {
    if (this.autoplayInterval) return;
    this.autoplayInterval = setInterval(() => this.next(), this.autoplayDelay);
  }

  stopAutoplay() {
    if (this.autoplayInterval) {
      clearInterval(this.autoplayInterval);
      this.autoplayInterval = null;
    }
  }

  resetAutoplay() {
    this.stopAutoplay();
    this.startAutoplay();
  }
}

// Initialize all carousels on page
document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('.carousel').forEach(el => {
    new UrbanPestCarousel(el);
  });
});
