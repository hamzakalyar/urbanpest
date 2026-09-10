<?php
/**
 * UrbanX Pest Control — Individual Service Page
 * Uses ?slug= parameter or URL path to look up service data.
 * Operating in accordance with Western Australian pest management licensing.
 */

require_once __DIR__ . '/data/services.php';
require_once __DIR__ . '/data/sectors.php';
require_once __DIR__ . '/data/config.php';
require_once __DIR__ . '/partials/pest-symbols.php';

$slug = isset($_GET['slug']) ? trim($_GET['slug']) : 'household-pest-control';
$service = isset($allServices[$slug]) ? $allServices[$slug] : ($allServices['household-pest-control'] ?? reset($allServices));
$serviceWhatsAppLink = getWhatsAppLink($service['name']);

$pageTitle = $service['name'] . ' — UrbanX Pest Control Perth';
$pageDescription = $service['short_desc'] . ' Fast-track residential and commercial technical dispatch across Greater Perth, Western Australia.';
$currentPage = 'services';

include __DIR__ . '/partials/header.php';
?>

<!-- Page Hero -->
<?php
$heroTitle       = $service['name'];
$heroDesc        = $service['short_desc'];
$heroTag         = isset($service['accent_tag']) ? $service['accent_tag'] : 'URBANX PERTH TECHNICAL DISPATCH';
$heroBadge       = isset($service['badge_text']) ? $service['badge_text'] : 'Licensed WA Pest Specialists';
$heroImage       = isset($service['image']) ? $service['image'] : '/assets/images/hero-technician.jpg';
$heroWatermark   = isset($service['watermark']) ? $service['watermark'] : strtoupper($service['name']);
$heroStatVal     = isset($service['stat_val']) ? $service['stat_val'] : '100%';
$heroStatLabel   = isset($service['stat_label']) ? $service['stat_label'] : 'Perth Operational Efficacy';
$heroCtaText     = 'Apply for ' . $service['name'] . ' Survey';
$heroCtaLink     = '#apply-service';
$heroBookingSlug = $service['slug'];
$heroWaLink      = $serviceWhatsAppLink;
$heroBreadcrumbs = [
    ['label' => 'Home', 'url' => '/index.php'],
    ['label' => 'Pest Services', 'url' => '/services.php'],
    ['label' => $service['name']]
];
include __DIR__ . '/partials/page-hero.php';
?>

