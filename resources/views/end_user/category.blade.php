@extends('end_user.layout.master')
@section('title')
    {{$category_detail->category_name}}
@endsection
@section('content')
    <div class="leftbar_content">
        <h2> Category: {{ $category_detail->category_name }} @if(count($articles) == 0) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-----> No data @endif</h2>
        @include('end_user.includes.list-article')
    </div>
@endsection
