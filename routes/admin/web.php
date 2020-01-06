<?php
/**
 * 后台路由文件
 */

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function() {
	// 登录视图
	Route::get('/login', 'EnterController@login_form')->name('admin.login_form');
	// 登录逻辑
	Route::post('/login', 'EnterController@login')->name('admin.login');
});

Route::group(['middleware' => ['web', 'auth:admin'], 'prefix' => 'admin', 'namespace' => 'Admin'], function() {
    // 后台首页
	Route::get('/index/index', 'IndexController@index')->name('admin.index.index');

	Route::name('admin')->resource('role','RoleController');
});
