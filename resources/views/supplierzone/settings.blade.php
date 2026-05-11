@extends("supplierzone.layouts.app")
@section("title", "Settings - Supplier")
@section("page_title", "Settings")
@section("page_subtitle", "Manage your portal preferences")
@section("content")
<div class="panel">
    <div class="panel-header"><span class="panel-title">Account Settings</span></div>
    <div style="display:flex;flex-direction:column;gap:16px">
        <div style="display:flex;justify-content:space-between;align-items:center;padding:16px;border:1px solid var(--border);border-radius:8px">
            <div><p style="font-weight:600">Order Notifications</p><p style="color:var(--text-gray);font-size:13px">Get notified when new POs are raised</p></div>
            <label><input type="checkbox" checked> Enabled</label>
        </div>
        <div style="display:flex;justify-content:space-between;align-items:center;padding:16px;border:1px solid var(--border);border-radius:8px">
            <div><p style="font-weight:600">Payment Alerts</p><p style="color:var(--text-gray);font-size:13px">Receive alerts when payment is processed</p></div>
            <label><input type="checkbox" checked> Enabled</label>
        </div>
    </div>
</div>
@endsection