<!-- Perth Rapid Technical Dispatch Banner -->
<section class="section" style="padding-top: var(--space-lg); padding-bottom: var(--space-md);">
  <div class="container">
    <div style="background: #FFFFFF; border-radius: 12px; padding: 24px 32px; box-shadow: 0 4px 16px rgba(15, 23, 42, 0.06); border: 1px solid #E2E8F0; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 20px;">
      <div style="display: flex; align-items: center; gap: 18px;">
        <div style="width: 50px; height: 50px; border-radius: 10px; background: var(--color-accent-bg, #FEF2F2); border: 1px solid var(--color-accent-border, #FECACA); display: flex; align-items: center; justify-content: center; color: var(--color-accent, #D91C24); flex-shrink: 0;">
          <svg width="28" height="28" viewBox="0 0 24 24" fill="#25D366">
            <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.664-.698c.969.586 1.761.887 2.796.887 3.182 0 5.768-2.587 5.768-5.768.001-3.18-2.584-5.772-5.768-5.772zm3.393 8.163c-.144.405-.837.774-1.17.824-.312.045-.694.062-2.18-.553-1.898-.785-3.125-2.73-3.22-2.856-.095-.127-.768-1.021-.768-1.948 0-.927.489-1.383.663-1.572.174-.189.381-.237.508-.237.126 0 .253.002.364.007.117.006.275-.044.43.329.16.386.545 1.33.593 1.428.048.098.08.213.016.34-.064.127-.096.206-.19.317-.095.11-.2.246-.285.331-.095.095-.195.198-.084.388.111.19.493.813 1.057 1.317.727.649 1.339.851 1.53.946.19.095.302.079.414-.047.111-.127.476-.554.603-.744.127-.19.254-.159.428-.095.174.063 1.109.523 1.3.618.19.095.317.143.365.222.048.079.048.46-.096.865z"/>
          </svg>
        </div>
        <div>
          <div style="font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.06em; font-weight: 700; color: var(--color-accent, #D91C24); margin-bottom: 2px;">
            Perth Technical Dispatch
          </div>
          <h3 style="font-family: var(--font-heading); font-size: 1.15rem; color: #0B1320; margin: 0; font-weight: 700;">
            Need Prompt <?php echo htmlspecialchars($service['name']); ?> in Greater Perth?
          </h3>
          <p style="font-size: 0.875rem; color: #64748B; margin: 2px 0 0 0;">
            Direct technical dispatch with on-duty WA licensed technicians for residential and commercial facilities across Perth, Fremantle, Joondalup & WA.
          </p>
        </div>
      </div>

      <div style="display: flex; align-items: center; gap: 10px; flex-wrap: wrap;">
        <a href="#apply-service" class="btn btn-primary" onclick="selectSurveyType('residential');" style="padding: 10px 16px; font-size: 0.875rem; font-weight: 600;">
          🏡 Apply for Residential Survey
        </a>
        <a href="#apply-service" class="btn btn-secondary" onclick="selectSurveyType('commercial');" style="padding: 10px 16px; font-size: 0.875rem; font-weight: 600;">
          🏢 Apply for Commercial Survey
        </a>
        <a href="tel:<?php echo htmlspecialchars($appConfig['phone_raw'] ?? '+61410148126'); ?>" class="btn btn-outline" style="padding: 10px 14px; font-size: 0.875rem; font-weight: 600; border-color: #CBD5E1; color: #0B1F3A;">
          Call <?php echo htmlspecialchars($appConfig['phone_display'] ?? '+61 410 148 126'); ?>
        </a>
        <a href="<?php echo htmlspecialchars($serviceWhatsAppLink); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp" style="padding: 10px 16px; font-size: 0.875rem; font-weight: 700;">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.477 2 12c0 1.89.525 3.66 1.438 5.168L2.05 21.65a.75.75 0 0 0 .9.9l4.582-1.388A9.957 9.957 0 0 0 12 22c5.523 0 10-4.477 10-10S17.523 2 12 2zm4.86 13.67c-.22.61-1.07 1.18-1.74 1.25-.62.06-1.42.09-3.95-1.02-2.92-1.28-4.83-4.27-4.97-4.47-.15-.2-1.18-1.57-1.18-2.99 0-1.42.74-2.12 1-2.41.27-.29.58-.36.78-.36.2 0 .39.01.56.01.18 0 .42-.07.66.5.25.6.85 2.07.93 2.22.07.15.12.33.02.53-.1.2-.15.32-.3.49-.14.17-.31.38-.44.51-.15.15-.3.31-.13.6.17.29.76 1.25 1.63 2.02 1.12.99 2.06 1.3 2.35 1.45.29.14.46.12.63-.07.17-.2.73-.85.93-1.14.2-.29.39-.24.66-.14.27.1 1.71.81 2 .95.3.15.49.22.56.34.07.12.07.71-.15 1.32z" fill="currentColor"/>
          </svg>
          WhatsApp
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Description -->
<section class="section" style="padding-top: 0;">
  <div class="container container-narrow">
    <div style="background: #FFFFFF; border-radius: 12px; padding: 32px; border: 1px solid #E2E8F0; box-shadow: 0 2px 10px rgba(0,0,0,0.03);">
      <h2 style="font-size: 1.5rem; color: #0B1F3A; margin-bottom: 16px; font-weight: 700;">
        About <?php echo htmlspecialchars($service['name']); ?> in Greater Perth
      </h2>
      <p style="font-size: 1.05rem; line-height: 1.75; color: #475569; margin: 0;">
        <?php echo htmlspecialchars($service['description']); ?>
      </p>
    </div>
  </div>
</section>

