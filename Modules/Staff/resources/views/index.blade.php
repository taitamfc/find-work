@extends('staff::dashboards.layouts.dashboard')
@section('content')
<!-- Dashboard -->
<section class="user-dashboard">
    <div class="dashboard-outer">
        <div class="upper-title-box">
            <h3>Thông tin cá nhân!</h3>
            <div class="text">Ready to jump back in?</div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- Ls widget -->
                <div class="ls-widget">
                    <div class="tabs-box">
                        <div class="widget-title">
                            <h4>My Profile</h4>
                        </div>

                        <div class="widget-content">
                            @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            @endif

                            <form class="default-form" method="POST" action="{{ route('staff.update', $item->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group col-lg-12 col-md-12">
                                    <div class="uploading-outer">
                                        <!-- Hiển thị hình ảnh nếu có -->
                                        @if($item->user->image_path)
                                        <img src="{{ asset($item->user->image_path) }}" alt="User Image">
                                        @else
                                        <!-- Hiển thị ảnh mặc định nếu không có ảnh -->
                                        <img src="{{ asset('website-assets/images/profile.jpg') }}" alt="Default Image"
                                            style="border-radius: 50%;">
                                        @endif
                                        <div class="file-input-wrapper">
                                            <input type="file" name="img" id="profile_image" accept="image/*">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Họ và tên</label>
                                        <input type="text" name="name" value="{{ $item->user->name }}">
                                        @if ($errors->any())
                                        <p style="color:red">{{ $errors->first('name') }}</p>
                                        @endif
                                    </div>

                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Email</label>
                                        <input type="text" name="email" value="{{ $item->user->email }}"
                                            placeholder="creativelayers">
                                        @if ($errors->any())
                                        <p style="color:red">{{ $errors->first('email') }}</p>
                                        @endif
                                    </div>

                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Phone</label>
                                        <input type="text" name="phone" value="{{ $item->phone }}">
                                        @if ($errors->any())
                                        <p style="color:red">{{ $errors->first('phone') }}</p>
                                        @endif
                                    </div>

                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Năm Sinh</label>
                                        <input type="text" name="birthdate" value="{{ $item->birthdate }}">
                                        @if ($errors->any())
                                        <p style="color:red">{{ $errors->first('birthdate') }}</p>
                                        @endif
                                    </div>

                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Số năm kinh nghiệm</label>
                                        <input type="text" name="experience_years"
                                            value="{{ $item->experience_years }}">
                                        @if ($errors->any())
                                        <p style="color:red">{{ $errors->first('experience_years') }}</p>
                                        @endif
                                    </div>

                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Giới tính</label>
                                        <select name="gender" class="form-control">
                                            <option value="nam" {{ $item->gender == 'nam' ? 'selected' : '' }}>Nam
                                            </option>
                                            <option value="nu" {{ $item->gender == 'nu' ? 'selected' : '' }}>Nữ</option>
                                            <option value="khac" {{ $item->gender == 'khac' ? 'selected' : '' }}>Khác
                                            </option>
                                        </select>
                                    </div>


                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Tỉnh\Thành phố</label>
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

                                    <div class="form-group col-lg-12 col-md-12">
                                        <label>Thành tích nổi bật</label>
                                        <input type="text" name="outstanding_achievements"
                                            value="{{ $item->outstanding_achievements }}">
                                        @if ($errors->any())
                                        <p style="color:red">{{ $errors->first('outstanding_achievements') }}</p>
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