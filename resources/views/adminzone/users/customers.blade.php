@extends('adminzone.layouts.app')
@section('title', 'Customers')

@section('content')
<div class="page-header-bar">
    <div>
        <h1 class="page-heading">Customers</h1>
        <p class="page-subheading">Manage your customer accounts and contacts</p>
    </div>
    <button class="btn-primary-action"><i class="ph ph-plus"></i> Add Customer</button>
</div>

<div class="table-container-premium" style="margin-bottom:0;">
    <div class="table-filter-bar">
        <div class="search-wrap">
            <i class="ph ph-magnifying-glass"></i>
            <input type="text" class="search-input" placeholder="Search customers...">
        </div>
    </div>

    <table class="premium-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Customer Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>City</th>
                <th>Total Orders</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @php
            $customers = [
                ['id'=>1,'name'=>'Alpha Corp','email'=>'contact@alpha.com','phone'=>'+91 98000 11111','city'=>'Mumbai','orders'=>24,'status'=>'Active'],
                ['id'=>2,'name'=>'Beta Industries','email'=>'info@beta.com','phone'=>'+91 97000 22222','city'=>'Delhi','orders'=>18,'status'=>'Active'],
                ['id'=>3,'name'=>'Gamma Ltd','email'=>'hello@gamma.com','phone'=>'+91 96000 33333','city'=>'Bangalore','orders'=>5,'status'=>'Inactive'],
                ['id'=>4,'name'=>'Delta Traders','email'=>'sales@delta.com','phone'=>'+91 95000 44444','city'=>'Pune','orders'=>31,'status'=>'Active'],
                ['id'=>5,'name'=>'Epsilon Co','email'=>'ops@epsilon.com','phone'=>'+91 94000 55555','city'=>'Chennai','orders'=>12,'status'=>'Active'],
            ];
            @endphp
            @foreach($customers as $c)
            <tr>
                <td class="text-muted">{{ $c['id'] }}</td>
                <td><strong>{{ $c['name'] }}</strong></td>
                <td class="text-muted">{{ $c['email'] }}</td>
                <td class="text-muted">{{ $c['phone'] }}</td>
                <td class="text-muted">{{ $c['city'] }}</td>
                <td style="font-weight:600;">{{ $c['orders'] }}</td>
                <td>
                    @if($c['status']==='Active')
                        <span class="status-pill status-completed">Active</span>
                    @else
                        <span class="status-pill status-onhold">Inactive</span>
                    @endif
                </td>
                <td>
                    <div class="action-btns">
                        <button class="action-btn edit-btn" title="Edit"><i class="ph ph-pencil-simple"></i></button>
                        <button class="action-btn delete-btn" title="Delete"><i class="ph ph-trash"></i></button>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="table-footer">
        <span class="table-info">Showing 1 to 5 of 5 customers</span>
        <div class="pagination">
            <button class="page-btn"><i class="ph ph-caret-left"></i></button>
            <button class="page-btn active">1</button>
            <button class="page-btn"><i class="ph ph-caret-right"></i></button>
        </div>
    </div>
</div>
@endsection
