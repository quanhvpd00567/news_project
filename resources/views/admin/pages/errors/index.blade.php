@extends('admin.layout.master')
@section('content')
    <section class="content" style="min-height: 800px">
        <div class="error-page">
            <h2 class="headline text-red"> {{$error['code']}}</h2>
            <div class="error-content">
                <h3><i class="fa fa-warning text-red"></i>{{$error['message']}}</h3>
            </div>
        </div>
    </section>
@endsection
