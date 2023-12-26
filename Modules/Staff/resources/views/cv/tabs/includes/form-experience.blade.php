<div class="row">
    <div class="col-12 col-md-6">
        <div class="row">
            <div class="form-group col-lg-6 col-md-12">
                <label>Thứ tự</label>
                <input type="number" name="numerical" value="{{$experience->numerical ?? ''}}">
                @if ($errors->any())
                <p style="color:red">{{ $errors->first('numerical') }}</p>
                @endif
            </div>
            <div class="col-12 col-md-6">
                <div class="form-check">
                    <input class="form-check-input" data-val="true"
                        data-val-required="The Đang làm ở đây? field is required." id="chk-0" name="is_current"
                        type="checkbox" value="1" {{ $experience && $experience->is_current ? 'checked' : '' }}>

                    <label class="form-check-sign" for="chk-0">Đang làm ở đây?</label>
                </div>
                <small class="form-text text-muted">
                    <span class="field-validation-valid" data-valmsg-for="is_current" data-valmsg-replace="true"></span>
                </small>

                <small class="form-text text-muted">
                    <span class="field-validation-valid" data-valmsg-for="is_current" data-valmsg-replace="true"></span>
                </small>
            </div>
            <div class="form-group col-12">
                <label>Công ty</label>
                <input type="text" name="company" value="{{$experience->company ?? ''}}" placeholder="creativelayers">
                @if ($errors->any())
                <p style="color:red">{{ $errors->first('company') }}</p>
                @endif
            </div>
            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label class="required" for="WorkFrom">Thời gian bắt đầu</label>
                    <input class="form-control" data-val="true" data-val-required="Vui lòng nhập thời gian bắt đầu"
                        id="WorkFrom" name="start_date" type="date" value="{{$experience->start_date ?? ''}}"> <small
                        class="form-text text-muted">
                        <span class="field-validation-valid" data-valmsg-for="start_date"
                            data-valmsg-replace="true"></span> </small>
                    @if ($errors->any())
                    <p style="color:red">{{ $errors->first('start_date') }}</p>
                    @endif
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="form-group"><label for="WorkTo">Thời gian
                        kết thúc</label> <input class="form-control" id="WorkTo" name="end_date" type="date"
                        value="{{$experience->end_date ?? ''}}"> <small class="form-text text-muted"> <span
                            class="field-validation-valid" data-valmsg-for="end_date" data-valmsg-replace="true"></span>
                    </small>
                    @if ($errors->any())
                    <p style="color:red">{{ $errors->first('end_date') }}</p>
                    @endif
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
                <input type="text" name="position" value="{{$experience->position ?? ''}}">
                @if ($errors->any())
                <p style="color:red">{{ $errors->first('position') }}</p>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="form-group col-12">
                <label>mô tả công việc</label>
                <input type="text" name="job_description" value="{{$experience->job_description ?? ''}}">
                @if ($errors->any())
                <p style="color:red">{{ $errors->first('job_description') }}</p>
                @endif
            </div>
        </div>
    </div>
</div>
<div class="text-right">
    <button class="d-flex btn btn-primary ms-auto mt-2" type="submit">
        <i class="fas fa-plus"></i> Lưu
    </button>
</div>