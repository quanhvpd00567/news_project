@extends('admin.layout.master')
@section('title')
@endsection
@section('content')
    <div class="box-body">
        <div class="col-md-6">
            <h2>Add new category</h2>
            <form action=" {{route('post_edit_category', ['id'=>$category->id])}} "  method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <lable>Category Name</lable>
                    <input type="text" class="form-control" name="category_name" value="{{ $category->category_name }}" placeholder="Enter price ">
                </div>
                <div class="box-footer">
                    <button class="btn btn-primary">Update</button>
                    <a href="{{route('list_category')}}">Back to page list</a>
                </div>
            </form>
        </div>
    </div>
@endsection
