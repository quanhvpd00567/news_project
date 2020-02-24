@extends('admin.layout.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Chỉnh sử loại sản xuất</h3>
                </div>
                <div class="box-body">
                    @include('admin.pages.introduces._form')
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('plugin/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('plugin/ckfinder/ckfinder.js') }}"></script>

    <script  type="text/javascript">
        $('input[type="checkbox"].minimal-red').iCheck({
            checkboxClass: 'icheckbox_minimal-red',
            radioClass   : 'iradio_minimal-red'
        })

        var ckfinderConfig = {
            filebrowserImageBrowseUrl: '{{ route('admin.product.ckfinder', ['type' => 'Images']) }}'
        }

        CKEDITOR.replace( 'introduce_content', ckfinderConfig );
        CKEDITOR.replace( 'introduce_content_en', ckfinderConfig );

        $('.btn-choose-img').on('click', function () {
            selectFileWithCKFinder()
        })
        function selectFileWithCKFinder() {
            CKFinder.modal({
                chooseFiles: true,
                width: 800,
                height: 600,
                onInit: function (finder) {
                    finder.on('files:choose', function (evt) {
                        var file = evt.data.files.first();
                        var output = $('#banner')
                        var view_img = $('#view-banner-img')
                        output.val(file.attributes.url)
                        view_img.attr('src', file.attributes.url)
                    });

                    finder.on('file:choose:resizedImage', function (evt) {
                        var output = $('#banner')
                        output.val(evt.data.resizedUrl)
                        var view_img = $('#view-banner-img')
                        view_img.attr('src', evt.data.resizedUrl)
                    });
                }
            });
        }
    </script>
@endsection
