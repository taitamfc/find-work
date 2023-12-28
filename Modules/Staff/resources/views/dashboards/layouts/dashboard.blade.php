<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>

    <!-- Stylesheets -->
    <link href="{{ asset('website-assets/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{ asset('website-assets/css/style.css')}}" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    @yield('header')
</head>

<body>

    <div class="page-wrapper dashboard ">
        <!-- Preloader -->
        <!-- <div class="preloader"></div> -->
        <!-- Header Span -->
        <span class="header-span"></span>

        @include('staff::dashboards.includes.header')

        @include('staff::dashboards.includes.sidebar')
        @yield('content')

        <!-- Copyright -->
        <div class="copyright-text">
            <p>© 2021 Superio. All Right Reserved.</p>
        </div>
    </div><!-- End Page Wrapper -->
    <script src="{{ asset('website-assets/js/jquery.js')}}"></script>
    <script src="{{ asset('website-assets/js/popper.min.js')}}"></script>
    <script src="{{ asset('website-assets/js/chosen.min.js')}}"></script>
    <script src="{{ asset('website-assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('website-assets/js/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('website-assets/js/jquery.fancybox.js')}}"></script>
    <script src="{{ asset('website-assets/js/jquery.modal.min.js')}}"></script>
    <script src="{{ asset('website-assets/js/mmenu.polyfills.js')}}"></script>
    <script src="{{ asset('website-assets/js/mmenu.js')}}"></script>
    <script src="{{ asset('website-assets/js/appear.js')}}"></script>
    <script src="{{ asset('website-assets/js/ScrollMagic.min.js')}}"></script>
    <script src="{{ asset('website-assets/js/rellax.min.js')}}"></script>
    <script src="{{ asset('website-assets/js/owl.js')}}"></script>
    <script src="{{ asset('website-assets/js/wow.js')}}"></script>
    <script src="{{ asset('website-assets/js/script.js')}}"></script>
    <script src="{{ asset('website-assets/js/repeater.js')}}"></script>
    @yield('footer')
</body>

</html>