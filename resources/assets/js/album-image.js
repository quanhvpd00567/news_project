var modal = document.getElementById('myModal');
$(document).on('click', '.image-slide', function(){
    var urlImage = $(this).attr('src')
    $('#load-image').attr('src', urlImage)
});

$('#load-image').on('click', function(){
    modal.style.display = "block";
    var urlImage = $(this).attr('src')
    $('.modal-content').attr('src', urlImage)
});

$('#myCarousel').carousel({
    interval: 3000
});

$('.close').on('click', function(){
    closeModalImage();
});

function closeModalImage(){
    modal.style.display = "none";
}

$(document).on('keydown', function(event) {
    if (event.key === "Escape") {
        closeModalImage();
    }
});

$('.carousel .item').each(function(){
    var next = $(this).next();
    if (!next.length) {
        next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));
    for (var i=0; i<2; i++) {
        next=next.next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));
    }
});

