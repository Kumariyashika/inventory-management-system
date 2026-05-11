@extends('adminzone.layouts.app')
@section('title', 'New Orders')
@section('content')
<div class="page-header-bar">
    <div><h1 class="page-heading">New Orders</h1><p class="page-subheading">Recently placed and unprocessed orders</p></div>
    <button class="btn-primary-action"><i class="ph ph-plus"></i> Create Order</button>
</div>
<div class="table-container-premium" style="margin-bottom:0;">
    <table class="premium-table">
        <thead><tr><th>Order ID</th><th>Customer</th><th>Products</th><th>Total</th><th>Order Date</th><th>Status</th><th>Actions</th></tr></thead>
        <tbody>
            @php
            $orders=[['id'=>'ORD-2025-101','cust'=>'Alpha Corp','products'=>3,'total'=>84780,'date'=>'May 06, 2025','status'=>'New'],['id'=>'ORD-2025-100','cust'=>'Gamma Ltd','products'=>1,'total'=>28000,'date'=>'May 06, 2025','status'=>'New'],['id'=>'ORD-2025-099','cust'=>'Epsilon Co','products'=>2,'total'=>45600,'date'=>'May 05, 2025','status'=>'Processing']];
            @endphp
            @foreach($orders as $o)
            <tr>
                <td style="font-weight:600;color:#4f46e5;">{{ $o['id'] }}</td>
                <td><strong>{{ $o['cust'] }}</strong></td>
                <td class="text-muted">{{ $o['products'] }} item(s)</td>
                <td style="font-weight:700;">₹{{ number_format($o['total']) }}</td>
                <td class="text-muted">{{ $o['date'] }}</td>
                <td>@if($o['status']==='New')<span class="status-pill status-pending">New</span>@else<span class="status-pill status-inprogress">Processing</span>@endif</td>
                <td><div class="action-btns"><button class="action-btn edit-btn"><i class="ph ph-eye"></i></button><button class="action-btn edit-btn"><i class="ph ph-pencil-simple"></i></button></div></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
