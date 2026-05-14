<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Role::create(['name' => 'admin', 'permissions' => 'all', 'status' => 'active']);
        \App\Models\Role::create(['name' => 'manager', 'permissions' => 'limited', 'status' => 'active']);
        \App\Models\Role::create(['name' => 'purchase', 'permissions' => '', 'status' => 'active']);
        \App\Models\Role::create(['name' => 'sales', 'permissions' => '', 'status' => 'active']);
        \App\Models\Role::create(['name' => 'inventory', 'permissions' => '', 'status' => 'active']);
        \App\Models\Role::create(['name' => 'reports', 'permissions' => '', 'status' => 'active']);
        \App\Models\Role::create(['name' => 'settings', 'permissions' => '', 'status' => 'active']);


    }
}