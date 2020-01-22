/*---------------------------
    => load-more
-----------------------------*/
$(document).ready(function() {
  
  let limit = 6;

  if ($(".blog-posts .col-md-6:hidden").length == 0) {
    $(".blog-posts .col-md-6").slice(6).hide();
  }

  if ($('.blog-posts .col-md-6').length != 0) {
    $(".loadmore__button").show();
  }

  $(".loadmore__button").on("click", function(e) {
    e.preventDefault();
  
    $(".blog-posts .col-md-6:hidden").slice(0, limit).show();
    if ($(".blog-posts .col-md-6:hidden").length == 0) {
      $(".loadmore__button").hide();
    }
  });
});


var glider = new Glider(document.querySelector(".glider"), {
  draggable: true,
  duration: 0.5,
  dots: ".dots",
  arrows: {
    prev: ".glider-prev",
    next: ".glider-next"
  },
  responsive: [
    {
      breakpoint: 980,
      settings: {
        slidesToShow: 3.5,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 750,
      settings: {
        slidesToShow: 2.5,
        slidesToScroll: 1
      }
    },

    {
      breakpoint: 500,
      settings: {
        slidesToShow: 1.5,
        slidesToScroll: 1
      }
    }
  ]
});

glider();
