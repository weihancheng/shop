<div class="page-content">
    <!-- 面包屑导航start -->
    {{$breadcrumb ?? ''}}
    <!-- 面包屑导航end -->

    <!-- 主要内容start -->
    <div class="page-body">
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <div class="well with-header with-footer">
                    @include('layouts._validate')
                    @include('layouts._message')
                    <div class="header bg-warning">
                        {{$title ?? ''}}
                    </div>
                    <div class="buttons-preview">
                        {{$nav ?? ''}}
                    </div>
                    {{$body ?? ''}}
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Body -->
</div>
