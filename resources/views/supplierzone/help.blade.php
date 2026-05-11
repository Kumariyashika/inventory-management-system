@extends("supplierzone.layouts.app")
@section("title", "Help - Supplier")
@section("page_title", "Help & Support")
@section("page_subtitle", "Get help with the supplier portal")
@section("content")
<div class="panel">
    <div class="panel-header"><span class="panel-title">Help & Support</span></div>
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:20px">
        <div style="padding:24px;border:1px solid var(--border);border-radius:12px;text-align:center">
            <i class="ph ph-book-open" style="font-size:36px;color:var(--primary)"></i>
            <p style="font-weight:600;margin-top:12px">Supplier Guide</p>
            <p style="color:var(--text-gray);font-size:13px;margin-top:4px">Learn how to use the portal</p>
        </div>
        <div style="padding:24px;border:1px solid var(--border);border-radius:12px;text-align:center">
            <i class="ph ph-envelope" style="font-size:36px;color:var(--success)"></i>
            <p style="font-weight:600;margin-top:12px">Email Support</p>
            <p style="color:var(--text-gray);font-size:13px;margin-top:4px">supplier-support@inventorypro.com</p>
        </div>
    </div>
</div>
@endsection
