@extends("staffzone.layouts.app")
@section("title", "Sales - Staff Zone")
@section("page_title", "Sales")
@section("page_subtitle", "View sales orders and transactions")
@section("content")
<div class="panel">
    <div class="panel-header"><span class="panel-title">Sales Orders</span></div>
    <table>
        <thead><tr><th>Order ID</th><th>Customer</th><th>Amount</th><th>Items</th><th>Date</th><th>Status</th></tr></thead>
        <tbody>
            <tr><td>SO-2025-512</td><td>Acme Corp</td><td>Rs. 42,500</td><td>5 items</td><td>Today</td><td><span class="badge-status status-done">Completed</span></td></tr>
            <tr><td>SO-2025-511</td><td>TechNova Ltd</td><td>Rs. 18,200</td><td>3 items</td><td>Today</td><td><span class="badge-status status-progress">Processing</span></td></tr>
            <tr><td>SO-2025-510</td><td>Global Traders</td><td>Rs. 75,000</td><td>12 items</td><td>Yesterday</td><td><span class="badge-status status-done">Completed</span></td></tr>
            <tr><td>SO-2025-509</td><td>City Supplies</td><td>Rs. 9,800</td><td>2 items</td><td>May 8</td><td><span class="badge-status status-pending">Pending</span></td></tr>
        </tbody>
    </table>
</div>
@endsection
