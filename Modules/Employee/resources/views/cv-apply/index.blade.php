@extends('employee::layouts.master')
@section('content')
    <!-- Dashboard -->
    <section class="user-dashboard">
        <div class="dashboard-outer">
            <div class="upper-title-box">
                <h3>Quản Lý Hồ Sơ Ứng Tuyển</h3>
                {{-- <div class="text">Ready to jump back in?</div> --}}
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Ls widget -->
                    <div class="ls-widget">
                        <div class="tabs-box">
                            <div class="widget-title">
                                <h4>Danh sách hồ sơ</h4>
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
                                                <th>Hồ sơ ứng tuyển</th>
                                                <th>Trạng thái hồ sơ</th>
                                                {{-- <th>Thao tác</th> --}}
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($cv_apllys as $cv)
                                                <tr>
                                                    <td>
                                                        <h6>{{ $cv->job->name }}</h6>
                                                    </td>
                                                    <td><a href="{{route('employee.cv.show',[$cv->cv->id,$cv->id])}}">{{ $cv->cv->name }}</a></td>
                                                    @if($cv->status == 1)
                                                        <td><span class="green-button">Đã Duyệt</span></td>
                                                    @elseif ($cv->status == 0)
                                                        <td><span class="danger-button">Chưa Duyệt</span></td>
                                                    @endif
                                                    <td>
                                                        <div class="option-box">
                                                            <ul class="option-list">
                                                                {{-- <li><a href="{{ route('employee.job.show', $job->id) }}" data-text="View Aplication"><span
                                                                            class="la la-eye"></span></a></li>
                                                                <li><a href="{{ route('employee.job.edit', $job->id) }}"
                                                                        data-text="Reject Aplication"><span
                                                                            class="la la-pencil"></span></a></li> --}}
                                                                {{-- <li>
                                                                    <a href="{{ route('employee.cv.delete', ['id' => $cv->id]) }}"
                                                                        onclick="confirmDelete(event)"
                                                                        data-text="Delete Application">
                                                                        <span class="la la-trash"></span>
                                                                    </a>
                                                                </li>

                                                                <script>
                                                                    function confirmDelete(event) {
                                                                        event.preventDefault(); // Ngăn chặn hành vi mặc định của liên kết

                                                                        if (confirm("Bạn có muốn xóa không?")) {
                                                                            console.log(123);
                                                                            var url = event.target.getAttribute('href');
                                                                            window.location.href = {{ route('employee.cv.delete', ['id' => $cv->id]) }}; // Chuyển hướng đến URL xóa
                                                                        }
                                                                    }
                                                                </script>
                                                            </ul> --}}
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
