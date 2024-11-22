<?php

// database/seeders/RolesPermissionsSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Permission;
use App\Models\User;

class RolesPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Create Permissions
        $viewDashboard = Permission::create(['name' => 'view dashboard']);
        $manageUsers = Permission::create(['name' => 'manage users']);
        $manageTickets = Permission::create(['name' => 'manage tickets']);
        $viewTickets = Permission::create(['name' => 'view tickets']);

        // Create Roles
        $admin = Role::create(['name' => 'admin']);
        $user = Role::create(['name' => 'user']);

        // Assign Permissions to Roles
        $admin->permissions()->attach([$viewDashboard->id, $manageUsers->id, $manageTickets->id, $viewTickets->id]);
        $user->permissions()->attach([$viewTickets->id]);

        // Assign Roles to Users
        $adminUser = User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
        ]);
        $adminUser->roles()->attach($admin->id);
    }
}
