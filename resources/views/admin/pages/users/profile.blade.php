@extends('admin.layout.master')
@section('title')
   Profile {{Auth::user()->full_name}}
@endsection
@section('content')
    <div class="box-body">
        <div class="col-md-3">
            <h2 class="text-center">Profile user</h2>
            <!-- Profile Image -->
            <div class="box box-primary">
                <div class="box-body box-profile">
                    <img class="profile-user-img img-responsive img-circle" style="height: 100px" src="{{ asset('imgs/me.png') }}" alt="User profile picture">
                    <h3 class="profile-username text-center">{{Auth::user()->full_name}}</h3>
                    <p class="text-muted text-center">{{Auth::user()->role->role_name}}</p>
                </div>
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">About Me</h3>
                    </div>
                    <div class="box-body">
                        <strong><i class="fa fa-envelope margin-r-5"></i> Email</strong>
                        <p class="text-muted">{{Auth::user()->email}}</p>
                        <hr>
                        <strong><i class="fa fa-venus-mars margin-r-5"></i> Gender</strong>
                        <p class="text-muted">
                            @if (Auth::user()->gender == 1)
                                Male
                            @else
                                Female
                            @endif
                        </p>
                        <hr>
                        <strong><i class="fa fa-birthday-cake margin-r-5"></i> Birth of day</strong>
                        <p>{{Auth::user()->birth_of_day}}</p>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection
@section('script')

@endsection
