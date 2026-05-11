@extends("staffzone.layouts.app")
@section("title", "Reports - Staff Zone")
@section("page_title", "Reports")
@section("page_subtitle", "Access operational reports and summaries")
@section("content")
<div class="panel">
    <div class="panel-header"><span class="panel-title">Available Reports</span></div>
    <table>
        <thead><tr><th>Report Name</th><th>Type</th><th>Period</th><th>Action</th></tr></thead>
        <tbody>
            <tr><td>Daily Sales Summary</td><td>Sales</td><td>Today</td><td><a href="#" style="color:var(--primary);font-weight:600">View</a></td></tr>
            <tr><td>Inventory Status Report</td><td>Inventory</td><td>Weekly</td><td><a href="#" style="color:var(--primary);font-weight:600">View</a></td></tr>
            <tr><td>Stock Movement Log</td><td>Inventory</td><td>Monthly</td><td><a href="#" style="color:var(--primary);font-weight:600">View</a></td></tr>
            <tr><td>Production Output</td><td>Production</td><td>Weekly</td><td><a href="#" style="color:var(--primary);font-weight:600">View</a></td></tr>
        </tbody>
    </table>
</div>
@endsection
