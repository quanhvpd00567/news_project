@extends('admin.layout.master')
@section('styles')
{{--    <link rel="stylesheet" href="{{ asset('plugin/dropzone/dropzone.css') }}">--}}
    <link rel="stylesheet" href="{{ asset('plugin/dropzone/dropzone.css') }}">
{{--    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Tạo mới sản phẩm</h3>
                </div>
                <div class="box-body">
                    @include('admin.pages.products._form')
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('plugin/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('plugin/ckfinder/ckfinder.js') }}"></script>

    <script>
        var ckfinderConfig = {
            filebrowserImageBrowseUrl: '{{ route('admin.product.ckfinder', ['type' => 'Images']) }}',
            filebrowserFlashBrowseUrl: '{{ route('admin.product.ckfinder', ['type' => 'Flash']) }}',
            filebrowserUploadUrl: '{{ asset('plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
            filebrowserImageUploadUrl: '{{ asset('plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
            filebrowserFlashUploadUrl: '{{ asset('plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
        }
    </script>
    <script src="{{ asset('js/admin/product.js') }}"></script>
@endsection
