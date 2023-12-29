@extends('admintheme::layouts.master')
@section('content')
@include('admintheme::includes.globals.breadcrumb',[
'page_title' => 'Chi tiết CV',
'actions' => [
//'add_new' => route($route_prefix.'create',['type'=>request()->type]),
//'export' => route($route_prefix.'export'),
]
])

<!-- Item actions -->
<div class="card mt-4">
    <div class="card-body">
        <div class="product-table">
            <table class="table align-middle table-borderless">
                <tbody class="table-light">
                    <div class="row">
                        <tr class="col-6">
                            <th>Tên CV:</th>
                            <th>Tên</th>
                        </tr>
                        <tr class="col-6">
                            <td>{{ $item->cv_file }}</td>
                            <td>{{ $item->name }}</td>
                        </tr>
                        <tr class="col-6">
                            <th>Email:</th>
                            <th>Số điện thoại:</th>
                        </tr>
                        <tr class="col-6">
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->phone }}</td>
                        </tr>
                        <tr class="col-6">
                            <th>Ngày sinh:</th>
                            <th>Giới tính:</th>
                        </tr>
                        <tr class="col-6">
                            <td>{{ $item->birthdate }}</td>
                            <td>{{ $item->gender }}</td>
                        </tr>
                        <tr class="col-6">
                            <th>Thành phố:</th>
                            <th>Địa chỉ:</th>
                        </tr>
                        <tr class="col-6">
                            <td>{{ $item->city }}</td>
                            <td>{{ $item->address }}</td>
                        </tr>
                        <tr class="col-6">
                            <th>Chức vụ mong muốn:</th>
                            <th>Cấp bậc mong muốn:</th>
                        </tr>
                        <tr class="col-6">
                            <td>{{ $item->desired_position }}</td>
                            <td>{{ $item->desired_rank }}</td>
                        </tr>
                        <tr class="col-6">
                            <th>Loại hình làm việc mong muốn:</th>
                            <th>Ngành nghề mong muốn:</th>
                        </tr>
                        <tr class="col-6">
                            <td>{{ $item->employment_type }}</td>
                            <td>{{ $item->industry }}</td>
                        </tr>
                        <tr class="col-6">
                            <th>Địa điểm làm việc mong muốn:</th>
                            <th>Mức lương mong muốn:</th>
                        </tr>
                        <tr class="col-6">
                            <td>{{ $item->desired_location }}</td>
                            <td>{{ $item->desired_salary }}</td>
                        </tr>
                        <tr class="col-6">
                            <th>Mục tiêu nghề nghiệp:</th>
                        </tr>
                        <tr class="col-6">
                            <td>{{ $item->career_objective }}</td>
                        </tr>
                    </div>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection