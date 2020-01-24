/*---------------------------
    => load-more
-----------------------------*/
$(document).ready(function() {
  
  let limit = 6;

  if ($(".postbox:hidden").length == 0) {
    $(".postbox").slice(6).hide();
  }

  if ($('.postbox').length != 0) {
    $(".loadmore__button").show();
  }

  $(".loadmore__button").on("click", function(e) {
    e.preventDefault();
  
    $(".postbox:hidden").slice(0, limit).show();
    if ($(".postbox:hidden").length == 0) {
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
