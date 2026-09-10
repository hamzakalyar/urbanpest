<?php
/**
 * UrbanX Pest Control — Dedicated Service Booking Page
 * Professional pest management services for residential and commercial properties across Perth.
 * Operating in accordance with Western Australian pest management licensing.
 */

require_once __DIR__ . '/data/config.php';
require_once __DIR__ . '/data/services.php';
require_once __DIR__ . '/partials/pest-symbols.php';

$selectedSlug = trim($_GET['service'] ?? 'household-pest-control');
$requestedType = strtolower(trim($_GET['type'] ?? ''));
$isCommercial = ($requestedType === 'commercial');

$currentService = $allServices[$selectedSlug] ?? null;

if ($currentService) {
    $serviceName = $currentService['name'];
    $serviceDesc = $currentService['short_desc'];
    $pageTitle = 'Book ' . ($isCommercial ? 'Commercial ' : 'Residential ') . $serviceName . ' Survey — UrbanX Perth';
    $pageDescription = 'Request a ' . ($isCommercial ? 'commercial' : 'residential') . ' pest survey for ' . $serviceName . ' across Perth. Safe practices, licensed Western Australian professionals, clear upfront pricing.';
} else {
    $serviceName = $isCommercial ? 'Commercial Pest Control Survey' : 'Residential Pest Control Survey';
    $serviceDesc = 'Professional pest management services for residential and commercial properties across Perth.';
    $pageTitle = 'Request ' . ($isCommercial ? 'Commercial' : 'Residential') . ' Pest Survey — UrbanX Perth';
    $pageDescription = 'Book a professional pest survey for your Perth property under Western Australian licensing.';
}

$currentPage = 'services';
$isSuccess = !empty($_GET['booking_success']);
$ticketNo = htmlspecialchars($_GET['ticket'] ?? 'US-' . strtoupper(substr(uniqid(), -6)));

include __DIR__ . '/partials/header.php';
?>

<!-- Page Hero -->
<section class="page-hero" style="background: linear-gradient(135deg, #070F1E 0%, #0B1F3A 60%, #152E52 100%); color: #fff; padding: var(--space-3xl) 0 var(--space-2xl);">
  <div class="container">
    <div style="max-width: 800px;">
      <div style="display: inline-flex; align-items: center; gap: 8px; background: rgba(217, 28, 36, 0.15); border: 1px solid rgba(217, 28, 36, 0.35); padding: 5px 14px; border-radius: 20px; font-size: 0.78rem; font-weight: 700; color: #FF6B6B; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: var(--space-md);">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
        Perth Residential & Commercial Pest Survey
      </div>
      <h1 style="color: #FFFFFF; font-size: clamp(2rem, 4vw, 3rem); font-weight: 800; line-height: 1.15; margin-bottom: var(--space-md);">
        Request <span style="color: var(--color-accent, #D91C24);"><?php echo htmlspecialchars($serviceName); ?></span>
      </h1>
      <p style="font-size: 1.1rem; color: #CBD5E1; line-height: 1.6; margin-bottom: var(--space-lg);">
        <?php echo htmlspecialchars($serviceDesc); ?> Dedicated residential and commercial dispatch across Greater Perth.
      </p>

      <div style="display: flex; flex-wrap: wrap; gap: 16px; font-size: 0.85rem; color: #94A3B8;">
        <div style="display: flex; align-items: center; gap: 6px;">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="#16A34A"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
          <span>Licensed Western Australian Pest Technicians</span>
        </div>
        <div style="display: flex; align-items: center; gap: 6px;">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="#16A34A"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
          <span>Safe & Responsible Practices</span>
        </div>
        <div style="display: flex; align-items: center; gap: 6px;">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="#16A34A"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
          <span>Clear Upfront Pricing</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Statutory Western Australian Licensing Notice -->
<div style="background: #F8FAFC; border-bottom: 1px solid #E2E8F0; padding: 14px 0;">
  <div class="container">
    <p style="margin: 0; font-size: 0.86rem; color: #475569; display: flex; align-items: center; gap: 8px;">
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent, #D91C24)" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
      <span><strong>Western Australian Licensing Statement:</strong> Pest management services are provided in accordance with the requirements of the relevant Western Australian pest management licence and applicable legislation.</span>
    </p>
  </div>
