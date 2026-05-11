@extends("staffzone.layouts.app")
@section("title", "Purchases - Staff Zone")
@section("page_title", "Purchases")
@section("page_subtitle", "View purchase orders and deliveries")
@section("content")
<div class="panel">
    <div class="panel-header"><span class="panel-title">Purchase Orders</span></div>
    <table>
        <thead><tr><th>PO Number</th><th>Supplier</th><th>Amount</th><th>Items</th><th>Expected Delivery</th><th>Status</th></tr></thead>
        <tbody>
            <tr><td>PO-2025-084</td><td>QuickSupply Co.</td><td>Rs. 55,000</td><td>8 items</td><td>May 12</td><td><span class="badge-status status-done">Approved</span></td></tr>
            <tr><td>PO-2025-083</td><td>MegaSource Ltd</td><td>Rs. 32,000</td><td>5 items</td><td>May 15</td><td><span class="badge-status status-pending">Pending</span></td></tr>
            <tr><td>PO-2025-082</td><td>FastTrade Inc.</td><td>Rs. 21,500</td><td>4 items</td><td>May 10</td><td><span class="badge-status status-done">Received</span></td></tr>
        </tbody>
    </table>
</div>
@endsection
