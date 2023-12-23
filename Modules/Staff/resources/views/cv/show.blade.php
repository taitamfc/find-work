@extends('staff::dashboards.layouts.dashboard')
@section('content')
<!-- Dashboard -->
<section class="user-dashboard">
    <div class="dashboard-outer">
        <div class="upper-title-box">
            <h3>Profile!</h3>
            <div class="text">Ready to jump back in?</div>
        </div>
        @include('staff::cv.includes.card')

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

                            <form class="default-form" method="POST" action="{{ route('staff.cv.update', $item->id) }}">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <!-- Thông tin cá nhân -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Tên CV:</label>
                                        <br>
                                        <span>{{ $item->cv_file }}</span>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Họ và tên:</label>
                                        <br>
                                        <span>{{ $item->name }}</span>
                                    </div>

                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Email:</label>
                                        <br>
                                        <span>{{ $item->email }}</span>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Số điện thoại:</label>
                                        <br>
                                        <span>{{ $item->phone }}</span>
                                    </div>

                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Ngày sinh:</label>
                                        <br>
                                        <span>{{ $item->birthdate }}</span>
                                    </div>

                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Giới tính:</label>
                                        <br>
                                        <span>{{ $item->gender }}</span>
                                    </div>

                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Thành phố:</label>
                                        <br>
                                        <span>{{ $item->city }}</span>
                                    </div>

                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Địa chỉ:</label>
                                        <br>
                                        <span>{{ $item->address }}</span>
                                    </div>

                                    <!-- Thông tin công việc -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Chức vụ mong muốn:</label>
                                        <br>
                                        <span>{{ $item->desired_position }}</span>
                                    </div>

                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Cấp bậc mong muốn:</label>
                                        <br>
                                        <span>{{ $item->desired_rank }}</span>
                                    </div>

                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Loại hình làm việc mong muốn:</label>
                                        <br>
                                        <span>{{ $item->employment_type }}</span>
                                    </div>

                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Ngành nghề mong muốn:</label>
                                        <br>
                                        <span>{{ $item->industry }}</span>
                                    </div>

                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Địa điểm làm việc mong muốn:</label>
                                        <br>
                                        <span>{{ $item->desired_location }}</span>
                                    </div>

                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Mức lương mong muốn:</label>
                                        <br>
                                        <span>{{ $item->desired_salary }}</span>
                                    </div>

                                    <div class="form-group col-lg-12 col-md-12">
                                        <label>Mục tiêu nghề nghiệp:</label>
                                        <br>
                                        <span>{{ $item->career_objective }}</span>
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
