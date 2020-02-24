@extends('admin.layout.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Thiệt lập nội dung trang chủ </h3>
                </div>
                @include('admin.layout.partials._notification')
                <div class="box-body">
                    @include('admin.pages.home._form')
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('plugin/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('plugin/ckfinder/ckfinder.js') }}"></script>
    <script src="{{ asset('js/admin/home-page.js') }}"></script>
@endsection
