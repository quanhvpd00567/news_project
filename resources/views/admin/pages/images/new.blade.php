@extends('admin.layout.master')
@section('title')
@endsection
@section('content')
    <div class="box-body">
        <form action=" {{ route('post_new_image') }} " method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label >Album Id</label>
                <input type="text" class="form-control" name="album_id" placeholder="Enter album id">
                <label >Url</label>
                <input type="text" class="form-control" name="url" placeholder="Enter url">
                <label >Is delete</label>
                <input type="text" class="form-control" name="is_delete" placeholder="Enter is delete">
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection