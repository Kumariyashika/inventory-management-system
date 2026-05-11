@extends("staffzone.layouts.app")
@section("title", "My Approvals - Staff Zone")
@section("page_title", "My Approvals")
@section("page_subtitle", "Track your submitted approval requests")
@section("content")
<div class="panel">
    <div class="panel-header"><span class="panel-title">Approval Requests</span></div>
    <table>
        <thead><tr><th>Request ID</th><th>Type</th><th>Description</th><th>Submitted</th><th>Status</th></tr></thead>
        <tbody>
            <tr><td>APR-001</td><td>Stock Adjustment</td><td>Adjust SKU-1004 qty by -10</td><td>Today 9:30 AM</td><td><span class="badge-status status-pending">Awaiting</span></td></tr>
            <tr><td>APR-002</td><td>Overtime Request</td><td>Saturday 4-8 PM coverage</td><td>May 8</td><td><span class="badge-status status-progress">Under Review</span></td></tr>
            <tr><td>APR-003</td><td>Return Authorization</td><td>Customer return RET-088</td><td>May 7</td><td><span class="badge-status status-done">Approved</span></td></tr>
        </tbody>
    </table>
</div>
@endsection
