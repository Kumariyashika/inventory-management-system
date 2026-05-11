@extends("staffzone.layouts.app")
@section("title", "Production - Staff Zone")
@section("page_title", "Production")
@section("page_subtitle", "Monitor production batches and progress")
@section("content")
<div class="panel">
    <div class="panel-header"><span class="panel-title">Production Batches</span></div>
    <table>
        <thead><tr><th>Batch ID</th><th>Product</th><th>Quantity</th><th>Start Date</th><th>End Date</th><th>Status</th></tr></thead>
        <tbody>
            <tr><td>BATCH-001</td><td>Office Chair Pro</td><td>200 units</td><td>May 5</td><td>May 10</td><td><span class="badge-status status-done">Completed</span></td></tr>
            <tr><td>BATCH-002</td><td>Ergonomic Desk</td><td>100 units</td><td>May 8</td><td>May 14</td><td><span class="badge-status status-progress">In Progress</span></td></tr>
            <tr><td>BATCH-003</td><td>Monitor Stand</td><td>300 units</td><td>May 11</td><td>May 18</td><td><span class="badge-status status-pending">Scheduled</span></td></tr>
        </tbody>
    </table>
</div>
@endsection
