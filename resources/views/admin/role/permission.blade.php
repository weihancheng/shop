@extends('layouts.main')

@section('content')
    @component('components.page', ['title' => $role['title'].' - 权限设置'])
        {{--面包屑导航--}}
        @slot('breadcrumb')
            @component('components.breadcrumb', ['breadcrumb' => [['url' => '/admin/role', 'name' =>'角色列表'], ['url' => '#', 'name' => $role['title'].' - 权限设置']]])@endcomponent
        @endslot

        {{--主要内容--}}
        @slot('body')
            <form action="/admin/role/permission/{{$role['id']}}" method="post">
                @csrf
                @foreach($rules as $rule)
                    <div style="margin: 0 10px 30px 10px">
                        <h5>{{$rule['group']}}</h5>
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-xs-12">
                                <div class="checkbox">
                                    @foreach($rule['permissions'] as $permission)
                                        <label style="margin-right: 15px">
                                            <input name="name[]" {{$role->hasPermissionTo($permission['name']) ? 'checked=""' : ''}}
                                            type="checkbox" value="{{$permission['name']}}">
                                            <span class="text">{{$permission['title']}}</span>
                                        </label>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <button style="margin:0 10px" type="submit" class="btn btn-blue">保存</button>
            </form>
        @endslot
    @endcomponent
@endsection
