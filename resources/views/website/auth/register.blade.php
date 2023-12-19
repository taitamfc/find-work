@extends('website.layouts.auth')
@section('content')
<!-- Login Form -->
<div class="login-form default-form">
    <div class="form-inner">
        <h3>Tạo tài khoản Superio miễn phí</h3>

        <!--Login Form-->
        <form method="post" action="add-parcel.html">
            <div class="form-group">
                <div class="btn-box row">
                    <div class="col-lg-6 col-md-12">
                        <a href="#" class="theme-btn btn-style-seven"><i class="la la-user"></i> Ứng viên </a>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <a href="#" class="theme-btn btn-style-four"><i class="la la-briefcase"></i> Nhà tuyển dụng </a>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Email </label>
                <input type="email" name="email" placeholder="Email" required>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input id="password-field" type="password" name="password" value="" placeholder="Password">
            </div>

            <div class="form-group">
                <button class="theme-btn btn-style-one " type="submit" name="Register">Đăng ký</button>
            </div>
        </form>

        <div class="bottom-box">
            <div class="text">Đã có tài khoản? <a href="{{ route('auth.login')}}">Đăng nhập</a></div>
            <div class="divider"><span>Hoặc</span></div>
            <div class="btn-box row">
                <div class="col-lg-6 col-md-12">
                    <a href="#" class="theme-btn social-btn-two facebook-btn"><i class="fab fa-facebook-f"></i> Đăng
                        nhập qua Facebook</a>
                </div>
                <div class="col-lg-6 col-md-12">
                    <a href="#" class="theme-btn social-btn-two google-btn"><i class="fab fa-google"></i> Đăng nhập qua
                        Gmail</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection