@extends('admin.layout.master')
@section('title')
    List Categories
@endsection
@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">List Categories</h3>

                    @if(Session::has('save_success'))
                        <div class="alert alert-success">
                            {{session('save_success')}}
                        </div>
                    @endif
                    @if(Session::has('save_error'))
                        <div class="alert alert-success">
                            {{session('save_error')}}
                        </div>
                    @endif

                        <a href="{{ route('get_new_view_category') }}" class="btn btn-success">Create</a>
                        <table class="table table-bordered ">
                            <tbody>
                                <tr>
                                    <th style="width: 10px">Id</th>
                                    <th style="width: 20%">Category Name</th>
                                    <th style="width: 20%">Created at</th>
                                    <th style="width: 20%">Updated at</th>
                                    <th >Action</th>
                                </tr>
                                @foreach($lists as $key => $category)
                                    <tr>
                                        <td>{{ $category->id }}</td>
                                        <td>{{ $category->category_name }}</td>
                                        <td><span>{{ $category->created_at }}</span></td>
                                        <td><span>{{ $category->updated_at }}</span></td>
                                        <td>
                                            <a href="{{ route('get_view_edit_category', ['id' => $category->id]) }}" class="btn btn-primary">Edit</a>
                                            <form style="display: inline-block;" id="key_{{$category->id}}" action="{{route('post_delete_category', ['id' => $category->id])}}" method="post">
                                                {{csrf_field()}}
                                                <a href="javascript:void(0)" class="btn btn-danger delete" data-key="key_{{$category->id}}">Delete</a>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                @if(count($lists) == 0)
                                    <tr>
                                        <td colspan="5">
                                            <span>Data not found</span>
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    {{$lists->links()}}
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
