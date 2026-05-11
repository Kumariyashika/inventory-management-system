@extends('adminzone.layouts.app')
@section('title', 'Sales List')
@section('content')
<div class="page-header-bar">
    <div><h1 class="page-heading">Sales List</h1><p class="page-subheading">All invoices and sales transactions</p></div>
    <a href="/admin/sales/invoice" class="btn-primary-action"><i class="ph ph-plus"></i> New Invoice</a>
</div>
<div class="table-container-premium" style="margin-bottom:0;">
    <div class="table-filter-bar"><div class="search-wrap"><i class="ph ph-magnifying-glass"></i><input type="text" class="search-input" placeholder="Search invoices..."></div></div>
    <table class="premium-table">
        <thead><tr><th>Invoice No.</th><th>Customer</th><th>Date</th><th>Due Date</th><th>Amount</th><th>Payment</th><th>Actions</th></tr></thead>
        <tbody>
            @php
            $sales=[['inv'=>'INV-2025-050','cust'=>'Alpha Corp','date'=>'May 05, 2025','due'=>'May 15, 2025','amount'=>84780,'payment'=>'Paid'],['inv'=>'INV-2025-049','cust'=>'Beta Industries','date'=>'May 04, 2025','due'=>'May 12, 2025','amount'=>52000,'payment'=>'Pending'],['inv'=>'INV-2025-048','cust'=>'Delta Traders','date'=>'May 02, 2025','due'=>'May 10, 2025','amount'=>31500,'payment'=>'Overdue'],['inv'=>'INV-2025-047','cust'=>'Epsilon Co','date'=>'Apr 30, 2025','due'=>'May 08, 2025','amount'=>18900,'payment'=>'Paid']];
            @endphp
            @foreach($sales as $s)
            <tr>
                <td style="font-weight:600;color:#4f46e5;">{{ $s['inv'] }}</td>
                <td><strong>{{ $s['cust'] }}</strong></td>
                <td class="text-muted">{{ $s['date'] }}</td>
                <td class="text-muted">{{ $s['due'] }}</td>
                <td style="font-weight:700;">₹{{ number_format($s['amount']) }}</td>
                <td>
                    @if($s['payment']==='Paid')<span class="status-pill status-completed">Paid</span>
                    @elseif($s['payment']==='Pending')<span class="status-pill status-inprogress">Pending</span>
                    @else<span class="status-pill status-onhold">Overdue</span>@endif
                </td>
                <td><div class="action-btns"><button class="action-btn edit-btn" title="View"><i class="ph ph-eye"></i></button><button class="action-btn edit-btn" title="Print"><i class="ph ph-printer"></i></button></div></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="table-footer"><span class="table-info">Showing 1 to 4 of 50 invoices</span><div class="pagination"><button class="page-btn"><i class="ph ph-caret-left"></i></button><button class="page-btn active">1</button><button class="page-btn">2</button><button class="page-btn">3</button><button class="page-btn"><i class="ph ph-caret-right"></i></button></div></div>
</div>
@endsection
