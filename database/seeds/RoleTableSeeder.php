<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 获取所有权限
        $permissions = \Spatie\Permission\Models\Permission::all()->pluck('name');
        // 默认要移除的权限 (以下权限只能站长拥有)
        $guards = [
            'App\Http\Controllers\Admin\RoleController@edit',
            'App\Http\Controllers\Admin\RoleController@destory',
            'App\Http\Controllers\Admin\RoleController@create',
            'App\Http\Controllers\Admin\RoleController@permission',
            'App\Http\Controllers\Admin\PermissionController@edit',
            'App\Http\Controllers\Admin\RoleController@destory',
            'App\Http\Controllers\Admin\RoleController@create'
        ];
        foreach ($permissions as $key => $permission) {
            if (in_array($permission, $guards)) {
                unset($permissions[$key]);
            }
        }
        // 普通管理员
        $admin = Role::create([
            'name' => 'admin',
            'title' => '普通管理员',
            'guard_name' => 'admin'
        ]);
        $admin->syncPermissions($permissions);

        // 超级管理员
        $superadmin = Role::create([
            'name' => 'superadmin',
            'title' => '超级管理员',
            'guard_name' => 'admin'
        ]);
        $superadmin->syncPermissions($permissions);

        Role::create([
            'name' => 'user',
            'title' => '普通用户',
            'guard_name' => 'admin'
        ]);

        Role::create([
            'name' => 'tourist',
            'title' => '游客',
            'guard_name' => 'admin'
        ]);
    }
}
