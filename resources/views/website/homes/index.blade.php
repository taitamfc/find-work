@extends('website.layouts.master')
@section('content')
<!-- Banner Section-->
<section class="banner-section">
    <div class="auto-container">
        <div class="row">
            <div class="content-column col-lg-7 col-md-12 col-sm-12">
                <div class="inner-column wow fadeInUp" data-wow-delay="1000ms">
                    <div class="title-box">
                        <h3>Việc làm OBN</h3>
                        <h3> Tìm kiếm liền tay - Nhận ngay công việc </h3>
                        <div class="text">Hơn 10,000+ cơ hội nghề nghiệp đang chờ đợi bạn</div>
                    </div>

                    <!-- Job Search Form -->
                    <div class="job-search-form">
                        <form method="post" action="job-list-v10.html">
                            <div class="row">
                                <div class="form-group col-lg-5 col-md-12 col-sm-12">
                                    <span class="icon flaticon-search-1"></span>
                                    <input type="text" name="field_name" placeholder="Job title, keywords, or company">
                                </div>
                                <!-- Form Group -->
                                <div class="form-group col-lg-4 col-md-12 col-sm-12 location">
                                    <span class="icon flaticon-map-locator"></span>
                                    <input type="text" name="field_name" placeholder="City or postcode">
                                </div>
                                <!-- Form Group -->
                                <div class="form-group col-lg-3 col-md-12 col-sm-12 btn-box">
                                    <button type="submit" class="theme-btn btn-style-one"><span class="btn-title">Find
                                            Jobs</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Job Search Form -->

                    <!-- Popular Search -->
                    <div class="popular-searches">
                        <span class="title">Popular Searches : </span>
                        <a href="#">Designer</a>,
                        <a href="#">Developer</a>,
                        <a href="#">Web</a>,
                        <a href="#">IOS</a>,
                        <a href="#">PHP</a>,
                        <a href="#">Senior</a>,
                        <a href="#">Engineer</a>,
                    </div>
                    <!-- End Popular Search -->
                </div>
            </div>

            <div class="image-column col-lg-5 col-md-12">
                <div class="image-box">
                    <figure class="main-image wow fadeIn" data-wow-delay="500ms"><img
                            src="{{ asset('website-assets/images/resource/banner-img-1.png')}}" alt=""></figure>

                    <!-- Info BLock One -->
                    <div class="info_block anm wow fadeIn" data-wow-delay="1000ms" data-speed-x="2" data-speed-y="2">
                        <span class="icon flaticon-email-3"></span>
                        <p>Work Inquiry From <br>Ali Tufan</p>
                    </div>

                    <!-- Info BLock Two -->
                    <div class="info_block_two anm wow fadeIn" data-wow-delay="2000ms" data-speed-x="1"
                        data-speed-y="1">
                        <p>10k+ Candidates</p>
                        <div class="image"><img src="{{ asset('website-assets/images/resource/multi-peoples.png')}}"
                                alt=""></div>
                    </div>

                    <!-- Info BLock Three -->
                    <div class="info_block_three anm wow fadeIn" data-wow-delay="1500ms" data-speed-x="4"
                        data-speed-y="4">
                        <span class="icon flaticon-briefcase"></span>
                        <p>Creative Agency</p>
                        <span class="sub-text">Startup</span>
                        <span class="right_icon fa fa-check"></span>
                    </div>

                    <!-- Info BLock Four -->
                    <div class="info_block_four anm wow fadeIn" data-wow-delay="2500ms" data-speed-x="3"
                        data-speed-y="3">
                        <span class="icon flaticon-file"></span>
                        <div class="inner">
                            <p>Upload Your CV</p>
                            <span class="sub-text">It only takes a few seconds</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Section-->

