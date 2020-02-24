<section id="header">
    <nav class="navbar navbar-inverse nav-common-header navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <a class="navbar-brand" href="#">
                <img id="logo" class="d-inline-block align-top"  src="{{asset('/images/logo.png')}}" alt="">
            </a>
            <div>
{{--                <div>--}}
{{--                    <ul>--}}
{{--                        <li>a</li>--}}
{{--                        <li>c</li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
                <div class="collapse navbar-collapse row" id="myNavbar">
                    <ul class="nav navbar-nav col-sm-10">
                        <li><a href="#" class="active">Trang chủ</a></li>
                        @include('end_user.layout.partials._menu')
                        <li><a href="#">Gallery</a></li>
                        <li><a href="#">Liên hệ</a></li>
                    </ul>
                    <div class="navbar-text navbar-lang col-sm-2">
                        <a class="@if (App::isLocale('en')) active-lang @endif" href="{!! route('change-language', ['en']) !!}">En</a>
                        <a class="@if (App::isLocale('vi')) active-lang @endif" href="{!! route('change-language', ['vi']) !!}">Vn</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</section>
