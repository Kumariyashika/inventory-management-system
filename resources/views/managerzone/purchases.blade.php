@extends('Managerzone.layout')

@section('title', 'Purchases - Inventory Pro')
@section('page_title', 'Purchasing & Suppliers')
@section('page_subtitle', 'Manage purchase orders and supplier relations')

@section('content')
<div class="tables-row" style="grid-template-columns: 2fr 1fr;">
    <!-- Purchase History -->
    <div class="panel">
        <div class="panel-header">
            <h2 class="panel-title">PURCHASE HISTORY</h2>
            <div style="display: flex; gap: 10px;">
                <input type="text" class="select-filter" placeholder="Search POs...">
            </div>
        </div>
        <table>
            <thead>
                <tr>
                    <th>PO #</th>
                    <th>Supplier</th>
                    <th>Date</th>
                    <th>Total</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>PO-2025-084</td>
                    <td style="font-weight: 500;">Global Office Supplies</td>
                    <td>May 24, 2025</td>
                    <td>$5,250.00</td>
                    <td><span class="status-badge status-progress">In Transit</span></td>
                </tr>
                <tr>
                    <td>PO-2025-085</td>
                    <td style="font-weight: 500;">Tech Wholesalers</td>
                    <td>May 22, 2025</td>
                    <td>$12,800.00</td>
                    <td><span class="status-badge status-completed">Received</span></td>
                </tr>
                <tr>
                    <td>PO-2025-086</td>
                    <td style="font-weight: 500;">Furnishings Co.</td>
                    <td>May 20, 2025</td>
                    <td>$3,100.00</td>
                    <td><span class="status-badge status-pending">Pending Approval</span></td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Right Column: Create PO & Suppliers -->
    <div style="display: flex; flex-direction: column; gap: 20px;">
        <!-- Purchase Order Form -->
        <div class="panel">
            <div class="panel-header">
                <h2 class="panel-title">CREATE PURCHASE ORDER</h2>
            </div>
            <form style="display: flex; flex-direction: column; gap: 15px;">
                <div>
                    <label style="font-size: 13px; color: var(--text-gray); margin-bottom: 4px; display: block;">Supplier</label>
                    <select class="select-filter" style="width: 100%;">
                        <option>Global Office Supplies</option>
                        <option>Tech Wholesalers</option>
                        <option>Furnishings Co.</option>
                    </select>
                </div>
                <div>
                    <label style="font-size: 13px; color: var(--text-gray); margin-bottom: 4px; display: block;">Required Date</label>
                    <input type="date" class="select-filter" style="width: 100%;">
                </div>
                <div>
                    <label style="font-size: 13px; color: var(--text-gray); margin-bottom: 4px; display: block;">Notes</label>
                    <input type="text" class="select-filter" style="width: 100%;" placeholder="Special instructions...">
                </div>
                <button type="button" class="quick-actions-btn" style="margin: 10px 0 0 0; background: var(--primary); color: white;">Draft PO</button>
            </form>
        </div>

        <!-- Supplier List -->
        <div class="panel">
            <div class="panel-header">
                <h2 class="panel-title">TOP SUPPLIERS</h2>
                <a href="#" class="panel-action">View All</a>
            </div>
            <div class="mini-card-item">
                <div class="item-icon" style="background: var(--purple-light); color: var(--purple);"><i class="ph ph-truck"></i></div>
                <div class="item-details">
                    <div class="item-title">Global Office Supplies</div>
                    <div class="item-meta">Rating: 4.8/5</div>
                </div>
            </div>
            <div class="mini-card-item">
                <div class="item-icon" style="background: var(--purple-light); color: var(--purple);"><i class="ph ph-truck"></i></div>
                <div class="item-details">
                    <div class="item-title">Tech Wholesalers</div>
                    <div class="item-meta">Rating: 4.5/5</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
