<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <title>رمق</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta charset="utf-8" />
    <meta name="author" content="Amir Nageh" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#000000">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#000000">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#000000">

    <!-- Css Files -->
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link href="{{ asset('front/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('front/css/bootstrap-rtl.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('front/css/style-res.css') }}" rel="stylesheet" />
    <!-- <link href="{{ asset('front/css/style-en.css') }}" rel="stylesheet"> -->
    <!-- lavicons -->
    <link rel="shortcut icon" href="{{ asset('front/images/logo.png') }}" />
</head>

<body>
    <div id="loading">
        <div class="loading"></div>
    </div>

    <!-- Dark theme add class="dark" to wrapper -->
    <div class="wrapper col-xs-12">
        <header class="main-head col-xs-12">
            <div class="container">
                <div class="logo">
                    <a href="#">
                        <img src="{{ asset('front/images/logo.png') }}" alt="">
                    </a>
                </div>
                <div class="nav-manu">
                    <button type="button" class="cl-menu">
                        <i class="la la-close"></i>
                    </button>
                    <ul>
                        <li class="active">
                            <a href="#">الرئيسية</a>
                        </li>
                        <li>
                            <a href="#">من نحن</a>
                        </li>
                        <li>
                            <a href="#">متجر التصاميم</a>
                        </li>
                        <li>
                            <a href="#">تواصل معنا</a>
                        </li>
                    </ul>
                </div>
                <div class="h-extra">
                    <a href="#" data-toggle="modal" data-target="#search_pop">
                        <i class="la la-search"></i>
                    </a>
                    <ul class="user-area">
                        <li class="menu-item-has-children">
                            <a href="javascript:void(0)">
                                <i class="la la-user"></i>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">الملف الشخصي</a>
                                </li>
                                <li>
                                    <a href="#">تسجيل خروج</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <a href="javascript:void(0)" class="op-menu">
                        <i class="la la-bars"></i>
                    </a>
                </div>
            </div>
        </header>
        <div class="overlay-s"></div>
        <main class="main-content col-xs-12">
