@extends('admin.layout.master');
@section('title')
    create new country
@endsection
@section('content')
    <div class="box-body">
        <form action="{{ route('post_new_country') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="exampleInputEmail1">Country Name</label>
                <input type="text" class="form-control" name="country_name" placeholder="Enter country name">
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection