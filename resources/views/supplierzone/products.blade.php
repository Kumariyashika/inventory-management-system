@extends("supplierzone.layouts.app")
@section("title", "My Products - Supplier")
@section("page_title", "My Products")
@section("page_subtitle", "View products registered under your supplier account")
@section("content")
<div class="panel">
    <div class="panel-header"><span class="panel-title">Product Catalog</span></div>
    <table>
        <thead><tr><th>Product ID</th><th>Name</th><th>Category</th><th>Unit Price</th><th>Lead Time</th><th>Status</th></tr></thead>
        <tbody>
            <tr><td>PROD-001</td><td>Office Chair Pro</td><td>Furniture</td><td>Rs. 4,500</td><td>7 days</td><td><span class="badge-status status-done">Active</span></td></tr>
            <tr><td>PROD-002</td><td>Ergonomic Desk</td><td>Furniture</td><td>Rs. 8,200</td><td>10 days</td><td><span class="badge-status status-done">Active</span></td></tr>
            <tr><td>PROD-003</td><td>Monitor Stand</td><td>Electronics</td><td>Rs. 1,200</td><td>5 days</td><td><span class="badge-status status-done">Active</span></td></tr>
            <tr><td>PROD-004</td><td>Keyboard Wireless</td><td>Electronics</td><td>Rs. 2,800</td><td>3 days</td><td><span class="badge-status status-pending">Under Review</span></td></tr>
        </tbody>
    </table>
</div>
@endsection
