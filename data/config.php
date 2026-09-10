<?php
/**
 * UrbanX Pest Control — Central Application Configuration
 * Professional pest management services for residential and commercial properties across Perth, Western Australia.
 * Operating in accordance with the relevant Western Australian pest management licence and applicable legislation.
 * Direct Line: +61 410 148 126
 */

$settingsFile = __DIR__ . '/settings.json';

$defaultConfig = [
    'company_name'       => 'UrbanX Pest Control',
    'brand_name'         => 'UrbanX',
    'phone_display'      => '+61 410 148 126',
    'phone_raw'          => '+61410148126',
    'email_contact'      => 'info@urbanxpestcontrol.com',
    'whatsapp_number'    => '+61410148126',
    'whatsapp_msg'       => 'Hello UrbanX Pest Control, I would like to request a pest management inspection for our property in Perth.',
    'emergency_phone'    => '+61 410 148 126',
    'headquarters'       => 'Level 28, 140 St Georges Terrace, Perth WA 6000',
    'service_area'       => 'Greater Perth & Western Australia (Residential & Commercial)',
    'licence_statement'  => 'Pest management services are provided in accordance with the requirements of the relevant Western Australian pest management licence and applicable legislation.',
    'admin_username'     => 'admin',
    'admin_password_hash'=> '$2y$10$6W6aIsWukVOLCITVoSx.DO7wWDQdpxHm3o/j4O8BRjG7/KuLjjCXS'
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

// Ensure phone, email, WhatsApp, headquarters and branding are set to Perth details
$appConfig['email_contact']      = !empty($savedSettings['email_contact']) ? $savedSettings['email_contact'] : 'info@urbanxpestcontrol.com';
$appConfig['phone_display']      = '+61 410 148 126';
$appConfig['phone_raw']          = '+61410148126';
$appConfig['whatsapp_number']    = '+61410148126';
$appConfig['headquarters']       = 'Level 28, 140 St Georges Terrace, Perth WA 6000';
$appConfig['company_name']       = 'UrbanX Pest Control';
$appConfig['brand_name']         = 'UrbanX';
$appConfig['service_area']       = 'Greater Perth & Western Australia (Residential & Commercial)';
$appConfig['licence_statement']  = 'Pest management services are provided in accordance with the requirements of the relevant Western Australian pest management licence and applicable legislation.';

/**
 * Helper to build custom WhatsApp link with prefilled text for Perth clients
 */
function getWhatsAppLink($serviceName = '', $customMsg = '') {
    global $appConfig;
    $rawNumber = preg_replace('/[^\d]/', '', $appConfig['whatsapp_number']);
    
    if (!empty($customMsg)) {
        $text = $customMsg;
    } elseif (!empty($serviceName)) {
        $text = "Hello UrbanX Pest Control, I would like to request a pest inspection & quote for {$serviceName} in Perth.";
    } else {
        $text = $appConfig['whatsapp_msg'];
    }
    
    return 'https://wa.me/' . $rawNumber . '?text=' . urlencode($text);
}