<!-- Key Challenges Solved -->
<?php if (!empty($service['key_challenges'])): ?>
<section class="section section-alt">
  <div class="container">
    <div class="section-header text-left">
      <span class="section-label">Perth Pest Threats & Biology</span>
      <h2 class="section-title">Critical Threats Solved by <?php echo htmlspecialchars($service['name']); ?></h2>
      <p class="section-subtitle">Vulnerabilities mitigated by our licensed Western Australian technicians and connected biosecurity systems.</p>
    </div>

    <div class="risk-list">
      <?php foreach ($service['key_challenges'] as $challenge): 
        $threat = getPestSymbol($challenge['name']);
      ?>
        <div class="risk-item">
          <div class="risk-item-border" style="background: <?php echo $threat['color']; ?>;"></div>
          
          <div class="risk-media-thumb">
            <img src="<?php echo $threat['pic']; ?>" alt="<?php echo htmlspecialchars($challenge['name']); ?>" class="risk-thumb-img" loading="lazy">
            <div class="risk-thumb-badge" style="color: <?php echo $threat['color']; ?>;">
              <?php echo $threat['svg']; ?>
            </div>
          </div>

          <div class="risk-content">
            <div class="risk-meta-row">
              <span class="risk-meta-tag" style="background: <?php echo $threat['tag_bg']; ?>; color: <?php echo $threat['tag_color']; ?>; border: 1px solid <?php echo $threat['border']; ?>;">
                <?php echo htmlspecialchars($threat['tag']); ?>
              </span>
              <span class="risk-severity-badge">
                <span class="severity-dot" style="background: <?php echo $threat['color']; ?>;"></span>
                <?php echo htmlspecialchars($threat['severity']); ?>
              </span>
            </div>
            <h4><?php echo htmlspecialchars($challenge['name']); ?></h4>
            <p><?php echo htmlspecialchars($challenge['desc']); ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- What's Included -->
<section class="section">
  <div class="container">
    <div class="section-header text-left">
      <span class="section-label">Scope of Treatment</span>
      <h2 class="section-title">Service Inclusions & Treatment Scope</h2>
      <p class="section-subtitle">Every <?php echo htmlspecialchars($service['name']); ?> visit is carried out under strict Western Australian statutory compliance.</p>
    </div>

    <div class="grid grid-2 grid-gap-lg">
      <?php foreach ($service['includes'] as $item): ?>
        <div class="flex items-center gap-md" style="padding: 18px 20px; background: #FFFFFF; border-radius: var(--radius-md); border: 1px solid #E2E8F0; box-shadow: 0 2px 6px rgba(0,0,0,0.02);">
          <div style="width: 32px; height: 32px; border-radius: 50%; background: #ECFDF5; color: #10B981; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
          </div>
          <span style="font-weight: 600; color: #1E293B; font-size: 0.95rem;"><?php echo htmlspecialchars($item); ?></span>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- How It Works -->
<section class="section section-alt">
  <div class="container">
    <div class="section-header">
      <span class="section-label">Our Process</span>
      <h2 class="section-title">How the <?php echo htmlspecialchars($service['name']); ?> Process Works</h2>
      <p class="section-subtitle centered">A systematic, science-backed methodology from initial inspection to post-treatment verification.</p>
    </div>

    <div class="process-steps">
      <?php foreach ($service['steps'] as $idx => $step): ?>
        <div class="process-step">
          <div style="display: inline-block; width: 34px; height: 34px; border-radius: 50%; background: var(--color-accent, #D91C24); color: #fff; font-weight: 700; line-height: 34px; text-align: center; margin-bottom: 12px;">
            <?php echo $idx + 1; ?>
          </div>
          <h4><?php echo htmlspecialchars($step['title']); ?></h4>
          <p><?php echo htmlspecialchars($step['desc']); ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Western Australian Licensing Notice -->
<section class="section-sm" style="background: #FFFFFF; border-top: 1px solid #E2E8F0; border-bottom: 1px solid #E2E8F0;">
  <div class="container">
    <div style="background: #F8FAFC; border-radius: 12px; padding: 22px 28px; border: 1px solid #E2E8F0; border-left: 5px solid var(--color-accent, #D91C24); display: flex; align-items: center; gap: 18px; flex-wrap: wrap;">
      <div style="width: 48px; height: 48px; border-radius: 10px; background: #FEF2F2; color: #D91C24; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><polyline points="9 12 11 14 15 10"></polyline></svg>
      </div>
      <div style="flex: 1; min-width: 260px;">
        <strong style="color: #0B1F3A; font-size: 1.05rem; display: block; margin-bottom: 3px;">Western Australian Statutory Licensing Compliance</strong>
        <p style="margin: 0; font-size: 0.88rem; color: #475569; line-height: 1.5;">Pest management services are provided in accordance with the requirements of the relevant Western Australian pest management licence and applicable legislation. Operating strictly across Greater Perth, Western Australia.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============================================
     DIRECT ON-PAGE APPLICATION & SURVEY REQUEST FORM
     ============================================ -->
