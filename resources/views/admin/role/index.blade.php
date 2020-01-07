@extends('layouts.main')

@section('content')
    @component('components.page', ['title' => '角色列表'])
        {{--面包屑导航插槽 start--}}
        @slot('breadcrumb')
            @component('components.breadcrumb', ['breadcrumb' => [['url' => '#', 'name' => '角色列表']]])@endcomponent
        @endslot
        {{--面包屑导航插槽 end--}}

        {{--表头导航 start--}}
        @slot('nav')
            <a href="javascript:void(0);" data-toggle="modal" data-target=".addRole" class="btn btn-default shiny">添加角色</a>
            @component('components.modal', ['id' => 'addRole', 'url' => '/admin/role', 'title' => '添加角色'])
                @csrf
                <div class="form-group">
                    <label for="title">角色名称</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="请输入角色名称" value="{{old('title')}}">
                </div>
                <div class="form-group">
                    <label for="name">角色标识</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="请输入角色标识" value="{{old('name')}}">
                </div>
            @endcomponent
        @endslot
        {{--表头导航 end--}}

        {{--主要内容 start--}}
        @slot('body')
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>角色名称</th>
                    <th>角色标识</th>
                    <th class="text-align-center">设置</th>
                </tr>
                </thead>
                <tbody>
                @foreach($roles as $role)
                    <tr>
                        <td>
                            {{$role->id}}
                        </td>
                        <td>
                            {{$role->title}}
                        </td>
                        <td>
                            {{$role->name}}
                        </td>
                        <td class="text-align-center">
                            <a href="/admin/role/permission/{{$role->id}}" class="btn btn-sm">权限</a>
                            <a href="javascript:void(0);" class="btn btn-blue btn-sm" data-toggle="modal" data-target=".editRole{{$role->id}}">编辑</a>
                            <a href="javascript:void(0);" class="btn btn-danger btn-sm">删除</a>
                        </td>
                        {{-- 编辑模态框start --}}
                        @component('components.modal', ['id' => "editRole".$role->id, 'url' => "/admin/role/".$role->id, 'title' => "编辑：".$role->title, 'method' => "PUT"])
                            @csrf
                            <div class="form-group">
                                <label for="title">角色名称</label>
                                <input type="text" name="title" class="form-control" id="title" placeholder="请输入角色名称" value="{{$role->title}}">
                            </div>
                            <div class="form-group">
                                <label for="name">角色标识</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="请输入角色标识" value="{{$role->name}}">
                            </div>
                        @endcomponent
                        {{-- 编辑模态框end --}}
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="footer">
                <code>备注：只有超级管理员和站长才能修改权限</code>
            </div>
        @endslot
        {{--主要内容 end--}}
    @endcomponent
@endsection
