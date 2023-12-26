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
            <h1>Nhà tuyển dụng</h1>
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
                                    <div class="text">Tất cả các công việc
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
                                @foreach ($jobs as $job )
                                    <div class="company-block-four col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                        <div class="inner-box">
                                            <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
                                            @if ($job->jobStatusId == 1)
                                                <span class="featured">Đang tuyển</span>
                                            @else
                                                <span style="background: red !important;
                                                color: white !important;" class="featured">Dừng tuyển</span>
                                            @endif
                                            <span class="company-logo"><img src="images/resource/company-logo/6-1.png"
                                                    alt=""></span>
                                            <h4><a href="#">{{$job->name}}</a></h4>
                                            <ul class="job-info">
                                                <li><span class="icon flaticon-map-locator"></span>{{$job->work_address}}</li>
                                                <li><span class="icon flaticon-briefcase"></span>Lương: {{$job->wage_min}} VNĐ - {{$job->wage_max}} VNĐ</li>
                                            </ul>
                                            @if ($job->jobStatusId == 1)
                                                <div class="job-type"><a href="{{route('website.job.show',$job->id)}}">Chi tiết công việc</a></div>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            </div>

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