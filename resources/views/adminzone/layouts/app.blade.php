<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Zone - IMS</title>
    <link rel="stylesheet" href="{{ asset('admin.css') }}">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div class="admin-layout">
        <!-- Sidebar -->
        @include('adminzone.partials.sidebar')

        <!-- Main Content -->
        <main class="admin-main">
            <!-- Floating Logo Button (visible when sidebar is hidden) -->
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
                            <span class="badge">3</span>
                        </button>
                        <div class="notification-dropdown">
                            <div class="notification-header">Notifications</div>
                            <div class="notification-item"><strong>New Order:</strong> #PROD-0251 received.</div>
                            <div class="notification-item"><strong>System Alert:</strong> Low stock on Work Tables.</div>
                            <div class="notification-item"><strong>Update:</strong> Production plan approved.</div>
                        </div>
                    </div>
                    
                    <div class="profile-dropdown-wrapper">
                        <div class="user-profile">
                            <div class="user-info" style="text-align: right;">
                                <span class="user-name">Admin User</span>
                                <span class="user-role">Super Admin</span>
                            </div>
                            <div class="user-avatar">
                                A
                            </div>
                        </div>
                        
                        <div class="profile-dropdown-menu">
                            <div class="dropdown-header">
                                <img src="{{ asset('img/logo_ims.jfif') }}" alt="User Avatar" class="dropdown-profile-img">
                                <strong>Admin User</strong>
                                <span>Super Admin</span>
                            </div>
                            <div class="dropdown-item">
                                <i class="ph ph-phone"></i> +1 234 567 8900
                            </div>
                            <div class="dropdown-item">
                                <i class="ph ph-envelope-simple"></i> admin@inventorypro.com
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

            // Toggle Sidebar: click logo = mini (icons only), click again = expanded
            function toggleSidebar() {
                sidebar.classList.toggle('mini');
            }

            if (toggleBtn) {
                toggleBtn.addEventListener('click', toggleSidebar);
            }

            if (floatingBtn) {
                floatingBtn.addEventListener('click', toggleSidebar);
            }

            // Accordion Submenu Logic
            const menuLinks = document.querySelectorAll('.has-submenu');
            
            menuLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const parentItem = this.parentElement;
                    
                    // Close others (Accordion style)
                    document.querySelectorAll('.menu-item.open').forEach(item => {
                        if (item !== parentItem) {
                            item.classList.remove('open');
                        }
                    });

                    parentItem.classList.toggle('open');
                });
            });

            // Graph Modal Logic
            const modal = document.getElementById('graphModal');
            if (modal) {
                const modalClose = document.getElementById('graphModalClose');
                const modalTitle = document.getElementById('graphModalTitle');
                const metricCards = document.querySelectorAll('.metric-card-premium');

                // Open modal on card click
                metricCards.forEach(card => {
                    card.addEventListener('click', function() {
                        const titleElement = this.querySelector('.metric-title');
                        if (titleElement && modalTitle) {
                            modalTitle.textContent = titleElement.textContent;
                        }
                        modal.classList.add('active');
                    });
                });

                // Close modal on X click
                if (modalClose) {
                    modalClose.addEventListener('click', function() {
                        modal.classList.remove('active');
                    });
                }

                // Close modal on outside click
                modal.addEventListener('click', function(e) {
                    if (e.target === modal) {
                        modal.classList.remove('active');
                    }
                });

                // Filter Buttons Logic (Visual only for now)
                const filterBtns = modal.querySelectorAll('.filter-btn');
                filterBtns.forEach(btn => {
                    btn.addEventListener('click', function() {
                        filterBtns.forEach(b => b.classList.remove('active'));
                        this.classList.add('active');
                    });
                });
            }
        });
    </script>
</body>
</html>
