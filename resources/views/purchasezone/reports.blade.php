@extends("purchasezone.layouts.app")
@section("title", "Reports - Purchase Zone")
@section("page_title", "Procurement Reports")
@section("page_subtitle", "Access detailed procurement and vendor reports")
@section("content")
<div class="panel">
    <div class="panel-header"><span class="panel-title">Available Reports</span></div>
    <table>
        <thead><tr><th>Report Name</th><th>Type</th><th>Period</th><th>Action</th></tr></thead>
        <tbody>
            <tr><td>Purchase Order Summary</td><td>Procurement</td><td>May 2025</td><td><a href="#" style="color:var(--primary);font-weight:600">View</a></td></tr>
            <tr><td>Vendor Performance Report</td><td>Vendors</td><td>Q1 2025</td><td><a href="#" style="color:var(--primary);font-weight:600">View</a></td></tr>
            <tr><td>Reorder Recommendations</td><td>Inventory</td><td>Today</td><td><a href="#" style="color:var(--primary);font-weight:600">View</a></td></tr>
            <tr><td>Procurement Cost Analysis</td><td>Finance</td><td>Apr 2025</td><td><a href="#" style="color:var(--primary);font-weight:600">View</a></td></tr>
        </tbody>
    </table>
</div>
@endsection
