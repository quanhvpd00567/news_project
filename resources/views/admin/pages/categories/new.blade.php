@extends('admin.layout.master')
@section('title')
@endsection
@section('content')
    <div class="box-body">
        <div class="col-md-6">
            <h2>Add new category</h2>
            <form action="{{ route('post_new_category') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <lable>Category Name</lable>
                    <input type="text" class="form-control" name="category_name" placeholder="Enter category name">
                    @if ($errors->has('category_name'))
                        <span class="error-message">{{$errors->first('category_name')}}</span>
                    @endif
                </div>
                <div class="box-footer">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
