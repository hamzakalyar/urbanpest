<?php
/**
 * UrbanPest — Floating WhatsApp Quick-Consultation Widget
 */
require_once __DIR__ . '/../data/config.php';

$waGlobalLink = getWhatsAppLink('', 'Hello UrbanX Pest Control, I would like to request a pest inspection for our property in Perth.');
?>
<!-- Floating WhatsApp Support Trigger -->
<div class="floating-whatsapp">
  <div class="floating-whatsapp-tooltip">
    Perth Pest Dispatch • <strong>Chat on WhatsApp</strong>
  </div>
  <a href="<?php echo htmlspecialchars($waGlobalLink); ?>" target="_blank" rel="noopener noreferrer" class="floating-whatsapp-btn" title="Chat with an UrbanX Pest Specialist" aria-label="Contact UrbanX on WhatsApp">
    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.477 2 12c0 1.89.525 3.66 1.438 5.168L2.05 21.65a.75.75 0 0 0 .9.9l4.582-1.388A9.957 9.957 0 0 0 12 22c5.523 0 10-4.477 10-10S17.523 2 12 2zm4.86 13.67c-.22.61-1.07 1.18-1.74 1.25-.62.06-1.42.09-3.95-1.02-2.92-1.28-4.83-4.27-4.97-4.47-.15-.2-1.18-1.57-1.18-2.99 0-1.42.74-2.12 1-2.41.27-.29.58-.36.78-.36.2 0 .39.01.56.01.18 0 .42-.07.66.5.25.6.85 2.07.93 2.22.07.15.12.33.02.53-.1.2-.15.32-.3.49-.14.17-.31.38-.44.51-.15.15-.3.31-.13.6.17.29.76 1.25 1.63 2.02 1.12.99 2.06 1.3 2.35 1.45.29.14.46.12.63-.07.17-.2.73-.85.93-1.14.2-.29.39-.24.66-.14.27.1 1.71.81 2 .95.3.15.49.22.56.34.07.12.07.71-.15 1.32z" fill="currentColor"/>
    </svg>
  </a>
</div>
