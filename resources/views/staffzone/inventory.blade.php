@extends("staffzone.layouts.app")
@section("title", "Inventory - Staff Zone")
@section("page_title", "Inventory")
@section("page_subtitle", "View and manage current stock levels")
@section("content")
<div class="panel">
    <div class="panel-header"><span class="panel-title">Inventory Overview</span></div>
    <table>
        <thead><tr><th>SKU</th><th>Product</th><th>Category</th><th>Qty in Stock</th><th>Location</th><th>Status</th></tr></thead>
        <tbody>
            <tr><td>SKU-1001</td><td>Office Chair Pro</td><td>Furniture</td><td>142</td><td>Zone A</td><td><span class="badge-status status-done">In Stock</span></td></tr>
            <tr><td>SKU-1002</td><td>Ergonomic Desk</td><td>Furniture</td><td>56</td><td>Zone A</td><td><span class="badge-status status-done">In Stock</span></td></tr>
            <tr><td>SKU-1003</td><td>Monitor Stand</td><td>Electronics</td><td>89</td><td>Zone B</td><td><span class="badge-status status-done">In Stock</span></td></tr>
            <tr><td>SKU-1004</td><td>Keyboard Wireless</td><td>Electronics</td><td>12</td><td>Zone B</td><td><span class="badge-status status-overdue">Low Stock</span></td></tr>
            <tr><td>SKU-1005</td><td>Printer Paper A4</td><td>Stationery</td><td>234</td><td>Zone C</td><td><span class="badge-status status-done">In Stock</span></td></tr>
        </tbody>
    </table>
</div>
@endsection
