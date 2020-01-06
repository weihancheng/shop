<!DOCTYPE html>
<html>
<!-- Head -->
<head>
    <meta charset="utf-8" />
    <title>后台</title>

    <meta name="description" content="widgets" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}" type="image/x-icon">

    <!--Basic Styles-->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link id="bootstrap-rtl-link" href="" rel="stylesheet" />
    <link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/weather-icons.min.css')}}" rel="stylesheet" />

    <!--Fonts-->
{{--    <link href="http://www.fonts.useso.com/css@family=open+sans_3a300italic,400italic,600italic,700italic,400,600,700,300.css" rel="stylesheet" type="text/css">--}}

    <!--Beyond styles-->
    <link href="{{asset('assets/css/beyond.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/demo.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/typicons.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/animate.min.css')}}" rel="stylesheet" />
    <link id="skin-link" href="" rel="stylesheet" type="text/css" />

    <!--Skin Script: Place this script in head to load scripts for skins and rtl support-->
    <script src="{{asset('assets/js/skins.min.js')}}"></script>
</head>
<!-- /Head -->
<!-- Body -->
<body>
<!-- Loading Container -->
<div class="loading-container">
    <div class="loader"></div>
</div>
<!--  /Loading Container -->
<!-- 页面头start -->
@include('layouts.header')
<!-- 页面头end -->

<div class="main-container container-fluid">
    <!-- Chat Bar -->
    @include('layouts.chat')
    <!-- /Chat Bar -->
    <!-- 内容结束 -->
    <div class="page-container">
        @include('layouts.menu')
        @yield('content')
    </div>
    <!-- 内容开始 -->
</div>

<!--Basic Scripts-->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/slimscroll/jquery.slimscroll.min.js')}}"></script>
<!--Beyond Scripts-->
<script src="{{asset('assets/js/beyond.min.js')}}"></script>
<!--Page Related Scripts-->
</body>
<!--  /Body -->
</html>
