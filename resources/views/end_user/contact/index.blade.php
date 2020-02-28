@extends('end_user.layout.master')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection
@section('content')
    <div class="home-news-body-container container">
        <div class="home-news-body-row row">
            <div class="home-news-body-left col-sm-12 col-md-12">
                <div class="main-section row">

                    <div id="banner-contact">
                        <img style="width: 100%" src="{{asset('images/bg/gallery_banner.png')}}" alt="">
                    </div>

                    <div class="breadcrumb">
                        <ul>
                            <li>@lang('view.contact.Contact')</li>
                        </ul>
                    </div>
                    <div>
                        <p class="no-margin-bottom">{{trans('view.contact.Description1')}}</p>
                        <p>{{trans('view.contact.Description2')}}</p>
                        <p class="no-margin-bottom">{{trans('view.contact.Email confirm')}}</p>
                    </div>
                    <div class="row" id="content-contact">

                        <div class="col-md-6 contact-left">
                            @if(Session::has('success'))
                            <div class="text-success">{{Session::get('success')}}</div>
                            @endif
                            @if(Session::has('error'))
                                <div class="text-danger">{{Session::get('error')}}</div>
                            @endif
                            {!! Form::open(['route' => 'contact.send']) !!}
                                <div class="form-group row field-contact">
                                    <label class="col-sm-3 col-form-label">
                                        {{trans('view.contact.Form.labels.name')}}
                                        <span class="cke_required">*</span>
                                    </label>
                                    <div class="col-sm-9">
                                        {{Form::text('full_name', old('full_name', null), ['class' => 'form-control', 'placeholder' => trans('view.contact.Form.labels.name')])}}
                                        @if($errors->has('full_name'))
                                            <span class="help-block">{{$errors->first('full_name')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row field-contact">
                                    <label class="col-sm-3 col-form-label">
                                        {{trans('view.contact.Form.labels.company')}}
                                    </label>
                                    <div class="col-sm-9">
                                        {{Form::text('company', old('company', null), ['class' => 'form-control', 'placeholder' => trans('view.contact.Form.labels.company')])}}
                                    </div>
                                </div>

                                <div class="form-group row field-contact">
                                    <label class="col-sm-3 col-form-label">
                                        {{trans('view.contact.Form.labels.address')}}

                                        <span class="cke_required">*</span>
                                    </label>
                                    <div class="col-sm-9">
                                        {{Form::text('address', old('address', null), ['class' => 'form-control', 'placeholder' => trans('view.contact.Form.labels.address')])}}
                                        @if($errors->has('address'))
                                            <span class="help-block">{{$errors->first('address')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row field-contact">
                                    <label class="col-sm-3 col-form-label">
                                        {{trans('view.contact.Form.labels.title')}}
                                        <span class="cke_required">*</span>
                                    </label>
                                    <div class="col-sm-9">
                                        {{Form::text('title', old('title', null), ['class' => 'form-control', 'placeholder' => trans('view.contact.Form.labels.title')])}}
                                        @if($errors->has('title'))
                                            <span class="help-block">{{$errors->first('title')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row field-contact">
                                    <label class="col-sm-3 col-form-label">
                                        {{trans('view.contact.Form.labels.content')}}
                                        <span class="cke_required">*</span>
                                    </label>
                                    <div class="col-sm-9">
                                        {{Form::textarea('content', old('content', null), [ 'cols' => 30,  'rows' => 10 ,'class' => 'form-control', 'placeholder' => trans('view.contact.Form.labels.content')])}}
                                        @if($errors->has('content'))
                                            <span class="help-block">{{$errors->first('content')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row text-center">
                                    <button type="submit" class="btn btn-success">
                                        {{trans('view.contact.Form.buttons.send')}}
                                    </button>
                                </div>
                            {!! Form::close() !!}
                        </div>

                        <div class="col-md-6 contact-right">
{{--                            <div class="form-group row">--}}
{{--                                <img src="http://127.0.0.1:8000/images/logo.png" alt="">--}}
{{--                            </div>--}}
                            <div class="form-group row item">
                                <label class="col-sm-12 col-form-label">{{$settingsContact->name}}</label>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">
                                    <a href="mailto:{{$settingsContact->email}}">{{$settingsContact->email}}</a>
                                </label>
                            </div>
                            <div class="form-group row item">
                                <label class="col-sm-12 col-form-label">
                                    {{trans('view.contact.Form.labels.Office')}}
                                </label>
                            </div>
                            <div class="form-group row item">
                                <label class="col-sm-2 col-form-label">
                                    {{trans('view.contact.Form.labels.Tel')}}
                                </label>
                                <label class="col-sm-10">
                                    {{$settingsContact->tel}}
                                </label>
                            </div>

                            <div class="form-group row item">
                                <label class="col-sm-2 col-form-label">
                                    {{trans('view.contact.Form.labels.Hotline')}}
                                </label>
                                <label class="col-sm-10">
                                    {{$settingsContact->hotline}}
                                </label>
                            </div>

                            <div class="form-group row item">
                                <label class="col-sm-2 col-form-label">
                                    {{trans('view.contact.Form.labels.Fax')}}
                                </label>
                                <label class="col-sm-10">
                                    {{$settingsContact->fax}}
                                </label>
                            </div>
                            <div class="form-group">
                                <div id="map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.0852785927846!2d108.20883231494757!3d16.061063888885954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219b44ca88dc1%3A0x35afc8c7d34ecd99!2sCheer+Farm+Fruit+JSC!5e0!3m2!1svi!2s!4v1524884142154" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
