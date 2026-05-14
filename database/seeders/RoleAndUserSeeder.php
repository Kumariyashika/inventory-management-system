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
    }
}
