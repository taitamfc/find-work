@extends('admintheme::layouts.master')
@section('content')
    @include('admintheme::includes.globals.breadcrumb',[
        'page_title' => 'Danh sách ứng viên',
        'actions' => [
            'add_new' => route($route_prefix.'create',['type'=>request()->type]),
        ]
    ])

    <!-- Item actions -->
    <form action="{{ route($route_prefix.'index') }}" method="get">
        <input type="hidden" name="type" value="{{ request()->type }}">
        <div class="row g-3">
            <div class="col-auto">
                <input class="form-control" name="name" type="text" placeholder="Tên" value="{{ request()->name }}">
            </div>
            <div class="col-auto">
                <input class="form-control" name="email" type="text" placeholder="Email" value="{{ request()->email }}">
            </div>
            <div class="col-auto">
                <input class="form-control" name="phone" type="text" placeholder="Số điện thoại" value="{{ request()->phone }}">
            </div>
            <div class="col-auto">
                <x-admintheme::form-status model="{{ $model }}" status="{{ request()->status }}" showAll="1"/>
            </div>
            <div class="col-auto">
                <div class="d-flex align-items-center gap-2 justify-content-lg-end">
                    <button class="btn btn-light px-4"><i class="bi bi-box-arrow-right me-2"></i>Tìm</button>
                </div>
            </div>
        </div>
    </form>

    <div class="card mt-4">
        <div class="card-body">
            <div class="product-table">
                <div class="table-responsive white-space-nowrap">
                    <table class="table align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>
                                    <input class="form-check-input" type="checkbox">
                                </th>
                                <th>Tên</th>
                                <th>Email</th>
                                <th>Số điện thoại</th>
                                <th>Ngày đăng ký</th>
                                <th>Trạng thái</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if( count( $items ) )
                            @foreach( $items as $item )
                            <tr>
                                <td>
                                    <input class="form-check-input" type="checkbox">
                                </td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->staff->phone }}</td>
                                <td>{{ $item->created_at_fm }}</td>
                                <td>{!! $item->status_fm !!}</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-light border dropdown-toggle dropdown-toggle-nocaret"
                                            type="button" data-bs-toggle="dropdown">
                                            <i class="bi bi-three-dots"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="{{ route($route_prefix.'show',['adminuser'=>$item->id,'type'=>request()->type]) }}">
                                                    Xem thông tin     
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="{{ route($route_prefix.'edit',['adminuser'=>$item->id,'type'=>request()->type]) }}">
                                                    Cập nhật       
                                                </a>
                                            </li>
                                            <li>
                                                <form action="{{ route($route_prefix.'destroy',[ 'adminuser'=>$item->id,'type'=>request()->type ]) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button onclick=" return confirm('{{ __('sys.confirm_delete') }}') " class="dropdown-item">
                                                        Xóa   
                                                    </button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        @else
                            <tr>
                               <td colspan="5" class="text-center">{{ __('sys.no_item_found') }}</td> 
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @if( count( $items ) )
        <div class="card-footer pb-0">
            @include('admintheme::includes.globals.pagination')
        </div>
        @endif
    </div>

@endsection