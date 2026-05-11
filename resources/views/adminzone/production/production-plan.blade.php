@extends('adminzone.layouts.app')
@section('title', 'Production Plan')
@section('content')
<div class="page-header-bar">
    <div><h1 class="page-heading">Production Plan</h1><p class="page-subheading">Weekly production targets and actual output</p></div>
    <button class="btn-primary-action"><i class="ph ph-calendar-plus"></i> Add to Plan</button>
</div>
<div class="plan-container-premium" style="max-width:none;">
    <div class="table-header"><h3 class="table-title">This Week's Plan</h3><span class="plan-week">(May 18 - May 24, 2025)</span></div>
    <div class="plan-list">
        @php
        $plan=[['name'=>'Office Chair','planned'=>150,'actual'=>150,'pct'=>100,'color'=>'#10b981'],['name'=>'Work Table','planned'=>80,'actual'=>52,'pct'=>65,'color'=>'#f59e0b'],['name'=>'Storage Cabinet','planned'=>50,'actual'=>20,'pct'=>40,'color'=>'#f59e0b'],['name'=>'Bookshelf','planned'=>120,'actual'=>0,'pct'=>0,'color'=>'#8b5cf6'],['name'=>'Meeting Chair','planned'=>200,'actual'=>30,'pct'=>15,'color'=>'#ef4444']];
        @endphp
        @foreach($plan as $p)
        <div class="plan-item">
            <div class="plan-item-icon"><i class="ph ph-package"></i></div>
            <div class="plan-item-body">
                <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:2px;">
                    <div class="plan-item-name">{{ $p['name'] }}</div>
                    <span class="plan-progress-pct" style="color:{{ $p['color'] }};">{{ $p['pct'] }}%</span>
                </div>
                <div class="plan-item-meta">Planned: {{ $p['planned'] }} &nbsp;|&nbsp; Actual: {{ $p['actual'] }}</div>
                <div class="plan-progress-wrap">
                    <div class="plan-progress-track" style="height:7px;">
                        <div class="plan-progress-bar" style="width:{{ $p['pct'] }}%;background:{{ $p['color'] }};"></div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="plan-footer">
        <span class="plan-footer-total">Total Planned: <strong>600</strong></span>
        <div class="plan-footer-overall">Overall Progress <span class="plan-overall-badge">54%</span></div>
    </div>
</div>
@endsection
