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
                                <h4>Danh sách công việc</h4>
                                <form class="form-search" action="{{ route('employee.job.index') }}">
                                    <div class="chosen-outer1">
                                        <input
                                            type="text" value="{{ request('name') }}" placeholder="Tên công việc..." name="name">
                                    </div>

                                    <div class="chosen-outer1">
                                        <label for="">Thời hạn từ :</label>
                                        <input
                                            type="date" value="{{ request('start_day') }}" placeholder="Tên công việc..." name="start_day" onchange="calculateDays()">
                                        <label for="">đến :</label>
                                        <input
                                            type="date" value="{{ request('end_day') }}" placeholder="Tên công việc..." name="end_day" onchange="calculateDays()">
                                    </div>


                                    <div class="chosen-outer1">
                                        <select name="status" class="chosen-select1">
                                            <option value="">Trạng thái</option>
                                            <option {{ request('status') == '1' ? 'selected' : '' }} value="1">Đang tuyển</option>
                                            <option {{ request('status') == '0' ? 'selected' : '' }} value="0">Dừng tuyển</option>
                                        </select>
                                    </div>
                                    <div style="background: #4906c7;" class="chosen-outer1">
                                        <button type="submit" style=" color: white;">Tìm kiếm</button>
                                    </div>
                                </form>
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
                                                <th>Số hồ sơ ứng tuyển</th>
                                                <th>Thời hạn</th>
                                                <th>Trạng thái</th>
                                                <th>Thao tác</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($jobs as $job)
                                                <tr>
                                                    <td>
                                                        <h6>{{ $job->name }}</h6>
                                                    </td>
                                                    <td>
                                                        <ul class="option-list">
                                                            <li>{{ $countID[$job->id] }} hồ sơ </li>
                                                            <li><a href="{{ route('employee.job.showjobcv', $job->id) }}"
                                                                    data-text="View Aplication"><span
                                                                        class="la la-eye"></span></a></li>
                                                        </ul>
                                                    </td>
                                                    <td>{{ date('d-m-Y', strtotime($job->start_day)) }} -
                                                        {{ date('d-m-Y', strtotime($job->end_day)) }}</td>
                                                    @if ($job->status == 1)
                                                        <td><span class="green-button">Đang tuyển</span></td>
                                                    @elseif ($job->status == 0)
                                                        <td><span class="danger-button">Dừng tuyển</span></td>
                                                    @endif
                                                    <td>
                                                        <div class="option-box">
                                                            <ul class="option-list">
                                                                <li><a href="{{ route('employee.job.show', $job->id) }}"
                                                                        data-text="View Aplication"><span
                                                                            class="la la-eye"></span></a></li>
                                                                <li><a href="{{ route('employee.job.edit', $job->id) }}"
                                                                        data-text="Reject Aplication"><span
                                                                            class="la la-pencil"></span></a></li>
                                                                <form action="{{ route('employee.job.delete', $job->id) }}"
                                                                    method="POST" id="deleteForm_{{ $job->id }}"
                                                                    onsubmit="confirmDelete(event, {{ $job->id }})">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <li>
                                                                        <button type="submit" class="delete-button"
                                                                            data-text="Delete Application">
                                                                            <span class="la la-trash"></span>
                                                                        </button>
                                                                    </li>
                                                                </form>

                                                                <script>
                                                                    function confirmDelete(event, jobId) {
                                                                        event.preventDefault();
                                                                        if (confirm("Bạn có muốn xóa không?")) {
                                                                            document.getElementById('deleteForm_' + jobId).submit();
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

@section('footer')
    <script>
        function calculateDays() {
            var startDate = new Date(document.querySelector('input[name="start_day"]').value);
            var endDate = new Date(document.querySelector('input[name="end_day"]').value);

            if (endDate < startDate) {
                // Nếu ngày hết hạn nhỏ hơn ngày bắt đầu, hiển thị thông báo lỗi
                alert("Ngày hết hạn phải lớn hơn hoặc bằng ngày bắt đầu");
                // Xóa giá trị ngày hết hạn
                document.querySelector('input[name="end_day"]').value = "";
            }
        }
    </script>
@endsection
