@extends("supplierzone.layouts.app")
@section("title", "Profile - Supplier")
@section("page_title", "Supplier Profile")
@section("page_subtitle", "View and manage your supplier profile")
@section("content")
<div class="panel">
    <div class="panel-header"><span class="panel-title">Supplier Information</span></div>
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:24px">
        <div><p style="color:var(--text-gray);font-size:13px;margin-bottom:6px">Company Name</p><p style="font-weight:600">QuickSupply Co. Pvt. Ltd.</p></div>
        <div><p style="color:var(--text-gray);font-size:13px;margin-bottom:6px">Supplier ID</p><p style="font-weight:600">SUP-2024-011</p></div>
        <div><p style="color:var(--text-gray);font-size:13px;margin-bottom:6px">Contact Email</p><p style="font-weight:600">contact@quicksupply.com</p></div>
        <div><p style="color:var(--text-gray);font-size:13px;margin-bottom:6px">Phone</p><p style="font-weight:600">+91 98765 43210</p></div>
        <div><p style="color:var(--text-gray);font-size:13px;margin-bottom:6px">GSTIN</p><p style="font-weight:600">27ABCDE1234F1Z5</p></div>
        <div><p style="color:var(--text-gray);font-size:13px;margin-bottom:6px">Verified Since</p><p style="font-weight:600">January 2023</p></div>
    </div>
</div>
@endsection
