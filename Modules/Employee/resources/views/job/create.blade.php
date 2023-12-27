@extends('employee::layouts.master')
@section('content')
    <!-- Dashboard -->
    <section class="user-dashboard">
        <div class="dashboard-outer">
            <div class="upper-title-box">
                <h3>Thêm mới công việc</h3>
                {{-- <div class="text">Ready to jump back in?</div> --}}
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Ls widget -->
                    <div class="ls-widget">
                        <div class="tabs-box">
                            <div class="widget-content">
                                <form action="{{route('employee.job.store')}}" method="post" novalidate="novalidate">
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
                                        <div class="col-md-12">
                                            <div class="card">
                                                {{-- <div class="card-header">
                                                    <div class="card-title">Thông tin việc làm</div>
                                                </div> --}}
                                                <div class="card-body">
                                                    <div class="validation-summary-valid" data-valmsg-summary="true">
                                                        <ul>
                                                            <li style="display:none"></li>
                                                        </ul>
                                                    </div>
                                                    <div class="row">
                                                        <div class="row">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="Title"><strong>Tiêu đề việc
                                                                                làm:</strong> (*)</label>
                                                                        <input class="form-control toUnsign"
                                                                            data-target="#NameUrl" data-val="true"
                                                                            data-val-maxlength="The field Tiêu đề việc làm (*) must be a string or array type with a maximum length of '1000'."
                                                                            data-val-maxlength-max="1000"
                                                                            data-val-required="Tiêu đề việc làm không được để trống"
                                                                            id="Title" maxlength="1000" name="name"
                                                                            type="text"
                                                                            onkeyup="generateSlug(this.value)">
                                                                        @if ($errors->any())
                                                                            <p style="color:red">
                                                                                {{ $errors->first('name') }}</p>
                                                                        @endif
                                                                        <small class="form-text text-muted">
                                                                            <span class="field-validation-valid"
                                                                                data-valmsg-for="Title"
                                                                                data-valmsg-replace="true"></span>
                                                                        </small>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="NameUrl"><strong>Đường
                                                                                dẫn:</strong>(*)</label>
                                                                        <input class="form-control" data-val="true"
                                                                            data-val-maxlength="The field Đường dẫn (*) must be a string or array type with a maximum length of '1000'."
                                                                            data-val-maxlength-max="1000"
                                                                            data-val-required="Đường dẫn không được để trống"
                                                                            id="NameUrl" maxlength="1000" name="slug"
                                                                            readonly="" type="text">
                                                                        @if ($errors->any())
                                                                            <p style="color:red">
                                                                                {{ $errors->first('slug') }}</p>
                                                                        @endif
                                                                        <small class="form-text text-muted">
                                                                            <span class="field-validation-valid"
                                                                                data-valmsg-for="NameUrl"
                                                                                data-valmsg-replace="true"></span>
                                                                        </small>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <script>
                                                                function generateSlug(title) {
                                                                    var slug = slugify(title); // Gọi hàm slugify để tạo slug từ tiêu đề
                                                                    document.getElementById('NameUrl').value = slug; // Gán giá trị slug vào ô input của đường dẫn
                                                                }

                                                                function slugify(text) {
                                                                    return text.toString().toLowerCase()
                                                                        .replace(/\s+/g, '-') // Thay thế khoảng trắng bằng dấu gạch ngang
                                                                        .replace(/[^\w\-]+/g, '') // Xóa các ký tự không phải chữ cái, số, dấu gạch ngang
                                                                        .replace(/\-\-+/g, '-') // Loại bỏ nhiều hơn 1 dấu gạch ngang liên tiếp
                                                                        .replace(/^-+/, '') // Loại bỏ dấu gạch ngang ở đầu
                                                                        .replace(/-+$/, ''); // Loại bỏ dấu gạch ngang ở cuối
                                                                }
                                                            </script>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group row"><label
                                                                        for="Categories"><strong>Lĩnh vực việc làm:</strong>
                                                                        (*)
                                                                        <input name="career" class="form-control ol-md-12">
                                                                        @if ($errors->any())
                                                                            <p style="color:red">
                                                                                {{ $errors->first('career') }}</p>
                                                                        @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <label for="type_work"><strong>Loại công việc (*)</strong></label>
                                                                <select class="form-control" name="type_work" id="">
                                                                    <option value="1">Toàn thời gian</option>
                                                                    <option value="0">Bán thời gian</option>
                                                                </select>
                                                                 @if ($errors->any())
                                                                     <p style="color:red">
                                                                         {{ $errors->first('type_work') }}</p>
                                                                 @endif
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group"><label for="Deadline"><strong>Hạn
                                                                            cuối:</strong>
                                                                        (*)</label> <input class="form-control"
                                                                        data-val="true"
                                                                        data-val-required="Hạn cuối không được để trống"
                                                                        id="Deadline" name="deadline" type="date"
                                                                        value="2024-01-01">
                                                                    @if ($errors->any())
                                                                        <p style="color:red">
                                                                            {{ $errors->first('deadline') }}</p>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4 col-lg-12">
                                                                <div class="form-group"><label
                                                                        for="RequireExperience"><strong>Kinh
                                                                            nghiệm:</strong> (*)</label> <select
                                                                        class="form-control" data-val="true"
                                                                        data-val-required="Kinh nghiệm không được để trống"
                                                                        id="RequireExperience" name="experience">
                                                                        <option value="1">Không yêu cầu</option>
                                                                        <option value="2">Có yêu cầu</option>
                                                                    </select>
                                                                    @if ($errors->any())
                                                                        <p style="color:red">
                                                                            {{ $errors->first('experience') }}</p>
                                                                    @endif
                                                                    <small class="form-text text-muted"> <span
                                                                            class="field-validation-valid"
                                                                            data-valmsg-for="experience"
                                                                            data-valmsg-replace="true"></span> </small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="form-group"><label
                                                                        for="SalaryFrom"><strong>Lương tối
                                                                            thiểu (triệu đồng):</strong></label> <input
                                                                        class="form-control" data-val="true"
                                                                        data-val-number="The field Lương tối thiểu (triệu đồng) must be a number."
                                                                        data-val-range="The field Lương tối thiểu (triệu đồng) must be between 0 and 2147483647."
                                                                        data-val-range-max="2147483647"
                                                                        data-val-range-min="0" id="SalaryFrom"
                                                                        min="0" name="wage_min" type="number">
                                                                    @if ($errors->any())
                                                                        <p style="color:red">
                                                                            {{ $errors->first('wage_min') }}</p>
                                                                    @endif
                                                                    <small class="form-text text-muted">
                                                                        <span class="field-validation-valid"
                                                                            data-valmsg-for="wage_min"
                                                                            data-valmsg-replace="true"></span> </small>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group"><label
                                                                        for="SalaryTo"><strong>Lương tối đa
                                                                            (triệu đồng):</strong></label> <input
                                                                        class="form-control" data-val="true"
                                                                        data-val-number="The field Lương tối đa (triệu đồng) must be a number."
                                                                        data-val-range="The field Lương tối đa (triệu đồng) must be between 0 and 2147483647."
                                                                        data-val-range-max="2147483647"
                                                                        data-val-range-min="0" id="SalaryTo"
                                                                        min="0" name="wage_max" type="number">
                                                                    @if ($errors->any())
                                                                        <p style="color:red">
                                                                            {{ $errors->first('wage_max') }}</p>
                                                                    @endif
                                                                    <small class="form-text text-muted">
                                                                        <span class="field-validation-valid"
                                                                            data-valmsg-for="wage_max"
                                                                            data-valmsg-replace="true"></span> </small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group row"><label
                                                                        for="gender"><strong>Giới tính:</strong>
                                                                        (*)
                                                                        <select class="form-control col-lg-12"
                                                                            name="gender" id="">
                                                                            <option value="1">Nam</option>
                                                                            <option value="2">Nữ</option>
                                                                        </select>
                                                                        @if ($errors->any())
                                                                            <p style="color:red">
                                                                                {{ $errors->first('gender') }}</p>
                                                                        @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group"><label for="Districts"><strong>Nơi
                                                                            làm việc:</strong>
                                                                        (*)</label> <input class="form-control"
                                                                        name="work_address" type="text">
                                                                    @if ($errors->any())
                                                                        <p style="color:red">
                                                                            {{ $errors->first('work_address') }}</p>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group"><label
                                                                        for="Districts"><strong>Bằng cấp:</strong>
                                                                        (*)</label> <input class="form-control"
                                                                        name="degree" type="text">
                                                                    @if ($errors->any())
                                                                        <p style="color:red">
                                                                            {{ $errors->first('degree') }}</p>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group"><label
                                                                        for="Description"><strong>Mô tả:</strong>
                                                                        (*)</label>
                                                                    <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
                                                                    @if ($errors->any())
                                                                        <p style="color:red">
                                                                            {{ $errors->first('description') }}</p>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group"><label
                                                                        for="Description"><strong>Yêu cầu công
                                                                            việc:</strong>Yêu cầu công việc
                                                                        (*)</label>
                                                                    <textarea class="form-control" name="requirements" id="" cols="30" rows="10"></textarea>
                                                                    @if ($errors->any())
                                                                        <p style="color:red">
                                                                            {{ $errors->first('requirements') }}</p>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group"><label
                                                                        for="status"><strong>Trạng
                                                                            thái
                                                                            tuyển dụng:</strong> (*)</label> <select
                                                                        class="form-control" data-val="true"
                                                                        data-val-range="The field Trạng thái tuyển dụng (*) must be between 1 and 2147483647."
                                                                        data-val-range-max="2147483647"
                                                                        data-val-range-min="1"
                                                                        data-val-required="Trạng thái tuyển dụng không được để trống"
                                                                        id="status" name="status">
                                                                        <option value="1">Đang tuyển</option>
                                                                        <option value="0">Dừng tuyển</option>
                                                                    </select> 
                                                                </div>
                                                    </div>
                                                    <div class="card-action pt-3"><button type="submit"
                                                            class="btn btn-success">Lưu</button> <a class="btn btn-danger"
                                                            href="{{route('employee.job.index')}}">Quay về</a>
                                                    </div>
                                                </div>
                                            </div>
                                </form>
                                {{-- <form class="default-form" action="{{route('employee.job.store')}}" method="post">
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
                                    <div class="form-group col-lg-12 col-md-12">
                                        <label>Tên Công việc</label>
                                        <input type="text" name="name" placeholder="">
                                        @if ($errors->any())
                                        <p style="color:red">{{ $errors->first('name') }}</p>
                                        @endif
                                    </div>

                                    
                                    <!-- Input -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Ngành Nghề</label>
                                        <input type="text" name="career" placeholder="">
                                        @if ($errors->any())
                                        <p style="color:red">{{ $errors->first('career') }}</p>
                                        @endif
                                    </div>

                                    <!-- Input -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Nơi làm việc</label>
                                        <input type="text" name="Work_address" placeholder="">
                                        @if ($errors->any())
                                        <p style="color:red">{{ $errors->first('Work_address') }}</p>
                                        @endif
                                    </div>

                                    <!-- About Company -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Mô tả công việc</label>
                                        <textarea name="Job_description"></textarea>
                                        @if ($errors->any())
                                        <p style="color:red">{{ $errors->first('Job_description') }}</p>
                                        @endif
                                    </div>


                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>yêu cầu công việc</label>
                                        <textarea name="Job_requirements"></textarea>
                                        @if ($errors->any())
                                        <p style="color:red">{{ $errors->first('Job_requirements') }}</p>
                                        @endif   
                                    </div>


                                    <!-- Input -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Lương</label>
                                        <input type="text" name="wage" placeholder="">
                                        @if ($errors->any())
                                        <p style="color:red">{{ $errors->first('wage') }}</p>
                                        @endif
                                    </div>
                                    
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Loại hình công việc</label>
                                        <select name="type_work" class="chosen-select">
                                            <option value="1">Toàn thời gian</option>
                                            <option value="0">Bán thời gian</option>
                                        </select>
                                        @if ($errors->any())
                                        <p style="color:red">{{ $errors->first('type_work') }}</p>
                                        @endif
                                    </div>

                                    <!-- Input -->
                                    <div class="form-group col-lg-12 col-md-12 text-right">
                                        <button class="theme-btn btn-style-one">Thêm Công Việc</button>
                                    </div>
                                </div>
                            </form> --}}
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- End Dashboard -->
@endsection
