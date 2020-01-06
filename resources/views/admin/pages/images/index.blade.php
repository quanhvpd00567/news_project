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
                                <th style="width: 120px;">Image</th>
                                <th style="width: 40%">Album</th>
                                <th>Action</th>
                            </tr>
                            <?php $count = 1; ?>
                            @foreach($lists as $key => $image)
                                <tr>
                                    <td>{{ $count }}</td>
                                    <td>
                                        <img style="width: 100px; height: 100px" src="{{asset("images/$image->url")}}"  alt="">
                                    </td>
                                    <td>{{ $image->album->album_name }}</td>
                                    <td style="vertical-align: middle;">
                                        <a href="{{ route('get_view_edit_image', ['id' => $image->id]) }}" class="btn btn-primary">Edit</a>
                                    </td>
                                </tr>
                                <?php $count++ ; ?>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $lists->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
