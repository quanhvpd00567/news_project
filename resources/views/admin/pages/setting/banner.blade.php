@extends('admin.layout.master')
@section('title')
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Thêm hình ảnh</h3>
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
                    {!! Form::open(['route' => 'admin.setting.update.banner']) !!}
                    @foreach($screens as $key => $item)
                        <div class="col-md-12" style="padding-bottom: 20px">
                            <div class="col-md-6">
                                <div class="item">
                                    <lable>{{$item}}</lable>
                                    <div class="input-group input-group-sm">
                                        {{Form::text($key, isset($banners[$key]) ? $banners[$key]['url'] : null , [ 'readonly',  'class' => 'form-control', 'id' => "input_img_{$key}", 'placeholder' => "Chọn hình ảnh"])}}
                                        <span class="input-group-btn">
                                            <button type="button" data-id="{{$key}}" class="btn btn-info btn-flat  btn-choose-img">
                                                <i class="fa fa-image"></i>
                                                Chọn ảnh
                                            </button>
                                            <button type="button" data-id="{{$key}}" class="btn btn-danger btn-flat btn-clear-img">
                                                <i class="fa fa-trash"></i>
                                                Xóa
                                            </button>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div >
                                        <label style="font-weight: normal; cursor: pointer">
                                            <input type="checkbox" name="check_{{$key}}" class="minimal-red"
                                               {{ isset($banners[$key]) && $banners[$key]['status'] == 1 ? 'checked' : '' }}
                                            >
                                            Tích để hiện thị
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img src="{{isset($banners[$key]) ? $banners[$key]['url'] : null}}" style="float: unset !important;" class="preview-img-1" id="view_img_{{$key}}" alt="">
                            </div>
                        </div>
                    @endforeach
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <button class="btn btn-primary">Lưu</button>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('plugin/ckfinder/ckfinder.js') }}"></script>
    <script>

        $(document).on('click', '.btn-choose-img', function () {
            var data_id = $(this).attr('data-id')
            selectFileWithCKFinder(data_id)
        })

        $(document).on('click', '.btn-clear-img', function () {
            var data_id = $(this).attr('data-id')
            $('#input_img_' + data_id).val('')
            $('#view_img_' + data_id).attr('src', null)
        })

        function selectFileWithCKFinder(elementId) {
            var output = $('#input_img_' + elementId)
            var view_img = $('#view_img_' + elementId)
            CKFinder.modal({
                chooseFiles: true,
                width: 800,
                height: 600,
                onInit: function (finder) {
                    finder.on('files:choose', function (evt) {
                        var file = evt.data.files.first();
                        output.val(file.attributes.url)
                        view_img.fadeIn('show').attr('src', file.attributes.url)
                    });

                    finder.on('file:choose:resizedImage', function (evt) {
                        output.val(evt.data.resizedUrl)
                        view_img.attr('src', evt.data.resizedUrl)
                    });
                }
            });
        }
    </script>
@endsection
