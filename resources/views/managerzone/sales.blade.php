@extends('Managerzone.layout')

@section('title', 'Sales - Inventory Pro')
@section('page_title', 'Sales & Invoicing')
@section('page_subtitle', 'Manage point of sale and sales history')

@section('content')
<div class="tables-row" style="grid-template-columns: 2fr 1fr;">
    <!-- Sales History -->
    <div class="panel">
        <div class="panel-header">
            <h2 class="panel-title">SALES HISTORY</h2>
            <div style="display: flex; gap: 10px;">
                <input type="date" class="select-filter">
                <button class="quick-actions-btn" style="margin: 0; padding: 6px 12px;"><i class="ph ph-export"></i> Export</button>
            </div>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Invoice #</th>
                    <th>Customer</th>
                    <th>Date</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>INV-2025-001</td>
                    <td>Walk-in Customer</td>
                    <td>May 24, 2025</td>
                    <td>$450.00</td>
                    <td><span class="status-badge status-completed">Paid</span></td>
                    <td><a href="#" class="panel-action">View</a></td>
                </tr>
                <tr>
                    <td>INV-2025-002</td>
                    <td>Acme Corp</td>
                    <td>May 23, 2025</td>
                    <td>$1,250.00</td>
                    <td><span class="status-badge status-progress">Partial</span></td>
                    <td><a href="#" class="panel-action">View</a></td>
                </tr>
                <tr>
                    <td>INV-2025-003</td>
                    <td>Tech Solutions</td>
                    <td>May 22, 2025</td>
                    <td>$3,400.00</td>
                    <td><span class="status-badge status-pending">Unpaid</span></td>
                    <td><a href="#" class="panel-action">View</a></td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- POS Billing / Create Invoice -->
    <div style="display: flex; flex-direction: column; gap: 20px;">
        <div class="panel" style="background: var(--primary); color: white;">
            <div class="panel-header" style="margin-bottom: 10px;">
                <h2 class="panel-title" style="color: white;">POS BILLING</h2>
            </div>
            <p style="font-size: 13px; margin-bottom: 20px; opacity: 0.9;">Open the Point of Sale terminal to process new sales and generate receipts instantly.</p>
            <button class="quick-actions-btn" style="width: 100%; margin: 0; background: white; color: var(--primary); font-size: 16px; padding: 15px;"><i class="ph ph-desktop"></i> Launch POS</button>
        </div>

        <div class="panel">
            <div class="panel-header">
                <h2 class="panel-title">CREATE INVOICE</h2>
            </div>
            <form style="display: flex; flex-direction: column; gap: 15px;">
                <div>
                    <label style="font-size: 13px; color: var(--text-gray); margin-bottom: 4px; display: block;">Customer</label>
                    <select class="select-filter" style="width: 100%;">
                        <option>Select Customer...</option>
                        <option>Acme Corp</option>
                        <option>Tech Solutions</option>
                    </select>
                </div>
                <div>
                    <label style="font-size: 13px; color: var(--text-gray); margin-bottom: 4px; display: block;">Add Item</label>
                    <input type="text" class="select-filter" style="width: 100%;" placeholder="Search by SKU or Name...">
                </div>
                <div style="border-top: 1px solid var(--border); padding-top: 15px; margin-top: 10px; display: flex; justify-content: space-between; font-weight: 600;">
                    <span>Total Amount:</span>
                    <span>$0.00</span>
                </div>
                <button type="button" class="quick-actions-btn" style="margin: 0; background: var(--primary); color: white;">Generate Invoice</button>
            </form>
        </div>
    </div>
</div>
@endsection
