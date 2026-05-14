@extends('adminzone.layouts.app')
@section('title', 'Manage Users')

@section('content')
<div class="page-header-bar">
    <div>
        <h1 class="page-heading">Manage Users</h1>
        <p class="page-subheading">View, edit and manage all system users</p>
    </div>
    <a href="/admin/users/add" class="btn-primary-action">
        <i class="ph ph-plus"></i> Add New User
    </a>
</div>

<div class="table-container-premium" style="margin-bottom:0;">
    <!-- Search & Filter Bar -->
    <div class="table-filter-bar">
        <div class="search-wrap">
            <i class="ph ph-magnifying-glass"></i>
            <input type="text" class="search-input" placeholder="Search users...">
        </div>
        <select class="field-input" style="width:150px; font-size:0.82rem; padding:8px 12px;">
            <option>All Roles</option>
            <option>Admin</option>
            <option>Warehouse</option>
            <option>Account</option>
        </select>
    </div>

    <table class="premium-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email ID</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $u)
            <tr>
                <td class="text-muted">{{ $u->id }}</td>
                <td><strong>{{ $u->name }}</strong></td>
                <td class="text-muted">{{ $u->email }}</td>
                <td><span class="role-pill role-{{ strtolower($u->role->roleName ?? 'none') }}">{{ ucfirst($u->role->roleName ?? 'None') }}</span></td>
                <td>
                    <div class="action-btns" style="display:flex;gap:8px;">
                        <a href="{{ route('users.edit', $u->id) }}" class="action-btn edit-btn" title="Edit" style="color:#64748b;text-decoration:none;"><i class="ph ph-pencil-simple"></i></a>
                        <form action="{{ route('users.destroy', $u->id) }}" method="POST" onsubmit="return confirm('Delete this user?');" style="margin:0;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="action-btn delete-btn" title="Delete" style="background:none;border:none;color:#f43f5e;cursor:pointer;"><i class="ph ph-trash"></i></button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="table-footer">
        <span class="table-info">Showing all {{ $users->count() }} users</span>
    </div>
</div>
@endsection
