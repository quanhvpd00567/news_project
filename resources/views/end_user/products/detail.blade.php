<?php
use App\Http\Services\CommonService;
?>
@extends('end_user.layout.master')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/gallery.css') }}">
    <link rel="stylesheet" href="{{ asset('css/album-image.css') }}">
@endsection

@section('meta')
    <meta property="og:title" content="{{App::isLocale('vi') ? $product->name : $product->name_en}}">
    <meta property="og:description" content="{{App::isLocale('vi') ? $product->description : $product->description_en}}">
    <meta property="description" content="{{App::isLocale('vi') ? $product->description : $product->description_en}}">
    <meta name="og:image" content="{{URL::to('/') . $product->image_1}}">
    <meta itemprop="image" content="{{URL::to('/') . $product->image_1}}">
    <meta name="keywords" content="{{App::isLocale('vi') ? $product->keyword : $product->keyword_en}}}">
    <meta property="og:url" content="{{CommonService::createUrlProduct($product->id, $product->slug)}}">
    <meta content="INDEX,FOLLOW" name="robots" />
    <meta property="og:site_name" content="{{URL::to('/')}}" />
    <meta property="og:locale" content="{{App::isLocale('vi') ? 'vi_VN' : 'en_US'}}">
    <meta property="og:type" content="product">
@endsection

@section('content')
    <div class="home-news-body-container container">
        <div class="home-news-body-row row">
            <div class="home-news-body-left col-sm-12 col-md-12">
                <div class="main-section">
                    <div class="breadcrumb">
                        <ul>
                            <li>
                                <a href="">
                                    {{trans('view.category.Product')}}
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    {{App::isLocale('vi') ? $product->category->name : $product->category->name_en}}
                                </a>
                            </li>
                            <li>
                                {{App::isLocale('vi') ? $product->name : $product->name_en}}
                            </li>
                        </ul>
                    </div>

                    <div class="content-product">
                        <div class="row" id="content-gallery">

                            <div id="title" class="text-center">
                                <h2>{{App::isLocale('vi') ? $product->name : $product->name_en}}</h2>
                            </div>

                            <div id="description_product">
                                {{App::isLocale('vi') ? $product->description : $product->description_en}}
                            </div>
                            @if(!is_null($images))
                                    <div id="single-image">
                                        @for($i = 1; $i <= 10; $i++)
                                            @if(!empty($images["image_{$i}"]) && !is_null($images["image_{$i}"] ))
                                                <img id="load-image" style=""
                                                     src="{{$images["image_{$i}"]}}">
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
                                        <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i
                                                class="glyphicon glyphicon-chevron-left"></i></a>
                                        <a class="right carousel-control" href="#myCarousel" data-slide="next"><i
                                                class="glyphicon glyphicon-chevron-right"></i></a>
                                    </div>
                            @endif
                        </div>
                        <div id="list-tabs">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#description">{{trans('view.product.description')}}</a></li>
                                <li><a data-toggle="tab" href="#nutrition">{{trans('view.product.nutrition')}}</a></li>
                                <li><a data-toggle="tab" href="#effect">{{trans('view.product.effect')}}</a></li>
                            </ul>

                            <div class="tab-content">
                                <div id="description" class="tab-pane fade in active">
                                    {!! App::isLocale('vi') ? $product->content : $product->content_en  !!}
                                </div>
                                <div id="nutrition" class="tab-pane fade">
                                    {!! App::isLocale('vi') ? $product->nutrition : $product->nutrition_en !!}
                                </div>
                                <div id="effect" class="tab-pane fade">
                                    {!! App::isLocale('vi') ? $product->purpose : $product->purpose_en !!}
                                </div>
                            </div>
                        </div>

                        <div id="product_related">
                            @if(!is_null($productsRelated))
                                <div class="home-missing-articles home-body-section col-sm-12">
                                    <div class="missing-articles-content row">
                                        <div class="grid cs-style-4">
                                            @foreach($productsRelated as $key => $item)
                                                <div class="missing-articles-item news-item col-sm-6 col-lg-4">
                                                    <div class="img-product missing-articles-item-image news-item-image">
                                                        <figure>
                                                            <div>
                                                                <img src="{{$item->image_1}}" alt="img05">
                                                            </div>
                                                            <figcaption>
                                                                <img src="{{$item->image_2}}" alt="Apple Cobbler">
                                                            </figcaption>
                                                        </figure>
                                                    </div>
                                                    <div class="missing-articles-item-content news-item-content">
                                                        <div class="missing-articles-item-title">
                                                            <h4 class="body-content limit-line-2">
                                                                <a href="{{CommonService::createUrlProduct($item->id, $item->slug)}}">
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
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('js/album-image.js') }}"></script>
@endsection
