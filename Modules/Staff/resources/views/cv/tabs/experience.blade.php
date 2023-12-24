<form class="default-form" method="POST" action="{{ route('staff.experience.store') }}">
    @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" data-toggle="collapse" data-target="#collapseExperience-" aria-expanded="true"
                    style="background-color: white;">
                    <div class="card-title"><span class="btn btn-primary"> <i class="fas fa-plus"></i>
                            Thêm mới công việc </span></div>
                </div>
                <div class="card-body collapse show" id="collapseExperience-" style="">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="row">
                                <div class="form-group col-lg-6 col-md-12">
                                    <label>Thứ tự</label>
                                    <input type="number" name="numerical" value="">
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-check"><label class="form-check-label">
                                            <input class="form-check-input" data-val="true"
                                                data-val-required="The Đang làm ở đây? field is required." id="chk-0"
                                                name="IsCurrent" type="checkbox" value="true"> <label
                                                class="form-check-sign" for="chk-0">Đang làm ở đây?</label> </label>
                                    </div><small class="form-text text-muted"> <span class="field-validation-valid"
                                            data-valmsg-for="IsCurrent" data-valmsg-replace="true"></span> </small>
                                </div>
                                <div class="form-group col-12">
                                    <label>Công ty</label>
                                    <input type="text" name="company" value="" placeholder="creativelayers">
                                    @if ($errors->any())
                                    <p style="color:red">{{ $errors->first('company') }}</p>
                                    @endif
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group"><label class="required" for="WorkFrom">Thời
                                            gian bắt đầu</label> <input class="form-control" data-val="true"
                                            data-val-required="Vui lòng nhập thời gian bắt đầu" id="WorkFrom"
                                            name="start_date" type="date" value="2022-12-22"> <small
                                            class="form-text text-muted">
                                            <span class="field-validation-valid" data-valmsg-for="start_date"
                                                data-valmsg-replace="true"></span> </small>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group"><label for="WorkTo">Thời gian
                                            kết thúc</label> <input class="form-control" id="WorkTo" name="end_date"
                                            type="date"> <small class="form-text text-muted"> <span
                                                class="field-validation-valid" data-valmsg-for="end_date"
                                                data-valmsg-replace="true"></span> </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="row">
                                <div class="form-group col-12">
                                    <label>Cấp bậc</label>
                                    <select name="level" class="form-control">
                                        <option value="1">Sinh viên/ Thực tập sinh</option>
                                        <option value="2">Mới tốt nghiệp</option>
                                        <option value="3">Nhân viên</option>
                                        <option value="4">Trưởng nhóm/ Giám sát</option>
                                        <option value="5">Quản lý</option>
                                        <option value="6">Phó giám đốc</option>
                                        <option value="7">Giám đốc</option>
                                        <option value="8">Tổng giám đốc</option>
                                        <option value="9">Chủ tịch/ Phó chủ tịch</option>
                                        <option value="10">Khác</option>
                                    </select>
                                </div>

                                <div class="form-group col-12">
                                    <label>Vị trí chức danh</label>
                                    <input type="text" name="position" value="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-12">
                                    <label>mô tả công việc</label>
                                    <input type="text" name="job_description" value="">
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
