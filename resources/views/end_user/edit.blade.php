@extends('end_user.layout.master')
@section('title')
    Profile : {{Auth::user()->full_name}}
@endsection
@section('content')
    <div class="leftbar_content">
        <h2>Update profile</h2>
        <div class="singlepost_area">
            <div class="singlepost_content">
                <div class="row" style="width: 50%; margin: 0 auto; padding-bottom: 400px">
                    <form action="{{route('profile_update')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>Full name</label>
                            <input type="text" name="full_name" class="form-control" value="{{Auth::user()->full_name}}">
                            @if ($errors->has('full_name'))
                                <span class="text-red">{{$errors->first('full_name')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" disabled class="form-control" value="{{Auth::user()->email}}">
                        </div>
                        <div class="form-group">
                            <label>Gender</label>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="gender" value="0" @if(Auth::user()->gender === 0) checked @endif>
                                    Male
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="gender" value="1" @if(Auth::user()->gender === 1) checked @endif>
                                    Female
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Birth of day</label>
                            <input type="text" name="birth_of_day" id="birth_of_day" class="form-control" value="{{ date('Y/m/d', strtotime(Auth::user()->birth_of_day))}}">
                            @if ($errors->has('birth_of_day'))
                                <span class="text-red">{{$errors->first('birth_of_day')}}</span>
                            @endif
                        </div>
                        <a href="{{route('profile_info')}}" class="btn btn-primary">Back</a>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('css/datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script>
        $('#birth_of_day').datepicker({
            autoclose: true,
            format: 'yyyy/mm/dd',
        })
    </script>
@endsection
