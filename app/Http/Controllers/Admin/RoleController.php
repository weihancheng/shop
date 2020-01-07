<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RoleRequest;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::get();
        return view('admin.role.index', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoleRequest $request)
    {
        Role::create(['name' => $request->name, 'title' => $request->title]);
        session()->flash('success', '添加' . $request->title . '成功');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RoleRequest $request, Role $role)
    {
        $role->name = $request->name;
        $role->title = $request->title;
        $role->save();
        session()->flash('success', 'ID为'. $role->id . '的字段修改成功');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

	public function permission(Role $role)
	{
		$rules = config('rule');
		// 获取当前角色的权限
		return view('admin.role.permission', compact('role', 'rules'));
    }

	public function permissionStore(Role $role, Request $request)
	{
		// 同步角色的权限
		$role->syncPermissions($request->name);
		session()->flash('success', '权限设置成功');
		return back();
    }
}
