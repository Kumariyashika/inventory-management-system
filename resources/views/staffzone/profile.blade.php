@extends("staffzone.layouts.app")
@section("title", "Profile - Staff Zone")
@section("page_title", "My Profile")
@section("page_subtitle", "View and update your profile information")
@section("content")
<div class="panel">
    <div class="panel-header"><span class="panel-title">Profile Information</span></div>
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:24px">
        <div><p style="color:var(--text-gray);font-size:13px;margin-bottom:6px">Full Name</p><p style="font-weight:600">Staff User</p></div>
        <div><p style="color:var(--text-gray);font-size:13px;margin-bottom:6px">Employee ID</p><p style="font-weight:600">EMP-2025-042</p></div>
        <div><p style="color:var(--text-gray);font-size:13px;margin-bottom:6px">Email</p><p style="font-weight:600">staff@inventorypro.com</p></div>
        <div><p style="color:var(--text-gray);font-size:13px;margin-bottom:6px">Department</p><p style="font-weight:600">Operations</p></div>
        <div><p style="color:var(--text-gray);font-size:13px;margin-bottom:6px">Role</p><p style="font-weight:600">Staff Member</p></div>
        <div><p style="color:var(--text-gray);font-size:13px;margin-bottom:6px">Joined</p><p style="font-weight:600">January 15, 2024</p></div>
    </div>
</div>
@endsection
