@extends("purchasezone.layouts.app")
@section("title", "Production - Purchase Zone")
@section("page_title", "Production Planning")
@section("page_subtitle", "View production requirements for raw material procurement")
@section("content")
<div class="panel">
    <div class="panel-header"><span class="panel-title">Upcoming Production Batches</span></div>
    <table>
        <thead><tr><th>Batch ID</th><th>Product</th><th>Planned Qty</th><th>Materials Required</th><th>Start Date</th><th>Status</th></tr></thead>
        <tbody>
            <tr><td>BATCH-004</td><td>Office Chair Pro</td><td>300 units</td><td>Foam, Steel, Fabric</td><td>May 14</td><td><span class="badge-status status-pending">Materials Needed</span></td></tr>
            <tr><td>BATCH-003</td><td>Monitor Stand</td><td>200 units</td><td>Steel, Rubber</td><td>May 11</td><td><span class="badge-status status-progress">In Production</span></td></tr>
            <tr><td>BATCH-002</td><td>Ergonomic Desk</td><td>100 units</td><td>Wood, Metal, Screws</td><td>May 8</td><td><span class="badge-status status-done">Materials Ready</span></td></tr>
        </tbody>
    </table>
</div>
@endsection
