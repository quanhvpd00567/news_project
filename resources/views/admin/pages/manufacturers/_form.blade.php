
<?php
$routeName = 'admin.manufacturer.create';
if (!isset($isPageCreate)){
    $routeName = 'admin.manufacturer.update';
}
?>

{!! Form::open(['route' => [$routeName, $manufacturer->id], 'id' =>"image-upload",  'files' => true] ) !!}
<div class="col-md-6">
    <div class="form-group">
        <label>Tên sản phẩm:</label>
        {{Form::text('name', old('name', $manufacturer->name) , ['class' => 'form-control', 'placeholder' => 'Tên sản phẩm'])}}
        @if($errors->has('name'))
            <span class="help-block">{{$errors->first('name')}}</span>
        @endif
    </div>
    <div class="form-group">
        <label>Mô tả:</label>
        {{Form::textarea('description', old('description', $manufacturer->description) , ['class' => 'form-control textarea-resize-vertical', 'placeholder' => 'Mô tả', 'rows' => 3])}}
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label>Tên sản phẩm <span class="language-waning">(Tiếng anh)</span>:</label>
        {{Form::text('name_en', old('name_en', $manufacturer->name_en), ['class' => 'form-control', 'placeholder' => 'Tên sản phẩm bằng tiếng anh'])}}
        @if($errors->has('name_en'))
            <span class="help-block">{{$errors->first('name_en')}}</span>
        @endif
    </div>

    <div class="form-group">
        <label>Mô tả <span class="language-waning">(Tiếng anh)</span>:</label>
        {{Form::textarea('description_en', old('description_en', $manufacturer->description_en) , ['class' => 'form-control textarea-resize-vertical', 'placeholder' => 'Mô tả bằng tiếng anh', 'rows' => 3])}}
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
                    {{Form::textarea('content',  old('content', $manufacturer->content), ['placeholder' => 'Mô tả', 'id' => 'introduce_content'])}}
                </div>
            </div>
            <div class="tab-pane" id="tab_2">
                <div class="form-group">
                    {{Form::textarea('content_en',  old('content_en', $manufacturer->content_en), ['placeholder' => 'Mô tả', 'id' => 'introduce_content_en'])}}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label>Từ khóa:</label>
        <p class="small">Từ khóa tiếng việt cách nhau bở dấu '<b class="cke_required">,</b>'</p>
        {{Form::text('keyword', old('keyword', $manufacturer->keyword), ['class' => 'form-control', 'placeholder' => 'keyword bằng tiếng việt'])}}
    </div>
    <div class="form-group">
        <label>Chọn banner</label>
        <div class="input-group input-group-sm">
            {{Form::text('banner', old('banner', $manufacturer->banner), [ 'readonly' ,'class' => 'form-control', 'id' => "banner", 'placeholder' => "Chọn banner"])}}
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

        <img src="{{old('banner', $manufacturer->banner)}}" style="float: unset !important;" class="img-banner-view" id="view-banner-img" alt="">
    </div>

    <div class="form-group">
        <label>Chọn ảnh</label>
        <div class="input-group input-group-sm">
            {{Form::text('image', old('image', $manufacturer->image), [ 'readonly' ,'class' => 'form-control', 'id' => "image", 'placeholder' => "Chọn ảnh"])}}
            <span class="input-group-btn">
                <button type="button" class="btn btn-info btn-flat btn-image">
                    <i class="fa fa-image"></i>
                    Chọn ảnh
                </button>
              </span>
        </div>
        <img src="{{old('image', $manufacturer->image)}}" style="width: 300px; min-height: 300px" class="single" id="view-image" alt="">
        @if($errors->has('image'))
            <span class="help-block">{{$errors->first('image')}}</span>
        @endif
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label>Từ khóa <span class="language-waning">(Tiếng anh)</span>:</label>
        <p class="small">Từ khóa tiếng anh cách nhau bở dấu '<b class="cke_required">,</b>'</p>
        {{Form::text('keyword_en', old('keyword_en', $manufacturer->keyword_en), ['class' => 'form-control', 'placeholder' => 'keyword bằng tiếng anh'])}}
    </div>
    <div class="form-group">
        <label>Hiện thị sản phẩm:</label>
        <div style="padding-top: 10px;">
            <label style="font-weight: normal; cursor: pointer">
                <input type="checkbox" name="status" class="minimal-red"
                       @if($manufacturer->status == Config::get('constant.status.isShow')))
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
            <a href="{{route('admin.manufacturer.image', [$manufacturer->id])}}" class="btn btn-primary">
                <i class="fa fa-image"></i>
                Thêm album ảnh
            </a>
        @endif
    </div>
</div>

{!! Form::close() !!}
