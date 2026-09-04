<?php
/**
 * UrbanPest Perth — Central Application Configuration
 * Operating exclusively across Greater Perth, Western Australia.
 * Direct Line: +61 410 148 126
 */

$settingsFile = __DIR__ . '/settings.json';

$defaultConfig = [
    'company_name'    => 'UrbanX Pest Control',
    'phone_display'   => '+61 410 148 126',
    'phone_raw'       => '+61410148126',
    'email_contact'   => 'commercial@urbanpest.com.au',
    'whatsapp_number' => '+61410148126',
    'whatsapp_msg'    => 'Hello UrbanX Pest Control, I would like to request a commercial pest inspection for our facility in Perth.',
    'emergency_phone' => '+61 410 148 126',
    'headquarters'    => 'Level 28, 140 St Georges Terrace, Perth WA 6000',
    'service_area'    => 'Greater Perth & Western Australia Commercial Corridors',
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

// Ensure phone, WhatsApp and headquarters are set to Perth details
$appConfig['phone_display']   = '+61 410 148 126';
$appConfig['phone_raw']       = '+61410148126';
$appConfig['whatsapp_number'] = '+61410148126';
$appConfig['headquarters']    = 'Level 28, 140 St Georges Terrace, Perth WA 6000';
$appConfig['company_name']    = 'UrbanPest Perth Commercial Pest Control';
$appConfig['service_area']    = 'Greater Perth & Western Australia Commercial Corridors';

/**
 * Helper to build custom WhatsApp link with prefilled text for Perth clients
 */
function getWhatsAppLink($serviceName = '', $customMsg = '') {
    global $appConfig;
    $rawNumber = preg_replace('/[^\d]/', '', $appConfig['whatsapp_number']);
    
    if (!empty($customMsg)) {
        $text = $customMsg;
    } elseif (!empty($serviceName)) {
        $text = "Hello UrbanPest Perth, I would like to request a commercial survey & quote for {$serviceName} at our Perth premises.";
    } else {
        $text = $appConfig['whatsapp_msg'];
    }
    
    return 'https://wa.me/' . $rawNumber . '?text=' . urlencode($text);
}
