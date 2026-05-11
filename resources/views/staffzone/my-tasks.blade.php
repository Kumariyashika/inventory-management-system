@extends('staffzone.layouts.app')
@section('title', 'My Tasks - Staff Zone')
@section('page_title', 'My Tasks')
@section('page_subtitle', 'View and manage all your assigned tasks')
@section('content')
<div class="panel">
    <div class="panel-header">
        <span class="panel-title">All Tasks</span>
        <span style="font-size:13px;color:var(--text-gray);">12 total tasks</span>
    </div>
    <table>
        <thead><tr><th>Task ID</th><th>Description</th><th>Category</th><th>Due Date</th><th>Priority</th><th>Status</th></tr></thead>
        <tbody>
            <tr><td>#TSK-001</td><td>Update inventory stock count for Zone A</td><td>Inventory</td><td>Today</td><td><span class="badge-status" style="background:#FEF2F2;color:#EF4444;">High</span></td><td><span class="badge-status status-progress">In Progress</span></td></tr>
            <tr><td>#TSK-002</td><td>Process customer return RET-2025-088</td><td>Sales</td><td>Today</td><td><span class="badge-status" style="background:#FFFBEB;color:#F59E0B;">Medium</span></td><td><span class="badge-status status-pending">Pending</span></td></tr>
            <tr><td>#TSK-003</td><td>Prepare daily sales report</td><td>Reports</td><td>Yesterday</td><td><span class="badge-status" style="background:#FEF2F2;color:#EF4444;">High</span></td><td><span class="badge-status status-overdue">Overdue</span></td></tr>
            <tr><td>#TSK-004</td><td>Verify shipment #SHP-2025-334</td><td>Purchases</td><td>Tomorrow</td><td><span class="badge-status" style="background:#ECFDF5;color:#10B981;">Low</span></td><td><span class="badge-status status-pending">Pending</span></td></tr>
            <tr><td>#TSK-005</td><td>Submit weekly summary to manager</td><td>Admin</td><td>May 12</td><td><span class="badge-status" style="background:#FFFBEB;color:#F59E0B;">Medium</span></td><td><span class="badge-status status-done">Done</span></td></tr>
            <tr><td>#TSK-006</td><td>Audit production batch #BATCH-2025-19</td><td>Production</td><td>May 13</td><td><span class="badge-status" style="background:#ECFDF5;color:#10B981;">Low</span></td><td><span class="badge-status status-done">Done</span></td></tr>
        </tbody>
    </table>
</div>
@endsection
