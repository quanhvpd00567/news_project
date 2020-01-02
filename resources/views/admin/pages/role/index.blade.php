@extends('admin.layout.master')
@section('title')
    List roles
@endsection
@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">List roles</h3>
                    <a href="{{ route('get_view_new_role') }}" class="btn btn-success">Create</a>
                </div>

                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th style="width: 10px">Id</th>
                            <th style="width: 40%">Role name</th>
                            <th style="width: 20%">Created at</th>
                            <th style="width: 20%">Updated at</th>
                            <th>Action</th>
                        </tr>
                        <?php $count = 1; ?>
                        @foreach($lists as $key => $role)
                            <tr>
                                <td>{{ $count }}</td>
                                <td>{{ $role->role_name }}</td>
                                <td><span>{{ $role->created_at }}</span></td>
                                <td><span>{{ $role->updated_at }}</span></td>
                                <td>
                                    <a href="{{ route('get_view_edit_role', ['id' => $role->id]) }}">Edit</a>
                                </td>
                            </tr>
                            <?php $count++ ; ?>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection