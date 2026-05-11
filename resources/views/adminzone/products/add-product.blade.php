@extends('adminzone.layouts.app')
@section('title', 'Add Product')
@section('content')
<div class="page-header-bar">
    <div>
        <h1 class="page-heading">Add Product</h1>
        <p class="page-subheading">Create a new product and assign it to a category</p>
    </div>
</div>
<div class="form-card">
    <form action="#" method="POST">
        @csrf
        <div class="form-grid-2">
            <div class="form-field">
                <label class="field-label">Product Name</label>
                <input type="text" class="field-input" placeholder="Enter product name">
            </div>
            <div class="form-field">
                <label class="field-label">SKU / Code</label>
                <input type="text" class="field-input" placeholder="e.g. PRD-0001">
            </div>
            <div class="form-field">
                <label class="field-label">Category</label>
                <select class="field-input">
                    <option>Select category...</option>
                    <option>Furniture</option>
                    <option>Electronics</option>
                    <option>Raw Materials</option>
                </select>
            </div>
            <div class="form-field">
                <label class="field-label">Unit</label>
                <select class="field-input">
                    <option>Piece</option>
                    <option>Kg</option>
                    <option>Litre</option>
                    <option>Box</option>
                </select>
            </div>
            <div class="form-field">
                <label class="field-label">Cost Price (₹)</label>
                <input type="number" class="field-input" placeholder="0.00">
            </div>
            <div class="form-field">
                <label class="field-label">Selling Price (₹)</label>
                <input type="number" class="field-input" placeholder="0.00">
            </div>
            <div class="form-field">
                <label class="field-label">Stock Quantity</label>
                <input type="number" class="field-input" placeholder="0">
            </div>
            <div class="form-field">
                <label class="field-label">Reorder Level</label>
                <input type="number" class="field-input" placeholder="Minimum stock alert">
            </div>
        </div>
        <div class="form-field" style="margin-bottom:16px;">
            <label class="field-label">Description</label>
            <textarea class="field-input" rows="3" placeholder="Product description..."></textarea>
        </div>
        <div class="form-actions">
            <a href="/admin/products/list" class="btn-outline">Cancel</a>
            <button type="submit" class="btn-primary-action">Save Product</button>
        </div>
    </form>
</div>
@endsection
