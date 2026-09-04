<?php
/**
 * UrbanPest — Central Application Configuration
 * Contains global settings for contact channels, WhatsApp integration, and security parameters.
 */

// Default settings file path
$settingsFile = __DIR__ . '/settings.json';

// Default configuration parameters
$defaultConfig = [
    'company_name'    => 'UrbanPest Commercial Pest Control',
    'phone_display'   => '+44 (0) 800 246 8000',
    'phone_raw'       => '+448002468000',
    'email_contact'   => 'commercial@urbanpest.com',
    'whatsapp_number' => '+447946099100', // Configurable via Admin Panel
    'whatsapp_msg'    => 'Hello UrbanPest, I would like to request an assessment for commercial pest control at my facility.',
    'emergency_phone' => '+44 (0) 800 246 9999',
    'admin_username'  => 'admin',
    // Default hash for 'UrbanPest2026!'
    'admin_password_hash' => '$2y$10$f3N9YQh6jK5u9B8O3KkJQ.E2D9v6rS/YhKqX6aZ/0q2O9l5j8s1uG' 
];

// Load overrides if settings.json exists
if (file_exists($settingsFile)) {
    $savedSettings = @json_decode(file_get_contents($settingsFile), true);
    if (is_array($savedSettings)) {
        $appConfig = array_merge($defaultConfig, $savedSettings);
    } else {
        $appConfig = $defaultConfig;
    }
} else {
    // Generate initial valid bcrypt hash for 'UrbanPest2026!'
    $defaultConfig['admin_password_hash'] = password_hash('UrbanPest2026!', PASSWORD_DEFAULT);
    @file_put_contents($settingsFile, json_encode($defaultConfig, JSON_PRETTY_PRINT));
    $appConfig = $defaultConfig;
}

/**
 * Helper to build custom WhatsApp link with prefilled text
 */
function getWhatsAppLink($serviceName = '', $customMsg = '') {
    global $appConfig;
    $rawNumber = preg_replace('/[^\d]/', '', $appConfig['whatsapp_number']);
    
    if (!empty($customMsg)) {
        $text = $customMsg;
    } elseif (!empty($serviceName)) {
        $text = "Hello UrbanPest, I would like to request a commercial survey & quote for {$serviceName}.";
    } else {
        $text = $appConfig['whatsapp_msg'];
    }
    
    return 'https://wa.me/' . $rawNumber . '?text=' . urlencode($text);
}
