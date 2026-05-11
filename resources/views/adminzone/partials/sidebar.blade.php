<aside class="admin-sidebar" id="adminSidebar">
    <div class="sidebar-header" id="sidebarToggleBtn" title="Toggle Sidebar">
        <div class="sidebar-logo">
            <img src="{{ asset('img/logo_ims.jfif') }}" alt="IMS Logo">
            <span>Inventory Pro</span>
        </div>
    </div>
    
    <nav class="sidebar-menu">
        <ul class="menu-list">
            <li class="menu-item">
                <a href="/admin" class="menu-link active" data-label="Dashboard">
                    <div class="menu-title-wrap">
                        <i class="ph ph-squares-four menu-icon"></i>
                        <span>Dashboard</span>
                    </div>
                </a>
            </li>
            
            <li class="menu-item">
                <a href="#" class="menu-link has-submenu" data-label="User Management">
                    <div class="menu-title-wrap">
                        <i class="ph ph-users menu-icon"></i>
                        <span>User Management</span>
                    </div>
                    <i class="ph ph-caret-down submenu-icon"></i>
                </a>
                <ul class="submenu">
                    <li class="submenu-item"><a href="/admin/users/add"       class="submenu-link">Add user</a></li>
                    <li class="submenu-item"><a href="/admin/users/manage"    class="submenu-link">Manage users</a></li>
                    <li class="submenu-item"><a href="/admin/users/roles"     class="submenu-link">Role and permission</a></li>
                    <li class="submenu-item"><a href="/admin/users/customers" class="submenu-link">Customer</a></li>
                    <li class="submenu-item"><a href="/admin/users/suppliers" class="submenu-link">Suppliers</a></li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="#" class="menu-link has-submenu" data-label="Products">
                    <div class="menu-title-wrap">
                        <i class="ph ph-package menu-icon"></i>
                        <span>Products</span>
                    </div>
                    <i class="ph ph-caret-down submenu-icon"></i>
                </a>
                <ul class="submenu">
                    <li class="submenu-item"><a href="/admin/products/add" class="submenu-link">Add Product</a></li>
                    <li class="submenu-item"><a href="/admin/products/list" class="submenu-link">Product List</a></li>
                    <li class="submenu-item"><a href="/admin/products/categories" class="submenu-link">Categories</a></li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="#" class="menu-link has-submenu" data-label="Warehouse">
                    <div class="menu-title-wrap">
                        <i class="ph ph-warehouse menu-icon"></i>
                        <span>Warehouse Management</span>
                    </div>
                    <i class="ph ph-caret-down submenu-icon"></i>
                </a>
                <ul class="submenu">
                    <li class="submenu-item"><a href="/admin/warehouse/list" class="submenu-link">Warehouse List</a></li>
                    <li class="submenu-item"><a href="/admin/warehouse/add" class="submenu-link">Add Warehouse</a></li>
                    <li class="submenu-item"><a href="/admin/warehouse/transfer" class="submenu-link">Warehouse Transfer</a></li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="#" class="menu-link has-submenu" data-label="Inventory/Stock">
                    <div class="menu-title-wrap">
                        <i class="ph ph-stack menu-icon"></i>
                        <span>Inventory / Stock Management</span>
                    </div>
                    <i class="ph ph-caret-down submenu-icon"></i>
                </a>
                <ul class="submenu">
                    <li class="submenu-item"><a href="/admin/inventory/stock-in" class="submenu-link">Stock In</a></li>
                    <li class="submenu-item"><a href="/admin/inventory/stock-out" class="submenu-link">Stock Out</a></li>
                    <li class="submenu-item"><a href="/admin/inventory/low-stock" class="submenu-link">Low Stock Alert</a></li>
                    <li class="submenu-item"><a href="/admin/inventory/expiry" class="submenu-link">Expiry Products</a></li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="#" class="menu-link has-submenu" data-label="Sales">
                    <div class="menu-title-wrap">
                        <i class="ph ph-currency-dollar menu-icon"></i>
                        <span>Sales Management</span>
                    </div>
                    <i class="ph ph-caret-down submenu-icon"></i>
                </a>
                <ul class="submenu">
                    <li class="submenu-item"><a href="/admin/sales/invoice" class="submenu-link">Create Invoice</a></li>
                    <li class="submenu-item"><a href="/admin/sales/list" class="submenu-link">Sales List</a></li>
                    <li class="submenu-item"><a href="/admin/sales/payment" class="submenu-link">Payment Tracking</a></li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="#" class="menu-link has-submenu" data-label="Orders">
                    <div class="menu-title-wrap">
                        <i class="ph ph-shopping-cart menu-icon"></i>
                        <span>Order Management</span>
                    </div>
                    <i class="ph ph-caret-down submenu-icon"></i>
                </a>
                <ul class="submenu">
                    <li class="submenu-item"><a href="/admin/orders/new" class="submenu-link">New Orders</a></li>
                    <li class="submenu-item"><a href="/admin/orders/history" class="submenu-link">Order History</a></li>
                    <li class="submenu-item"><a href="/admin/orders/returns" class="submenu-link">Returns Management</a></li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="#" class="menu-link has-submenu" data-label="Production">
                    <div class="menu-title-wrap">
                        <i class="ph ph-factory menu-icon"></i>
                        <span>Production Management</span>
                    </div>
                    <i class="ph ph-caret-down submenu-icon"></i>
                </a>
                <ul class="submenu">
                    <li class="submenu-item"><a href="/admin/production/orders" class="submenu-link">Production Orders</a></li>
                    <li class="submenu-item"><a href="/admin/production/work" class="submenu-link">Work Orders</a></li>
                    <li class="submenu-item"><a href="/admin/production/plan" class="submenu-link">Production Plan</a></li>
                    <li class="submenu-item"><a href="/admin/production/bom" class="submenu-link">Bill of Materials (BOM)</a></li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="#" class="menu-link has-submenu" data-label="Reports">
                    <div class="menu-title-wrap">
                        <i class="ph ph-chart-bar menu-icon"></i>
                        <span>Reports</span>
                    </div>
                    <i class="ph ph-caret-down submenu-icon"></i>
                </a>
                <ul class="submenu">
                    <li class="submenu-item"><a href="/admin/reports/production" class="submenu-link">Production Reports</a></li>
                    <li class="submenu-item"><a href="/admin/reports/quality" class="submenu-link">Quality Reports</a></li>
                    <li class="submenu-item"><a href="/admin/reports/sales" class="submenu-link">Sales Reports</a></li>
                    <li class="submenu-item"><a href="/admin/reports/inventory" class="submenu-link">Inventory Reports</a></li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="#" class="menu-link has-submenu" data-label="Scanner">
                    <div class="menu-title-wrap">
                        <i class="ph ph-barcode menu-icon"></i>
                        <span>Scanner Module</span>
                    </div>
                    <i class="ph ph-caret-down submenu-icon"></i>
                </a>
                <ul class="submenu">
                    <li class="submenu-item"><a href="/admin/scanner/barcode" class="submenu-link">Barcode Scanner</a></li>
                    <li class="submenu-item"><a href="/admin/scanner/qr" class="submenu-link">QR Code Scanner</a></li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="#" class="menu-link has-submenu" data-label="Settings">
                    <div class="menu-title-wrap">
                        <i class="ph ph-gear menu-icon"></i>
                        <span>Settings</span>
                    </div>
                    <i class="ph ph-caret-down submenu-icon"></i>
                </a>
                <ul class="submenu">
                    <li class="submenu-item"><a href="/admin/settings/system" class="submenu-link">System Settings</a></li>
                    <li class="submenu-item"><a href="/admin/settings/profile" class="submenu-link">Profile Settings</a></li>
                    <li class="submenu-item"><a href="/admin/settings/backup" class="submenu-link">Backup & Restore</a></li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="#" class="menu-link has-submenu" data-label="Help">
                    <div class="menu-title-wrap">
                        <i class="ph ph-question menu-icon"></i>
                        <span>Help & Support</span>
                    </div>
                    <i class="ph ph-caret-down submenu-icon"></i>
                </a>
                <ul class="submenu">
                    <li class="submenu-item"><a href="/admin/help/guide" class="submenu-link">User Guide</a></li>
                    <li class="submenu-item"><a href="/admin/help/faqs" class="submenu-link">FAQs</a></li>
                    <li class="submenu-item"><a href="/admin/help/contact" class="submenu-link">Contact Support</a></li>
                </ul>
            </li>

            <li class="menu-item" style="margin-top: 20px;">
                <a href="/" class="menu-link" data-label="Logout">
                    <div class="menu-title-wrap">
                        <i class="ph ph-sign-out menu-icon" style="color: #ef4444;"></i>
                        <span style="color: #ef4444;">Secure Logout</span>
                    </div>
                </a>
            </li>
        </ul>
    </nav>
</aside>
