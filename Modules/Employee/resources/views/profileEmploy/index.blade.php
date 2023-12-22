@extends('website.dashboards.layouts.dashboard')
@section('content')
<!-- Dashboard -->
<section class="user-dashboard">
    <div class="dashboard-outer">
        <div class="upper-title-box">
            <h3>Hồ Sơ Nhà Tuyển Dụng</h3>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <!-- Ls widget -->
                <div class="ls-widget">
                    <div class="tabs-box">
                        <div class="widget-title">
                            <h4>Thông Tin</h4>
                        </div>

                        <div class="widget-content">

                            {{-- <div class="uploading-outer">
                                <div class="uploadButton">
                                    <input class="uploadButton-input" type="file" name="attachments[]"
                                        accept="image/*, application/pdf" id="upload" multiple />
                                    <label class="uploadButton-button ripple-effect" for="upload">Tải lên logo công ty</label>
                                    <span class="uploadButton-file-name"></span>
                                </div>
                                <div class="text">ảnh .jpg & .png</div>
                            </div> --}}
                            <form class="default-form" action="{{route('employee.profile.update',$user->id)}}" method="post">
                                @if (session('error'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session('error') }}
                                </div>
                                @endif
                                @if (session('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('success') }}
                                </div>
                                @endif
                                @csrf
                                <div class="row">
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Tên Nhà Tuyển Dụng</label>
                                        <input type="text" name="name" value="{{$user->name}}" placeholder="Invisionn">
                                        @if ($errors->any())
                                        <p style="color:red">{{ $errors->first('name') }}</p>
                                        @endif
                                    </div>

                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Địa Chỉ Email Nhà Tuyển Dụng</label>
                                        <input type="text" name="email" value="{{$user->email}}" placeholder="Invisionn">
                                        @if ($errors->any())
                                        <p style="color:red">{{ $errors->first('email') }}</p>
                                        @endif
                                    </div>

                                    <!-- Input -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Tên Công Ty</label>
                                        <input type="text" name="company_name" value="{{$user_employee->company_name}}" placeholder="Invisionn">
                                        @if ($errors->any())
                                        <p style="color:red">{{ $errors->first('company_name') }}</p>
                                        @endif
                                    </div>
                                    
                                    <!-- Input -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Địa Chỉ Công Ty</label>
                                        <input type="text" name="company_address" value="{{$user_employee->company_address}}" placeholder="creativelayers">
                                        @if ($errors->any())
                                        <p style="color:red">{{ $errors->first('company_address') }}</p>
                                        @endif
                                    </div>

                                    <!-- Input -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Số Điện Thoại Công Ty</label>
                                        <input type="text" name="company_phone" value="{{$user_employee->company_phone}}" placeholder="0 123 456 7890">
                                        @if ($errors->any())
                                        <p style="color:red">{{ $errors->first('company_phone') }}</p>
                                        @endif
                                    </div>

                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Website Công ty</label>
                                        <input type="text" name="company_website" value="{{$user_employee->company_website}}" placeholder="Invisionn">
                                        @if ($errors->any())
                                        <p style="color:red">{{ $errors->first('company_website') }}</p>
                                        @endif
                                    </div>

                                    <div class="form-group col-lg-12 col-md-12">
                                        <label>Mật Khẩu</label>
                                        <input type="text" name="password" value="{{$user->password}}" placeholder="Invisionn">
                                        @if ($errors->any())
                                        <p style="color:red">{{ $errors->first('password') }}</p>
                                        @endif
                                    </div>

                                    <!-- About Company -->
                                    {{-- <div class="form-group col-lg-12 col-md-12">
                                        <label>About Company</label>
                                        <textarea
                                            placeholder="Spent several years working on sheep on Wall Street. Had moderate success investing in Yugo's on Wall Street. Managed a small team buying and selling Pogo sticks for farmers. Spent several years licensing licorice in West Palm Beach, FL. Developed several new methods for working it banjos in the aftermarket. Spent a weekend importing banjos in West Palm Beach, FL.In this position, the Software Engineer collaborates with Evention's Development team to continuously enhance our current software solutions as well as create new solutions to eliminate the back-office operations and management challenges present"></textarea>
                                    </div> --}}

                                    <!-- Input -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <button class="theme-btn btn-style-one">Lưu</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
<!-- End Dashboard -->
@endsection