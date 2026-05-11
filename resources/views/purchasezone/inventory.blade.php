@extends("purchasezone.layouts.app")
@section("title", "Inventory - Purchase Zone")
@section("page_title", "Inventory View")
@section("page_subtitle", "Monitor stock levels to plan procurement")
@section("content")
<div class="panel">
    <div class="panel-header"><span class="panel-title">Stock Levels</span></div>
    <table>
        <thead><tr><th>SKU</th><th>Product</th><th>Current Stock</th><th>Min Required</th><th>Reorder Qty</th><th>Status</th></tr></thead>
        <tbody>
            <tr><td>SKU-1001</td><td>Office Chair Pro</td><td>142</td><td>20</td><td>—</td><td><span class="badge-status status-done">Sufficient</span></td></tr>
            <tr><td>SKU-1002</td><td>Ergonomic Desk</td><td>56</td><td>10</td><td>—</td><td><span class="badge-status status-done">Sufficient</span></td></tr>
            <tr><td>SKU-1004</td><td>Keyboard Wireless</td><td>12</td><td>20</td><td>50 units</td><td><span class="badge-status status-overdue">Reorder Now</span></td></tr>
            <tr><td>SKU-1005</td><td>Printer Paper A4</td><td>234</td><td>50</td><td>—</td><td><span class="badge-status status-done">Sufficient</span></td></tr>
        </tbody>
    </table>
</div>
@endsection
