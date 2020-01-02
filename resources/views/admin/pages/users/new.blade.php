@extends('admin.layout.master')
@section('title')
@endsection
@section('content')
    <div class="box-body">
        <form action="{{ route('post_new_user') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <lable>Full Name</lable>
                <input type="text" class="form-control" name="full_name" placeholder="Enter full name">
                <lable>Gender</lable>
                <input type="text" class="form-control" name="gender" placeholder="Enter gender">
                <lable>Birth Of Day</lable>
                <input type="date" class="form-control" name="birth_of_day" placeholder="Enter Birth Of Day">
                <lable>Email</lable>
                <input type="email" class="form-control" name="email" placeholder="Enter email">
                <lable>Password</lable>
                <input type="password" class="form-control" name="password" placeholder="Enter password">
                <lable>Role</lable>
                <select class="form-control" name="role_id">
                    @foreach($roles as $key => $role)
                        <option value="{{$role->id}}">{{$role->role_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="box-footer">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </form>
    </div>
@endsection