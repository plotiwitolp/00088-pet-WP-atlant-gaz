$('.my-custom-slider').slick({
  infinite: true,
  dots: false,
  arrows: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  nextArrow: '<i class="fa fa-angle-right" aria-hidden="true"></i>',
  prevArrow: '<i class="fa fa-angle-left" aria-hidden="true"></i>',
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
