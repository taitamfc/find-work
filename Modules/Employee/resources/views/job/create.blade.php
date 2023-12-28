@extends('employee::layouts.master')
@section('content')
    <!-- Dashboard -->
    <section class="user-dashboard">
        <div class="dashboard-outer">
            <div class="upper-title-box">
                <h3>Thêm mới một công việc!</h3>
                <div class="text">Lao động là vinh quang!</div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <form action="{{ route('employee.job.store') }}" method="post" class="default-form">
                        <!-- Ls widget -->
                        <div class="ls-widget">
                            <div class="tabs-box">
                                <div class="widget-title">
                                    <h4></h4>
                                </div>

                                <div class="widget-content">

                                    <div class="post-job-steps">
                                        <div class="step">
                                            <span class="icon flaticon-briefcase"></span>
                                            <h5>Chi tiết công việc</h5>
                                        </div>
                                    </div>


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
                                        <!-- Input -->
                                        <!-- Input -->
                                        <div class="form-group col-lg-12 col-md-12">
                                            <label>Tên công việc</label>
                                            <input type="text" name="name" id="nameInput" placeholder="Tên công việc">
                                            @if ($errors->any())
                                                <p style="color:red">
                                                    {{ $errors->first('name') }}</p>
                                            @endif
                                        </div>

                                        <!-- Input -->
                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>Đường dẫn</label>
                                            <input type="text" name="slug" id="slugInput" placeholder="Đường dẫn">
                                            @if ($errors->any())
                                                <p style="color:red">
                                                    {{ $errors->first('slug') }}</p>
                                            @endif
                                        </div>

                                        <script>
                                            document.getElementById('nameInput').addEventListener('input', function() {
                                                var name = this.value;
                                                var slug = convertToSlug(name);
                                                document.getElementById('slugInput').value = slug;
                                            });

                                            function convertToSlug(text) {
                                                return text
                                                    .toLowerCase()
                                                    .replace(/[^\w ]+/g, '')
                                                    .replace(/ +/g, '-');
                                            }
                                        </script>

                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>Ngành Nghề</label>
                                            <select name="career[]" class="chosen-select js-example-basic-multiple"
                                                multiple="multiple">
                                                @foreach ($param['careers'] as $career)
                                                    <option value="{{ $career->id }}">{{ $career->name }}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->any())
                                                <p style="color:red">
                                                    {{ $errors->first('career') }}</p>
                                            @endif
                                        </div>

                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>Hạn nộp hồ sơ</label>
                                            <input type="date" name="deadline" placeholder="">
                                            @if ($errors->any())
                                                <p style="color:red">
                                                    {{ $errors->first('deadline') }}</p>
                                            @endif
                                        </div>

                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>Hình thức làm việc</label>
                                            <select name="type_work" class="chosen-select">
                                                @foreach ($param['formworks'] as $formwork)
                                                    <option value="{{ $formwork->id }}">{{ $formwork->name }}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->any())
                                                <p style="color:red">
                                                    {{ $errors->first('type_work') }}</p>
                                            @endif
                                        </div>

                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>Kinh Nghiệm</label>
                                            <select name="experience" class="chosen-select">
                                                <option value="2">Có yêu cầu</option>
                                                <option value="1"><Kbd></Kbd>hông yêu cầu</option>
                                            </select>
                                            @if ($errors->any())
                                                <p style="color:red">
                                                    {{ $errors->first('experience') }}</p>
                                            @endif
                                        </div>

                                        <!-- Input -->
                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>Lương</label>
                                            <select name="wage" class="chosen-select">
                                                @foreach ($param['wages'] as $wage)
                                                    <option value="{{ $wage->id }}">{{ $wage->name }}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->any())
                                                <p style="color:red">
                                                    {{ $errors->first('wage') }}</p>
                                            @endif
                                        </div>


                                        <!-- Input -->
                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>giới tính</label>
                                            <select name="gender" class="chosen-select">
                                                <option value="1">Nam</option>
                                                <option value="2">Nữ</option>
                                            </select>
                                            @if ($errors->any())
                                                <p style="color:red">
                                                    {{ $errors->first('gender') }}</p>
                                            @endif
                                        </div>

                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>Nơi làm việc</label>
                                            <input type="text" name="work_address" id="nameInput"
                                                placeholder="Nơi làm việc...">
                                            @if ($errors->any())
                                                <p style="color:red">
                                                    {{ $errors->first('work_address') }}</p>
                                            @endif
                                        </div>

                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>Bằng cấp</label>
                                            <select name="degree" class="chosen-select">
                                                @foreach ($param['degrees'] as $degree)
                                                    <option value="{{ $degree->id }}">{{ $degree->name }}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->any())
                                                <p style="color:red">
                                                    {{ $errors->first('degree') }}</p>
                                            @endif
                                        </div>

                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>Vị trí</label>
                                            <select name="rank" class="chosen-select">
                                                @foreach ($param['ranks'] as $rank)
                                                    <option value="{{ $rank->id }}">{{ $rank->name }}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->any())
                                                <p style="color:red">
                                                    {{ $errors->first('rank') }}</p>
                                            @endif
                                        </div>

                                        <!-- About Company -->
                                        <div class="form-group col-lg-12 col-md-12">
                                            <label>Mô tả công việc</label>
                                            <textarea name="description" placeholder="Mô tả..."></textarea>
                                            @if ($errors->any())
                                                <p style="color:red">
                                                    {{ $errors->first('description') }}</p>
                                            @endif
                                        </div>

                                        <!-- About Company -->
                                        <div class="form-group col-lg-12 col-md-12">
                                            <label>Yêu cầu công việc</label>
                                            <textarea name="requirements" placeholder="Yêu cầu..."></textarea>
                                            @if ($errors->any())
                                                <p style="color:red">
                                                    {{ $errors->first('requirements') }}</p>
                                            @endif
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ls-widget">
                            <div class="tabs-box">
                                <div class="widget-content">
                                    <div class="widget-title">
                                        <h4></h4>
                                    </div>
                                    <div class="post-job-steps">

                                        <div class="step">
                                            <span class="icon flaticon-money"></span>
                                            <h5>Gói và thanh toán</h5>
                                        </div>

                                        <div class="step">
                                            <span class="icon flaticon-checked"></span>
                                            <h5>Xác Nhận công việc</h5>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-lg-12 col-md-12">
                                            <label>Loại tin đăng</label>
                                            <select name="job_package" class="chosen-select">
                                                @foreach ($param['job_packages'] as $job_package)
                                                    <option id="{{ $job_package->id }}" value="{{ $job_package->id }}">
                                                        {{ $job_package->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @if ($errors->any())
                                                <p style="color:red">
                                                    {{ $errors->first('job_package') }}</p>
                                            @endif
                                        </div>


                                        <div class="form-group col-lg-3 col-md-12">
                                            <label>Ngày bắt đầu</label>
                                            <input type="date" name="start_day" placeholder="">
                                            @if ($errors->any())
                                                <p style="color:red">
                                                    {{ $errors->first('start_day') }}</p>
                                            @endif
                                        </div>

                                        <div class="form-group col-lg-3 col-md-12">
                                            <label>Ngày hết hạn</label>
                                            <input type="date" name="end_dead" placeholder="">
                                            @if ($errors->any())
                                                <p style="color:red">
                                                    {{ $errors->first('end_dead') }}</p>
                                            @endif
                                        </div>

                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>Số ngày :</label>
                                            <input type="number" name="number_day" id="nameInput"
                                                placeholder="Số ngày...">
                                            @if ($errors->any())
                                                <p style="color:red">
                                                    {{ $errors->first('number_day') }}</p>
                                            @endif
                                        </div>

                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>Tổng thah toán cho tin đăng :</label>
                                            <input type="number" name="price" id="nameInput" placeholder="Giá...">
                                            @if ($errors->any())
                                                <p style="color:red">
                                                    {{ $errors->first('price') }}</p>
                                            @endif
                                        </div>

                                        <div class="form-group col-lg-3 col-md-12">
                                            <label>Giờ bắt đầu đăng :</label>
                                            <input type="text" name="start_hour" id="nameInput" placeholder="Giờ...">
                                            @if ($errors->any())
                                                <p style="color:red">
                                                    {{ $errors->first('start_hour') }}</p>
                                            @endif
                                        </div>
                                        <div class="form-group col-lg-3 col-md-12">
                                            <label>Giờ Kết thúc :</label>
                                            <input type="text" name="end_hour" id="nameInput" placeholder="Giờ...">
                                            @if ($errors->any())
                                                <p style="color:red">
                                                    {{ $errors->first('end_hour') }}</p>
                                            @endif
                                        </div>
                                    </div>
                                    <!-- Input -->
                                    <div class="form-group col-lg-12 col-md-12 text-right">
                                        <button class="theme-btn btn-style-one">Đăng Tin</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </section>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>
    <!-- End Dashboard -->
@endsection
