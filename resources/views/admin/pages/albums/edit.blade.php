@extends('admin.layout.master')
@section('title')
@endsection
@section('content')
    <div class="box-body">
        <div class="col-md-6">
            <h2>Edit album</h2>
            <form action=" {{ route('post_edit_album', ['id'=>$album->id]) }}" class="" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <lable>Album Name</lable>
                    <input type="text" class="form-control" name="album_name" value="{{ $album->album_name }}" placeholder="Enter album name ">
                    <lable>Price</lable>
                    <input type="text" class="form-control" name="price" value="{{ $album->price }}" placeholder="Enter price ">
                    <lable>Free</lable>
                    <input type="checkbox" name="is_free" {{$album->is_free == 1 ? 'checked' : ''}} value="1">
                </div>
                <div class="box-footer">
                    <button class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
