@extends("purchasezone.layouts.app")
@section("title", "Purchase Orders - Purchase Zone")
@section("page_title", "Purchase Orders")
@section("page_subtitle", "Create and manage all purchase orders")
@section("content")
<div class="panel">
    <div class="panel-header"><span class="panel-title">All Purchase Orders</span></div>
    <table>
        <thead><tr><th>PO Number</th><th>Supplier</th><th>Items</th><th>Amount</th><th>Created</th><th>Expected</th><th>Status</th></tr></thead>
        <tbody>
            <tr><td>PO-2025-090</td><td>QuickSupply Co.</td><td>6</td><td>Rs. 42,000</td><td>Today</td><td>May 16</td><td><span class="badge-status status-pending">Awaiting Approval</span></td></tr>
            <tr><td>PO-2025-089</td><td>MegaSource Ltd</td><td>3</td><td>Rs. 18,500</td><td>May 8</td><td>May 18</td><td><span class="badge-status status-progress">Processing</span></td></tr>
            <tr><td>PO-2025-088</td><td>FastTrade Inc.</td><td>8</td><td>Rs. 55,000</td><td>May 5</td><td>May 12</td><td><span class="badge-status status-done">Delivered</span></td></tr>
            <tr><td>PO-2025-087</td><td>AllGoods Pvt.</td><td>15</td><td>Rs. 1,20,000</td><td>Apr 30</td><td>May 10</td><td><span class="badge-status status-done">Delivered</span></td></tr>
        </tbody>
    </table>
</div>
@endsection
