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
                <lable>Free</lable>
                <input type="checkbox" name="is_free" value="1">
            </div>
            <div class="box-footer">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </form>
    </div>
@endsection