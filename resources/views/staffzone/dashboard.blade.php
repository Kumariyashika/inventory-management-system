@extends('staffzone.layouts.app')
@section('title', 'Staff Dashboard - Inventory Pro')
@section('page_title', 'My Dashboard')
@section('page_subtitle', 'Track your tasks, activity and performance')

@section('content')
<div class="stats-grid">
    <div class="stat-card">
        <div class="stat-icon primary"><i class="ph ph-check-square"></i></div>
        <div class="stat-value">12</div>
        <div class="stat-label">Tasks Assigned</div>
        <div class="stat-trend"><span class="trend-up"><i class="ph ph-trend-up"></i> 3 new today</span></div>
    </div>
    <div class="stat-card">
        <div class="stat-icon success"><i class="ph ph-check-circle"></i></div>
        <div class="stat-value">8</div>
        <div class="stat-label">Completed Today</div>
        <div class="stat-trend"><span class="trend-up"><i class="ph ph-trend-up"></i> 67% completion</span></div>
    </div>
    <div class="stat-card">
        <div class="stat-icon warning"><i class="ph ph-clock"></i></div>
        <div class="stat-value">4</div>
        <div class="stat-label">Pending Tasks</div>
        <div class="stat-trend"><span class="trend-down"><i class="ph ph-warning"></i> 1 overdue</span></div>
    </div>
    <div class="stat-card">
        <div class="stat-icon danger"><i class="ph ph-clipboard-text"></i></div>
        <div class="stat-value">3</div>
        <div class="stat-label">Pending Approvals</div>
        <div class="stat-trend"><span class="trend-down"><i class="ph ph-arrow-right"></i> Needs action</span></div>
    </div>
</div>

<div class="two-col">
    <div class="panel">
        <div class="panel-header">
            <span class="panel-title">My Tasks</span>
            <a href="{{ url('/staff/my-tasks') }}" class="panel-action">View All</a>
        </div>
        <table>
            <thead><tr><th>Task</th><th>Due Date</th><th>Status</th></tr></thead>
            <tbody>
                <tr><td>Update inventory stock count</td><td>Today</td><td><span class="badge-status status-progress">In Progress</span></td></tr>
                <tr><td>Process returns from Customer A</td><td>Today</td><td><span class="badge-status status-pending">Pending</span></td></tr>
                <tr><td>Prepare daily sales report</td><td>Yesterday</td><td><span class="badge-status status-overdue">Overdue</span></td></tr>
                <tr><td>Check warehouse section B</td><td>Tomorrow</td><td><span class="badge-status status-pending">Pending</span></td></tr>
                <tr><td>Submit weekly summary</td><td>May 12</td><td><span class="badge-status status-done">Done</span></td></tr>
            </tbody>
        </table>
    </div>
    <div class="panel">
        <div class="panel-header">
            <span class="panel-title">Recent Activity</span>
        </div>
        <table>
            <thead><tr><th>Activity</th><th>Time</th></tr></thead>
            <tbody>
                <tr><td>Updated stock for Product #1042</td><td>10 min ago</td></tr>
                <tr><td>Created sales order SO-2025-512</td><td>45 min ago</td></tr>
                <tr><td>Submitted approval request</td><td>2 hrs ago</td></tr>
                <tr><td>Uploaded shipment documents</td><td>3 hrs ago</td></tr>
                <tr><td>Completed inventory audit - Zone C</td><td>Yesterday</td></tr>
            </tbody>
        </table>
    </div>
</div>

<div class="panel">
    <div class="panel-header">
        <span class="panel-title">My Pending Approvals</span>
        <a href="{{ url('/staff/my-approvals') }}" class="panel-action">View All</a>
    </div>
    <table>
        <thead><tr><th>Request Type</th><th>Description</th><th>Submitted</th><th>Status</th></tr></thead>
        <tbody>
            <tr><td>Stock Adjustment</td><td>Adjust qty for item SKU-5512 (-10 units)</td><td>Today 9:30 AM</td><td><span class="badge-status status-pending">Awaiting Manager</span></td></tr>
            <tr><td>Overtime Request</td><td>Saturday 4–8 PM warehouse coverage</td><td>May 8</td><td><span class="badge-status status-progress">Under Review</span></td></tr>
            <tr><td>Return Authorization</td><td>Customer return order #RET-2025-088</td><td>May 7</td><td><span class="badge-status status-done">Approved</span></td></tr>
        </tbody>
    </table>
</div>
@endsection
