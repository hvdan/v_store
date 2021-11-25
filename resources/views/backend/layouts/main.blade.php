<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link
        rel="shortcut icon"
        href="{{asset('backend/img/favicon.svg')}}"
        type="image/x-icon"
    />
    <title>Admin | V Store</title>

    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href="{{asset('backend/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('backend/css/lineicons.css')}}"/>
    <link rel="stylesheet" href="{{asset('backend/css/materialdesignicons.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('backend/css/fullcalendar.css')}}"/>
    <link rel="stylesheet" href="{{asset('backend/css/fullcalendar.css')}}"/>
    <link rel="stylesheet" href="{{asset('backend/css/main.css')}}"/>
    @yield('css')
</head>
<body>
<!-- ======== sidebar-nav start =========== -->
<aside class="sidebar-nav-wrapper">
    @include('backend.layouts.nav')
</aside>
<!-- ======== sidebar-nav end =========== -->

<!-- ======== main-wrapper start =========== -->
<main class="main-wrapper">
    <!-- ========== header start ========== -->
@include('backend.layouts.header')
<!-- ========== header end ========== -->

    <!-- ========== section start ========== -->
    <section class="section">
        @yield('content')
    </section>
    <!-- ========== section end ========== -->

    <!-- ========== footer start =========== -->
@include('backend.layouts.footer')
<!-- ========== footer end =========== -->
</main>
<!-- ======== main-wrapper end =========== -->

<!-- ========= All Javascript files linkup ======== -->

<script src="{{asset('backend/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('backend/js/Chart.min.js')}}"></script>
<script src="{{asset('backend/js/dynamic-pie-chart.js')}}"></script>
<script src="{{asset('backend/js/moment.min.js')}}"></script>
<script src="{{asset('backend/js/fullcalendar.js')}}"></script>
<script src="{{asset('backend/js/jvectormap.min.js')}}"></script>
<script src="{{asset('backend/js/world-merc.js')}}"></script>
<script src="{{asset('backend/js/polyfill.js')}}"></script>
<script src="{{asset('backend/js/main.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script src="{{asset('backend/js/admin/main.js')}}"></script>
@yield('script')
</body>
</html>
