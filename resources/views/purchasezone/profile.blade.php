@extends("purchasezone.layouts.app")
@section("title", "Profile - Purchase Zone")
@section("page_title", "My Profile")
@section("page_subtitle", "View your profile and contact details")
@section("content")
<div class="panel">
    <div class="panel-header"><span class="panel-title">Profile Information</span></div>
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:24px">
        <div><p style="color:var(--text-gray);font-size:13px;margin-bottom:6px">Full Name</p><p style="font-weight:600">Purchase Executive</p></div>
        <div><p style="color:var(--text-gray);font-size:13px;margin-bottom:6px">Employee ID</p><p style="font-weight:600">EMP-2025-031</p></div>
        <div><p style="color:var(--text-gray);font-size:13px;margin-bottom:6px">Email</p><p style="font-weight:600">purchase@inventorypro.com</p></div>
        <div><p style="color:var(--text-gray);font-size:13px;margin-bottom:6px">Department</p><p style="font-weight:600">Procurement</p></div>
        <div><p style="color:var(--text-gray);font-size:13px;margin-bottom:6px">Role</p><p style="font-weight:600">Purchase Executive</p></div>
        <div><p style="color:var(--text-gray);font-size:13px;margin-bottom:6px">Joined</p><p style="font-weight:600">June 20, 2023</p></div>
    </div>
</div>
@endsection
