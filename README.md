# UrbanPest — Enterprise Pest Control Website

A full, production-quality marketing website for **UrbanPest**, a fictional global commercial pest control company.

## 🚀 Quick Start

```bash
# Navigate to the project directory
cd urbanpest

# Start the PHP built-in server
php -S localhost:8000

# Open in your browser
# http://localhost:8000
```

**Requirements:** PHP 8.0+ (no Composer dependencies, no build step)

## 📁 Folder Structure

```
/urbanpest
├── /assets
│   ├── /images          # Placeholder images
│   └── /icons           # SVG favicon
├── /css
│   ├── base.css         # Design tokens, reset, typography, buttons, animations
│   ├── layout.css       # Container, grid, flex, section spacing, card base
│   ├── components.css   # All component styles (header, carousel, forms, etc.)
│   └── responsive.css   # Mobile-first breakpoints (375px → 1920px)
├── /js
│   ├── nav.js           # Mega-menu, mobile drawer, sticky header, search overlay
│   ├── carousel.js      # Auto-rotating carousel with touch/keyboard support
│   ├── counters.js      # Scroll-triggered stat counter animations
│   └── form-validation.js # Client-side form validation
├── /partials
│   ├── header.php       # HTML head, meta tags, CSS includes
│   ├── mega-menu.php    # Full navigation (desktop mega-menu + mobile drawer)
│   ├── footer.php       # Footer, scripts, closing tags
│   ├── hero.php         # Reusable hero banner
│   ├── cta-banner.php   # Reusable CTA section
│   ├── service-card.php # Service card component
│   ├── sector-card.php  # Industry sector card component
│   └── testimonial.php  # Testimonial quote block
├── /data
│   ├── services.php     # All services & sub-services array
│   ├── sectors.php      # 8 industry sectors array
│   ├── blog-posts.php   # 6 sample blog articles
│   └── testimonials.php # 5 client testimonials
├── index.php            # Homepage (10 sections)
├── services.php         # Services overview
├── services-single.php  # Individual service (uses ?slug=)
├── industries.php       # Industries overview
├── industries-single.php # Individual sector (uses ?slug=)
├── about.php            # Company story
├── about-sustainability.php
├── about-innovation.php
├── about-locations.php
├── about-careers.php
├── insights.php         # Blog listing with category filters
├── insights-single.php  # Blog article template
├── contact.php          # Contact form + info
├── contact-handler.php  # Server-side form processing
├── .htaccess            # Apache clean URL rewrites
└── README.md
```

## 🎨 Brand Identity

| Element | Value |
|---------|-------|
| **Primary** | Deep Navy `#0B1F3A` |
| **Accent** | Emerald `#0FA968` |
| **Headings** | Space Grotesk (Google Fonts) |
| **Body** | Inter (Google Fonts) |
| **Logo** | Inline SVG shield + radar motif |

## 📄 Pages

| Page | Route | Description |
|------|-------|-------------|
| Homepage | `/` | Hero, carousel, features, industries, stats, sustainability |
| Services | `/services.php` | Service category grid |
| Service Detail | `/services-single.php?slug=rodent-control` | Individual service |
| Industries | `/industries.php` | 8 sector cards |
| Industry Detail | `/industries-single.php?slug=food-processing` | Sector-specific content |
| About | `/about.php` | Company story, stats, leadership |
| Sustainability | `/about-sustainability.php` | 4 responsibility pillars |
| Innovation | `/about-innovation.php` | UrbanPest Connect platform |
| Locations | `/about-locations.php` | 9 regional offices |
| Careers | `/about-careers.php` | Job listings |
| Insights | `/insights.php` | Blog with category filters |
| Article | `/insights-single.php?slug=...` | Blog article |
| Contact | `/contact.php` | Form + contact info |

## 🔧 Key Features

- **Mega-menu** with keyboard navigation and ARIA attributes
- **Mobile accordion drawer** with smooth transitions
- **Feature carousel** with auto-rotation, touch/swipe, and dot navigation
- **Scroll-triggered stat counters** using `IntersectionObserver`
- **Client-side + server-side form validation**
- **Dynamic SEO** — per-page title/description via PHP variables
- **Semantic HTML5** — proper heading hierarchy, landmarks, ARIA
- **Responsive** — Mobile-first, 375px to 1920px
- **PHP includes** — Reusable partials for header, footer, cards, CTAs
- **Data-driven** — Content stored in PHP arrays, rendered with `foreach`

## ⚠️ Notes

- The contact form logs submissions to `contact-log.txt` — the `mail()` function is stubbed with a TODO comment
- The `.htaccess` file provides clean URLs for Apache servers (optional)
- All content is original and fictional — no text, images, or branding from any real company
- Images use CSS gradients as placeholders — swap in real images for production

## 📜 License

This is a demonstration project. All content is fictional.
