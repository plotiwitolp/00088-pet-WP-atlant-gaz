$('.my-custom-slider').slick({
  infinite: true,
  dots: false,
  arrows: false,
  slidesToShow: 1,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
      },
    },
  ],
});

// console.log($('#my-custom-slider').slick());