</div>

<!-- Main Booking Form Section -->
<section class="section" style="background: #F8FAFC; padding-top: var(--space-2xl); padding-bottom: var(--space-4xl);">
  <div class="container">
    <div style="display: grid; grid-template-columns: 1.5fr 1fr; gap: var(--space-2xl); align-items: start;">

      <!-- Left Column: Booking Form -->
      <div style="background: #FFFFFF; border-radius: 12px; border: 1px solid #E2E8F0; padding: clamp(20px, 4vw, 36px); box-shadow: 0 4px 16px rgba(0,0,0,0.04);">
        
        <?php if ($isSuccess): ?>
          <div style="text-align: center; padding: 24px 12px;">
            <div style="width: 72px; height: 72px; border-radius: 50%; background: #DCFCE7; color: #16A34A; display: inline-flex; align-items: center; justify-content: center; margin-bottom: 20px;">
              <svg width="38" height="38" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
            </div>
            <h2 style="color: #0B1F3A; font-size: 1.6rem; margin-bottom: 8px;">Booking Request Received!</h2>
            <div style="display: inline-block; background: #F1F5F9; border: 1px dashed #CBD5E1; padding: 6px 16px; border-radius: 6px; font-size: 0.95rem; font-weight: 700; color: var(--color-accent, #D91C24); margin-bottom: 16px;">
              Booking Reference: <?php echo $ticketNo; ?>
            </div>
            <p style="color: #475569; font-size: 1rem; line-height: 1.6; max-width: 480px; margin: 0 auto 24px auto;">
              Your dedicated booking request for <strong><?php echo htmlspecialchars($serviceName); ?></strong> has been received by UrbanX Pest Control. A licensed pest management professional will contact you shortly to confirm your booking and upfront quote.
            </p>
            <div style="display: flex; flex-wrap: wrap; gap: 12px; justify-content: center;">
              <a href="<?php echo htmlspecialchars(getWhatsAppLink($serviceName)); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp">
                Chat on WhatsApp Now
              </a>
              <a href="/services.php" class="btn btn-outline">
                Browse All Services
              </a>
            </div>
          </div>
        <?php else: ?>

          <!-- Selected Service Banner -->
          <div class="booking-selected-service-pill" style="margin-bottom: 24px;">
            <div style="display: flex; align-items: center; gap: 12px;">
              <div style="width: 42px; height: 42px; border-radius: 8px; background: rgba(217, 28, 36, 0.08); display: flex; align-items: center; justify-content: center; font-size: 1.4rem;">
                🛡️
              </div>
              <div>
                <span style="font-size: 0.72rem; font-weight: 700; text-transform: uppercase; color: #64748B; letter-spacing: 0.05em; display: block;">Service Request</span>
                <strong style="color: #0B1F3A; font-size: 1.05rem;"><?php echo htmlspecialchars($serviceName); ?></strong>
              </div>
            </div>
            <span style="font-size: 0.75rem; background: #DCFCE7; color: #15803D; font-weight: 700; padding: 4px 10px; border-radius: 20px;">✓ Selected</span>
          </div>

          <form action="/booking-handler.php" method="POST" class="booking-modal-form">
            <input type="hidden" name="service" value="<?php echo htmlspecialchars($selectedSlug); ?>">

            <!-- Survey Scope Toggle: Residential vs Commercial -->
            <div class="form-group-modal" style="margin-bottom: 22px;">
              <label style="font-size: 0.875rem; font-weight: 700; color: #0B1F3A; display: block; margin-bottom: 8px;">
                Select Survey Scope <span class="req">*</span>
              </label>
              <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px;">
                <label id="bookPageScopeResLabel" style="display: flex; align-items: center; justify-content: center; gap: 10px; border: <?php echo !$isCommercial ? '2px solid var(--color-accent, #D91C24)' : '1px solid #CBD5E1'; ?>; background: <?php echo !$isCommercial ? '#FEF2F2' : '#FFFFFF'; ?>; padding: 12px 16px; border-radius: 8px; cursor: pointer; font-weight: <?php echo !$isCommercial ? '700' : '600'; ?>; font-size: 0.95rem; color: <?php echo !$isCommercial ? '#991B1B' : '#475569'; ?>; transition: all 0.2s ease;">
                  <input type="radio" name="survey_scope" value="Residential Survey" id="bookPageScopeRes" <?php echo !$isCommercial ? 'checked' : ''; ?> style="accent-color: var(--color-accent, #D91C24);">
                  <span>🏡 Request Residential Survey</span>
                </label>
                <label id="bookPageScopeCommLabel" style="display: flex; align-items: center; justify-content: center; gap: 10px; border: <?php echo $isCommercial ? '2px solid var(--color-accent, #D91C24)' : '1px solid #CBD5E1'; ?>; background: <?php echo $isCommercial ? '#FEF2F2' : '#FFFFFF'; ?>; padding: 12px 16px; border-radius: 8px; cursor: pointer; font-weight: <?php echo $isCommercial ? '700' : '600'; ?>; font-size: 0.95rem; color: <?php echo $isCommercial ? '#991B1B' : '#475569'; ?>; transition: all 0.2s ease;">
                  <input type="radio" name="survey_scope" value="Commercial Survey" id="bookPageScopeComm" <?php echo $isCommercial ? 'checked' : ''; ?> style="accent-color: var(--color-accent, #D91C24);">
                  <span>🏢 Request Commercial Survey</span>
                </label>
              </div>
            </div>

            <div class="grid-2-modal">
              <div class="form-group-modal">
                <label for="book-page-name">Full Name <span class="req">*</span></label>
                <input type="text" id="book-page-name" name="name" class="modal-input" placeholder="e.g. David Sterling" required>
              </div>
              <div class="form-group-modal">
                <label for="book-page-company">Property or Business Name</label>
                <input type="text" id="book-page-company" name="company" class="modal-input" placeholder="<?php echo $isCommercial ? 'e.g. Business / Commercial Facility Name' : 'e.g. Residential Property or Suburb'; ?>">
              </div>
            </div>

            <div class="grid-2-modal">
              <div class="form-group-modal">
                <label for="book-page-phone">Contact Phone <span class="req">*</span></label>
                <input type="tel" id="book-page-phone" name="phone" class="modal-input" placeholder="e.g. 0410 148 126" required>
              </div>
              <div class="form-group-modal">
                <label for="book-page-email">Email Address <span class="req">*</span></label>
                <input type="email" id="book-page-email" name="email" class="modal-input" placeholder="e.g. d.sterling@example.com.au" required>
              </div>
            </div>

            <div class="grid-2-modal">
              <div class="form-group-modal">
                <label for="book-page-facility">Property Type</label>
                <select id="book-page-facility" name="property_type" class="modal-input">
                  <?php if (!$isCommercial): ?>
                  <option value="Residential Home / House" selected>Residential Home / House</option>
                  <option value="Residential Unit / Apartment / Strata">Residential Unit / Apartment / Strata</option>
                  <option value="Commercial Office">Commercial Office</option>
                  <option value="Restaurant / Cafe / Hospitality">Restaurant / Cafe / Hospitality</option>
                  <option value="Food Processing / Manufacturing">Food Processing / Manufacturing</option>
                  <option value="Warehousing & Logistics">Warehousing & Logistics</option>
                  <option value="Retail & Supermarket">Retail & Supermarket</option>
                  <option value="Healthcare & Medical">Healthcare & Medical</option>
                  <option value="Facilities Management">Facilities Management</option>
                  <option value="Other Property">Other Property</option>
                  <?php else: ?>
                  <option value="Commercial Office" selected>Commercial Office</option>
                  <option value="Restaurant / Cafe / Hospitality">Restaurant / Cafe / Hospitality</option>
                  <option value="Food Processing / Manufacturing">Food Processing / Manufacturing</option>
                  <option value="Warehousing & Logistics">Warehousing & Logistics</option>
                  <option value="Retail & Supermarket">Retail & Supermarket</option>
                  <option value="Healthcare & Medical">Healthcare & Medical</option>
                  <option value="Facilities Management">Facilities Management</option>
                  <option value="Residential Home / House">Residential Home / House</option>
                  <option value="Residential Unit / Apartment / Strata">Residential Unit / Apartment / Strata</option>
                  <option value="Other Property">Other Property</option>
                  <?php endif; ?>
                </select>
              </div>
              <div class="form-group-modal">
                <label for="book-page-date">Preferred Service Date</label>
                <input type="date" id="book-page-date" name="preferred_date" class="modal-input" value="<?php echo date('Y-m-d', strtotime('+1 day')); ?>" min="<?php echo date('Y-m-d'); ?>">
              </div>
            </div>

            <div class="form-group-modal">
              <label>Service Urgency</label>
              <div class="urgency-chips">
                <label class="urgency-chip">
                  <input type="radio" name="urgency" value="Emergency Same-Day Dispatch">
                  <span class="chip-label chip-emergency">⚡ Urgent Same-Day</span>
                </label>
                <label class="urgency-chip">
                  <input type="radio" name="urgency" value="Within 24-48 Hours" checked>
                  <span class="chip-label">📅 Within 24–48 Hours</span>
                </label>
                <label class="urgency-chip">
                  <input type="radio" name="urgency" value="Standard Scheduled Inspection">
                  <span class="chip-label">🔍 Scheduled Inspection</span>
                </label>
              </div>
            </div>

            <div class="form-group-modal">
              <label for="book-page-message">Pest Sighting Details or Property Access Notes</label>
              <textarea id="book-page-message" name="message" class="modal-input modal-textarea" rows="3" placeholder="Describe pest sightings, internal/external areas requiring treatment, or pet precautions..."></textarea>
            </div>

            <button type="submit" class="btn btn-primary btn-lg" style="width: 100%; justify-content: center; padding: 14px; font-size: 1rem; margin-top: 8px;">
              Request Survey & Upfront Quote &rarr;
            </button>

            <p style="text-align: center; font-size: 0.8rem; color: #64748B; margin-top: 10px;">
              Direct submission to UrbanX Pest Control Perth. Clear upfront pricing with no hidden fees.
            </p>

            <script>
            (function() {
              const resRadio = document.getElementById('bookPageScopeRes');
              const commRadio = document.getElementById('bookPageScopeComm');
              const resLbl = document.getElementById('bookPageScopeResLabel');
              const commLbl = document.getElementById('bookPageScopeCommLabel');
              const propSelect = document.getElementById('book-page-facility');
              const compInput = document.getElementById('book-page-company');

              function updatePageScope(isComm) {
                if (isComm) {
                  commLbl.style.border = '2px solid var(--color-accent, #D91C24)';
                  commLbl.style.background = '#FEF2F2';
                  commLbl.style.color = '#991B1B';
                  commLbl.style.fontWeight = '700';

                  resLbl.style.border = '1px solid #CBD5E1';
                  resLbl.style.background = '#FFFFFF';
                  resLbl.style.color = '#475569';
                  resLbl.style.fontWeight = '600';

                  if (propSelect && propSelect.value.startsWith('Residential')) {
                    propSelect.value = 'Commercial Office';
                  }
                  if (compInput) compInput.placeholder = 'e.g. Business / Commercial Facility Name';
                } else {
                  resLbl.style.border = '2px solid var(--color-accent, #D91C24)';
                  resLbl.style.background = '#FEF2F2';
                  resLbl.style.color = '#991B1B';
                  resLbl.style.fontWeight = '700';

                  commLbl.style.border = '1px solid #CBD5E1';
                  commLbl.style.background = '#FFFFFF';
                  commLbl.style.color = '#475569';
                  commLbl.style.fontWeight = '600';

                  if (propSelect && !propSelect.value.startsWith('Residential')) {
                    propSelect.value = 'Residential Home / House';
                  }
                  if (compInput) compInput.placeholder = 'e.g. Residential Property or Suburb';
                }
              }

              if (resRadio) resRadio.addEventListener('change', () => updatePageScope(false));
              if (commRadio) commRadio.addEventListener('change', () => updatePageScope(true));
            })();
            </script>
          </form>

        <?php endif; ?>

      </div>

      <!-- Right Column: Service Guarantees & Contact Info -->
      <div>
        <div style="background: #FFFFFF; border-radius: 12px; border: 1px solid #E2E8F0; padding: 28px; margin-bottom: 24px;">
          <h3 style="color: #0B1F3A; font-size: 1.15rem; margin-bottom: 16px;">
            Why Choose UrbanX?
          </h3>
          <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 14px;">
            <li style="display: flex; align-items: flex-start; gap: 10px; font-size: 0.88rem; color: #334155;">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="#16A34A" style="flex-shrink: 0; margin-top: 2px;"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
              <span><strong>Licensed Pest Professional:</strong> Operating under relevant Western Australian pest management licensing and legislation.</span>
            </li>
            <li style="display: flex; align-items: flex-start; gap: 10px; font-size: 0.88rem; color: #334155;">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="#16A34A" style="flex-shrink: 0; margin-top: 2px;"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
              <span><strong>Safe & Responsible Practices:</strong> Pet-safe, family-conscious formulations with minimal chemical footprint.</span>
            </li>
            <li style="display: flex; align-items: flex-start; gap: 10px; font-size: 0.88rem; color: #334155;">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="#16A34A" style="flex-shrink: 0; margin-top: 2px;"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
              <span><strong>Tailored Treatment Plans:</strong> Custom solutions matched to pest biology and your Perth property conditions.</span>
            </li>
            <li style="display: flex; align-items: flex-start; gap: 10px; font-size: 0.88rem; color: #334155;">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="#16A34A" style="flex-shrink: 0; margin-top: 2px;"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
              <span><strong>Clear Upfront Pricing:</strong> Fixed, itemized quotes before treatment commences. Zero hidden surprises.</span>
            </li>
          </ul>
        </div>

        <!-- Direct Contact Box -->
        <div style="background: #0B1F3A; color: #FFFFFF; border-radius: 12px; padding: 28px;">
          <span style="font-size: 0.75rem; text-transform: uppercase; color: var(--color-accent, #D91C24); font-weight: 700; letter-spacing: 0.05em; display: block; margin-bottom: 6px;">Perth Service Desk</span>
          <h4 style="color: #FFFFFF; font-size: 1.15rem; margin-bottom: 12px;">Need Immediate Assistance?</h4>
          <p style="font-size: 0.88rem; color: #CBD5E1; line-height: 1.5; margin-bottom: 18px;">
            For urgent pest questions or same-day inspections across Perth, call us directly or chat on WhatsApp.
          </p>
          
          <div style="display: flex; flex-direction: column; gap: 12px;">
            <a href="tel:<?php echo htmlspecialchars($appConfig['phone_raw'] ?? '+61410148126'); ?>" style="display: flex; align-items: center; gap: 10px; color: #FFFFFF; text-decoration: none; font-weight: 700; font-size: 1.05rem;">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent, #D91C24)" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
              <span><?php echo htmlspecialchars($appConfig['phone_display'] ?? '+61 410 148 126'); ?></span>
            </a>
            <a href="mailto:<?php echo htmlspecialchars($appConfig['email_contact'] ?? 'info@urbanxpestcontrol.com'); ?>" style="display: flex; align-items: center; gap: 10px; color: #CBD5E1; text-decoration: none; font-size: 0.9rem;">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent, #D91C24)" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
              <span><?php echo htmlspecialchars($appConfig['email_contact'] ?? 'info@urbanxpestcontrol.com'); ?></span>
            </a>
            <a href="<?php echo htmlspecialchars(getWhatsAppLink($serviceName)); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp" style="margin-top: 8px; justify-content: center;">
              Chat on WhatsApp
            </a>
          </div>
        </div>

      </div>

    </div>
  </div>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>