<section class="section" id="apply-service" style="background: linear-gradient(180deg, #F8FAFC 0%, #EFF6FF 100%); border-top: 1px solid #E2E8F0; padding: var(--space-4xl) 0;">
  <div class="container">
    <div style="max-width: 960px; margin: 0 auto; background: #FFFFFF; border-radius: 16px; box-shadow: 0 12px 36px rgba(11, 31, 58, 0.08), 0 2px 8px rgba(0,0,0,0.04); border: 1px solid #E2E8F0; overflow: hidden;">
      
      <!-- Top header strip -->
      <div style="background: linear-gradient(135deg, #0B1F3A 0%, #152E52 100%); color: #FFFFFF; padding: 32px 36px;">
        <div style="display: inline-flex; align-items: center; gap: 8px; background: rgba(217, 28, 36, 0.2); border: 1px solid rgba(217, 28, 36, 0.4); padding: 4px 12px; border-radius: 20px; font-size: 0.75rem; font-weight: 700; color: #FF8080; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 10px;">
          ⚡ Perth Technical Assessment Dispatch
        </div>
        <h2 style="color: #FFFFFF; font-size: clamp(1.5rem, 3vw, 2.1rem); font-weight: 800; margin: 0 0 8px 0;">
          Apply for <?php echo htmlspecialchars($service['name']); ?> Survey
        </h2>
        <p style="color: #CBD5E1; font-size: 0.95rem; line-height: 1.6; margin: 0;">
          Complete this quick application to book your on-site assessment with a licensed WA technician. Transparent upfront pricing, zero callout surprises, and same-day dispatch available across Greater Perth.
        </p>
      </div>

      <!-- Form Body -->
      <div style="padding: 36px;">
        <form id="serviceApplicationForm" action="/booking-handler.php" method="POST" style="display: flex; flex-direction: column; gap: 20px;">
          <?php echo renderCSRFField(); ?>
          <?php echo renderHoneypotField(); ?>
          <input type="hidden" name="service" value="<?php echo htmlspecialchars($service['slug']); ?>">

          <!-- Property / Survey Scope Toggle -->
          <div>
            <label style="font-size: 0.85rem; font-weight: 700; color: #0B1F3A; display: block; margin-bottom: 8px;">
              Select Survey Type <span style="color: var(--color-accent, #D91C24);">*</span>
            </label>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px;" id="surveyTypeGroup">
              <label style="display: flex; align-items: center; gap: 10px; padding: 14px 18px; border: 2px solid #E2E8F0; border-radius: 10px; cursor: pointer; transition: all 0.2s;" id="label-residential">
                <input type="radio" name="survey_scope" value="Residential Survey" checked style="accent-color: var(--color-accent, #D91C24);">
                <div>
                  <strong style="display: block; font-size: 0.95rem; color: #0B1F3A;">🏡 Residential Survey</strong>
                  <span style="font-size: 0.78rem; color: #64748B;">House, townhouse, unit, strata villa</span>
                </div>
              </label>
              <label style="display: flex; align-items: center; gap: 10px; padding: 14px 18px; border: 2px solid #E2E8F0; border-radius: 10px; cursor: pointer; transition: all 0.2s;" id="label-commercial">
                <input type="radio" name="survey_scope" value="Commercial Survey" style="accent-color: var(--color-accent, #D91C24);">
                <div>
                  <strong style="display: block; font-size: 0.95rem; color: #0B1F3A;">🏢 Commercial Survey</strong>
                  <span style="font-size: 0.78rem; color: #64748B;">Facility, warehouse, restaurant, retail, clinic</span>
                </div>
              </label>
            </div>
          </div>

          <!-- Name & Phone -->
          <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px;">
            <div>
              <label for="app-name" style="font-size: 0.85rem; font-weight: 700; color: #0B1F3A; display: block; margin-bottom: 6px;">
                Full Name <span style="color: var(--color-accent, #D91C24);">*</span>
              </label>
              <input type="text" id="app-name" name="name" class="modal-input" placeholder="e.g. Michael Harris" required style="width:100%;">
            </div>
            <div>
              <label for="app-phone" style="font-size: 0.85rem; font-weight: 700; color: #0B1F3A; display: block; margin-bottom: 6px;">
                Phone Number <span style="color: var(--color-accent, #D91C24);">*</span>
              </label>
              <input type="tel" id="app-phone" name="phone" class="modal-input" placeholder="e.g. 0410 148 126" required style="width:100%;">
            </div>
          </div>

          <!-- Email & Company/Org -->
          <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px;">
            <div>
              <label for="app-email" style="font-size: 0.85rem; font-weight: 700; color: #0B1F3A; display: block; margin-bottom: 6px;">
                Email Address <span style="color: var(--color-accent, #D91C24);">*</span>
              </label>
              <input type="email" id="app-email" name="email" class="modal-input" placeholder="e.g. michael@example.com" required style="width:100%;">
            </div>
            <div>
              <label for="app-company" style="font-size: 0.85rem; font-weight: 700; color: #0B1F3A; display: block; margin-bottom: 6px;">
                Company / Organization (Optional)
              </label>
              <input type="text" id="app-company" name="company" class="modal-input" placeholder="e.g. Harris Logistics WA" style="width:100%;">
            </div>
          </div>

          <!-- Perth Suburb & Property Type -->
          <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px;">
            <div>
              <label for="app-suburb" style="font-size: 0.85rem; font-weight: 700; color: #0B1F3A; display: block; margin-bottom: 6px;">
                Perth Suburb or Street Address <span style="color: var(--color-accent, #D91C24);">*</span>
              </label>
              <input type="text" id="app-suburb" name="property_type" class="modal-input" placeholder="e.g. Osborne Park, Canning Vale, Perth CBD" required style="width:100%;">
            </div>
            <div>
              <label for="app-urgency" style="font-size: 0.85rem; font-weight: 700; color: #0B1F3A; display: block; margin-bottom: 6px;">
                Required Urgency
              </label>
              <select id="app-urgency" name="urgency" class="modal-input" style="width:100%;">
                <option value="Emergency Same-Day Dispatch">⚡ Urgent Same-Day Dispatch</option>
                <option value="Within 24-48 Hours" selected>📅 Within 24–48 Hours</option>
                <option value="Standard Scheduled Inspection">🔍 Scheduled Routine Inspection</option>
              </select>
            </div>
          </div>

          <!-- Message / Notes -->
          <div>
            <label for="app-message" style="font-size: 0.85rem; font-weight: 700; color: #0B1F3A; display: block; margin-bottom: 6px;">
              Pest Sighting & Property Notes
            </label>
            <textarea id="app-message" name="message" class="modal-input modal-textarea" rows="3" placeholder="Describe the pest sightings, building size, or specific inspection requirements..." style="width:100%;"></textarea>
          </div>

          <!-- Submit feedback container -->
          <div id="serviceAppAlert" style="display: none; padding: 12px 18px; border-radius: 8px; font-size: 0.9rem;"></div>

          <!-- Submit Button -->
          <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 16px; margin-top: 10px;">
            <button type="submit" class="btn btn-primary btn-lg" id="serviceAppSubmitBtn" style="padding: 14px 32px; font-size: 1rem; font-weight: 700;">
              Confirm & Submit Application for <?php echo htmlspecialchars($service['name']); ?> &rarr;
            </button>
            <div style="display: flex; align-items: center; gap: 12px;">
              <a href="tel:<?php echo htmlspecialchars($appConfig['phone_raw'] ?? '+61410148126'); ?>" style="color: #0B1F3A; font-weight: 600; text-decoration: none; font-size: 0.9rem;">
                📞 Call: <?php echo htmlspecialchars($appConfig['phone_display'] ?? '+61 410 148 126'); ?>
              </a>
              <span style="color:#CBD5E1;">•</span>
              <a href="<?php echo htmlspecialchars($serviceWhatsAppLink); ?>" target="_blank" rel="noopener noreferrer" style="color: #25D366; font-weight: 700; text-decoration: none; font-size: 0.9rem; display: inline-flex; align-items: center; gap: 6px;">
                <svg width="20" height="20" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" style="flex-shrink: 0; vertical-align: middle;">
                  <path d="M16 0C7.163 0 0 7.163 0 16c0 2.825.738 5.488 2.025 7.8L.7 31.3l7.688-1.988A15.93 15.93 0 0016 32c8.837 0 16-7.163 16-16S24.837 0 16 0z" fill="#25D366"/>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M22.5 19.3c-.3-.15-1.78-.88-2.05-1-.28-.12-.48-.18-.68.12-.2.3-.78 1-.95 1.2-.18.2-.35.22-.65.08-.3-.15-1.28-.47-2.43-1.5-.9-.8-1.5-1.78-1.68-2.08-.18-.3-.02-.46.13-.6.13-.13.3-.35.45-.52.15-.18.2-.3.3-.5.1-.2.05-.38-.02-.52-.08-.15-.68-1.65-.95-2.25-.25-.6-.52-.52-.7-.52h-.6c-.2 0-.52.08-.8.38-.28.3-1.05 1.02-1.05 2.5s1.08 2.9 1.22 3.1c.15.2 2.12 3.25 5.15 4.55.72.32 1.28.5 1.72.65.72.22 1.38.2 1.9.12.58-.08 1.78-.72 2.02-1.42.25-.7.25-1.3.18-1.42-.08-.12-.28-.2-.58-.35z" fill="#FFFFFF"/>
                </svg>
                WhatsApp Dispatch
              </a>
            </div>
          </div>
        </form>
      </div>

    </div>
  </div>
