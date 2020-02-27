@extends('admin.layout.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Thêm mới loại sản xuất</h3>
                </div>
                <div class="box-body">
                    @include('admin.pages.introduces._form')
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('plugin/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('plugin/ckfinder/ckfinder.js') }}"></script>

    <script  type="text/javascript">
        var $router = '{{ route('admin.product.ckfinder', ['type' => 'Images']) }}'

    </script>
    <script src="{{ asset('js/admin/introduce.js') }}"></script>

@endsection