<!-- Job Categories -->
<section class="job-categories">
    <div class="auto-container">
        <div class="sec-title text-center">
            <h2>Ngành nghề nổi bật</h2>
            <div class="text">2020 jobs live - 293 added today.</div>
        </div>

        <div class="row wow fadeInUp">
            <!-- Category Block -->
            <div class="category-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="content">
                        <span class="icon flaticon-money-1"></span>
                        <h4><a href="#">Kế toán / Tài chính</a></h4>
                        <p>(2 vị trí đang mở)</p>
                    </div>
                </div>
            </div>

            <!-- Category Block -->
            <div class="category-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="content">
                        <span class="icon flaticon-promotion"></span>
                        <h4><a href="#">Tiếp thị</a></h4>
                        <p>(86 vị trí mở)</p>
                    </div>
                </div>
            </div>

            <!-- Category Block -->
            <div class="category-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="content">
                        <span class="icon flaticon-vector"></span>
                        <h4><a href="#">Thiết kế</a></h4>
                        <p>(43 vị trí mở)</p>
                    </div>
                </div>
            </div>

            <!-- Category Block -->
            <div class="category-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="content">
                        <span class="icon flaticon-web-programming"></span>
                        <h4><a href="#">Phát triển</a></h4>
                        <p>(12 vị trí mở)</p>
                    </div>
                </div>
            </div>

            <!-- Category Block -->
            <div class="category-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="content">
                        <span class="icon flaticon-headhunting"></span>
                        <h4><a href="#">Nguồn nhân lực</a></h4>
                        <p>(55 vị trí mở)</p>
                    </div>
                </div>
            </div>

            <!-- Category Block -->
            <div class="category-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="content">
                        <span class="icon flaticon-rocket-ship"></span>
                        <h4><a href="#">Quản lý dự án</a></h4>
                        <p>(2 vị trí đang mở)</p>
                    </div>
                </div>
            </div>

            <!-- Category Block -->
            <div class="category-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="content">
                        <span class="icon flaticon-support-1"></span>
                        <h4><a href="#">Dịch vụ khách hàng</a></h4>
                        <p>(2 vị trí đang mở)</p>
                    </div>
                </div>
            </div>

            <!-- Category Block -->
            <div class="category-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="content">
                        <span class="icon flaticon-first-aid-kit-1"></span>
                        <h4><a href="#">Sức khỏe và Chăm sóc</a></h4>
                        <p>(25 vị trí mở)</p>
                    </div>
                </div>
            </div>

            <!-- Category Block -->
            <div class="category-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="content">
                        <span class="icon flaticon-car"></span>
                        <h4><a href="#">Việc làm ô tô</a></h4>
                        <p>92 vị trí mở</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Job Categories -->

