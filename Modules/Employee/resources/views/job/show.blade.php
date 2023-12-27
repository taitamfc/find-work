@extends('employee::layouts.master')
@section('content')
    <!-- Dashboard -->
    <section class="user-dashboard">
        <div class="dashboard-outer">
            <div class="upper-title-box">
                <h3>Chi tiết công việc</h3>
                {{-- <div class="text">Lao động là vinh quang!</div> --}}
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Ls widget -->
                    <div class="ls-widget">
                        <div class="tabs-box">
                            <div class="widget-title">
                                <h4>Chỉnh sửa</h4>
                            </div>

                            <div class="widget-content">


                                <form action="{{route('employee.job.update',$job->id)}}" method="post" class="default-form">
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
                                            <input type="text" name="name" value="{{$job->name}}" id="nameInput" placeholder="Tên công việc">
                                            @if ($errors->any())
                                                <p style="color:red">
                                                    {{ $errors->first('name') }}</p>
                                            @endif
                                        </div>

                                        <!-- Input -->
                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>Đường dẫn</label>
                                            <input type="text" name="slug" value="{{$job->slug}}" id="slugInput" placeholder="Đường dẫn">
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
                                            <select name="career" class="chosen-select" >
                                                @foreach ($careers as $career )
                                                    <option @selected($job->career = $career->id) value="{{$career->id}}">{{$career->name}}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->any())
                                                <p style="color:red">
                                                    {{ $errors->first('career') }}</p>
                                            @endif
                                        </div>

                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>Hình thức làm việc</label>
                                            <select name="type_work" class="chosen-select">
                                                @foreach ($formworks as $formwork )
                                                    <option @selected($job->type_work = $formwork->id) value="{{$formwork->id}}">{{$formwork->name}}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->any())
                                                <p style="color:red">
                                                    {{ $errors->first('type_work') }}</p>
                                            @endif
                                        </div>

                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>Ngày đăng</label>
                                            <input type="date" value="{{$job->start_day}}" name="start_day" placeholder="">
                                            @if ($errors->any())
                                                <p style="color:red">
                                                    {{ $errors->first('start_day') }}</p>
                                            @endif
                                        </div>

                                        

                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>Hạn cuối nộp hồ sơ</label>
                                            <input type="date" value="{{$job->deadline}}" name="deadline" placeholder="">
                                            @if ($errors->any())
                                                <p style="color:red">
                                                    {{ $errors->first('deadline') }}</p>
                                            @endif
                                        </div>

                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>Số ngày :</label>
                                            <input type="number" value="{{$job->number_day}}" name="number_day" id="nameInput" placeholder="Số ngày...">
                                            @if ($errors->any())
                                                <p style="color:red">
                                                    {{ $errors->first('number_day') }}</p>
                                            @endif
                                        </div>


                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>Kinh Nghiệm</label>
                                            <select name="experience" class="chosen-select">
                                                <option @selected($job->experience == 2) value="2">Có yêu cầu</option>
                                                <option @selected($job->experience == 1) value="1"><Kbd></Kbd>hông yêu cầu</option>
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
                                                @foreach ($wages as $wage )
                                                    <option @selected($job->experience == $wage->id) value="{{$wage->id}}">{{$wage->name}}</option>
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
                                                <option @selected($job->gender == 1) value="1">Nam</option>
                                                <option @selected($job->gender == 2) value="2">Nữ</option>
                                            </select>
                                            @if ($errors->any())
                                                <p style="color:red">
                                                    {{ $errors->first('gender') }}</p>
                                            @endif
                                        </div>

                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>Nơi làm việc</label>
                                            <input type="text" value="{{$job->work_address}}" name="work_address" id="nameInput" placeholder="Nơi làm việc...">
                                            @if ($errors->any())
                                                <p style="color:red">
                                                    {{ $errors->first('work_address') }}</p>
                                            @endif
                                        </div>

                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>Bằng cấp</label>
                                            <select name="degree" class="chosen-select">
                                                @foreach ($degrees as $degree )
                                                    <option @selected($job->degree == $degree->id) value="{{$degree->id}}">{{$degree->name}}</option>
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
                                                @foreach ($ranks as $rank )
                                                    <option @selected($job->rank == $rank->id) value="{{$rank->id}}">{{$rank->name}}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->any())
                                                <p style="color:red">
                                                    {{ $errors->first('rank') }}</p>
                                            @endif
                                        </div>

                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>Loại tin</label>
                                            <select name="job_package" class="chosen-select">
                                                @foreach ($job_packages as $job_package )
                                                    <option @selected($job->job_package == $job_package->id) value="{{$job_package->id}}">{{$job_package->name}}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->any())
                                                <p style="color:red">
                                                    {{ $errors->first('job_package') }}</p>
                                            @endif
                                        </div>

                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>Tổng thah toán cho tin đăng :</label>
                                            <input type="number" value="{{$job->price}}" name="price" id="nameInput" placeholder="Giá...">
                                            @if ($errors->any())
                                                <p style="color:red">
                                                    {{ $errors->first('price') }}</p>
                                            @endif
                                        </div>



                                        <!-- About Company -->
                                        <div class="form-group col-lg-12 col-md-12">
                                            <label>Mô tả công việc</label>
                                            <textarea name="description"
                                                placeholder="Mô tả...">{{$job->description}}</textarea>
                                            @if ($errors->any())
                                                <p style="color:red">
                                                    {{ $errors->first('description') }}</p>
                                            @endif
                                        </div>

                                        <!-- About Company -->
                                        <div class="form-group col-lg-12 col-md-12">
                                            <label>Yêu cầu công việc</label>
                                            <textarea name="requirements"
                                                placeholder="Yêu cầu...">{{$job->requirements}}</textarea>
                                            @if ($errors->any())
                                                <p style="color:red">
                                                    {{ $errors->first('requirements') }}</p>
                                            @endif
                                        </div>

                                        <!-- Input -->
                                        <div class="form-group col-lg-12 col-md-12 text-right">
                                            <button class="theme-btn btn-style-one">Cập Nhật</button>
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
