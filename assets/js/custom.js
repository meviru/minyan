jQuery(document).ready(function () {
    jQuery("#user-menu").click(function () {
        jQuery("#user-dropdown").fadeToggle(150);
        jQuery("#lang-dropdown").hide();
    });

    jQuery("#selected-lang").click(function () {
        jQuery("#lang-dropdown").fadeToggle(150);
        jQuery("#user-dropdown").hide();
    });

    const config = {
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        dots: true,
        centerMode: true,
        centerPadding: 0,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
        ]
    }

    jQuery("#slider").slick(config);

    jQuery("#slider-2").slick(config);

    jQuery("#slider-3").slick(config);

    jQuery("#slider-4").slick(config);
});