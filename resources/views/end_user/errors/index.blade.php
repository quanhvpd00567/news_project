<?php
use App\Http\Services\CommonService;
?>
@extends('end_user.layout.master')
@section('content')
    <style>
        .notfound h1{
            font-family: 'Titillium Web', sans-serif;
            font-size: 186px;
            font-weight: 900;
            text-transform: uppercase;
            background: url(https://colorlib.com/etc/404/colorlib-error-404-1/img/text.png);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-size: cover;
        }
        .notfound h2 {
            font-family: 'Titillium Web', sans-serif;
            font-size: 26px;
            font-weight: 700;
            margin: 0
        }
    </style>
    <div class="home-news-body-container container">
        <div class="home-news-body-row row">
            <div class="home-news-body-left col-sm-12 col-md-12">
                <div class="main-section row">
                    <div style="min-height: 400px; margin: 0 auto; padding-top: 100px" class="text-center notfound">
                        <h1 class="error">{{$code}}</h1>
                        <h2>{{$message}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
