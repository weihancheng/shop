@extends('layouts.main')

@section('content')

    <!-- Chat Bar -->
    <div id="chatbar" class="page-chatbar">
        <div class="chatbar-contacts">
            <div class="contacts-search">
                <input type="text" class="searchinput" placeholder="Search Contacts" />
                <i class="searchicon fa fa-search"></i>
                <div class="searchhelper">Search Your Contacts and Chat History</div>
            </div>
            <ul class="contacts-list">
                <li class="contact">
                    <div class="contact-avatar">
                        <img src="{{asset('assets/img/avatars/divyia.jpg')}}" />
                    </div>
                    <div class="contact-info">
                        <div class="contact-name">Divyia Philips</div>
                        <div class="contact-status">
                            <div class="online"></div>
                            <div class="status">online</div>
                        </div>
                        <div class="last-chat-time">
                            last week
                        </div>
                    </div>
                </li>
                <li class="contact">
                    <div class="contact-avatar">
                        <img src="{{asset('assets/img/avatars/nicolai-larson.jpg')}}" />
                    </div>
                    <div class="contact-info">
                        <div class="contact-name">Adam Johnson</div>
                        <div class="contact-status">
                            <div class="offline"></div>
                            <div class="status">left 4 mins ago</div>
                        </div>
                        <div class="last-chat-time">
                            today
                        </div>
                    </div>
                </li>
                <li class="contact">
                    <div class="contact-avatar">
                        <img src="{{asset('assets/img/avatars/john-smith.jpg')}}" />
                    </div>
                    <div class="contact-info">
                        <div class="contact-name">John Smith</div>
                        <div class="contact-status">
                            <div class="online"></div>
                            <div class="status">online</div>
                        </div>
                        <div class="last-chat-time">
                            1:57 am
                        </div>
                    </div>
                </li>
                <li class="contact">
                    <div class="contact-avatar">
                        <img src="{{asset('assets/img/avatars/osvaldus-valutis.jpg')}}" />
                    </div>
                    <div class="contact-info">
                        <div class="contact-name">Osvaldus Valutis</div>
                        <div class="contact-status">
                            <div class="online"></div>
                            <div class="status">online</div>
                        </div>
                        <div class="last-chat-time">
                            today
                        </div>
                    </div>
                </li>
                <li class="contact">
                    <div class="contact-avatar">
                        <img src="{{asset('assets/img/avatars/javi-jimenez.jpg')}}" />
                    </div>
                    <div class="contact-info">
                        <div class="contact-name">Javi Jimenez</div>
                        <div class="contact-status">
                            <div class="online"></div>
                            <div class="status">online</div>
                        </div>
                        <div class="last-chat-time">
                            today
                        </div>
                    </div>
                </li>
                <li class="contact">
                    <div class="contact-avatar">
                        <img src="{{asset('assets/img/avatars/stephanie-walter.jpg')}}" />
                    </div>
                    <div class="contact-info">
                        <div class="contact-name">Stephanie Walter</div>
                        <div class="contact-status">
                            <div class="online"></div>
                            <div class="status">online</div>
                        </div>
                        <div class="last-chat-time">
                            yesterday
                        </div>
                    </div>
                </li>
                <li class="contact">
                    <div class="contact-avatar">
                        <img src="{{asset('assets/img/avatars/sergey-azovskiy.jpg')}}" />
                    </div>
                    <div class="contact-info">
                        <div class="contact-name">Sergey Azovskiy</div>
                        <div class="contact-status">
                            <div class="offline"></div>
                            <div class="status">offline since oct 24</div>
                        </div>
                        <div class="last-chat-time">
                            22 oct
                        </div>
                    </div>
                </li>
                <li class="contact">
                    <div class="contact-avatar">
                        <img src="{{asset('assets/img/avatars/lee-munroe.jpg')}}" />
                    </div>
                    <div class="contact-info">
                        <div class="contact-name">Lee Munroe</div>
                        <div class="contact-status">
                            <div class="online"></div>
                            <div class="status">online</div>
                        </div>
                        <div class="last-chat-time">
                            today
                        </div>
                    </div>
                </li>
                <li class="contact">
                    <div class="contact-avatar">
                        <img src="{{asset('assets/img/avatars/divyia.jpg')}}" />
                    </div>
                    <div class="contact-info">
                        <div class="contact-name">Divyia Philips</div>
                        <div class="contact-status">
                            <div class="online"></div>
                            <div class="status">online</div>
                        </div>
                        <div class="last-chat-time">
                            last week
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="chatbar-messages" style="display: none;">
            <div class="messages-contact">
                <div class="contact-avatar">
                    <img src="{{asset('assets/img/avatars/divyia.png')}}" />
                </div>
                <div class="contact-info">
                    <div class="contact-name">Divyia Philips</div>
                    <div class="contact-status">
                        <div class="online"></div>
                        <div class="status">online</div>
                    </div>
                    <div class="last-chat-time">
                        a moment ago
                    </div>
                    <div class="back">
                        <i class="fa fa-arrow-circle-left"></i>
                    </div>
                </div>
            </div>
            <ul class="messages-list">
                <li class="message">
                    <div class="message-info">
                        <div class="bullet"></div>
                        <div class="contact-name">Me</div>
                        <div class="message-time">10:14 AM, Today</div>
                    </div>
                    <div class="message-body">
                        Hi, Hope all is good. Are we meeting today?
                    </div>
                </li>
                <li class="message reply">
                    <div class="message-info">
                        <div class="bullet"></div>
                        <div class="contact-name">Divyia</div>
                        <div class="message-time">10:15 AM, Today</div>
                    </div>
                    <div class="message-body">
                        Hi, Hope all is good. Are we meeting today?
                    </div>
                </li>
                <li class="message">
                    <div class="message-info">
                        <div class="bullet"></div>
                        <div class="contact-name">Me</div>
                        <div class="message-time">10:14 AM, Today</div>
                    </div>
                    <div class="message-body">
                        Hi, Hope all is good. Are we meeting today?
                    </div>
                </li>
                <li class="message reply">
                    <div class="message-info">
                        <div class="bullet"></div>
                        <div class="contact-name">Divyia</div>
                        <div class="message-time">10:15 AM, Today</div>
                    </div>
                    <div class="message-body">
                        Hi, Hope all is good. Are we meeting today?
                    </div>
                </li>
                <li class="message">
                    <div class="message-info">
                        <div class="bullet"></div>
                        <div class="contact-name">Me</div>
                        <div class="message-time">10:14 AM, Today</div>
                    </div>
                    <div class="message-body">
                        Hi, Hope all is good. Are we meeting today?
                    </div>
                </li>
                <li class="message reply">
                    <div class="message-info">
                        <div class="bullet"></div>
                        <div class="contact-name">Divyia</div>
                        <div class="message-time">10:15 AM, Today</div>
                    </div>
                    <div class="message-body">
                        Hi, Hope all is good. Are we meeting today?
                    </div>
                </li>
            </ul>
            <div class="send-message">
                        <span class="input-icon icon-right">
                            <textarea rows="4" class="form-control" placeholder="Type your message"></textarea>
                            <i class="fa fa-camera themeprimary"></i>
                        </span>
            </div>
        </div>
    </div>
    <!-- /Chat Bar -->
    <!-- Page Content -->
    <div class="page-content">
        <!-- Page Breadcrumb -->
        <div class="page-breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="#">Home</a>
                </li>
                <li class="active">Wdigets</li>
            </ul>
        </div>
        <!-- /Page Breadcrumb -->
        <!-- Page Header -->
        <div class="page-header position-relative">
            <div class="header-title">
                <h1>
                    Widgets
                    <small>
                        <i class="fa fa-angle-right"></i>
                        flexible containers
                    </small>
                </h1>
            </div>
            <!--Header Buttons-->
            <div class="header-buttons">
                <a class="sidebar-toggler" href="#">
                    <i class="fa fa-arrows-h"></i>
                </a>
                <a class="refresh" id="refresh-toggler" href="default.htm">
                    <i class="glyphicon glyphicon-refresh"></i>
                </a>
                <a class="fullscreen" id="fullscreen-toggler" href="#">
                    <i class="glyphicon glyphicon-fullscreen"></i>
                </a>
            </div>
            <!--Header Buttons End-->
        </div>
        <!-- /Page Header -->
        <!-- Page Body -->
        <div class="page-body">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            <div class="widget">
                                <div class="widget-header">
                                    <i class="widget-icon fa fa-check"></i>
                                    <span class="widget-caption">Default Widget</span>
                                    <div class="widget-buttons">
                                        <a href="#" data-toggle="config">
                                            <i class="fa fa-cog"></i>
                                        </a>
                                        <a href="#" data-toggle="maximize">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                        <a href="#" data-toggle="collapse">
                                            <i class="fa fa-minus"></i>
                                        </a>
                                        <a href="#" data-toggle="dispose">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </div><!--Widget Buttons-->
                                </div><!--Widget Header-->
                                <div class="widget-body">
                                    <p>
                                        Without any change in default mark-up.
                                    </p>
                                </div><!--Widget Body-->
                            </div><!--Widget-->
                        </div>
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            <div class="widget">
                                <div class="widget-header">
                                    <span class="widget-caption">Colored Buttons</span>
                                    <div class="widget-buttons">
                                        <a href="#" data-toggle="config">
                                            <i class="fa fa-cog yellow"></i>
                                        </a>
                                        <a href="#" data-toggle="maximize">
                                            <i class="fa fa-expand pink"></i>
                                        </a>
                                        <a href="#" data-toggle="collapse">
                                            <i class="fa fa-minus blue"></i>
                                        </a>
                                        <a href="#" data-toggle="dispose">
                                            <i class="fa fa-times darkorange"></i>
                                        </a>
                                    </div><!--Widget Buttons-->
                                </div><!--Widget Header-->
                                <div class="widget-body">

                                    <p>
                                        Changing buttons look.
                                    </p>

                                </div><!--Widget Body-->
                            </div><!--Widget-->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12">
                            <div class="widget collapsed">
                                <div class="widget-header">
                                    <i class="widget-icon fa fa-arrows-v blue"></i>
                                    <span class="widget-caption">Collapsed Header</span>
                                    <div class="widget-buttons">
                                        <a href="#" data-toggle="collapse">
                                            <i class="fa fa-plus blue"></i>
                                        </a>
                                        <a href="#" data-toggle="dispose">
                                            <i class="fa fa-times darkorange"></i>
                                        </a>
                                    </div><!--Widget Buttons-->
                                </div><!--Widget Header-->
                                <div class="widget-body">

                                    <p>
                                        This Widget is collapsed by default.
                                    </p>

                                </div><!--Widget Body-->
                            </div><!--Widget-->
                        </div>

                    </div>
                    <h5 class="row-title before-blue">Colored Widgets</h5>
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            <div class="widget">
                                <div class="widget-header bg-palegreen">
                                    <i class="widget-icon fa fa-arrow-down"></i>
                                    <span class="widget-caption">Colored Header</span>
                                    <div class="widget-buttons">
                                        <a href="#" data-toggle="config">
                                            <i class="fa fa-cog"></i>
                                        </a>
                                        <a href="#" data-toggle="maximize">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                        <a href="#" data-toggle="collapse">
                                            <i class="fa fa-minus"></i>
                                        </a>
                                        <a href="#" data-toggle="dispose">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </div><!--Widget Buttons-->
                                </div><!--Widget Header-->
                                <div class="widget-body">

                                    <code>
                                        class="widget-header bg-palegreen"
                                    </code>

                                </div><!--Widget Body-->
                            </div><!--Widget-->
                        </div>
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            <div class="widget">
                                <div class="widget-header bg-lightred">
                                    <i class="widget-icon fa fa-arrow-up"></i>
                                    <span class="widget-caption">Colored Header</span>
                                    <div class="widget-buttons">
                                        <a href="#" data-toggle="config">
                                            <i class="fa fa-cog"></i>
                                        </a>
                                        <a href="#" data-toggle="maximize">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                        <a href="#" data-toggle="collapse">
                                            <i class="fa fa-minus"></i>
                                        </a>
                                        <a href="#" data-toggle="dispose">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </div><!--Widget Buttons-->
                                </div><!--Widget Header-->
                                <div class="widget-body">
                                    <code>
                                        class="widget-header bg-lightred"
                                    </code>
                                </div><!--Widget Body-->
                            </div><!--Widget-->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            <div class="widget">
                                <div class="widget-header bg-blue">
                                    <i class="widget-icon fa fa-arrow-left"></i>
                                    <span class="widget-caption">Colored Header</span>
                                    <div class="widget-buttons">
                                        <a href="#" data-toggle="config">
                                            <i class="fa fa-cog"></i>
                                        </a>
                                        <a href="#" data-toggle="maximize">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                        <a href="#" data-toggle="collapse">
                                            <i class="fa fa-minus"></i>
                                        </a>
                                        <a href="#" data-toggle="dispose">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </div><!--Widget Buttons-->
                                </div><!--Widget Header-->
                                <div class="widget-body">
                                    <code>
                                        class="widget-header bg-blue"
                                    </code>
                                </div><!--Widget Body-->
                            </div><!--Widget-->
                        </div>
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            <div class="widget">
                                <div class="widget-header bg-blueberry">
                                    <i class="widget-icon fa fa-arrow-right"></i>
                                    <span class="widget-caption">Colored Header</span>
                                    <div class="widget-buttons">
                                        <a href="#" data-toggle="config">
                                            <i class="fa fa-cog"></i>
                                        </a>
                                        <a href="#" data-toggle="maximize">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                        <a href="#" data-toggle="collapse">
                                            <i class="fa fa-minus"></i>
                                        </a>
                                        <a href="#" data-toggle="dispose">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </div><!--Widget Buttons-->
                                </div><!--Widget Header-->
                                <div class="widget-body">
                                    <code>
                                        class="widget-header bg-blueberry"
                                    </code>
                                </div><!--Widget Body-->
                            </div><!--Widget-->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            <div class="widget">
                                <div class="widget-header bg-magenta">
                                    <span class="widget-caption">Colored Header and Body</span>
                                    <div class="widget-buttons">
                                        <a href="#" data-toggle="config">
                                            <i class="fa fa-cog"></i>
                                        </a>
                                        <a href="#" data-toggle="maximize">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                        <a href="#" data-toggle="collapse">
                                            <i class="fa fa-minus"></i>
                                        </a>
                                        <a href="#" data-toggle="dispose">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </div><!--Widget Buttons-->
                                </div><!--Widget Header-->
                                <div class="widget-body bg-magenta">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div><!--Widget Body-->
                            </div><!--Widget-->
                        </div>
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            <div class="widget">
                                <div class="widget-header bg-gold">
                                    <span class="widget-caption">Colored Header and Body</span>
                                    <div class="widget-buttons">
                                        <a href="#" data-toggle="config">
                                            <i class="fa fa-cog"></i>
                                        </a>
                                        <a href="#" data-toggle="maximize">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                        <a href="#" data-toggle="collapse">
                                            <i class="fa fa-minus"></i>
                                        </a>
                                        <a href="#" data-toggle="dispose">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </div><!--Widget Buttons-->
                                </div><!--Widget Header-->
                                <div class="widget-body bg-lightred">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div><!--Widget Body-->
                            </div><!--Widget-->
                        </div>
                    </div>
                    <h5 class="row-title before-darkorange">Bordered Widgets</h5>
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            <div class="widget">
                                <div class="widget-header bordered-bottom bordered-sky">
                                    <span class="widget-caption">Bordered Header on Bottom</span>
                                </div><!--Widget Header-->
                                <div class="widget-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div><!--Widget Body-->
                            </div><!--Widget-->
                        </div>
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            <div class="widget">
                                <div class="widget-header bordered-top bordered-pink">
                                    <span class="widget-caption">Bordered Header on Top</span>
                                </div><!--Widget Header-->
                                <div class="widget-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div><!--Widget Body-->
                            </div><!--Widget-->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            <div class="widget">
                                <div class="widget-header bordered-left bordered-blueberry">
                                    <span class="widget-caption">Bordered Widget on left</span>
                                </div><!--Widget Header-->
                                <div class="widget-body bordered-left bordered-blue">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div><!--Widget Body-->
                            </div><!--Widget-->
                        </div>
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            <div class="widget">
                                <div class="widget-header bordered-bottom bordered-white bg-sky">
                                    <span class="widget-caption">Bordered and Colored Widget</span>
                                    <div class="widget-buttons">
                                        <a href="#" data-toggle="maximize">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                        <a href="#" data-toggle="collapse">
                                            <i class="fa fa-minus"></i>
                                        </a>
                                    </div><!--Widget Buttons-->
                                </div><!--Widget Header-->
                                <div class="widget-body bg-sky bordered-bottom bordered-white">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div><!--Widget Body-->
                            </div><!--Widget-->
                        </div>
                    </div>
                    <h5 class="row-title before-pink">Widget Behavior</h5>
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            <div class="widget flat">
                                <div class="widget-header">
                                    <span class="widget-caption">Flat Widget</span>
                                    <div class="widget-buttons">
                                        <a href="#" data-toggle="maximize">
                                            <i class="fa fa-expand warning"></i>
                                        </a>
                                        <a href="#" data-toggle="collapse">
                                            <i class="fa fa-minus red"></i>
                                        </a>
                                    </div><!--Widget Buttons-->
                                </div><!--Widget Header-->
                                <div class="widget-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div><!--Widget Body-->
                            </div><!--Widget-->
                        </div>
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            <div class="widget flat">
                                <div class="widget-header bordered-bottom bordered-platinum">
                                    <span class="widget-caption">Flat Widget with Border</span>
                                    <div class="widget-buttons">
                                        <a href="#" data-toggle="maximize">
                                            <i class="fa fa-expand sky"></i>
                                        </a>
                                        <a href="#" data-toggle="collapse">
                                            <i class="fa fa-minus red"></i>
                                        </a>
                                    </div><!--Widget Buttons-->
                                </div><!--Widget Header-->
                                <div class="widget-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div><!--Widget Body-->
                            </div><!--Widget-->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            <div class="widget radius-bordered">
                                <div class="widget-header">
                                    <span class="widget-caption">Radius-Bordered Widget</span>
                                    <div class="widget-buttons">
                                        <a href="#" data-toggle="maximize">
                                            <i class="fa fa-expand blue"></i>
                                        </a>
                                        <a href="#" data-toggle="collapse">
                                            <i class="fa fa-minus danger"></i>
                                        </a>
                                    </div><!--Widget Buttons-->
                                </div><!--Widget Header-->
                                <div class="widget-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div><!--Widget Body-->
                            </div><!--Widget-->
                        </div>
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            <div class="widget transparent">
                                <div class="widget-header">
                                    <span class="widget-caption">Transparent Widget</span>
                                    <div class="widget-buttons">
                                        <a href="#" data-toggle="collapse">
                                            <i class="fa fa-minus blue "></i>
                                        </a>
                                        <a href="#" data-toggle="dispose">
                                            <i class="fa fa-times danger"></i>
                                        </a>
                                    </div><!--Widget Buttons-->
                                </div><!--Widget Header-->
                                <div class="widget-body">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </p>
                                </div><!--Widget Body-->
                            </div><!--Widget-->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            <div class="widget flat radius-bordered">
                                <div class="widget-header lined">
                                    <span class="widget-caption">Lined Widget</span>
                                    <div class="widget-buttons">
                                        <a href="#" data-toggle="maximize">
                                            <i class="fa fa-expand warning"></i>
                                        </a>
                                        <a href="#" data-toggle="collapse">
                                            <i class="fa fa-minus blue"></i>
                                        </a>
                                        <a href="#" data-toggle="dispose">
                                            <i class="fa fa-times danger"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="widget-body">

                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="widget">
                            <div class="widget-header separated">
                                <span class="widget-caption">Separated Header and Body</span>
                                <div class="widget-buttons">
                                    <a href="#" data-toggle="collapse">
                                        <i class="fa fa-minus blue "></i>
                                    </a>
                                    <a href="#" data-toggle="dispose">
                                        <i class="fa fa-times danger"></i>
                                    </a>
                                </div><!--Widget Buttons-->
                            </div><!--Widget Header-->
                            <div class="widget-body">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                            </div>
                        </div><!--Widget-->
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            <div class="widget">
                                <div class="widget-header ">
                                    <span class="widget-caption">Compact Widget Buttons</span>
                                    <div class="widget-buttons compact">
                                        <a href="#" data-toggle="config">
                                            <i class="fa fa-cog"></i>
                                        </a>
                                        <a href="#" data-toggle="maximize">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                        <a href="#" data-toggle="collapse">
                                            <i class="fa fa-minus"></i>
                                        </a>
                                        <a href="#" data-toggle="dispose">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="widget-body">

                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            <div class="widget no-header ">
                                <div class="widget-body colored-purple">

                                    <span class="widget-caption">Widget Without Header</span>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <h5 class="row-title before-sky">Elements in Widget Header</h5>
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            <div class="widget">
                                <div class="widget-header">
                                    <span class="widget-caption">Widget with Dropdown</span>
                                    <div class="widget-buttons">
                                        <div class="btn-group">
                                            <a class="btn btn-blue btn-sm " href="javascript:void(0);">Actions</a>
                                            <a class="btn btn-blue btn-sm dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);"><i class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown-menu dropdown-blue pull-left">
                                                <li>
                                                    <a href="javascript:void(0);">Action</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Another action</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Something else here</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="javascript:void(0);">Separated link</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="widget-body">

                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            <div class="widget">
                                <div class="widget-header">
                                    <span class="widget-caption">Widget with ProgressBar</span>
                                    <div class="widget-buttons toolbar-bordered ">
                                        <div class="progress" style="width:150px;">
                                            <div class="progress-bar progress-bar-palegreen" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                                                        <span class="sr-only">
                                                            20% Complete
                                                        </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-body">

                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            <div class="widget flat radius-bordered">
                                <div class="widget-header bg-magenta bordered-bottom bordered-warning">
                                    <span class="widget-caption">Colored Widget with ProgressBar</span>
                                    <div class="widget-buttons">
                                        <div class="progress progress-striped" style="width:150px;">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                        <span class="sr-only">
                                                            20% Complete (success)
                                                        </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-body">

                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            <div class="widget">
                                <div class="widget-header bg-palegreen">
                                    <span class="widget-caption">Colored Widget with Bordered ProgressBar</span>
                                    <div class="widget-buttons">
                                        <div class="progress progress-bordered progress-striped active" style="width:150px;">
                                            <div class="progress-bar progress-bar-darkorange" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                        <span class="sr-only">
                                                            20% Complete (success)
                                                        </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-body">

                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            <div class="widget">
                                <div class="widget-header">
                                    <span class="widget-caption">Widget with ON/OFF Switch</span>
                                    <div class="widget-buttons buttons-bordered">
                                        <label>
                                            <input class="checkbox-slider toggle colored-blue" type="checkbox">
                                            <span class="text"></span>
                                        </label>
                                    </div>
                                    <div class="widget-buttons buttons-bordered">
                                        <label>
                                            <input class="checkbox-slider colored-darkorange" type="checkbox">
                                            <span class="text"></span>
                                        </label>
                                    </div>
                                    <div class="widget-buttons buttons-bordered">
                                        <label>
                                            <input class="checkbox-slider slider-icon colored-success" type="checkbox">
                                            <span class="text"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="widget-body">

                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            <div class="widget">
                                <div class="widget-header">
                                    <span class="widget-caption">Widget with Badges and Labels</span>
                                    <div class="widget-buttons">
                                                <span class="badge badge-info graded">
                                                    7
                                                </span>
                                    </div>
                                    <div class="widget-buttons buttons-bordered">
                                                <span class="label label-info">
                                                    info
                                                </span>
                                    </div>
                                </div>
                                <div class="widget-body">

                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            <div class="widget radius-bordered">
                                <div class="widget-header">
                                    <span class="widget-caption">Widget with Input</span>
                                    <div class="widget-buttons">
                                                <span class="input-icon">
                                                    <input type="text" class="form-control input-xs" id="glyphicon-search" placeholder="Search">
                                                    <i class="glyphicon glyphicon-search blue"></i>
                                                </span>
                                    </div>
                                </div>
                                <div class="widget-body">

                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            <div class="widget radius-bordered">
                                <div class="widget-header">
                                    <span class="widget-caption">Widget with Paging</span>
                                    <div class="widget-buttons ">
                                        <ul class="pagination pagination-sm">
                                            <li class="disabled"><a href="#">«</a></li>
                                            <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">»</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="widget-body">

                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            <div class="widget radius-bordered">
                                <div class="widget-header">
                                    <span class="widget-caption">Widget with Small Buttons</span>
                                    <div class="widget-buttons buttons-bordered">
                                        <button class="btn btn-default btn-sm">Cancel</button>
                                    </div>
                                    <div class="widget-buttons buttons-bordered">
                                        <button class="btn btn-default btn-sm">Save</button>
                                    </div>
                                </div>
                                <div class="widget-body">

                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            <div class="widget radius-bordered">
                                <div class="widget-header">
                                    <span class="widget-caption">Widget with Mini Buttons</span>
                                    <div class="widget-buttons buttons-bordered">
                                        <button class="btn btn-darkorange btn-xs">Cancel</button>
                                    </div>
                                    <div class="widget-buttons buttons-bordered">
                                        <button class="btn btn-blue btn-xs">Save</button>
                                    </div>
                                </div>
                                <div class="widget-body">

                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <h5 class="row-title before-warning">Widget Sizes</h5>
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            <div class="widget">
                                <div class="widget-header header-small">
                                    <span class="widget-caption">Small Widget Header</span>

                                    <div class="widget-buttons">
                                        <a href="#" data-toggle="config">
                                            <i class="fa fa-cog yellow"></i>
                                        </a>
                                        <a href="#" data-toggle="maximize">
                                            <i class="fa fa-expand pink"></i>
                                        </a>
                                        <a href="#" data-toggle="collapse">
                                            <i class="fa fa-minus blue"></i>
                                        </a>
                                        <a href="#" data-toggle="dispose">
                                            <i class="fa fa-times darkorange"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="widget-body">

                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </p>

                                </div>
                            </div>

                        </div>
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            <div class="widget">
                                <div class="widget-header header-large">
                                    <span class="widget-caption">Large Widget</span>
                                    <div class="widget-buttons">
                                        <a href="#" data-toggle="config">
                                            <i class="fa fa-cog yellow"></i>
                                        </a>
                                        <a href="#" data-toggle="maximize">
                                            <i class="fa fa-expand pink"></i>
                                        </a>
                                        <a href="#" data-toggle="collapse">
                                            <i class="fa fa-minus blue"></i>
                                        </a>
                                        <a href="#" data-toggle="dispose">
                                            <i class="fa fa-times darkorange"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="widget-body">

                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Body -->
    </div>
    <!-- /Page Content -->
@endsection
