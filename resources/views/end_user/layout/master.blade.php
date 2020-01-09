<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/end_user/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/end_user/font.css') }}">
    <link rel="stylesheet" href="{{ asset('css/end_user/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/end_user/structure.css') }}">
    <link rel="stylesheet" href="{{ asset('css/datepicker/bootstrap-datepicker.min.css') }}">
    <title>Trang News - @yield('title')</title>
    <style>
        .datepicker{
            background-color: #ffffff;
        }
    </style>
</head>
<body>
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>

<header id="header">
    <div class="container">
        <!-- include nav -->
        @include('end_user.partials.nav')
        <form id="searchForm">
            @if(Auth::check())
                <a id="profile" href="{{route('profile_info')}}">Welcome: {{Auth::user()->full_name}}</a>
                <a href="/logout" class="btn btn-warning">Logout</a>
            @else
                <a href="/login" class="btn btn-primary">Login</a>
                <a href="" class="btn btn-primary">Register</a>
            @endif
        </form>

    </div>
</header>

<section id="contentbody">
    <div class="container">
        <div class="row">
            <div class=" col-sm-12 col-md-10 col-lg-10">
                <div class="row">
                    @yield('content')
                </div>
            </div>

{{--        content right--}}
            @include('end_user.partials.content-right')

        </div>
    </div>
</section>

<!-- include footer -->
@include('end_user.partials.footer')



<!-- jQuery 3 -->
<script src="{{ asset('css/end_user/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('css/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('css/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('css/end_user/wow.min.js') }}"></script>
<script src="{{ asset('css/end_user/custom.js') }}"></script>
@yield('scripts')
</body>
</html>
