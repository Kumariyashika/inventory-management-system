@extends('adminzone.layouts.app')
@section('title', 'Expiry Products')
@section('content')
<div class="page-header-bar">
    <div><h1 class="page-heading">Expiry Products</h1><p class="page-subheading">Products nearing or past their expiry dates</p></div>
</div>
<div class="table-container-premium" style="margin-bottom:0;">
    <table class="premium-table">
        <thead><tr><th>SKU</th><th>Product</th><th>Batch No.</th><th>Qty</th><th>Expiry Date</th><th>Days Left</th><th>Status</th></tr></thead>
        <tbody>
            @php
            $items=[['sku'=>'MED-001','name'=>'Lubricant Oil','batch'=>'B-2024-112','qty'=>30,'expiry'=>'May 10, 2025','days'=>4,'status'=>'Expiring Soon'],['sku'=>'CHM-003','name'=>'Surface Cleaner','batch'=>'B-2024-089','qty'=>12,'expiry'=>'May 02, 2025','days'=>-4,'status'=>'Expired'],['sku'=>'PNT-007','name'=>'Primer Coat','batch'=>'B-2025-001','qty'=>8,'expiry'=>'May 20, 2025','days'=>14,'status'=>'Expiring Soon'],['sku'=>'ADH-002','name'=>'Epoxy Adhesive','batch'=>'B-2024-055','qty'=>5,'expiry'=>'Apr 28, 2025','days'=>-8,'status'=>'Expired']];
            @endphp
            @foreach($items as $i)
            <tr>
                <td class="text-muted">{{ $i['sku'] }}</td>
                <td><strong>{{ $i['name'] }}</strong></td>
                <td class="text-muted">{{ $i['batch'] }}</td>
                <td style="font-weight:600;">{{ $i['qty'] }}</td>
                <td class="text-muted">{{ $i['expiry'] }}</td>
                <td style="font-weight:700;color:{{ $i['days']<0?'#ef4444':'#f59e0b' }};">{{ $i['days']<0?abs($i['days']).' days ago':$i['days'].' days' }}</td>
                <td>@if($i['status']==='Expired')<span class="status-pill status-onhold">Expired</span>@else<span class="status-pill status-inprogress">Expiring Soon</span>@endif</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
