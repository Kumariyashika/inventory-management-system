@extends("supplierzone.layouts.app")
@section("title", "Purchase Orders - Supplier")
@section("page_title", "Purchase Orders")
@section("page_subtitle", "View and manage purchase orders from our company")
@section("content")
<div class="panel">
    <div class="panel-header"><span class="panel-title">All Purchase Orders</span></div>
    <table>
        <thead><tr><th>PO Number</th><th>Description</th><th>Items</th><th>Value</th><th>Date</th><th>Status</th></tr></thead>
        <tbody>
            <tr><td>PO-2025-084</td><td>Office furniture batch</td><td>8</td><td>Rs. 55,000</td><td>May 5</td><td><span class="badge-status status-progress">Processing</span></td></tr>
            <tr><td>PO-2025-083</td><td>Electronics accessories</td><td>5</td><td>Rs. 32,000</td><td>May 3</td><td><span class="badge-status status-pending">Awaiting Dispatch</span></td></tr>
            <tr><td>PO-2025-082</td><td>Stationery bulk order</td><td>4</td><td>Rs. 21,500</td><td>Apr 28</td><td><span class="badge-status status-done">Delivered</span></td></tr>
            <tr><td>PO-2025-081</td><td>Monitor accessories</td><td>10</td><td>Rs. 78,000</td><td>Apr 20</td><td><span class="badge-status status-done">Delivered</span></td></tr>
        </tbody>
    </table>
</div>
@endsection
