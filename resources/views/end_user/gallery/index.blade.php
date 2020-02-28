<?php
use App\Http\Services\CommonService;
?>
@extends('end_user.layout.master')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/gallery.css') }}">
    <link rel="stylesheet" href="{{ asset('css/album-image.css') }}">
@endsection
@section('content')
    <div class="home-news-body-container container">
        <div class="home-news-body-row row">
            <div class="home-news-body-left col-sm-12 col-md-12">
                <div class="main-section row">
                    <div id="banner-gallery">
                        <img style="width: 100%" src="{{asset('images/bg/gallery_banner.png')}}" alt="">
                    </div>
                    <div class="breadcrumb">
                        <ul>
                            <li>{{trans('view.gallery.gallery')}}</li>
                        </ul>
                    </div>
                    <div class="row" id="content-gallery">
                            @if(!is_null($images))
                                <div id="single-image">
                                    @for($i = 1; $i <= 10; $i++)
                                        @if(!empty($images["image_{$i}"]) && !is_null($images["image_{$i}"] ))
                                            <img id="load-image" style=""
                                                 src="{{$images["image_{$i}"]}}">
                                            <?php $hasImage = true ?>
                                            @break
                                        @endif
                                    @endfor
                                </div>
                                <div class="carousel slide" id="myCarousel">
                                    <div class="carousel-inner">
                                        <?php
                                        $active = 'active'
                                        ?>
                                        @for($i = 1; $i <= 10; $i++)
                                            @if(!empty($images["image_{$i}"]) && !is_null($images["image_{$i}"] ))
                                                <div class="item {{$active}}">
                                                    <div class="col-lg-3 col-xs-3 col-md-3 col-sm-3">
                                                        <img src="{{$images["image_{$i}"]}}" class="img-responsive image-slide">
                                                    </div>
                                                </div>
                                                <?php $active = '' ?>
                                            @endif
                                        @endfor
                                    </div>
                                    @if(isset($hasImage))
                                        <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i
                                                class="glyphicon glyphicon-chevron-left"></i></a>
                                        <a class="right carousel-control" href="#myCarousel" data-slide="next"><i
                                                class="glyphicon glyphicon-chevron-right"></i></a>
                                    @endif
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
                                                <div class="img-product missing-articles-item-image news-item-image">
                                                    <figure>
                                                        <div>
                                                            <img src="{{$item->image_1}}" alt="{{ App::isLocale('vi') ? $item->name : $item->name_en }}">
                                                        </div>
                                                        <figcaption>
                                                            <img src="{{$item->image_2}}" alt="{{ App::isLocale('vi') ? $item->name : $item->name_en }}">
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
