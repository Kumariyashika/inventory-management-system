@extends('adminzone.layouts.app')
@section('title', 'Barcode / QR Scanner')
@section('content')
<div class="page-header-bar">
    <div><h1 class="page-heading">Barcode / QR Scanner</h1><p class="page-subheading">Scan product barcodes or QR codes for quick lookup</p></div>
</div>
<div style="display:flex;gap:16px;align-items:flex-start;flex-wrap:wrap;">
    <div class="form-card" style="flex:1;min-width:280px;text-align:center;">
        <div style="width:80px;height:80px;border-radius:50%;background:#e0e7ff;display:flex;align-items:center;justify-content:center;margin:0 auto 16px;font-size:2.5rem;color:#4f46e5;">
            <i class="ph ph-barcode"></i>
        </div>
        <h3 style="font-size:1rem;font-weight:700;margin-bottom:6px;">Scan a Code</h3>
        <p style="font-size:0.8rem;color:#64748b;margin-bottom:20px;">Point your camera at a barcode or QR code, or enter it manually below.</p>
        <div class="form-field" style="text-align:left;margin-bottom:12px;">
            <label class="field-label">Manual Entry</label>
            <div style="display:flex;gap:8px;">
                <input type="text" class="field-input" placeholder="Enter barcode or SKU..." style="flex:1;">
                <button class="btn-primary-action" style="padding:10px 14px;"><i class="ph ph-magnifying-glass"></i></button>
            </div>
        </div>
    </div>
    <div class="table-container-premium" style="flex:2;min-width:300px;margin-bottom:0;">
        <div class="table-header"><h3 class="table-title">Recent Scans</h3></div>
        <table class="premium-table">
            <thead><tr><th>Scanned At</th><th>User ID</th><th>Name</th><th>Mail ID</th><th>Phone Num</th></tr></thead>
            <tbody>
                <tr><td class="text-muted">10:32 AM</td><td class="text-muted">USR-0001</td><td><strong>kumari yashika</strong></td><td class="text-muted">yashika@example.com</td><td class="text-muted">+91 9876549876</td></tr>
                <tr><td class="text-muted">09:55 AM</td><td class="text-muted">USR-0002</td><td><strong>sneha Sharma</strong></td><td class="text-muted">sneha@example.com</td><td class="text-muted">+91 91234 56789</td></tr>
                <tr><td class="text-muted">09:20 AM</td><td class="text-muted">USR-0004</td><td><strong>Ankit</strong></td><td class="text-muted">ankit@example.com</td><td class="text-muted">+91 88001 22334</td></tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
