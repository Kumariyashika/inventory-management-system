@extends('adminzone.layouts.app')
@section('title', 'Edit Role')

@section('content')
<div class="page-header-bar">
    <div>
        <h1 class="page-heading">Edit Role: {{ $role->roleName }}</h1>
        <p class="page-subheading">Modify existing role permissions and details</p>
    </div>
    <div style="display:flex;gap:12px;">
        <a href="{{ route('roles.index') }}" class="btn btn-secondary" style="text-decoration:none;display:inline-flex;align-items:center;gap:6px;">
            <i class="ph ph-arrow-left"></i> Back
        </a>
    </div>
</div>

<div class="form-card">
    <form action="{{ route('roles.update', $role->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div style="margin-bottom: 16px;">
            <label for="roleName" style="display:block;margin-bottom:8px;font-weight:500;">Role Name</label>
            <input type="text" id="roleName" name="roleName" value="{{ $role->roleName }}" class="form-input" style="width:100%;padding:10px;border:1px solid #cbd5e1;border-radius:6px;" required>
        </div>

        <div style="margin-bottom: 16px;">
            <label for="status" style="display:block;margin-bottom:8px;font-weight:500;">Status</label>
            <select id="status" name="status" class="form-input" style="width:100%;padding:10px;border:1px solid #cbd5e1;border-radius:6px;" required>
                <option value="active" {{ $role->status === 'active' ? 'selected' : '' }}>Active</option>
                <option value="inactive" {{ $role->status === 'inactive' ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>

        <div style="margin-bottom: 16px;">
            <label style="display:block;margin-bottom:8px;font-weight:500;">Permissions</label>
            @php
                $modules = ['Dashboard','User Management','Products','Warehouse','Inventory/Stock','Sales','Orders','Production','Reports','Scanner','Settings'];
                $currentPerms = $role->permissions_array ?? [];
            @endphp
            <div style="display:flex;flex-wrap:wrap;gap:16px;">
                @foreach($modules as $mod)
                    <div style="display:flex;align-items:center;gap:8px;width:calc(33% - 16px);">
                        <input type="checkbox" id="perm_{{ Str::slug($mod) }}" name="permissions[]" value="{{ $mod }}" {{ in_array($mod, $currentPerms) ? 'checked' : '' }}>
                        <label for="perm_{{ Str::slug($mod) }}">{{ $mod }}</label>
                    </div>
                @endforeach
            </div>
        </div>

        <div style="text-align:right;">
            <button type="submit" class="btn btn-primary" style="background:#4361EE;color:white;padding:10px 20px;border:none;border-radius:6px;cursor:pointer;">
                <i class="ph ph-floppy-disk"></i> Update Role
            </button>
        </div>
    </form>
</div>
@endsection
