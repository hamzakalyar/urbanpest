<?php
/**
 * UrbanPest Melbourne — Central Application Configuration
 * Operating exclusively across Greater Melbourne, Victoria, Australia.
 */

$settingsFile = __DIR__ . '/settings.json';

$defaultConfig = [
    'company_name'    => 'UrbanPest Melbourne Commercial Pest Control',
    'phone_display'   => '+61 410 148 126',
    'phone_raw'       => '+61410148126',
    'email_contact'   => 'commercial@urbanpest.com.au',
    'whatsapp_number' => '+61410148126',
    'whatsapp_msg'    => 'Hello UrbanPest Melbourne, I would like to request a commercial pest inspection for our facility.',
    'emergency_phone' => '+61 410 148 126',
    'headquarters'    => 'Level 14, 380 Docklands Drive, Melbourne VIC 3008',
    'service_area'    => 'Greater Melbourne & Regional Victoria Commercial Hubs',
    'admin_username'  => 'admin',
    'admin_password_hash' => '$2y$10$f3N9YQh6jK5u9B8O3KkJQ.E2D9v6rS/YhKqX6aZ/0q2O9l5j8s1uG'
];

if (file_exists($settingsFile)) {
    $savedSettings = @json_decode(file_get_contents($settingsFile), true);
    if (is_array($savedSettings)) {
        $appConfig = array_merge($defaultConfig, $savedSettings);
    } else {
        $appConfig = $defaultConfig;
    }
} else {
    $defaultConfig['admin_password_hash'] = password_hash('UrbanPest2026!', PASSWORD_DEFAULT);
    @file_put_contents($settingsFile, json_encode($defaultConfig, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
    $appConfig = $defaultConfig;
}

// Ensure phone and WhatsApp are set to Melbourne numbers
$appConfig['phone_display']   = '+61 410 148 126';
$appConfig['phone_raw']       = '+61410148126';
$appConfig['whatsapp_number'] = '+61410148126';
$appConfig['headquarters']    = 'Level 14, 380 Docklands Drive, Melbourne VIC 3008';

/**
 * Helper to build custom WhatsApp link with prefilled text for Melbourne clients
 */
function getWhatsAppLink($serviceName = '', $customMsg = '') {
    global $appConfig;
    $rawNumber = preg_replace('/[^\d]/', '', $appConfig['whatsapp_number']);
    
    if (!empty($customMsg)) {
        $text = $customMsg;
    } elseif (!empty($serviceName)) {
        $text = "Hello UrbanPest Melbourne, I would like to request a commercial survey & quote for {$serviceName} at our Melbourne premises.";
    } else {
        $text = $appConfig['whatsapp_msg'];
    }
    
    return 'https://wa.me/' . $rawNumber . '?text=' . urlencode($text);
}
