@extends('adminzone.layouts.app')
@section('title', 'Add User')

@section('content')
<div class="page-header-bar">
    <div>
        <h1 class="page-heading">Add New User</h1>
        <p class="page-subheading">Create a new system user and assign a role</p>
    </div>
</div>

<div class="form-card">
    <form action="#" method="POST">
        @csrf
        <div class="form-grid-2">
            <div class="form-field">
                <label class="field-label">First Name</label>
                <input type="text" class="field-input" placeholder="Enter first name">
            </div>
            <div class="form-field">
                <label class="field-label">Last Name</label>
                <input type="text" class="field-input" placeholder="Enter last name">
            </div>
            <div class="form-field">
                <label class="field-label">Email Address</label>
                <input type="email" class="field-input" placeholder="user@example.com">
            </div>
            <div class="form-field">
                <label class="field-label">Phone Number</label>
                <input type="text" class="field-input" placeholder="+1 234 567 8900">
            </div>
            <div class="form-field">
                <label class="field-label">Role</label>
                <select class="field-input">
                    <option value="">Select role...</option>
                    <option>Admin</option>
                    <option>Warehouse</option>
                    <option>Account</option>
                </select>
            </div>
            <div class="form-field">
                <label class="field-label">Status</label>
                <select class="field-input">
                    <option>Active</option>
                    <option>Inactive</option>
                </select>
            </div>
            <div class="form-field">
                <label class="field-label">Password</label>
                <input type="password" class="field-input" placeholder="Min 8 characters">
            </div>
            <div class="form-field">
                <label class="field-label">Confirm Password</label>
                <input type="password" class="field-input" placeholder="Repeat password">
            </div>
        </div>

        <div class="form-actions">
            <a href="/admin/users/manage" class="btn-outline">Cancel</a>
            <button type="submit" class="btn-primary-action">Create User</button>
        </div>
    </form>
</div>
@endsection
