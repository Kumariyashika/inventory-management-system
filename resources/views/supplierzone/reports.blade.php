@extends("supplierzone.layouts.app")
@section("title", "Reports - Supplier")
@section("page_title", "Reports")
@section("page_subtitle", "View your business performance reports")
@section("content")
<div class="panel">
    <div class="panel-header"><span class="panel-title">Available Reports</span></div>
    <table>
        <thead><tr><th>Report</th><th>Period</th><th>Value</th><th>Action</th></tr></thead>
        <tbody>
            <tr><td>Monthly Order Summary</td><td>May 2025</td><td>Rs. 1,08,500</td><td><a href="#" style="color:var(--primary);font-weight:600">View</a></td></tr>
            <tr><td>Payment History</td><td>Q1 2025</td><td>Rs. 4,25,000</td><td><a href="#" style="color:var(--primary);font-weight:600">View</a></td></tr>
            <tr><td>Delivery Performance</td><td>Apr 2025</td><td>96% on-time</td><td><a href="#" style="color:var(--primary);font-weight:600">View</a></td></tr>
        </tbody>
    </table>
</div>
@endsection
