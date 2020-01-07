<?php

return [
	[
		'group' => '角色管理',
		'permissions' => [
			['title' => '角色列表', 'name' => 'App\Http\Controllers\Admin\RoleController@index', 'guard' => 'admin'],
			['title' => '修改角色', 'name' => 'App\Http\Controllers\Admin\RoleController@edit', 'guard' => 'admin'],
			['title' => '删除角色', 'name' => 'App\Http\Controllers\Admin\RoleController@destory', 'guard' => 'admin'],
			['title' => '添加角色', 'name' => 'App\Http\Controllers\Admin\RoleController@create', 'guard' => 'admin'],
			['title' => '修改角色的权限', 'name' => 'App\Http\Controllers\Admin\RoleController@permission', 'guard' => 'admin'],
		]
	],
    [
        'group' => '权限管理',
        'permissions' => [
            ['title' => '权限列表', 'name' => 'App\Http\Controllers\Admin\PermissionController@index', 'guard' => 'admin'],
            ['title' => '修改角色', 'name' => 'App\Http\Controllers\Admin\PermissionController@edit', 'guard' => 'admin'],
            ['title' => '删除权限', 'name' => 'App\Http\Controllers\Admin\PermissionController@destory', 'guard' => 'admin'],
            ['title' => '添加权限', 'name' => 'App\Http\Controllers\Admin\PermissionController@create', 'guard' => 'admin'],
        ]
    ]
];
