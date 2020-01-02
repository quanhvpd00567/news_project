@extends('admin.layout.master')
@section('title')
@endsection
@section('content')
    <div class="box-body">
        <form action="{{ route('post_edit_article', ['id'=>$article->id]) }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <lable>Title</lable>
                <input type="text" class="form-control" name="title" value="{{ $article->title }}"  placeholder="Enter title">
                <lable>Content</lable>
                <input type="text" class="form-control" name="content" value="{{ $article->content }}" placeholder="Enter content">
                <lable>Img Thumb</lable>
                <input type="text" class="form-control" name="img_thumb" value="{{ $article->img_thumb }}" placeholder="Enter img thumb">
                <lable>Category Id</lable>
                <input type="text" class="form-control" name="category_id" value="{{ $article->category_id }}" placeholder="Enter category id">
                <lable>Album Id</lable>
                <input type="text" class="form-control" name="album_id" value="{{ $article->album_id }}" placeholder="Enter album id">
                <lable>User Id</lable>
                <input type="text" class="form-control" name="user_id" value="{{ $article->user_id }}" placeholder="Enter user id">
                <lable>Date Public</lable>
                <input type="text" class="form-control" name="date_public" value="{{ $article->date_public }}" placeholder="Enter date public">
                <lable>Is Delete</lable>
                <input type="text" class="form-control" name="is_delete" value="{{ $article->is_delete }}" placeholder="Enter is delete">
            </div>
            <div class="box-footer">
                <button class="btn btn-primary" type="submit">Update</button>
            </div>
        </form>
    </div>
@endsection