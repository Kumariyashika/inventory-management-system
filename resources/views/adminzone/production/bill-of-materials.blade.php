@extends('adminzone.layouts.app')
@section('title', 'Bill of Materials')
@section('content')
<div class="page-header-bar">
    <div><h1 class="page-heading">Bill of Materials</h1><p class="page-subheading">Components required to manufacture each product</p></div>
    <button class="btn-primary-action"><i class="ph ph-plus"></i> Add BOM</button>
</div>
<div class="table-container-premium" style="margin-bottom:0;">
    <div class="table-filter-bar"><div class="search-wrap"><i class="ph ph-magnifying-glass"></i><input type="text" class="search-input" placeholder="Search product or component..."></div></div>
    <table class="premium-table">
        <thead><tr><th>Product</th><th>Component</th><th>Qty Required</th><th>Unit</th><th>Unit Cost</th><th>Total Cost</th></tr></thead>
        <tbody>
            @php
            $bom=[['product'=>'Office Chair','component'=>'Steel Frame','qty'=>5,'unit'=>'Kg','cost'=>180],['product'=>'Office Chair','component'=>'Foam Padding','qty'=>2,'unit'=>'Kg','cost'=>250],['product'=>'Office Chair','component'=>'Fabric Cover','qty'=>1,'unit'=>'Piece','cost'=>450],['product'=>'Work Table','component'=>'MDF Board 18mm','qty'=>3,'unit'=>'Sheet','cost'=>800],['product'=>'Work Table','component'=>'Steel Legs','qty'=>4,'unit'=>'Piece','cost'=>350]];
            @endphp
            @foreach($bom as $b)
            <tr>
                <td style="font-weight:600;">{{ $b['product'] }}</td>
                <td class="text-muted">{{ $b['component'] }}</td>
                <td class="text-muted">{{ $b['qty'] }}</td>
                <td class="text-muted">{{ $b['unit'] }}</td>
                <td class="text-muted">₹{{ number_format($b['cost']) }}</td>
                <td style="font-weight:700;">₹{{ number_format($b['qty']*$b['cost']) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
