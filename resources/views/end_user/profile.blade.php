@extends('end_user.layout.master')
@section('title')
    Profile : {{Auth::user()->full_name}}
@endsection
@section('content')
    <div class="leftbar_content">
        <h2>Buy History</h2>
        <div class="singlepost_area">
            <div class="singlepost_content">
                <div class="row text-center">
                    @if(Session::has('success'))
                        <div class="alert alert-success">
                            <span>{{session('success')}}</span>
                        </div>
                    @endif
                    <div style="width: 100px; margin: 0 auto">
                        <img style="width: 100px; height: 100px; border-radius: 50%" src="{{asset('/imgs/me.png')}}" alt="">
                    </div>
                    <div>
                        <label>{{Auth::user()->full_name}}</label>
                    </div>
                    <div>
                        <label>{{Auth::user()->email}}</label>
                    </div>
                    <div>
                        <label>
                            @if (Auth::user()->gender == 0)
                                Male
                            @else
                                Female
                            @endif
                        </label>
                    </div>
                    <div>
                        <label>{{Auth::user()->birth_of_day}}</label>
                    </div>
                    <div style="padding-top: 50px; margin-bottom: 300px">
                        <a href="{{route('profile_edit')}}" class="btn btn-primary">Edit profile</a>
                        <button disabled class="btn btn-primary">Change password</button>
                        @if(Auth::user()->is_member())
                            <a href="{{route('profile_history')}}" class="btn btn-primary">History buy</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
