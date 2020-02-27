$('.btn-choose-img').on('click', function () {
    var data_id = $(this).attr('data-id');
    selectFileWithCKFinder(data_id)
})

$('.btn-clear-img').on('click', function () {
    var data_id = $(this).attr('data-id');
    if($('#' + data_id).val() != ''){
        if(confirm("Bạn có chắc chắn muốn xóa hình ảnh này không?")){
            $('#' + data_id).val('')
            $('#view-' + data_id).attr('src', '')
        }
    }
})

function selectFileWithCKFinder(elementId) {
    CKFinder.modal({
        chooseFiles: true,
        width: 800,
        height: 600,
        onInit: function (finder) {
            finder.on('files:choose', function (evt) {
                var file = evt.data.files.first();
                var output = $('#' + elementId)
                var view_img = $('#view-' + elementId)
                output.val(file.attributes.url)
                view_img.fadeIn('show').attr('src', file.attributes.url)
            });

            finder.on('file:choose:resizedImage', function (evt) {
                var output = $('#' + elementId)
                output.val(evt.data.resizedUrl)
                var view_img = $('#view-' + elementId)
                view_img.attr('src', evt.data.resizedUrl)
            });
        }
    });
}
