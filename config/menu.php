<?php

return [
	[
		'title' => '后台首页',
		'icon' => 'menu-icon glyphicon glyphicon-home',
		'permisssion' => '权限标识',
		'url' => '/admin/index/index'
	],
	[
		'title' => '权限管理',
		'icon' => 'fa fa-minus-square-o',
		'permisssion' => '权限标识',
		'url' => '/admin/index/index',
		'menus' => [
			['title' => '角色列表', 'name' => 'App\Http\Controllers\Admin\RoleController@index', 'guard' => 'admin'],
			['title' => '修改角色', 'name' => 'App\Http\Controllers\Admin\RoleController@edit', 'guard' => 'admin'],
			['title' => '删除角色', 'name' => 'App\Http\Controllers\Admin\RoleController@destory', 'guard' => 'admin'],
			['title' => '添加角色', 'name' => 'App\Http\Controllers\Admin\RoleController@create', 'guard' => 'admin'],
			['title' => '修改角色权限', 'name' => 'App\Http\Controllers\Admin\RoleController@permission', 'guard' => 'admin'],
		]
	]
];
