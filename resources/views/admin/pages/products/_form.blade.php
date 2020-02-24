
<?php
    $routeName = 'admin.product.create';
    if (!isset($isPageCreate)){
        $routeName = 'admin.product.update';
    }
?>


{!! Form::open(['route' => [$routeName, $product->id], 'id' =>"image-upload",  'files' => true, 'enctype' => 'multipart/form-data'] ) !!}
<div class="col-md-6">
    <div class="form-group">
        <label>Tên sản phẩm:</label>
        {{Form::text('name', old('name', $product->name) , ['class' => 'form-control', 'placeholder' => 'Tên sản phẩm'])}}
        @if($errors->has('name'))
            <span class="help-block">{{$errors->first('name')}}</span>
        @endif
    </div>

    <div class="form-group">
        <label>Mô tả:</label>
        {{Form::textarea('description', old('description', $product->description) , ['class' => 'form-control textarea-resize-vertical', 'placeholder' => 'Mô tả', 'rows' => 3])}}
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-sm-6">
                <label>Chọn hình ảnh bao bì:</label>
                <div class="input-group input-group-sm">
                    {{Form::text('image_1', old('image_1', $product->image_1), [ 'readonly' ,'class' => 'form-control', 'id' => "image_1", 'placeholder' => "Chọn hình ảnh bao bì"])}}
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-info btn-flat" id="btn-choose-img-1">
                            <i class="fa fa-image"></i>
                            Chọn ảnh
                        </button>
                    </span>

                </div>
            </div>
            <div class="col-sm-6">
                <img src="{{old('image_1', $product->image_1)}}" style="float: unset !important;" class="img-banner-view" id="view-banner-img-1" alt="">
            </div>
            @if($errors->has('image_1'))
                <span class="help-block">{{$errors->first('image_1')}}</span>
            @endif
        </div>
    </div>

</div>

<div class="col-md-6">
    <div class="form-group">
        <label>Tên sản phẩm <span class="language-waning">(Tiếng anh)</span>:</label>
        {{Form::text('name_en', old('name_en', $product->name_en), ['class' => 'form-control', 'placeholder' => 'Tên sản phẩm bằng tiếng anh'])}}
        @if($errors->has('name_en'))
            <span class="help-block">{{$errors->first('name_en')}}</span>
        @endif
    </div>

    <div class="form-group">
        <label>Mô tả <span class="language-waning">(Tiếng anh)</span>:</label>
        {{Form::textarea('description_en', old('description_en', $product->description_en) , ['class' => 'form-control textarea-resize-vertical', 'placeholder' => 'Mô tả bằng tiếng anh', 'rows' => 3])}}
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-sm-6">
                <label>Chọn hình ảnh sản phẩm:</label>
                <div class="input-group input-group-sm">
                    {{Form::text('image_2', old('image_2', $product->image_2), [ 'readonly' ,'class' => 'form-control', 'id' => "image_2", 'placeholder' => "Chọn hình ảnh sản phẩm"])}}
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-info btn-flat" id="btn-choose-img-2">
                            <i class="fa fa-image"></i>
                            Chọn ảnh
                        </button>
                    </span>

                </div>
            </div>
            <div class="col-sm-6">
                <img src="{{old('image_2', $product->image_2)}}" style="float: unset !important;" class="img-banner-view" id="view-banner-img-2" alt="">
            </div>
            @if($errors->has('image_2'))
                <span class="help-block">{{$errors->first('image_2')}}</span>
            @endif
        </div>
    </div>
</div>

<div class="col-md-12">
    <div class="form-group">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_1" data-toggle="tab">Mô tả</a></li>
                <li><a href="#tab_2" data-toggle="tab">Công dụng</a></li>
                <li><a href="#tab_3" data-toggle="tab">Dinh dưỡng</a></li>

            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_1">
                    <div class="form-group">
                        <label>Tiếng việt</label>
                        {{Form::textarea('content',  old('content', $product->content), ['placeholder' => 'Mô tả', 'id' => 'product_content'])}}
                    </div>
                    <div class="form-group">
                        <label>Tiếng anh</label>
                        {{Form::textarea('content_en',  old('content_en', $product->content_en), ['placeholder' => 'Mô tả tiếng anh', 'id' => 'product_content_en'])}}
                    </div>
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_2">
                    <div class="form-group">
                        <label>Tiếng việt</label>
                        {{Form::textarea('purpose',  old('purpose', $product->purpose), ['placeholder' => 'Mô tả dinh dưỡng', 'id' => 'product_purpose'])}}
                    </div>
                    <div class="form-group">
                        <label>Tiếng anh</label>
                        {{Form::textarea('purpose_en',  old('purpose_en', $product->purpose_en), ['placeholder' => 'Mô tả dinh dưỡng bằng tiếng anh', 'id' => 'product_purpose_en'])}}
                    </div>
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_3">
                    <div class="form-group">
                        <label>Tiếng việt</label>
                        {{Form::textarea('nutrition',  old('nutrition', $product->nutrition_en), ['placeholder' => 'Mô tả dinh dưỡng', 'id' => 'product_nutrition'])}}
                    </div>
                    <div class="form-group">
                        <label>Tiếng anh</label>
                        {{Form::textarea('nutrition_en',  old('nutrition', $product->nutrition_en), ['placeholder' => 'Mô tả dinh dưỡng bằng tiếng anh', 'id' => 'product_nutrition_en'])}}
                    </div>
                </div>
                <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
        </div>
    </div>

</div>

<div class="col-md-6">
    <div class="form-group">
        <label>Chọn memu:</label>
        {{Form::select('category_id', $categories, old('category_id', $product->category_id), ['class' => 'form-control'])}}
    </div>
    <div class="form-group">
        <label>Từ khóa:</label>
        <p class="small">Từ khóa tiếng việt cách nhau bở dấu '<b class="cke_required">,</b>'</p>
        {{Form::text('keyword', old('keyword', $product->keyword), ['class' => 'form-control', 'placeholder' => 'keyword bằng tiếng việt'])}}
    </div>

</div>

<div class="col-md-6">
    <div class="form-group">
        <label>Hiện thị sản phẩm:</label>
        <div style="padding-top: 10px;">
            <label style="font-weight: normal; cursor: pointer">
                <input type="checkbox" name="status" class="minimal-red"
                       @if($product->status == Config::get('constant.status.isShow')))
                       checked
                    @endif
                >
                Tích để hiện thị
            </label>
        </div>
    </div>
    <div class="form-group">
        <label>Từ khóa <span class="language-waning">(Tiếng anh)</span>:</label>
        <p class="small">Từ khóa tiếng anh cách nhau bở dấu '<b class="cke_required">,</b>'</p>
        {{Form::text('keyword_en', old('keyword_en', $product->keyword_en), ['class' => 'form-control', 'placeholder' => 'keyword bằng tiếng anh'])}}
    </div>
</div>

<div class="col-md-12 text-center">
    <div class="form-group">
        <button type="submit" class="btn btn-primary">
            <i class="fa fa-save"></i>
            Lưu
        </button>
        @if(!isset($isPageCreate))
            <a href="{{route('admin.album.new', [$product->id])}}" class="btn btn-primary">
                <i class="fa fa-image"></i>
                Thêm album ảnh
            </a>
        @endif
    </div>
</div>

{!! Form::close() !!}
