<?php
/**
 * 前台路由文件
 */

Route::group(['prefix' => 'index', 'namespace' => 'Index'], function() {
	// 登录视图
	Route::get('/login', 'EnterController@login_form')->name('index.login_form');
	// 登录逻辑
	Route::post('/login', 'EnterController@login')->name('index.login');

});
