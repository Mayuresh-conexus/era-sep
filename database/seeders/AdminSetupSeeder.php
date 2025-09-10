<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AdminSetupSeeder extends Seeder
{
    public function run(): void
    {
        // Create admin role if it doesn't exist
        $role = Role::firstOrCreate(['name' => 'admin', 'guard_name' => 'web']);

        // Assign all permissions to admin role
        $permissions = Permission::all();
        $role->syncPermissions($permissions);

        // Assign role to default admin user
        $admin = User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'admin',
                'password' => bcrypt('password'), // default password, you can change
            ]
        );

        $admin->assignRole($role);

        $this->command->info('✅ Admin role, permissions, and user setup complete.');
    }
}
