<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Store Dashboard - Inventory Pro')</title>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
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
            --text-dark: #1F2937;
            --text-gray: #6B7280;
            --text-light: #9CA3AF;
            --bg-body: #F8F9FA;
            --bg-white: #FFFFFF;
            --border: #E5E7EB;
            --sidebar-width: 256px;
            --border-radius: 12px;
            --box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05), 0 2px 4px -1px rgba(0,0,0,0.03);
        }
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Inter', sans-serif; }
        body { background: var(--bg-body); color: var(--text-dark); display: flex; min-height: 100vh; }
        .sidebar { width: var(--sidebar-width); background: var(--bg-white); border-right: 1px solid var(--border); display: flex; flex-direction: column; position: fixed; height: 100vh; overflow-y: auto; z-index: 100; }
        .logo-area { padding: 24px 20px; display: flex; align-items: center; gap: 12px; border-bottom: 1px solid var(--border); }
        .logo-icon { width: 36px; height: 36px; background: var(--primary); color: white; border-radius: 8px; display: flex; align-items: center; justify-content: center; font-size: 20px; }
        .logo-text { font-size: 16px; font-weight: 700; color: var(--text-dark); }
        .logo-sub { font-size: 11px; color: var(--primary); font-weight: 600; margin-top: 1px; }
        .nav-menu { padding: 16px 12px; flex: 1; }
        .nav-section { font-size: 10px; font-weight: 700; color: var(--text-light); text-transform: uppercase; letter-spacing: 1.2px; padding: 12px 8px 4px; }
        .nav-item { display: flex; align-items: center; padding: 9px 12px; color: var(--text-gray); text-decoration: none; border-radius: 8px; margin-bottom: 2px; font-weight: 500; font-size: 14px; transition: all 0.2s; gap: 10px; }
        .nav-item i { font-size: 18px; }
        .nav-item:hover { background: var(--primary-light); color: var(--primary); }
        .nav-item.active { background: var(--primary-light); color: var(--primary); font-weight: 600; }
        .badge { background: var(--warning); color: white; padding: 1px 7px; border-radius: 20px; font-size: 11px; font-weight: 700; margin-left: auto; }
        .sidebar-footer { padding: 16px 12px; border-top: 1px solid var(--border); }
        .logout-btn { display: flex; align-items: center; gap: 10px; padding: 9px 12px; color: var(--danger); border-radius: 8px; font-weight: 500; font-size: 14px; cursor: pointer; background: none; border: none; width: 100%; transition: all 0.2s; }
        .logout-btn:hover { background: var(--danger-light); }
        .main-content { flex: 1; margin-left: var(--sidebar-width); display: flex; flex-direction: column; }
        .topbar { display: flex; justify-content: space-between; align-items: center; padding: 16px 32px; background: var(--bg-white); border-bottom: 1px solid var(--border); }
        .page-info h1 { font-size: 20px; font-weight: 700; }
        .page-info p { color: var(--text-gray); font-size: 13px; margin-top: 2px; }
        .topbar-right { display: flex; align-items: center; gap: 16px; }
        .notif-btn { position: relative; background: none; border: 1px solid var(--border); border-radius: 8px; padding: 8px; font-size: 20px; color: var(--text-gray); cursor: pointer; }
        .notif-dot { position: absolute; top: -4px; right: -4px; width: 16px; height: 16px; background: var(--danger); color: white; border-radius: 50%; font-size: 9px; display: flex; align-items: center; justify-content: center; font-weight: bold; border: 2px solid white; }
        .user-chip { display: flex; align-items: center; gap: 10px; padding: 6px 14px 6px 6px; border: 1px solid var(--border); border-radius: 30px; cursor: pointer; background: var(--bg-white); }
        .user-avatar { width: 32px; height: 32px; border-radius: 50%; }
        .user-name { font-size: 13px; font-weight: 600; }
        .user-role { font-size: 11px; color: var(--text-gray); }
        .content-area { padding: 28px 32px; flex: 1; }
        .stats-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; margin-bottom: 24px; }
        .stat-card { background: var(--bg-white); border-radius: var(--border-radius); padding: 20px; box-shadow: var(--box-shadow); }
        .stat-icon { width: 44px; height: 44px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 22px; margin-bottom: 14px; }
        .stat-icon.primary { background: var(--primary-light); color: var(--primary); }
        .stat-icon.success { background: var(--success-light); color: var(--success); }
        .stat-icon.warning { background: var(--warning-light); color: var(--warning); }
        .stat-icon.danger { background: var(--danger-light); color: var(--danger); }
        .stat-value { font-size: 28px; font-weight: 700; margin-bottom: 4px; }
        .stat-label { font-size: 13px; color: var(--text-gray); }
        .stat-trend { font-size: 12px; margin-top: 8px; }
        .trend-up { color: var(--success); }
        .trend-down { color: var(--danger); }
        .panel { background: var(--bg-white); border-radius: var(--border-radius); padding: 24px; box-shadow: var(--box-shadow); margin-bottom: 24px; }
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
                <div class="logo-sub">Store Zone</div>
            </div>
        </div>
        <nav class="nav-menu">
            <div class="nav-section">Main</div>
            <a href="{{ url('/store/dashboard') }}" class="nav-item {{ request()->is('store/dashboard') ? 'active' : '' }}">
                <i class="ph ph-squares-four"></i> Dashboard
            </a>
            <div class="nav-section">Operations</div>
            <a href="{{ url('/store/inventory') }}" class="nav-item {{ request()->is('store/inventory') ? 'active' : '' }}">
                <i class="ph ph-package"></i> Inventory
            </a>
            <a href="{{ url('/store/sales') }}" class="nav-item {{ request()->is('store/sales') ? 'active' : '' }}">
                <i class="ph ph-currency-dollar"></i> Sales
            </a>
            <a href="{{ url('/store/stock') }}" class="nav-item {{ request()->is('store/stock') ? 'active' : '' }}">
                <i class="ph ph-stack"></i> Stock Management
            </a>
            <a href="{{ url('/store/transfer') }}" class="nav-item {{ request()->is('store/transfer') ? 'active' : '' }}">
                <i class="ph ph-arrows-left-right"></i> Transfers
            </a>
            <a href="{{ url('/store/tasks') }}" class="nav-item {{ request()->is('store/tasks') ? 'active' : '' }}">
                <i class="ph ph-check-square"></i> Tasks <span class="badge">3</span>
            </a>
            <div class="nav-section">Admin</div>
            <a href="{{ url('/store/reports') }}" class="nav-item {{ request()->is('store/reports') ? 'active' : '' }}">
                <i class="ph ph-chart-bar"></i> Reports
            </a>
            <a href="{{ url('/store/documents') }}" class="nav-item {{ request()->is('store/documents') ? 'active' : '' }}">
                <i class="ph ph-file-text"></i> Documents
            </a>
            <a href="{{ url('/store/profile') }}" class="nav-item {{ request()->is('store/profile') ? 'active' : '' }}">
                <i class="ph ph-user-circle"></i> Profile
            </a>
            <a href="{{ url('/store/settings') }}" class="nav-item {{ request()->is('store/settings') ? 'active' : '' }}">
                <i class="ph ph-gear"></i> Settings
            </a>
            <a href="{{ url('/store/help') }}" class="nav-item {{ request()->is('store/help') ? 'active' : '' }}">
                <i class="ph ph-question"></i> Help
            </a>
        </nav>
        <div class="sidebar-footer">
            <form action="{{ route('logout') }}" method="POST" id="store-logout-form">
                @csrf
                <button type="submit" class="logout-btn" onclick="return confirm('Logout?')">
                    <i class="ph ph-sign-out"></i> Logout
                </button>
            </form>
        </div>
    </aside>

    <main class="main-content">
        <div class="topbar">
            <div class="page-info">
                <h1>@yield('page_title', 'Store Dashboard')</h1>
                <p>@yield('page_subtitle', 'Manage store inventory and operations')</p>
            </div>
            <div class="topbar-right">
                <button class="notif-btn">
                    <i class="ph ph-bell"></i>
                    <span class="notif-dot">2</span>
                </button>
                <div class="user-profile-container">
                    <div class="user-profile">
                        <div class="user-info">
                            <span class="name">Store Manager</span>
                            <span class="role">Store Zone</span>
                        </div>
                        <div class="avatar-text">S</div>
                    </div>
                    
                    <div class="profile-dropdown" id="profileDropdown">
                        <div class="dropdown-header">
                            <img src="https://ui-avatars.com/api/?name=Store+Manager&background=E2E8F0&color=4361EE&size=80" alt="Store Manager" class="dropdown-illustration">
                            <div class="dropdown-name">Store Manager</div>
                            <div class="dropdown-role">Store Zone</div>
                        </div>
                        <div class="dropdown-body">
                            <div class="dropdown-item">
                                <i class="ph ph-phone"></i> +1 234 567 8900
                            </div>
                            <div class="dropdown-item">
                                <i class="ph ph-envelope"></i> store@inventorypro.com
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
