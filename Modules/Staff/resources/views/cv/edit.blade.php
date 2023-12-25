@extends('staff::dashboards.layouts.dashboard')
@section('content')
<!-- Dashboard -->
<section class="user-dashboard">
    <div class="dashboard-outer">
        <div class="upper-title-box">
            <h3>Profile!</h3>
            <div class="text">Ready to jump back in?</div>
        </div>
        @include('staff::cv.includes.card')

        <div class="row">
            <div class="col-lg-12">
                @include('staff::cv.tabs.'.$tab)
                <!-- Ls widget -->
            </div>
        </div>
    </div>
</section>
<!-- End Dashboard -->
@endsection