@extends('adminzone.layouts.app')
@section('title', 'Production Reports')
@section('content')
<div class="page-header-bar">
    <div><h1 class="page-heading">Production Reports</h1><p class="page-subheading">Analytics and insights on production performance</p></div>
    <button class="btn-primary-action"><i class="ph ph-download-simple"></i> Export Report</button>
</div>
<div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(160px,1fr));gap:12px;margin-bottom:20px;">
    @php
    $stats=[['label'=>'Total Orders','value'=>'1,250','icon'=>'ph-factory','color'=>'#4f46e5'],['label'=>'Completed','value'=>'1,025','icon'=>'ph-check-circle','color'=>'#10b981'],['label'=>'In Progress','value'=>'210','icon'=>'ph-spinner','color'=>'#f59e0b'],['label'=>'Pending','value'=>'60','icon'=>'ph-clock','color'=>'#8b5cf6'],['label'=>'On Hold','value'=>'15','icon'=>'ph-pause-circle','color'=>'#ef4444']];
    @endphp
    @foreach($stats as $s)
    <div class="form-card" style="margin-bottom:0;text-align:center;padding:16px;">
        <div style="font-size:1.5rem;color:{{ $s['color'] }};margin-bottom:6px;"><i class="ph {{ $s['icon'] }}"></i></div>
        <div style="font-size:1.3rem;font-weight:700;color:#0f172a;">{{ $s['value'] }}</div>
        <div style="font-size:0.75rem;color:#64748b;">{{ $s['label'] }}</div>
    </div>
    @endforeach
</div>
<div class="table-container-premium" style="margin-bottom:0;">
    <div class="table-header"><h3 class="table-title">Monthly Summary</h3></div>
    <table class="premium-table">
        <thead><tr><th>Month</th><th>Planned</th><th>Completed</th><th>In Progress</th><th>Efficiency</th></tr></thead>
        <tbody>
            @php
            $months=[['month'=>'May 2025','planned'=>600,'completed'=>252,'inprog'=>210,'eff'=>'42%'],['month'=>'Apr 2025','planned'=>580,'completed'=>520,'inprog'=>0,'eff'=>'90%'],['month'=>'Mar 2025','planned'=>650,'completed'=>610,'inprog'=>0,'eff'=>'94%']];
            @endphp
            @foreach($months as $m)
            <tr>
                <td style="font-weight:600;">{{ $m['month'] }}</td>
                <td class="text-muted">{{ $m['planned'] }}</td>
                <td style="color:#10b981;font-weight:600;">{{ $m['completed'] }}</td>
                <td style="color:#f59e0b;font-weight:600;">{{ $m['inprog'] }}</td>
                <td><span class="status-pill {{ (int)$m['eff']>=80?'status-completed':'status-inprogress' }}">{{ $m['eff'] }}</span></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
