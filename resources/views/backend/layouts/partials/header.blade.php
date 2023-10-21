<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="csrf-token" content="x7DJ4JIy4De2Y9GLcC5C1S4j01UPDZtGVkzPgNs6">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{asset('backend/assets/logo.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('backend/assets/logo.png')}}" type="image/x-icon">
    <title>Dashbaord</title>
    <!--Google font-->
    <link href="{{asset('backend/assets/css')}}" rel="stylesheet">
    <link href="{{asset('backend/assets/css(1)')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/fontawesome.css')}}">
    <!-- ico-font -->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/icofont.css')}}">
    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/themify.css')}}">
    <!-- Flag icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/flag-icon.css')}}">
    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/bootstrap.css')}}">
    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/style.css')}}">
    <!-- Responsive css -->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/responsive.css')}}">
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/pace.css')}}"> --}}
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/custom.css')}}"> --}}
    {{-- <link rel="stylesheet" href="{{asset('backend/assets/app.scss')}}"> --}}
    <link rel="stylesheet" href="{{asset('backend/assets/backend.css')}}">
    {{--
    <link rel="stylesheet" href="{{asset('backend/assets/style.css')}}"> --}}
</head>

<body main-theme-layout="main-theme-layout-4"
    class="pace-done pace-done pace-done pace-done pace-done pace-done pace-done pace-done pace-done pace-done pace-done pace-done pace-done pace-done pace-done pace-done pace-done pace-done pace-done pace-done pace-done pace-done pace-done pace-done pace-done "
    cz-shortcut-listen="true">
    <div class="pace pace-inactive">
        <div class="pace-progress" data-progress-text="100%" data-progress="99"
            style="transform: translate3d(100%, 0px, 0px);">
            <div class="pace-progress-inner"></div>
        </div>
        <div class="pace-activity"></div>
    </div>



    <!--page-wrapper Start-->
    <div class="page-wrapper" id="app" data-v-app="">
        <div>
            <div class="page-main-header">
                <!--Page Header Start-->
                <div class="main-header-left" semilight-bg-color="bg-default-light-colo">
                    <div class="logo-wrapper">
                        <a href="http://127.0.0.1:8000/dashboard#/admin" id="logo" class="d-flex align-items-end gap-1">
                            <img src="{{asset('backend/assets/logo-light.png')}}" class="image-light" alt="">
                            {{-- <span class="text-white h4">Dashboard</span> --}}
                        </a>
                    </div>
                </div>
                <div class="main-header-right row" header-bg-color="bg-default-light-colo">
                    <div class="mobile-sidebar col-1 ps-0">
                        <div class="text-start switch-sm"><label class="switch"><input type="checkbox"
                                    id="sidebar-toggle" checked="checked"><span class="switch-state"></span></label>
                        </div>
                    </div>
                    <div class="nav-right col">
                        <ul class="nav-menus">
                            <li class="onhover-dropdown">
                                <div class="d-flex align-items-center"><img
                                        class="align-self-center pull-right flex-shrink-0 me-2"
                                        src="{{asset('backend/assets/user.png')}}" alt="header-user">
                                    <div>
                                        <h6 class="m-0 txt-dark f-16"> My Account <i
                                                class="fa fa-angle-down pull-right ms-2"></i></h6>
                                    </div>
                                </div>
                                <ul class="profile-dropdown onhover-show-div p-20">
                                    <li><a href="http://127.0.0.1:8000/dashboard#"><i class="icon-user"></i> Edit
                                            Profile </a></li>
                                    <li><a href="http://127.0.0.1:8000/dashboard#"><i class="icon-power-off"></i> Logout
                                        </a></li>
                                </ul>
                            </li>
                        </ul>

                    </div>
                </div>
                <!--Page Header Ends-->
            </div>
            <!--Page Body Start-->
            <div class="page-body-wrapper">
                <div>
                    <div class="page-sidebar custom-scrollbar page-sidebar-open">
                        <!--Page Sidebar Start-->
                        <div class="sidebar-user text-center">
                            <div><img class="img-50 rounded-circle" src="{{asset('backend/assets/1.jpg')}}" alt="#">
                            </div>
                            <h6 class="mt-3 f-12">Admin</h6>
                        </div>
                        @include('backend.layouts.partials.sitebar')
                    </div>
