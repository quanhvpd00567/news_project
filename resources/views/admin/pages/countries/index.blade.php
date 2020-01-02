@extends('admin.layout.master')
@section('title')
    {{ $title }}
@endsection
@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">
                        <a href="{{ route('get_view_new_country') }}" class="btn btn-success">Create</a>
                        <table class="table table-bordered  ">
                            <tbody>
                            <tr>
                                <th style="width: 10px">Id</th>
                                <th style="width: 40%">Role name</th>
                                <th style="width: 20%">Created at</th>
                                <th style="width: 20%">Updated at</th>
                                <th>Action</th>
                            </tr>
                            <?php $count = 1; ?>
                            @foreach($lists as $key => $country)
                                <tr>
                                    <td>{{ $count }}</td>
                                    <td>{{ $country->country_name }}</td>
                                    <td><span>{{ $country->created_at }}</span></td>
                                    <td><span>{{ $country->updated_at }}</span></td>
                                    <td>
                                        <a href="{{ route('get_view_edit_country', ['id' => $country->id]) }}">Edit</a>
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