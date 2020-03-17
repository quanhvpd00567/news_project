@extends('admin.layout.master')
@section('title')
@endsection
@section('content')
    <div class="box-body">
        <div class="col-md-6">
            <form action=" {{ route('post_new_image') }} " method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label >Choose album</label>
                    <select class="form-control" name="album_id">
                        @foreach($listAlbum as $album)
                            <option value="{{$album->id}}">{{$album->album_name}}</option>
                        @endforeach
                    </select>
                    <label >Choose Image</label>
                    <input type="file" id="choose_image" accept="image/png, image/jpg" class="form-control" name="url">
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Image</label>
            </div>
            <img style="width: 250px; height: 250px; border: 1px solid #cccccc" id="load_image" src="{{asset('imgs/no-img.png')}}" alt="">
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#choose_image').on('change', function () {
                let input = $(this);
                if (input[0].files && input[0].files[0]) {
                    let reader = new FileReader();
                    reader.onload = function (e) {
                        $('#load_image')
                            .attr('src', e.target.result)
                    };
                    reader.readAsDataURL(input[0].files[0]);
                }else{
                    $('#load_image')
                        .attr('src', "{{asset('imgs/no-img.png')}}")
                }
            })
        })
    </script>
@endsection
