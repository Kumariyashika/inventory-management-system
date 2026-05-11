@extends("storezone.layouts.app")
@section("title", "Reports - Store Zone")
@section("page_title", "Reports")
@section("page_subtitle", "View store performance reports")
@section("content")
<div class="panel">
    <div class="panel-header"><span class="panel-title">Available Reports</span></div>
    <table>
        <thead><tr><th>Report</th><th>Type</th><th>Period</th><th>Action</th></tr></thead>
        <tbody>
            <tr><td>Daily Sales Report</td><td>Sales</td><td>Today</td><td><a href="#" style="color:var(--primary);font-weight:600">View</a></td></tr>
            <tr><td>Stock Movement Summary</td><td>Inventory</td><td>Weekly</td><td><a href="#" style="color:var(--primary);font-weight:600">View</a></td></tr>
            <tr><td>Low Stock Alert Report</td><td>Inventory</td><td>Auto</td><td><a href="#" style="color:var(--primary);font-weight:600">View</a></td></tr>
        </tbody>
    </table>
</div>
@endsection
