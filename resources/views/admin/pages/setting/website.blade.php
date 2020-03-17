@extends('admin.layout.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Cài đặt website </h3>
                </div>
                <!-- /.box-header -->
                @if(Session::has('success'))
                    <div class="col-md-12 notification">
                        <div class="bg-green disabled alert-dismissible alert">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h4><i class="icon fa fa-check"></i> Thông báo!</h4>
                            {{Session::get('success')}}
                        </div>
                    </div>
                @endif
                <!-- form start -->
                {!! Form::open(['route' => 'admin.setting.update']) !!}
                    {{Form::hidden('mode_setting', Config::get('constant.settings.mode.website'))}}
                    <div class="col-md-6">
                        <div class="box-body">
                            <div class="form-group">
                                <label>Tên website:</label>
                                {{Form::text('name', old('name', $setting->name) , ['class' => 'form-control', 'placeholder' => 'Tên website'])}}
                                @if($errors->has('name'))
                                    <span class="help-block">{{$errors->first('name')}}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Email:</label>
                                {{Form::text('email', old('email', $setting->email), ['class' => 'form-control', 'placeholder' => 'Email'])}}
                                @if($errors->has('email'))
                                    <span class="help-block">{{$errors->first('email')}}</span>
                                @endif
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4" style="padding-left: 0">
                                    <label>Tel:</label>
                                    {{Form::tel('tel', old('tel', $setting->tel), ['class' => 'form-control', 'placeholder' => 'Tel'])}}
                                    @if($errors->has('tel'))
                                        <span class="help-block">{{$errors->first('tel')}}</span>
                                    @endif
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Hotline:</label>
                                    {{Form::text('hotline', old('hotline', $setting->hotline), ['class' => 'form-control', 'placeholder' => 'Hotline'])}}
                                    @if($errors->has('hotline'))
                                        <span class="help-block">{{$errors->first('hotline')}}</span>
                                    @endif
                                </div>
                                <div class="form-group col-md-4" style="padding-right: 0">
                                    <label>Fax:</label>
                                    {{Form::text('fax', old('fax', $setting->fax), ['class' => 'form-control', 'placeholder' => 'Fax'])}}
                                    @if($errors->has('fax'))
                                        <span class="help-block">{{$errors->first('fax')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Copyright:</label>
                                {{Form::text('copyright', old('fax', $setting->copyright), ['class' => 'form-control', 'placeholder' => '© 2018 Cheer Farm Food JSC. All rights reserved.'])}}
                            </div>
                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="box-body">
                            <div class="form-group">
                                <label>Facebook:</label>
                                {{Form::text('facebook', old('fax', $setting->facebook), ['class' => 'form-control', 'placeholder' => 'Ex: http://fb.com/cheeryfarm'])}}
                            </div>
                            <div class="form-group">
                                <label>Youtube:</label>
                                {{Form::text('youtube', old('fax', $setting->youtube), ['class' => 'form-control', 'placeholder' => 'Ex: http://youtube.com/channel/UCLBvZEXw1uhwQ-9mGNSrw4w'])}}
                            </div>
                            <div class="form-group">
                                <label>Instagram:</label>
                                {{Form::text('instagram', old('fax', $setting->instagram), ['class' => 'form-control', 'placeholder' => 'Ex: http://instagram.com/cheerfarm'])}}
                            </div>
                            <div class="form-group">
                                <label>Chọn banner</label>
                                <div class="input-group input-group-sm">
                                    {{Form::text('background_img', old('background_img', $setting->background_img), [ 'readonly' ,'class' => 'form-control', 'id' => "background_img", 'placeholder' => "Chọn background "])}}
                                    <span class="input-group-btn">
                                    <button type="button" class="btn btn-info btn-flat btn-choose-img">
                                        <i class="fa fa-image"></i>
                                        Chọn ảnh
                                    </button>
                                    <button type="button" class="btn btn-danger btn-flat btn-clear-img">
                                        <i class="fa fa-trash"></i>
                                        Xóa
                                    </button>
                                  </span>
                                </div>
                                <img src="{{old('background_img', $setting->background_img)}}" style="float: unset !important;" class="img-banner-view" id="view-banner-img" alt="">
                            </div>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script src="{{ asset('plugin/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('plugin/ckfinder/ckfinder.js') }}"></script>

    <script  type="text/javascript">
        {{--var $router = '{{ route('admin.product.ckfinder', ['type' => 'Images']) }}'--}}
        $('.btn-choose-img').on('click', function () {
            selectFileWithCKFinder()
        })
        $('.btn-clear-img').on('click', function () {
            $('#background_img').val('')
            $('#view-banner-img').attr('src', null)
        })
        function selectFileWithCKFinder() {
            CKFinder.modal({
                chooseFiles: true,
                width: 800,
                height: 600,
                onInit: function (finder) {
                    finder.on('files:choose', function (evt) {
                        var file = evt.data.files.first();
                        var output = $('#background_img')
                        var view_img = $('#view-banner-img')
                        output.val(file.attributes.url)
                        view_img.attr('src', file.attributes.url)
                    });

                    finder.on('file:choose:resizedImage', function (evt) {
                        var output = $('#background_img')
                        output.val(evt.data.resizedUrl)
                        var view_img = $('#view-banner-img')
                        view_img.attr('src', evt.data.resizedUrl)
                    });
                }
            });
        }
    </script>

@endsection
