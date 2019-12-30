new Glider(document.querySelector(".glider"), {
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
  ],

});
