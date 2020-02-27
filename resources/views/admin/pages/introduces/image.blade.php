@extends('admin.layout.master')
@section('title')
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Thêm hình ảnh cho loại sản xuất: <b>{{$product->name}}</b></h3>
                </div>
                @if(Session::has('success'))
                    <div class="col-md-12 notification">
                        <div class="bg-green disabled alert-dismissible alert">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h4><i class="icon fa fa-check"></i> Thông báo!</h4>
                            {{Session::get('success')}}
                        </div>
                    </div>
                @endif

                @if(Session::has('error'))
                    <div class="col-md-12 notification">
                        <div class="bg-red disabled alert-dismissible alert">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h4><i class="icon fa fa-check"></i> Thông báo!</h4>
                            {{Session::get('error')}}
                        </div>
                    </div>
                @endif
                <div class="box-body">
                    @include('admin.pages.introduces._form_img')
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('plugin/ckfinder/ckfinder.js') }}"></script>
    <script src="{{ asset('js/admin/introduce-img.js') }}"></script>
@endsection
