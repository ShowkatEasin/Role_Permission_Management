<?php

namespace Database\Seeders;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create roles
       $roleSuperAdmin = Role::create(['name' => 'superadmin']);
       $roleAdmin = Role::create(['name' => 'admin']);
       $roleEditor = Role::create(['name' => 'editor']);
       $roleUser = Role::create(['name' => 'user']);



        //permission list as array

        //blog permission
        $permission =[

            //dashboard
            'admin.dashboard',

            //blog permission

            'blog.create',
            'blog.view',
            'blog.edit',
            'blog.delete',
            'blog.approve',

            //admin permission
            'admin.create',
            'admin.view',
            'admin.edit',
            'admin.delete',
            'admin.approve',

            //role permission

            'role.view',
            'role.edit',
            'role.create',
            'role.delete',
            'role.approve',

            //Profile permission
            'profile.view',
            'profile.edit',
            
        ];

        //Create and assign permission

        //Permission::create(['name' => 'edit articles']);

        for($i=0; $i < count($permission); $i++){
            //create permission
            $permission = Permission::create(['name' => $permission[$i]]);
            $roleSuperAdmin->givePermissionTo($permission);
            $permission->assignRole($roleSuperAdmin);
        }

    }
}
