@extends('admin.layout.master')
@section('title')
    List roles
@endsection
@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">List roles</h3>
                </div>
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th style="">Role name</th>
                        </tr>
                        <?php $count = 1; ?>
                        @foreach($lists as $key => $role)
                            <tr>
                                <td>{{ $count }}</td>
                                <td>{{ $role->role_name }}</td>
                            </tr>
                            <?php $count++ ; ?>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection