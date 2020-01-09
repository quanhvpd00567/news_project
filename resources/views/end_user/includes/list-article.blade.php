
@if(count($articles) > 0)
    @foreach($articles as $article)
        <div class="single_stuff wow fadeInDown">
            <?php
                $isFree = $article->album->is_free == 1 ? true : false;

                $url = route('article_detail', ['id' => $article->id]);
                $isShow = true;
                if (Auth::check()){
                    $currentUser = Auth::user();
                    if($currentUser->is_member()){
                        $isBuy = \App\Models\Order::buy_success($article->album->id);
                        if (!$isBuy){
                            $isShow = false;
                            $url = 'javascript:void(0)';
                        }
                    }
                }else{
                    if (!$isFree){
                        $isShow = false;
                        $url = 'javascript:void(0)';
                    }
                }
            ?>
            <div class="single_stuff_img"> <a href="{{$url}}"><img style="width: 100%; height: 250px" src="{{asset('images/' . $article->img_thumb)}}" alt=""></a> </div>
            <div class="single_stuff_article">
                <div class="single_sarticle_inner">
                    <a class="stuff_category" href="{{route('article_by_category', ['id' => $article->category_id])}}">{{$article->category->category_name}}</a>
                    |
                    <a class="stuff_category" href="{{route('article_by_album', ['id' => $article->album_id])}}"> {{$article->album->album_name}}</a>
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
                            @if(!$isShow)
                                <p>
                                    <button type="button" data-album-id="{{$article->album_id}}" data-album-name="{{$article->album->album_name}}" class="btn btn-warning buy-now" data-toggle="modal">Buy now</button>
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
@include('end_user.includes.modal')

@section('scripts')
    <script type="text/javascript">
        let album_id = null
        $('.buy-now').on('click', function () {
            album_id = $(this).attr('data-album-id');
            let album_name = $(this).attr('data-album-name');
            $('#show_album_name').text(album_name);
            $('#modal_confirm').modal('show')
        });
        $('.buy-album').on('click', function () {
            if(album_id != null){
                $.ajax({
                    type: 'POST',
                    url: "{{route('buy')}}",
                    data:{
                        album_id: album_id,
                        "_token": "{{ csrf_token() }}",
                    },
                    dataType: 'json',
                    success: function(resultData) {
                        if(resultData.is_login){
                            window.location.href = "{{route('profile_history')}}"
                        }else{
                            window.location.href = "{{route('login')}}"
                        }
                        $('#modal_confirm').modal('hide')
                    }
                });
            }
        })
    </script>
@endsection
