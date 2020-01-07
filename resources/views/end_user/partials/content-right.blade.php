<div class="col-sm-12 col-md-2 col-lg-2">
    <div class="row">
        <div class="middlebar_content">
            <h2 class="yellow_bg">Images Hot</h2>
            <div class="middlebar_content_inner wow fadeInUp">
                <ul class="middlebar_nav">
                    @foreach($images as $image)
                        <li> <a style="width: 100%" class="mbar_thubnail" href="#"><img style="width: 100%; height: 150px" src="{{asset("images/$image->url")}}" alt=""></a></li>                    @endforeach
                </ul>
            </div>
            <div class="popular_categori  wow fadeInUp">
                <h2 class="limeblue_bg">Album Hot</h2>
                <ul class="poplr_catgnva">
                    @foreach($albums as $album)
                        <li><a href="{{route('article_by_album', ['id' => $album->id])}}">{{$album->album_name}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
