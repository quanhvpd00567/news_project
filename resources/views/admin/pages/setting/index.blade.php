@extends('admin.layout.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Cài đặt văn phòng </h3>
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
                    <div class="col-md-6">
                        <div class="box-body">
                            <div class="form-group">
                                <label>Địa chỉ văn phòng:</label>
                                {{Form::text('office_branch', old('office_branch', $setting->office_branch), ['class' => 'form-control', 'placeholder' => 'Địa chỉ văn phòng'])}}
                                {{Form::hidden('mode_setting', Config::get('constant.settings.mode.office'))}}
                                @if($errors->has('office_branch'))
                                    <span class="help-block">{{$errors->first('office_branch')}}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Địa chỉ văn phòng: <span class="language-waning">(Tiếng anh)</span></label>
                                {{Form::text('office_branch_en', old('office_branch_en', $setting->office_branch_en), ['class' => 'form-control', 'placeholder' => 'Địa chỉ văn phòng (Tiếng anh)'])}}
                                @if($errors->has('office_branch_en'))
                                    <span class="help-block">{{$errors->first('office_branch_en')}}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Địa chỉ nhà máy:</label>
                                {{Form::text('factory', old('factory', $setting->factory), ['class' => 'form-control', 'placeholder' => 'Địa chỉ nhà máy'])}}
                                @if($errors->has('factory'))
                                    <span class="help-block">{{$errors->first('factory')}}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Địa chỉ nhà máy: <span class="language-waning">(Tiếng anh)</span></label>
                                {{Form::text('factory_en', old('factory_en', $setting->factory_en), ['class' => 'form-control', 'placeholder' => 'Địa chỉ nhà máy (Tiếng anh)'])}}
                                @if($errors->has('factory_en'))
                                    <span class="help-block">{{$errors->first('factory_en')}}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Địa chỉ kho:</label>
                                {{Form::text('warehouse', old('warehouse', $setting->warehouse), ['class' => 'form-control', 'placeholder' => 'Địa chỉ kho'])}}
                                @if($errors->has('warehouse'))
                                    <span class="help-block">{{$errors->first('warehouse')}}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Địa chỉ kho: <span class="language-waning">(Tiếng anh)</span></label>
                                {{Form::text('warehouse_en', old('warehouse_en', $setting->warehouse_en), ['class' => 'form-control', 'placeholder' => 'Địa chỉ kho (Tiếng anh)'])}}
                                @if($errors->has('warehouse_en'))
                                    <span class="help-block">{{$errors->first('warehouse_en')}}</span>
                                @endif
                            </div>

                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection
