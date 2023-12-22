@extends('website.dashboards.layouts.dashboard')
@section('content')
<!-- Dashboard -->
<section class="user-dashboard">
    <div class="dashboard-outer">
        <div class="upper-title-box">
            <h3>Profile!</h3>
            <div class="text">Ready to jump back in?</div>
        </div>
        <div class="cardt card-body">
            <ul class="nav nav-pills nav-fill nav-cv-step">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('staff.profile.index')}}">
                        <i class="icon-information"></i> 1. Thông tin cá nhân </a>
                </li>
                <li class="nav-item"><a class="nav-link active" href="{{ route('staff.cv.index')}}"> <i
                            class="icon-briefcase"></i> 2. Danh sách hồ sơ </a></li>
                <li class="nav-item"><a class="nav-link" href="/Candidate/ResumeAdd?step=3"> <i
                            class="icon-calendar"></i> 3. Kinh nghiệm làm việc </a></li>
                <li class="nav-item"><a class="nav-link" href="/Candidate/ResumeAdd?step=4"> <i
                            class="icon-book-open"></i> 4. Học vấn </a></li>
                <li class="nav-item"><a class="nav-link" href="/Candidate/ResumeAdd?step=5"> <i class="icon-layers"></i>
                        5. Kỹ năng chuyên môn </a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- Ls widget -->
                <div class="ls-widget">
                    <div class="tabs-box">
                        <div class="widget-title">
                            <h4>Thông tin công việc</h4>
                            <a href="{{ route('staff.cv.index') }}" class="btn btn-secondary">Quay lại</a>
                        </div>

                        <div class="widget-content">
                            @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            @endif
                            @if (session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                            @endif
                            <form class="default-form" method="POST" action="{{ route('staff.cv.update', $item->id) }}">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <!-- Thông tin cá nhân -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Tên CV</label>
                                        <input type="text" name="cv_file" value="{{ $item->cv_file }}">
                                        @if ($errors->any())
                                        <p style="color:red">{{ $errors->first('cv_file') }}</p>
                                        @endif
                                    </div>
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Họ và tên</label>
                                        <input type="text" name="name" value="{{ $item->name }}">
                                        @if ($errors->any())
                                        <p style="color:red">{{ $errors->first('name') }}</p>
                                        @endif
                                    </div>

                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Email</label>
                                        <input type="text" name="email" value="{{ $item->email }}">
                                        @if ($errors->any())
                                        <p style="color:red">{{ $errors->first('email') }}</p>
                                        @endif
                                    </div>

                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Số điện thoại</label>
                                        <input type="text" name="phone" value="{{ $item->phone }}">
                                        @if ($errors->any())
                                        <p style="color:red">{{ $errors->first('phone') }}</p>
                                        @endif
                                    </div>

                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Ngày sinh</label>
                                        <input type="text" name="birthdate" value="{{ $item->birthdate }}">
                                        @if ($errors->any())
                                        <p style="color:red">{{ $errors->first('birthdate') }}</p>
                                        @endif
                                    </div>

                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Giới tính</label>
                                        <input type="text" name="gender" value="{{ $item->gender }}">
                                        @if ($errors->any())
                                        <p style="color:red">{{ $errors->first('gender') }}</p>
                                        @endif
                                    </div>

                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Thành phố</label>
                                        <input type="text" name="city" value="{{ $item->city }}">
                                        @if ($errors->any())
                                        <p style="color:red">{{ $errors->first('city') }}</p>
                                        @endif
                                    </div>

                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Địa chỉ</label>
                                        <input type="text" name="address" value="{{ $item->address }}">
                                        @if ($errors->any())
                                        <p style="color:red">{{ $errors->first('address') }}</p>
                                        @endif
                                    </div>

                                    <!-- Thông tin công việc -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Chức vụ mong muốn</label>
                                        <input type="text" name="desired_position"
                                            value="{{ $item->desired_position }}">
                                        @if ($errors->any())
                                        <p style="color:red">{{ $errors->first('desired_position') }}</p>
                                        @endif
                                    </div>

                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Cấp bậc mong muốn</label>
                                        <input type="text" name="desired_rank" value="{{ $item->desired_rank }}">
                                        @if ($errors->any())
                                        <p style="color:red">{{ $errors->first('desired_rank') }}</p>
                                        @endif
                                    </div>

                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Loại hình làm việc mong muốn</label>
                                        <input type="text" name="employment_type" value="{{ $item->employment_type }}">
                                        @if ($errors->any())
                                        <p style="color:red">{{ $errors->first('employment_type') }}</p>
                                        @endif
                                    </div>

                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Ngành nghề mong muốn</label>
                                        <input type="text" name="industry" value="{{ $item->industry }}">
                                        @if ($errors->any())
                                        <p style="color:red">{{ $errors->first('industry') }}</p>
                                        @endif
                                    </div>

                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Địa điểm làm việc mong muốn</label>
                                        <input type="text" name="desired_location"
                                            value="{{ $item->desired_location }}">
                                        @if ($errors->any())
                                        <p style="color:red">{{ $errors->first('desired_location') }}</p>
                                        @endif
                                    </div>

                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Mức lương mong muốn</label>
                                        <input type="text" name="desired_salary" value="{{ $item->desired_salary }}">
                                        @if ($errors->any())
                                        <p style="color:red">{{ $errors->first('desired_salary') }}</p>
                                        @endif
                                    </div>

                                    <div class="form-group col-lg-12 col-md-12">
                                        <label>Mục tiêu nghề nghiệp</label>
                                        <input type="text" name="career_objective"
                                            value="{{ $item->career_objective }}">
                                        @if ($errors->any())
                                        <p style="color:red">{{ $errors->first('career_objective') }}</p>
                                        @endif
                                    </div>

                                    <div class="form-group col-lg-6 col-md-12">
                                        <button class="theme-btn btn-style-one">Save</button>
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