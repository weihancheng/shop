@extends('layouts.main')

@section('content')
    @component('components.page', ['title' => '权限列表'])
        @slot('breadcrumb')
            @component('components.breadcrumb', ['breadcrumb' => [['url' => '#', 'name' => '权限列表']]])@endcomponent
        @endslot

        @slot('nav')
            <a href="javascript:void(0);" data-toggle="modal" data-target=".addPermission" class="btn btn-default shiny">添加权限</a>
            @component('components.modal', ['id' => 'addPermission', 'url' => '/admin/permission', 'title' => '添加权限'])
                {{--添加权限表单start--}}
                @csrf
                <div class="form-group">
                    <label for="name">权限标识</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="事例: Admin::config-site" value="{{old('name')}}">
                </div>
                {{--添加权限表单end--}}
            @endcomponent
        @endslot

        @slot('body')
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>
                        ID
                    </th>
                    <th>
                        权限标识
                    </th>
                    <th class="text-align-center">
                        设置
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($permissions as $permission)
                    <tr>
                        <td>
                            {{$permission->id}}
                        </td>
                        <td>
                            {{$permission->name}}
                        </td>
                        <td class="text-align-center">
                            <a href="javascript:void(0);" class="btn btn-blue btn-sm" data-toggle="modal" data-target=".editPermission{{$permission->id}}">编辑</a>
                            <a href="javascript:void(0);" class="btn btn-danger btn-sm">删除</a>
                        </td>
                        {{-- 编辑模态框start --}}
                        @component('components.modal', ['id' => "editPermission".$permission->id, 'url' => "/admin/permission/".$permission->id, 'title' => "编辑：".$permission->title, 'method' => "PUT"])
                            @csrf
                            <div class="form-group">
                                <label for="title">权限名称</label>
                                <input type="text" name="title" class="form-control" id="title" placeholder="请输入权限名称" value="{{$permission->title}}">
                            </div>
                            <div class="form-group">
                                <label for="name">权限标识</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="请输入权限标识" value="{{$permission->name}}">
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
    @endcomponent
@endsection
