@extends('admin.layout.master')

@section('content')
    <div class="row">
        <div class="col-md-4" style="margin-left: 10px; margin-bottom: 20px">

            @if(Session::has('key_update_success'))
                <div class="alert alert-success">
                    {{session('key_update_success')}}
                </div>
            @endif
            @if(Session::has('key_update_fail'))
                <div class="alert alert-success">
                    {{session('key_update_fail')}}
                </div>
            @endif

            <h3 class="text-center">Settings page</h3>
            <form action="{{ route('post_update_setting') }}" method="post" >
                {{csrf_field()}}
                <div class="form-group form-inline">
                    <label>Categories page number:</label>
                    <input type="number" value="{{ is_null($setting) ? 10 : $setting->p_category }}" style="float: right; width: 60px" name="p_category" min="1" class="form-control">
                </div>
                <div class="form-group form-inline">
                    <label>Article page number:</label>
                    <input type="number" value="{{ is_null($setting) ? 10 : $setting->p_article }}" style="float: right; width: 60px" name="p_article"  min="1" class="form-control">
                </div>
                <div class="form-group form-inline">
                    <label>User page number</label>
                    <input type="number" value="{{ is_null($setting) ? 10 : $setting->p_user }}" style="float: right; width: 60px" name="p_user" min="1" class="form-control">
                </div>
                <div class="form-group form-inline">
                    <label>User page number</label>
                    <input type="color" value="{{ is_null($setting) ? '#ea0437' : $setting->background_color }}" style="float: right; width: 60px" name="background_color" min="1" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>

@endsection