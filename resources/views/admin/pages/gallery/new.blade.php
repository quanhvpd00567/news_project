@extends('admin.layout.master')
@section('title')
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Thêm hình ảnh</h3>
                    <button class="btn btn-primary" id="add-img" type="button">
                        <i class="fa fa-plus"></i>
                        Thêm ảnh
                    </button>
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
                    {!! Form::open(['route' => 'admin.gallery.create']) !!}
                        <div class="col-md-12">
                            <div id="list-img">
                                @if(count($images) > 0)
                                    @foreach($images as $key => $item)
                                        <?php $key = $key++ ?>
                                        <div class="row">
                                            <div class="group-img">
                                                <div class="col-md-6">
                                                    <div class="item">
                                                        <lable>Hình ảnh {{$key}}</lable>
                                                        <div class="input-group input-group-sm">
                                                            {{Form::text("gallery[]", $item->url , [ 'readonly',  'class' => 'form-control input-img', 'id' => "input-img-{$key}", 'placeholder' => "Chọn hình ảnh {$key}"])}}
                                                            <span class="input-group-btn">
                                                                <button type="button" data-id="{{$key}}" class="btn btn-info btn-flat btn-choose-img">
                                                                    <i class="fa fa-image"></i>
                                                                    Chọn ảnh
                                                                </button>
                                                                <button type="button" class="btn btn-danger btn-flat btn-clear-img">
                                                                    <i class="fa fa-trash"></i>
                                                                    Xóa
                                                                </button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <img src="{{$item->url}}" style="float: unset !important;" class="preview-img-1" id="view-input-img{{$key}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
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
                </div>
                <div id="group-img-template">
                    <div class="row">
                        <div class="group-img">
                            <div class="col-md-6">
                                <div class="item">
                                    <lable>Hình ảnh</lable>
                                    <div class="input-group input-group-sm">
                                        {{Form::text("gallery[]", null , [ 'readonly',  'class' => 'form-control input-img', 'id' => "input-img", 'placeholder' => "Chọn hình ảnh"])}}
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
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img src="" style="float: unset !important;" class="preview-img-1" id="view-input-img-" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('plugin/ckfinder/ckfinder.js') }}"></script>

    <script>
        $('#group-img-template').hide()
        setIdElement()
        $('#add-img').on('click', function () {
            $listImg = $('#list-img');
            $objTemplate = $('#group-img-template')
            var temp = $objTemplate.children().clone()
            $listImg.append(temp)
            setIdElement()
        })

        function setIdElement() {
            $listImg = $('#list-img');
            $listImg.find('.row').each(function (index ) {
                index++
                $(this).find('lable').text('Hình ảnh ' + index)
                $(this).find('.input-img').attr('placeholder', 'Chọn hình ảnh ' + index).attr('id', 'input-img-' + index)
                $(this).find('img').attr('id', 'view-input-img-' + index)
                $(this).find('.btn-choose-img').attr('data-id', index)
            })
        }

        $(document).on('click', '.btn-choose-img', function () {
            var data_id = $(this).attr('data-id')
            var output = $('#input-img-' + data_id)
            var view_img = $('#view-input-img-' + data_id)
            selectFileWithCKFinder(data_id)
        })

        $(document).on('click', '.btn-clear-img', function () {
           $(this).closest('.row').remove()
            setIdElement()
        })
        function selectFileWithCKFinder(elementId) {
            var output = $('#input-img-' + elementId)
            var view_img = $('#view-input-img-' + elementId)
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
