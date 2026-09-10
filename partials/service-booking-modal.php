<?php
/**
 * UrbanX Pest Control — Dedicated Service Booking Modal Partial
 * Opens a pre-filled, dedicated booking form for any service without sending the user to a generic contact page.
 */
require_once __DIR__ . '/../data/config.php';
require_once __DIR__ . '/../data/services.php';
?>

<!-- Service Booking Modal -->
<div class="booking-modal-backdrop" id="serviceBookingModalBackdrop" aria-hidden="true">
  <div class="booking-modal-dialog" role="dialog" aria-modal="true" aria-labelledby="bookingModalTitle">
    
    <!-- Modal Close Button -->
    <button type="button" class="booking-modal-close" id="bookingModalClose" aria-label="Close booking modal">
      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
    </button>

    <!-- Modal Form View -->
    <div id="bookingModalFormView">
      <div class="booking-modal-header">
        <div class="booking-modal-badge">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
          Perth Pest Management Dispatch
        </div>
        <h3 id="bookingModalTitle" style="margin: 6px 0 4px 0; font-size: 1.35rem; color: #0B1F3A;">
          Book <span id="bookingModalServiceName" style="color: var(--color-accent, #D91C24);">Pest Service</span>
        </h3>
        <p style="margin: 0; font-size: 0.825rem; color: #64748B;">
          Professional residential and commercial pest management across Perth. Operating under relevant Western Australian licensing.
        </p>
      </div>

      <!-- Service Highlight Chip -->
      <div class="booking-selected-service-pill">
        <div style="display: flex; align-items: center; gap: 8px;">
          <span class="service-pill-icon" id="bookingModalServiceIcon">🛡️</span>
          <div>
            <div style="font-size: 0.7rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.05em; color: #64748B;">Selected Service</div>
            <strong id="bookingModalServiceDisplay" style="color: #0B1F3A; font-size: 0.95rem;">General Household Pest Control</strong>
          </div>
        </div>
        <span style="font-size: 0.75rem; background: #EBF7EE; color: #16A34A; font-weight: 600; padding: 3px 8px; border-radius: 4px;">✓ Locked In</span>
      </div>

      <form id="serviceBookingForm" action="/booking-handler.php" method="POST" class="booking-modal-form">
        <input type="hidden" name="is_ajax" value="1">
        <input type="hidden" name="service" id="bookingModalServiceInput" value="household-pest-control">
        
        <!-- Survey Scope: Residential vs Commercial -->
        <div class="form-group-modal" style="margin-bottom: 14px;">
          <label style="font-size: 0.8125rem; font-weight: 700; color: #0B1F3A; display: block; margin-bottom: 6px;">
            Survey Scope <span class="req">*</span>
          </label>
          <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px;">
            <label id="modalScopeResLabel" style="display: flex; align-items: center; justify-content: center; gap: 8px; border: 2px solid var(--color-accent, #D91C24); background: #FEF2F2; padding: 10px 14px; border-radius: 8px; cursor: pointer; font-weight: 700; font-size: 0.88rem; color: #991B1B; transition: all 0.2s ease;">
              <input type="radio" name="survey_scope" value="Residential Survey" id="modalScopeRes" checked style="accent-color: var(--color-accent, #D91C24);">
              <span>🏡 Residential Survey</span>
            </label>
            <label id="modalScopeCommLabel" style="display: flex; align-items: center; justify-content: center; gap: 8px; border: 1px solid #CBD5E1; background: #FFFFFF; padding: 10px 14px; border-radius: 8px; cursor: pointer; font-weight: 600; font-size: 0.88rem; color: #475569; transition: all 0.2s ease;">
              <input type="radio" name="survey_scope" value="Commercial Survey" id="modalScopeComm" style="accent-color: var(--color-accent, #D91C24);">
              <span>🏢 Commercial Survey</span>
            </label>
          </div>
        </div>

        <div class="grid-2-modal">
          <div class="form-group-modal">
            <label for="book-name">Full Name <span class="req">*</span></label>
            <input type="text" id="book-name" name="name" class="modal-input" placeholder="e.g. David Sterling" required>
          </div>
          <div class="form-group-modal">
            <label for="book-company">Property / Business Name</label>
            <input type="text" id="book-company" name="company" class="modal-input" placeholder="e.g. Residential Home or Business Name">
          </div>
        </div>

        <div class="grid-2-modal">
          <div class="form-group-modal">
            <label for="book-phone">Direct Phone <span class="req">*</span></label>
            <input type="tel" id="book-phone" name="phone" class="modal-input" placeholder="e.g. 0410 148 126" required>
          </div>
          <div class="form-group-modal">
            <label for="book-email">Email Address <span class="req">*</span></label>
            <input type="email" id="book-email" name="email" class="modal-input" placeholder="e.g. d.sterling@example.com.au" required>
          </div>
        </div>

        <div class="grid-2-modal">
          <div class="form-group-modal">
            <label for="book-property">Property / Sector Type</label>
            <select id="book-property" name="property_type" class="modal-input">
              <option value="Residential Home / House">Residential Home / House</option>
              <option value="Residential Unit / Apartment / Strata">Residential Unit / Apartment / Strata</option>
              <option value="Commercial Office">Commercial Office</option>
              <option value="Restaurant / Cafe / Hospitality">Restaurant / Cafe / Hospitality</option>
              <option value="Food Processing / Manufacturing">Food Processing / Manufacturing</option>
              <option value="Warehousing & Logistics">Warehousing & Logistics</option>
              <option value="Retail & Supermarket">Retail & Supermarket</option>
              <option value="Healthcare & Medical">Healthcare & Medical</option>
              <option value="Facilities Management">Facilities Management</option>
              <option value="Other Property">Other Property</option>
            </select>
          </div>
          <div class="form-group-modal">
            <label for="book-date">Preferred Service Date</label>
            <input type="date" id="book-date" name="preferred_date" class="modal-input" value="<?php echo date('Y-m-d', strtotime('+1 day')); ?>" min="<?php echo date('Y-m-d'); ?>">
          </div>
        </div>

        <!-- Dispatch Urgency Selector -->
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
          <label for="book-message">Pest Sighting Details or Property Notes</label>
          <textarea id="book-message" name="message" class="modal-input modal-textarea" rows="2" placeholder="e.g. Activity seen in kitchen and perimeter garden. Looking for upfront pricing and safe treatment plan."></textarea>
        </div>

        <div id="bookingModalError" class="modal-alert-error" style="display:none;"></div>

        <button type="submit" class="btn btn-primary btn-lg btn-modal-submit" id="bookingModalSubmitBtn">
          <span class="btn-text">Confirm Booking Request &rarr;</span>
          <span class="btn-spinner" style="display: none;">Processing...</span>
        </button>

        <div style="text-align: center; margin-top: 10px; font-size: 0.78rem; color: #64748B;">
          Prefer immediate phone booking? Call <a href="tel:<?php echo htmlspecialchars($appConfig['phone_raw'] ?? '+61410148126'); ?>" style="color: var(--color-accent, #D91C24); font-weight: 700; text-decoration: none;"><?php echo htmlspecialchars($appConfig['phone_display'] ?? '+61 410 148 126'); ?></a> or email <a href="mailto:<?php echo htmlspecialchars($appConfig['email_contact'] ?? 'info@urbanxpestcontrol.com'); ?>" style="color: var(--color-navy, #0B1F3A); font-weight: 600; text-decoration: none;"><?php echo htmlspecialchars($appConfig['email_contact'] ?? 'info@urbanxpestcontrol.com'); ?></a>
        </div>
      </form>
    </div>

    <!-- Modal Success View -->
    <div id="bookingModalSuccessView" style="display: none; text-align: center; padding: 24px 12px;">
      <div style="width: 64px; height: 64px; border-radius: 50%; background: #DCFCE7; color: #16A34A; display: inline-flex; align-items: center; justify-content: center; margin-bottom: 16px;">
        <svg width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
      </div>
      <h3 style="color: #0B1F3A; font-size: 1.4rem; margin-bottom: 6px;">Booking Request Received!</h3>
      <div style="display: inline-block; background: #F1F5F9; border: 1px dashed #CBD5E1; padding: 4px 14px; border-radius: 6px; font-size: 0.85rem; font-weight: 700; color: var(--color-accent, #D91C24); margin-bottom: 12px;">
        Ticket: <span id="bookingSuccessTicket">US-XXXXXX</span>
      </div>
      <p id="bookingSuccessMessage" style="color: #475569; font-size: 0.92rem; line-height: 1.6; max-width: 440px; margin: 0 auto 20px auto;">
        Our Perth pest management team has received your request. A licensed pest management professional will contact you shortly to confirm your booking and upfront pricing.
      </p>

      <div style="display: flex; flex-direction: column; gap: 10px; max-width: 380px; margin: 0 auto;">
        <a href="<?php echo htmlspecialchars(getWhatsAppLink()); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp" style="width: 100%; justify-content: center; padding: 12px;">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" style="margin-right: 6px;"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.664-.698c.969.586 1.761.887 2.796.887 3.182 0 5.768-2.587 5.768-5.768.001-3.18-2.584-5.772-5.768-5.772zm3.393 8.163c-.144.405-.837.774-1.17.824-.312.045-.694.062-2.18-.553-1.898-.785-3.125-2.73-3.22-2.856-.095-.127-.768-1.021-.768-1.948 0-.927.489-1.383.663-1.572.174-.189.381-.237.508-.237.126 0 .253.002.364.007.117.006.275-.044.43.329.16.386.545 1.33.593 1.428.048.098.08.213.016.34-.064.127-.096.206-.19.317-.095.11-.2.246-.285.331-.095.095-.195.198-.084.388.111.19.493.813 1.057 1.317.727.649 1.339.851 1.53.946.19.095.302.079.414-.047.111-.127.476-.554.603-.744.127-.19.254-.159.428-.095.174.063 1.109.523 1.3.618.19.095.317.143.365.222.048.079.048.46-.096.865z"/></svg>
          Need Fast Response? Chat on WhatsApp
        </a>
        <button type="button" class="btn btn-secondary" id="bookingSuccessCloseBtn" style="width: 100%; justify-content: center;">
          Done
        </button>
      </div>
    </div>

  </div>
</div>
