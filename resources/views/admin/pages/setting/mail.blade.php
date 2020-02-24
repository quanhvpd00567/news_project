@extends('admin.layout.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Cài đặt Email </h3>
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
                {{Form::hidden('mode_setting', Config::get('constant.settings.mode.mail'))}}
                <div class="col-md-6">
                    <div class="box-body">
                        <div class="form-group">
                            <label>MAIL DRIVER:</label>
                            {{Form::text('mail_driver', old('mail_driver', $setting->mail_driver) , ['class' => 'form-control', 'placeholder' => 'Ex: smtp, mailgun, ...'])}}
                            @if($errors->has('mail_driver'))
                                <span class="help-block">{{$errors->first('mail_driver')}}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>MAIL HOST:</label>
                            {{Form::text('mail_host', old('mail_host', $setting->mail_host), ['class' => 'form-control', 'placeholder' => 'Ex: smtp.mailtrap.io'])}}
                            @if($errors->has('mail_host'))
                                <span class="help-block">{{$errors->first('mail_host')}}</span>
                            @endif
                        </div>

                        <div class="form-group ">
                            <label>MAIL PORT:</label>
                            {{Form::tel('mail_port', old('mail_port', $setting->mail_port), ['class' => 'form-control', 'placeholder' => 'Ex: 2525'])}}
                            @if($errors->has('mail_port'))
                                <span class="help-block">{{$errors->first('mail_port')}}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>MAIL USERNAME:</label>
                            {{Form::text('mail_username', old('mail_username', $setting->mail_username), ['class' => 'form-control', 'placeholder' => 'Ex: info@cheeryfarm.com'])}}
                            @if($errors->has('mail_username'))
                                <span class="help-block">{{$errors->first('mail_username')}}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>MAIL PASSWORD:</label>
                            {{Form::text('mail_password', old('mail_password', $setting->mail_password), ['class' => 'form-control', 'type' =>'password', 'placeholder' => 'Ex: *****'])}}
                            @if($errors->has('mail_password'))
                                <span class="help-block">{{$errors->first('mail_password')}}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>MAIL ENCRYPTION:</label>
                            {{Form::text('mail_encryption', old('mail_encryption', $setting->mail_encryption), ['class' => 'form-control', 'placeholder' => 'Ex: tls'])}}
                            @if($errors->has('mail_encryption'))
                                <span class="help-block">{{$errors->first('mail_encryption')}}</span>
                            @endif
                        </div>

                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection
