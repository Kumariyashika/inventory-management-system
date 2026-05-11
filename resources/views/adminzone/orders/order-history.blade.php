@extends('adminzone.layouts.app')
@section('title', 'Order History')
@section('content')
<div class="page-header-bar">
    <div><h1 class="page-heading">Order History</h1><p class="page-subheading">All completed and closed orders</p></div>
</div>
<div class="table-container-premium" style="margin-bottom:0;">
    <div class="table-filter-bar"><div class="search-wrap"><i class="ph ph-magnifying-glass"></i><input type="text" class="search-input" placeholder="Search orders..."></div></div>
    <table class="premium-table">
        <thead><tr><th>Order ID</th><th>Customer</th><th>Total</th><th>Order Date</th><th>Delivered</th><th>Status</th></tr></thead>
        <tbody>
            @php
            $history=[['id'=>'ORD-2025-095','cust'=>'Alpha Corp','total'=>62500,'ordered'=>'Apr 28, 2025','delivered'=>'May 02, 2025','status'=>'Delivered'],['id'=>'ORD-2025-094','cust'=>'Delta Traders','total'=>39800,'ordered'=>'Apr 25, 2025','delivered'=>'Apr 30, 2025','status'=>'Delivered'],['id'=>'ORD-2025-092','cust'=>'Gamma Ltd','total'=>17000,'ordered'=>'Apr 20, 2025','delivered'=>'Apr 26, 2025','status'=>'Delivered']];
            @endphp
            @foreach($history as $h)
            <tr>
                <td style="font-weight:600;color:#4f46e5;">{{ $h['id'] }}</td>
                <td><strong>{{ $h['cust'] }}</strong></td>
                <td style="font-weight:700;">₹{{ number_format($h['total']) }}</td>
                <td class="text-muted">{{ $h['ordered'] }}</td>
                <td class="text-muted">{{ $h['delivered'] }}</td>
                <td><span class="status-pill status-completed">{{ $h['status'] }}</span></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
