@extends('staff::dashboards.layouts.dashboard')
@section('content')
<section class="user-dashboard">
    <div class="dashboard-outer">
        <div class="upper-title-box">
            <h3>Việc làm đã ứng tuyển</h3>
            <div class="text">Ready to jump back in?</div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <!-- Ls widget -->
                <div class="ls-widget">
                    <div class="tabs-box">
                        <div class="widget-title">
                            <h4>Công việc ứng tuyển của tôi</h4>
                        </div>
                        <div class="widget-content">
                            <div class="table-outer">
                                <table class="default-table manage-job-table">
                                    <thead>
                                        <tr>
                                            <th>Công Việc</th>
                                            <th>Ngày Ứng Tuyển</th>
                                            <th>Trạng thái</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($userJobApplies as $userJobApplie)
                                        <tr>
                                            <td>
                                                <!-- Job Block -->
                                                <div class="job-block">
                                                    <div class="inner-box">
                                                        <div class="content">
                                                            <span class="company-logo"><img
                                                                    src="images/resource/company-logo/1-1.png"
                                                                    alt=""></span>
                                                            <h4><a href="#">{{ $userJobApplie->job->name }}</a></h4>
                                                            <ul class="job-info">
                                                                <li><span class="icon flaticon-briefcase"></span>
                                                                {{ $userJobApplie->job->career }}</li>
                                                                <li><span class="icon flaticon-map-locator"></span>
                                                                    {{ $userJobApplie->job->work_address }}</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{ $userJobApplie->job->created_at->format('d M, Y') }}</td>
                                            <td class="status">{!! $userJobApplie->job->status_fm !!}</td>
                                            <td>
                                                <div class="option-box">
                                                    <ul class="option-list">
                                                        <li>
                                                            <a href="{{ route('website.jobs.show', $userJobApplie->job->id) }}"
                                                                data-text="View Application">
                                                                <span class="la la-eye"></span>
                                                            </a>
                                                        </li>
                                                        <form
                                                            action="{{ route('staff.job-applied.destroy', $userJobApplie->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                onclick="return confirm('Bạn có chắc chắn muốn xóa ứng tuyển này không?')"
                                                                data-text="Delete Application"><span
                                                                    class="la la-trash"></span></button>
                                                        </form>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
@endsection