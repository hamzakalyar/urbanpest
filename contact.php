<?php
/**
 * UrbanPest — Contact Page
 */

$pageTitle = 'Contact Us — UrbanPest';
$pageDescription = 'Get in touch with UrbanPest for a free pest management consultation. Contact our team of specialists today.';
$currentPage = 'contact';

require_once __DIR__ . '/data/services.php';
include __DIR__ . '/partials/header.php';

$formSuccess = isset($_GET['success']) && $_GET['success'] === '1';
$formError = isset($_GET['error']) && $_GET['error'] === '1';
?>

<!-- Page Hero -->
<?php
$heroTitle       = 'Contact Support & Dispatch';
$heroDesc        = 'Our commercial biosecurity consultants and rapid emergency technicians are standing by to protect your facility. Request a site survey, quote, or immediate dispatch.';
$heroTag         = 'RAPID RESPONSE UNIT // 24/7 TECHNICAL DESK';
$heroBadge       = '< 2-Hour Emergency SLA';
$heroImage       = '/assets/images/customer-dispatch.jpg';
$heroWatermark   = 'DISPATCH';
$heroStatVal     = '24/7/365';
$heroStatLabel   = 'Emergency Service Availability';
$heroCtaText     = 'Request A Consultation';
$heroCtaLink     = '#consultation-form';
$heroBreadcrumbs = [
    ['label' => 'Home', 'url' => '/index.php'],
    ['label' => 'Contact Us']
];
include __DIR__ . '/partials/page-hero.php';
?>

<section class="section" id="consultation-form">
  <div class="container">
    <div class="split-layout">
      <!-- Contact Form -->
      <div>
        <h2 style="margin-bottom: var(--space-xl);">Request a Consultation</h2>

        <?php if ($formSuccess): ?>
          <div class="form-success" style="margin-bottom: var(--space-xl);">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display:inline; vertical-align:middle; margin-right:8px;"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
            Thank you! Your message has been received. Our team will contact you within 24 hours.
          </div>
        <?php endif; ?>

        <?php if ($formError): ?>
          <div class="form-error-banner">
            There was an error submitting your form. Please check your inputs and try again.
          </div>
        <?php endif; ?>

        <form id="contactForm" action="/contact-handler.php" method="POST" novalidate>
          <div class="grid grid-2 grid-gap-lg">
            <div class="form-group">
              <label class="form-label" for="contact-name">Full Name <span class="required">*</span></label>
              <input type="text" id="contact-name" name="name" class="form-input" placeholder="John Smith" required>
              <span class="form-error"></span>
            </div>
            <div class="form-group">
              <label class="form-label" for="contact-company">Company <span class="required">*</span></label>
              <input type="text" id="contact-company" name="company" class="form-input" placeholder="Acme Corp" required>
              <span class="form-error"></span>
            </div>
          </div>

          <div class="grid grid-2 grid-gap-lg">
            <div class="form-group">
              <label class="form-label" for="contact-email">Email Address <span class="required">*</span></label>
              <input type="email" id="contact-email" name="email" class="form-input" placeholder="john@acme.com" required>
              <span class="form-error"></span>
            </div>
            <div class="form-group">
              <label class="form-label" for="contact-phone">Phone Number</label>
              <input type="tel" id="contact-phone" name="phone" class="form-input" placeholder="+1 555 123 4567">
              <span class="form-error"></span>
            </div>
          </div>

          <div class="form-group">
            <label class="form-label" for="contact-service">Service of Interest <span class="required">*</span></label>
            <select id="contact-service" name="service" class="form-select" required>
              <option value="">Select a service...</option>
              <option value="general">General Enquiry</option>
              <?php foreach ($serviceCategories as $cat): ?>
                <optgroup label="<?php echo htmlspecialchars($cat['name']); ?>">
                  <?php foreach ($cat['subservices'] as $svc): ?>
                    <option value="<?php echo htmlspecialchars($svc['slug']); ?>"><?php echo htmlspecialchars($svc['name']); ?></option>
                  <?php endforeach; ?>
                </optgroup>
              <?php endforeach; ?>
            </select>
            <span class="form-error"></span>
          </div>

          <div class="form-group">
            <label class="form-label" for="contact-message">Message <span class="required">*</span></label>
            <textarea id="contact-message" name="message" class="form-textarea" placeholder="Tell us about your pest management needs..." required></textarea>
            <span class="form-error"></span>
          </div>

          <button type="submit" class="btn btn-primary btn-lg">Send Message</button>
        </form>
      </div>

      <!-- Contact Info -->
      <div>
        <h2 style="margin-bottom: var(--space-xl);">Contact Information</h2>

        <div class="contact-info">
          <div class="contact-info-item">
            <div class="contact-info-icon">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
            </div>
            <div>
              <h4>Phone</h4>
              <p><a href="tel:+18005551234" style="color:var(--color-emerald);">+1 800 555 1234</a></p>
              <p>Mon–Fri, 8:00 AM – 6:00 PM (local time)</p>
            </div>
          </div>

          <div class="contact-info-item">
            <div class="contact-info-icon">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
            </div>
            <div>
              <h4>Email</h4>
              <p><a href="mailto:info@urbanpest.com" style="color:var(--color-emerald);">info@urbanpest.com</a></p>
              <p>We respond within 24 hours</p>
            </div>
          </div>

          <div class="contact-info-item">
            <div class="contact-info-icon">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
            </div>
            <div>
              <h4>Head Office</h4>
              <p>UrbanPest Global Ltd.<br>42 Innovation Drive, Canary Wharf<br>London E14 5AB, United Kingdom</p>
            </div>
          </div>

          <div class="contact-info-item">
            <div class="contact-info-icon">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
            </div>
            <div>
              <h4>Emergency Line (24/7)</h4>
              <p><a href="tel:+18005559911" style="color:var(--color-emerald);">+1 800 555 9911</a></p>
              <p>For urgent pest incidents outside business hours</p>
            </div>
          </div>
        </div>

        <!-- Map Placeholder -->
        <div class="map-placeholder">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin-right:8px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
          Map integration — coming soon
        </div>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>
