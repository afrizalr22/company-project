<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'manage statistics',
            'manage product',
            'manage principles',
            'manage testimonials',
            'manage clients',
            'manage teams',
            'manage abouts',
            'manage appointments',
            'manage hero sections',
            'manage about tim',
            'manage needs solutions',
            'manage techology solutions',
            'manage gallery',
            'manage blog',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(
                [
                    "name" => $permission
                ]
            );
        }

        $designManagerRole = Role::firstOrCreate([
            'name' => 'design_manager'
        ]);

        $designManagerPermission = [
            'manage product',
            'manage principles',
            'manage testimonials',
        ];

        $designManagerRole->syncPermissions($designManagerPermission);

        $superAdminRole = Role::firstOrCreate([
            'name' => 'super_admin'
        ]);

        $user = User::create([
            'name' => 'nexicon',
            'email' => 'nexicon@gmail.com',
            'password' => bcrypt('123123123')
        ]);

        $user->assignRole($superAdminRole);
    }
}
