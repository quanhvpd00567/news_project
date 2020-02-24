$('input[type="checkbox"].minimal-red').iCheck({
    checkboxClass: 'icheckbox_minimal-red',
    radioClass   : 'iradio_minimal-red'
})

var toolbarConfig = [
    { name: 'basicstyles', items: [ 'Bold', 'Italic', 'Underline', 'Strikethrough' ] },
    { name: 'colors', items : [ 'TextColor','BGColor' ] },
    { name: 'links', items : [ 'Link','Unlink','Anchor' ] },
]

CKEDITOR.replace( 'introduce', {
    toolbar : toolbarConfig,
    uiColor : '#9AB8F3'
});

CKEDITOR.replace( 'introduce_en', {
    toolbar : toolbarConfig,
    uiColor : '#9AB8F3'
});

CKEDITOR.replace( 'content_block_2_en', {
    toolbar : toolbarConfig,
    uiColor : '#085aef'
});

CKEDITOR.replace( 'content_block_2', {
    toolbar : toolbarConfig,
    uiColor : '#085aef'
});

CKEDITOR.replace( 'content_block_3_en', {
    toolbar : toolbarConfig,
    uiColor : '#3b9a3d'
});

CKEDITOR.replace( 'content_block_3', {
    toolbar : toolbarConfig,
    uiColor : '#3b9a3d'
});

$('.btn-choose-img').on('click', function () {
    selectFileWithCKFinder()
});
$('#btn-delete-banner').on('click', function () {
    if ( $('#banner').val() != ''){
        if (confirm('Bạn có muốn xóa banner này không ?')){
            $('#banner').val('');
            $('#view-banner-img').attr('src', null)
        }
    }
});

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
