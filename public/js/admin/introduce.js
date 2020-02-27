$('input[type="checkbox"].minimal-red').iCheck({
    checkboxClass: 'icheckbox_minimal-red',
    radioClass   : 'iradio_minimal-red'
})

var ckfinderConfig = {
    filebrowserImageBrowseUrl: $router
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
