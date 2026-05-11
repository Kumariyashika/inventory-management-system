<?php
$views = [
    'managerzone' => ['products', 'inventory', 'purchase-requests', 'approvals', 'sales', 'reports', 'profile'],
    'staffzone' => ['stock', 'transfer', 'sales', 'inventory', 'tasks', 'reports', 'profile'],
    'purchasezone' => ['pr', 'rfq', 'vendors', 'send-rfq', 'quotations', 'po', 'tracking', 'reports', 'profile'],
    'storezone' => ['grn', 'stock-in', 'stock-out', 'transfer', 'adjustments', 'summary', 'reports', 'profile'],
    'supplierzone' => ['rfq', 'quotation', 'po', 'po-status', 'invoices', 'profile'],
    'systemzone' => ['reports', 'analytics', 'audit-logs', 'backup', 'alerts', 'settings', 'profile'],
];

foreach ($views as $zone => $files) {
    $layout = $zone . '.layouts.app';
    foreach ($files as $file) {
        $path = __DIR__ . '/resources/views/' . $zone . '/' . $file . '.blade.php';
        $title = ucwords(str_replace('-', ' ', $file));
        $content = "@extends('$layout')\n\n@section('title', '$title')\n\n@section('content')\n<div class=\"metric-card-premium\" style=\"width:100%;\">\n    <div class=\"metric-header\">\n        <span class=\"metric-title\">$title</span>\n    </div>\n    <div class=\"metric-value\" style=\"font-size: 1.2rem; padding: 20px 0;\">\n        Welcome to the $title section.\n    </div>\n</div>\n@endsection\n";
        file_put_contents($path, $content);
    }
}
echo "Done generating views.";
