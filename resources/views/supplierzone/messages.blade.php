@extends("supplierzone.layouts.app")
@section("title", "Messages - Supplier")
@section("page_title", "Messages")
@section("page_subtitle", "Communicate with the procurement team")
@section("content")
<div class="panel">
    <div class="panel-header"><span class="panel-title">Message Center</span></div>
    <div style="display:flex;flex-direction:column;gap:12px">
        <div style="padding:16px;border:1px solid var(--border);border-radius:8px">
            <div style="display:flex;justify-content:space-between;margin-bottom:8px">
                <p style="font-weight:600">Procurement Team</p>
                <span style="font-size:12px;color:var(--text-gray)">Today 11:30 AM</span>
            </div>
            <p style="color:var(--text-gray);font-size:14px">Please confirm dispatch date for PO-2025-084. We need the items by May 12.</p>
        </div>
        <div style="padding:16px;border:1px solid var(--border);border-radius:8px">
            <div style="display:flex;justify-content:space-between;margin-bottom:8px">
                <p style="font-weight:600">Accounts Team</p>
                <span style="font-size:12px;color:var(--text-gray)">May 8, 3:00 PM</span>
            </div>
            <p style="color:var(--text-gray);font-size:14px">Invoice INV-2025-156 has been received and is under review. Payment will be processed within 5 working days.</p>
        </div>
    </div>
</div>
@endsection
