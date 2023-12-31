@extends('staff::dashboards.layouts.dashboard')
@section('content')
<section class="user-dashboard">
    <div class="dashboard-outer">
        <div class="upper-title-box">
            <h3>Chào, {{ auth()->user()->name }}!!</h3>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="ui-item">
                    <div class="left">
                        <i class="icon flaticon-briefcase"></i>
                    </div>
                    <div class="right">
                        <h4>{{ $userJobApplies->count() }}</h4>
                        <p>Việc làm đã ứng tuyển</p>

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
                        <p>Thông báo công việc</p>
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
                        <p>Tin nhắn</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="ui-item ui-green">
                    <div class="left">
                        <i class="icon la la-bookmark-o"></i>
                    </div>
                    <div class="right">
                        <!-- <h4>{{ optional(auth()->user()->userJobFavorites)->count() ?? 0 }}</h4> -->
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
                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                @endif

                <!-- applicants Widget -->
                <div class="applicants-widget ls-widget">
                    <div class="widget-title">
                        <h4>Việc làm đã ứng tuyển gần đây</h4>
                    </div>
                    <div class="widget-content">
                        <div class="row">
                            @foreach($userJobApplies as $userJobApplie)
                            <!-- Job Block -->
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                @include('job::includes.components.job-item',[
                                'job' => $userJobApplie->job,
                                'job_info' => true,
                                'job_other_info' => true,
                                'bookmark' => true,
                                ])
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