{!! Form::open(['route' => 'admin.gallery.create']) !!}
    <div class="col-md-12">
        <div id="list-img">
            <div class="group-img">
                <div class="col-md-6">
                    <div class="item">
                        <lable>Hình ảnh 1</lable>
                        <div class="input-group input-group-sm">
                            {{Form::text("albums[image_]", null , [ 'readonly',  'class' => 'form-control', 'id' => "input-img", 'placeholder' => "Chọn hình ảnh"])}}
                            <span class="input-group-btn">
                        <button type="button" data-id="input-img" class="btn btn-info btn-flat  btn-choose-img">
                            <i class="fa fa-image"></i>
                            Chọn ảnh
                        </button>
                        <button type="button" data-id="input-img" class="btn btn-danger btn-flat btn-clear-img">
                            <i class="fa fa-trash"></i>
                            Xóa
                        </button>
                    </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="" style="float: unset !important;" class="preview-img-1" id="view-input-img-" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="box-footer">
            <button class="btn btn-primary" type="submit">
                <i class="fa fa-save"></i>
                Lưu
            </button>
            <a class="btn btn-primary" href="{{route('admin.introduce.list')}}">
                <i class="fa fa-list"></i>
                Trở về danh sách
            </a>
        </div>
    </div>
{!! Form::close() !!}
