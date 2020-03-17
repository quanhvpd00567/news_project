@extends('admin.layout.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Tạo mới danh mục</h3>
                </div>
                <div class="box-body">
                    @include('admin.pages.categories._form')
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $('input[type="checkbox"].minimal-red').iCheck({
            checkboxClass: 'icheckbox_minimal-red',
            radioClass   : 'iradio_minimal-red'
        })
    </script>
@endsection
