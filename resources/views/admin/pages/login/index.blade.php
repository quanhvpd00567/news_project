<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('css/Ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/AdminLTE.min.css') }}">

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <style>
        .color-error{
            color: red;
        }
        .login-page{
            background-image: url("{{asset('images/bg/bg-login.png')}}");
            background-color: #9c3328;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <h1 class="text-green"><b>CHEERFARM</b></h1>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Sign in</p>
        @if(Session::has('error'))
            <span class="color-error text-center">
                {{Session::get('error')}}
            </span>
        @endif
        {!! Form::open(['route' => 'post.admin.login']) !!}
            <div class="form-group has-feedback">
                {{Form::text('email', old('email', null), ['class' => 'form-control', 'placeholder' => 'Nhập email'])}}
                @if($errors->has('email'))
                    <span class="color-error">{{$errors->first('email')}}</span>
                @endif
            </div>

            <div class="form-group has-feedback">
                {{Form::text('password', old('password', null), ['class' => 'form-control', 'placeholder' => 'Nhập mật khẩu'])}}
                @if($errors->has('password'))
                    <span class="color-error">{{$errors->first('password')}}</span>
                @endif
            </div>

            <div class="row">
                <div class="offset-xs-8 text-center">
                    <button type="submit" class="btn btn-primary btn-flat">Sign In</button>
                </div>
            </div>
        {!! Form::close() !!}
    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('css/bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>
