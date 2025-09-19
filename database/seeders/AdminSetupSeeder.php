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
        // 1️⃣ Create Shield super_admin role (full access)
        $superAdminRole = Role::firstOrCreate([
            'name' => 'super_admin',
            'guard_name' => 'web',
        ]);

        // 2️⃣ Create standard admin role
        $adminRole = Role::firstOrCreate([
            'name' => 'admin',
            'guard_name' => 'web',
        ]);

        // 3️⃣ List all permissions explicitly
        $permissions = [
            "view_role",
            "view_any_role",
            "create_role",
            "update_role",
            "delete_role",
            "delete_any_role",
            "view_alumni",
            "view_any_alumni",
            "create_alumni",
            "update_alumni",
            "restore_alumni",
            "restore_any_alumni",
            "replicate_alumni",
            "reorder_alumni",
            "delete_alumni",
            "delete_any_alumni",
            "force_delete_alumni",
            "force_delete_any_alumni",
            "view_event",
            "view_any_event",
            "create_event",
            "update_event",
            "restore_event",
            "restore_any_event",
            "replicate_event",
            "reorder_event",
            "delete_event",
            "delete_any_event",
            "force_delete_event",
            "force_delete_any_event",
            "view_gallery",
            "view_any_gallery",
            "create_gallery",
            "update_gallery",
            "restore_gallery",
            "restore_any_gallery",
            "replicate_gallery",
            "reorder_gallery",
            "delete_gallery",
            "delete_any_gallery",
            "force_delete_gallery",
            "force_delete_any_gallery",
        ];

        // 4️⃣ Create permissions if they don't exist
        foreach ($permissions as $permName) {
            Permission::firstOrCreate([
                'name' => $permName,
                'guard_name' => 'web',
            ]);
        }

        // 5️⃣ Assign all permissions to admin role
        $adminRole->syncPermissions(Permission::all());

        // 6️⃣ Create default admin user
        $admin = User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'admin',
                'password' => bcrypt('password'), // Change to secure password
            ]
        );

        // 7️⃣ Assign super_admin role to the admin user
        if (!$admin->hasRole($superAdminRole)) {
            $admin->assignRole($superAdminRole);
        }

        $this->command->info('✅ Admin user, roles, and permissions setup complete.');
    }
}
