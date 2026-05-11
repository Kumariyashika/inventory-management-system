@extends('adminzone.layouts.app')
@section('title', 'Work Orders')
@section('content')
<div class="page-header-bar">
    <div><h1 class="page-heading">Work Orders</h1><p class="page-subheading">Task-level work orders assigned to production staff</p></div>
    <button class="btn-primary-action"><i class="ph ph-plus"></i> Create Work Order</button>
</div>
<div class="table-container-premium" style="margin-bottom:0;">
    <table class="premium-table">
        <thead><tr><th>Work Order</th><th>Production Order</th><th>Task</th><th>Assigned To</th><th>Priority</th><th>Status</th></tr></thead>
        <tbody>
            @php
            $wos=[['wo'=>'WO-001','po'=>'PROD-2025-0249','task'=>'Assembly - Tabletop','assignee'=>'Ramesh K.','priority'=>'High','status'=>'In Progress'],['wo'=>'WO-002','po'=>'PROD-2025-0249','task'=>'Leg Welding','assignee'=>'Suresh M.','priority'=>'High','status'=>'Pending'],['wo'=>'WO-003','po'=>'PROD-2025-0248','task'=>'Cabinet Painting','assignee'=>'Dinesh P.','priority'=>'Medium','status'=>'In Progress'],['wo'=>'WO-004','po'=>'PROD-2025-0250','task'=>'Quality Check','assignee'=>'QA Team','priority'=>'Low','status'=>'Completed']];
            @endphp
            @foreach($wos as $w)
            <tr>
                <td style="font-weight:600;color:#4f46e5;">{{ $w['wo'] }}</td>
                <td class="text-muted">{{ $w['po'] }}</td>
                <td><strong>{{ $w['task'] }}</strong></td>
                <td class="text-muted">{{ $w['assignee'] }}</td>
                <td>
                    @if($w['priority']==='High')<span class="status-pill status-onhold">High</span>
                    @elseif($w['priority']==='Medium')<span class="status-pill status-inprogress">Medium</span>
                    @else<span class="status-pill status-completed">Low</span>@endif
                </td>
                <td>
                    @if($w['status']==='Completed')<span class="status-pill status-completed">Completed</span>
                    @elseif($w['status']==='In Progress')<span class="status-pill status-inprogress">In Progress</span>
                    @else<span class="status-pill status-pending">Pending</span>@endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
