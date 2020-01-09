<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/end_user/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/end_user/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/datepicker/bootstrap-datepicker.min.css') }}">
    <title>Document</title>
</head>
<body>
    <div id="wap">
        <div class="container" style="padding-top: 50px">
            <div class="row">
                <div class="form-register">
                    <h2 class="text-center title">Account register</h2>
                    <form action="{{route('create_new_member')}}" style="padding-left: 40px; padding-right: 40px" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>Full name</label>
                            <input type="text" class="form-control input-c" name="full_name" placeholder="Enter full name">
                            @if ($errors->has('full_name'))
                                <span class="error">{{$errors->first('full_name')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control input-c" name="email" placeholder="Enter email">
                            @if ($errors->has('email'))
                                <span class="error">{{$errors->first('email')}}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control input-c" name="password" placeholder="Enter password">
                            @if ($errors->has('password'))
                                <span class="error">{{$errors->first('password')}}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Password Confirm</label>
                            <input type="password" class="form-control input-c" name="password_confirm" placeholder="Enter password confirm">
                            @if ($errors->has('password_confirm'))
                                <span class="error">{{$errors->first('password_confirm')}}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Gender</label>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="gender" value="0" checked>
                                    Male
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="gender" value="1">
                                    Female
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Birth of day</label>
                            <input type="text" name="birth_of_day" id="birth_of_day" class="form-control" value="">
                            @if ($errors->has('birth_of_day'))
                                <span class="error">{{$errors->first('birth_of_day')}}</span>
                            @endif
                        </div>

                        <div>
                            <button type="submit" class="btn btn-primary">Register</button>
                            <a href="/login" class="btn btn-primary">Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="{{ asset('css/end_user/jquery.min.js') }}"></script>
<script src="{{ asset('css/datepicker/bootstrap-datepicker.min.js') }}"></script>
<script>
    $('#birth_of_day').datepicker({
        autoclose: true,
        format: 'yyyy/mm/dd',
    })
</script>
</html>
