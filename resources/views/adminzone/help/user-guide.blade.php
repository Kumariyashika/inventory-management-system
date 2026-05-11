@extends('adminzone.layouts.app')
@section('title', 'User Guide')
@section('content')
<div class="page-header-bar">
    <div><h1 class="page-heading">User Guide</h1><p class="page-subheading">Learn how to use every feature of Inventory Pro</p></div>
</div>
<div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:16px;">
    @php
    $sections=[['icon'=>'ph-squares-four','color'=>'#4f46e5','title'=>'Dashboard','desc'=>'Understand the overview metrics, production charts, and order tables on the main dashboard.'],['icon'=>'ph-users','color'=>'#10b981','title'=>'User Management','desc'=>'How to add users, assign roles, manage customers and suppliers.'],['icon'=>'ph-package','color'=>'#f59e0b','title'=>'Products','desc'=>'Adding products, managing categories, and tracking SKUs.'],['icon'=>'ph-stack','color'=>'#8b5cf6','title'=>'Inventory / Stock','desc'=>'Record stock in and out, set reorder levels, track expiry dates.'],['icon'=>'ph-currency-dollar','color'=>'#ef4444','title'=>'Sales','desc'=>'Create and manage invoices, track payment statuses.'],['icon'=>'ph-factory','color'=>'#4f46e5','title'=>'Production','desc'=>'Manage production orders, work orders, plans and BOMs.'],['icon'=>'ph-chart-bar','color'=>'#10b981','title'=>'Reports','desc'=>'View production and quality analytics with exportable reports.'],['icon'=>'ph-barcode','color'=>'#f59e0b','title'=>'Scanner','desc'=>'Use barcode/QR scanning for quick inventory lookups.']];
    @endphp
    @foreach($sections as $s)
    <div class="form-card" style="margin-bottom:0;cursor:pointer;transition:box-shadow 0.2s;" onmouseover="this.style.boxShadow='0 8px 20px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow=''">
        <div style="width:42px;height:42px;border-radius:10px;background:{{ $s['color'] }}18;display:flex;align-items:center;justify-content:center;font-size:1.4rem;color:{{ $s['color'] }};margin-bottom:12px;">
            <i class="ph {{ $s['icon'] }}"></i>
        </div>
        <div style="font-weight:700;color:#0f172a;margin-bottom:6px;font-size:0.9rem;">{{ $s['title'] }}</div>
        <div style="font-size:0.78rem;color:#64748b;">{{ $s['desc'] }}</div>
    </div>
    @endforeach
</div>
@endsection
