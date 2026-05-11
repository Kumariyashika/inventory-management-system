@extends("purchasezone.layouts.app")
@section("title", "My Tasks - Purchase Zone")
@section("page_title", "My Tasks")
@section("page_subtitle", "View and manage your assigned procurement tasks")
@section("content")
<div class="panel">
    <div class="panel-header"><span class="panel-title">Assigned Tasks</span></div>
    <table>
        <thead><tr><th>Task</th><th>Priority</th><th>Due Date</th><th>Status</th></tr></thead>
        <tbody>
            <tr><td>Raise PO for keyboard wireless restock</td><td><span class="badge-status status-overdue">High</span></td><td>Today</td><td><span class="badge-status status-pending">Pending</span></td></tr>
            <tr><td>Follow up with MegaSource for PO-089</td><td><span class="badge-status status-pending">Medium</span></td><td>Tomorrow</td><td><span class="badge-status status-progress">In Progress</span></td></tr>
            <tr><td>Finalize Q2 supplier contracts</td><td><span class="badge-status status-pending">Medium</span></td><td>May 15</td><td><span class="badge-status status-pending">Pending</span></td></tr>
            <tr><td>Update vendor list in system</td><td><span class="badge-status status-done">Low</span></td><td>May 12</td><td><span class="badge-status status-done">Done</span></td></tr>
        </tbody>
    </table>
</div>
@endsection
