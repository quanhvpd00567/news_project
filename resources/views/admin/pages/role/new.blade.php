@extends('admin.layout.master')
@section('title')
    Create new role
@endsection
@section('content')
    <div class="box-body">
        <form action="{{ route('post_new_role') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="exampleInputEmail1">Role Name</label>
                <input type="text" class="form-control" name="role_name" placeholder="Enter role name">
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection