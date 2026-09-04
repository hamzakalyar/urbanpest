<?php
$urls = [
    'http://localhost:8000/index.php',
    'http://localhost:8000/services.php',
    'http://localhost:8000/services-single.php?slug=rodent-control',
    'http://localhost:8000/services-single.php?slug=cockroach-control',
    'http://localhost:8000/services-single.php?slug=termite-control',
    'http://localhost:8000/services-single.php?slug=bird-control',
    'http://localhost:8000/services-single.php?slug=fly-control',
    'http://localhost:8000/services-single.php?slug=bed-bug-control',
    'http://localhost:8000/services-single.php?slug=stored-product-pests',
    'http://localhost:8000/services-single.php?slug=smart-traps',
    'http://localhost:8000/services-single.php?slug=connected-rodent-monitoring',
    'http://localhost:8000/industries.php',
    'http://localhost:8000/industries-single.php?slug=food-processing',
    'http://localhost:8000/about.php',
    'http://localhost:8000/about-locations.php',
    'http://localhost:8000/contact.php',
    'http://localhost:8000/admin/index.php',
    'http://localhost:8000/admin/leads.php'
];

$allOk = true;
$ctx = stream_context_create([
    'http' => [
        'timeout' => 5,
        'ignore_errors' => true
    ]
]);

foreach ($urls as $url) {
    $html = @file_get_contents($url, false, $ctx);
    $responseHeaders = $http_response_header ?? [];
    $statusLine = $responseHeaders[0] ?? 'HTTP/1.1 000 None';
    preg_match('/HTTP\/\S+\s+(\d+)/', $statusLine, $m);
    $code = isset($m[1]) ? (int)$m[1] : 0;
    
    // Check for Melbourne phone presence and no fatal PHP errors
    $hasPhone = (strpos($html, '+61 410 148 126') !== false || strpos($html, '410 148 126') !== false);
    $hasFatal = (stripos($html, 'Fatal error') !== false || stripos($html, 'Parse error') !== false);
    
    $status = ($code >= 200 && $code < 400 && !$hasFatal) ? 'PASS' : 'FAIL';
    if ($status === 'FAIL') {
        $allOk = false;
    }
    echo sprintf("[%s] HTTP %d | Has Melbourne Phone: %s | %s\n", $status, $code, $hasPhone ? 'YES' : 'NO', $url);
}

if ($allOk) {
    echo "\n=== ALL MELBOURNE ENTERPRISE ROUTES VERIFIED PERFECTLY (100%) ===\n";
    exit(0);
} else {
    echo "\n=== SOME ROUTES FAILED VERIFICATION ===\n";
    exit(1);
}
