<aside class="admin-sidebar" id="adminSidebar">
    <!-- Sidebar Header -->
    <div class="sidebar-header">
        <img src="{{ asset('img/logo_ims.jfif') }}" alt="IMS Logo" class="sidebar-logo">
        <span class="sidebar-title">Warehouse</span>
        <button class="sidebar-toggle-btn" id="sidebarToggleBtn">
            <i class="ph ph-list"></i>
        </button>
    </div>

    <!-- Navigation List -->
    <ul class="sidebar-menu">
        <!-- Dashboard -->
        <li class="menu-item {{ request()->is('warehouse/dashboard*') ? 'active' : '' }}">
            <a href="/warehouse/dashboard" class="menu-link">
                <i class="ph ph-squares-four"></i>
                <span class="menu-text">Dashboard</span>
            </a>
        </li>

        <!-- Receive Goods -->
        <li class="menu-item {{ request()->is('warehouse/grn*') ? 'active' : '' }}">
            <a href="/warehouse/grn" class="menu-link">
                <i class="ph ph-download-simple"></i>
                <span class="menu-text">Receive Goods (GRN)</span>
            </a>
        </li>

        <!-- Stock In -->
        <li class="menu-item {{ request()->is('warehouse/stock-in*') ? 'active' : '' }}">
            <a href="/warehouse/stock-in" class="menu-link">
                <i class="ph ph-arrow-down-left"></i>
                <span class="menu-text">Stock In</span>
            </a>
        </li>

        <!-- Stock Out -->
        <li class="menu-item {{ request()->is('warehouse/stock-out*') ? 'active' : '' }}">
            <a href="/warehouse/stock-out" class="menu-link">
                <i class="ph ph-arrow-up-right"></i>
                <span class="menu-text">Stock Out</span>
            </a>
        </li>

        <!-- Pick / Pack -->
        <li class="menu-item {{ request()->is('warehouse/pick-pack*') ? 'active' : '' }}">
            <a href="/warehouse/pick-pack" class="menu-link">
                <i class="ph ph-package"></i>
                <span class="menu-text">Pick / Pack</span>
            </a>
        </li>

        <!-- Stock Transfer -->
        <li class="menu-item {{ request()->is('warehouse/transfer*') ? 'active' : '' }}">
            <a href="/warehouse/transfer" class="menu-link">
                <i class="ph ph-arrows-left-right"></i>
                <span class="menu-text">Stock Transfer</span>
            </a>
        </li>

        <!-- My Tasks -->
        <li class="menu-item {{ request()->is('warehouse/tasks*') ? 'active' : '' }}">
            <a href="/warehouse/tasks" class="menu-link">
                <i class="ph ph-clipboard-text"></i>
                <span class="menu-text">My Tasks</span>
            </a>
        </li>

        <!-- My Profile -->
        <li class="menu-item {{ request()->is('warehouse/profile*') ? 'active' : '' }}">
            <a href="/warehouse/profile" class="menu-link">
                <i class="ph ph-user"></i>
                <span class="menu-text">My Profile</span>
            </a>
        </li>
    </ul>

    <!-- Sidebar Footer -->
    <div class="sidebar-footer">
        <div class="user-quick-info">
            <div class="avatar-small">W</div>
            <div class="user-details">
                <span class="user-name">Warehouse Staff</span>
                <span class="user-role">Operations</span>
            </div>
        </div>
        <a href="/" class="logout-btn" title="Logout">
            <i class="ph ph-sign-out"></i>
        </a>
    </div>
</aside>
