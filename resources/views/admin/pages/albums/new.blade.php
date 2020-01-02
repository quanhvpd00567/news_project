@extends('admin.layout.master')
@section('title')
@endsection
@section('content')
    <div class="box-body">
        <form action="{{ route('post_new_create') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <lable>Album Name</lable>
                <input type="text" class="form-control" name="album_name" placeholder="Enter album name">
                <lable>Price</lable>
                <input type="text" class="form-control" name="price" placeholder="price">
                <lable>Is delete</lable>
                <input type="text" class="form-control" name="is_delete" placeholder="is delete">
                <lable>Is free</lable>
                <input type="text" class="form-control" name="is_free" placeholder="is free">
            </div>
            <div class="box-footer">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </form>
    </div>
@endsection