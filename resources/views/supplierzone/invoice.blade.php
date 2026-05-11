@extends("supplierzone.layouts.app")
@section("title", "Invoices - Supplier")
@section("page_title", "Invoices")
@section("page_subtitle", "View and submit invoices for purchase orders")
@section("content")
<div class="panel">
    <div class="panel-header"><span class="panel-title">Invoice History</span></div>
    <table>
        <thead><tr><th>Invoice #</th><th>PO Reference</th><th>Amount</th><th>Submitted</th><th>Due Date</th><th>Status</th></tr></thead>
        <tbody>
            <tr><td>INV-2025-156</td><td>PO-2025-082</td><td>Rs. 21,500</td><td>May 1</td><td>May 15</td><td><span class="badge-status status-progress">Under Review</span></td></tr>
            <tr><td>INV-2025-155</td><td>PO-2025-081</td><td>Rs. 78,000</td><td>Apr 22</td><td>May 7</td><td><span class="badge-status status-done">Paid</span></td></tr>
            <tr><td>INV-2025-154</td><td>PO-2025-080</td><td>Rs. 45,000</td><td>Apr 15</td><td>Apr 30</td><td><span class="badge-status status-done">Paid</span></td></tr>
        </tbody>
    </table>
</div>
@endsection
