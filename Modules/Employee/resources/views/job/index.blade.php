@extends('employee::layouts.master')
@section('content')
    <!-- Dashboard -->
    <section class="user-dashboard">
        <div class="dashboard-outer">
            <div class="upper-title-box">
                <h3>Quản Lý Công Việc</h3>
                {{-- <div class="text">Ready to jump back in?</div> --}}
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Ls widget -->
                    <div class="ls-widget">
                        <div class="tabs-box">
                            <div class="widget-title">
                                <h4>Danh sách công việc của tôi</h4>

                                <div class="chosen-outer">
                                    <!--Tabs Box-->
                                    <select class="chosen-select">
                                        <option>6 tháng trước</option>
                                        <option>12 tháng trước</option>
                                        <option>16 tháng trước</option>
                                        <option>24 tháng trước</option>
                                        <option>36 tháng trước</option>
                                    </select>
                                </div>
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
                                                <th>Tên công việc</th>
                                                <th>Ngành nghề</th>
                                                <th>Địa chỉ làm việc</th>
                                                <th>Mô tả công việc</th>
                                                <th>Yêu cầu công việc</th>
                                                <th>Lương</th>
                                                <th>Loại hình công việc</th>
                                                <th>Thao tác</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($jobs as $job)
                                                <tr>
                                                    <td>
                                                        <h6>{{ $job->name }}</h6>
                                                    </td>
                                                    <td>{{ $job->career }}</td>
                                                    <td>{{ $job->Work_address }}</td>
                                                    <td>{{ $job->Job_description }}</td>
                                                    <td>{{ $job->Job_requirements }}</td>
                                                    <td>{{ $job->wage }} VNĐ</td>
                                                    <td>{{ $job->type_work }}</td>
                                                    <td>
                                                        <div class="option-box">
                                                            <ul class="option-list">
                                                                <li><a href="" data-text="View Aplication"><span
                                                                            class="la la-eye"></span></a></li>
                                                                <li><a href="{{ route('employee.job.edit', $job->id) }}"
                                                                        data-text="Reject Aplication"><span
                                                                            class="la la-pencil"></span></a></li>
                                                                <li>
                                                                    <a href="{{ route('employee.job.delete', ['id' => $job->id]) }}"
                                                                        onclick="confirmDelete(event)"
                                                                        data-text="Delete Application">
                                                                        <span class="la la-trash"></span>
                                                                    </a>
                                                                </li>

                                                                <script>
                                                                    function confirmDelete(event) {
                                                                        event.preventDefault(); // Ngăn chặn hành vi mặc định của liên kết

                                                                        if (confirm("Bạn có muốn xóa không?")) {
                                                                            var url = event.target.getAttribute('href');
                                                                            window.location.href = url; // Chuyển hướng đến URL xóa
                                                                        }
                                                                    }
                                                                </script>
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
    <!-- End Dashboard -->
@endsection