<!-- Job Section -->
<section class="job-section">
    <div class="auto-container">
        <div class="sec-title text-center">
            <h2>Việc làm mới nhất</h2>
            <div class="text">Biết giá trị của bạn và tìm công việc phù hợp với cuộc sống của bạn</div>
        </div>

        <div class="row wow fadeInUp">
            <!-- Job Block -->
            <div class="job-block col-lg-6 col-md-12 col-sm-12">
                <div class="inner-box">
                    <div class="content">
                        <span class="company-logo"><img
                                src="{{ asset('website-assets/images/resource/company-logo/1-1.png')}}" alt=""></span>
                        <h4><a href="#">Kỹ sư phần mềm (Android), Thư viện</a></h4>
                        <ul class="job-info">
                            <li><span class="icon flaticon-briefcase"></span> Segment</li>
                            <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                            <li><span class="icon flaticon-clock-3"></span> 11 hours ago</li>
                            <li><span class="icon flaticon-money"></span> $35k - $45k</li>
                        </ul>
                        <ul class="job-other-info">
                            <li class="time">Full Time</li>
                            <li class="privacy">Private</li>
                            <li class="required">Urgent</li>
                        </ul>
                        <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
                    </div>
                </div>
            </div>

            <!-- Job Block -->
            <div class="job-block col-lg-6 col-md-12 col-sm-12">
                <div class="inner-box">
                    <div class="content">
                        <span class="company-logo"><img
                                src="{{ asset('website-assets/images/resource/company-logo/1-2.png')}}" alt=""></span>
                        <h4><a href="#">Điều phối viên tuyển dụng</a></h4>
                        <ul class="job-info">
                            <li><span class="icon flaticon-briefcase"></span> Segment</li>
                            <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                            <li><span class="icon flaticon-clock-3"></span> 11 hours ago</li>
                            <li><span class="icon flaticon-money"></span> $35k - $45k</li>
                        </ul>
                        <ul class="job-other-info">
                            <li class="time">Full Time</li>
                            <li class="privacy">Private</li>
                            <li class="required">Urgent</li>
                        </ul>
                        <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
                    </div>
                </div>
            </div>

            <!-- Job Block -->
            <div class="job-block col-lg-6 col-md-12 col-sm-12">
                <div class="inner-box">
                    <div class="content">
                        <span class="company-logo"><img
                                src="{{ asset('website-assets/images/resource/company-logo/1-3.png')}}" alt=""></span>
                        <h4><a href="#">Giám đốc sản phẩm, Studio</a></h4>
                        <ul class="job-info">
                            <li><span class="icon flaticon-briefcase"></span> Segment</li>
                            <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                            <li><span class="icon flaticon-clock-3"></span> 11 hours ago</li>
                            <li><span class="icon flaticon-money"></span> $35k - $45k</li>
                        </ul>
                        <ul class="job-other-info">
                            <li class="time">Full Time</li>
                            <li class="privacy">Private</li>
                            <li class="required">Urgent</li>
                        </ul>
                        <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
                    </div>
                </div>
            </div>

            <!-- Job Block -->
            <div class="job-block col-lg-6 col-md-12 col-sm-12">
                <div class="inner-box">
                    <div class="content">
                        <span class="company-logo"><img
                                src="{{ asset('website-assets/images/resource/company-logo/1-4.png')}}" alt=""></span>
                        <h4><a href="#">Nhà thiết kế sản phẩm cao cấp</a></h4>
                        <ul class="job-info">
                            <li><span class="icon flaticon-briefcase"></span> Segment</li>
                            <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                            <li><span class="icon flaticon-clock-3"></span> 11 hours ago</li>
                            <li><span class="icon flaticon-money"></span> $35k - $45k</li>
                        </ul>
                        <ul class="job-other-info">
                            <li class="time">Full Time</li>
                            <li class="privacy">Private</li>
                            <li class="required">Urgent</li>
                        </ul>
                        <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
                    </div>
                </div>
            </div>

            <!-- Job Block -->
            <div class="job-block col-lg-6 col-md-12 col-sm-12">
                <div class="inner-box">
                    <div class="content">
                        <span class="company-logo"><img
                                src="{{ asset('website-assets/images/resource/company-logo/1-5.png')}}" alt=""></span>
                        <h4><a href="#">Kỹ sư Full Stack cấp cao, Người sáng tạo thành công</a></h4>
                        <ul class="job-info">
                            <li><span class="icon flaticon-briefcase"></span> Segment</li>
                            <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                            <li><span class="icon flaticon-clock-3"></span> 11 hours ago</li>
                            <li><span class="icon flaticon-money"></span> $35k - $45k</li>
                        </ul>
                        <ul class="job-other-info">
                            <li class="time">Full Time</li>
                            <li class="privacy">Private</li>
                            <li class="required">Urgent</li>
                        </ul>
                        <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
                    </div>
                </div>
            </div>

            <!-- Job Block -->
            <div class="job-block col-lg-6 col-md-12 col-sm-12">
                <div class="inner-box">
                    <div class="content">
                        <span class="company-logo"><img
                                src="{{ asset('website-assets/images/resource/company-logo/1-6.png')}}" alt=""></span>
                        <h4><a href="#">Kỹ sư phần mềm (Android), Thư viện</a></h4>
                        <ul class="job-info">
                            <li><span class="icon flaticon-briefcase"></span> Segment</li>
                            <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                            <li><span class="icon flaticon-clock-3"></span> 11 hours ago</li>
                            <li><span class="icon flaticon-money"></span> $35k - $45k</li>
                        </ul>
                        <ul class="job-other-info">
                            <li class="time">Full Time</li>
                            <li class="privacy">Private</li>
                            <li class="required">Urgent</li>
                        </ul>
                        <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="btn-box">
            <a href="#" class="theme-btn btn-style-one bg-blue"><span class="btn-title">Tải thêm danh sách</span></a>
        </div>
    </div>
</section>
<!-- End Job Section -->

<!-- Testimonial Section -->
<section class="testimonial-section">
    <div class="container-fluid">
        <!-- Sec Title -->
        <div class="sec-title text-center">
            <h2>Công ty tuyển dụng hàng đầu QT</h2>
            <div class="text">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor</div>
        </div>

        <div class="carousel-outer wow fadeInUp">

            <!-- Testimonial Carousel -->
            <div class="testimonial-carousel owl-carousel owl-theme">

                <!--Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <h4 class="title">Good theme</h4>
                        <div class="text">Without JobHunt i’d be homeless, they found me a job and got me sorted out
                            quickly with everything! Can’t quite… The Mitech team works really hard to ensure high level
                            of quality</div>
                        <div class="info-box">
                            <div class="thumb"><img src="{{ asset('website-assets/images/resource/testi-thumb-1.png')}}"
                                    alt=""></div>
                            <h4 class="name">Nicole Wells</h4>
                            <span class="designation">Web Developer</span>
                        </div>
                    </div>
                </div>

                <!--Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <h4 class="title">Great quality!</h4>
                        <div class="text">Without JobHunt i’d be homeless, they found me a job and got me sorted out
                            quickly with everything! Can’t quite… The Mitech team works really hard to ensure high level
                            of quality</div>
                        <div class="info-box">
                            <div class="thumb"><img src="{{ asset('website-assets/images/resource/testi-thumb-2.png')}}"
                                    alt=""></div>
                            <h4 class="name">Gabriel Nolan</h4>
                            <span class="designation">Consultant</span>
                        </div>
                    </div>
                </div>

                <!--Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <h4 class="title">Awesome Design </h4>
                        <div class="text">Without JobHunt i’d be homeless, they found me a job and got me sorted out
                            quickly with everything! Can’t quite… The Mitech team works really hard to ensure high level
                            of quality</div>
                        <div class="info-box">
                            <div class="thumb"><img src="{{ asset('website-assets/images/resource/testi-thumb-3.png')}}"
                                    alt=""></div>
                            <h4 class="name">Ashley Jenkins</h4>
                            <span class="designation">Designer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Testimonial Section -->


