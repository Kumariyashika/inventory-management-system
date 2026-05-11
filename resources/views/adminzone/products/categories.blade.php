@extends('adminzone.layouts.app')
@section('title', 'Categories')
@section('content')
<div class="page-header-bar">
    <div><h1 class="page-heading">Categories</h1><p class="page-subheading">Manage product categories</p></div>
    <button class="btn-primary-action"><i class="ph ph-plus"></i> Add Category</button>
</div>
<div class="table-container-premium" style="margin-bottom:0;">
    <table class="premium-table">
        <thead><tr><th>#</th><th>Category Name</th><th>Description</th><th>Products</th><th>Status</th><th>Actions</th></tr></thead>
        <tbody>
            @php
            $cats=[['id'=>1,'name'=>'Furniture','desc'=>'Chairs, Tables, Cabinets','count'=>5,'status'=>'Active'],['id'=>2,'name'=>'Electronics','desc'=>'Devices and accessories','count'=>2,'status'=>'Active'],['id'=>3,'name'=>'Raw Materials','desc'=>'Steel, Plastic, Wood','count'=>8,'status'=>'Active'],['id'=>4,'name'=>'Packaging','desc'=>'Boxes and wraps','count'=>3,'status'=>'Inactive']];
            @endphp
            @foreach($cats as $c)
            <tr>
                <td class="text-muted">{{ $c['id'] }}</td>
                <td><strong>{{ $c['name'] }}</strong></td>
                <td class="text-muted">{{ $c['desc'] }}</td>
                <td style="font-weight:600;">{{ $c['count'] }}</td>
                <td>@if($c['status']==='Active')<span class="status-pill status-completed">Active</span>@else<span class="status-pill status-onhold">Inactive</span>@endif</td>
                <td><div class="action-btns"><button class="action-btn edit-btn"><i class="ph ph-pencil-simple"></i></button><button class="action-btn delete-btn"><i class="ph ph-trash"></i></button></div></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
