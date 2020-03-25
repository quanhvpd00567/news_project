<section id="header">
    <nav class="navbar nav-common-header navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <a class="navbar-brand" href="/">
                <img id="logo" style="height: 150px" class="d-inline-block align-top"  src="{{asset('/images/logo.png')}}" alt="">
            </a>
            <div>
                <div class="collapse navbar-collapse row" id="myNavbar">
                    <div class="col-sm-1"></div>
                    <ul class="nav navbar-nav col-sm-10">
                        @include('end_user.layout.partials._menu')
                    </ul>
                    <div class="navbar-text navbar-lang col-sm-1">
                        <a class="@if (App::isLocale('vi')) active-lang @endif" href="{!! route('change-language', ['vi']) !!}">Vn</a>
                        <a class="@if (App::isLocale('en')) active-lang @endif" href="{!! route('change-language', ['en']) !!}">En</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</section>
