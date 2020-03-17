@extends('admin.layout.master')
@section('title')
    List Albums
@endsection
@section('content')
    <div class="row">
        <div class="col-md-9">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">List Albums</h3>
                        <a href="{{ route('get_new_view_album') }}" class="btn btn-success">Create</a>
                        <table class="table table-bordered  ">
                            <tbody>
                            <tr>
                                <th style="width: 10px">Id</th>
                                <th style="width: 30%">Album name</th>
                                <th style="width: 20%">Price</th>
                                <th style="width: 10%">Free</th>
                                <th style="width: 20%">Created at</th>
                                <th style="width: 20%">Action</th>
                            </tr>
                            <?php $count = 1; ?>
                            @foreach($lists as $key => $album)
                                <tr>
                                    <td>{{ $count }}</td>
                                    <td>{{ $album->album_name }}</td>
                                    <td>${{ $album->price }}</td>
                                    <td>{{ $album->is_free == 1 ? 'Free' : 'No free' }}</td>
                                    <td><span>{{ $album->created_at }}</span></td>
                                    <td>
                                        <a href="{{ route('get_view_edit_album', ['id' => $album->id]) }}" class="btn btn-primary">Edit</a>
                                        <form style="display: inline-block;" id="key_{{$album->id}}" action="{{route('post_delete_category', ['id' => $album->id])}}" method="post">
                                            {{csrf_field()}}
                                            <a href="javascript:void(0)" class="btn btn-danger delete" data-key="key_{{$album->id}}">Delete</a>
                                        </form>
                                    </td>
                                </tr>
                                <?php $count++ ; ?>
                            @endforeach
                            </tbody>
                        </table>
                    </h3>
                </div>
            </div>
        </div>
    </div>
@endsection