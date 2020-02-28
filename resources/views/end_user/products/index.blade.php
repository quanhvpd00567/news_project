<?php
use App\Http\Services\CommonService;
?>
@extends('end_user.layout.master')
@section('meta')
{{--    <meta property="og:title" content="{{App::isLocale('vi') ? $product->name : $product->name_en}}">--}}
{{--    <meta property="og:description" content="{{App::isLocale('vi') ? $product->description : $product->description_en}}">--}}
{{--    <meta property="description" content="{{App::isLocale('vi') ? $product->description : $product->description_en}}">--}}
{{--    <meta name="og:image" content="{{URL::to('/') . $product->image_1}}">--}}
{{--    <meta itemprop="image" content="{{URL::to('/') . $product->image_1}}">--}}
{{--    <meta name="keywords" content="{{App::isLocale('vi') ? $product->keyword : $product->keyword_en}}}">--}}
{{--    <meta property="og:url" content="{{CommonService::createUrlProduct($product->id, $product->slug)}}">--}}
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
                    <div class="content-product">
                        @if(count($categories) > 0)
                            @foreach($categories as $category)
                                @if(count($category->products) > 0)
                                    <div class="breadcrumb">
                                        <ul>
                                            <li>
                                                {{App::isLocale('vi') ? $category->name : $category->name_en }}
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="home-missing-articles home-body-section col-sm-12">
                                            <div class="missing-articles-content row">
                                                <div class="grid cs-style-4">
                                                    @foreach($category->products as $key => $item)
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
                                                                        <a href="{{CommonService::createUrlProduct($item->id, $item->slug, \Config::get('constant.keys_url.product'))}}">
                                                                            {{ App::isLocale('vi') ? $item->name : $item->name_en }}
                                                                        </a>
                                                                    </h4>
                                                                    <div class="limit-line-2">
                                                                        {{App::isLocale('vi') ? $item->description : $item->description_en }}
                                                                    </div>
                                                                    <div class="right">
                                                                        <a href="{{CommonService::createUrlProduct($item->id, $item->slug, \Config::get('constant.keys_url.product'))}}" class="btn btn-view-more">{{trans('view.commons.btn-view-more')}}</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                @endif
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
