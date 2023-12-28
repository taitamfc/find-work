@php
$currentRouteName = \Request::route()->getName();
@endphp
<!-- Main Header-->
<header class="main-header header-shaddow">
    <div class="container-fluid">
        <!-- Main box -->
        <div class="main-box">
            <!--Nav Outer -->
            <div class="nav-outer">
                <div class="logo-box">
                    <div class="logo"><a href="{{ route('home') }}"><img
                                src="{{ asset('website-assets/images/logo.svg')}}" alt="" title=""></a></div>
                </div>

                @include('website.includes.header.main-menu')
            </div>

            <div class="outer-box">

                <button class="menu-btn">
                    <span class="count">1</span>
                    <span class="icon la la-heart-o"></span>
                </button>

                <button class="menu-btn">
                    <span class="icon la la-bell"></span>
                </button>

                <!-- Dashboard Option -->
                <div class="dropdown dashboard-option">
                    <a class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset(Auth::user()->image_fm) }}" alt="avatar" class="thumb">
                        <span class="name">My Account</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="@if($currentRouteName == 'staff.home') active @endif"><a
                                href="{{ route('staff.home')}}"><i class="la la-box"></i>Bảng điều khiển</a></li>
                        <li
                            class="@if($currentRouteName == 'staff.profile.index' || $currentRouteName == 'staff.home1') active @endif">
                            <a href="{{ route('staff.profile.index')}}"> <i class="la la-user-alt"></i>Thông tin cá nhân
                            </a>
                        </li>
                        <li class="@if($currentRouteName == 'staff.cv.index') active @endif"><a
                                href="{{ route('staff.cv.index')}}"><i class="la la-box"></i>Danh sách hồ sơ</a></li>
                        <li class="@if($currentRouteName == 'staff.favorite') active @endif"><a
                                href="{{ route('staff.favorite')}}"><i class="la la-bookmark-o"></i>Việc làm đã lưu</a>
                        </li>
                        <li class="@if($currentRouteName == 'staff.job-applied') active @endif"><a
                                href="{{ route('staff.job-applied')}}"><i class="la la-briefcase"></i>Việc làm đã
                                nộp</a></li>
                        <li class="@if($currentRouteName == '#') active @endif"><a href="#"><i
                                    class="la la-file-invoice"></i>Công ty đang theo dõi</a></li>
                        <li class="@if($currentRouteName == 'auth.logout') active @endif"><a
                                href="{{ route('auth.logout')}}"><i class="la la-sign-out"></i>Đăng xuất</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Header -->
    <div class="mobile-header">
        <div class="logo"><a href="index.html"><img src="images/logo.svg" alt="" title=""></a></div>

        <!--Nav Box-->
        <div class="nav-outer clearfix">

            <div class="outer-box">
                <!-- Login/Register -->
                <div class="login-box">
                    <a href="login-popup.html" class="call-modal"><span class="icon-user"></span></a>
                </div>

                <button id="toggle-user-sidebar"><img src="{{ asset(Auth::user()->image_fm) }}" alt="avatar"
                        class="thumb"></button>
                <a href="#nav-mobile" class="mobile-nav-toggler navbar-trigger"><span
                        class="flaticon-menu-1"></span></a>
            </div>
        </div>

    </div>

    <!-- Mobile Nav -->
    <div id="nav-mobile"></div>
</header>
<!--End Main Header -->