@extends('admin.layout.master')
@section('title')
    List user
@endsection
@section('content')
    <div class="row">
        <div class="col-md-10">
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
                        <?php $count = 1; ?>
                        @foreach($users as $key => $user)
                            <tr>
                                <td>{{ $count }}</td>
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
                                    <a href="{{ route('get_view_edit_category', ['id' => $user->id]) }}" class="btn btn-primary">Edit</a>
                                    <form style="display: inline-block;" id="key_{{$user->id}}" action="{{route('post_delete_category', ['id' => $user->id])}}" method="post">
                                        {{csrf_field()}}
                                        <a href="javascript:void(0)" class="btn btn-danger delete" data-key="key_{{$user->id}}">Delete</a>
                                    </form>
                                </td>
                            </tr>
                            <?php $count++ ; ?>
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
                </div>
            </div>
        </div>
    </div>
@endsection
