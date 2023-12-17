@extends('admintheme::layouts.master')
@section('content')
@include('admintheme::includes.globals.breadcrumb')
<form action="{{ route('admintaxonomy.update',$item->id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-12 col-lg-8">
            @include('admintaxonomy::includes.form-left')
        </div>
        <div class="col-12 col-lg-4">
        @include('admintaxonomy::includes.form-right')
        </div>
    </div>
</form>
<!--end row-->
@endsection