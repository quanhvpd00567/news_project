<!DOCTYPE html>
<html lang="en">
<?php
$settingCustom = \App\Models\Setting::first();
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('meta')
    <title> @yield('title') {{is_null($settingCustom) ? null : $settingCustom->name}}</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="shortcut icon" type="image/png" href="{{asset('images/favicon.png')}}"/>
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('lib/slick/cs/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/slick/cs/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/external.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hover-image.css') }}">
    <script src="{{ asset('js/demo.js') }}"></script>
    @yield('styles')
        <style>
            .bg-body{
                @if(!is_null($settingCustom) && !empty($settingCustom->background_img))
                    background-image: url("{{asset($settingCustom->background_img)}}");
                @endif
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }
        </style>
</head>
<body class="bg-body">
<div class="home-wrapper" id="homeWrapper">
    <!-- header -->
    <div class="container">
        @include('end_user.layout.partials._header')
    </div>
    <hr id="border-header">
    <!-- end header  -->
    <section class="news-section home-news-body" id="cheerfarm-content">
        @yield('content')
    </section>
    @include('end_user.layout.partials._buttons')
    {{--    footer--}}
    @include('end_user.layout.partials._footer')
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="{{ asset('lib/slick/js/slick.min.js') }}"></script>
<script src="{{ asset('js/common.js') }}"></script>
<script src="{{ asset('js/home.js') }}"></script>
<script src="{{ asset('js/button-right.js') }}"></script>
@yield('scripts')
<script>
    $(document).ready(function () {

        $(window).on("scroll", function() {
            var scrollPosition =  $(window).scrollTop();
            if(scrollPosition > 100){
                $('#border-header').show()
            }else{
                $('#border-header').hide()
            }
        });
    })
</script>
</body>
</html>
