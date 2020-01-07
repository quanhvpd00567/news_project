@extends('admin.layout.master')
@section('title')
    List user
@endsection
@section('content')
    <div class="row">
        <div class="col-md-10">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">List User</h3>
                    @if(Session::has('save_success') || Session::has('update_success'))
                        <div class="alert alert-success">
                            {{session('save_success')}}
                            {{session('update_success')}}
                        </div>
                    @endif
                    @if(Session::has('save_error'))
                        <div class="alert alert-success">
                            {{session('save_error')}}
                        </div>
                    @endif
                    <a href="{{ route('get_new_view_user') }}" class="btn btn-success">Create</a>
                    <table class="table table-bordered ">
                        <tbody>
                        <tr>
                            <th style="width: 10px">Id</th>
                            <th style="width: 20%">Full Name</th>
                            <th style="width: 30px">Gender</th>
                            <th style="width: 100px">Birth of day</th>
                            <th style="width: 30%">Email</th>
                            <th style="width: 50px">Role</th>
                            <th >Action</th>
                        </tr>
                        @foreach($users as $key => $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->full_name }}</td>
                                <td>
                                    <span>
                                        {{ $user->gender == 0 ? 'Male' : 'Female' }}
                                    </span>
                                </td>
                                <td><span>{{ $user->birth_of_day }}</span></td>
                                <td><span>{{ $user->email }}</span></td>
                                <td><span>{{ $user->role->role_name }}</span></td>
                                <td>
                                    @if(!$user->is_admin())
                                        <a href="{{ route('get_edit_view_user', ['id' => $user->id]) }}" class="btn btn-primary">Edit</a>
                                        <a href="{{ route('get_view_reset_password_user', ['id' => $user->id]) }}" class="btn btn-primary">Reset password</a>
                                        <form style="display: inline-block;" id="key_{{$user->id}}" action="{{route('post_blog_user', ['id' => $user->id])}}" method="post">
                                            {{csrf_field()}}
                                            @if($user->is_blocked())
                                                <input type="hidden" value="0" name="is_block">
                                                <a href="javascript:void(0)" class="btn btn-danger block" data-key="key_{{$user->id}}">Block</a>
                                            @else
                                                <input type="hidden" value="1" name="is_block">
                                                <a href="javascript:void(0)" class="btn btn-default block" data-key="key_{{$user->id}}">UnBlock</a>
                                            @endif
                                        </form>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        @if(count($users) == 0)
                            <tr>
                                <td colspan="5">
                                    <span>Data not found</span>
                                </td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                    {{$users->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $('.block').on('click', function () {
            if(confirm('Are you sure?')){
                let form_key = $(this).attr('data-key');
                $('#' + form_key).submit();
            }else{
                return false;
            }
        })
    </script>
@endsection
