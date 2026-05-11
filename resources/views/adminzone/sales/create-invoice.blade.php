@extends('adminzone.layouts.app')
@section('title', 'Create Invoice')
@section('content')
<div class="page-header-bar">
    <div><h1 class="page-heading">Create Invoice</h1><p class="page-subheading">Generate a new sales invoice for a customer</p></div>
</div>
<div class="form-card">
    <div class="form-grid-2" style="margin-bottom:20px;">
        <div class="form-field"><label class="field-label">Invoice No.</label><input type="text" class="field-input" value="INV-2025-051" readonly></div>
        <div class="form-field"><label class="field-label">Invoice Date</label><input type="date" class="field-input" value="{{ date('Y-m-d') }}"></div>
        <div class="form-field"><label class="field-label">Customer</label><select class="field-input"><option>Select customer...</option><option>Alpha Corp</option><option>Beta Industries</option><option>Delta Traders</option></select></div>
        <div class="form-field"><label class="field-label">Due Date</label><input type="date" class="field-input"></div>
    </div>
    <div class="table-header" style="margin-bottom:8px;"><h3 class="table-title">Line Items</h3><button class="btn-outline" style="font-size:0.78rem;padding:6px 12px;"><i class="ph ph-plus"></i> Add Item</button></div>
    <table class="premium-table" style="margin-bottom:16px;">
        <thead><tr><th>Product</th><th>Qty</th><th>Unit Price</th><th>Total</th><th></th></tr></thead>
        <tbody>
            <tr>
                <td><select class="field-input" style="padding:6px 10px;"><option>Office Chair</option><option>Work Table</option></select></td>
                <td><input type="number" class="field-input" style="padding:6px 10px;width:80px;" value="5"></td>
                <td><input type="number" class="field-input" style="padding:6px 10px;width:100px;" value="4200"></td>
                <td style="font-weight:700;">₹21,000</td>
                <td><button class="action-btn delete-btn"><i class="ph ph-trash"></i></button></td>
            </tr>
        </tbody>
    </table>
    <div style="display:flex;justify-content:flex-end;gap:32px;margin-bottom:20px;font-size:0.85rem;">
        <div><div class="text-muted">Subtotal</div><div style="font-weight:700;font-size:1rem;">₹21,000</div></div>
        <div><div class="text-muted">Tax (18%)</div><div style="font-weight:700;font-size:1rem;">₹3,780</div></div>
        <div><div class="text-muted">Total</div><div style="font-weight:700;font-size:1.2rem;color:#4f46e5;">₹24,780</div></div>
    </div>
    <div class="form-actions"><a href="/admin/sales/list" class="btn-outline">Cancel</a><button class="btn-primary-action">Generate Invoice</button></div>
</div>
@endsection
