@extends('Managerzone.layout')

@section('title', 'Production - Inventory Pro')
@section('page_title', 'Production Management')
@section('page_subtitle', 'Monitor production plans and active orders')

@section('content')
<!-- Progress Tracker -->
<div class="panel" style="margin-bottom: 24px;">
    <div class="panel-header">
        <h2 class="panel-title">PRODUCTION PROGRESS TRACKER</h2>
    </div>
    <div style="display: flex; gap: 40px; align-items: center;">
        <div style="flex: 1; text-align: center;">
            <div style="font-size: 32px; font-weight: 700; color: var(--primary);">45</div>
            <div style="font-size: 13px; color: var(--text-gray);">Planned</div>
        </div>
        <div style="flex: 1; text-align: center;">
            <div style="font-size: 32px; font-weight: 700; color: var(--warning);">12</div>
            <div style="font-size: 13px; color: var(--text-gray);">In Progress</div>
        </div>
        <div style="flex: 1; text-align: center;">
            <div style="font-size: 32px; font-weight: 700; color: var(--success);">128</div>
            <div style="font-size: 13px; color: var(--text-gray);">Completed</div>
        </div>
        <div style="flex: 1; text-align: center;">
            <div style="font-size: 32px; font-weight: 700; color: var(--danger);">3</div>
            <div style="font-size: 13px; color: var(--text-gray);">Delayed</div>
        </div>
    </div>
</div>

<div class="tables-row" style="grid-template-columns: 2fr 1fr;">
    <!-- Production Orders -->
    <div class="panel">
        <div class="panel-header">
            <h2 class="panel-title">ACTIVE PRODUCTION ORDERS</h2>
            <div style="display: flex; gap: 10px;">
                <input type="text" class="select-filter" placeholder="Search orders...">
            </div>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Order #</th>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Deadline</th>
                    <th>Progress</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>PO-2025-081</td>
                    <td style="font-weight: 500;">Ergonomic Desk</td>
                    <td>50</td>
                    <td>May 28, 2025</td>
                    <td>
                        <div style="display: flex; align-items: center; gap: 8px;">
                            <div class="progress-bar-container"><div class="progress-bar" style="width: 75%; background: var(--primary);"></div></div>
                            <span style="font-size: 12px; font-weight: 600;">75%</span>
                        </div>
                    </td>
                    <td><span class="status-badge status-progress">In Progress</span></td>
                </tr>
                <tr>
                    <td>PO-2025-082</td>
                    <td style="font-weight: 500;">Office Chair</td>
                    <td>200</td>
                    <td>Jun 02, 2025</td>
                    <td>
                        <div style="display: flex; align-items: center; gap: 8px;">
                            <div class="progress-bar-container"><div class="progress-bar" style="width: 20%; background: var(--warning);"></div></div>
                            <span style="font-size: 12px; font-weight: 600;">20%</span>
                        </div>
                    </td>
                    <td><span class="status-badge status-progress">In Progress</span></td>
                </tr>
                <tr>
                    <td>PO-2025-083</td>
                    <td style="font-weight: 500;">Filing Cabinet</td>
                    <td>30</td>
                    <td>May 25, 2025</td>
                    <td>
                        <div style="display: flex; align-items: center; gap: 8px;">
                            <div class="progress-bar-container"><div class="progress-bar" style="width: 90%; background: var(--danger);"></div></div>
                            <span style="font-size: 12px; font-weight: 600;">90%</span>
                        </div>
                    </td>
                    <td><span class="status-badge status-hold">Delayed</span></td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Production Plan Form -->
    <div class="panel">
        <div class="panel-header">
            <h2 class="panel-title">CREATE PRODUCTION PLAN</h2>
        </div>
        <form style="display: flex; flex-direction: column; gap: 15px;">
            <div>
                <label style="font-size: 13px; color: var(--text-gray); margin-bottom: 4px; display: block;">Select Product</label>
                <select class="select-filter" style="width: 100%;">
                    <option>Ergonomic Desk</option>
                    <option>Office Chair</option>
                    <option>Filing Cabinet</option>
                </select>
            </div>
            <div>
                <label style="font-size: 13px; color: var(--text-gray); margin-bottom: 4px; display: block;">Target Quantity</label>
                <input type="number" class="select-filter" style="width: 100%;" placeholder="0">
            </div>
            <div>
                <label style="font-size: 13px; color: var(--text-gray); margin-bottom: 4px; display: block;">Target Deadline</label>
                <input type="date" class="select-filter" style="width: 100%;">
            </div>
            <div>
                <label style="font-size: 13px; color: var(--text-gray); margin-bottom: 4px; display: block;">Assign To Team/Line</label>
                <select class="select-filter" style="width: 100%;">
                    <option>Line A</option>
                    <option>Line B</option>
                    <option>Line C</option>
                </select>
            </div>
            <button type="button" class="quick-actions-btn" style="margin: 10px 0 0 0; background: var(--primary); color: white;">Create Plan</button>
        </form>
    </div>
</div>
@endsection
