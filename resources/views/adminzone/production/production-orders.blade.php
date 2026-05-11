@extends('adminzone.layouts.app')
@section('title', 'Production Orders')
@section('content')
<div class="page-header-bar">
    <div><h1 class="page-heading">Production Orders</h1><p class="page-subheading">All production work orders and their status</p></div>
    <button class="btn-primary-action"><i class="ph ph-plus"></i> New Production Order</button>
</div>
<div class="table-container-premium" style="margin-bottom:0;">
    <table class="premium-table">
        <thead><tr><th>Order ID</th><th>Product</th><th>Qty</th><th>Status</th><th>Start Date</th><th>Due Date</th><th>Progress</th><th>Actions</th></tr></thead>
        <tbody>
            @php
            $orders=[['id'=>'PROD-2025-0250','product'=>'Office Chair','qty'=>150,'status'=>'Completed','start'=>'May 17','due'=>'May 20','pct'=>100,'color'=>'#10b981'],['id'=>'PROD-2025-0249','product'=>'Work Table','qty'=>80,'status'=>'In Progress','start'=>'May 20','due'=>'May 25','pct'=>65,'color'=>'#f59e0b'],['id'=>'PROD-2025-0248','product'=>'Storage Cabinet','qty'=>50,'status'=>'In Progress','start'=>'May 21','due'=>'May 26','pct'=>40,'color'=>'#f59e0b'],['id'=>'PROD-2025-0247','product'=>'Bookshelf','qty'=>120,'status'=>'Pending','start'=>'May 24','due'=>'May 30','pct'=>0,'color'=>'#8b5cf6'],['id'=>'PROD-2025-0246','product'=>'Meeting Chair','qty'=>200,'status'=>'On Hold','start'=>'May 18','due'=>'May 28','pct'=>15,'color'=>'#ef4444']];
            @endphp
            @foreach($orders as $o)
            <tr>
                <td class="text-muted">{{ $o['id'] }}</td>
                <td><strong>{{ $o['product'] }}</strong></td>
                <td class="text-muted">{{ $o['qty'] }}</td>
                <td>
                    @if($o['status']==='Completed')<span class="status-pill status-completed">Completed</span>
                    @elseif($o['status']==='In Progress')<span class="status-pill status-inprogress">In Progress</span>
                    @elseif($o['status']==='Pending')<span class="status-pill status-pending">Pending</span>
                    @else<span class="status-pill status-onhold">On Hold</span>@endif
                </td>
                <td class="text-muted">{{ $o['start'] }}</td>
                <td class="text-muted">{{ $o['due'] }}</td>
                <td><div class="mini-progress-wrapper"><span class="mini-progress-text">{{ $o['pct'] }}%</span><div class="mini-progress-track"><div class="mini-progress-bar" style="width:{{ $o['pct'] }}%;background:{{ $o['color'] }};"></div></div></div></td>
                <td><div class="action-btns"><button class="action-btn edit-btn"><i class="ph ph-pencil-simple"></i></button></div></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
