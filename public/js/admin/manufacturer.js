$('input[type="checkbox"].minimal-red').iCheck({
    checkboxClass: 'icheckbox_minimal-red',
    radioClass   : 'iradio_minimal-red'
})

CKEDITOR.replace( 'introduce_content', ckfinderConfig );
CKEDITOR.replace( 'introduce_content_en', ckfinderConfig );

$('.btn-choose-img').on('click', function () {
    var output = $('#banner')
    var view_img = $('#view-banner-img')
    selectFileWithCKFinder(output, view_img)
})

$('.btn-image').on('click', function () {
    var output = $('#image')
    var view_img = $('#view-image')
    selectFileWithCKFinder(output, view_img)
})

$('.btn-clear-img').on('click', function () {
    $('#banner').val('')
    $('#view-banner-img').attr('src', null)
})

function selectFileWithCKFinder(output, view_img) {
    CKFinder.modal({
        chooseFiles: true,
        width: 800,
        height: 600,
        onInit: function (finder) {
            finder.on('files:choose', function (evt) {
                var file = evt.data.files.first();
                output.val(file.attributes.url)
                view_img.attr('src', file.attributes.url)
            });

            finder.on('file:choose:resizedImage', function (evt) {
                output.val(evt.data.resizedUrl)
                view_img.attr('src', evt.data.resizedUrl)
            });
        }
    });
}
