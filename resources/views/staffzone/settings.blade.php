@extends("staffzone.layouts.app")
@section("title", "Settings - Staff Zone")
@section("page_title", "Settings")
@section("page_subtitle", "Manage your account preferences")
@section("content")
<div class="panel">
    <div class="panel-header"><span class="panel-title">Account Settings</span></div>
    <div style="display:flex;flex-direction:column;gap:16px">
        <div style="display:flex;justify-content:space-between;align-items:center;padding:16px;border:1px solid var(--border);border-radius:8px">
            <div><p style="font-weight:600">Email Notifications</p><p style="color:var(--text-gray);font-size:13px">Receive task and approval alerts</p></div>
            <label><input type="checkbox" checked> Enabled</label>
        </div>
        <div style="display:flex;justify-content:space-between;align-items:center;padding:16px;border:1px solid var(--border);border-radius:8px">
            <div><p style="font-weight:600">Change Password</p><p style="color:var(--text-gray);font-size:13px">Update your login password</p></div>
            <button style="padding:8px 16px;background:var(--primary);color:white;border:none;border-radius:8px;cursor:pointer;font-weight:600">Update</button>
        </div>
    </div>
</div>
@endsection
