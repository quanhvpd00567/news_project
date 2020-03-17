// // Carousel Auto-Cycle
// $(document).ready(function() {
//     $('.carousel').carousel({
//       interval: 6000
//     })
//   });


function initYume() {
  $('#yume').slick({
    dots: true,
    infinite: true,
    centerPadding: '50px',
    speed: 300,
    arrows: false,
    slidesToShow: 3,
    slidesToScroll: 3,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });
}

function initSameHeight() {
  setSameHeight('.home-latest-news-content', '.home-latest-news-item', mdMin);
  setSameHeight('.home-top-articles-content', '.home-top-articles-item');
  setSameHeight('.missing-articles-content', '.missing-articles-item');
  setSameHeight('.missing-articles-content', '.missing-articles-item-title');
  setSameHeight('.should-read-articles-content', '.should-read-articles-item--large .should-read-articles-item-title');
  setSameHeight('.should-read-articles-content', '.should-read-articles-item--large');
  setSameHeight('.should-read-articles-content', '.should-read-articles-item--small-row');
}

$(window).resize(function () {
  //latest news  
  initSameHeight();
})

function init() {
  initFeedbackForm();
  initYume();
  initSameHeight();
}

init();