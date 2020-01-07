@extends('admin.layout.master')
@section('title')
    List images
@endsection
@section('content')
    <div class="row">
        <div class="col-md-8">
            @if(Session::has('save_success'))
                <div class="alert alert-success">
                    {{session('save_success')}}
                </div>
            @endif
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
                            @foreach($lists as $key => $image)
                                <tr>
                                    <td>{{ $image->id }}</td>
                                    <td>
                                        <img style="width: 100px; height: 100px" src="{{asset("images/$image->url")}}"  alt="">
                                    </td>
                                    <td>{{ $image->album->album_name }}</td>
                                    <td style="vertical-align: middle;">
                                        <a href="{{ route('get_view_edit_image', ['id' => $image->id]) }}" class="btn btn-primary">Edit</a>
                                        <form style="display: inline-block;" id="key_{{$image->id}}" action="{{route('post_delete_image', ['id' => $image->id])}}" method="post">
                                            {{csrf_field()}}
                                            <a href="javascript:void(0)" class="btn btn-danger delete" data-key="key_{{$image->id}}">Delete</a>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $lists->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $('.delete').on('click', function () {
            if(confirm('Are you sure?')){
                var form_key = $(this).attr('data-key');
                $('#' + form_key).submit();
            }else{
                return false;
            }
        })
    </script>
@endsection
