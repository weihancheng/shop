<!DOCTYPE html>
<html>
<!--Head-->
<head>
    <meta charset="utf-8" />
    <title>Login Page</title>

    <meta name="description" content="login page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}" type="image/x-icon">
    <!--Basic Styles-->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link id="bootstrap-rtl-link" href="" rel="stylesheet" />
    <link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet" />

    <!--Fonts-->
    <link href="../fonts.googleapis.com/css@family=open+sans_3a300italic,400italic,600italic,700italic,400,600,700,300.css" rel="stylesheet" type="text/css">

    <!--Beyond styles-->
    <link id="beyond-link" href="{{asset('assets/css/beyond.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/demo.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/animate.min.css')}}" rel="stylesheet" />
    <link id="skin-link" href="" rel="stylesheet" type="text/css" />

    <!--Skin Script: Place this script in head to load scripts for skins and rtl support-->
    <script src="assets/js/skins.min.js"></script>
</head>
<!--Head Ends-->
<!--Body-->
<body>
<div class="login-container animated fadeInDown">
    <div class="loginbox bg-white">
        <div class="loginbox-title">登录</div>
        <div class="loginbox-social">
            <div class="social-title ">Connect with Your Social Accounts</div>
            <div class="social-buttons">
                <a href="default.htm" class="button-facebook">
                    <i class="social-icon fa fa-facebook"></i>
                </a>
                <a href="default.htm" class="button-twitter">
                    <i class="social-icon fa fa-twitter"></i>
                </a>
                <a href="default.htm" class="button-google">
                    <i class="social-icon fa fa-google-plus"></i>
                </a>
            </div>
        </div>
        <div class="loginbox-or">
            <div class="or-line"></div>
            <div class="or">前台</div>
        </div>
        <div class="loginbox-textbox">
            <input type="text" class="form-control" placeholder="账号" />
        </div>
        <div class="loginbox-textbox">
            <input type="text" class="form-control" placeholder="密码" />
        </div>
        <div class="loginbox-forgot">
            <a href="default.htm">忘记 密码?</a>
        </div>
        <div class="loginbox-submit">
            <input type="button" class="btn btn-primary btn-block" value="登录">
        </div>
    </div>
</div>

<!--Basic Scripts-->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/slimscroll/jquery.slimscroll.min.js')}}"></script>

<!--Beyond Scripts-->
<script src="{{asset('assets/js/beyond.js')}}"></script>


</body>
<!--Body Ends-->
</html>