<section class="job-section">
    <div class="auto-container">
        <div class="sec-title text-center">
            <h2>Nhà tuyển dụng nổi bật</h2>
        </div>

        <div class="row wow fadeInUp">
            <!-- Job Block -->
            <div class="job-block col-lg-6 col-md-12 col-sm-12">
                <div class="inner-box">
                    <div class="content">
                        <span class="company-logo"><img
                                src="{{ asset('website-assets/images/resource/company-logo/1-1.png')}}" alt=""></span>
                        <h4><a href="#">HOTLINE CHO NGƯỜI TÌM VIỆC</a></h4>
                        <ul class="job-info">
                            <li><span class="icon flaticon-briefcase"></span> Segment</li>
                            <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                            <li><span class="icon flaticon-clock-3"></span> 11 hours ago</li>
                            <li><span class="icon flaticon-money"></span> $35k - $45k</li>
                        </ul>
                        <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
                    </div>
                </div>
            </div>

            <!-- Job Block -->
            <div class="job-block col-lg-6 col-md-12 col-sm-12">
                <div class="inner-box">
                    <div class="content">
                        <span class="company-logo"><img
                                src="{{ asset('website-assets/images/resource/company-logo/1-2.png')}}" alt=""></span>
                        <h4><a href="#">HOTLINE CHO NHÀ TUYỂN DỤNG</a></h4>
                        <ul class="job-info">
                            <li><span class="icon flaticon-briefcase"></span> Segment</li>
                            <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                            <li><span class="icon flaticon-clock-3"></span> 11 hours ago</li>
                            <li><span class="icon flaticon-money"></span> $35k - $45k</li>
                        </ul>
                        <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Job Section -->



<!-- News Section -->
<section class="news-section">
    <div class="auto-container">
        <div class="sec-title text-center">
            <h2>Việc làm theo ngành nghề</h2>
            <div class="text">Fresh job related news content posted each day.</div>
        </div>

        <div class="row wow fadeInUp">
            <!-- News Block -->
            <div class="news-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><img src="{{ asset('website-assets/images/resource/news-1.jpg')}}"
                                alt="" /></figure>
                    </div>
                    <div class="lower-content">
                        <ul class="post-meta">
                            <li><a href="#">August 31, 2021</a></li>
                            <li><a href="#">12 Comment</a></li>
                        </ul>
                        <h3><a href="blog-single.html">Attract Sales And Profits</a></h3>
                        <p class="text">A job ravenously while Far much that one rank beheld after outside....</p>
                        <a href="#" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- News Block -->
            <div class="news-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><img src="{{ asset('website-assets/images/resource/news-2.jpg')}}"
                                alt="" /></figure>
                    </div>
                    <div class="lower-content">
                        <ul class="post-meta">
                            <li><a href="#">August 31, 2021</a></li>
                            <li><a href="#">12 Comment</a></li>
                        </ul>
                        <h3><a href="blog-single.html">5 Tips For Your Job Interviews</a></h3>
                        <p class="text">A job ravenously while Far much that one rank beheld after outside....</p>
                        <a href="#" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- News Block -->
            <div class="news-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><img src="{{ asset('website-assets/images/resource/news-3.jpg')}}"
                                alt="" /></figure>
                    </div>
                    <div class="lower-content">
                        <ul class="post-meta">
                            <li><a href="#">August 31, 2021</a></li>
                            <li><a href="#">12 Comment</a></li>
                        </ul>
                        <h3><a href="blog-single.html">An Overworked Newspaper Editor</a></h3>
                        <p class="text">A job ravenously while Far much that one rank beheld after outside....</p>
                        <a href="#" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End News Section -->
@endsection