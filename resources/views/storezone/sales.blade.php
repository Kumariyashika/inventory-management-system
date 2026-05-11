@extends("storezone.layouts.app")
@section("title", "Sales - Store Zone")
@section("page_title", "Sales")
@section("page_subtitle", "View sales transactions from the store")
@section("content")
<div class="panel">
    <div class="panel-header"><span class="panel-title">Sales Orders</span></div>
    <table>
        <thead><tr><th>Order ID</th><th>Customer</th><th>Items</th><th>Total</th><th>Date</th><th>Status</th></tr></thead>
        <tbody>
            <tr><td>SO-512</td><td>Walk-in Customer</td><td>3 items</td><td>Rs. 8,500</td><td>Today</td><td><span class="badge-status status-done">Completed</span></td></tr>
            <tr><td>SO-511</td><td>Acme Corp</td><td>10 items</td><td>Rs. 42,000</td><td>Today</td><td><span class="badge-status status-progress">Processing</span></td></tr>
            <tr><td>SO-510</td><td>TechNova Ltd</td><td>5 items</td><td>Rs. 18,200</td><td>Yesterday</td><td><span class="badge-status status-done">Completed</span></td></tr>
        </tbody>
    </table>
</div>
@endsection
