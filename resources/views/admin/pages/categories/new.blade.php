@extends('admin.layout.master')
@section('title')
@endsection
@section('content')
    <div class="box-body">
        <form action="{{ route('post_new_category') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <lable>Category Name</lable>
                <input type="text" class="form-control" name="category_name" placeholder="Enter category name">
            </div>
            <div class="box-footer">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </form>
    </div>
@endsection