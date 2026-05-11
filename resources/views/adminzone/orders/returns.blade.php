@extends('adminzone.layouts.app')
@section('title', 'Returns')
@section('content')
<div class="page-header-bar">
    <div><h1 class="page-heading">Returns</h1><p class="page-subheading">Manage customer return requests</p></div>
    <button class="btn-primary-action"><i class="ph ph-plus"></i> New Return</button>
</div>
<div class="table-container-premium" style="margin-bottom:0;">
    <table class="premium-table">
        <thead><tr><th>Return ID</th><th>Order ID</th><th>Customer</th><th>Product</th><th>Qty</th><th>Reason</th><th>Status</th><th>Actions</th></tr></thead>
        <tbody>
            @php
            $returns=[['rid'=>'RET-001','oid'=>'ORD-2025-095','cust'=>'Alpha Corp','product'=>'Office Chair','qty'=>2,'reason'=>'Damaged in transit','status'=>'Approved'],['rid'=>'RET-002','oid'=>'ORD-2025-092','cust'=>'Gamma Ltd','product'=>'Work Table','qty'=>1,'reason'=>'Wrong product','status'=>'Pending']];
            @endphp
            @foreach($returns as $r)
            <tr>
                <td style="font-weight:600;color:#ef4444;">{{ $r['rid'] }}</td>
                <td class="text-muted">{{ $r['oid'] }}</td>
                <td><strong>{{ $r['cust'] }}</strong></td>
                <td class="text-muted">{{ $r['product'] }}</td>
                <td style="font-weight:600;">{{ $r['qty'] }}</td>
                <td class="text-muted">{{ $r['reason'] }}</td>
                <td>@if($r['status']==='Approved')<span class="status-pill status-completed">Approved</span>@else<span class="status-pill status-inprogress">Pending</span>@endif</td>
                <td><div class="action-btns"><button class="action-btn edit-btn"><i class="ph ph-pencil-simple"></i></button></div></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
