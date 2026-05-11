@extends('Managerzone.layout')

@section('title', 'Quality Control - Inventory Pro')
@section('page_title', 'Quality Control')
@section('page_subtitle', 'Monitor inspections, defects, and QC reports')

@section('content')
<!-- QC Reports Overview -->
<div class="panel" style="margin-bottom: 24px;">
    <div class="panel-header">
        <h2 class="panel-title">QC OVERVIEW</h2>
        <a href="#" class="panel-action">Generate Report</a>
    </div>
    <div style="display: flex; gap: 20px;">
        <div class="stat-card" style="flex: 1;">
            <div class="stat-title">Pass Rate</div>
            <div class="stat-value" style="color: var(--success);">98.2%</div>
            <div class="stat-trend"><span class="trend-up"><i class="ph ph-trend-up"></i> 1.2%</span> <span class="trend-text">vs last month</span></div>
        </div>
        <div class="stat-card" style="flex: 1;">
            <div class="stat-title">Inspections Completed</div>
            <div class="stat-value">1,450</div>
            <div class="stat-trend"><span class="trend-up"><i class="ph ph-trend-up"></i> 5%</span> <span class="trend-text">vs last month</span></div>
        </div>
        <div class="stat-card" style="flex: 1;">
            <div class="stat-title">Defects Identified</div>
            <div class="stat-value" style="color: var(--danger);">26</div>
            <div class="stat-trend"><span class="trend-down"><i class="ph ph-trend-down"></i> 3%</span> <span class="trend-text">vs last month</span></div>
        </div>
    </div>
</div>

<div class="tables-row" style="grid-template-columns: 2fr 1fr;">
    <!-- Defect Tracker -->
    <div class="panel">
        <div class="panel-header">
            <h2 class="panel-title">DEFECT TRACKER</h2>
            <div style="display: flex; gap: 10px;">
                <select class="select-filter">
                    <option>All Statuses</option>
                    <option>Open</option>
                    <option>Resolved</option>
                </select>
            </div>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Defect ID</th>
                    <th>Product</th>
                    <th>Reported By</th>
                    <th>Severity</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>DEF-2025-012</td>
                    <td style="font-weight: 500;">Ergonomic Desk</td>
                    <td>Quality Team</td>
                    <td><span class="status-badge status-danger" style="background: var(--danger-light); color: var(--danger);">High</span></td>
                    <td><span class="status-badge status-pending">Open</span></td>
                </tr>
                <tr>
                    <td>DEF-2025-011</td>
                    <td style="font-weight: 500;">Office Chair</td>
                    <td>Assembly Line B</td>
                    <td><span class="status-badge status-warning" style="background: var(--warning-light); color: var(--warning);">Medium</span></td>
                    <td><span class="status-badge status-progress">Investigating</span></td>
                </tr>
                <tr>
                    <td>DEF-2025-010</td>
                    <td style="font-weight: 500;">Filing Cabinet</td>
                    <td>Final Inspection</td>
                    <td><span class="status-badge status-primary" style="background: var(--primary-light); color: var(--primary);">Low</span></td>
                    <td><span class="status-badge status-completed">Resolved</span></td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Inspection Form -->
    <div class="panel">
        <div class="panel-header">
            <h2 class="panel-title">NEW INSPECTION</h2>
        </div>
        <form style="display: flex; flex-direction: column; gap: 15px;">
            <div>
                <label style="font-size: 13px; color: var(--text-gray); margin-bottom: 4px; display: block;">Batch / PO Number</label>
                <input type="text" class="select-filter" style="width: 100%;" placeholder="e.g. PO-2025-081">
            </div>
            <div>
                <label style="font-size: 13px; color: var(--text-gray); margin-bottom: 4px; display: block;">Result</label>
                <select class="select-filter" style="width: 100%;">
                    <option>Pass</option>
                    <option>Fail</option>
                    <option>Needs Rework</option>
                </select>
            </div>
            <div>
                <label style="font-size: 13px; color: var(--text-gray); margin-bottom: 4px; display: block;">Inspector Notes</label>
                <textarea class="select-filter" style="width: 100%; min-height: 80px; resize: none;" placeholder="Details about the inspection..."></textarea>
            </div>
            <button type="button" class="quick-actions-btn" style="margin: 10px 0 0 0; background: var(--primary); color: white;">Log Inspection</button>
        </form>
    </div>
</div>
@endsection
