$(document).ready(function () {
    $("#user-menu").click(function () {
        $("#user-dropdown").fadeToggle(150);
        $("#lang-dropdown").hide();
    });

    $("#selected-lang").click(function () {
        $("#lang-dropdown").fadeToggle(150);
        $("#user-dropdown").hide();
    });

    $("#slider").slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        dots: true
    });

    $("#slider-2").slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        dots: true
    });
    
    $("#slider-3").slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        dots: true
    });
    
    $("#slider-4").slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        dots: true
    });
});