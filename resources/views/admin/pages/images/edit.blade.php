@extends('admin.layout.master')
@section('title')
@endsection
@section('content')
    <div class="box-body">
        <form action=" {{ route('post_edit_image',['id'=>$image->id]) }} " method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label >Album Id</label>
                <input type="text" class="form-control" name="album_id" value="{{ $image->album_id }}" placeholder="Enter album id">
                <label >Url</label>
                <input type="text" class="form-control" name="url" value="{{ $image->url }}" placeholder="Enter url">
                <label >Is delete</label>
                <input type="text" class="form-control" name="is_delete" value="{{ $image->is_delete }}" placeholder="Enter is delete">
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
@endsection