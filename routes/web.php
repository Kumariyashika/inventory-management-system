<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

/*
|--------------------------------------------------------------------------
| Root / Auth Routes
|--------------------------------------------------------------------------
*/

Route::get('/', fn() => view('login'))->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/create-admin', function () {

    if (User::where('email', 'admin@ims.com')->exists()) {
        return "Admin already exists";
    }

    User::create([
        'name' => 'Admin',
        'email' => 'admin@ims.com',
        'password' => Hash::make('password123'),
        'role_id' => 1
    ]);

    return "Admin Created Successfully";
});
Route::post('/logout', function () {
    return redirect('/');
})->name('logout');

/*
|--------------------------------------------------------------------------
| Admin Zone Routes
|--------------------------------------------------------------------------
*/

Route::get('/admin/dashboard', fn() => view('adminzone.dashboard'));

/* --- User Management --- */
Route::get('/admin/users/manage', [UserController::class, 'index'])->name('users.index');
Route::get('/admin/users/add', [UserController::class, 'create'])->name('users.create');
Route::post('/admin/users', [UserController::class, 'store'])->name('users.store');
Route::get('/admin/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/admin/users/{user}', [UserController::class, 'update'])->name('users.update');
Route::delete('/admin/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

Route::get('/admin/users/roles', [RoleController::class, 'index'])->name('roles.index');
Route::get('/admin/users/roles/create', [RoleController::class, 'create'])->name('roles.create');
Route::post('/admin/users/roles', [RoleController::class, 'store'])->name('roles.store');
Route::get('/admin/users/roles/{role}/edit', [RoleController::class, 'edit'])->name('roles.edit');
Route::put('/admin/users/roles/{role}', [RoleController::class, 'update'])->name('roles.update');
Route::post('/admin/users/roles/delete-multiple', [RoleController::class, 'destroyMultiple'])->name('roles.destroyMultiple');
Route::delete('/admin/users/roles/{role}', [RoleController::class, 'destroy'])->name('roles.destroy');
Route::get('/admin/users/customers', fn() => view('adminzone.users.customers'));
Route::get('/admin/users/suppliers', fn() => view('adminzone.users.suppliers'));

/* --- Products --- */
Route::get('/admin/products/add', fn() => view('adminzone.products.add-product'));
Route::get('/admin/products/list', fn() => view('adminzone.products.product-list'));
Route::get('/admin/products/categories', fn() => view('adminzone.products.categories'));

/* --- Warehouse --- */
Route::get('/admin/warehouse/list', fn() => view('adminzone.warehouse.warehouse-list'));
Route::get('/admin/warehouse/add', fn() => view('adminzone.warehouse.add-warehouse'));
Route::get('/admin/warehouse/transfer', fn() => view('adminzone.warehouse.warehouse-transfer'));

/* --- Inventory / Stock --- */
Route::get('/admin/inventory/stock-in', fn() => view('adminzone.inventory.stock-in'));
Route::get('/admin/inventory/stock-out', fn() => view('adminzone.inventory.stock-out'));
Route::get('/admin/inventory/low-stock', fn() => view('adminzone.inventory.low-stock'));
Route::get('/admin/inventory/expiry', fn() => view('adminzone.inventory.expiry-products'));

/* --- Sales --- */
Route::get('/admin/sales/invoice', fn() => view('adminzone.sales.create-invoice'));
Route::get('/admin/sales/list', fn() => view('adminzone.sales.sales-list'));
Route::get('/admin/sales/payment', fn() => view('adminzone.sales.payment-tracking'));

/* --- Orders --- */
Route::get('/admin/orders/new', fn() => view('adminzone.orders.new-orders'));
Route::get('/admin/orders/history', fn() => view('adminzone.orders.order-history'));
Route::get('/admin/orders/returns', fn() => view('adminzone.orders.returns'));

/* --- Production --- */
Route::get('/admin/production/orders', fn() => view('adminzone.production.production-orders'));
Route::get('/admin/production/work', fn() => view('adminzone.production.work-orders'));
Route::get('/admin/production/plan', fn() => view('adminzone.production.production-plan'));
Route::get('/admin/production/bom', fn() => view('adminzone.production.bill-of-materials'));

/* --- Reports --- */
Route::get('/admin/reports/production', fn() => view('adminzone.reports.production-reports'));
Route::get('/admin/reports/quality', fn() => view('adminzone.reports.quality-reports'));
Route::get('/admin/reports/sales', fn() => view('adminzone.reports.sales-reports'));
Route::get('/admin/reports/inventory', fn() => view('adminzone.reports.inventory-reports'));

/* --- Scanner --- */
Route::get('/admin/scanner/barcode', fn() => view('adminzone.scanner.barcode-scanner'));
Route::get('/admin/scanner/qr', fn() => view('adminzone.scanner.qr-scanner'));

/* --- Settings --- */
Route::get('/admin/settings/system', fn() => view('adminzone.settings.system-settings'));
Route::get('/admin/settings/profile', fn() => view('adminzone.settings.profile-settings'));
Route::get('/admin/settings/backup', fn() => view('adminzone.settings.backup-restore'));

/* --- Help --- */
Route::get('/admin/help/guide', fn() => view('adminzone.help.user-guide'));
Route::get('/admin/help/faqs', fn() => view('adminzone.help.faqs'));
Route::get('/admin/help/contact', fn() => view('adminzone.help.contact-support'));

/*
|--------------------------------------------------------------------------
| Manager Zone Routes
| Views folder: resources/views/managerzone/
| Files: dashboard, team-performance, products, inventory, sales,
|         production, purchases, quality-control, reports, analytics,
|         tasks-approvals, settings, help-support
|--------------------------------------------------------------------------
*/

Route::prefix('manager')->group(function () {

    Route::get('/dashboard', fn() => view('managerzone.dashboard'))->name('manager.dashboard');
    Route::get('/team-performance', fn() => view('managerzone.team-performance'))->name('manager.teamperformance');
    Route::get('/products', fn() => view('managerzone.products'))->name('manager.products');
    Route::get('/inventory', fn() => view('managerzone.inventory'))->name('manager.inventory');
    Route::get('/sales', fn() => view('managerzone.sales'))->name('manager.sales');
    Route::get('/production', fn() => view('managerzone.production'))->name('manager.production');
    Route::get('/purchases', fn() => view('managerzone.purchases'))->name('manager.purchases');
    Route::get('/quality-control', fn() => view('managerzone.quality-control'))->name('manager.quality');
    Route::get('/reports', fn() => view('managerzone.reports'))->name('manager.reports');
    Route::get('/analytics', fn() => view('managerzone.analytics'))->name('manager.analytics');
    Route::get('/tasks-approvals', fn() => view('managerzone.tasks-approvals'))->name('manager.tasks');
    Route::get('/settings', fn() => view('managerzone.settings'))->name('manager.settings');
    Route::get('/help-support', fn() => view('managerzone.help-support'))->name('manager.support');

});

/*
|--------------------------------------------------------------------------
| Staff Zone Routes
| Views folder: resources/views/staffzone/
| Files: dashboard, my-tasks, inventory, sales, purchases, production,
|         reports, my-approvals, documents, profile, settings, help-support
| NOTE: Files were renamed from bad names (spaces, singular) to kebab-case.
|--------------------------------------------------------------------------
*/

Route::prefix('staff')->group(function () {

    Route::get('/dashboard', fn() => view('staffzone.dashboard'))->name('staff.dashboard');
    Route::get('/my-tasks', fn() => view('staffzone.my-tasks'))->name('staff.mytasks');
    Route::get('/inventory', fn() => view('staffzone.inventory'))->name('staff.inventory');
    Route::get('/sales', fn() => view('staffzone.sales'))->name('staff.sales');
    Route::get('/purchases', fn() => view('staffzone.purchases'))->name('staff.purchases');
    Route::get('/production', fn() => view('staffzone.production'))->name('staff.production');
    Route::get('/reports', fn() => view('staffzone.reports'))->name('staff.reports');
    Route::get('/my-approvals', fn() => view('staffzone.my-approvals'))->name('staff.approvals');
    Route::get('/documents', fn() => view('staffzone.documents'))->name('staff.documents');
    Route::get('/profile', fn() => view('staffzone.profile'))->name('staff.profile');
    Route::get('/settings', fn() => view('staffzone.settings'))->name('staff.settings');
    Route::get('/help-support', fn() => view('staffzone.help-support'))->name('staff.support');

});

/*
|--------------------------------------------------------------------------
| Purchase Zone Routes
| Views folder: resources/views/purchasezone/
| Files: dashboard, my-tasks, inventory, purchase (not purchases),
|         sales, production, reports, my-approvals, documents,
|         profile, settings, help
|--------------------------------------------------------------------------
*/

Route::prefix('purchase')->group(function () {

    Route::get('/dashboard', fn() => view('purchasezone.dashboard'))->name('purchase.dashboard');
    Route::get('/my-tasks', fn() => view('purchasezone.my-tasks'))->name('purchase.mytasks');
    Route::get('/inventory', fn() => view('purchasezone.inventory'))->name('purchase.inventory');
    Route::get('/purchase', fn() => view('purchasezone.purchase'))->name('purchase.purchase');
    Route::get('/sales', fn() => view('purchasezone.sales'))->name('purchase.sales');
    Route::get('/production', fn() => view('purchasezone.production'))->name('purchase.production');
    Route::get('/reports', fn() => view('purchasezone.reports'))->name('purchase.reports');
    Route::get('/my-approvals', fn() => view('purchasezone.my-approvals'))->name('purchase.approvals');
    Route::get('/documents', fn() => view('purchasezone.documents'))->name('purchase.documents');
    Route::get('/profile', fn() => view('purchasezone.profile'))->name('purchase.profile');
    Route::get('/settings', fn() => view('purchasezone.settings'))->name('purchase.settings');
    Route::get('/help', fn() => view('purchasezone.help'))->name('purchase.help');

});

/*
|--------------------------------------------------------------------------
| Store Zone Routes
| Views folder: resources/views/storezone/
| Files: dashboard, inventory, sales, stock, transfer, tasks,
|         reports, documents, profile, settings, help
|--------------------------------------------------------------------------
*/

Route::prefix('store')->group(function () {

    Route::get('/dashboard', fn() => view('storezone.dashboard'))->name('store.dashboard');
    Route::get('/inventory', fn() => view('storezone.inventory'))->name('store.inventory');
    Route::get('/sales', fn() => view('storezone.sales'))->name('store.sales');
    Route::get('/stock', fn() => view('storezone.stock'))->name('store.stock');
    Route::get('/transfer', fn() => view('storezone.transfer'))->name('store.transfer');
    Route::get('/tasks', fn() => view('storezone.tasks'))->name('store.tasks');
    Route::get('/reports', fn() => view('storezone.reports'))->name('store.reports');
    Route::get('/documents', fn() => view('storezone.documents'))->name('store.documents');
    Route::get('/profile', fn() => view('storezone.profile'))->name('store.profile');
    Route::get('/settings', fn() => view('storezone.settings'))->name('store.settings');
    Route::get('/help', fn() => view('storezone.help'))->name('store.help');

});

/*
|--------------------------------------------------------------------------
| Supplier Zone Routes
| Views folder: resources/views/supplierzone/
| Files: dashboard, purchase, invoice, shipments, returns, products,
|         reports, messages, profile, settings, help
|--------------------------------------------------------------------------
*/

Route::prefix('supplier')->group(function () {

    Route::get('/dashboard', fn() => view('supplierzone.dashboard'))->name('supplier.dashboard');
    Route::get('/purchase', fn() => view('supplierzone.purchase'))->name('supplier.purchase');
    Route::get('/invoice', fn() => view('supplierzone.invoice'))->name('supplier.invoice');
    Route::get('/shipments', fn() => view('supplierzone.shipments'))->name('supplier.shipments');
    Route::get('/returns', fn() => view('supplierzone.returns'))->name('supplier.returns');
    Route::get('/products', fn() => view('supplierzone.products'))->name('supplier.products');
    Route::get('/reports', fn() => view('supplierzone.reports'))->name('supplier.reports');
    Route::get('/messages', fn() => view('supplierzone.messages'))->name('supplier.messages');
    Route::get('/profile', fn() => view('supplierzone.profile'))->name('supplier.profile');
    Route::get('/settings', fn() => view('supplierzone.settings'))->name('supplier.settings');
    Route::get('/help', fn() => view('supplierzone.help'))->name('supplier.help');

});

/*
|--------------------------------------------------------------------------
| System Zone Routes
| Views folder: resources/views/systemzone/
| Only file present: dashboard.blade.php
|--------------------------------------------------------------------------
*/

Route::prefix('system')->group(function () {

    Route::get('/dashboard', fn() => view('systemzone.dashboard'))->name('system.dashboard');

});
