@extends("storezone.layouts.app")
@section("title", "Store Dashboard")
@section("page_title", "Store Dashboard")
@section("page_subtitle", "Overview of store operations and inventory")
@section("content")
<div class="stats-grid">
    <div class="stat-card"><div class="stat-icon primary"><i class="ph ph-package"></i></div><div class="stat-value">1,240</div><div class="stat-label">Total Items in Store</div></div>
    <div class="stat-card"><div class="stat-icon warning"><i class="ph ph-warning"></i></div><div class="stat-value">18</div><div class="stat-label">Low Stock Items</div></div>
    <div class="stat-card"><div class="stat-icon success"><i class="ph ph-currency-dollar"></i></div><div class="stat-value">Rs. 42K</div><div class="stat-label">Today Sales</div></div>
    <div class="stat-card"><div class="stat-icon danger"><i class="ph ph-arrows-left-right"></i></div><div class="stat-value">5</div><div class="stat-label">Pending Transfers</div></div>
</div>
<div class="panel">
    <div class="panel-header"><span class="panel-title">Recent Transactions</span></div>
    <table>
        <thead><tr><th>ID</th><th>Type</th><th>Item</th><th>Qty</th><th>Date</th><th>Status</th></tr></thead>
        <tbody>
            <tr><td>TXN-501</td><td>Sale</td><td>Office Chair Pro</td><td>-5</td><td>Today</td><td><span class="badge-status status-done">Completed</span></td></tr>
            <tr><td>TXN-500</td><td>Stock In</td><td>Monitor Stand</td><td>+50</td><td>Today</td><td><span class="badge-status status-done">Received</span></td></tr>
            <tr><td>TXN-499</td><td>Transfer</td><td>Keyboard Wireless</td><td>-20</td><td>Yesterday</td><td><span class="badge-status status-pending">Pending</span></td></tr>
        </tbody>
    </table>
</div>
@endsection
