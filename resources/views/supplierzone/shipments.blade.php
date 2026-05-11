@extends("supplierzone.layouts.app")
@section("title", "Shipments - Supplier")
@section("page_title", "Shipments")
@section("page_subtitle", "Track and manage your shipments")
@section("content")
<div class="panel">
    <div class="panel-header"><span class="panel-title">Shipment Tracking</span></div>
    <table>
        <thead><tr><th>Shipment ID</th><th>PO Reference</th><th>Items</th><th>Carrier</th><th>Dispatched</th><th>ETA</th><th>Status</th></tr></thead>
        <tbody>
            <tr><td>SHP-2025-088</td><td>PO-2025-084</td><td>8 items</td><td>BlueDart Express</td><td>May 7</td><td>May 12</td><td><span class="badge-status status-progress">In Transit</span></td></tr>
            <tr><td>SHP-2025-087</td><td>PO-2025-083</td><td>5 items</td><td>DTDC</td><td>May 5</td><td>May 10</td><td><span class="badge-status status-progress">In Transit</span></td></tr>
            <tr><td>SHP-2025-086</td><td>PO-2025-082</td><td>4 items</td><td>FedEx India</td><td>Apr 30</td><td>May 5</td><td><span class="badge-status status-done">Delivered</span></td></tr>
        </tbody>
    </table>
</div>
@endsection
