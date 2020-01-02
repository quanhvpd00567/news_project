@extends('admin.layout.master')
@section('title')
    List Albums
@endsection
@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">List Albums</h3>
                        <a href="{{ route('get_new_view_album') }}" class="btn btn-success">Create</a>
                        <table class="table table-bordered  ">
                            <tbody>
                            <tr>
                                <th style="width: 10px">Id</th>
                                <th style="width: 40%">Album name</th>
                                <th style="width: 20%">Price</th>
                                <th style="width: 20%">Is delete</th>
                                <th style="width: 50%">Is free</th>
                                <th style="width: 40%">Created at</th>
                                <th style="width: 40%">Updated at</th>
                                <th>Action</th>
                            </tr>
                            <?php $count = 1; ?>
                            @foreach($lists as $key => $album)
                                <tr>
                                    <td>{{ $count }}</td>
                                    <td>{{ $album->album_name }}</td>
                                    <td>{{ $album->price }}</td>
                                    <td>{{ $album->is_delete }}</td>
                                    <td>{{ $album->is_free }}</td>
                                    <td><span>{{ $album->created_at }}</span></td>
                                    <td><span>{{ $album->updated_at }}</span></td>
                                    <td>
                                        <a href="{{ route('get_view_edit_album', ['id' => $album->id]) }}">Edit</a>
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