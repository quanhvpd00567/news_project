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
                        <img src="https://cheerfarm.com//files/Uploads/Site/cover/home_cover_1.png" alt="">
                    </div>
                    <div class="breadcrumb">
                        <ul>
                            <li>{{trans('view.contact.Contact')}}</li>
                        </ul>
                    </div>

                    <div class="row" id="content-gallery">
                        <div id="single-image">
                            <img id="load-image" style="width:100%"
                                 src="https://www.w3schools.com/howto/img_snow.jpg">
                        </div>
                        <div class="carousel slide" id="myCarousel">
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <div class="col-lg-3 col-xs-3 col-md-3 col-sm-3">
                                            <img  src="https://www.w3schools.com/howto/img_mountains.jpg" class="img-responsive image-slide">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-lg-3 col-xs-3 col-md-3 col-sm-3">
                                            <img  src="https://www.w3schools.com/howto/img_snow.jpg"
                                                  class="img-responsive image-slide">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-lg-3 col-xs-3 col-md-3 col-sm-3">
                                            <img src="https://www.w3schools.com/howto/img_snow.jpg" class="img-responsive image-slide">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-lg-3 col-xs-3 col-md-3 col-sm-3">
                                            <img  src="https://www.w3schools.com/howto/img_snow.jpg" class="img-responsive image-slide">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-lg-3 col-xs-3 col-md-3 col-sm-3">
                                            <img  src="https://www.w3schools.com/howto/img_snow.jpg" class="img-responsive image-slide">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-lg-3 col-xs-3 col-md-3 col-sm-3">
                                            <img  src="https://www.w3schools.com/howto/img_snow.jpg" class="img-responsive image-slide">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-lg-3 col-xs-3 col-md-3 col-sm-3">
                                            <img src="https://www.w3schools.com/howto/img_snow.jpg" class="img-responsive image-slide">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-lg-3 col-xs-3 col-md-3 col-sm-3">
                                            <img  src="https://www.w3schools.com/howto/img_snow.jpg" class="img-responsive image-slide">
                                        </div>
                                    </div>
                                </div>
                                <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i
                                        class="glyphicon glyphicon-chevron-left"></i></a>
                                <a class="right carousel-control" href="#myCarousel" data-slide="next"><i
                                        class="glyphicon glyphicon-chevron-right"></i></a>
                            </div>
                    </div>
                    <div class="breadcrumb">
                        <ul>
                            <li>{{trans('view.commons.related product')}}</li>
                        </ul>
                    </div>
                    <div class="home-missing-articles home-body-section col-sm-12">
                        <div class="missing-articles-content row">
                            <div class="grid cs-style-4">
                                <div class="missing-articles-item news-item col-sm-6 col-md-3">
                                    <div class="img-product missing-articles-item-image news-item-image">
                                        <figure>
                                            <div><img src="https://rikkei.vn/storage/cache/storage/ckfinder/images/Rikkei-Danang/1(4).jpg/1(4)-r-400-248.jpg" alt="img05"></div>
                                            <figcaption>
                                                <img src="https://www.w3schools.com/w3css/img_avatar3.png" alt="Apple Cobbler">
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="missing-articles-item-content news-item-content">
                                        <div class="missing-articles-item-title">
                                            <h4 class="body-content limit-line-2">
                                                Tân học viện chương trình kĩ sư công nghệ thông tin
                                            </h4>
                                        </div>
                                    </div>

                                </div>
                                <div class="missing-articles-item news-item col-sm-6 col-md-3">
                                    <div class="img-product missing-articles-item-image news-item-image">
                                        <figure>
                                            <div><img src="https://rikkei.vn/storage/cache/storage/ckfinder/images/Rikkei-Danang/1(4).jpg/1(4)-r-400-248.jpg" alt="img05"></div>
                                            <figcaption>
                                                <img src="https://www.w3schools.com/w3css/img_avatar3.png" alt="Apple Cobbler">
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="missing-articles-item-content news-item-content">
                                        <div class="missing-articles-item-title">
                                            <h4 class="body-content limit-line-2">
                                                Tân học viện chương trình kĩ sư công nghệ thông tin
                                            </h4>
                                        </div>
                                    </div>

                                </div>
                                <div class="missing-articles-item news-item col-sm-6 col-md-3">
                                    <div class="img-product missing-articles-item-image news-item-image">
                                        <figure>
                                            <div><img src="https://rikkei.vn/storage/cache/storage/ckfinder/images/Rikkei-Danang/1(4).jpg/1(4)-r-400-248.jpg" alt="img05"></div>
                                            <figcaption>
                                                <img src="https://www.w3schools.com/w3css/img_avatar3.png" alt="Apple Cobbler">
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="missing-articles-item-content news-item-content">
                                        <div class="missing-articles-item-title">
                                            <h4 class="body-content limit-line-2">
                                                Tân học viện chương trình kĩ sư công nghệ thông tin
                                            </h4>
                                        </div>
                                    </div>

                                </div>
                                <div class="missing-articles-item news-item col-sm-6 col-md-3">
                                    <div class="img-product missing-articles-item-image news-item-image">
                                        <figure>
                                            <div><img src="https://rikkei.vn/storage/cache/storage/ckfinder/images/Rikkei-Danang/1(4).jpg/1(4)-r-400-248.jpg" alt="img05"></div>
                                            <figcaption>
                                                <img src="https://www.w3schools.com/w3css/img_avatar3.png" alt="Apple Cobbler">
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="missing-articles-item-content news-item-content">
                                        <div class="missing-articles-item-title">
                                            <h4 class="body-content limit-line-2">
                                                Tân học viện chương trình kĩ sư công nghệ thông tin
                                            </h4>
                                        </div>
                                    </div>

                                </div>
                            </div>
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
