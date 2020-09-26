jQuery("#popular").owlCarousel({
  loop: true,
  margin: 10,
  stagePadding: 50,
  // nav: true,
  // navSpeed: 1000,
  autoplay: true,
  autoplayTimeout: 3000,
  autoplaySpeed: 1000,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 2,
    },
    900: {
      items: 3,
    },
    1200: {
      items: 4,
    },
    1800: {
      items: 5,
    },
  },
});

jQuery("#featured").owlCarousel({
  loop: true,
  items: 1,
  autoplay: true,
  autoplayTimeout: 3000,
  autoplaySpeed: 1000,
  smartSpeed: 450,
});
