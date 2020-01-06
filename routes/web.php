<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// 后台路由文件 规则为 admin/xxx/xxx 或 admin/xxx
include __DIR__ . '/admin/web.php';

// 前台路由文件 规则为 index/xxx/xxx 或 index/xxx
include __DIR__ . '/index/web.php';
