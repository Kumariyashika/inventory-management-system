@extends("purchasezone.layouts.app")
@section("title", "Documents - Purchase Zone")
@section("page_title", "Documents")
@section("page_subtitle", "Access purchase documents and contracts")
@section("content")
<div class="panel">
    <div class="panel-header"><span class="panel-title">Purchase Documents</span></div>
    <table>
        <thead><tr><th>Document</th><th>Type</th><th>Size</th><th>Date</th><th>Action</th></tr></thead>
        <tbody>
            <tr><td>PO-2025-090.pdf</td><td>Purchase Order</td><td>210 KB</td><td>Today</td><td><a href="#" style="color:var(--primary);font-weight:600">View</a></td></tr>
            <tr><td>QuickSupply Contract 2025.pdf</td><td>Contract</td><td>850 KB</td><td>Jan 2025</td><td><a href="#" style="color:var(--primary);font-weight:600">View</a></td></tr>
            <tr><td>Vendor Rate Card May 2025.xlsx</td><td>Pricing</td><td>340 KB</td><td>May 1</td><td><a href="#" style="color:var(--primary);font-weight:600">View</a></td></tr>
        </tbody>
    </table>
</div>
@endsection
