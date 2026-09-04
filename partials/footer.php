<?php
/**
 * UrbanPest Melbourne — Footer Partial
 * Operating exclusively in Greater Melbourne & Regional Victoria Commercial Hubs.
 * Direct Line: +61 410 148 126
 */
global $appConfig;
require_once __DIR__ . '/../data/config.php';
?>
    </main><!-- /.page-main -->

    <!-- Footer -->
    <footer class="site-footer" role="contentinfo">
      <div class="container">
        <!-- Footer Grid -->
        <div class="footer-grid">
          <!-- Brand Column -->
          <div class="footer-brand">
            <a href="/index.php" class="logo" aria-label="UrbanPest Home">
              <svg class="logo-icon" width="36" height="36" viewBox="0 0 40 40" fill="none">
                <path d="M20 3L5 10v10c0 9.55 6.4 18.48 15 20.5 8.6-2.02 15-10.95 15-20.5V10L20 3z" fill="#FFFFFF" opacity="0.15"/>
                <circle cx="20" cy="18" r="4" fill="#0FA968"/>
                <circle cx="20" cy="18" r="8" fill="none" stroke="#0FA968" stroke-width="1.5" opacity="0.5"/>
                <circle cx="20" cy="18" r="12" fill="none" stroke="#0FA968" stroke-width="1" opacity="0.3"/>
                <line x1="20" y1="18" x2="28" y2="10" stroke="#0FA968" stroke-width="2" stroke-linecap="round" opacity="0.7"/>
              </svg>
              <span class="logo-text" style="color:#fff;">Urban<span>Pest</span></span>
            </a>
            <p style="margin-top: 10px; color: #94A3B8; font-size: 0.875rem; line-height: 1.6;">
              Precision commercial pest management and digital connected biosecurity. Operating exclusively across Melbourne CBD, Docklands, Tullamarine, Dandenong, and Regional Victoria.
            </p>
            
            <div style="margin-top: 16px; font-size: 0.85rem; color: #CBD5E1;">
              <p style="margin: 0 0 6px 0; display: flex; align-items: center; gap: 8px;">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#0FA968" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                <span>Level 14, 380 Docklands Drive, Melbourne VIC 3008</span>
              </p>
              <p style="margin: 0 0 6px 0; display: flex; align-items: center; gap: 8px;">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#0FA968" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                <a href="tel:<?php echo htmlspecialchars($appConfig['phone_raw'] ?? '+61410148126'); ?>" style="color: #FFFFFF; font-weight: 600; text-decoration: none;"><?php echo htmlspecialchars($appConfig['phone_display'] ?? '+61 410 148 126'); ?></a>
              </p>
              <p style="margin: 0; display: flex; align-items: center; gap: 8px;">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="#25D366"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.664-.698c.969.586 1.761.887 2.796.887 3.182 0 5.768-2.587 5.768-5.768.001-3.18-2.584-5.772-5.768-5.772zm3.393 8.163c-.144.405-.837.774-1.17.824-.312.045-.694.062-2.18-.553-1.898-.785-3.125-2.73-3.22-2.856-.095-.127-.768-1.021-.768-1.948 0-.927.489-1.383.663-1.572.174-.189.381-.237.508-.237.126 0 .253.002.364.007.117.006.275-.044.43.329.16.386.545 1.33.593 1.428.048.098.08.213.016.34-.064.127-.096.206-.19.317-.095.11-.2.246-.285.331-.095.095-.195.198-.084.388.111.19.493.813 1.057 1.317.727.649 1.339.851 1.53.946.19.095.302.079.414-.047.111-.127.476-.554.603-.744.127-.19.254-.159.428-.095.174.063 1.109.523 1.3.618.19.095.317.143.365.222.048.079.048.46-.096.865z"/></svg>
                <a href="<?php echo htmlspecialchars(getWhatsAppLink()); ?>" target="_blank" rel="noopener noreferrer" style="color: #25D366; font-weight: 600; text-decoration: none;">WhatsApp Dispatch (+61 410 148 126)</a>
              </p>
            </div>
          </div>

          <!-- Services -->
          <div class="footer-col">
            <h5>Commercial Services</h5>
            <ul>
              <li><a href="/services-single.php?slug=rodent-control">Rodent Management</a></li>
              <li><a href="/services-single.php?slug=cockroach-control">Commercial Cockroach Control</a></li>
              <li><a href="/services-single.php?slug=termite-control">Termite Inspection (AS 3660)</a></li>
              <li><a href="/services-single.php?slug=bird-control">Bird Proofing & Netting</a></li>
              <li><a href="/services-single.php?slug=fly-control">Fly Control & Lumnia LED</a></li>
              <li><a href="/services-single.php?slug=bed-bug-control">Bed Bug Heat Treatment</a></li>
              <li><a href="/services-single.php?slug=stored-product-pests">Stored Product Insects</a></li>
              <li><a href="/services-single.php?slug=smart-traps">Digital Connected Traps</a></li>
            </ul>
          </div>

          <!-- Melbourne Industries -->
          <div class="footer-col">
            <h5>Melbourne Sectors</h5>
            <ul>
              <li><a href="/industries-single.php?slug=food-processing">Food Manufacturing</a></li>
              <li><a href="/industries-single.php?slug=logistics-warehousing">Logistics & Supply Chain</a></li>
              <li><a href="/industries-single.php?slug=hospitality">Hotels & Restaurants</a></li>
              <li><a href="/industries-single.php?slug=food-retail">Food Retail & Supermarkets</a></li>
              <li><a href="/industries-single.php?slug=pharmaceutical">Pharmaceutical Cleanrooms</a></li>
              <li><a href="/industries-single.php?slug=healthcare">Hospitals & Healthcare</a></li>
              <li><a href="/industries-single.php?slug=facilities-management">Facilities Management</a></li>
            </ul>
          </div>

          <!-- Company -->
          <div class="footer-col">
            <h5>Company & Compliance</h5>
            <ul>
              <li><a href="/about.php">Our Melbourne Operation</a></li>
              <li><a href="/about-sustainability.php">Environmental IPM</a></li>
              <li><a href="/about-innovation.php">UrbanPest Connect</a></li>
              <li><a href="/about-locations.php">Melbourne Service Map</a></li>
              <li><a href="/about-careers.php">Melbourne Careers</a></li>
              <li><a href="/insights.php">Audit & Regulatory Hub</a></li>
              <li><a href="/admin/index.php">Staff Portal</a></li>
            </ul>
          </div>

          <!-- Direct Dispatch -->
          <div class="footer-col">
            <h5>Service Response</h5>
            <div style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.12); padding: 14px; border-radius: 8px; margin-bottom: 12px;">
              <span style="font-size: 0.75rem; text-transform: uppercase; color: #34D399; font-weight: 700; letter-spacing: 0.05em; display: block; margin-bottom: 4px;">Melbourne Rapid Triage</span>
              <strong style="color: #fff; font-size: 0.925rem; display: block; margin-bottom: 4px;">Same-Day Commercial Dispatch</strong>
              <p style="font-size: 0.775rem; color: #94A3B8; margin: 0;">CBD, Docklands, Tullamarine, Dandenong, Campbellfield & Laverton.</p>
            </div>
            <a href="/contact.php" class="btn btn-primary btn-sm" style="width: 100%; justify-content: center;">Book Commercial Audit</a>
          </div>
        </div>

        <!-- Australian Compliance & Regulatory Badges -->
        <div class="footer-certs">
          <div class="footer-cert">
            <div class="footer-cert-icon">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
            </div>
            <span>AEPMA Member #VIC-4182</span>
          </div>
          <div class="footer-cert">
            <div class="footer-cert-icon">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><path d="M9 12l2 2 4-4"></path></svg>
            </div>
            <span>HACCP Australia Endorsed</span>
          </div>
          <div class="footer-cert">
            <div class="footer-cert-icon">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
            </div>
            <span>AS 3660 Termite Management</span>
          </div>
          <div class="footer-cert">
            <div class="footer-cert-icon">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="16" rx="2"/></svg>
            </div>
            <span>Vic Health Lic. L008412</span>
          </div>
        </div>

        <!-- Bottom Row -->
        <div class="footer-bottom">
          <p>&copy; <?php echo date('Y'); ?> UrbanPest Australia Pty Ltd (ABN 68 142 901 345). Operating exclusively in Greater Melbourne, Victoria.</p>
          <div class="footer-legal">
            <a href="#">Privacy Policy (Australia)</a>
            <a href="#">Victorian Health Compliance</a>
            <a href="#">Terms of Commercial Service</a>
            <a href="#">Whistleblower & Modern Slavery</a>
          </div>
        </div>
      </div>
    </footer>

    <!-- Floating WhatsApp Action Widget -->
    <?php include __DIR__ . '/whatsapp-widget.php'; ?>

    <!-- JavaScript -->
    <script src="/js/nav.js"></script>
    <script src="/js/carousel.js"></script>
    <script src="/js/counters.js"></script>
    <script src="/js/form-validation.js"></script>
    <script src="/js/scroll-reveal.js"></script>
  </div><!-- /.page-wrapper -->
</body>
</html>
