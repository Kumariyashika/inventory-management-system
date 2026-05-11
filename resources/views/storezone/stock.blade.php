@extends("storezone.layouts.app")
@section("title", "Stock - Store Zone")
@section("page_title", "Stock Management")
@section("page_subtitle", "Manage stock-in and stock-out operations")
@section("content")
<div class="panel">
    <div class="panel-header"><span class="panel-title">Stock Movements</span></div>
    <table>
        <thead><tr><th>Reference</th><th>Product</th><th>Type</th><th>Quantity</th><th>Date</th><th>Status</th></tr></thead>
        <tbody>
            <tr><td>STK-IN-001</td><td>Monitor Stand</td><td>Stock In</td><td>+50 units</td><td>Today</td><td><span class="badge-status status-done">Completed</span></td></tr>
            <tr><td>STK-OUT-002</td><td>Office Chair Pro</td><td>Stock Out</td><td>-5 units</td><td>Today</td><td><span class="badge-status status-done">Completed</span></td></tr>
            <tr><td>STK-IN-003</td><td>Keyboard Wireless</td><td>Stock In</td><td>+30 units</td><td>May 8</td><td><span class="badge-status status-pending">Pending</span></td></tr>
        </tbody>
    </table>
</div>
@endsection
