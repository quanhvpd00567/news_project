@extends('admin.layout.master')
@section('title')

@endsection
@section('content')
    <div class="box-body">
        <form action="{{ route('post_update_country', ['id' => $country->id]) }}" class="" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <lable>Country Name</lable>
                <input type="text" class="form-control" name="country_name" value="{{ $country->country_name  }}">

            </div>
            <div class="box-footer">
                <button class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
@endsection