@extends('employee::layouts.master')
@section('content')
<!-- Dashboard -->
<section class="user-dashboard">
    <div class="dashboard-outer">
        <div class="upper-title-box">
            <h3>Quản Lý Giao Dịch</h3>
            {{-- <div class="text">Ready to jump back in?</div> --}}
        </div>

        <div class="row">
            <div class="col-lg-12">
                <!-- Ls widget -->
                <div class="ls-widget">
                    <div class="tabs-box">
                        <div class="widget-title d-flex justify-content-between">
                            <h4>Danh sách giao dịch của tôi</h4>
                            <a class="btn btn-primary" href=" {{ route($route_prefix.'create') }} ">Nạp tiền</a>
                        </div>
                        <div class="widget-content">
                            <div class="table-outer">
                                <table class="default-table manage-job-table">
                                    <thead>
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
                                        <tr>
                                            <th>Ngày giao dịch</th>
                                            <th>Thể loại</th>
                                            <th>Số tiền</th>
                                            <th>Trạng thái</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($items as $item)
                                        <tr>
                                            <td>{{ $item->created_at->format("d-m-y") }}</td>
                                            <td>{{ $item->type }}</td>
                                            <td>{{ number_format($item->amount, 0, ',', '.') }} đ</td>
                                            <td>{!! $item->status_fm !!}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                @include('admintheme::includes.globals.pagination')
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