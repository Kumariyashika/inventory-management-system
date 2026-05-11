@extends('adminzone.layouts.app')
@section('title', 'Low Stock Alert')
@section('content')
<div class="page-header-bar">
    <div><h1 class="page-heading">Low Stock Alert</h1><p class="page-subheading">Products that have fallen below their reorder level</p></div>
</div>
<div class="table-container-premium" style="margin-bottom:0;">
    <table class="premium-table">
        <thead><tr><th>SKU</th><th>Product</th><th>Category</th><th>Current Stock</th><th>Reorder Level</th><th>Deficit</th><th>Status</th><th>Action</th></tr></thead>
        <tbody>
            @php
            $items=[['sku'=>'PRD-0004','name'=>'Bookshelf','cat'=>'Furniture','stock'=>5,'reorder'=>20,'status'=>'Low'],['sku'=>'RAW-0001','name'=>'Steel Sheet 2mm','cat'=>'Raw Materials','stock'=>0,'reorder'=>100,'status'=>'Out'],['sku'=>'PRD-0007','name'=>'Desk Lamp','cat'=>'Electronics','stock'=>3,'reorder'=>15,'status'=>'Low'],['sku'=>'PKG-0002','name'=>'Bubble Wrap Roll','cat'=>'Packaging','stock'=>0,'reorder'=>50,'status'=>'Out']];
            @endphp
            @foreach($items as $i)
            <tr>
                <td class="text-muted">{{ $i['sku'] }}</td>
                <td><strong>{{ $i['name'] }}</strong></td>
                <td class="text-muted">{{ $i['cat'] }}</td>
                <td style="font-weight:700;color:{{ $i['stock']==0?'#ef4444':'#f59e0b' }};">{{ $i['stock'] }}</td>
                <td class="text-muted">{{ $i['reorder'] }}</td>
                <td style="font-weight:600;color:#ef4444;">{{ $i['reorder']-$i['stock'] }}</td>
                <td>@if($i['stock']==0)<span class="status-pill status-onhold">Out of Stock</span>@else<span class="status-pill status-inprogress">Low Stock</span>@endif</td>
                <td><button class="btn-primary-action" style="padding:6px 12px;font-size:0.75rem;">Reorder</button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
