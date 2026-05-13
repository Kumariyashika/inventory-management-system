<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Manager Dashboard - Inventory Pro')</title>
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
            --box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            background-color: var(--bg-body);
            color: var(--text-dark);
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar */
        .sidebar {
            width: var(--sidebar-width);
            background-color: var(--bg-white);
            border-right: 1px solid var(--border);
            display: flex;
            flex-direction: column;
            position: fixed;
            height: 100vh;
            overflow-y: auto;
            z-index: 100;
        }

        .logo-area {
            padding: 24px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .logo-icon {
            width: 32px;
            height: 32px;
            background: var(--primary);
            color: white;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }

        .logo-text {
            font-size: 20px;
            font-weight: 700;
            color: var(--text-dark);
        }

        .nav-menu {
            padding: 0 16px;
            flex: 1;
        }

        .nav-item {
            display: flex;
            align-items: center;
            padding: 12px 16px;
            color: var(--text-gray);
            text-decoration: none;
            border-radius: 8px;
            margin-bottom: 4px;
            font-weight: 500;
            font-size: 14px;
            transition: all 0.2s;
            justify-content: space-between;
        }

        .nav-item-left {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .nav-item i.ph {
            font-size: 20px;
        }

        .nav-item:hover, .nav-item.active {
            background-color: var(--primary-light);
            color: var(--primary);
        }

        .nav-item.active i.ph {
            color: var(--primary);
        }

        .badge {
            background-color: var(--primary-light);
            color: var(--primary);
            padding: 2px 8px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: 600;
        }

        .quick-actions-btn {
            margin: 24px 16px;
            padding: 12px;
            border: 1px solid var(--primary);
            color: var(--primary);
            background: transparent;
            border-radius: 8px;
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            cursor: pointer;
            transition: all 0.2s;
        }

        .quick-actions-btn:hover {
            background: var(--primary-light);
        }

        /* Main Content */
        .main-content {
            flex: 1;
            margin-left: var(--sidebar-width);
            padding: 24px 32px;
        }

        /* Header */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 32px;
        }

        .page-title {
            font-size: 24px;
            font-weight: 700;
        }

        .page-subtitle {
            color: var(--text-gray);
            font-size: 14px;
            margin-top: 4px;
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .date-picker {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 8px 16px;
            border: 1px solid var(--border);
            border-radius: 8px;
            background: var(--bg-white);
            color: var(--text-dark);
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
        }

        .notification-btn {
            position: relative;
            background: none;
            border: none;
            font-size: 24px;
            color: var(--text-gray);
            cursor: pointer;
        }

        .notification-dot {
            position: absolute;
            top: 0;
            right: 0;
            width: 18px;
            height: 18px;
            background: var(--danger);
            color: white;
            border-radius: 50%;
            font-size: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            border: 2px solid var(--bg-body);
        }

        .user-profile {
            display: flex;
            align-items: center;
            gap: 12px;
            cursor: pointer;
        }

        .avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
        }

        .user-info .name {
            font-size: 14px;
            font-weight: 600;
            display: block;
        }

        .user-info .role {
            font-size: 12px;
            color: var(--text-gray);
        }

        /* Top Cards Row */
        .cards-grid {
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            gap: 20px;
            margin-bottom: 24px;
        }

        .stat-card {
            background: var(--bg-white);
            border-radius: var(--border-radius);
            padding: 20px;
            box-shadow: var(--box-shadow);
            position: relative;
            overflow: hidden;
        }

        .stat-header {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 12px;
        }

        .stat-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }

        .stat-icon.success { background: var(--success-light); color: var(--success); }
        .stat-icon.primary { background: var(--primary-light); color: var(--primary); }
        .stat-icon.purple { background: var(--purple-light); color: var(--purple); }
        .stat-icon.warning { background: var(--warning-light); color: var(--warning); }
        .stat-icon.danger { background: var(--danger-light); color: var(--danger); }

        .stat-title {
            color: var(--text-gray);
            font-size: 13px;
            font-weight: 500;
        }

        .stat-value {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .stat-trend {
            display: flex;
            align-items: center;
            gap: 4px;
            font-size: 12px;
        }

        .trend-up { color: var(--success); background: var(--success-light); padding: 2px 6px; border-radius: 4px; font-weight: 600; }
        .trend-down { color: var(--danger); background: var(--danger-light); padding: 2px 6px; border-radius: 4px; font-weight: 600; }
        
        .trend-text { color: var(--text-gray); }

        .sparkline {
            position: absolute;
            bottom: 10px;
            left: 0;
            right: 0;
            height: 40px;
            opacity: 0.2;
        }

        /* Charts Row */
        .charts-row {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            gap: 20px;
            margin-bottom: 24px;
        }

        .panel {
            background: var(--bg-white);
            border-radius: var(--border-radius);
            padding: 24px;
            box-shadow: var(--box-shadow);
        }

        .panel-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .panel-title {
            font-size: 14px;
            font-weight: 700;
            color: var(--text-dark);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .panel-action {
            color: var(--primary);
            font-size: 13px;
            font-weight: 600;
            text-decoration: none;
            cursor: pointer;
        }

        .select-filter {
            padding: 6px 12px;
            border: 1px solid var(--border);
            border-radius: 6px;
            font-size: 13px;
            color: var(--text-gray);
            outline: none;
        }

        .chart-container {
            position: relative;
            height: 250px;
            width: 100%;
        }

        .donut-container {
            position: relative;
            height: 200px;
            display: flex;
            justify-content: center;
        }

        .donut-center-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }

        .donut-center-value {
            font-size: 24px;
            font-weight: 700;
            color: var(--text-dark);
        }

        .donut-center-label {
            font-size: 12px;
            color: var(--text-gray);
        }

        .legend {
            margin-top: 20px;
        }

        .legend-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 12px;
            font-size: 13px;
        }

        .legend-item-left {
            display: flex;
            align-items: center;
            gap: 8px;
            color: var(--text-dark);
            font-weight: 500;
        }

        .dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
        }

        .legend-value {
            font-weight: 600;
        }

        .legend-percent {
            color: var(--text-gray);
            margin-left: 4px;
        }

        /* Tables Row */
        .tables-row {
            display: grid;
            grid-template-columns: 3fr 2fr;
            gap: 20px;
            margin-bottom: 24px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            text-align: left;
            padding: 12px 0;
            color: var(--text-gray);
            font-weight: 500;
            font-size: 13px;
            border-bottom: 1px solid var(--border);
        }

        td {
            padding: 16px 0;
            font-size: 14px;
            border-bottom: 1px solid var(--border);
            color: var(--text-dark);
        }

        tr:last-child td {
            border-bottom: none;
            padding-bottom: 0;
        }

        .status-badge {
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 500;
        }

        .status-completed { background: var(--success-light); color: var(--success); }
        .status-progress { background: var(--primary-light); color: var(--primary); }
        .status-pending { background: var(--warning-light); color: var(--warning); }
        .status-hold { background: var(--danger-light); color: var(--danger); }

        .progress-bar-container {
            width: 100%;
            height: 6px;
            background: var(--border);
            border-radius: 3px;
            overflow: hidden;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .progress-bar {
            height: 100%;
            border-radius: 3px;
        }

        .progress-text {
            font-size: 12px;
            font-weight: 600;
            width: 35px;
        }

        .team-member {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .team-avatar {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            object-fit: cover;
        }

        /* Bottom Row */
        .bottom-row {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .mini-card-item {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            margin-top: 16px;
            padding-top: 16px;
            border-top: 1px solid var(--border);
        }

        .mini-card-item:first-child {
            margin-top: 0;
            padding-top: 0;
            border-top: none;
        }

        .item-icon {
            width: 40px;
            height: 40px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--bg-body);
            font-size: 20px;
        }

        .item-icon.alert { background: var(--warning-light); color: var(--warning); }
        .item-icon.product { background: var(--primary-light); color: var(--primary); }
        .item-icon.activity { background: var(--success-light); color: var(--success); }
        .item-icon.approval { background: var(--purple-light); color: var(--purple); }

        .item-details {
            flex: 1;
        }

        .item-title {
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 4px;
            color: var(--text-dark);
        }

        .item-meta {
            font-size: 13px;
            color: var(--text-gray);
        }

        .item-meta-highlight {
            color: var(--danger);
            font-weight: 500;
        }

        .item-right {
            text-align: right;
        }

        .item-value {
            font-size: 14px;
            font-weight: 600;
            color: var(--text-dark);
        }

        .priority-badge {
            padding: 2px 8px;
            border-radius: 4px;
            font-size: 11px;
        .priority-high { background: var(--danger-light); color: var(--danger); }
        .priority-medium { background: var(--warning-light); color: var(--warning); }

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

    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="logo-area">
            <div class="logo-icon">
                <i class="ph ph-stack"></i>
            </div>
            <div class="logo-text">Inventory Pro</div>
        </div>

        <nav class="nav-menu">
            <a href="{{ url('/manager/dashboard') }}" class="nav-item {{ request()->is('manager/dashboard') ? 'active' : '' }}">
                <div class="nav-item-left">
                    <i class="ph ph-squares-four"></i> Dashboard
                </div>
            </a>
            <a href="{{ url('/manager/team-performance') }}" class="nav-item {{ request()->is('manager/team-performance') ? 'active' : '' }}">
                <div class="nav-item-left">
                    <i class="ph ph-users"></i> Team Performance
                </div>
            </a>
            <a href="{{ url('/manager/products') }}" class="nav-item {{ request()->is('manager/products') ? 'active' : '' }}">
                <div class="nav-item-left">
                    <i class="ph ph-package"></i> Products
                </div>
                <i class="ph ph-caret-down"></i>
            </a>
            <a href="{{ url('/manager/inventory') }}" class="nav-item {{ request()->is('manager/inventory') ? 'active' : '' }}">
                <div class="nav-item-left">
                    <i class="ph ph-chart-bar"></i> Inventory
                </div>
                <i class="ph ph-caret-down"></i>
            </a>
            <a href="{{ url('/manager/sales') }}" class="nav-item {{ request()->is('manager/sales') ? 'active' : '' }}">
                <div class="nav-item-left">
                    <i class="ph ph-currency-dollar"></i> Sales
                </div>
                <i class="ph ph-caret-down"></i>
            </a>
            <a href="{{ url('/manager/production') }}" class="nav-item {{ request()->is('manager/production') ? 'active' : '' }}">
                <div class="nav-item-left">
                    <i class="ph ph-factory"></i> Production
                </div>
                <i class="ph ph-caret-down"></i>
            </a>
            <a href="{{ url('/manager/purchases') }}" class="nav-item {{ request()->is('manager/purchases') ? 'active' : '' }}">
                <div class="nav-item-left">
                    <i class="ph ph-shopping-cart"></i> Purchases
                </div>
                <i class="ph ph-caret-down"></i>
            </a>
            <a href="{{ url('/manager/quality-control') }}" class="nav-item {{ request()->is('manager/quality-control') ? 'active' : '' }}">
                <div class="nav-item-left">
                    <i class="ph ph-shield-check"></i> Quality Control
                </div>
            </a>
            <a href="{{ url('/manager/reports') }}" class="nav-item {{ request()->is('manager/reports') ? 'active' : '' }}">
                <div class="nav-item-left">
                    <i class="ph ph-chart-line-up"></i> Reports
                </div>
                <i class="ph ph-caret-down"></i>
            </a>
            <a href="{{ url('/manager/analytics') }}" class="nav-item {{ request()->is('manager/analytics') ? 'active' : '' }}">
                <div class="nav-item-left">
                    <i class="ph ph-trend-up"></i> Analytics
                </div>
            </a>
            <a href="{{ url('/manager/tasks-approvals') }}" class="nav-item {{ request()->is('manager/tasks-approvals') ? 'active' : '' }}">
                <div class="nav-item-left">
                    <i class="ph ph-check-square-offset"></i> Tasks & Approvals
                </div>
                <span class="badge">5</span>
            </a>
            <a href="{{ url('/manager/settings') }}" class="nav-item {{ request()->is('manager/settings') ? 'active' : '' }}" style="margin-top: 20px;">
                <div class="nav-item-left">
                    <i class="ph ph-gear"></i> Settings
                </div>
                <i class="ph ph-caret-down"></i>
            </a>
            <a href="{{ url('/manager/help-support') }}" class="nav-item {{ request()->is('manager/help-support') ? 'active' : '' }}">
                <div class="nav-item-left">
                    <i class="ph ph-question"></i> Help & Support
                </div>
            </a>
            <a href="#" class="nav-item" onclick="event.preventDefault(); if(confirm('Are you sure you want to securely logout?')) { document.getElementById('logout-form').submit(); }">
                <div class="nav-item-left">
                    <i class="ph ph-sign-out"></i> Secure Logout
                </div>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </nav>

        <button class="quick-actions-btn">
            <i class="ph ph-pencil-simple"></i> Quick Actions
        </button>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
        <!-- Header -->
        <header class="header">
            <div>
                <h1 class="page-title">@yield('page_title', 'Manager Dashboard')</h1>
                <p class="page-subtitle">@yield('page_subtitle', 'Overview of operations and performance')</p>
            </div>
            
            <div class="header-actions">
                <div class="date-picker">
                    May 18 – May 24, 2025 <i class="ph ph-calendar-blank"></i>
                </div>
                
                <button class="notification-btn">
                    <i class="ph ph-bell"></i>
                    <span class="notification-dot">3</span>
                </button>
                
                <div class="user-profile-container">
                    <div class="user-profile">
                        <div class="user-info">
                            <span class="name">Admin User</span>
                            <span class="role">Super Admin</span>
                        </div>
                        <div class="avatar-text">A</div>
                    </div>
                    
                    <div class="profile-dropdown" id="profileDropdown">
                        <div class="dropdown-header">
                            <img src="https://ui-avatars.com/api/?name=Admin+User&background=E2E8F0&color=4361EE&size=80" alt="Admin" class="dropdown-illustration">
                            <div class="dropdown-name">Admin User</div>
                            <div class="dropdown-role">Super Admin</div>
                        </div>
                        <div class="dropdown-body">
                            <div class="dropdown-item">
                                <i class="ph ph-phone"></i> +1 234 567 8900
                            </div>
                            <div class="dropdown-item">
                                <i class="ph ph-envelope"></i> admin@inventorypro.com
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
        </header>

        @yield('content')
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
