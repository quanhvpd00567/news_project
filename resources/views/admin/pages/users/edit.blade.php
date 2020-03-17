@extends('admin.layout.master')
@section('title')
@endsection
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/datepicker/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugin/iCheck/all.css') }}">
@endsection
@section('content')
    <div class="box-body">
        <div class="col-md-6">
            <h2 class="text-center">Update new user</h2>
            <form action="{{ route('post_update_user', ['id' => $user->id]) }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <lable>Full Name</lable>
                    <input type="text" class="form-control" name="full_name" value="{{$user->full_name}}" placeholder="Enter full name">
                    <lable>Gender</lable>
                    <div class="form-group">
                        <label>
                            <input type="radio" name="gender" value="0" class="gender" @if($user->gender == 0) checked @endif >
                            Male
                        </label>
                        <label>
                            <input type="radio" name="gender" value="1" class="gender" @if($user->gender == 1) checked @endif>
                            Female
                        </label>
                    </div>
                    <lable>Email</lable>
                    <input type="email" class="form-control" value="{{$user->email}}" name="email" placeholder="Enter email">
                    <lable>Birth Of Day</lable>
                    <input type="text" class="form-control" value="{{$user->birth_of_day}}" id="birth_of_day" name="birth_of_day" placeholder="Enter Birth Of Day">
                    <lable>Role</lable>
                    <select class="form-control" name="role_id">
                        @foreach($roles as $key => $role)
                            <option value="{{$role->id}}" @if($user->role_id == $role->id) selected @endif>{{$role->role_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="box-footer">
                    <button class="btn btn-primary" type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ asset('css/datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('plugin/iCheck/icheck.min.js') }}"></script>
    <script>
        $('.gender').iCheck({
            radioClass   : 'iradio_flat-green'
        })
        $('#birth_of_day').datepicker({
            autoclose: true
        })
    </script>
@endsection
