@extends('adminzone.layouts.app')
@section('title', 'Stock Out')
@section('content')
<div class="page-header-bar">
    <div><h1 class="page-heading">Stock Out</h1><p class="page-subheading">Record outgoing stock to orders or production</p></div>
    <button class="btn-primary-action"><i class="ph ph-minus"></i> New Stock Out Entry</button>
</div>
<div class="table-container-premium" style="margin-bottom:0;">
    <table class="premium-table">
        <thead><tr><th>Entry ID</th><th>Product</th><th>Purpose</th><th>Qty</th><th>Warehouse</th><th>Issued To</th><th>Date</th></tr></thead>
        <tbody>
            @php
            $outs=[['id'=>'STK-OUT-001','product'=>'Office Chair','purpose'=>'Sales Order','qty'=>10,'wh'=>'WH-01','issued'=>'Alpha Corp','date'=>'May 05, 2025'],['id'=>'STK-OUT-002','product'=>'Steel Sheet 2mm','purpose'=>'Production','qty'=>50,'wh'=>'WH-01','issued'=>'Production Dept','date'=>'May 04, 2025'],['id'=>'STK-OUT-003','product'=>'Work Table','purpose'=>'Sales Order','qty'=>5,'wh'=>'WH-02','issued'=>'Beta Industries','date'=>'May 03, 2025']];
            @endphp
            @foreach($outs as $o)
            <tr>
                <td class="text-muted">{{ $o['id'] }}</td>
                <td><strong>{{ $o['product'] }}</strong></td>
                <td><span class="status-pill status-inprogress">{{ $o['purpose'] }}</span></td>
                <td style="font-weight:600;color:#ef4444;">-{{ $o['qty'] }}</td>
                <td class="text-muted">{{ $o['wh'] }}</td>
                <td class="text-muted">{{ $o['issued'] }}</td>
                <td class="text-muted">{{ $o['date'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
