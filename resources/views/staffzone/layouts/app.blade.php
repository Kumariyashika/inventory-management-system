<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Staff Dashboard - Inventory Pro')</title>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #4361EE;
            --primary-light: #F0F4FF;
            --success: #10B981;
            --success-light: #ECFDF5;
            --warning: #F59E0B;
            --warning-light: #FFFBEB;
            --danger: #EF4444;
            --danger-light: #FEF2F2;
            --purple: #8B5CF6;
            --purple-light: #F5F3FF;
            --text-dark: #1F2937;
            --text-gray: #6B7280;
            --text-light: #9CA3AF;
            --bg-body: #F8F9FA;
            --bg-white: #FFFFFF;
            --border: #E5E7EB;
            --sidebar-width: 260px;
            --border-radius: 12px;
            --box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05), 0 2px 4px -1px rgba(0,0,0,0.03);
        }
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Inter', sans-serif; }
        body { background-color: var(--bg-body); color: var(--text-dark); display: flex; min-height: 100vh; }
        .sidebar { width: var(--sidebar-width); background: var(--bg-white); border-right: 1px solid var(--border); display: flex; flex-direction: column; position: fixed; height: 100vh; overflow-y: auto; z-index: 100; }
        .logo-area { padding: 24px; display: flex; align-items: center; gap: 12px; border-bottom: 1px solid var(--border); }
        .logo-icon { width: 36px; height: 36px; background: var(--primary); color: white; border-radius: 8px; display: flex; align-items: center; justify-content: center; font-size: 20px; }
        .logo-text { font-size: 18px; font-weight: 700; color: var(--text-dark); }
        .logo-badge { font-size: 11px; background: var(--primary-light); color: var(--primary); padding: 2px 8px; border-radius: 20px; font-weight: 600; margin-top: 2px; }
        .nav-menu { padding: 16px; flex: 1; }
        .nav-section-title { font-size: 11px; font-weight: 600; color: var(--text-light); text-transform: uppercase; letter-spacing: 1px; padding: 12px 8px 6px; }
        .nav-item { display: flex; align-items: center; padding: 10px 12px; color: var(--text-gray); text-decoration: none; border-radius: 8px; margin-bottom: 2px; font-weight: 500; font-size: 14px; transition: all 0.2s; gap: 10px; }
        .nav-item i { font-size: 18px; }
        .nav-item:hover, .nav-item.active { background: var(--primary-light); color: var(--primary); }
        .nav-item.active i { color: var(--primary); }
        .badge { background: var(--danger); color: white; padding: 1px 7px; border-radius: 20px; font-size: 11px; font-weight: 700; margin-left: auto; }
        .sidebar-footer { padding: 16px; border-top: 1px solid var(--border); }
        .logout-btn { display: flex; align-items: center; gap: 10px; padding: 10px 12px; color: var(--danger); text-decoration: none; border-radius: 8px; font-weight: 500; font-size: 14px; transition: all 0.2s; cursor: pointer; background: none; border: none; width: 100%; }
        .logout-btn:hover { background: var(--danger-light); }
        .main-content { flex: 1; margin-left: var(--sidebar-width); padding: 0; display: flex; flex-direction: column; }
        .topbar { display: flex; justify-content: space-between; align-items: center; padding: 16px 32px; background: var(--bg-white); border-bottom: 1px solid var(--border); position: sticky; top: 0; z-index: 50; }
        .page-info h1 { font-size: 20px; font-weight: 700; }
        .page-info p { color: var(--text-gray); font-size: 13px; margin-top: 2px; }
        .topbar-right { display: flex; align-items: center; gap: 16px; }
        .notif-btn { position: relative; background: none; border: 1px solid var(--border); border-radius: 8px; padding: 8px; font-size: 20px; color: var(--text-gray); cursor: pointer; }
        .notif-dot { position: absolute; top: -4px; right: -4px; width: 16px; height: 16px; background: var(--danger); color: white; border-radius: 50%; font-size: 9px; display: flex; align-items: center; justify-content: center; font-weight: bold; border: 2px solid white; }
        .user-chip { display: flex; align-items: center; gap: 10px; padding: 6px 12px 6px 6px; border: 1px solid var(--border); border-radius: 30px; cursor: pointer; }
        .user-avatar { width: 32px; height: 32px; border-radius: 50%; }
        .user-name { font-size: 13px; font-weight: 600; }
        .user-role { font-size: 11px; color: var(--text-gray); }
        .content-area { padding: 28px 32px; flex: 1; }
        /* Shared component styles */
        .card { background: var(--bg-white); border-radius: var(--border-radius); padding: 20px; box-shadow: var(--box-shadow); }
        .stats-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; margin-bottom: 24px; }
        .stat-card { background: var(--bg-white); border-radius: var(--border-radius); padding: 20px; box-shadow: var(--box-shadow); }
        .stat-icon { width: 44px; height: 44px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 22px; margin-bottom: 14px; }
        .stat-icon.primary { background: var(--primary-light); color: var(--primary); }
        .stat-icon.success { background: var(--success-light); color: var(--success); }
        .stat-icon.warning { background: var(--warning-light); color: var(--warning); }
        .stat-icon.danger { background: var(--danger-light); color: var(--danger); }
        .stat-value { font-size: 28px; font-weight: 700; margin-bottom: 4px; }
        .stat-label { font-size: 13px; color: var(--text-gray); }
        .stat-trend { font-size: 12px; margin-top: 8px; display: flex; align-items: center; gap: 4px; }
        .trend-up { color: var(--success); }
        .trend-down { color: var(--danger); }
        .panel { background: var(--bg-white); border-radius: var(--border-radius); padding: 24px; box-shadow: var(--box-shadow); }
        .panel-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; }
        .panel-title { font-size: 14px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; }
        .panel-action { color: var(--primary); font-size: 13px; font-weight: 600; text-decoration: none; }
        .two-col { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 24px; }
        table { width: 100%; border-collapse: collapse; }
        th { text-align: left; padding: 10px 0; color: var(--text-gray); font-weight: 500; font-size: 13px; border-bottom: 1px solid var(--border); }
        td { padding: 14px 0; font-size: 14px; border-bottom: 1px solid var(--border); }
        tr:last-child td { border-bottom: none; }
        .badge-status { padding: 4px 10px; border-radius: 20px; font-size: 12px; font-weight: 500; }
        .status-done { background: var(--success-light); color: var(--success); }
        .status-progress { background: var(--primary-light); color: var(--primary); }
        .status-pending { background: var(--warning-light); color: var(--warning); }
        .status-overdue { background: var(--danger-light); color: var(--danger); }

        /* Profile Dropdown Styles */
        .user-profile-container { position: relative; }
        .user-profile { display: flex; align-items: center; gap: 12px; cursor: pointer; padding: 6px 6px 6px 16px; background: #E2E8F0; border-radius: 30px; transition: all 0.2s; }
        .user-profile:hover { background: #CBD5E1; }
        .user-info { text-align: right; }
        .user-info .name { font-size: 14px; font-weight: 700; color: #1F2937; line-height: 1.2; display: block; }
        .user-info .role { font-size: 12px; color: #64748B; font-weight: 500; }
        .avatar-text { width: 36px; height: 36px; border-radius: 50%; background: #FFFFFF; color: #4361EE; display: flex; align-items: center; justify-content: center; font-size: 16px; font-weight: 700; border: 2px solid #FFFFFF; box-shadow: 0 2px 4px rgba(0,0,0,0.05); }
        .profile-dropdown { position: absolute; top: calc(100% + 10px); right: 0; width: 260px; background: #FFFFFF; border-radius: 12px; box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.1); border: 1px solid #E5E7EB; opacity: 0; visibility: hidden; transform: translateY(-10px); transition: all 0.2s ease; z-index: 1000; }
        .profile-dropdown.show { opacity: 1; visibility: visible; transform: translateY(0); }
        .profile-dropdown::before { content: ''; position: absolute; top: -6px; right: 24px; width: 12px; height: 12px; background: #FFFFFF; transform: rotate(45deg); border-left: 1px solid #E5E7EB; border-top: 1px solid #E5E7EB; }
        .dropdown-header { padding: 24px 20px 16px; text-align: center; border-bottom: 1px solid #E5E7EB; }
        .dropdown-illustration { width: 80px; height: 80px; border-radius: 50%; object-fit: cover; margin: 0 auto 12px; border: 3px solid #F8FAFC; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05); }
        .dropdown-name { font-size: 16px; font-weight: 700; color: #1F2937; margin-bottom: 2px; }
        .dropdown-role { font-size: 13px; color: #64748B; font-weight: 500; }
        .dropdown-body { padding: 16px 20px; border-bottom: 1px solid #E5E7EB; }
        .dropdown-item { display: flex; align-items: center; gap: 12px; font-size: 14px; color: #4B5563; margin-bottom: 12px; }
        .dropdown-item:last-child { margin-bottom: 0; }
        .dropdown-item i { font-size: 18px; color: #64748B; }
        .dropdown-footer { padding: 12px 16px; }
        .dropdown-logout { display: flex; align-items: center; gap: 10px; width: 100%; padding: 10px 12px; background: none; border: none; color: #EF4444; font-size: 14px; font-weight: 500; cursor: pointer; border-radius: 8px; transition: all 0.2s; }
        .dropdown-logout:hover { background: #FEF2F2; }
    </style>
</head>
<body>
    <aside class="sidebar">
        <div class="logo-area">
            <div class="logo-icon"><i class="ph ph-stack"></i></div>
            <div>
                <div class="logo-text">Inventory Pro</div>
                <div class="logo-badge">Staff Zone</div>
            </div>
        </div>
        <nav class="nav-menu">
            <div class="nav-section-title">Main</div>
            <a href="{{ url('/staff/dashboard') }}" class="nav-item {{ request()->is('staff/dashboard') ? 'active' : '' }}">
                <i class="ph ph-squares-four"></i> Dashboard
            </a>
            <a href="{{ url('/staff/my-tasks') }}" class="nav-item {{ request()->is('staff/my-tasks') ? 'active' : '' }}">
                <i class="ph ph-check-square"></i> My Tasks <span class="badge">5</span>
            </a>
            <div class="nav-section-title">Operations</div>
            <a href="{{ url('/staff/inventory') }}" class="nav-item {{ request()->is('staff/inventory') ? 'active' : '' }}">
                <i class="ph ph-package"></i> Inventory
            </a>
            <a href="{{ url('/staff/sales') }}" class="nav-item {{ request()->is('staff/sales') ? 'active' : '' }}">
                <i class="ph ph-currency-dollar"></i> Sales
            </a>
            <a href="{{ url('/staff/purchases') }}" class="nav-item {{ request()->is('staff/purchases') ? 'active' : '' }}">
                <i class="ph ph-shopping-cart"></i> Purchases
            </a>
            <a href="{{ url('/staff/production') }}" class="nav-item {{ request()->is('staff/production') ? 'active' : '' }}">
                <i class="ph ph-factory"></i> Production
            </a>
            <div class="nav-section-title">Reports & Admin</div>
            <a href="{{ url('/staff/reports') }}" class="nav-item {{ request()->is('staff/reports') ? 'active' : '' }}">
                <i class="ph ph-chart-bar"></i> Reports
            </a>
            <a href="{{ url('/staff/my-approvals') }}" class="nav-item {{ request()->is('staff/my-approvals') ? 'active' : '' }}">
                <i class="ph ph-clipboard-text"></i> My Approvals
            </a>
            <a href="{{ url('/staff/documents') }}" class="nav-item {{ request()->is('staff/documents') ? 'active' : '' }}">
                <i class="ph ph-file-text"></i> Documents
            </a>
            <div class="nav-section-title">Account</div>
            <a href="{{ url('/staff/profile') }}" class="nav-item {{ request()->is('staff/profile') ? 'active' : '' }}">
                <i class="ph ph-user-circle"></i> Profile
            </a>
            <a href="{{ url('/staff/settings') }}" class="nav-item {{ request()->is('staff/settings') ? 'active' : '' }}">
                <i class="ph ph-gear"></i> Settings
            </a>
            <a href="{{ url('/staff/help-support') }}" class="nav-item {{ request()->is('staff/help-support') ? 'active' : '' }}">
                <i class="ph ph-question"></i> Help & Support
            </a>
        </nav>
        <div class="sidebar-footer">
            <form action="{{ route('logout') }}" method="POST" id="staff-logout-form">
                @csrf
                <button type="submit" class="logout-btn" onclick="return confirm('Are you sure you want to logout?')">
                    <i class="ph ph-sign-out"></i> Logout
                </button>
            </form>
        </div>
    </aside>

    <main class="main-content">
        <div class="topbar">
            <div class="page-info">
                <h1>@yield('page_title', 'Staff Dashboard')</h1>
                <p>@yield('page_subtitle', 'Welcome back, manage your tasks and operations')</p>
            </div>
            <div class="topbar-right">
                <button class="notif-btn">
                    <i class="ph ph-bell"></i>
                    <span class="notif-dot">3</span>
                </button>
                <div class="user-profile-container">
                    <div class="user-profile">
                        <div class="user-info">
                            <span class="name">Staff User</span>
                            <span class="role">Staff Member</span>
                        </div>
                        <div class="avatar-text">S</div>
                    </div>
                    
                    <div class="profile-dropdown" id="profileDropdown">
                        <div class="dropdown-header">
                            <img src="https://ui-avatars.com/api/?name=Staff+User&background=E2E8F0&color=4361EE&size=80" alt="Staff User" class="dropdown-illustration">
                            <div class="dropdown-name">Staff User</div>
                            <div class="dropdown-role">Staff Member</div>
                        </div>
                        <div class="dropdown-body">
                            <div class="dropdown-item">
                                <i class="ph ph-phone"></i> +1 234 567 8900
                            </div>
                            <div class="dropdown-item">
                                <i class="ph ph-envelope"></i> staff@inventorypro.com
                            </div>
                        </div>
                        <div class="dropdown-footer">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-logout">
                                    <i class="ph ph-sign-out"></i> Logout
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-area">
            @yield('content')
        </div>
    </main>

    @yield('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const userProfile = document.querySelector('.user-profile');
            const profileDropdown = document.getElementById('profileDropdown');
            
            if (userProfile && profileDropdown) {
                userProfile.addEventListener('click', function(e) {
                    e.stopPropagation();
                    profileDropdown.classList.toggle('show');
                });

                document.addEventListener('click', function(e) {
                    if (!profileDropdown.contains(e.target) && !userProfile.contains(e.target)) {
                        profileDropdown.classList.remove('show');
                    }
                });
            }
        });
    </script>
</body>
</html>
