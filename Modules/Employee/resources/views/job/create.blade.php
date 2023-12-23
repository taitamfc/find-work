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
                        <div class="widget-title">
                            <h4>Thêm thông tin công việc</h4>
                        </div>

                        <div class="widget-content">

                           

                            <form class="default-form" action="{{route('employee.job.store')}}" method="post">
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