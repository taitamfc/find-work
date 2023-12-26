@extends('website.layouts.master')
@section('content')
<style>
.page-title {
    margin-top: 100px;
}
</style>
<!--Page Title-->
<section class="page-title">
    <div class="auto-container">
        <div class="title-outer">
            <h1>Chi Tiết Công Việc</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ route('home') }}">Trang chủ</a></li>
                <li>Nhà tuyển dụng</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->
<!-- Listing Section -->
<section class="ls-section">
    <div class="auto-container">
        <div class="filters-backdrop"></div>

        <!-- Listing Section -->
        <section class="ls-section">
            <div class="auto-container">
                <div class="filters-backdrop"></div>

                <div class="row">


                    <!-- Content Column -->
                    <div class="content-column col-lg-12 col-md-12 col-sm-12">
                        <div class="ls-outer">
                            <button type="button" class="theme-btn btn-style-two toggle-filters">Show Filters</button>

                            <!-- ls Switcher -->
                            <div class="ls-switcher">
                                <div class="showing-result">
                                    {{-- <div class="text">Showing <strong>41-60</strong> of <strong>944</strong> employer
                                    </div> --}}
                                    <div class="text"><h1>{{$job->name}}</h1>
                                    </div>
                                </div>
                                {{-- <div class="sort-by">
                                    <select class="chosen-select">
                                        <option>New Jobs</option>
                                        <option>Freelance</option>
                                        <option>Full Time</option>
                                        <option>Internship</option>
                                        <option>Part Time</option>
                                        <option>Temporary</option>
                                    </select>

                                    <select class="chosen-select">
                                        <option>Show 10</option>
                                        <option>Show 20</option>
                                        <option>Show 30</option>
                                        <option>Show 40</option>
                                        <option>Show 50</option>
                                        <option>Show 60</option>
                                    </select>
                                </div> --}}
                            </div>


                            <div class="row">
                                <!-- Company Block Four -->
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><strong>Ngành Nghề :</strong> {{$job->name}}</li>
                                    <li class="list-group-item"><strong>Ngành Nghề : </strong>{{$job->career}}</li>
                                    @if ($job->type_work == 1)
                                    <li class="list-group-item"><strong>Hình Thức : </strong>Toàn thời gian</li>
                                    @else
                                    <li class="list-group-item"><strong>Hình Thức : </strong>Bán thời gian</li>
                                    @endif
                                    <li class="list-group-item"><strong>Hạn Đến Ngày : </strong>{{$job->deadline}}</li>
                                    @if ($job->experience == 1)
                                    <li class="list-group-item"><strong>Kinh Nghiệm : </strong>Không yêu cầu</li>
                                    @else
                                    <li class="list-group-item"><strong>Kinh Nghiệm : </strong>Có yêu cầu</li>
                                    @endif
                                    <li class="list-group-item"><strong>Lương : </strong>{{$job->wage_min}} - {{$job->wage_max}}</li>
                                    @if ($job->gender == 1)
                                    <li class="list-group-item"><strong>yêu Cầu Giới tính : </strong>Nam</li>
                                    @else
                                    <li class="list-group-item"><strong>yêu Cầu Giới tính : </strong>Nữ</li>
                                    @endif
                                    <li class="list-group-item"><strong>Nơi Làm Việc : </strong>{{$job->work_address}}</li>
                                    <li class="list-group-item"><strong>Bằng Cấp : </strong>{{$job->degree}}</li>
                                    <li class="list-group-item"><strong>Mô Tả Công Việc : </strong>{{$job->job_description}}</li>
                                    <li class="list-group-item"><strong>Yêu Cầu Công Việc : </strong>{{$job->job_requirements	}}</li>
                                  </ul>
                            </div>
                            <a href="" type="button" class="btn btn-primary">Ứng Tuyển</a>
                            <a href="{{route('home')}}" type="button" class="btn btn-danger">Quay Lại</a>

                            <!-- Pagination -->
                            {{-- <nav class="ls-pagination">
                                <ul>
                                    <li class="prev"><a href="#"><i class="fa fa-arrow-left"></i></a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#" class="current-page">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li class="next"><a href="#"><i class="fa fa-arrow-right"></i></a></li>
                                </ul>
                            </nav> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Listing Page Section -->
    </div>
</section>
<!--End Listing Page Section -->

@endsection