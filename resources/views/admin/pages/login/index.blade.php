<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ĐĂNG NHẬP HỆ THỐNG QUẢN TRỊ | Cheerifarm</title>
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
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .login-box-body{
            border-radius: 5px;
        }
        .btn-login{
            background: -webkit-linear-gradient(right,#00dbde,#fc00ff,#00dbde,#fc00ff);
            border-radius: 25px;
            overflow: hidden;
            width: 100%;
            border: none;
            text-transform: uppercase;
            color: #fff;
            height: 40px;
            font-size: 16px;
        }
    </style>
</head>
<body class="hold-transition login-page">
<div class="login-box">

    <!-- /.login-logo -->
    <div class="login-box-body">
        <div class="login-logo">
            <h1 class="text-green"><b>CHEERFARM</b></h1>
        </div>
        @if(Session::has('error'))
            <span class="color-error text-center">
                {{Session::get('error')}}
            </span>
        @endif
        {!! Form::open(['route' => 'post.admin.login']) !!}
            <div class="form-group has-feedback">
                <label>Email</label>
                {{Form::text('email', old('email', null), ['class' => 'form-control', 'placeholder' => 'Nhập email'])}}
                @if($errors->has('email'))
                    <span class="color-error">{{$errors->first('email')}}</span>
                @endif
            </div>

            <div class="form-group has-feedback">
                <label>Mật khẩu</label>
                {{Form::text('password', old('password', null), ['class' => 'form-control', 'placeholder' => 'Nhập mật khẩu'])}}
                @if($errors->has('password'))
                    <span class="color-error">{{$errors->first('password')}}</span>
                @endif
            </div>

            <div class="offset-xs-8 text-center">
                <button type="submit" class="btn btn-primary btn-login">Sign In</button>
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
