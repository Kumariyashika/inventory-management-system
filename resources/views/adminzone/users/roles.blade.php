@extends('adminzone.layouts.app')
@section('title', 'Roles & Permissions')

@section('content')
<div class="page-header-bar">
    <div>
        <h1 class="page-heading">Roles & Permissions</h1>
        <p class="page-subheading">Manage what each role can access in the system</p>
    </div>
</div>

@php
$roles = [
    ['name'=>'Admin',     'color'=>'#4f46e5','users'=>1,'desc'=>'Full system access. Can manage users, settings, and all data.'],
    ['name'=>'Warehouse', 'color'=>'#10b981','users'=>2,'desc'=>'Access to inventory, stock in/out, and warehouse management.'],
    ['name'=>'Account',   'color'=>'#f59e0b','users'=>1,'desc'=>'Access to sales, invoices, and financial reports.'],
];
$modules = ['Dashboard','User Management','Products','Warehouse','Inventory/Stock','Sales','Orders','Production','Reports','Scanner','Settings'];
$perms = [
    'Admin'     => array_fill_keys($modules, true),
    'Warehouse' => ['Dashboard'=>true,'Products'=>true,'Warehouse'=>true,'Inventory/Stock'=>true,'User Management'=>false,'Sales'=>false,'Orders'=>true,'Production'=>true,'Reports'=>false,'Scanner'=>true,'Settings'=>false],
    'Account'   => ['Dashboard'=>true,'Sales'=>true,'Reports'=>true,'User Management'=>false,'Products'=>false,'Warehouse'=>false,'Inventory/Stock'=>false,'Orders'=>false,'Production'=>false,'Scanner'=>false,'Settings'=>false],
];
@endphp

<!-- Role Cards -->
<div style="display:flex;gap:16px;margin-bottom:24px;flex-wrap:wrap;">
    @foreach($roles as $r)
    <div class="form-card" style="flex:1;min-width:220px;margin-bottom:0;border-top:4px solid {{ $r['color'] }};">
        <div style="display:flex;align-items:center;gap:10px;margin-bottom:8px;">
            <div style="width:36px;height:36px;border-radius:50%;background:{{ $r['color'] }}20;display:flex;align-items:center;justify-content:center;color:{{ $r['color'] }};font-size:1.2rem;">
                <i class="ph ph-shield-check"></i>
            </div>
            <div>
                <div style="font-weight:700;color:#0f172a;font-size:0.9rem;">{{ $r['name'] }}</div>
                <div style="font-size:0.72rem;color:#64748b;">{{ $r['users'] }} user(s)</div>
            </div>
        </div>
        <p style="font-size:0.78rem;color:#64748b;">{{ $r['desc'] }}</p>
    </div>
    @endforeach
</div>

<!-- Permissions Table -->
<div class="table-container-premium" style="margin-bottom:0;">
    <div class="table-header">
        <h3 class="table-title">Permission Matrix</h3>
    </div>
    <table class="premium-table">
        <thead>
            <tr>
                <th>Module</th>
                @foreach($roles as $r)
                    <th style="text-align:center;">{{ $r['name'] }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach($modules as $mod)
            <tr>
                <td style="font-weight:500;">{{ $mod }}</td>
                @foreach($roles as $r)
                <td style="text-align:center;">
                    @if($perms[$r['name']][$mod] ?? false)
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
@endsection
