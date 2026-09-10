<?php
/**
 * UrbanX Pest Control — Footer Partial
 * Professional pest management services for residential and commercial properties across Perth.
 * Operating in accordance with the requirements of the relevant Western Australian pest management licence and applicable legislation.
 * Direct Line: +61 410 148 126
 */
global $appConfig;
require_once __DIR__ . '/../data/config.php';
?>
    </main><!-- /.page-main -->

    <!-- Footer -->
    <footer class="site-footer" role="contentinfo">
      <div class="container">
        <!-- Statutory Western Australian Licensing Notice Strip -->
        <div style="background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.12); border-left: 4px solid var(--color-accent, #D91C24); padding: 14px 20px; border-radius: 8px; margin-bottom: 32px; display: flex; align-items: center; gap: 14px;">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent, #D91C24)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><polyline points="9 12 11 14 15 10"></polyline></svg>
          <p style="margin: 0; font-size: 0.88rem; color: #E2E8F0; line-height: 1.5;">
            <strong>Western Australian Regulatory Compliance:</strong> Pest management services are provided in accordance with the requirements of the relevant Western Australian pest management licence and applicable legislation.
          </p>
        </div>

        <!-- Footer Grid -->
        <div class="footer-grid">
          <!-- Brand Column -->
          <div class="footer-brand">
            <a href="/index.php" class="logo" aria-label="UrbanX Pest Control" style="display: inline-block; background: #FFFFFF; padding: 10px 18px; border-radius: 10px; margin-bottom: 8px; box-shadow: 0 4px 14px rgba(0, 0, 0, 0.25);">
              <img src="/assets/images/logo-horizontal.png" alt="UrbanX Pest Control" class="footer-logo-img" style="height: 42px; width: auto; display: block; object-fit: contain;">
            </a>
            <p style="margin-top: 12px; color: #94A3B8; font-size: 0.875rem; line-height: 1.6;">
              At UrbanX Pest Control, we provide professional pest management services for residential and commercial properties across Perth.
            </p>
            
            <div style="margin-top: 16px; font-size: 0.85rem; color: #CBD5E1;">
              <p style="margin: 0 0 6px 0; display: flex; align-items: center; gap: 8px;">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent, #D91C24)" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                <span>Level 28, 140 St Georges Terrace, Perth WA 6000</span>
              </p>
              <p style="margin: 0 0 6px 0; display: flex; align-items: center; gap: 8px;">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent, #D91C24)" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                <a href="tel:<?php echo htmlspecialchars($appConfig['phone_raw'] ?? '+61410148126'); ?>" style="color: #FFFFFF; font-weight: 600; text-decoration: none;"><?php echo htmlspecialchars($appConfig['phone_display'] ?? '+61 410 148 126'); ?></a>
              </p>
              <p style="margin: 0 0 6px 0; display: flex; align-items: center; gap: 8px;">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent, #D91C24)" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                <a href="mailto:<?php echo htmlspecialchars($appConfig['email_contact'] ?? 'info@urbanxpestcontrol.com'); ?>" style="color: #FFFFFF; font-weight: 600; text-decoration: none;"><?php echo htmlspecialchars($appConfig['email_contact'] ?? 'info@urbanxpestcontrol.com'); ?></a>
              </p>
              <p style="margin: 0;">
                <a href="<?php echo htmlspecialchars(getWhatsAppLink()); ?>" target="_blank" rel="noopener noreferrer" style="color: #25D366; font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; gap: 8px;">
                  <svg width="20" height="20" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" style="flex-shrink: 0;">
                    <path d="M16 0C7.163 0 0 7.163 0 16c0 2.825.738 5.488 2.025 7.8L.7 31.3l7.688-1.988A15.93 15.93 0 0016 32c8.837 0 16-7.163 16-16S24.837 0 16 0z" fill="#25D366"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M22.5 19.3c-.3-.15-1.78-.88-2.05-1-.28-.12-.48-.18-.68.12-.2.3-.78 1-.95 1.2-.18.2-.35.22-.65.08-.3-.15-1.28-.47-2.43-1.5-.9-.8-1.5-1.78-1.68-2.08-.18-.3-.02-.46.13-.6.13-.13.3-.35.45-.52.15-.18.2-.3.3-.5.1-.2.05-.38-.02-.52-.08-.15-.68-1.65-.95-2.25-.25-.6-.52-.52-.7-.52h-.6c-.2 0-.52.08-.8.38-.28.3-1.05 1.02-1.05 2.5s1.08 2.9 1.22 3.1c.15.2 2.12 3.25 5.15 4.55.72.32 1.28.5 1.72.65.72.22 1.38.2 1.9.12.58-.08 1.78-.72 2.02-1.42.25-.7.25-1.3.18-1.42-.08-.12-.28-.2-.58-.35z" fill="#FFFFFF"/>
                  </svg>
                  <span>WhatsApp Dispatch (+61 410 148 126)</span>
                </a>
              </p>
            </div>
          </div>

          <!-- Pest Management Services -->
          <div class="footer-col">
            <h5>Pest Services</h5>
            <ul>
              <li><a href="/services/household-pest-control">Household Pest Control</a></li>
              <li><a href="/services/cockroach-control">Cockroach Control</a></li>
              <li><a href="/services/ant-control">Ant Control</a></li>
              <li><a href="/services/spider-control">Spider Control</a></li>
              <li><a href="/services/wasp-bee-control">Wasp & Bee Control</a></li>
              <li><a href="/services/silverfish-control">Silverfish Control</a></li>
              <li><a href="/services/fly-control">Fly Control</a></li>
              <li><a href="/services/crawling-flying-insects">Crawling & Flying Insects</a></li>
            </ul>
          </div>

          <!-- Treatments & Inspections -->
          <div class="footer-col">
            <h5>Treatments & Plans</h5>
            <ul>
              <li><a href="/services/preventative-pest-treatments">Preventative Treatments</a></li>
              <li><a href="/services/internal-external-treatments">Internal & External Treatments</a></li>
              <li><a href="/services/pest-inspections-identification">Pest Inspections</a></li>
              <li><a href="/services/targeted-pest-treatments">Targeted Species Plans</a></li>
              <li><a href="/services/termite-control">Termite Protection (AS 3660)</a></li>
              <li><a href="/services/bird-control">Bird Proofing & Exclusion</a></li>
              <li><a href="/services/smart-traps">Digital Smart Monitoring</a></li>
            </ul>
          </div>

          <!-- Company -->
          <div class="footer-col">
            <h5>Why Choose UrbanX</h5>
            <ul>
              <li><a href="/about.php">Licensed Professional</a></li>
              <li><a href="/about-sustainability.php">Safe & Responsible Practices</a></li>
              <li><a href="/services.php">Residential & Commercial</a></li>
              <li><a href="/book.php">Tailored Treatment Plans</a></li>
              <li><a href="/contact.php">Clear Upfront Pricing</a></li>
              <li><a href="/about-locations.php">Perth Service Areas</a></li>
              <li><a href="/insights.php">Pest Identification Guides</a></li>
            </ul>
          </div>

          <!-- Direct Dispatch -->
          <div class="footer-col">
            <h5>Perth Service</h5>
            <div style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.12); padding: 14px; border-radius: 8px; margin-bottom: 12px;">
              <span style="font-size: 0.75rem; text-transform: uppercase; color: #34D399; font-weight: 700; letter-spacing: 0.05em; display: block; margin-bottom: 4px;">Perth Service Areas</span>
              <strong style="color: #fff; font-size: 0.925rem; display: block; margin-bottom: 4px;">Fast Local Dispatch</strong>
              <p style="font-size: 0.775rem; color: #94A3B8; margin: 0;">Perth CBD, Inner Suburbs, North, South East, Eastern & Western Suburbs.</p>
            </div>
            <a href="/book.php" class="btn btn-primary btn-sm" style="width: 100%; justify-content: center;">Book Pest Assessment</a>
          </div>
        </div>

        <!-- Trust Pillars ("Why Choose UrbanX") -->
        <div class="footer-certs">
          <div class="footer-cert">
            <div class="footer-cert-icon">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><polyline points="9 12 11 14 15 10"></polyline></svg>
            </div>
            <span>Licensed Pest Management Professional</span>
          </div>
          <div class="footer-cert">
            <div class="footer-cert-icon">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"></path><path d="M7 12l3-7 4 14 3-7"></path></svg>
            </div>
            <span>Safe & Responsible Practices</span>
          </div>
          <div class="footer-cert">
            <div class="footer-cert-icon">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path></svg>
            </div>
            <span>Residential & Commercial Services</span>
          </div>
          <div class="footer-cert">
            <div class="footer-cert-icon">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
            </div>
            <span>Clear Upfront Pricing</span>
          </div>
        </div>

        <!-- Bottom Row -->
        <div class="footer-bottom">
          <p>&copy; <?php echo date('Y'); ?> UrbanX Pest Control. Professional pest management services across Perth, Western Australia. Operating under relevant Western Australian pest management licensing.</p>
          <div class="footer-legal">
            <a href="#">Privacy Policy (Australia)</a>
            <a href="#">Western Australian Licensing Compliance</a>
            <a href="#">Terms of Service</a>
          </div>
        </div>
      </div>
    </footer>

    <!-- Dedicated Service Booking Modal -->
    <?php include __DIR__ . '/service-booking-modal.php'; ?>

    <!-- Floating WhatsApp Action Widget -->
    <?php include __DIR__ . '/whatsapp-widget.php'; ?>

    <!-- JavaScript -->
    <script src="/js/nav.js"></script>
    <script src="/js/carousel.js"></script>
    <script src="/js/counters.js"></script>
    <script src="/js/form-validation.js"></script>
    <script src="/js/scroll-reveal.js"></script>
    <script src="/js/booking-modal.js"></script>
  </div><!-- /.page-wrapper -->
</body>
</html>
