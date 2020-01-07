@extends('admin.layout.master')
@section('title')
    List Articles
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            @if(Session::has('save_success'))
                <div class="alert alert-success">
                    {{session('save_success')}}
                </div>
            @endif
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">List Articles</h3>
                    <a href="{{ route('get_new_view_article') }}" class="btn btn-success">Create</a>
                    <table class="table table-bordered  ">
                        <tbody>
                        <tr >
                            <th class="text-center" style="width: 10px">Id</th>
                            <th class="text-center" style="width: 30px">Image Thumb</th>
                            <th class="text-center" style="width: 20%">Title</th>
                            <th class="text-center" style="width: 250px">Category</th>
                            <th class="text-center" style="width: 250px">Album</th>
                            <th class="text-center" style="width: 250px">Creator </th>
                            <th class="text-center" style="width: 150px">Date Public</th>
                            <th class="text-center">Action</th>
                        </tr>
                        @foreach($lists as $key => $article)
                            <tr>
                                <td>{{ $article->id }}</td>
                                <td>
                                    <img style="width: 50px; height: 50px" src="{{ asset('images/' . $article->img_thumb) }}" alt="">
                                </td>
                                <td>
                                    <a href="{{ route('get_view_edit_article', ['id' => $article->id]) }}"> {{ $article->title }}</a>
                                </td>
                                <td>{{ $article->category->category_name }}</td>
                                <td>{{ $article->album->album_name }}</td>
                                <td>{{ $article->user->full_name }}</td>
                                <td>{{ $article->date_public }}</td>
                                <td>
                                    <a href="{{ route('get_view_edit_article', ['id' => $article->id]) }}" class="btn btn-primary">Edit</a>
                                    <form style="display: inline-block;" id="key_{{$article->id}}" action="{{route('post_delete_article', ['id' => $article->id])}}" method="post">
                                        {{csrf_field()}}
                                        <a href="javascript:void(0)" class="btn btn-danger delete" data-key="key_{{$article->id}}">Delete</a>
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
