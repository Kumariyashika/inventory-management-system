@extends("supplierzone.layouts.app")
@section("title", "Returns - Supplier")
@section("page_title", "Returns")
@section("page_subtitle", "Manage product return requests")
@section("content")
<div class="panel">
    <div class="panel-header"><span class="panel-title">Return Requests</span></div>
    <table>
        <thead><tr><th>Return ID</th><th>Product</th><th>Qty</th><th>Reason</th><th>Requested</th><th>Status</th></tr></thead>
        <tbody>
            <tr><td>RET-2025-012</td><td>Office Chair Pro</td><td>2 units</td><td>Damaged in transit</td><td>May 6</td><td><span class="badge-status status-progress">Processing</span></td></tr>
            <tr><td>RET-2025-011</td><td>Monitor Stand</td><td>5 units</td><td>Wrong specifications</td><td>Apr 28</td><td><span class="badge-status status-done">Accepted</span></td></tr>
        </tbody>
    </table>
</div>
@endsection
