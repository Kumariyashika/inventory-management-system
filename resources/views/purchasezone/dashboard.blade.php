@extends('purchasezone.layouts.app')
@section('title', 'Purchase Dashboard')
@section('page_title', 'Purchase Dashboard')
@section('page_subtitle', 'Overview of procurement activities and purchase orders')
@section('content')

<div class="stats-grid">
    <div class="stat-card">
        <div class="stat-icon primary"><i class="ph ph-shopping-cart"></i></div>
        <div class="stat-value">32</div>
        <div class="stat-label">Active POs This Month</div>
    </div>
    <div class="stat-card">
        <div class="stat-icon warning"><i class="ph ph-clock"></i></div>
        <div class="stat-value">8</div>
        <div class="stat-label">Awaiting Approval</div>
    </div>
    <div class="stat-card">
        <div class="stat-icon success"><i class="ph ph-check-circle"></i></div>
        <div class="stat-value">18</div>
        <div class="stat-label">POs Delivered</div>
    </div>
    <div class="stat-card">
        <div class="stat-icon danger"><i class="ph ph-currency-dollar"></i></div>
        <div class="stat-value">Rs. 8.5L</div>
        <div class="stat-label">Total Procurement Value</div>
    </div>
</div>

<div class="panel">
    <div class="panel-header">
        <span class="panel-title">Recent Purchase Orders</span>
        <a href="{{ url('/purchase/purchase') }}" class="panel-action">View All</a>
    </div>
    <table>
        <thead>
            <tr>
                <th>PO Number</th>
                <th>Supplier</th>
                <th>Items</th>
                <th>Amount</th>
                <th>Created</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>PO-2025-090</td>
                <td>QuickSupply Co.</td>
                <td>6 items</td>
                <td>Rs. 42,000</td>
                <td>Today</td>
                <td><span class="badge-status status-pending">Awaiting Approval</span></td>
            </tr>
            <tr>
                <td>PO-2025-089</td>
                <td>MegaSource Ltd</td>
                <td>3 items</td>
                <td>Rs. 18,500</td>
                <td>Yesterday</td>
                <td><span class="badge-status status-progress">Processing</span></td>
            </tr>
            <tr>
                <td>PO-2025-088</td>
                <td>FastTrade Inc.</td>
                <td>8 items</td>
                <td>Rs. 55,000</td>
                <td>May 5</td>
                <td><span class="badge-status status-done">Delivered</span></td>
            </tr>
        </tbody>
    </table>
</div>

@endsection
