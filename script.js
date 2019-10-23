(function($) {
    'use strict';

    $(document).ready(function() {
        qodefOwlSmallSlider();
    });

    /**
     * Init Owl Carousel on portfolio Full Width Slider
     */
    function qodefOwlSmallSlider() {

        var sliders = $('.qodef-portfolio-small-slider');

        if (sliders.length) {
            sliders.each(function(){
                var slider = $(this);
                slider.owlCarousel({
                    items: 1,
                    stagePadding: 0,
                    dots:false,
                    nav:true,
                    video:true,
                    navText:[
                        "<span class='arrow_left'></span>",
                        "<span class='arrow_right'></span>"
                    ]
                }).animate({'opacity': 1},600);
            });
        }

    }

})(jQuery);
