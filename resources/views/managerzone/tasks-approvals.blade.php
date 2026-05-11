@extends('Managerzone.layout')

@section('title', 'Tasks & Approvals - Inventory Pro')
@section('page_title', 'Tasks & Approvals')
@section('page_subtitle', 'Manage pending approvals and team tasks')

@section('content')
<div class="tables-row" style="grid-template-columns: 1fr 1fr;">
    <!-- Tasks List -->
    <div class="panel">
        <div class="panel-header">
            <h2 class="panel-title">MY TASKS</h2>
            <button class="quick-actions-btn" style="margin: 0; padding: 4px 8px;"><i class="ph ph-plus"></i> Add Task</button>
        </div>
        <div style="display: flex; flex-direction: column; gap: 10px;">
            <div style="display: flex; justify-content: space-between; align-items: center; padding: 12px; border: 1px solid var(--border); border-radius: 8px;">
                <div style="display: flex; gap: 12px; align-items: center;">
                    <input type="checkbox" style="width: 18px; height: 18px; cursor: pointer;">
                    <div>
                        <div style="font-weight: 500; font-size: 14px;">Review Monthly Budget</div>
                        <div style="font-size: 12px; color: var(--danger);">Overdue by 2 days</div>
                    </div>
                </div>
                <span class="status-badge status-danger" style="background: var(--danger-light); color: var(--danger);">High</span>
            </div>
            
            <div style="display: flex; justify-content: space-between; align-items: center; padding: 12px; border: 1px solid var(--border); border-radius: 8px;">
                <div style="display: flex; gap: 12px; align-items: center;">
                    <input type="checkbox" style="width: 18px; height: 18px; cursor: pointer;">
                    <div>
                        <div style="font-weight: 500; font-size: 14px;">Approve Employee Leaves</div>
                        <div style="font-size: 12px; color: var(--text-gray);">Due Today</div>
                    </div>
                </div>
                <span class="status-badge status-warning" style="background: var(--warning-light); color: var(--warning);">Medium</span>
            </div>

            <div style="display: flex; justify-content: space-between; align-items: center; padding: 12px; border: 1px solid var(--border); border-radius: 8px; opacity: 0.6;">
                <div style="display: flex; gap: 12px; align-items: center;">
                    <input type="checkbox" checked style="width: 18px; height: 18px; cursor: pointer;">
                    <div>
                        <div style="font-weight: 500; font-size: 14px; text-decoration: line-through;">Update Warehouse Guidelines</div>
                        <div style="font-size: 12px; color: var(--text-gray);">Completed</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Approval Requests -->
    <div class="panel">
        <div class="panel-header">
            <h2 class="panel-title">PENDING APPROVALS</h2>
        </div>
        <div style="display: flex; flex-direction: column; gap: 15px;">
            <!-- Request 1 -->
            <div style="border: 1px solid var(--border); border-radius: 8px; padding: 15px;">
                <div style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                    <div>
                        <div style="font-weight: 600; font-size: 14px;">Purchase Order: PO-2025-086</div>
                        <div style="font-size: 13px; color: var(--text-gray);">Requested by: Purchasing Dept</div>
                    </div>
                    <div style="font-weight: 700; color: var(--text-dark);">$3,100.00</div>
                </div>
                <p style="font-size: 13px; margin-bottom: 15px;">Requires manager approval due to amount exceeding $2,500 threshold.</p>
                <div style="display: flex; gap: 10px;">
                    <button class="quick-actions-btn" style="flex: 1; margin: 0; background: var(--success); color: white; border: none;">Approve</button>
                    <button class="quick-actions-btn" style="flex: 1; margin: 0; background: var(--danger-light); color: var(--danger); border: none;">Reject</button>
                </div>
            </div>

            <!-- Request 2 -->
            <div style="border: 1px solid var(--border); border-radius: 8px; padding: 15px;">
                <div style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                    <div>
                        <div style="font-weight: 600; font-size: 14px;">Leave Request: Mark T.</div>
                        <div style="font-size: 13px; color: var(--text-gray);">Dates: May 26 - May 28 (3 Days)</div>
                    </div>
                    <span class="status-badge status-warning" style="background: var(--warning-light); color: var(--warning);">Pending</span>
                </div>
                <p style="font-size: 13px; margin-bottom: 15px;">Reason: Personal Emergency</p>
                <div style="display: flex; gap: 10px;">
                    <button class="quick-actions-btn" style="flex: 1; margin: 0; background: var(--success); color: white; border: none;">Approve</button>
                    <button class="quick-actions-btn" style="flex: 1; margin: 0; background: var(--danger-light); color: var(--danger); border: none;">Reject</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
