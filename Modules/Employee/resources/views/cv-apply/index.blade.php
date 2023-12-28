@extends('employee::layouts.master')
@section('content')
<!-- Dashboard -->
<section class="user-dashboard">
    <div class="dashboard-outer">
        <div class="upper-title-box">
            <h3>Tất Cả Hồ Sơ Ứng Tuyển</h3>
            <div class="text"></div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <!-- Ls widget -->
                <div class="ls-widget">
                    <div class="tabs-box">
                        <div class="widget-title">
                            <h4>Danh sách</h4>

                            <div class="chosen-outer">
                                <!--Tabs Box-->
                                <select class="chosen-select">
                                    <option>Công việc khác</option>
                                    <option>Last 12 Months</option>
                                    <option>Last 16 Months</option>
                                    <option>Last 24 Months</option>
                                    <option>Last 5 year</option>
                                </select>

                                <!--Tabs Box-->
                                <select class="chosen-select">
                                    <option>Trạng thái hồ sơ</option>
                                    <option>Duyệt</option>
                                    <option>Chưa duyệt</option>
                                </select>
                            </div>
                        </div>

                        <div class="widget-content">

                            <div class="tabs-box">
                                <div class="aplicants-upper-bar">
                                    <h6></h6>
                                    <ul class="aplicantion-status tab-buttons clearfix">
                                        <li class="tab-btn active-btn totals" data-tab="#totals">Tổng số hồ sơ: {{$param_count['count_job']}}</li>
                                        <li class="tab-btn approved" data-tab="#approved">Đã duyệt: {{$param_count['count_cv_appled']}}</li>
                                        <li class="tab-btn rejected" data-tab="#rejected">Chưa duyệt: {{$param_count['count_not_applly']}}</li>
                                    </ul>
                                </div>

                                <div class="tabs-content">
                                    <!--Tab-->
                                    <div class="tab active-tab" id="totals">
                                        <div class="row">
                                            @foreach ($cv_apllys as $cv_aplly)
                                                <div class="candidate-block-three col-lg-6 col-md-12 col-sm-12">
                                                    <div class="inner-box">
                                                        <div class="content">
                                                            <figure class="image"><img src="images/resource/candidate-1.png"
                                                                    alt=""></figure>
                                                            <h4 class="name"><a href="#">{{$cv_aplly->cv->name}}</a></h4>
                                                            <ul class="candidate-info">
                                                                <li class="designation">{{$cv_aplly->cv->desired_rank}}</li>
                                                                <li><span class="icon flaticon-map-locator"></span> {{$cv_aplly->cv->city}}
                                                                    </li>
                                                                
                                                            </ul>
                                                            <ul class="post-tags">
                                                                @if ($cv_aplly->status == 1)
                                                                <div class="green-button">Chưa duyệt</div>
                                                                @else
                                                                    <div class="danger-button">Chưa duyệt</div>
                                                                @endif
                                                            </ul>
                                                        </div>
                                                        <div class="option-box">
                                                            <ul class="option-list">
                                                                <li><a href="{{route('employee.cv.show',[$cv_aplly->id,$cv_aplly->cv->id])}}" data-text="View Aplication"><span
                                                                            class="la la-eye"></span></a></li>
                                                                <li><a href="{{route('employee.cvs.delete',$cv_aplly->id)}}" data-text="Delete Aplication"><span
                                                                            class="la la-trash"></span></a href=""></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                            <!-- Candidate block three -->
                                        </div>
                                    </div>

                                    <!--Tab-->
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Dashboard -->

@endsection