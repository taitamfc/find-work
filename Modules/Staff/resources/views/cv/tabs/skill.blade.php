<form class="default-form" method="POST" action="">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" data-toggle="collapse" data-target="#collapseExperience-"
                    aria-expanded="true" style="background-color: white;">
                    <div class="card-title"><span class="btn btn-primary"> <i class="fas fa-plus"></i>
                            Thêm mới chuyên môn </span></div>
                </div>
                <div class="card-body collapse show" id="collapseExperience-" style="">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label>Thứ tự</label>
                                    <input type="number" name="number" value="">
                                </div>


                                <div class="form-group col-12">
                                    <label for="Level">Mức độ</label>
                                    <input type="range" id="Level" name="Level"
                                        class="form-control-range range-value" data-val="true"
                                        data-val-range="The field Mức độ must be between 1 and 100."
                                        data-val-range-max="100" data-val-range-min="1"
                                        data-val-required="Vui lòng chọn mức độ kỹ năng" value="0">
                                    <small class="form-text text-muted">
                                        <span class="field-validation-valid" data-valmsg-for="Level"
                                            data-valmsg-replace="true"></span>
                                    </small>
                                    <small class="range-text"> 0 % </small>
                                </div>

                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="row">
                                <div class="form-group col-12">
                                    <label>Kỹ năng chuyên môn</label>
                                    <input type="text" name="" value="">
                                </div>
                                <div class="form-group col-12">
                                    <label>Mô tả chi tiết</label>
                                    <input type="number" name="number" value="">
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