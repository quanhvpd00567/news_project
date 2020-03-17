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
            <h2 class="text-center">Create new user</h2>
            <form action="{{ route('post_new_user') }}" method="post">
            {{ csrf_field() }}
                <div class="form-group">
                    <lable>Full Name</lable>
                    <input type="text" class="form-control" name="full_name" placeholder="Enter full name">
                    @if ($errors->has('full_name'))
                        <span class="error-message">{{$errors->first('full_name')}}</span>
                    @endif
                </div>

                <lable>Gender</lable>

                <div class="form-group">
                    <label>
                        <input type="radio" name="gender" value="0" class="gender" checked>
                        Male
                    </label>
                    <label>
                        <input type="radio" name="gender" value="1" class="gender">
                        Female
                    </label>
                </div>

                <div class="form-group">
                    <lable>Email</lable>
                    <input type="email" class="form-control" name="email" placeholder="Enter email">
                    @if ($errors->has('email'))
                        <span class="error-message">{{$errors->first('email')}}</span>
                    @endif
                </div>

                <div class="form-group">
                    <lable>Password</lable>
                    <input type="password" class="form-control" name="password" placeholder="Enter password">
                    @if ($errors->has('password'))
                        <span class="error-message">{{$errors->first('password')}}</span>
                    @endif
                </div>

                <div class="form-group">
                    <lable>Password confirm </lable>
                    <input type="password" class="form-control" name="password_confirm" placeholder="Enter password confirm">
                    @if ($errors->has('password_confirm'))
                        <span class="error-message">{{$errors->first('password_confirm')}}</span>
                    @endif
                </div>

                <div class="form-group">
                    <lable>Birth Of Day</lable>
                    <input type="text" class="form-control" id="birth_of_day" name="birth_of_day" placeholder="Enter Birth Of Day">
                    @if ($errors->has('birth_of_day'))
                        <span class="error-message">{{$errors->first('birth_of_day')}}</span>
                    @endif
                </div>

                <lable>Role</lable>
                <select class="form-control" name="role_id">
                    @foreach($roles as $key => $role)
                        <option value="{{$role->id}}">{{$role->role_name}}</option>
                    @endforeach
                </select>
            <div class="box-footer">
                <button class="btn btn-primary" type="submit">Submit</button>
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
            setDate: new Date(),
            autoclose: true,
        })
    </script>
@endsection
