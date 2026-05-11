@extends("purchasezone.layouts.app")
@section("title", "My Approvals - Purchase Zone")
@section("page_title", "My Approvals")
@section("page_subtitle", "Track submitted purchase requisitions and approvals")
@section("content")
<div class="panel">
    <div class="panel-header"><span class="panel-title">Approval Requests</span></div>
    <table>
        <thead><tr><th>Reference</th><th>Type</th><th>Value</th><th>Submitted</th><th>Status</th></tr></thead>
        <tbody>
            <tr><td>PO-2025-090</td><td>Purchase Order</td><td>Rs. 42,000</td><td>Today</td><td><span class="badge-status status-pending">Awaiting Manager</span></td></tr>
            <tr><td>PR-2025-015</td><td>Purchase Requisition</td><td>Rs. 18,500</td><td>May 8</td><td><span class="badge-status status-progress">Under Review</span></td></tr>
            <tr><td>PO-2025-088</td><td>Purchase Order</td><td>Rs. 55,000</td><td>May 5</td><td><span class="badge-status status-done">Approved</span></td></tr>
        </tbody>
    </table>
</div>
@endsection
