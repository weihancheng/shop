<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use App\Http\Requests\EnterRequest;

class EnterController extends Controller
{
	// 登录界面渲染
	public function login_form()
	{
		return view('index.login');
	}

	// 登录逻辑
	public function login(EnterRequest $request)
	{

    }
}
