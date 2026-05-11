@extends('adminzone.layouts.app')
@section('title', 'Suppliers')

@section('content')
<div class="page-header-bar">
    <div>
        <h1 class="page-heading">Suppliers</h1>
        <p class="page-subheading">Manage your supplier contacts and details</p>
    </div>
    <button class="btn-primary-action"><i class="ph ph-plus"></i> Add Supplier</button>
</div>

<div class="table-container-premium" style="margin-bottom:0;">
    <div class="table-filter-bar">
        <div class="search-wrap">
            <i class="ph ph-magnifying-glass"></i>
            <input type="text" class="search-input" placeholder="Search suppliers...">
        </div>
    </div>

    <table class="premium-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Supplier Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>City</th>
                <th>Products Supplied</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @php
            $suppliers = [
                ['id'=>1,'name'=>'RawMat Industries','email'=>'info@rawmat.com','phone'=>'+91 90001 11100','city'=>'Surat','products'=>12,'status'=>'Active'],
                ['id'=>2,'name'=>'FastParts Pvt Ltd','email'=>'supply@fastparts.com','phone'=>'+91 80002 22200','city'=>'Ahmedabad','products'=>8,'status'=>'Active'],
                ['id'=>3,'name'=>'SteelKing Corp','email'=>'orders@steelking.com','phone'=>'+91 70003 33300','city'=>'Jaipur','products'=>5,'status'=>'Inactive'],
                ['id'=>4,'name'=>'PlastiWorks','email'=>'hello@plastiworks.com','phone'=>'+91 60004 44400','city'=>'Hyderabad','products'=>20,'status'=>'Active'],
                ['id'=>5,'name'=>'WoodCraft Supplies','email'=>'craft@woodcraft.com','phone'=>'+91 50005 55500','city'=>'Kolkata','products'=>15,'status'=>'Active'],
            ];
            @endphp
            @foreach($suppliers as $s)
            <tr>
                <td class="text-muted">{{ $s['id'] }}</td>
                <td><strong>{{ $s['name'] }}</strong></td>
                <td class="text-muted">{{ $s['email'] }}</td>
                <td class="text-muted">{{ $s['phone'] }}</td>
                <td class="text-muted">{{ $s['city'] }}</td>
                <td style="font-weight:600;">{{ $s['products'] }}</td>
                <td>
                    @if($s['status']==='Active')
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
        <span class="table-info">Showing 1 to 5 of 5 suppliers</span>
        <div class="pagination">
            <button class="page-btn"><i class="ph ph-caret-left"></i></button>
            <button class="page-btn active">1</button>
            <button class="page-btn"><i class="ph ph-caret-right"></i></button>
        </div>
    </div>
</div>
@endsection
