@extends('admin.layout.master')
@section('title')
@endsection
@section('content')
    <div class="box-body">
        <form action=" {{ route('post_edit_album', ['id'=>$album->id]) }}" class="" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <lable>Album Name</lable>
                <input type="text" class="form-control" name="album_name" value="{{ $album->album_name }}" placeholder="Enter album name ">
                <lable>Price</lable>
                <input type="text" class="form-control" name="price" value="{{ $album->price }}" placeholder="Enter price ">
                <lable>Is delete</lable>
                <input type="text" class="form-control" name="is_delete" value="{{ $album->is_delete }}" placeholder="Enter is delete ">
                <lable>Is free</lable>
                <input type="text" class="form-control" name="is_free" value="{{ $album->is_free }}" placeholder="Enter is free ">
            </div>
            <div class="box-footer">
                <button class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
@endsection