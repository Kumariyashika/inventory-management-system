<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warehouse Staff Zone - IMS</title>
    <link rel="stylesheet" href="{{ asset('admin.css') }}">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div class="admin-layout">
        <!-- Sidebar -->
        @include('warehousezone.partials.sidebar')

        <!-- Main Content -->
        <main class="admin-main">
            <button class="floating-logo-btn" id="floatingLogoBtn" title="Show Sidebar">
                <img src="{{ asset('img/logo_ims.jfif') }}" alt="IMS Logo">
            </button>

            <!-- Header -->
            <header class="admin-header">
                <h2 class="admin-header-title">@yield('title', 'Overview')</h2>
                
                <div class="admin-header-actions">
                    <div class="notification-wrapper">
                        <button class="icon-btn">
                            <i class="ph ph-bell"></i>
                            <span class="badge">5</span>
                        </button>
                    </div>
                    
                    <div class="profile-dropdown-wrapper">
                        <div class="user-profile">
                            <div class="user-info" style="text-align: right;">
                                <span class="user-name">Warehouse Staff</span>
                                <span class="user-role">Operations</span>
                            </div>
                            <div class="user-avatar">
                                W
                            </div>
                        </div>
                        
                        <div class="profile-dropdown-menu">
                            <div class="dropdown-header">
                                <strong>Warehouse Staff</strong>
                                <span>Operations</span>
                            </div>
                            <div class="dropdown-item">
                                <i class="ph ph-envelope-simple"></i> warehouse@inventorypro.com
                            </div>
                            <div class="dropdown-divider"></div>
                            <a href="/" class="dropdown-item text-danger">
                                <i class="ph ph-sign-out"></i> Logout
                            </a>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <div class="admin-content">
                @yield('content')
            </div>
        </main>
    </div>

    <!-- Sidebar Toggle Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sidebar = document.getElementById('adminSidebar');
            const toggleBtn = document.getElementById('sidebarToggleBtn');
            const floatingBtn = document.getElementById('floatingLogoBtn');

            function toggleSidebar() {
                sidebar.classList.toggle('mini');
            }

            if (toggleBtn) {
                toggleBtn.addEventListener('click', toggleSidebar);
            }

            if (floatingBtn) {
                floatingBtn.addEventListener('click', toggleSidebar);
            }
        });
    </script>
</body>
</html>
