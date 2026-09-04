<?php
/**
 * UrbanPest — Floating WhatsApp Quick-Consultation Widget
 */
require_once __DIR__ . '/../data/config.php';

$waGlobalLink = getWhatsAppLink('', 'Hello UrbanPest, I would like to consult with a commercial pest biosecurity specialist.');
?>
<!-- Floating WhatsApp Support Trigger -->
<div class="floating-whatsapp">
  <div class="floating-whatsapp-tooltip">
    Emergency Biosecurity Dispatch • <strong>Chat on WhatsApp</strong>
  </div>
  <a href="<?php echo htmlspecialchars($waGlobalLink); ?>" target="_blank" rel="noopener noreferrer" class="floating-whatsapp-btn" title="Chat with an UrbanPest Biosecurity Specialist" aria-label="Contact UrbanPest on WhatsApp">
    <svg width="32" height="32" viewBox="0 0 24 24" fill="currentColor">
      <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.664-.698c.969.586 1.761.887 2.796.887 3.182 0 5.768-2.587 5.768-5.768.001-3.18-2.584-5.772-5.768-5.772zm3.393 8.163c-.144.405-.837.774-1.17.824-.312.045-.694.062-2.18-.553-1.898-.785-3.125-2.73-3.22-2.856-.095-.127-.768-1.021-.768-1.948 0-.927.489-1.383.663-1.572.174-.189.381-.237.508-.237.126 0 .253.002.364.007.117.006.275-.044.43.329.16.386.545 1.33.593 1.428.048.098.08.213.016.34-.064.127-.096.206-.19.317-.095.11-.2.246-.285.331-.095.095-.195.198-.084.388.111.19.493.813 1.057 1.317.727.649 1.339.851 1.53.946.19.095.302.079.414-.047.111-.127.476-.554.603-.744.127-.19.254-.159.428-.095.174.063 1.109.523 1.3.618.19.095.317.143.365.222.048.079.048.46-.096.865z"/>
    </svg>
  </a>
</div>
