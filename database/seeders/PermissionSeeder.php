<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // user permissions
        Permission::create(['name' => 'user_show']);
        Permission::create(['name' => 'user_create']);
        Permission::create(['name' => 'user_edit']);
        Permission::create(['name' => 'user_delete']);

        // role permissions
        Permission::create(['name' => 'role_show']);
        Permission::create(['name' => 'role_create']);
        Permission::create(['name' => 'role_edit']);
        Permission::create(['name' => 'role_delete']);

        // permission permissions
        Permission::create(['name' => 'permission_show']);
        Permission::create(['name' => 'permission_create']);
        Permission::create(['name' => 'permission_edit']);
        Permission::create(['name' => 'permission_delete']);

        // article permissions
        Permission::create(['name' => 'article_show']);
        Permission::create(['name' => 'article_create']);
        Permission::create(['name' => 'article_edit']);
        Permission::create(['name' => 'article_delete']);



        $role = Role::create(['name' => 'Super Admin']);
        $role->givePermissionTo(Permission::all());

        // or may be done by chaining
        $role = Role::create(['name' => 'Admin'])
            ->givePermissionTo(['article_show','article_create','article_edit','article_delete','user_show','user_create']);

        $role = Role::create(['name' => 'User']);
        $role->givePermissionTo('article_show','article_create','article_edit','article_delete');

    }
}
