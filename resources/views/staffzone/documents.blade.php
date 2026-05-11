@extends("staffzone.layouts.app")
@section("title", "Documents - Staff Zone")
@section("page_title", "Documents")
@section("page_subtitle", "Access and upload your documents")
@section("content")
<div class="panel">
    <div class="panel-header"><span class="panel-title">My Documents</span></div>
    <table>
        <thead><tr><th>Document</th><th>Type</th><th>Size</th><th>Uploaded</th><th>Action</th></tr></thead>
        <tbody>
            <tr><td>Daily Report May 9.pdf</td><td>PDF</td><td>234 KB</td><td>Today</td><td><a href="#" style="color:var(--primary);font-weight:600">View</a></td></tr>
            <tr><td>Inventory Audit.xlsx</td><td>Excel</td><td>512 KB</td><td>May 8</td><td><a href="#" style="color:var(--primary);font-weight:600">View</a></td></tr>
            <tr><td>Return Form RET-088.pdf</td><td>PDF</td><td>125 KB</td><td>May 7</td><td><a href="#" style="color:var(--primary);font-weight:600">View</a></td></tr>
        </tbody>
    </table>
</div>
@endsection
