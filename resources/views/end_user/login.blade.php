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
    <title>Document</title>
</head>
<body>
    <div id="wap">
        <div class="container" style="padding-top: 250px">
            <div class="row">
                <div class="form-login">
                    <h2 class="text-center title">Account Login</h2>
                    <form action="{{route('login_port')}}" style="padding-left: 40px; padding-right: 40px" method="post">
                        {{csrf_field()}}
                        @if(Session::has('error'))
                            <p class="error">{{session('error')}}</p>
                        @endif
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control input-c" name="email" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control input-c" name="password" placeholder="Enter password">
                        </div>
                        <div>
                            <button style="width: 50%; margin-left: 25%" type="submit" class="btn btn-primary">Login</button>
                            <br>
                            <br>
                            <a href="/register">Register</a>
                            <br>
                            <a href="">For got password</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
