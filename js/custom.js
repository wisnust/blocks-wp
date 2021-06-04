jQuery(document).ready(function ($) {

    // Slider Post

    // Internal Link Carousel Slider
    $('.slider-post-row').each(function(i, el) {
        $(this).slick({
            infinite: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: false,
            arrows: true,
            adaptiveHeight: true,
            prevArrow: '<button class="slide-prev btn-arrow"><i class="far fa-arrow-left"></i></button>',
            nextArrow: '<button class="slide-next btn-arrow"><i class="far fa-arrow-right"></i></button>',
        });
    });
    
});