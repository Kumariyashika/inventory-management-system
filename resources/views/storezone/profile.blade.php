@extends("storezone.layouts.app")
@section("title", "Profile - Store Zone")
@section("page_title", "My Profile")
@section("page_subtitle", "View your profile information")
@section("content")
<div class="panel">
    <div class="panel-header"><span class="panel-title">Profile Information</span></div>
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:24px">
        <div><p style="color:var(--text-gray);font-size:13px;margin-bottom:6px">Full Name</p><p style="font-weight:600">Store Manager</p></div>
        <div><p style="color:var(--text-gray);font-size:13px;margin-bottom:6px">Employee ID</p><p style="font-weight:600">EMP-2025-018</p></div>
        <div><p style="color:var(--text-gray);font-size:13px;margin-bottom:6px">Email</p><p style="font-weight:600">store@inventorypro.com</p></div>
        <div><p style="color:var(--text-gray);font-size:13px;margin-bottom:6px">Store Location</p><p style="font-weight:600">Main Store - Block A</p></div>
        <div><p style="color:var(--text-gray);font-size:13px;margin-bottom:6px">Role</p><p style="font-weight:600">Store Manager</p></div>
        <div><p style="color:var(--text-gray);font-size:13px;margin-bottom:6px">Joined</p><p style="font-weight:600">March 10, 2023</p></div>
    </div>
</div>
@endsection
