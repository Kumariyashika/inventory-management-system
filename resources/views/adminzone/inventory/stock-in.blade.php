@extends('adminzone.layouts.app')
@section('title', 'Stock In')
@section('content')
<div class="page-header-bar">
    <div><h1 class="page-heading">Stock In</h1><p class="page-subheading">Record incoming stock from suppliers</p></div>
    <button class="btn-primary-action"><i class="ph ph-plus"></i> New Stock Entry</button>
</div>
<div class="form-card" style="margin-bottom:20px;">
    <h3 class="table-title" style="margin-bottom:16px;">Add Stock Entry</h3>
    <div class="form-grid-2">
        <div class="form-field"><label class="field-label">Product</label><select class="field-input"><option>Select product...</option><option>Office Chair</option><option>Work Table</option><option>Steel Sheet 2mm</option></select></div>
        <div class="form-field"><label class="field-label">Supplier</label><select class="field-input"><option>Select supplier...</option><option>RawMat Industries</option><option>FastParts Pvt Ltd</option></select></div>
        <div class="form-field"><label class="field-label">Quantity</label><input type="number" class="field-input" placeholder="Enter quantity"></div>
        <div class="form-field"><label class="field-label">Warehouse</label><select class="field-input"><option>WH-01 Main Warehouse</option><option>WH-02 North Zone</option></select></div>
        <div class="form-field"><label class="field-label">Unit Price (₹)</label><input type="number" class="field-input" placeholder="0.00"></div>
        <div class="form-field"><label class="field-label">Date</label><input type="date" class="field-input" value="{{ date('Y-m-d') }}"></div>
    </div>
    <div class="form-actions"><a href="#" class="btn-outline">Cancel</a><button type="submit" class="btn-primary-action">Save Entry</button></div>
</div>
<div class="table-container-premium" style="margin-bottom:0;">
    <div class="table-header"><h3 class="table-title">Recent Stock In Records</h3></div>
    <table class="premium-table">
        <thead><tr><th>Entry ID</th><th>Product</th><th>Supplier</th><th>Qty</th><th>Unit Price</th><th>Total</th><th>Warehouse</th><th>Date</th></tr></thead>
        <tbody>
            @php
            $entries=[['id'=>'STK-IN-001','product'=>'Office Chair','supplier'=>'FastParts','qty'=>50,'price'=>2500,'wh'=>'WH-01','date'=>'May 05, 2025'],['id'=>'STK-IN-002','product'=>'Steel Sheet 2mm','supplier'=>'RawMat Industries','qty'=>200,'price'=>800,'wh'=>'WH-01','date'=>'May 04, 2025'],['id'=>'STK-IN-003','product'=>'Work Table','supplier'=>'WoodCraft Supplies','qty'=>20,'price'=>4500,'wh'=>'WH-02','date'=>'May 03, 2025']];
            @endphp
            @foreach($entries as $e)
            <tr>
                <td class="text-muted">{{ $e['id'] }}</td>
                <td><strong>{{ $e['product'] }}</strong></td>
                <td class="text-muted">{{ $e['supplier'] }}</td>
                <td style="font-weight:600;color:#10b981;">+{{ $e['qty'] }}</td>
                <td class="text-muted">₹{{ number_format($e['price']) }}</td>
                <td style="font-weight:600;">₹{{ number_format($e['qty']*$e['price']) }}</td>
                <td class="text-muted">{{ $e['wh'] }}</td>
                <td class="text-muted">{{ $e['date'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
