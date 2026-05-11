@extends("purchasezone.layouts.app")
@section("title", "Sales View - Purchase Zone")
@section("page_title", "Sales Overview")
@section("page_subtitle", "Monitor sales data to forecast procurement needs")
@section("content")
<div class="panel">
    <div class="panel-header"><span class="panel-title">Sales Summary</span></div>
    <table>
        <thead><tr><th>Period</th><th>Total Orders</th><th>Units Sold</th><th>Revenue</th><th>Top Product</th></tr></thead>
        <tbody>
            <tr><td>Today</td><td>15</td><td>48 units</td><td>Rs. 42,500</td><td>Office Chair Pro</td></tr>
            <tr><td>This Week</td><td>87</td><td>312 units</td><td>Rs. 2,85,000</td><td>Ergonomic Desk</td></tr>
            <tr><td>This Month</td><td>320</td><td>1,248 units</td><td>Rs. 10,40,000</td><td>Office Chair Pro</td></tr>
        </tbody>
    </table>
</div>
@endsection
