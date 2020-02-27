<?php
use App\Http\Services\CommonService;
?>
@extends('end_user.layout.master')
@section('content')
    <div class="home-news-body-container container">
        <div class="home-news-body-row row">
            <div class="home-news-body-left col-sm-12 col-md-12">
                <div class="main-section row">

                    <div class="block-content">

                        @if(!is_null($homeData) && ((App::isLocale('vi') && !empty($homeData->text_block_1)) || App::isLocale('en') && !empty($homeData->text_block_1_en)))
                            <div class="home-latest-news home-body-section col-sm-12">
                                <div class="home-latest-news-title category-title text-center">
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
                            <div class="home-news-body-left col-sm-6 col-md-5">
                                <iframe width="100%" height="288"
                                        src="https://www.youtube.com/embed/EEj6hQrTusM" frameborder="0"
                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen=""></iframe>
                            </div>
                        </div>
                    </div>

                    @if(!is_null($homeData) && $homeData->isShowBlock_2 == Config::get('constant.status.isShow'))
                        <div class="block-content">
                            @if((App::isLocale('vi') && !empty($homeData->text_block_2)) || (App::isLocale('en') && !empty($homeData->text_block_2_en)))
                                <div class="home-latest-news home-body-section col-sm-12">
                                    <div class="home-latest-news-title category-title text-center">
                                        <span class="category-title-content">
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
                                    <div class="img-product missing-articles-item-image news-item-image">
                                        <figure>
                                            <div>
                                                <img src="{{$product->image_1}}" alt="img05">
                                            </div>
                                            <figcaption>
                                                <img src="{{$product->image_2}}" alt="Apple Cobbler">
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="missing-articles-item-content news-item-content">
                                        <div class="missing-articles-item-title">
                                            <h4 class="body-content limit-line-2">
                                                <a href="{{CommonService::createUrlProduct($product->id, $product->slug)}}">
                                                    {{ App::isLocale('vi') ? $product->name : $product->name_en }}
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
                    @if(!is_null($homeData) && $homeData->isShowBlock_3 == Config::get('constant.status.isShow'))
                        <div class="block-content">
                            @if((App::isLocale('vi') && !empty($homeData->text_block_3)) || (App::isLocale('en') && !empty($homeData->text_block_3_en)))
                                <div class="home-latest-news home-body-section col-sm-12">
                                    <div class="home-latest-news-title category-title text-center">
                                        <span class="category-title-content">
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

                    <div class="home-missing-articles home-body-section col-sm-12">
                        <div class="banner-full">
                            <img src="https://cheerfarm.com//files/Uploads/farmerdream/fsd_farmers_dream.png"
                                 alt="">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