</section>

<script>
function selectSurveyType(type) {
  var rad = document.querySelector('input[name="survey_scope"][value="' + (type === 'commercial' ? 'Commercial Survey' : 'Residential Survey') + '"]');
  if (rad) rad.checked = true;
}

// Interactive application form submission
document.addEventListener('DOMContentLoaded', function() {
  var form = document.getElementById('serviceApplicationForm');
  if (!form) return;

  form.addEventListener('submit', function(e) {
    e.preventDefault();
    var btn = document.getElementById('serviceAppSubmitBtn');
    var alertBox = document.getElementById('serviceAppAlert');
    var originalBtnText = btn.innerHTML;

    btn.disabled = true;
    btn.innerHTML = 'Submitting Application...';
    alertBox.style.display = 'none';

    var formData = new FormData(form);
    formData.append('is_ajax', '1');

    fetch('/booking-handler.php', {
      method: 'POST',
      body: formData,
      headers: { 'Accept': 'application/json' }
    })
    .then(function(res) { return res.json(); })
    .then(function(data) {
      btn.disabled = false;
      btn.innerHTML = originalBtnText;

      if (data && data.success) {
        alertBox.style.display = 'block';
        alertBox.style.background = '#DCFCE7';
        alertBox.style.color = '#15803D';
        alertBox.style.border = '1px solid #86EFAC';
        alertBox.innerHTML = '<strong>Application Received! Ticket #' + (data.ticket_no || 'WA-REQUEST') + '</strong><br>Our Perth dispatch team has received your application for ' + <?php echo json_encode($service['name']); ?> + '. A licensed technician will contact you shortly to confirm your booking and upfront quote.';
        form.reset();
      } else {
        alertBox.style.display = 'block';
        alertBox.style.background = '#FEF2F2';
        alertBox.style.color = '#B91C1C';
        alertBox.style.border = '1px solid #FECACA';
        alertBox.innerText = (data && data.message) ? data.message : 'There was an issue submitting your application. Please call +61 410 148 126 directly.';
      }
    })
    .catch(function(err) {
      btn.disabled = false;
      btn.innerHTML = originalBtnText;
      // Fallback to normal POST if fetch fails
      form.submit();
    });
  });
});
</script>

