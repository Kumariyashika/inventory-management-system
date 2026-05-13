@extends('adminzone.layouts.app')
@section('title', 'Roles & Permissions')

@section('content')
<div class="page-header-bar">
    <div>
        <h1 class="page-heading">Roles & Permissions</h1>
        <p class="page-subheading">Manage what each role can access in the system</p>
    </div>
    <div style="display:flex;gap:12px;">
        <a href="{{ route('roles.create') }}" class="btn btn-primary" style="background:#4361EE;color:white;text-decoration:none;display:inline-flex;align-items:center;gap:6px;padding:8px 16px;border-radius:6px;">
            <i class="ph ph-plus-circle"></i> Add New Role
        </a>
    </div>
</div>

@if(session('success'))
    <div style="background:#10b98120;color:#10b981;padding:12px;border-radius:6px;margin-bottom:16px;">
        {{ session('success') }}
    </div>
@endif

@php
$modules = ['Dashboard','User Management','Products','Warehouse','Inventory/Stock','Sales','Orders','Production','Reports','Scanner','Settings'];
$colors = ['#4f46e5', '#10b981', '#f59e0b', '#ec4899', '#8b5cf6', '#06b6d4'];
@endphp

<!-- Role Cards -->
<div style="display:flex;gap:16px;margin-bottom:24px;flex-wrap:wrap;">
    @foreach($roles as $index => $r)
    @php $color = $colors[$index % count($colors)]; @endphp
    <div class="form-card" style="flex:1;min-width:220px;margin-bottom:0;border-top:4px solid {{ $color }};position:relative;">
        <div style="display:flex;align-items:center;gap:10px;margin-bottom:8px;">
            <div style="width:36px;height:36px;border-radius:50%;background:{{ $color }}20;display:flex;align-items:center;justify-content:center;color:{{ $color }};font-size:1.2rem;">
                <i class="ph ph-shield-check"></i>
            </div>
            <div>
                <div style="font-weight:700;color:#0f172a;font-size:0.9rem;">{{ $r->roleName }}</div>
                <div style="font-size:0.72rem;color:{{ $r->status === 'active' ? '#10b981' : '#f43f5e' }};font-weight:600;">
                    {{ ucfirst($r->status) }}
                </div>
            </div>
        </div>
        <div style="position:absolute;top:16px;right:16px;display:flex;gap:8px;">
            <a href="{{ route('roles.edit', $r->id) }}" style="color:#64748b;text-decoration:none;"><i class="ph ph-pencil-simple"></i></a>
            <form action="{{ route('roles.destroy', $r->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this role?');">
                @csrf
                @method('DELETE')
                <button type="submit" style="background:none;border:none;color:#f43f5e;cursor:pointer;padding:0;"><i class="ph ph-trash"></i></button>
            </form>
        </div>
    </div>
    @endforeach
</div>

<!-- Permissions Table -->
<div class="table-container-premium" style="margin-bottom:0;">
    <div class="table-header">
        <h3 class="table-title">Permission Matrix</h3>
    </div>
    <div style="overflow-x:auto;">
        <table class="premium-table">
            <thead>
                <tr>
                    <th>Module</th>
                    @foreach($roles as $r)
                        <th style="text-align:center;">{{ $r->roleName }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach($modules as $mod)
                <tr>
                    <td style="font-weight:500;">{{ $mod }}</td>
                    @foreach($roles as $r)
                    <td style="text-align:center;">
                        @if(in_array($mod, $r->permissions_array))
                            <i class="ph ph-check-circle" style="color:#10b981;font-size:1.2rem;"></i>
                        @else
                            <i class="ph ph-x-circle" style="color:#e2e8f0;font-size:1.2rem;"></i>
                        @endif
                    </td>
                    @endforeach
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
