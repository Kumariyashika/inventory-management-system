@extends("storezone.layouts.app")
@section("title", "Tasks - Store Zone")
@section("page_title", "Tasks")
@section("page_subtitle", "View and manage your assigned tasks")
@section("content")
<div class="panel">
    <div class="panel-header"><span class="panel-title">My Tasks</span></div>
    <table>
        <thead><tr><th>Task</th><th>Priority</th><th>Due Date</th><th>Status</th></tr></thead>
        <tbody>
            <tr><td>Reorder Keyboard Wireless stock</td><td><span class="badge-status status-overdue">High</span></td><td>Today</td><td><span class="badge-status status-pending">Pending</span></td></tr>
            <tr><td>Process transfer TRF-001</td><td><span class="badge-status status-pending">Medium</span></td><td>Today</td><td><span class="badge-status status-progress">In Progress</span></td></tr>
            <tr><td>Update store inventory count</td><td><span class="badge-status status-done">Low</span></td><td>May 12</td><td><span class="badge-status status-done">Done</span></td></tr>
        </tbody>
    </table>
</div>
@endsection
