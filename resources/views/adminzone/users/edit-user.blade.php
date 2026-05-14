@extends('adminzone.layouts.app')
@section('title', 'Edit User')

@section('content')
<div class="page-header-bar">
    <div>
        <h1 class="page-heading">Edit User</h1>
        <p class="page-subheading">Update user details and role</p>
    </div>
</div>

<div class="form-card">
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-grid-2">
            <div class="form-field">
                <label class="field-label">Name</label>
                <input type="text" name="name" value="{{ $user->name }}" class="field-input" required>
            </div>
            <div class="form-field">
                <label class="field-label">Email Address</label>
                <input type="email" name="email" value="{{ $user->email }}" class="field-input" required>
            </div>
            <div class="form-field">
                <label class="field-label">Role</label>
                <select name="role_id" class="field-input" required>
                    <option value="">Select role...</option>
                    @foreach($roles as $role)
                        <option value="{{ $role->id }}" {{ $user->role_id == $role->id ? 'selected' : '' }}>
                            {{ ucfirst($role->roleName) }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-field">
                <label class="field-label">Password (Leave blank to keep current)</label>
                <input type="password" name="password" class="field-input" placeholder="Min 8 characters">
            </div>
            <div class="form-field">
                <label class="field-label">Confirm Password</label>
                <input type="password" name="password_confirmation" class="field-input" placeholder="Repeat password">
            </div>
        </div>

        <div class="form-actions">
            <a href="{{ route('users.index') }}" class="btn-outline" style="text-decoration:none;padding:10px 20px;border:1px solid #cbd5e1;border-radius:6px;color:#475569;">Cancel</a>
            <button type="submit" class="btn-primary-action" style="background:#4361EE;color:white;padding:10px 20px;border:none;border-radius:6px;cursor:pointer;">Update User</button>
        </div>
    </form>
</div>
@endsection
