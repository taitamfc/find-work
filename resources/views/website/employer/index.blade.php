@extends('website.layouts.master')
@section('content')
<style>
.page-title {
    margin-top: 100px;
}
</style>

<section class="page-title">
    <div class="auto-container">
        <div class="title-outer">
            <h1>Công Ty</h1>
            <ul class="page-breadcrumb">
                <li><a href="index.html">Trang chủ</a></li>
                <li>Công Ty</li>
            </ul>
        </div>
    </div>
</section>

<section class="ls-section">
    <div class="auto-container">
        <div class="filters-backdrop"></div>

        <div class="row">

            <!-- Filters Column -->
            <div class="filters-column col-lg-4 col-md-12 col-sm-12">
                <div class="inner-column pd-right">
                    <div class="filters-outer">
                        <button type="button" class="theme-btn close-filters">X</button>

                        <!-- Filter Block -->
                        <div class="filter-block">
                            <h4>Tìm kiếm theo từ khóa</h4>
                            <div class="form-group">
                                <input type="text" name="listing-search" placeholder="Chức danh, từ khóa hoặc công ty">
                                <span class="icon flaticon-search-3"></span>
                            </div>
                        </div>

                        <!-- Filter Block -->
                        <div class="filter-block">
                            <h4>Vị trí</h4>
                            <div class="form-group">
                                <input type="text" name="listing-search" placeholder="Thành phố hoặc mã bưu điện">
                                <span class="icon flaticon-map-locator"></span>
                            </div>
                            <p>Bán kính xung quanh điểm đến đã chọn</p>
                            <div class="range-slider-one">
                                <div
                                    class="area-range-slider ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                                    <div class="ui-slider-range ui-corner-all ui-widget-header"
                                        style="left: 0%; width: 50%;"></div><span tabindex="0"
                                        class="ui-slider-handle ui-corner-all ui-state-default"
                                        style="left: 0%;"></span><span tabindex="0"
                                        class="ui-slider-handle ui-corner-all ui-state-default"
                                        style="left: 50%;"></span>
                                </div>
                                <div class="input-outer">
                                    <div class="amount-outer"><span class="area-amount">50</span>km</div>
                                </div>
                            </div>
                        </div>

                        <!-- Filter Block -->
                        <div class="filter-block">
                            <h4>Danh mục</h4>
                            <div class="form-group">
                                <select class="chosen-select" style="display: none;">
                                    <option>Choose a category</option>
                                    <option>Residential</option>
                                    <option>Commercial</option>
                                    <option>Industrial</option>
                                    <option>Apartments</option>
                                </select>
                                <div class="chosen-container chosen-container-single chosen-container-single-nosearch"
                                    title="" style="width: 100%;"><a class="chosen-single">
                                        <span>Choose a category</span>
                                        <div><b></b></div>
                                    </a>
                                    <div class="chosen-drop">
                                        <div class="chosen-search">
                                            <input class="chosen-search-input" type="text" autocomplete="off"
                                                readonly="">
                                        </div>
                                        <ul class="chosen-results"></ul>
                                    </div>
                                </div>
                                <span class="icon flaticon-briefcase"></span>
                            </div>
                        </div>

                        <!-- Filter Block -->
                        <div class="filter-block">
                            <h4>Company Size</h4>
                            <div class="form-group">
                                <select class="chosen-select" style="display: none;">
                                    <option>1-100 Members</option>
                                    <option>100-200 Members</option>
                                    <option>200-500 Members</option>
                                    <option>500-1000 Members</option>
                                    <option>1000-10000 Members</option>
                                </select>
                                <div class="chosen-container chosen-container-single chosen-container-single-nosearch"
                                    title="" style="width: 100%;"><a class="chosen-single">
                                        <span>1-100 Members</span>
                                        <div><b></b></div>
                                    </a>
                                    <div class="chosen-drop">
                                        <div class="chosen-search">
                                            <input class="chosen-search-input" type="text" autocomplete="off"
                                                readonly="">
                                        </div>
                                        <ul class="chosen-results"></ul>
                                    </div>
                                </div>
                                <span class="icon flaticon-briefcase"></span>
                            </div>
                        </div>

                        <!-- Filter Block -->
                        <div class="filter-block">
                            <h4>Founded Date</h4>
                            <div class="range-slider-one">
                                <div
                                    class="range-slider ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                                    <div class="ui-slider-range ui-corner-all ui-widget-header"
                                        style="left: 17.6923%; width: 76.9231%;"></div><span tabindex="0"
                                        class="ui-slider-handle ui-corner-all ui-state-default"
                                        style="left: 17.6923%;"></span><span tabindex="0"
                                        class="ui-slider-handle ui-corner-all ui-state-default"
                                        style="left: 94.6154%;"></span>
                                </div>
                                <div class="input-outer">
                                    <div class="amount-outer"><span class="count">1923 - 2023</span></div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Call To Action -->
                    <div class="call-to-action-four">
                        <h5>Recruiting?</h5>
                        <p>Advertise your jobs to millions of monthly users and search 15.8 million CVs in our database.
                        </p>
                        <a href="#" class="theme-btn btn-style-one bg-blue"><span class="btn-title">Start Recruiting
                                Now</span></a>
                        <div class="image" style="background-image: url(images/resource/ads-bg-4.png);"></div>
                    </div>
                    <!-- End Call To Action -->
                </div>
            </div>

            <!-- Content Column -->
            <div class="content-column col-lg-8 col-md-12 col-sm-12">
                <div class="ls-outer">
                    <button type="button" class="theme-btn btn-style-two toggle-filters">Show Filters</button>

                    <!-- ls Switcher -->
                    <div class="ls-switcher">
                        <div class="showing-result">
                            <div class="text">Showing <strong>41-60</strong> of <strong>944</strong> employer</div>
                        </div>
                        <div class="sort-by">
                            <select class="chosen-select" style="display: none;">
                                <option>Most Recent</option>
                                <option>Freelance</option>
                                <option>Full Time</option>
                                <option>Internship</option>
                                <option>Part Time</option>
                                <option>Temporary</option>
                            </select>
                            <div class="chosen-container chosen-container-single chosen-container-single-nosearch"
                                title="" style="width: 100%;"><a class="chosen-single">
                                    <span>Most Recent</span>
                                    <div><b></b></div>
                                </a>
                                <div class="chosen-drop">
                                    <div class="chosen-search">
                                        <input class="chosen-search-input" type="text" autocomplete="off" readonly="">
                                    </div>
                                    <ul class="chosen-results"></ul>
                                </div>
                            </div>

                            <select class="chosen-select" style="display: none;">
                                <option>Show 10</option>
                                <option>Show 20</option>
                                <option>Show 30</option>
                                <option>Show 40</option>
                                <option>Show 50</option>
                                <option>Show 60</option>
                            </select>
                            <div class="chosen-container chosen-container-single chosen-container-single-nosearch"
                                title="" style="width: 100%;"><a class="chosen-single">
                                    <span>Show 10</span>
                                    <div><b></b></div>
                                </a>
                                <div class="chosen-drop">
                                    <div class="chosen-search">
                                        <input class="chosen-search-input" type="text" autocomplete="off" readonly="">
                                    </div>
                                    <ul class="chosen-results"></ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    @foreach($userEmployees as $userEmployee)
                    <!-- Block Block -->
                    <div class="company-block-three">
                        <div class="inner-box">
                            <div class="content">
                                <div class="content-inner">
                                    <span class="company-logo"><img src="images/resource/company-logo/6-1.png"
                                            alt=""></span>
                                            <h4><a href="{{ route('website.employee.show', ['id' => $userEmployee->id]) }}">{{ $userEmployee->company_name }}</a></h4>
                                    <ul class="job-info">
                                    <li><span class="icon flaticon-map-locator"></span> {{ $userEmployee->company_address }}</li>
                                        <li><span class="icon flaticon-briefcase"></span> {{ $userEmployee->company_address }}</li>
                                    </ul>
                                </div>

                                <ul class="job-other-info">
                                    <li class="privacy">Đặc sắc</li>
                                    <li class="time">Việc làm mở – 2</li>
                                </ul>
                            </div>
                            <div class="text">Netflix is the world's leading streaming entertainment service with over
                                195 million paid memberships in over 190 countries enjoying TV series, documentaries and
                                feature films across a wide variety...</div>
                            <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
                        </div>
                    </div>
                    @endforeach
                    <!-- Listing Show More -->
                    <div class="ls-show-more">
                        <p>Showing 36 of 497 Jobs</p>
                        <div class="bar"><span class="bar-inner" style="width: 40%"></span></div>
                        <button class="show-more">Show More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection