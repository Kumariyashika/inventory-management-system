<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class RoleAndUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Roles
        $adminRole = Role::create([
            'roleName' => 'admin',
            'permissions' => 'all',
            'status' => 'active'
        ]);

        $managerRole = Role::create([
            'roleName' => 'manager',
            'permissions' => 'limited',
            'status' => 'active'
        ]);

        // Create Additional Roles
        $purchaseRole = Role::create([
            'roleName' => 'purchase',
            'permissions' => 'purchase,inventory,reports',
            'status' => 'active'
        ]);

        $staffRole = Role::create([
            'roleName' => 'staff',
            'permissions' => 'inventory,sales,tasks',
            'status' => 'active'
        ]);

        $storeRole = Role::create([
            'roleName' => 'store',
            'permissions' => 'inventory,stock,transfer',
            'status' => 'active'
        ]);

        $supplierRole = Role::create([
            'roleName' => 'supplier',
            'permissions' => 'purchase,invoice,shipments',
            'status' => 'active'
        ]);

        // Create Admin User
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@ims.com',
            'password' => Hash::make('password123'),
            'role_id' => $adminRole->id,
        ]);

        // Create Manager User
        User::create([
            'name' => 'Manager User',
            'email' => 'manager@ims.com',
            'password' => Hash::make('password123'),
            'role_id' => $managerRole->id,
        ]);

        // Create Purchase User
        User::create([
            'name' => 'Purchase User',
            'email' => 'purchase@ims.com',
            'password' => Hash::make('password123'),
            'role_id' => $purchaseRole->id,
        ]);

        // Create Staff User
        User::create([
            'name' => 'Staff User',
            'email' => 'staff@ims.com',
            'password' => Hash::make('password123'),
            'role_id' => $staffRole->id,
        ]);

        // Create Store User
        User::create([
            'name' => 'Store User',
            'email' => 'store@ims.com',
            'password' => Hash::make('password123'),
            'role_id' => $storeRole->id,
        ]);

        // Create Supplier User
        User::create([
            'name' => 'Supplier User',
            'email' => 'supplier@ims.com',
            'password' => Hash::make('password123'),
            'role_id' => $supplierRole->id,
        ]);
    }
}
