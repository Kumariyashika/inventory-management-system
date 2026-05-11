@extends('adminzone.layouts.app')
@section('title', 'Product List')
@section('content')
<div class="page-header-bar">
    <div>
        <h1 class="page-heading">Product List</h1>
        <p class="page-subheading">View and manage all products in the system</p>
    </div>
    <a href="/admin/products/add" class="btn-primary-action"><i class="ph ph-plus"></i> Add Product</a>
</div>
<div class="table-container-premium" style="margin-bottom:0;">
    <div class="table-filter-bar">
        <div class="search-wrap"><i class="ph ph-magnifying-glass"></i><input type="text" class="search-input" placeholder="Search products..."></div>
        <select class="field-input" style="width:150px;font-size:0.82rem;padding:8px 12px;">
            <option>All Categories</option><option>Furniture</option><option>Electronics</option><option>Raw Materials</option>
        </select>
    </div>
    <table class="premium-table">
        <thead>
            <tr><th>#</th><th>Product</th><th>SKU</th><th>Category</th><th>Stock</th><th>Cost Price</th><th>Selling Price</th><th>Status</th><th>Actions</th></tr>
        </thead>
        <tbody>
            @php
            $products = [
                ['id'=>1,'name'=>'Office Chair','sku'=>'PRD-0001','cat'=>'Furniture','stock'=>150,'cost'=>2500,'sell'=>4200,'status'=>'Active'],
                ['id'=>2,'name'=>'Work Table','sku'=>'PRD-0002','cat'=>'Furniture','stock'=>80,'cost'=>4500,'sell'=>7800,'status'=>'Active'],
                ['id'=>3,'name'=>'Storage Cabinet','sku'=>'PRD-0003','cat'=>'Furniture','stock'=>50,'cost'=>3200,'sell'=>5500,'status'=>'Active'],
                ['id'=>4,'name'=>'Bookshelf','sku'=>'PRD-0004','cat'=>'Furniture','stock'=>5,'cost'=>1800,'sell'=>3200,'status'=>'Low Stock'],
                ['id'=>5,'name'=>'Meeting Chair','sku'=>'PRD-0005','cat'=>'Furniture','stock'=>200,'cost'=>1500,'sell'=>2800,'status'=>'Active'],
                ['id'=>6,'name'=>'Steel Sheet 2mm','sku'=>'RAW-0001','cat'=>'Raw Materials','stock'=>0,'cost'=>800,'sell'=>0,'status'=>'Out of Stock'],
            ];
            @endphp
            @foreach($products as $p)
            <tr>
                <td class="text-muted">{{ $p['id'] }}</td>
                <td><strong>{{ $p['name'] }}</strong></td>
                <td class="text-muted">{{ $p['sku'] }}</td>
                <td class="text-muted">{{ $p['cat'] }}</td>
                <td style="font-weight:600;">{{ $p['stock'] }}</td>
                <td class="text-muted">₹{{ number_format($p['cost']) }}</td>
                <td style="font-weight:600;color:#10b981;">₹{{ number_format($p['sell']) }}</td>
                <td>
                    @if($p['status']==='Active') <span class="status-pill status-completed">Active</span>
                    @elseif($p['status']==='Low Stock') <span class="status-pill status-inprogress">Low Stock</span>
                    @else <span class="status-pill status-onhold">Out of Stock</span>
                    @endif
                </td>
                <td><div class="action-btns"><button class="action-btn edit-btn" title="Edit"><i class="ph ph-pencil-simple"></i></button><button class="action-btn delete-btn" title="Delete"><i class="ph ph-trash"></i></button></div></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="table-footer">
        <span class="table-info">Showing 1 to 6 of 6 products</span>
        <div class="pagination"><button class="page-btn"><i class="ph ph-caret-left"></i></button><button class="page-btn active">1</button><button class="page-btn"><i class="ph ph-caret-right"></i></button></div>
    </div>
</div>
@endsection
