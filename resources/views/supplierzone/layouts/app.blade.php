<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Supplier Portal - Inventory Pro')</title>
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
            --sidebar-width: 260px;
            --border-radius: 12px;
            --box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05), 0 2px 4px -1px rgba(0,0,0,0.03);
        }
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Inter', sans-serif; }
        body { background: var(--bg-body); color: var(--text-dark); display: flex; min-height: 100vh; }
        .sidebar { width: var(--sidebar-width); background: var(--bg-white); border-right: 1px solid var(--border); display: flex; flex-direction: column; position: fixed; height: 100vh; overflow-y: auto; z-index: 100; }
        .logo-area { padding: 24px; display: flex; align-items: center; gap: 12px; border-bottom: 1px solid var(--border); }
        .logo-icon { width: 40px; height: 40px; background: var(--primary); color: white; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 22px; }
        .logo-text { font-size: 17px; font-weight: 700; color: var(--text-dark); }
        .logo-sub { font-size: 11px; color: var(--primary); font-weight: 600; }
        .nav-menu { padding: 8px 16px; flex: 1; }
        .nav-section { font-size: 10px; font-weight: 700; color: var(--text-light); text-transform: uppercase; letter-spacing: 1px; padding: 12px 8px 4px; }
        .nav-item { display: flex; align-items: center; padding: 10px 12px; color: var(--text-gray); text-decoration: none; border-radius: 8px; margin-bottom: 2px; font-weight: 500; font-size: 14px; transition: all 0.2s; gap: 10px; }
        .nav-item i { font-size: 18px; }
        .nav-item:hover { background: var(--primary-light); color: var(--primary); }
        .nav-item.active { background: var(--primary-light); color: var(--primary); font-weight: 600; }
        .sidebar-footer { padding: 16px; border-top: 1px solid var(--border); }
        .logout-btn { display: flex; align-items: center; gap: 10px; padding: 10px 12px; color: var(--danger); border-radius: 8px; font-weight: 500; font-size: 14px; cursor: pointer; background: none; border: none; width: 100%; transition: all 0.2s; }
        .logout-btn:hover { background: var(--danger-light); }
        .main-content { flex: 1; margin-left: var(--sidebar-width); display: flex; flex-direction: column; }
        .topbar { display: flex; justify-content: space-between; align-items: center; padding: 16px 32px; background: var(--bg-white); border-bottom: 1px solid var(--border); }
        .page-info h1 { font-size: 20px; font-weight: 700; }
        .page-info p { color: var(--text-gray); font-size: 13px; margin-top: 2px; }
        .topbar-right { display: flex; align-items: center; gap: 16px; }
        .notif-btn { position: relative; background: none; border: 1px solid var(--border); border-radius: 8px; padding: 8px; font-size: 20px; color: var(--text-gray); cursor: pointer; }
        .notif-dot { position: absolute; top: -4px; right: -4px; width: 16px; height: 16px; background: var(--danger); color: white; border-radius: 50%; font-size: 9px; display: flex; align-items: center; justify-content: center; font-weight: bold; border: 2px solid white; }
        .user-chip { display: flex; align-items: center; gap: 10px; padding: 6px 14px 6px 6px; border: 2px solid var(--border); border-radius: 30px; cursor: pointer; }
        .user-avatar { width: 32px; height: 32px; border-radius: 50%; }
        .user-name { font-size: 13px; font-weight: 600; }
        .user-role { font-size: 11px; color: var(--primary); font-weight: 600; }
        .content-area { padding: 28px 32px; flex: 1; }
        .stats-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; margin-bottom: 24px; }
        .stat-card { background: var(--bg-white); border-radius: var(--border-radius); padding: 20px; box-shadow: var(--box-shadow); border: 1px solid var(--border); }
        .stat-icon { width: 44px; height: 44px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 22px; margin-bottom: 14px; }
        .stat-icon.primary { background: var(--primary-light); color: var(--primary); }
        .stat-icon.success { background: var(--success-light); color: var(--success); }
        .stat-icon.warning { background: var(--warning-light); color: var(--warning); }
        .stat-icon.danger { background: var(--danger-light); color: var(--danger); }
        .stat-value { font-size: 28px; font-weight: 700; margin-bottom: 4px; }
        .stat-label { font-size: 13px; color: var(--text-gray); }
        .panel { background: var(--bg-white); border-radius: var(--border-radius); padding: 24px; box-shadow: var(--box-shadow); border: 1px solid var(--border); margin-bottom: 24px; }
        .panel-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; }
        .panel-title { font-size: 14px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; }
        .panel-action { color: var(--primary); font-size: 13px; font-weight: 600; text-decoration: none; }
        table { width: 100%; border-collapse: collapse; }
        th { text-align: left; padding: 10px 0; color: var(--text-gray); font-weight: 500; font-size: 13px; border-bottom: 1px solid var(--border); }
        td { padding: 14px 0; font-size: 14px; border-bottom: 1px solid var(--border); }
        tr:last-child td { border-bottom: none; }
        .badge-status { padding: 4px 10px; border-radius: 20px; font-size: 12px; font-weight: 500; }
        .status-done { background: var(--success-light); color: var(--success); }
        .status-progress { background: #EFF6FF; color: #3B82F6; }
        .status-pending { background: var(--warning-light); color: var(--warning); }
        .status-overdue { background: var(--danger-light); color: var(--danger); }
    </style>
</head>
<body>
    <aside class="sidebar">
        <div class="logo-area">
            <div class="logo-icon"><i class="ph ph-stack"></i></div>
            <div>
                <div class="logo-text">Inventory Pro</div>
                <div class="logo-sub">Supplier Portal</div>
            </div>
        </div>
        <nav class="nav-menu">
            <div class="nav-section">Main</div>
            <a href="{{ url('/supplier/dashboard') }}" class="nav-item {{ request()->is('supplier/dashboard') ? 'active' : '' }}">
                <i class="ph ph-squares-four"></i> Dashboard
            </a>
            <div class="nav-section">Business</div>
            <a href="{{ url('/supplier/purchase') }}" class="nav-item {{ request()->is('supplier/purchase') ? 'active' : '' }}">
                <i class="ph ph-shopping-cart"></i> Purchase Orders
            </a>
            <a href="{{ url('/supplier/invoice') }}" class="nav-item {{ request()->is('supplier/invoice') ? 'active' : '' }}">
                <i class="ph ph-receipt"></i> Invoices
            </a>
            <a href="{{ url('/supplier/shipments') }}" class="nav-item {{ request()->is('supplier/shipments') ? 'active' : '' }}">
                <i class="ph ph-truck"></i> Shipments
            </a>
            <a href="{{ url('/supplier/returns') }}" class="nav-item {{ request()->is('supplier/returns') ? 'active' : '' }}">
                <i class="ph ph-arrow-u-up-left"></i> Returns
            </a>
            <a href="{{ url('/supplier/products') }}" class="nav-item {{ request()->is('supplier/products') ? 'active' : '' }}">
                <i class="ph ph-package"></i> My Products
            </a>
            <div class="nav-section">Account</div>
            <a href="{{ url('/supplier/reports') }}" class="nav-item {{ request()->is('supplier/reports') ? 'active' : '' }}">
                <i class="ph ph-chart-bar"></i> Reports
            </a>
            <a href="{{ url('/supplier/messages') }}" class="nav-item {{ request()->is('supplier/messages') ? 'active' : '' }}">
                <i class="ph ph-chat-circle-dots"></i> Messages
            </a>
            <a href="{{ url('/supplier/profile') }}" class="nav-item {{ request()->is('supplier/profile') ? 'active' : '' }}">
                <i class="ph ph-user-circle"></i> Profile
            </a>
            <a href="{{ url('/supplier/settings') }}" class="nav-item {{ request()->is('supplier/settings') ? 'active' : '' }}">
                <i class="ph ph-gear"></i> Settings
            </a>
            <a href="{{ url('/supplier/help') }}" class="nav-item {{ request()->is('supplier/help') ? 'active' : '' }}">
                <i class="ph ph-question"></i> Help
            </a>
        </nav>
        <div class="sidebar-footer">
            <form action="{{ route('logout') }}" method="POST">
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
                <h1>@yield('page_title', 'Supplier Dashboard')</h1>
                <p>@yield('page_subtitle', 'Manage your orders, invoices and shipments')</p>
            </div>
            <div class="topbar-right">
                <button class="notif-btn">
                    <i class="ph ph-bell"></i>
                    <span class="notif-dot">4</span>
                </button>
                <div class="user-chip">
                    <img src="https://ui-avatars.com/api/?name=Supplier&background=4361EE&color=fff" class="user-avatar" alt="Supplier">
                    <div>
                        <div class="user-name">Supplier Account</div>
                        <div class="user-role">Verified Supplier</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-area">
            @yield('content')
        </div>
    </main>
    @yield('scripts')
</body>
</html>
