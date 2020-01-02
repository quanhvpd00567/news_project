@extends('admin.layout.master')
@section('title')
@endsection
@section('content')
    <div class="box-body">
        <form action="{{ route('post_new_article') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <lable>Title</lable>
                <input type="text" class="form-control" name="title" placeholder="Enter title">
                <lable>Content</lable>
                <input type="text" class="form-control" name="content" placeholder="Enter content">
                <lable>Img Thumb</lable>
                <input type="text" class="form-control" name="img_thumb" placeholder="Enter img thumb">
                <lable>Category Id</lable>
                <input type="text" class="form-control" name="category_id" placeholder="Enter category id">
                <lable>Album Id</lable>
                <input type="text" class="form-control" name="album_id" placeholder="Enter album id">
                <lable>User Id</lable>
                <input type="text" class="form-control" name="user_id" placeholder="Enter user id">
                <lable>Date Public</lable>
                <input type="text" class="form-control" name="date_public" placeholder="Enter date public">
                <lable>Is Delete</lable>
                <input type="text" class="form-control" name="is_delete" placeholder="Enter is delete">
            </div>
            <div class="box-footer">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </form>
    </div>
@endsection