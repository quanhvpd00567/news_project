$('input[type="checkbox"].minimal-red').iCheck({
    checkboxClass: 'icheckbox_minimal-red',
    radioClass   : 'iradio_minimal-red'
})


CKEDITOR.replace( 'product_content', ckfinderConfig );
CKEDITOR.on( 'product_content', function (ev ) {
    var dialogName = ev.data.name;
    var dialogDefinition = ev.data.definition;
    if ( dialogName === 'link' || dialogName === 'image' )
    {
        dialogDefinition.removeContents( 'Upload' );
    }
} );
CKEDITOR.replace( 'product_content_en', ckfinderConfig );
CKEDITOR.replace( 'product_purpose', ckfinderConfig );
CKEDITOR.replace( 'product_purpose_en', ckfinderConfig );
CKEDITOR.replace( 'product_nutrition', ckfinderConfig );
CKEDITOR.replace( 'product_nutrition_en', ckfinderConfig );
CKEDITOR.replace( 'product_description', ckfinderConfig );
CKEDITOR.replace( 'product_description_en', ckfinderConfig );

$("#image_1").change(function () {
    $emlView = $('#preview-img1')
    filePreview(this, $emlView);
});

$("#image_2").change(function () {
    $emlView = $('#preview-img2')
    filePreview(this, $emlView);
});

function filePreview(input, $emlView) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $emlView.attr('src', e.target.result)
        };
        reader.readAsDataURL(input.files[0]);
    }else{
        $emlView.attr('src', "{{asset('images/no-image.png')}}")
    }
}


$('#btn-choose-img-1').on('click', function () {
    var elm_input = $('#image_1')
    var elm_view = $('#view-banner-img-1')
    selectFileWithCKFinder(elm_input, elm_view)
});

$('#btn-choose-img-2').on('click', function () {
    var elm_input = $('#image_2')
    var elm_view = $('#view-banner-img-2')
    selectFileWithCKFinder(elm_input, elm_view)
});

function selectFileWithCKFinder(elm_input, elm_view) {
    CKFinder.modal({
        chooseFiles: true,
        width: 800,
        height: 600,
        onInit: function (finder) {
            finder.on('files:choose', function (evt) {
                var file = evt.data.files.first();
                elm_input.val(file.attributes.url)
                elm_view.attr('src', file.attributes.url)
            });

            finder.on('file:choose:resizedImage', function (evt) {
                elm_input.val(evt.data.resizedUrl)
                elm_view.attr('src', evt.data.resizedUrl)
            });
        }
    });
}
