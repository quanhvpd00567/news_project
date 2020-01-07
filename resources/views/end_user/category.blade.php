@extends('end_user.layout.master')
@section('title')
    {{$category_detail->category_name}}
@endsection
@section('content')
    <div class="leftbar_content">
        <h2> Category: {{ $category_detail->category_name }} @if(count($articles) == 0) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-----> No data @endif</h2>

        @if(count($articles) > 0)
            @foreach($articles as $article)
                <div class="single_stuff wow fadeInDown">
                    <?php
                    $isfree = $article->album->is_free == 1 ? true : false;
                    $url = route('article_detail', ['id' => $article->id]);
                    if ($isfree){
                        $url = 'javascript:void(0)';
                    }
                    ?>
                    <div class="single_stuff_img"> <a href="{{$url}}"><img style="width: 100%; height: 250px" src="{{asset('images/' . $article->img_thumb)}}" alt=""></a> </div>
                    <div class="single_stuff_article">
                        <div class="single_sarticle_inner">
                            <a class="stuff_category" href="#">{{$article->category->category_name}}</a>
                            |
                            <a class="stuff_category" href="#"> {{$article->album->album_name}}</a>
                            <div class="stuff_article_inner">
                                <span class="stuff_date">
                                    {{date('d', strtotime($article->created_at))}}
                                    <strong>
                                        {{date('m', strtotime($article->created_at))}}
                                    </strong>
                                    <strong>
                                        {{date('Y', strtotime($article->created_at))}}
                                    </strong>
                                </span>
                                <h2>

                                    <a href="{{$url}}">{{$article->title}}</a>
                                    @if($isfree)
                                        <p>
                                            <button type="button" class="btn btn-warning buy-now" data-toggle="modal">Buy now</button>
                                        </p>
                                    @endif
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif

        <div class="stuffpost_paginatinonarea wow slideInLeft">
            {{ $articles->links() }}
        </div>
        @include('end_user.partials.modal')
    </div>
@endsection
@section('scripts')
    <script type="text/javascript">
        $('.buy-now').on('click', function () {
            $('#buy-now').modal('show')
        })
        $('.buy-end').on('click', function () {
            alert('Đang phát triển')
            $('#buy-now').modal('hide')
        })
    </script>
@endsection
