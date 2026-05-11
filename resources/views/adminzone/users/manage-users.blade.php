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
                <th>Phone</th>
                <th>Role</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @php
            $users = [
                ['id'=>1,'name'=>'Kumari Yashika','email'=>'yashika@example.com','phone'=>'+91 98765 43210','role'=>'Admin','status'=>'Active'],
                ['id'=>2,'name'=>'Rahul Sharma','email'=>'rahul@example.com','phone'=>'+91 91234 56789','role'=>'Warehouse','status'=>'Active'],
                ['id'=>3,'name'=>'Priya Mehta','email'=>'priya@example.com','phone'=>'+91 99887 76655','role'=>'Account','status'=>'Inactive'],
                ['id'=>4,'name'=>'Ankit Verma','email'=>'ankit@example.com','phone'=>'+91 88001 22334','role'=>'Warehouse','status'=>'Active'],
            ];
            @endphp
            @foreach($users as $u)
            <tr>
                <td class="text-muted">{{ $u['id'] }}</td>
                <td><strong>{{ $u['name'] }}</strong></td>
                <td class="text-muted">{{ $u['email'] }}</td>
                <td class="text-muted">{{ $u['phone'] }}</td>
                <td><span class="role-pill role-{{ strtolower($u['role']) }}">{{ $u['role'] }}</span></td>
                <td>
                    @if($u['status'] === 'Active')
                        <span class="status-pill status-completed">Active</span>
                    @else
                        <span class="status-pill status-onhold">Inactive</span>
                    @endif
                </td>
                <td>
                    <div class="action-btns">
                        <button class="action-btn edit-btn" title="Edit"><i class="ph ph-pencil-simple"></i></button>
                        <button class="action-btn delete-btn" title="Delete"><i class="ph ph-trash"></i></button>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="table-footer">
        <span class="table-info">Showing 1 to 4 of 4 users</span>
        <div class="pagination">
            <button class="page-btn"><i class="ph ph-caret-left"></i></button>
            <button class="page-btn active">1</button>
            <button class="page-btn"><i class="ph ph-caret-right"></i></button>
        </div>
    </div>
</div>
@endsection
