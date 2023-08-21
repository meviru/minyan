$(document).ready(function () {
    $("#user-menu").click(function () {
        $("#user-dropdown").fadeToggle(150);
        $("#lang-dropdown").hide();
    });

    $("#selected-lang").click(function () {
        $("#lang-dropdown").fadeToggle(150);
        $("#user-dropdown").hide();
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

    $("#slider").slick(config);

    $("#slider-2").slick(config);

    $("#slider-3").slick(config);

    $("#slider-4").slick(config);
});