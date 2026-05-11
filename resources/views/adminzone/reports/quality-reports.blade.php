@extends('adminzone.layouts.app')
@section('title', 'Quality Reports')
@section('content')
<div class="page-header-bar">
    <div><h1 class="page-heading">Quality Reports</h1><p class="page-subheading">Defect tracking and quality control records</p></div>
    <button class="btn-primary-action"><i class="ph ph-download-simple"></i> Export</button>
</div>
<div class="table-container-premium" style="margin-bottom:0;">
    <table class="premium-table">
        <thead><tr><th>Batch ID</th><th>Product</th><th>Produced</th><th>Passed</th><th>Failed</th><th>Defect Rate</th><th>Status</th></tr></thead>
        <tbody>
            @php
            $quality=[['batch'=>'QA-B-001','product'=>'Office Chair','produced'=>150,'passed'=>148,'failed'=>2,'rate'=>'1.3%','status'=>'Pass'],['batch'=>'QA-B-002','product'=>'Work Table','produced'=>52,'passed'=>49,'failed'=>3,'rate'=>'5.8%','status'=>'Review'],['batch'=>'QA-B-003','product'=>'Storage Cabinet','produced'=>20,'passed'=>18,'failed'=>2,'rate'=>'10%','status'=>'Fail']];
            @endphp
            @foreach($quality as $q)
            <tr>
                <td style="font-weight:600;color:#4f46e5;">{{ $q['batch'] }}</td>
                <td><strong>{{ $q['product'] }}</strong></td>
                <td class="text-muted">{{ $q['produced'] }}</td>
                <td style="color:#10b981;font-weight:600;">{{ $q['passed'] }}</td>
                <td style="color:#ef4444;font-weight:600;">{{ $q['failed'] }}</td>
                <td style="font-weight:700;">{{ $q['rate'] }}</td>
                <td>
                    @if($q['status']==='Pass')<span class="status-pill status-completed">Pass</span>
                    @elseif($q['status']==='Review')<span class="status-pill status-inprogress">Review</span>
                    @else<span class="status-pill status-onhold">Fail</span>@endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
