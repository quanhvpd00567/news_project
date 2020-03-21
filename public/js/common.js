var mdMin = 992;
var smMin = 768;

$('.dropdown').on('show.bs.dropdown', function () {
    $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
});

// Add slideUp animation to Bootstrap dropdown when collapsing.
$('.dropdown').on('hide.bs.dropdown', function () {
    $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
});

//set child same height
function setSameHeight(classParent, classChild, defaultWidth = 0) {
    $(classParent).each(function () {
        $(classChild, this).css('height', '');

        if ($(window).width() < defaultWidth) {
            return;
        }
        // Cache the highest
        var highestBox = 0;
        // Select and loop the elements you want to equalise
        $(classChild, this).each(function () {

            // If this box is higher than the cached highest then store it
            if ($(this).height() > highestBox) {
                highestBox = $(this).height();
            }

        });

        // Set the height of all those children to whichever was highest
        $(classChild, this).height(highestBox);

    });
}

function initFeedbackForm() {
    var text = document.getElementById('js-feedback');

    function resize() {
        text.style.height = 'auto';
        text.style.height = text.scrollHeight + 'px';
    }

    /* 0-timeout to get the already changed text */
    function delayedResize() {
        window.setTimeout(resize, 0);
    }

    function triggerActive() {
        var btnSubmit = document.getElementById('js-feedback-btn-submit');
        if (text.value) {
            btnSubmit.disabled = false;
            btnSubmit.classList.add('active');
            text.classList.add('active');
        } else {
            btnSubmit.disabled = true;
            btnSubmit.classList.remove('active');
            text.classList.remove('active');
        }
    }

    $('.navbar-lang a').on('click', function () {
        $('.navbar-lang a').removeClass('active')
        $(this).addClass('active')
    })
}

$('.grid .missing-articles-item').hover(
    function () {
        $(this).animate({
            marginTop: "-=1%"
        }, 200)
    },
    function() {
        $(this).animate({
            marginTop: "0%"
        }, 200)
    }
)
