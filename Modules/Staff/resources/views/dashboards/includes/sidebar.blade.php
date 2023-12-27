@php
$currentRouteName = \Request::route()->getName();
@endphp
<!-- Sidebar Backdrop -->
<div class="sidebar-backdrop"></div>

<!-- User Sidebar -->
<div class="user-sidebar">

    <div class="sidebar-inner">
        <ul class="navigation">
            <li class="@if($currentRouteName == 'staff.home') active @endif"><a href="{{ route('staff.home')}}"><i class="la la-box"></i>Bảng điều khiển</a></li>   
            <li class="@if($currentRouteName == 'staff.profile.index' || $currentRouteName == 'staff.home1') active @endif">
                <a href="{{ route('staff.profile.index')}}"> <i class="la la-user-alt"></i>Thông tin cá nhân
                </a>
            </li>
            <li class="@if($currentRouteName == 'staff.cv.index') active @endif"><a href="{{ route('staff.cv.index')}}"><i class="la la-box"></i>Danh sách hồ sơ</a></li>
            <li class="@if($currentRouteName == 'staff.job-favorite') active @endif"><a href="{{ route('staff.job-favorite')}}"><i class="la la-bookmark-o"></i>Việc làm đã lưu</a></li>
            <li class="@if($currentRouteName == 'staff.job-applied') active @endif"><a href="{{ route('staff.job-applied')}}"><i class="la la-briefcase"></i>Việc làm đã nộp</a></li>
            <li class="@if($currentRouteName == '#') active @endif"><a href="#"><i class="la la-file-invoice"></i>Công ty đang theo dõi</a></li>
            <li class="@if($currentRouteName == 'auth.logout') active @endif"><a href="{{ route('auth.logout')}}"><i class="la la-sign-out"></i>Đăng xuất</a></li>
        </ul>
    </div>
</div>
<!-- End User Sidebar -->