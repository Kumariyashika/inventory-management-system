@extends('Managerzone.layout')

@section('title', 'Settings - Inventory Pro')
@section('page_title', 'Account & System Settings')
@section('page_subtitle', 'Manage your profile, security, and permissions')

@section('content')
<div class="tables-row" style="grid-template-columns: 1fr 2fr;">
    <!-- Navigation Menu -->
    <div class="panel" style="padding: 0; overflow: hidden;">
        <div style="display: flex; flex-direction: column;">
            <a href="#" style="padding: 20px; border-bottom: 1px solid var(--border); display: flex; align-items: center; gap: 12px; text-decoration: none; color: var(--primary); background: var(--primary-light); font-weight: 500;">
                <i class="ph ph-user" style="font-size: 20px;"></i> Profile Settings
            </a>
            <a href="#" style="padding: 20px; border-bottom: 1px solid var(--border); display: flex; align-items: center; gap: 12px; text-decoration: none; color: var(--text-dark); font-weight: 500;">
                <i class="ph ph-lock-key" style="font-size: 20px;"></i> Security Settings
            </a>
            <a href="#" style="padding: 20px; display: flex; align-items: center; gap: 12px; text-decoration: none; color: var(--text-dark); font-weight: 500;">
                <i class="ph ph-shield-star" style="font-size: 20px;"></i> Role Permissions
            </a>
        </div>
    </div>

    <!-- Profile Settings Form -->
    <div class="panel">
        <div class="panel-header">
            <h2 class="panel-title">PROFILE SETTINGS</h2>
        </div>
        
        <div style="display: flex; gap: 20px; margin-bottom: 30px; align-items: center;">
            <img src="https://ui-avatars.com/api/?name=John+Manager&background=random&size=100" alt="Profile" style="border-radius: 50%;">
            <div>
                <button class="quick-actions-btn" style="margin: 0; margin-bottom: 10px; padding: 6px 12px;"><i class="ph ph-upload"></i> Upload New</button>
                <button class="quick-actions-btn" style="margin: 0; padding: 6px 12px; border: none; color: var(--danger);">Remove Avatar</button>
            </div>
        </div>

        <form style="display: flex; flex-direction: column; gap: 20px;">
            <div style="display: flex; gap: 20px;">
                <div style="flex: 1;">
                    <label style="font-size: 13px; color: var(--text-gray); margin-bottom: 4px; display: block;">First Name</label>
                    <input type="text" class="select-filter" style="width: 100%;" value="John">
                </div>
                <div style="flex: 1;">
                    <label style="font-size: 13px; color: var(--text-gray); margin-bottom: 4px; display: block;">Last Name</label>
                    <input type="text" class="select-filter" style="width: 100%;" value="Manager">
                </div>
            </div>
            
            <div>
                <label style="font-size: 13px; color: var(--text-gray); margin-bottom: 4px; display: block;">Email Address</label>
                <input type="email" class="select-filter" style="width: 100%;" value="john.manager@inventorypro.com">
            </div>

            <div>
                <label style="font-size: 13px; color: var(--text-gray); margin-bottom: 4px; display: block;">Phone Number</label>
                <input type="tel" class="select-filter" style="width: 100%;" value="+1 (555) 123-4567">
            </div>

            <div style="border-top: 1px solid var(--border); padding-top: 20px; margin-top: 10px; display: flex; justify-content: flex-end;">
                <button type="button" class="quick-actions-btn" style="margin: 0; background: var(--primary); color: white;">Save Changes</button>
            </div>
        </form>
    </div>
</div>
@endsection
