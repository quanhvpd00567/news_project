<?php
use App\Http\Services\CommonService;
?>
@extends('end_user.layout.master')
@section('title')
    {{trans('view.manufacturer.manufacturer')}}
@endsection
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/manufacturer.css') }}">
@endsection
@section('meta')
{{--    <meta property="og:title" content="{{App::isLocale('vi') ? $introduce->name : $introduce->name_en}}">--}}
{{--    <meta property="og:description" content="{{App::isLocale('vi') ? $introduce->name : $introduce->name_en}}">--}}
{{--    <meta property="description" content="{{App::isLocale('vi') ? $introduce->name : $introduce->name_en}}">--}}
{{--    <meta name="og:image" content="{{URL::to('/') . $introduce->banner}}">--}}
{{--    <meta itemprop="image" content="{{URL::to('/') . $introduce->banner}}">--}}
{{--    <meta name="keywords" content="{{App::isLocale('vi') ? $introduce->keyword : $introduce->keyword_en}}}">--}}
{{--    <meta property="og:url" content="{{CommonService::createUrlProduct($introduce->id, $introduce->slug, 'about-us.detail')}}">--}}
    <meta content="INDEX,FOLLOW" name="robots" />
    <meta property="og:site_name" content="{{URL::to('/')}}" />
    <meta property="og:locale" content="{{App::isLocale('vi') ? 'vi_VN' : 'en_US'}}">
    <meta property="og:type" content="product">
@endsection
@section('styles')

@endsection

@section('content')

    <?php
    $banner = \App\Models\admin\Banner::where('type', 'screen_manufacturer')->first()
    ?>
    @if(!is_null($banner) && $banner->status == 1)
        <div class="banner-full">
            <img style="width: 100%" src="{{$banner->url}}" alt="">
        </div>
        <br>
    @endif

    <div class="home-news-body-container container">
        <div class="home-news-body-row row">
            <div class="home-news-body-left col-sm-12 col-md-12">
                <div class="main-section">
                    <div class="breadcrumb">
                        <ul>
                            <li>
                                {{trans('view.manufacturer.manufacturer')}}
                            </li>
                        </ul>
                    </div>
                    <div class="content-manufacturer" style="padding-top: 10px">
                        @if(count($manufacturers) == 0)
                            <h3 class="text-center">{{trans('view.commons.data_not_found')}}</h3>
                        @else
                            @foreach($manufacturers as $item)
                                <div class="home-latest-news-item news-item row">
                            <div class="col-md-1"></div>
                            <div class="home-latest-news-item-image news-item-image col-md-4 col-sm-12" style="height: 270px">
                                <a href="{{CommonService::createUrlProduct($item->id, $item->slug, \Config::get('constant.keys_url.manufacturer'), 'manufacturer.detail' )}}">
                                    <img src="{{asset($item->image)}}" alt="">
                                </a>
                            </div>
                            <div class="home-latest-news-item-content news-item-content col-md-6 col-sm-12">
                                <div class="latest-news-item-title">
                                    <h4 class="body-content limit-line-2">
                                        <a href="{{CommonService::createUrlProduct($item->id, $item->slug, \Config::get('constant.keys_url.manufacturer'), 'manufacturer.detail' )}}">
                                            {{App::isLocale('vi') ? $item->name : $item->name_en}}
                                        </a>
                                    </h4>
                                </div>
                                <div class="latest-news-item-body ">
                                    <div class="body-content limit-line-5">
                                        {{App::isLocale('vi') ? $item->description : $item->description_en}}
                                    </div>
                                    <div>
                                        <a href="{{CommonService::createUrlProduct($item->id, $item->slug, \Config::get('constant.keys_url.manufacturer'), 'manufacturer.detail' )}}" class="btn-view-more">
                                            {{trans('view.commons.btn-view-more')}}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                            @endforeach
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('js/album-image.js') }}"></script>
@endsection
