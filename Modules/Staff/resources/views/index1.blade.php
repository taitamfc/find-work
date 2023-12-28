@extends('staff::dashboards.layouts.dashboard')
@section('content')
<section class="user-dashboard">
    <div class="dashboard-outer">
        <div class="upper-title-box">
            <h3>Howdy, Jerome!!</h3>
            <div class="text">Ready to jump back in?</div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="ui-item">
                    <div class="left">
                        <i class="icon flaticon-briefcase"></i>
                    </div>
                    <div class="right">
                        <h4>22</h4>
                        <p>Applied Jobs</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="ui-item ui-red">
                    <div class="left">
                        <i class="icon la la-file-invoice"></i>
                    </div>
                    <div class="right">
                        <h4>9382</h4>
                        <p>Job Alerts</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="ui-item ui-yellow">
                    <div class="left">
                        <i class="icon la la-comment-o"></i>
                    </div>
                    <div class="right">
                        <h4>74</h4>
                        <p>Messages</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="ui-item ui-green">
                    <div class="left">
                        <i class="icon la la-bookmark-o"></i>
                    </div>
                    <div class="right">
                        <h4>32</h4>
                        <p>Shortlist</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">


            <div class="col-lg-7">
                <!-- Graph widget -->
                <div class="graph-widget ls-widget">
                    <div class="tabs-box">
                        <div class="widget-title">
                            <h4>Your Profile Views</h4>
                            <div class="chosen-outer">
                                <!--Tabs Box-->
                                <select class="chosen-select" style="display: none;">
                                    <option>Last 6 Months</option>
                                    <option>Last 12 Months</option>
                                    <option>Last 16 Months</option>
                                    <option>Last 24 Months</option>
                                    <option>Last 5 year</option>
                                </select>
                                <div class="chosen-container chosen-container-single chosen-container-single-nosearch"
                                    title="" style="width: 100%;"><a class="chosen-single">
                                        <span>Last 6 Months</span>
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
                            </div>
                        </div>

                        <div class="widget-content">
                            <div class="chartjs-size-monitor"
                                style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                <div class="chartjs-size-monitor-expand"
                                    style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                    <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                                </div>
                                <div class="chartjs-size-monitor-shrink"
                                    style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                    <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                                </div>
                            </div>
                            <canvas id="chart" width="757" height="340"
                                style="display: block; height: 272px; width: 606px;"
                                class="chartjs-render-monitor"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5">
                <!-- Notification Widget -->
                <div class="notification-widget ls-widget">
                    <div class="widget-title">
                        <h4>Notifications</h4>
                    </div>
                    <div class="widget-content">
                        <ul class="notification-list">
                            <li><span class="icon flaticon-briefcase"></span> <strong>Wade Warren</strong> applied for a
                                job <span class="colored">Web Developer</span></li>
                            <li><span class="icon flaticon-briefcase"></span> <strong>Henry Wilson</strong> applied for
                                a job <span class="colored">Senior Product Designer</span></li>
                            <li class="success"><span class="icon flaticon-briefcase"></span> <strong>Raul
                                    Costa</strong> applied for a job <span class="colored">Product Manager, Risk</span>
                            </li>
                            <li><span class="icon flaticon-briefcase"></span> <strong>Jack Milk</strong> applied for a
                                job <span class="colored">Technical Architect</span></li>
                            <li class="success"><span class="icon flaticon-briefcase"></span> <strong>Michel
                                    Arian</strong> applied for a job <span class="colored">Software Engineer</span></li>
                            <li><span class="icon flaticon-briefcase"></span> <strong>Ali Tufan</strong> applied for a
                                job <span class="colored">UI Designer</span></li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="col-lg-12">
                <!-- applicants Widget -->
                <div class="applicants-widget ls-widget">
                    <div class="widget-title">
                        <h4>Việc làm đã ứng tuyển gần đây</h4>
                    </div>
                    <div class="widget-content">
                        <div class="row">
                        @foreach($userJobApplies as $userJobApplie)
                    <!-- Job Block -->
                    <div class="job-block col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-box">
                            <div class="content">
                                <span class="company-logo"><img src="{{ asset('images/resource/company-logo/1-1.png') }}" alt=""></span>
                                <h4><a href="#">{{ $userJobApplie->job->name }}</a></h4>
                                <ul class="job-info">
                                    <li><span class="icon flaticon-briefcase"></span> {{ $userJobApplie->job->career }}</li>
                                    <li><span class="icon flaticon-map-locator"></span> {{ $userJobApplie->job->work_address }}</li>
                                    <li><span class="icon flaticon-clock-3"></span> {{ $userJobApplie->job->created_at->diffForHumans() }}</li>
                                    <li><span class="icon flaticon-money"></span> {{ $userJobApplie->job->salary }}</li>
                                </ul>
                                <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
                            </div>
                        </div>
                    </div>
                @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection