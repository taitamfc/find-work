@extends('website.dashboards.layouts.dashboard')
@section('content')
<!-- Dashboard -->
<section class="user-dashboard">
    <div class="dashboard-outer">
        <div class="upper-title-box">
            <h3>Thông tin cá nhân!</h3>
            <div class="text">Ready to jump back in?</div>
        </div>
        @include('website.dashboards.includes.card')
        <div class="row">
            <div class="col-lg-12">
                <form class="default-form" method="POST" action="">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-toggle="collapse" data-target="#collapseExperience-"
                                    aria-expanded="true" style="background-color: white;">
                                    <div class="card-title"><span class="btn btn-primary"> <i class="fas fa-plus"></i>
                                            Thêm mới học vấn </span></div>
                                </div>
                                <div class="card-body collapse show" id="collapseExperience-" style="">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="row">
                                                <div class="form-group col-lg-6 col-md-12">
                                                    <label>Thứ tự</label>
                                                    <input type="number" name="number" value="">
                                                </div>
                                                <div class="form-group col-lg-6 col-md-12">
                                                    <label>Trình độ</label>
                                                    <select name="level" class="form-control">
                                                        <option value="1">chưa tốt nghiệp </option>
                                                        <option value="2">Trung học</option>
                                                        <option value="3">Trung cấp</option>
                                                        <option value="4">Cao đẳng</option>
                                                        <option value="5">Đại học</option>
                                                        <option value="6">Khác</option>
                                                    </select>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="form-group"><label class="required"
                                                            for="GraduationDate">Ngày nhận bằng / Ngày tốt
                                                            nghiệp</label> <input class="form-control valid"
                                                            data-val="true"
                                                            data-val-required="Vui lòng nhập thời gian nhận bằng"
                                                            id="GraduationDate" name="GraduationDate" type="date"
                                                            value="2023-03-21" aria-describedby="GraduationDate-error"
                                                            aria-invalid="false"> <small class="form-text text-muted">
                                                            <span class="field-validation-valid"
                                                                data-valmsg-for="GraduationDate"
                                                                data-valmsg-replace="true"></span> </small></div>
                                                </div>
                                                <div class="form-group col-lg-6 col-md-12">
                                                    <label>Ngoại ngữ</label>
                                                    <select name="level" class="form-control">
                                                        <option value="1">Anh</option>
                                                        <option value="2">Pháp</option>
                                                        <option value="3">Hàn</option>
                                                        <option value="4">Nhật</option>
                                                        <option value="6">Khác</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="row">
                                                <div class="form-group col-12">
                                                    <label>Trường / Khóa học</label>
                                                    <input type="text" name="" value="">
                                                    @if ($errors->any())
                                                    <p style="color:red">{{ $errors->first('email') }}</p>
                                                    @endif
                                                </div>
                                                <div class="form-group col-12">
                                                    <label>Ngành / Chuyên ngành</label>
                                                    <input type="text" name="name" value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-right"><button class="d-flex btn btn-primary ms-auto" type="submit"
                                            style="margin-top: 20px;">
                                            <i class="fas fa-plus"></i> Lưu </button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- End Dashboard -->
@endsection