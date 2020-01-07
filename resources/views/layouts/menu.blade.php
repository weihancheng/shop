<!-- Page Sidebar -->
<div class="page-sidebar" id="sidebar">
    <!-- Page Sidebar Header-->
    <div class="sidebar-header-wrapper">
        <input type="text" class="searchinput"/>
        <i class="searchicon fa fa-search"></i>
        <div class="searchhelper">查询</div>
    </div>
    <!-- /Page Sidebar Header -->
    <!-- 菜单列表start -->
    <ul class="nav sidebar-menu">
        @foreach(config('menu') as $first)
            <li>
                <a href="{{$first['url'] ?? "#"}}" class="menu-dropdown">
                    <i class="{{$first['icon']}}"></i>
                    <span class="menu-text"> {{$first['title']}}</span>
                    @isset($first['menus'])<i class="menu-expand"></i>@endisset
                </a>
                @isset($first['menus'])
                    <ul class="submenu">
                        @foreach($first['menus'] as $second)
                            {{--判断是否是网站站长--}}
                            {{--判断是否有权限--}}
                            @if(auth()->guard('admin')->user()->name == config('weiy.webmaster')
                            || auth()->guard('admin')->user()->hasAnyPermission($second['permisssion']))
                            <li>
                                <a href="{{$second['url']}}">
                                    <span class="menu-text">{{$second['title']}}</span>
                                    {{--第三级菜单start--}}
                                    @isset($second['menus'])
                                        <ul class="submenu">
                                            @foreach($second['menus'] as $third)
                                                {{--判断是否是网站站长--}}
                                                {{--判断是否有权限--}}
                                                @if(auth()->guard('admin')->user()->name == config('weiy.webmaster')
                                                || auth()->guard('admin')->user()->hasAnyPermission($third['permisssion']))
                                                    <li>
                                                        <a href="{{$third['url']}}">
                                                            <span class="menu-text">{{$third['title']}}</span>
                                                        </a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    @endisset
                                    {{--第三级菜单end--}}
                                </a>
                            </li>
                            @endif
                        @endforeach
                    </ul>
                @endisset
            </li>
        @endforeach
    </ul>
    <!-- 菜单列表end -->
</div>
<!-- /Page Sidebar -->
