@extends('end_user.layout.master')
@section('title')
    Buy History
@endsection
@section('content')
    <div class="leftbar_content">
        <h2>Buy History</h2>
        <div class="singlepost_area">
            <div class="singlepost_content" style="min-height: 700px">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Album name</th>
                            <th>Price</th>
                            <th>Create by</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if(count($histories) > 0)
                        @foreach($histories as $key => $history)
                            <tr>
                                <td>{{$history->id}}</td>
                                <td>
                                    <a style="color: blue" href="{{route('article_by_album', ['id' => $history->album_id])}}">{{$history->album->album_name}}</a>
                                </td>
                                <td>${{$history->album->price}}</td>
                                <td>${{$history->created_at}}</td>
                            </tr>
                        @endforeach
                    @else
                        <tr style="text-align: center">
                            <td colspan="4">Data empty</td>
                        </tr>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
        @include('end_user.includes.modal')
    </div>
@endsection