<!-- Related Solutions -->
<section class="section">
  <div class="container">
    <div class="section-header">
      <span class="section-label">Explore More</span>
      <h2 class="section-title">Other Professional Pest Solutions in Perth</h2>
      <p class="section-subtitle centered">Comprehensive residential and commercial protection across Greater Perth.</p>
    </div>

    <div class="grid grid-3 grid-gap-lg">
      <?php
      $count = 0;
      foreach ($allServices as $otherSlug => $otherSvc):
        if ($otherSlug === $service['slug']) continue;
        if ($count >= 3) break;
        $count++;
      ?>
        <div style="background: #FFFFFF; border-radius: 12px; border: 1px solid #E2E8F0; padding: 24px; display: flex; flex-direction: column; justify-content: space-between;">
          <div>
            <h4 style="font-size: 1.1rem; color: #0B1F3A; margin-bottom: 8px;">
              <a href="/services/<?php echo urlencode($otherSlug); ?>" style="color: inherit; text-decoration: none;">
                <?php echo htmlspecialchars($otherSvc['name']); ?>
              </a>
            </h4>
            <p style="font-size: 0.875rem; color: #64748B; line-height: 1.5;">
              <?php echo htmlspecialchars($otherSvc['short_desc']); ?>
            </p>
          </div>
          <div style="margin-top: 16px;">
            <a href="/services/<?php echo urlencode($otherSlug); ?>" class="link-arrow" style="font-size: 0.85rem; font-weight: 600;">
              View Details & Apply &rarr;
            </a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>
