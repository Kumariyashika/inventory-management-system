@extends('Managerzone.layout')

@section('title', 'Products - Inventory Pro')
@section('page_title', 'Products Management')
@section('page_subtitle', 'Manage product catalog and categories')

@section('content')
<div class="tables-row" style="grid-template-columns: 2fr 1fr;">
    <!-- Product List -->
    <div class="panel">
        <div class="panel-header">
            <h2 class="panel-title">PRODUCT LIST</h2>
            <div style="display: flex; gap: 10px;">
                <input type="text" class="select-filter" placeholder="Search products...">
            </div>
        </div>
        <table>
            <thead>
                <tr>
                    <th>SKU</th>
                    <th>Product Name</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>PRD-101</td>
                    <td style="font-weight: 500;">Ergonomic Office Chair</td>
                    <td>Furniture</td>
                    <td>$199.99</td>
                    <td>45</td>
                    <td><span class="status-badge status-completed">Active</span></td>
                </tr>
                <tr>
                    <td>PRD-102</td>
                    <td style="font-weight: 500;">Wireless Keyboard</td>
                    <td>Electronics</td>
                    <td>$49.50</td>
                    <td>120</td>
                    <td><span class="status-badge status-completed">Active</span></td>
                </tr>
                <tr>
                    <td>PRD-103</td>
                    <td style="font-weight: 500;">USB-C Docking Station</td>
                    <td>Accessories</td>
                    <td>$89.00</td>
                    <td>15</td>
                    <td><span class="status-badge status-warning">Low Stock</span></td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Right Column: Add Product & Categories -->
    <div style="display: flex; flex-direction: column; gap: 20px;">
        <!-- Add Product Form -->
        <div class="panel">
            <div class="panel-header">
                <h2 class="panel-title">QUICK ADD PRODUCT</h2>
            </div>
            <form style="display: flex; flex-direction: column; gap: 15px;">
                <div>
                    <label style="font-size: 13px; color: var(--text-gray); margin-bottom: 4px; display: block;">Product Name</label>
                    <input type="text" class="select-filter" style="width: 100%;" placeholder="e.g. Standing Desk">
                </div>
                <div>
                    <label style="font-size: 13px; color: var(--text-gray); margin-bottom: 4px; display: block;">Category</label>
                    <select class="select-filter" style="width: 100%;">
                        <option>Furniture</option>
                        <option>Electronics</option>
                        <option>Accessories</option>
                    </select>
                </div>
                <div style="display: flex; gap: 10px;">
                    <div style="flex: 1;">
                        <label style="font-size: 13px; color: var(--text-gray); margin-bottom: 4px; display: block;">Price</label>
                        <input type="number" class="select-filter" style="width: 100%;" placeholder="0.00">
                    </div>
                    <div style="flex: 1;">
                        <label style="font-size: 13px; color: var(--text-gray); margin-bottom: 4px; display: block;">Initial Stock</label>
                        <input type="number" class="select-filter" style="width: 100%;" placeholder="0">
                    </div>
                </div>
                <button type="button" class="quick-actions-btn" style="margin: 10px 0 0 0; background: var(--primary); color: white;">Save Product</button>
            </form>
        </div>

        <!-- Category Management -->
        <div class="panel">
            <div class="panel-header">
                <h2 class="panel-title">CATEGORIES</h2>
                <a href="#" class="panel-action">Manage</a>
            </div>
            <div class="mini-card-item">
                <div class="item-icon" style="background: var(--primary-light); color: var(--primary);"><i class="ph ph-armchair"></i></div>
                <div class="item-details">
                    <div class="item-title">Furniture</div>
                    <div class="item-meta">124 Products</div>
                </div>
            </div>
            <div class="mini-card-item">
                <div class="item-icon" style="background: var(--success-light); color: var(--success);"><i class="ph ph-desktop"></i></div>
                <div class="item-details">
                    <div class="item-title">Electronics</div>
                    <div class="item-meta">85 Products</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
