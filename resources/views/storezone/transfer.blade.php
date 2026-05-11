@extends("storezone.layouts.app")
@section("title", "Transfers - Store Zone")
@section("page_title", "Transfers")
@section("page_subtitle", "Manage inter-store stock transfers")
@section("content")
<div class="panel">
    <div class="panel-header"><span class="panel-title">Transfer Orders</span></div>
    <table>
        <thead><tr><th>Transfer ID</th><th>Product</th><th>From</th><th>To</th><th>Qty</th><th>Status</th></tr></thead>
        <tbody>
            <tr><td>TRF-001</td><td>Keyboard Wireless</td><td>Store A</td><td>Warehouse B</td><td>20 units</td><td><span class="badge-status status-pending">Pending</span></td></tr>
            <tr><td>TRF-002</td><td>Monitor Stand</td><td>Warehouse C</td><td>Store A</td><td>50 units</td><td><span class="badge-status status-done">Completed</span></td></tr>
        </tbody>
    </table>
</div>
@endsection
