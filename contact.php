<?php
/**
 * UrbanX Pest Control — Contact Page
 * Professional pest management services for residential and commercial properties across Perth.
 * Operating in accordance with Western Australian pest management licensing.
 */

$pageTitle = 'Contact Us — UrbanX Pest Control Perth';
$pageDescription = 'Get in touch with UrbanX Pest Control for professional pest management across Perth. Safe practices, licensed professionals, clear upfront pricing.';
$currentPage = 'contact';

require_once __DIR__ . '/partials/security.php';
require_once __DIR__ . '/data/services.php';
require_once __DIR__ . '/data/config.php';

initSecuritySession();
emitSecurityHeaders();

include __DIR__ . '/partials/header.php';

$formSuccess = isset($_GET['success']) && $_GET['success'] === '1';
$errorType = $_GET['error'] ?? '';
$selectedService = $_GET['service'] ?? '';

// Direct routing: If requesting for a specific particular service, route directly to the dedicated service booking form!
if (!empty($selectedService) && empty($_GET['success']) && empty($_GET['error'])) {
    header('Location: /book.php?service=' . urlencode($selectedService));
    exit;
}

$old = $_SESSION['form_old'] ?? [];
$formErrors = $_SESSION['form_errors'] ?? [];
?>

<!-- Page Hero -->
<?php
$heroTitle       = 'Contact UrbanX Perth';
$heroDesc        = 'At UrbanX Pest Control, we provide professional pest management services for residential and commercial properties across Perth. Request a quote, ask a question, or arrange a prompt inspection.';
$heroTag         = 'Perth Residential & Commercial Services';
$heroBadge       = 'Licensed Western Australian Pest Specialists';
$heroImage       = '/assets/images/customer-dispatch.jpg';
$heroStatVal     = '+61 410 148 126';
$heroStatLabel   = 'Perth Direct Line';
$heroCtaText     = 'Book Inspection';
$heroCtaLink     = '/book.php';
$heroWaLink      = getWhatsAppLink('General Pest Enquiry');
$heroBreadcrumbs = [
    ['label' => 'Home', 'url' => '/index.php'],
    ['label' => 'Contact & Quotes']
];
include __DIR__ . '/partials/page-hero.php';
?>

<!-- Statutory Western Australian Licensing Notice -->
<section style="background: #F8FAFC; border-bottom: 1px solid #E2E8F0; padding: 16px 0;">
  <div class="container">
    <div style="background: #FFFFFF; border-radius: 10px; padding: 16px 20px; border: 1px solid #E2E8F0; border-left: 4px solid var(--color-accent, #D91C24); display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 14px;">
      <p style="margin: 0; font-size: 0.88rem; color: #334155; line-height: 1.5;">
        <strong>Western Australian Regulatory Compliance:</strong> Pest management services are provided in accordance with the requirements of the relevant Western Australian pest management licence and applicable legislation.
      </p>
      <a href="/book.php" class="btn btn-sm btn-primary">Book Online</a>
    </div>
  </div>
</section>

