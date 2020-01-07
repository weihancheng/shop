<?php
/**
 * 后台路由文件
 */

// 不需要任何权限校验都可以访问
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function() {
	// 登录视图
	Route::get('/login', 'EnterController@login_form')->name('admin.login_form');
	// 登录逻辑
	Route::post('/login', 'EnterController@login')->name('admin.login');
});

// 需要登录后才能访问
Route::group(['middleware' => ['web', 'auth:admin'], 'prefix' => 'admin', 'namespace' => 'Admin'], function() {
    // 后台首页
	Route::get('/index/index', 'IndexController@index')->name('admin.index.index');
	// 角色资源路由
	Route::name('admin')->resource('role','RoleController');
	//  角色的权限
	Route::get('/role/permission/{role}', 'RoleController@permission')->name('admin.role.permission.index');
	//  添加角色的权限
	Route::post('/role/permission/{role}', 'RoleController@permissionStore')->name('admin.role.permission.store');
	// 权限资源路由
	Route::name('admin')->resource('permission','PermissionController');
});

// 需要登录后才能访问 && 用户有访问权限
Route::group(['middleware' => ['web', 'auth:admin', 'permission:admin'], 'prefix' => 'admin', 'namespace' => 'Admin'], function() {
    // 后台首页
    Route::get('/index/index', 'IndexController@index')->name('admin.index.index');
    // 角色资源路由
    Route::name('admin')->resource('role','RoleController');
    //  角色的权限
    Route::get('/role/permission/{role}', 'RoleController@permission')->name('admin.role.permission.index');
    //  添加角色的权限
    Route::post('/role/permission/{role}', 'RoleController@permissionStore')->name('admin.role.permission.store');
    // 权限资源路由
    Route::name('admin')->resource('permission','PermissionController');
});
