@extends('adminzone.layouts.app')
@section('title', 'System Settings')
@section('content')
<div class="page-header-bar">
    <div><h1 class="page-heading">System Settings</h1><p class="page-subheading">Configure application preferences and system parameters</p></div>
    <button class="btn-primary-action"><i class="ph ph-floppy-disk"></i> Save Changes</button>
</div>
<div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(340px,1fr));gap:16px;">
    <div class="form-card" style="margin-bottom:0;">
        <h3 class="table-title" style="margin-bottom:16px;">Company Information</h3>
        <div class="form-field" style="margin-bottom:12px;"><label class="field-label">Company Name</label><input type="text" class="field-input" value="Inventory Pro Pvt Ltd"></div>
        <div class="form-field" style="margin-bottom:12px;"><label class="field-label">Email</label><input type="email" class="field-input" value="admin@inventorypro.com"></div>
        <div class="form-field" style="margin-bottom:12px;"><label class="field-label">Phone</label><input type="text" class="field-input" value="+91 98765 43210"></div>
        <div class="form-field"><label class="field-label">Address</label><textarea class="field-input" rows="2">123 Industrial Area, Mumbai, MH</textarea></div>
    </div>
    <div class="form-card" style="margin-bottom:0;">
        <h3 class="table-title" style="margin-bottom:16px;">System Preferences</h3>
        <div class="form-field" style="margin-bottom:12px;"><label class="field-label">Default Currency</label><select class="field-input"><option>INR (₹)</option><option>USD ($)</option><option>EUR (€)</option></select></div>
        <div class="form-field" style="margin-bottom:12px;"><label class="field-label">Date Format</label><select class="field-input"><option>DD/MM/YYYY</option><option>MM/DD/YYYY</option><option>YYYY-MM-DD</option></select></div>
        <div class="form-field" style="margin-bottom:12px;"><label class="field-label">Low Stock Threshold (default)</label><input type="number" class="field-input" value="10"></div>
        <div class="form-field"><label class="field-label">Tax Rate (%)</label><input type="number" class="field-input" value="18"></div>
    </div>
    <div class="form-card" style="margin-bottom:0;">
        <h3 class="table-title" style="margin-bottom:16px;">Notification Settings</h3>
        @php $notifs=[['label'=>'Low stock alerts','on'=>true],['label'=>'Order notifications','on'=>true],['label'=>'Expiry alerts','on'=>true],['label'=>'Production updates','on'=>false],['label'=>'Weekly reports','on'=>false]]; @endphp
        @foreach($notifs as $n)
        <div style="display:flex;justify-content:space-between;align-items:center;padding:10px 0;border-bottom:1px solid #f1f5f9;font-size:0.85rem;">
            <span style="color:#0f172a;">{{ $n['label'] }}</span>
            <div style="width:36px;height:20px;border-radius:10px;background:{{ $n['on']?'#10b981':'#e2e8f0' }};position:relative;cursor:pointer;">
                <div style="width:14px;height:14px;border-radius:50%;background:white;position:absolute;top:3px;{{ $n['on']?'right:3px':'left:3px' }};transition:all 0.2s;"></div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
