(function($, window) {
    $('#owl-vitrine').owlCarousel({
        loop: true,
        center: true,
        autoplay: true,
        margin: 30,
        nav: false,
        dots: false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
})(jQuery, window);