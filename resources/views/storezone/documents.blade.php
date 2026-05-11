@extends("storezone.layouts.app")
@section("title", "Documents - Store Zone")
@section("page_title", "Documents")
@section("page_subtitle", "Access store documents and files")
@section("content")
<div class="panel">
    <div class="panel-header"><span class="panel-title">Store Documents</span></div>
    <table>
        <thead><tr><th>Document</th><th>Type</th><th>Size</th><th>Date</th><th>Action</th></tr></thead>
        <tbody>
            <tr><td>Store Inventory Audit May.pdf</td><td>PDF</td><td>450 KB</td><td>May 8</td><td><a href="#" style="color:var(--primary);font-weight:600">View</a></td></tr>
            <tr><td>Transfer Form TRF-001.pdf</td><td>PDF</td><td>120 KB</td><td>Today</td><td><a href="#" style="color:var(--primary);font-weight:600">View</a></td></tr>
        </tbody>
    </table>
</div>
@endsection
