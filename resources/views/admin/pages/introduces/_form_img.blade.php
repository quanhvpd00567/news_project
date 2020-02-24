<?php

$routeName = 'admin.introduce.create.image';

?>
{!! Form::open(['route' => [$routeName, $product->id]]) !!}
    <div class="col-md-6">
        @for($i = 1; $i <= 5 ; $i++)
            <div id="list-img">
                <div class="item">
                    <lable>Hình ảnh {{$i}}</lable>
                    <div class="input-group input-group-sm">
                        {{Form::text("albums[image_{$i}]",  count($images) == 0 ? null : $images["image_{$i}"] , [ 'readonly',  'class' => 'form-control', 'id' => "input-img-{$i}", 'placeholder' => "Chọn hình ảnh {$i}"])}}
                        <span class="input-group-btn">
                                                    <button type="button" data-id="input-img-{{$i}}" class="btn btn-info btn-flat  btn-choose-img">
                                                        <i class="fa fa-image"></i>
                                                        Chọn ảnh
                                                    </button>
                                                </span>
                    </div>
                    <img src="{{ count($images) == 0 ? null : $images["image_{$i}"]}}" style="float: unset !important;" class="preview-img-1" id="view-input-img-{{$i}}" alt="">
                </div>
            </div>
        @endfor
        <div class="box-footer">
            <button class="btn btn-primary" type="submit">
                <i class="fa fa-save"></i>
                Lưu
            </button>
            <a class="btn btn-primary" href="{{route('admin.product.list')}}">
                <i class="fa fa-list"></i>
                Trở về danh sách
            </a>
        </div>
    </div>
    <div class="col-md-6">
        @for($i = 6; $i <= 10 ; $i++)
            <div id="list-img">
                <div class="item">
                    <lable>Hình ảnh {{$i}}</lable>
                    <div class="input-group input-group-sm">
                        {{Form::text("albums[image_{$i}]", count($images) == 0 ? null : $images["image_{$i}"] , [ 'readonly' ,'class' => 'form-control', 'id' => "input-img-{$i}", 'placeholder' => "Chọn hình ảnh {$i}"])}}
                        <span class="input-group-btn">
                            <button type="button" data-id="input-img-{{$i}}" class="btn btn-info btn-flat  btn-choose-img">
                                <i class="fa fa-image"></i>
                                Chọn ảnh
                            </button>
                        </span>
                    </div>
                    <img src="{{  count($images) == 0 ? null : $images["image_{$i}"]}}" style="float: unset !important;" class="preview-img-1" id="view-input-img-{{$i}}" alt="">
                </div>
            </div>
        @endfor
    </div>
{!! Form::close() !!}
