@extends('Managerzone.layout')

@section('title', 'Inventory - Inventory Pro')
@section('page_title', 'Inventory Management')
@section('page_subtitle', 'Monitor stock levels and movements')

@section('content')
<!-- Low Stock Alerts -->
<div class="panel" style="margin-bottom: 24px; border-left: 4px solid var(--warning);">
    <div class="panel-header" style="margin-bottom: 12px;">
        <h2 class="panel-title" style="color: var(--warning);"><i class="ph ph-warning"></i> LOW STOCK ALERTS</h2>
    </div>
    <div style="display: flex; gap: 20px;">
        <div class="mini-card-item" style="flex: 1; border: 1px solid var(--border); padding: 15px; border-radius: 8px;">
            <div class="item-icon alert"><i class="ph ph-warning"></i></div>
            <div class="item-details">
                <div class="item-title">Office Chair (PRD-101)</div>
                <div class="item-meta">Current: 5 units</div>
                <div class="item-meta item-meta-highlight">Min required: 20 units</div>
            </div>
            <button class="quick-actions-btn" style="padding: 4px 8px; font-size: 12px; margin: 0;">Order More</button>
        </div>
        <div class="mini-card-item" style="flex: 1; border: 1px solid var(--border); padding: 15px; border-radius: 8px;">
            <div class="item-icon alert"><i class="ph ph-warning"></i></div>
            <div class="item-details">
                <div class="item-title">USB-C Dock (PRD-103)</div>
                <div class="item-meta">Current: 2 units</div>
                <div class="item-meta item-meta-highlight">Min required: 15 units</div>
            </div>
            <button class="quick-actions-btn" style="padding: 4px 8px; font-size: 12px; margin: 0;">Order More</button>
        </div>
    </div>
</div>

<div class="tables-row" style="grid-template-columns: 2fr 1fr;">
    <!-- Inventory Table -->
    <div class="panel">
        <div class="panel-header">
            <h2 class="panel-title">CURRENT INVENTORY</h2>
            <select class="select-filter">
                <option>All Warehouses</option>
                <option>Main Warehouse</option>
            </select>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Warehouse</th>
                    <th>In Stock</th>
                    <th>Allocated</th>
                    <th>Available</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="font-weight: 500;">Ergonomic Desk</td>
                    <td>Main WH</td>
                    <td>85</td>
                    <td>10</td>
                    <td>75</td>
                    <td><span class="status-badge status-completed">In Stock</span></td>
                </tr>
                <tr>
                    <td style="font-weight: 500;">Wireless Mouse</td>
                    <td>East WH</td>
                    <td>320</td>
                    <td>50</td>
                    <td>270</td>
                    <td><span class="status-badge status-completed">In Stock</span></td>
                </tr>
                <tr>
                    <td style="font-weight: 500;">Office Chair</td>
                    <td>Main WH</td>
                    <td>5</td>
                    <td>0</td>
                    <td>5</td>
                    <td><span class="status-badge status-pending">Low Stock</span></td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Stock In/Out Form -->
    <div class="panel">
        <div class="panel-header">
            <h2 class="panel-title">STOCK MOVEMENT</h2>
        </div>
        <div style="display: flex; gap: 10px; margin-bottom: 20px;">
            <button class="quick-actions-btn" style="flex: 1; margin: 0; background: var(--success-light); color: var(--success); border-color: var(--success);"><i class="ph ph-arrow-down-left"></i> Stock In</button>
            <button class="quick-actions-btn" style="flex: 1; margin: 0; background: var(--warning-light); color: var(--warning); border-color: var(--warning);"><i class="ph ph-arrow-up-right"></i> Stock Out</button>
        </div>
        <form style="display: flex; flex-direction: column; gap: 15px;">
            <div>
                <label style="font-size: 13px; color: var(--text-gray); margin-bottom: 4px; display: block;">Select Product</label>
                <select class="select-filter" style="width: 100%;">
                    <option>Ergonomic Desk</option>
                    <option>Wireless Mouse</option>
                    <option>Office Chair</option>
                </select>
            </div>
            <div>
                <label style="font-size: 13px; color: var(--text-gray); margin-bottom: 4px; display: block;">Quantity</label>
                <input type="number" class="select-filter" style="width: 100%;" placeholder="0">
            </div>
            <div>
                <label style="font-size: 13px; color: var(--text-gray); margin-bottom: 4px; display: block;">Remarks</label>
                <input type="text" class="select-filter" style="width: 100%;" placeholder="Reason for movement...">
            </div>
            <button type="button" class="quick-actions-btn" style="margin: 10px 0 0 0; background: var(--primary); color: white;">Submit Movement</button>
        </form>
    </div>
</div>
@endsection
