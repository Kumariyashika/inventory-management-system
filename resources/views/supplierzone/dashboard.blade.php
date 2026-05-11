@extends('supplierzone.layouts.app')
@section('title', 'Supplier Dashboard')
@section('page_title', 'Supplier Dashboard')
@section('page_subtitle', 'Overview of your orders, payments and deliveries')
@section('content')

<div class="stats-grid">
    <div class="stat-card">
        <div class="stat-icon primary"><i class="ph ph-shopping-cart"></i></div>
        <div class="stat-value">24</div>
        <div class="stat-label">Active Purchase Orders</div>
    </div>
    <div class="stat-card">
        <div class="stat-icon warning"><i class="ph ph-receipt"></i></div>
        <div class="stat-value">6</div>
        <div class="stat-label">Pending Invoices</div>
    </div>
    <div class="stat-card">
        <div class="stat-icon success"><i class="ph ph-truck"></i></div>
        <div class="stat-value">8</div>
        <div class="stat-label">Shipments in Transit</div>
    </div>
    <div class="stat-card">
        <div class="stat-icon danger"><i class="ph ph-currency-dollar"></i></div>
        <div class="stat-value">Rs. 2.8L</div>
        <div class="stat-label">Total Outstanding</div>
    </div>
</div>

<div class="panel">
    <div class="panel-header">
        <span class="panel-title">Recent Purchase Orders</span>
        <a href="{{ url('/supplier/purchase') }}" class="panel-action">View All</a>
    </div>
    <table>
        <thead>
            <tr>
                <th>PO Number</th>
                <th>Items</th>
                <th>Amount</th>
                <th>Order Date</th>
                <th>Required By</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>PO-2025-084</td>
                <td>8 items</td>
                <td>Rs. 55,000</td>
                <td>May 5</td>
                <td>May 12</td>
                <td><span class="badge-status status-progress">Processing</span></td>
            </tr>
            <tr>
                <td>PO-2025-083</td>
                <td>5 items</td>
                <td>Rs. 32,000</td>
                <td>May 3</td>
                <td>May 15</td>
                <td><span class="badge-status status-pending">Awaiting Dispatch</span></td>
            </tr>
            <tr>
                <td>PO-2025-082</td>
                <td>4 items</td>
                <td>Rs. 21,500</td>
                <td>Apr 28</td>
                <td>May 10</td>
                <td><span class="badge-status status-done">Delivered</span></td>
            </tr>
        </tbody>
    </table>
</div>

@endsection
