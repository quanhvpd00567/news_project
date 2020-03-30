<?php
use App\Http\Services\CommonService;
?>
@extends('end_user.layout.master')
@section('content')
    <div>
        <?php
            $banners = \App\Models\admin\Banner::all();
        ?>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                @foreach($banners as $key => $item)
                    <li data-target="#myCarousel" data-slide-to="{{$key}}" class="@if($key==0) active @endif"></li>
                @endforeach
            </ol>
            <div class="carousel-inner">
                @foreach($banners as $key => $item)
                <div class="item @if($key==0) active @endif">
                    <div class="banner-full">
                        <img src="{{$item->url}}" style="width:100%;">
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="home-news-body-container container">
            <div class="home-news-body-row row">
                <div class="home-news-body-left col-sm-12 col-md-12">
                    <div class="main-section row">
                        <div class="block-content">
                            @if(!is_null($homeData) && ((App::isLocale('vi') && !empty($homeData->text_block_1)) || App::isLocale('en') && !empty($homeData->text_block_1_en)))
                                <div class="home-latest-news home-body-section col-sm-12" style="padding-bottom: 30px">
                                    <div class="home-latest-news-title category-title text-center" style="box-shadow: none">
                                        <span class="category-title-content">
                                            {{App::isLocale('vi') ? $homeData->text_block_1 : $homeData->text_block_1_en}}
                                        </span>
                                    </div>
                                </div>
                            @endif

                            <div class="row">
                                @if(!is_null($homeData) && ((App::isLocale('vi') && !empty($homeData->description)) || App::isLocale('en') && !empty($homeData->description_en)))
                                <div class="home-news-body-left col-sm-6 col-md-7">
                                    {!! App::isLocale('vi') ? $homeData->description : $homeData->description_en !!}
                                </div>
                                @endif
                                <div class="home-news-body-left col-sm-6 col-md-5" id="youtubeLink">
                                </div>
                            </div>
                        </div>
                        @if(!is_null($homeData) && $homeData->isShowBlock_2 == Config::get('constant.status.isShow'))
                            <div class="block-content">
                                @if((App::isLocale('vi') && !empty($homeData->text_block_2)) || (App::isLocale('en') && !empty($homeData->text_block_2_en)))
                                    <div class="home-latest-news home-body-section col-sm-12">
                                        <div class="home-latest-news-title category-title text-center">
                                            <span class="category-title-content font-weight-bold">
                                                {{App::isLocale('vi') ? $homeData->text_block_2 : $homeData->text_block_2_en}}
                                            </span>
                                        </div>
                                    </div>
                                @endif
                                @if((App::isLocale('vi') && !empty($homeData->content_block_2)) || (App::isLocale('en') && !empty($homeData->content_block_2_en)))
                                    <div class="row">
                                        <div class="home-latest-news home-body-section col-sm-12">
                                            {!! App::isLocale('vi') ? $homeData->content_block_2 : $homeData->content_block_2_en !!}
                                        </div>
                                    </div>
                                @endif
                            </div>
                        @endif
                        @if(!is_null($products))
                            <div class="home-missing-articles home-body-section col-sm-12">
                            <div class="missing-articles-content row">
                                <div class="grid cs-style-4">
                                    @foreach($products as $key => $product)
                                        <div class="missing-articles-item news-item col-sm-6 col-lg-4">
                                            <div class="item-product">
                                                <div class="img-product missing-articles-item-image news-item-image">
                                                    <figure>
                                                        <div class="img-1">
                                                            <a href="{{CommonService::createUrlProduct($product->id, $product->slug, \Config::get('constant.keys_url.product'))}}">
                                                                <img src="{{$product->image_1}}" alt="{{ App::isLocale('vi') ? $product->name : $product->name_en }}">
                                                            </a>
                                                        </div>
                                                        <div class="img-2">
                                                            <a href="{{CommonService::createUrlProduct($product->id, $product->slug, \Config::get('constant.keys_url.product'))}}">
                                                                <img src="{{$product->image_2}}" alt="{{ App::isLocale('vi') ? $product->name : $product->name_en }}">
                                                            </a>
                                                        </div>
                                                    </figure>
                                                </div>
                                                <div class="missing-articles-item-content news-item-content">
                                                    <div class="missing-articles-item-title">
                                                        <h4 class="body-content limit-line-2">
                                                            <a href="{{CommonService::createUrlProduct($product->id, $product->slug, \Config::get('constant.keys_url.product'))}}">
                                                                {{ App::isLocale('vi') ? $product->name : $product->name_en }}
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
                        @if(!is_null($homeData) && $homeData->isShowBlock_3 == Config::get('constant.status.isShow'))
                            <div class="block-content">
                                @if((App::isLocale('vi') && !empty($homeData->text_block_3)) || (App::isLocale('en') && !empty($homeData->text_block_3_en)))
                                    <div class="home-latest-news home-body-section col-sm-12" style="margin-top: 30px;">
                                        <div class="home-latest-news-title category-title text-center">
                                            <span class="category-title-content font-weight-bold">
                                                {{App::isLocale('vi') ? $homeData->text_block_3 : $homeData->text_block_3_en}}
                                            </span>
                                        </div>
                                    </div>
                                @endif
                                @if((App::isLocale('vi') && !empty($homeData->content_block_3)) || (App::isLocale('en') && !empty($homeData->content_block_3_en)))
                                    <div class="row">
                                        <div class="home-latest-news home-body-section col-sm-12">
                                            {!! App::isLocale('vi') ? $homeData->content_block_3 : $homeData->content_block_3_en !!}
                                        </div>
                                    </div>
                                @endif
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @if(!is_null($homeData) && !empty($homeData->banner))
            <div class="banner-full">
                <img width="100%" src="{{$homeData->banner}}">
            </div>
        @endif
    </div>
@endsection
@if(!is_null($homeData->video) && !empty($homeData->video) )
    @section('scripts')
        <script>
            $(document).ready(function () {
                $videoId = "{{$homeData->video}}"
            })
        </script>
        <script src="{{ asset('js/youtube.js') }}"></script>
    @endsection
@endif
