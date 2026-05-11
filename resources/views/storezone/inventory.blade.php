@extends("storezone.layouts.app")
@section("title", "Inventory - Store Zone")
@section("page_title", "Inventory")
@section("page_subtitle", "View current stock levels in the store")
@section("content")
<div class="panel">
    <div class="panel-header"><span class="panel-title">Store Inventory</span></div>
    <table>
        <thead><tr><th>SKU</th><th>Product</th><th>Category</th><th>Qty</th><th>Min Stock</th><th>Status</th></tr></thead>
        <tbody>
            <tr><td>SKU-1001</td><td>Office Chair Pro</td><td>Furniture</td><td>142</td><td>20</td><td><span class="badge-status status-done">In Stock</span></td></tr>
            <tr><td>SKU-1002</td><td>Ergonomic Desk</td><td>Furniture</td><td>56</td><td>10</td><td><span class="badge-status status-done">In Stock</span></td></tr>
            <tr><td>SKU-1003</td><td>Monitor Stand</td><td>Electronics</td><td>89</td><td>15</td><td><span class="badge-status status-done">In Stock</span></td></tr>
            <tr><td>SKU-1004</td><td>Keyboard Wireless</td><td>Electronics</td><td>12</td><td>20</td><td><span class="badge-status status-overdue">Low Stock</span></td></tr>
        </tbody>
    </table>
</div>
@endsection
