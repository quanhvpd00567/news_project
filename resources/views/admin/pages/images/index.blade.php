@extends('admin.layout.master')
@section('title')
    List images
@endsection
@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title"> List images</h3>
                        <a href="{{ route('get_new_view_image') }}" class="btn btn-success">Create</a>
                        <table class="table table-bordered  ">
                            <tbody>
                            <tr>
                                <th style="width: 10px">Id</th>
                                <th style="width: 40%">Album Id</th>
                                <th style="width: 40%">Url</th>
                                <th style="width: 40%">Is Delete</th>
                                <th style="width: 20%">Created at</th>
                                <th style="width: 20%">Updated at</th>
                                <th>Action</th>
                            </tr>
                            <?php $count = 1; ?>
                            @foreach($lists as $key => $image)
                                <tr>
                                    <td>{{ $count }}</td>
                                    <td>{{ $image->album_id }}</td>
                                    <td>{{ $image->url }}</td>
                                    <td>{{ $image->is_delete }}</td>
                                    <td><span>{{ $image->created_at }}</span></td>
                                    <td><span>{{ $image->updated_at }}</span></td>
                                    <td>
                                        <a href="{{ route('get_view_edit_image', ['id' => $image->id]) }}">Edit</a>
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