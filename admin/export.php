<?php
/**
 * UrbanPest — Lead Data Exporter (CSV)
 * Generates an Excel-ready CSV export of commercial enquiries.
 */

require_once __DIR__ . '/auth.php';
requireAdminAuth();

$leadsFile = __DIR__ . '/../data/leads.json';
$leads = [];
if (file_exists($leadsFile)) {
    $decoded = @json_decode(file_get_contents($leadsFile), true);
    if (is_array($decoded)) {
        $leads = $decoded;
    }
}

$filename = 'urbanpest_leads_' . date('Y-m-d_His') . '.csv';

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename="' . $filename . '"');
header('Pragma: no-cache');
header('Expires: 0');

$output = fopen('php://output', 'w');

// UTF-8 BOM for Excel compatibility
fprintf($output, chr(0xEF).chr(0xBB).chr(0xBF));

// Header row
fputcsv($output, [
    'Lead ID',
    'Submission Date',
    'Client Name',
    'Company',
    'Email',
    'Phone',
    'Service Requested',
    'Status',
    'Client IP',
    'Message'
]);

// Data rows
foreach ($leads as $row) {
    fputcsv($output, [
        $row['id'] ?? '',
        $row['created_at'] ?? '',
        $row['name'] ?? '',
        $row['company'] ?? '',
        $row['email'] ?? '',
        $row['phone'] ?? '',
        $row['service_name'] ?? ($row['service'] ?? ''),
        $row['status'] ?? '',
        $row['ip'] ?? '',
        $row['message'] ?? ''
    ]);
}

fclose($output);
exit;
