@extends('admintheme::layouts.master')
@section('content')
    @include('admintheme::includes.globals.breadcrumb',[
        'page_title' => __('adminpost::general.title_create')
    ])
    <form action="{{ route('adminpost.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12 col-lg-8">
                @include('adminpost::includes.form-left')
            </div>
            <div class="col-12 col-lg-4">
                @include('adminpost::includes.form-right')
            </div>
        </div>
    </form>
    <!--end row-->
@endsection