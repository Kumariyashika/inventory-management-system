@extends('adminzone.layouts.app')
@section('title', 'Warehouse')
@section('content')
<div class="page-header-bar">
    <div><h1 class="page-heading">Warehouse</h1><p class="page-subheading">Manage warehouse locations and zones</p></div>
    <button class="btn-primary-action"><i class="ph ph-plus"></i> Add Warehouse</button>
</div>
<div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:16px;margin-bottom:24px;">
    @php
    $warehouses=[['id'=>'WH-01','name'=>'Main Warehouse','city'=>'Mumbai','capacity'=>5000,'used'=>3820,'manager'=>'Rahul Sharma','status'=>'Active'],['id'=>'WH-02','name'=>'North Zone','city'=>'Delhi','capacity'=>3000,'used'=>1200,'manager'=>'Ankit Verma','status'=>'Active'],['id'=>'WH-03','name'=>'South Depot','city'=>'Bangalore','capacity'=>2000,'used'=>1990,'manager'=>'Priya Mehta','status'=>'Near Full']];
    @endphp
    @foreach($warehouses as $w)
    @php $pct = round($w['used']/$w['capacity']*100); $color = $pct>90?'#ef4444':($pct>60?'#f59e0b':'#10b981'); @endphp
    <div class="form-card" style="margin-bottom:0;border-top:4px solid {{ $color }};">
        <div style="display:flex;justify-content:space-between;align-items:start;margin-bottom:12px;">
            <div>
                <div style="font-weight:700;color:#0f172a;font-size:0.95rem;">{{ $w['name'] }}</div>
                <div style="font-size:0.75rem;color:#64748b;">{{ $w['id'] }} · {{ $w['city'] }}</div>
            </div>
            <span class="status-pill {{ $w['status']==='Active'?'status-completed':'status-inprogress' }}">{{ $w['status'] }}</span>
        </div>
        <div style="font-size:0.78rem;color:#64748b;margin-bottom:10px;">Manager: <strong>{{ $w['manager'] }}</strong></div>
        <div style="display:flex;justify-content:space-between;font-size:0.78rem;margin-bottom:6px;">
            <span>Used: {{ number_format($w['used']) }} / {{ number_format($w['capacity']) }} units</span>
            <span style="font-weight:700;color:{{ $color }};">{{ $pct }}%</span>
        </div>
        <div style="background:#f1f5f9;border-radius:4px;height:6px;overflow:hidden;">
            <div style="height:100%;border-radius:4px;background:{{ $color }};width:{{ $pct }}%;"></div>
        </div>
        <div class="action-btns" style="margin-top:14px;justify-content:flex-end;">
            <button class="action-btn edit-btn"><i class="ph ph-pencil-simple"></i></button>
            <button class="action-btn delete-btn"><i class="ph ph-trash"></i></button>
        </div>
    </div>
    @endforeach
</div>
@endsection
