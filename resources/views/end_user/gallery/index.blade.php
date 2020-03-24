<?php
use App\Http\Services\CommonService;
?>
@extends('end_user.layout.master')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/gallery.css') }}">
    <link rel="stylesheet" href="{{ asset('css/album-image.css') }}">
@endsection
@section('content')
    <?php
        $banner = \App\Models\admin\Banner::where('type', 'screen_gallery')->first()
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
                <div class="main-section row">

                    <div class="breadcrumb">
                        <ul>
                            <li>{{trans('view.gallery.gallery')}}</li>
                        </ul>
                    </div>
                    <div class="row" id="content-gallery">
                            @if(count($images) > 0)
                                <?php
                            ?>
                                <div id="single-image">
                                    <img id="load-image" style=""src="{{$images->first()->url}}">
                                </div>
                                <div class="carousel slide" id="myCarousel">
                                    <div class="carousel-inner">
                                        @foreach($images as $key => $item)
                                            <div class="item @if($key == 0) active @endif">
                                                <div class="col-lg-3 col-xs-3 col-md-3 col-sm-3">
                                                    <img src="{{$item->url}}" class="img-responsive image-slide">
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i
                                            class="glyphicon glyphicon-chevron-left"></i></a>
                                    <a class="right carousel-control" href="#myCarousel" data-slide="next"><i
                                            class="glyphicon glyphicon-chevron-right"></i></a>
                                </div>
                            @endif
                        </div>
                    <div id="product_related">
                        <div class="breadcrumb" style="padding-top: 20px">
                            <ul>
                                <li>
                                    <h3 style="font-weight: 700">{{trans('view.commons.related product')}}</h3>
                                </li>
                            </ul>
                        </div>
                        @if(!is_null($productsRelated))
                            <div class="home-missing-articles home-body-section col-sm-12">
                                <div class="missing-articles-content row">
                                    <div class="grid cs-style-4">
                                        @foreach($productsRelated as $key => $item)
                                            <div class="missing-articles-item news-item col-sm-6 col-lg-4">
                                                <div class="item-product">
                                                    <div class="img-product missing-articles-item-image news-item-image">
                                                        <figure>
                                                            <div>
                                                                <a href="{{CommonService::createUrlProduct($item->id, $item->slug, \Config::get('constant.keys_url.product'))}}">
                                                                    <img src="{{$item->image_1}}" alt="{{ App::isLocale('vi') ? $item->name : $item->name_en }}">
                                                                </a>
                                                            </div>
                                                            <figcaption>
                                                                <a href="{{CommonService::createUrlProduct($item->id, $item->slug, \Config::get('constant.keys_url.product'))}}">
                                                                    <img src="{{$item->image_2}}" alt="{{ App::isLocale('vi') ? $item->name : $item->name_en }}">
                                                                </a>
                                                            </figcaption>
                                                        </figure>
                                                    </div>
                                                    <div class="missing-articles-item-content news-item-content">
                                                        <div class="missing-articles-item-title">
                                                            <h4 class="body-content limit-line-2">
                                                                <a href="{{CommonService::createUrlProduct($item->id, $item->slug, \Config::get('constant.keys_url.product'))}}">
                                                                    {{ App::isLocale('vi') ? $item->name : $item->name_en }}
                                                                </a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
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
