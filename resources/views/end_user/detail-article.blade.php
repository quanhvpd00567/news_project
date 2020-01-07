@extends('end_user.layout.master')
@section('title')
    {{$article->title}}
@endsection
@section('content')
    <div class="leftbar_content">
        <div class="singlepost_area">
            <div class="singlepost_content">
                <a class="stuff_category" href="#">{{$article->category->category_name}}</a>
                |
                <a class="stuff_category" href="#"> {{$article->album->album_name}}</a>
                    <span class="stuff_date">
                        {{date('d', strtotime($article->created_at))}}
                        <strong>
                            {{date('m', strtotime($article->created_at))}}
                        </strong>
                        <strong>
                            {{date('Y', strtotime($article->created_at))}}
                        </strong>
                    </span>
                <h2>{{$article->title}}</h2>
                <img class="img-center" style="width: 60%; height: 150px" src="{{asset('images/' . $article->img_thumb)}}" alt="">
                <div id="content">
                    {!! $article->content !!}
                </div>
            </div>
        </div>

        @include('end_user.partials.modal')
    </div>
@endsection
@section('scripts')
    <script type="text/javascript">
        $('.buy-now').on('click', function () {
            $('#buy-now').modal('show')
        })
    </script>
@endsection
