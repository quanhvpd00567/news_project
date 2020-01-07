@extends('admin.layout.master')
@section('title')
    Create new article
@endsection
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/datepicker/bootstrap-datepicker.min.css') }}">
@endsection
@section('content')
    <div class="box-body">
        <form action="{{ route('post_new_article') }}" method="post" enctype="multipart/form-data">
            <div class="col-md-8">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <lable>Title</lable>
                        <input type="text" class="form-control" name="title" placeholder="Enter title">
                    </div>
                    <div class="form-group">
                        <lable>Content</lable>
                        <textarea type="text" class="form-control" id="content" name="content" placeholder="Enter content"></textarea>
                    </div>
                    <div class="box-footer">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
            </div>
            <div class="col-md-4">
                <div>
                    <lable>Img Thumb</lable>
                    <div class="input-group">
                        <input type="file" class="form-control" id="choose_image" name="img_thumb">
                        <img style="width: 250px; height: 250px; border: 1px solid #cccccc" id="load_image" src="{{asset('imgs/no-img.png')}}" alt="">
                    </div>
                </div>
                <div style="padding-top: 10px">
                    <lable>Categories</lable>
                    <select class="form-control" name="category_id">
                        @foreach($categories as $value)
                            <option value="{{$value->id}}">{{$value->category_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div style="padding-top: 10px">
                    <lable>Albums</lable>
                    <select class="form-control" name="album_id">
                        @foreach($albums as $value)
                            <option value="{{$value->id}}">{{$value->album_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div style="padding-top: 10px">
                    <lable>Date Public</lable>
                    <input type="text" class="form-control" id="date_public" name="date_public" placeholder="Enter date public">
                </div>
            </div>
        </form>
    </div>
@endsection
@section('script')
    <script src="{{ asset('css/datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('plugin/ckeditor/ckeditor.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.replace('content')
        $('#date_public').datepicker({
            autoclose: true
        })

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
