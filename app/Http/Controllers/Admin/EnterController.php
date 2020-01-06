<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EnterRequest;
use Illuminate\Support\Facades\Auth;

class EnterController extends Controller
{
	// 登录界面渲染
	public function login_form()
	{
		return view('admin.login');
	}

	// 登录逻辑
	public function login(EnterRequest $request)
	{
		if (!Auth::guard('admin')->attempt(['name' => $request->name, 'password' => $request->password])) {
			session()->flash('error', '用户名或密码不正确');
			return back();
		}
		return redirect()->route('admin.index.index');
    }
}
