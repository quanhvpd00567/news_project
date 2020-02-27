
<?php
$routeName = 'admin.introduce.create';
if (!isset($isPageCreate)){
    $routeName = 'admin.introduce.update';
}
?>

{!! Form::open(['route' => [$routeName, $introduce->id], 'id' =>"image-upload",  'files' => true] ) !!}
<div class="col-md-6">
    <div class="form-group">
        <label>Tên hình thức giới thiệu:</label>
        {{Form::text('name', old('name', $introduce->name) , ['class' => 'form-control', 'placeholder' => 'Tên hình thức giới thiệu'])}}
        @if($errors->has('name'))
            <span class="help-block">{{$errors->first('name')}}</span>
        @endif
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label>Tên hình thức giới thiệu <span class="language-waning">(Tiếng anh)</span>:</label>
        {{Form::text('name_en', old('name_en', $introduce->name_en), ['class' => 'form-control', 'placeholder' => 'Tên hình thức giới thiệu bằng tiếng anh'])}}
        @if($errors->has('name_en'))
            <span class="help-block">{{$errors->first('name_en')}}</span>
        @endif
    </div>
</div>

<div class="col-md-12">
    <div class="form-group">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_1" data-toggle="tab">Tiếng việt</a></li>
                <li><a href="#tab_2" data-toggle="tab">Tiếng anh</a></li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="tab-pane active" id="tab_1">
                <div class="form-group">
                    {{Form::textarea('content',  old('content', $introduce->content), ['placeholder' => 'Mô tả', 'id' => 'introduce_content'])}}
                </div>
            </div>
            <div class="tab-pane" id="tab_2">
                <div class="form-group">
                    {{Form::textarea('content_en',  old('content_en', $introduce->content_en), ['placeholder' => 'Mô tả', 'id' => 'introduce_content_en'])}}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label>Từ khóa:</label>
        <p class="small">Từ khóa tiếng việt cách nhau bở dấu '<b class="cke_required">,</b>'</p>
        {{Form::text('keyword', old('keyword', $introduce->keyword), ['class' => 'form-control', 'placeholder' => 'keyword bằng tiếng việt'])}}
    </div>
    <div class="form-group">
        <label>Chọn banner</label>
        <div class="input-group input-group-sm">
            {{Form::text('banner', old('keyword', $introduce->banner), [ 'readonly' ,'class' => 'form-control', 'id' => "banner", 'placeholder' => "Chọn banner"])}}
            <span class="input-group-btn">
                <button type="button" class="btn btn-info btn-flat btn-choose-img">
                    <i class="fa fa-image"></i>
                    Chọn ảnh
                </button>
              </span>
        </div>
        @if($errors->has('banner'))
            <span class="help-block">{{$errors->first('banner')}}</span>
        @endif
        <img src="{{old('banner', $introduce->banner)}}" style="float: unset !important;" class="img-banner-view" id="view-banner-img" alt="">
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label>Từ khóa <span class="language-waning">(Tiếng anh)</span>:</label>
        <p class="small">Từ khóa tiếng anh cách nhau bở dấu '<b class="cke_required">,</b>'</p>
        {{Form::text('keyword_en', old('keyword_en', $introduce->keyword_en), ['class' => 'form-control', 'placeholder' => 'keyword bằng tiếng anh'])}}
    </div>
    <div class="form-group">
        <label>Hiện thị sản phẩm:</label>
        <div style="padding-top: 10px;">
            <label style="font-weight: normal; cursor: pointer">
                <input type="checkbox" name="status" class="minimal-red"
                       @if($introduce->status == Config::get('constant.status.isShow')))
                       checked
                    @endif
                >
                Tích để hiện thị
            </label>
        </div>
    </div>
</div>

<div class="col-md-12 text-center">
    <div class="form-group">
        <button type="submit" class="btn btn-primary">
            <i class="fa fa-save"></i>
            Lưu
        </button>
        @if(!isset($isPageCreate))
            <a href="{{route('admin.introduce.image', [$introduce->id])}}" class="btn btn-primary">
                <i class="fa fa-image"></i>
                Thêm album ảnh
            </a>
        @endif

    </div>
</div>

{!! Form::close() !!}
