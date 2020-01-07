<!-- Page Sidebar -->
<div class="page-sidebar" id="sidebar">
    <!-- Page Sidebar Header-->
    <div class="sidebar-header-wrapper">
        <input type="text" class="searchinput" />
        <i class="searchicon fa fa-search"></i>
        <div class="searchhelper">查询</div>
    </div>
    <!-- /Page Sidebar Header -->
    <!-- 菜单列表start -->
    <ul class="nav sidebar-menu">
        <li>
            <a href="{{route('admin.index.index')}}">
                <i class="menu-icon glyphicon glyphicon-home"></i>
                <span class="menu-text"> 后台首页 </span>
            </a>
        </li>

        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-desktop"></i>
                <span class="menu-text"> Elements </span>

                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="elements.html">
                        <span class="menu-text">Basic Elements</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="menu-dropdown">
                                    <span class="menu-text">
                                        Icons
                                    </span>
                        <i class="menu-expand"></i>
                    </a>

                    <ul class="submenu">
                        <li>
                            <a href="font-awesome.html">
                                <i class="menu-icon fa fa-rocket"></i>
                                <span class="menu-text">Font Awesome</span>
                            </a>
                        </li>
                        <li>
                            <a href="glyph-icons.html">
                                <i class="menu-icon glyphicon glyphicon-stats"></i>
                                <span class="menu-text">Glyph Icons</span>
                            </a>
                        </li>
                        <li>
                            <a href="typicon.html">
                                <i class="menu-icon typcn typcn-location-outline"></i>
                                <span class="menu-text"> Typicons</span>
                            </a>
                        </li>
                        <li>
                            <a href="weather-icons.html">
                                <i class="menu-icon wi wi-hot"></i>
                                <span class="menu-text">Weather Icons</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="tabs.html">
                        <span class="menu-text">Tabs & Accordions</span>
                    </a>
                </li>
                <li>
                    <a href="alerts.html">
                        <span class="menu-text">Alerts & Tooltips</span>
                    </a>
                </li>
                <li>
                    <a href="modals.html">
                        <span class="menu-text">Modals & Wells</span>
                    </a>
                </li>
                <li>
                    <a href="buttons.html">
                        <span class="menu-text">Buttons</span>
                    </a>
                </li>
                <li>
                    <a href="nestable-list.html">
                        <span class="menu-text"> Nestable List</span>
                    </a>
                </li>
                <li>
                    <a href="treeview.html">
                        <span class="menu-text">Treeview</span>
                    </a>
                </li>
            </ul>
        </li>

        <!--权限start-->
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-table"></i>
                <span class="menu-text"> 权限管理 </span>

                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="/admin/role">
                        <span class="menu-text">角色列表</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/permission">
                        <span class="menu-text">权限列表</span>
                    </a>
                </li>
            </ul>
        </li>
        <!--权限end-->
    </ul>
    <!-- 菜单列表end -->
</div>
<!-- /Page Sidebar -->
