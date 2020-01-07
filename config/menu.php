<?php

return [
    [
        'title' => '后台首页',
        'icon' => 'menu-icon glyphicon glyphicon-home',
        'permisssion' => '',
        'url' => '/admin/index/index'
    ],
    [
        'title' => '权限管理',
        'icon' => 'menu-icon fa fa-table',
        'permisssion' => '',
        'menus' => [
            [
                'title' => '角色列表',
                'permisssion' => 'App\Http\Controllers\Admin\RoleController@index',
                'url' => '/admin/role'
            ],
            [
                'title' => '权限列表',
                'permisssion' => 'App\Http\Controllers\Admin\PermissionController@index',
                'url' => '/admin/permission'
            ],
        ]
    ],
    [
        'title' => '权限管理',
        'icon' => 'menu-icon fa fa-table',
        'permisssion' => '',
        'menus' => [
            [
                'title' => '角色列表',
                'permisssion' => 'App\Http\Controllers\Admin\RoleController@index',
                'url' => '/admin/role'
            ],
            [
                'title' => '权限列表',
                'permisssion' => 'App\Http\Controllers\Admin\PermissionController@index',
                'url' => '/admin/permission'
            ],
        ]
    ]
];
