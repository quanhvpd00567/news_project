@extends('admin.layout.master')
@section('title')
    Reset password
@endsection
@section('content')
    <div class="box-body">
        <div class="col-md-6">
            <h2 class="text-center">Reset password for user: <strong>{{$user->full_name}}</strong> </h2>
            <form action="{{ route('post_reset_password_user', ['id' => $user->id]) }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <lable>Password new</lable>
                    <input type="password" class="form-control" name="password" placeholder="Enter password">
                    <lable>Password confirm</lable>
                    <input type="password" class="form-control" name="password_confirm" placeholder="Enter password confirm">
                </div>
                <div class="box-footer">
                    <button class="btn btn-primary" type="submit">Reset password</button>
                </div>
            </form>
        </div>
    </div>
@endsection
