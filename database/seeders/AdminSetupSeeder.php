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
        // 1️⃣ Ensure admin role exists
        $role = Role::firstOrCreate([
            'name' => 'admin',
            'guard_name' => 'web',
        ]);

        // 2️⃣ List your Filament resources manually
        $resources = [
            'Gallery',
            'Alumni',
            'Event',
            // Add more resource names as needed
        ];

        // 3️⃣ Generate standard CRUD permissions for each resource
        $actions = ['viewAny', 'view', 'create', 'update', 'delete', 'restore', 'forceDelete'];

        foreach ($resources as $resource) {
            foreach ($actions as $action) {
                $permName = "{$action} {$resource}";
                Permission::firstOrCreate([
                    'name' => $permName,
                    'guard_name' => 'web',
                ]);
            }
        }

        // 4️⃣ Assign all permissions to admin role
        $role->syncPermissions(Permission::all());

        // 5️⃣ Ensure default admin user exists
        $admin = User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'admin',
                'password' => bcrypt('password'), // change this to a secure password
            ]
        );

        // 6️⃣ Assign admin role to the user
        if (!$admin->hasRole($role)) {
            $admin->assignRole($role);
        }

        $this->command->info('✅ Admin role, permissions, and user setup complete.');
    }
}
