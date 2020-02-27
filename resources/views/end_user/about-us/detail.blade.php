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
                    <div class="breadcrumb">
                        <ul>
                            <li>
                                <a href="">
                                    {{trans('view.about-us.about-us')}}
                                </a>
                            </li>
                            <li>
                                {{App::isLocale('vi') ? $introduce->name : $introduce->name_en}}
                            </li>
                        </ul>
                    </div>
                    <div class="content-introduce" style="padding-top: 10px">
                        {!! App::isLocale('vi') ? $introduce->content : $introduce->content_en !!}
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

                    <div id="banner-bottom">
                        <img src="{{$introduce->banner}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('js/album-image.js') }}"></script>
@endsection
