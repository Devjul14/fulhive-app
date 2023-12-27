<?php

namespace Database\Seeders;

use App\Models\Teams;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $role_seller = Role::UpdateorCreate(
            ['name' => 'seller'],
            ['name' => 'seller']
        );

        $role_warehouse = Role::UpdateorCreate(
            ['name' => 'warehouse'],
            ['name' => 'warehouse']
        );

        $role_admin = Role::UpdateorCreate(
            ['name' => 'admin'],
            ['name' => 'admin']
        );

        $role_viewer = Role::UpdateorCreate(
            ['name' => 'viewer'],
            ['name' => 'viewer']
        );

        $role_finance = Role::UpdateorCreate(
            ['name' => 'finance'],
            ['name' => 'finance']
        );

        $permission_seller = Permission::UpdateorCreate(
            ['name' => 'seller_view'],
            ['name' => 'seller_view']
        );

        $permission_warehouse = Permission::UpdateorCreate(
            ['name' => 'warehouse_view'],
            ['name' => 'warehouse_view']
        );

        $role_seller->givePermissionTo($permission_seller);
        $role_warehouse->givePermissionTo($permission_warehouse);

        $user_warehouse = User::find(1);
        $user_seller = User::find(2);
        $team_admin = User::find(4);

        $user_warehouse->assignRole($role_warehouse);
        $user_seller->assignRole($role_seller);
        $team_admin->assignRole($role_admin);
    }
}
