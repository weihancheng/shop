<?php

return [
	[
		'group' => '角色管理',
		'permissions' => [
			['title' => '角色列表', 'name' => 'App\Http\Controllers\Admin\RoleController@index', 'guard' => 'admin'],
			['title' => '修改角色', 'name' => 'App\Http\Controllers\Admin\RoleController@edit', 'guard' => 'admin'],
			['title' => '删除角色', 'name' => 'App\Http\Controllers\Admin\RoleController@destory', 'guard' => 'admin'],
			['title' => '添加角色', 'name' => 'App\Http\Controllers\Admin\RoleController@create', 'guard' => 'admin'],
			['title' => '修改角色权限', 'name' => 'App\Http\Controllers\Admin\RoleController@permission', 'guard' => 'admin'],
		]
	]
];
