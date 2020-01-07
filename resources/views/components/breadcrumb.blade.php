<div class="page-breadcrumbs">
    <ul class="breadcrumb">
        <li>
            <i class="fa fa-home"></i>
            <a href="/admin/index/index">后台首页</a>
        </li>
        @foreach($breadcrumb as $value)
            <li>
                <a href="{{$value['url'] ?: "#"}}">{{$value['name']}}</a>
            </li>
        @endforeach
    </ul>
</div>

