@extends('website.layouts.master')
@section('content')
    <style>
        .page-title {
            margin-top: 100px;
        }
        .main-header{
            background-color: white !important;
        }
        .content{
            padding-top: 10px;
        }
    </style>
    <!--Page Title-->
    
    <section class="job-detail-section">
        <!-- Upper Box -->
        <div class="upper-box">
            <div class="auto-container">
                <!-- Job Block -->
                <div class="job-block-seven">
                    <div class="inner-box">
                        <div class="content">
                            <span class="company-logo"><img src="images/resource/company-logo/5-1.png" alt=""></span>
                            <h4><a href="#">{{$job->name}}</a></h4>
                            <ul class="job-info">
                                <li><span class="icon flaticon-briefcase"></span>{{$job->career}}</li>
                                <li><span class="icon flaticon-map-locator"></span>{{$job->work_address}}</li>
                                {{-- <li><span class="icon flaticon-clock-3"></span> 11 hours ago</li> --}}
                                <li><span class="icon flaticon-money"></span> {{$job->wage_min}} - {{$job->wage_max}} VNĐ</li>
                            </ul>
                            <ul class="job-other-info">
                                @if ($job->type_work == 1)
                                    <li class="time">Toàn Thời Gian</li>
                                @else
                                    <li class="privacy">Bán Thời Gian</li>
                                @endif
                                {{-- <li class="privacy">Private</li>
                                <li class="required">Urgent</li> --}}
                            </ul>
                        </div>

                        <div class="btn-box">
                            <a href="{{route('website.aplication',['job_id' =>$job->id])}}" class="theme-btn btn-style-one">Nộp Hồ Sơ Ứng Tuyển</a>
                            {{-- <button class="bookmark-btn"><i class="flaticon-bookmark"></i></button> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="job-detail-outer">
            <div class="auto-container">
                <div class="row">
                    <div class="content-column col-lg-8 col-md-12 col-sm-12">
                        <div class="job-detail">
                            <h4>Mô Tả Công Việc</h4>
                            <p>
                                {{$job->job_description}}
                            </p>
                            <h4>Yêu Cầu Công việc</h4>
                            <p>
                                {{$job->job_requirements}}
                            </p>
                        </div>

                        <!-- Other Options -->
                        <div class="other-options">
                            <div class="social-share">
                                <h5>Share this job</h5>
                                <a href="#" class="facebook"><i class="fab fa-facebook-f"></i> Facebook</a>
                                <a href="#" class="twitter"><i class="fab fa-twitter"></i> Twitter</a>
                                <a href="#" class="google"><i class="fab fa-google"></i> Google+</a>
                            </div>
                        </div>

                        <!-- Related Jobs -->
                        {{-- <div class="related-jobs">
                            <div class="title-box">
                                <h3>Related Jobs</h3>
                                <div class="text">2020 jobs live - 293 added today.</div>
                            </div>

                            <!-- Job Block -->
                            <div class="job-block">
                                <div class="inner-box">
                                    <div class="content">
                                        <span class="company-logo"><img src="images/resource/company-logo/1-1.png"
                                                alt=""></span>
                                        <h4><a href="#">Software Engineer (Android), Libraries</a></h4>
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
                            <div class="job-block">
                                <div class="inner-box">
                                    <div class="content">
                                        <span class="company-logo"><img src="images/resource/company-logo/1-2.png"
                                                alt=""></span>
                                        <h4><a href="#">Recruiting Coordinator</a></h4>
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
                            <div class="job-block">
                                <div class="inner-box">
                                    <div class="content">
                                        <span class="company-logo"><img src="images/resource/company-logo/1-3.png"
                                                alt=""></span>
                                        <h4><a href="#">Product Manager, Studio</a></h4>
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

                        </div> --}}
                    </div>

                    <div class="sidebar-column col-lg-4 col-md-12 col-sm-12">
                        <aside class="sidebar">
                            <div class="sidebar-widget">
                                <!-- Job Overview -->
                                <h4 class="widget-title">Xem Chi Tiết Công Việc</h4>
                                <div class="widget-content">
                                    <ul class="job-overview">
                                        <li>
                                            <i class="icon icon-calendar"></i>
                                            <h5>Thời gian đăng tải:</h5>
                                            <span>1 giờ trước</span>
                                        </li>
                                        <li>
                                            <i class="icon icon-expiry"></i>
                                            <h5>Hạn nộp hồ sơ:</h5>
                                            <span>{{$job->deadline}}</span>
                                        </li>
                                        <li>
                                            <i class="icon icon-location"></i>
                                            <h5>Địa chỉ làm việc:</h5>
                                            <span>{{$job->work_address}}</span>
                                        </li>
                                        {{-- <li>
                                            <i class="icon icon-user-2"></i>
                                            <h5>:</h5>
                                            <span>Designer</span>
                                        </li> --}}
                                        {{-- <li>
                                            <i class="icon icon-clock"></i>
                                            <h5>Hours:</h5>
                                            <span>50h / week</span>
                                        </li> --}}
                                        {{-- <li>
                                            <i class="icon icon-rate"></i>
                                            <h5>Rate:</h5>
                                            <span>$15 - $25 / hour</span>
                                        </li> --}}
                                        <li>
                                            <i class="icon icon-salary"></i>
                                            <h5>Lương:</h5>
                                            <span>{{$job->wage_min}} - {{$job->wage_max}} VNĐ</span>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Map Widget -->
                                

                                <!-- Job Skills -->
                                {{-- <h4 class="widget-title">Job Skills</h4>
                                <div class="widget-content">
                                    <ul class="job-skills">
                                        <li><a href="#">app</a></li>
                                        <li><a href="#">administrative</a></li>
                                        <li><a href="#">android</a></li>
                                        <li><a href="#">wordpress</a></li>
                                        <li><a href="#">design</a></li>
                                        <li><a href="#">react</a></li>
                                    </ul>
                                </div> --}}
                            </div>

                            <div class="sidebar-widget company-widget">
                                <div class="widget-content">
                                    <div class="company-title">
                                        <div class="company-logo"><img src="images/resource/company-7.png"
                                                alt=""></div>
                                        <h5 class="company-name">Thông tin nhà tuyển dụng</h5>
                                        <a href="{{route('website.employee.show',$job->user->userEmployee->id)}}" class="profile-link">Xem hồ sơ nhà tuyển dụng</a>
                                    </div>

                                    <ul class="company-info">
                                        <li>Tên Công ty: <span>{{$job->user->userEmployee->company_name}}</span></li>
                                        <li>Số Điện Thoại: <span>{{$job->user->userEmployee->company_phone}}</span></li>
                                        <li>Địa Chỉ: <span>{{$job->user->userEmployee->company_address}}</span></li>
                                        <li>Email: <span>info@joio.com</span></li>
                                        <li>Website: <span>{{$job->user->userEmployee->company_website}}</span></li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Listing Page Section -->
@endsection