<section class="section" id="consultation-form">
  <div class="container">
    <div class="split-layout">
      <!-- Contact Form -->
      <div>
        <h2 style="margin-bottom: var(--space-xl);">Request a Quote or Assessment</h2>

        <?php if ($formSuccess): ?>
          <div class="form-success" style="margin-bottom: var(--space-xl); padding: var(--space-md) var(--space-lg); border-radius: var(--radius-md); background: rgba(15,169,104,0.12); border: 1px solid var(--color-emerald); color: var(--color-emerald); font-weight: 600;">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display:inline; vertical-align:middle; margin-right:8px;"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
            Thank you! Your enquiry has been received. A licensed pest management professional will contact you shortly with upfront pricing.
          </div>
        <?php endif; ?>

        <?php if ($errorType === 'ratelimit'): ?>
          <div class="form-error-banner" style="margin-bottom: var(--space-xl); padding: var(--space-md) var(--space-lg); border-radius: var(--radius-md); background: rgba(239,68,68,0.1); border: 1px solid #EF4444; color: #DC2626; font-weight: 600;">
            Submission rate limit reached. Please wait a moment before sending another message.
          </div>
        <?php elseif ($errorType === 'csrf'): ?>
          <div class="form-error-banner" style="margin-bottom: var(--space-xl); padding: var(--space-md) var(--space-lg); border-radius: var(--radius-md); background: rgba(239,68,68,0.1); border: 1px solid #EF4444; color: #DC2626; font-weight: 600;">
            Security token expired. Please refresh the page and submit again.
          </div>
        <?php elseif ($errorType): ?>
          <div class="form-error-banner" style="margin-bottom: var(--space-xl); padding: var(--space-md) var(--space-lg); border-radius: var(--radius-md); background: rgba(239,68,68,0.1); border: 1px solid #EF4444; color: #DC2626; font-weight: 600;">
            There was an error submitting your form. Please check your inputs and try again.
          </div>
        <?php endif; ?>

        <form id="contactForm" action="/contact-handler.php" method="POST" novalidate>
          <?php echo renderCSRFField(); ?>
          <?php echo renderHoneypotField(); ?>
          <div class="grid grid-2 grid-gap-lg">
            <div class="form-group">
              <label class="form-label" for="contact-name">Full Name <span class="required">*</span></label>
              <input type="text" id="contact-name" name="name" class="form-input" placeholder="e.g. David Sterling" required>
              <span class="form-error"></span>
            </div>
            <div class="form-group">
              <label class="form-label" for="contact-company">Property or Business Name</label>
              <input type="text" id="contact-company" name="company" class="form-input" placeholder="e.g. Residential Home or Business">
              <span class="form-error"></span>
            </div>
          </div>

          <div class="grid grid-2 grid-gap-lg">
            <div class="form-group">
              <label class="form-label" for="contact-email">Email Address <span class="required">*</span></label>
              <input type="email" id="contact-email" name="email" class="form-input" placeholder="e.g. david@example.com.au" required>
              <span class="form-error"></span>
            </div>
            <div class="form-group">
              <label class="form-label" for="contact-phone">Phone Number <span class="required">*</span></label>
              <input type="tel" id="contact-phone" name="phone" class="form-input" placeholder="e.g. 0410 148 126" required>
              <span class="form-error"></span>
            </div>
          </div>

          <div class="form-group">
            <label class="form-label" for="contact-service">Pest Service of Interest <span class="required">*</span></label>
            <select id="contact-service" name="service" class="form-select" required>
              <option value="">Select a service...</option>
              <option value="general">General Pest Enquiry</option>
              <?php foreach ($serviceCategories as $cat): ?>
                <optgroup label="<?php echo htmlspecialchars($cat['name']); ?>">
                  <?php foreach ($cat['subservices'] as $svc): ?>
                    <option value="<?php echo htmlspecialchars($svc['slug']); ?>" <?php echo ($selectedService === $svc['slug']) ? 'selected' : ''; ?>><?php echo htmlspecialchars($svc['name']); ?></option>
                  <?php endforeach; ?>
                </optgroup>
              <?php endforeach; ?>
            </select>
            <span class="form-error"></span>
          </div>

          <div class="form-group">
            <label class="form-label" for="contact-message">Message & Details <span class="required">*</span></label>
            <textarea id="contact-message" name="message" class="form-textarea" placeholder="Describe the pest sightings, suburb in Perth, and property type..." required></textarea>
            <span class="form-error"></span>
          </div>

          <button type="submit" class="btn btn-primary btn-lg">Send Message &rarr;</button>
        </form>
      </div>

      <!-- Contact Info -->
      <div>
        <h2 style="margin-bottom: var(--space-xl);">UrbanX Perth Office</h2>

        <div class="contact-info">
          <div class="contact-info-item">
            <div class="contact-info-icon">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
            </div>
            <div>
              <h4>Direct Telephone Line</h4>
              <p><a href="tel:<?php echo htmlspecialchars($appConfig['phone_raw'] ?? '+61410148126'); ?>" style="color:var(--color-emerald); font-weight:700;"><?php echo htmlspecialchars($appConfig['phone_display'] ?? '+61 410 148 126'); ?></a></p>
              <p>Mon–Fri, 7:00 AM – 7:00 PM AEST | Sat 8:00 AM – 4:00 PM</p>
            </div>
          </div>

          <div class="contact-info-item">
            <div class="contact-info-icon" style="background: rgba(37,211,102,0.12); color: #25D366;">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.664-.698c.969.586 1.761.887 2.796.887 3.182 0 5.768-2.587 5.768-5.768.001-3.18-2.584-5.772-5.768-5.772zm3.393 8.163c-.144.405-.837.774-1.17.824-.312.045-.694.062-2.18-.553-1.898-.785-3.125-2.73-3.22-2.856-.095-.127-.768-1.021-.768-1.948 0-.927.489-1.383.663-1.572.174-.189.381-.237.508-.237.126 0 .253.002.364.007.117.006.275-.044.43.329.16.386.545 1.33.593 1.428.048.098.08.213.016.34-.064.127-.096.206-.19.317-.095.11-.2.246-.285.331-.095.095-.195.198-.084.388.111.19.493.813 1.057 1.317.727.649 1.339.851 1.53.946.19.095.302.079.414-.047.111-.127.476-.554.603-.744.127-.19.254-.159.428-.095.174.063 1.109.523 1.3.618.19.095.317.143.365.222.048.079.048.46-.096.865z"/></svg>
            </div>
            <div>
              <h4>WhatsApp Quick Chat</h4>
              <p><a href="<?php echo htmlspecialchars(getWhatsAppLink()); ?>" target="_blank" rel="noopener noreferrer" style="color:#25D366; font-weight:700;">+61 410 148 126 (Live Desk)</a></p>
              <p>Instant photo diagnosis & rapid response</p>
            </div>
          </div>

          <div class="contact-info-item">
            <div class="contact-info-icon">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
            </div>
            <div>
              <h4>Email Inquiries</h4>
              <p><a href="mailto:<?php echo htmlspecialchars($appConfig['email_contact'] ?? 'info@urbanxpestcontrol.com'); ?>" style="color:var(--color-accent, #D91C24); font-weight:700;"><?php echo htmlspecialchars($appConfig['email_contact'] ?? 'info@urbanxpestcontrol.com'); ?></a></p>
              <p>Quotes, questions, and treatment details</p>
            </div>
          </div>

          <div class="contact-info-item">
            <div class="contact-info-icon">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
            </div>
            <div>
              <h4>Perth Headquarters</h4>
              <p><?php echo htmlspecialchars($appConfig['company_name'] ?? 'UrbanX Pest Control'); ?><br><?php echo htmlspecialchars($appConfig['headquarters'] ?? 'Level 28, 140 St Georges Terrace, Perth WA 6000'); ?></p>
              <p style="font-size: 0.8rem; color: #64748B;">Operating across Perth & Western Australia</p>
            </div>
          </div>
        </div>

        <!-- Service Area Box -->
        <div style="background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 12px; padding: 20px; margin-top: var(--space-xl);">
          <div style="display:flex; align-items:center; gap:8px; margin-bottom: 8px;">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent, #D91C24)" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 14 14"></polyline></svg>
            <strong style="color: #0B1320; font-size: 0.9rem;">Perth Service Coverage</strong>
          </div>
          <p style="font-size: 0.825rem; color: #64748B; margin: 0; line-height: 1.5;">
            Serving all Perth regions: Perth CBD, Inner Suburbs, Eastern Suburbs, Northern Suburbs, Western Suburbs, South East, and Mornington Peninsula.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>
