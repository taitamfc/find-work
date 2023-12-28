<div class="row">
    <div class="col-12 col-md-6">
        <div class="row">
            <div class="form-group col-lg-6 col-md-12">
                <label>Thứ tự</label>
                <input type="number" name="numerical"  value="{{ old('numerical', $experience->numerical ?? '') }}">
                @if ($errors->any())
                <p style="color:red">{{ $errors->first('numerical') }}</p>
                @endif
            </div>
            <div class="col-12 col-md-6">
                <div class="form-check">
                    <input class="form-check-input" name="is_current" type="checkbox" value="1" @checked( $experience && $experience->is_current == 1 )>

                    <label class="form-check-sign" for="chk-0">Đang làm ở đây?</label>
                </div>
            </div>
            <div class="form-group col-12">
                <label>Công ty</label>
                <input type="text" name="company" value="{{ old('company', $experience->company ?? '') }}" placeholder="creativelayers">
                @if ($errors->any())
                <p style="color:red">{{ $errors->first('company') }}</p>
                @endif
            </div>
            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label class="required">Thời gian bắt đầu</label>
                    <input class="form-control" name="start_date" type="date"  value="{{ old('start_date', $experience->start_date ?? '') }}">
                    @if ($errors->any())
                    <p style="color:red">{{ $errors->first('start_date') }}</p>
                    @endif
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label for="WorkTo">Thời gian kết thúc</label> 
                    <input class="form-control" name="end_date" type="date" value="{{$experience->end_date ?? old('end_date')}}">
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
                    <option @selected(!empty($experience->level) && $experience->level == '1') value="1">Sinh viên/ Thực tập sinh</option>
                    <option @selected(!empty($experience->level) && $experience->level == '2') value="2">Mới tốt nghiệp</option>
                    <option @selected(!empty($experience->level) && $experience->level == '3') value="3">Nhân viên</option>
                    <option @selected(!empty($experience->level) && $experience->level == '4') value="4">Trưởng nhóm/ Giám sát</option>
                    <option @selected(!empty($experience->level) && $experience->level == '5') value="5">Quản lý</option>
                    <option @selected(!empty($experience->level) && $experience->level == '6') value="6">Phó giám đốc</option>
                    <option @selected(!empty($experience->level) && $experience->level == '7') value="7">Giám đốc</option>
                    <option @selected(!empty($experience->level) && $experience->level == '8') value="8">Tổng giám đốc</option>
                    <option @selected(!empty($experience->level) && $experience->level == '9') value="9">Chủ tịch/ Phó chủ tịch</option>
                    <option @selected(!empty($experience->level) && $experience->level == '10') value="10">Khác</option>
                </select>
            </div>

            <div class="form-group col-12">
                <label>Vị trí chức danh</label>
                <input type="text" name="position" value="{{ old('position', $experience->position ?? '') }}">
                @if ($errors->any())
                <p style="color:red">{{ $errors->first('position') }}</p>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="form-group col-12">
                <label>Mô tả công việc</label>
                <input type="text" name="job_description" value="{{ old('job_description', $experience->job_description ?? '') }}">
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