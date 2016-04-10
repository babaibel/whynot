_GLOB.slickArrLeftHtml = '<button class="slick-arrow slick-prev"></button>';
_GLOB.slickArrRightHtml = '<button class="slick-arrow slick-next"></button>';

$(function () {
    var $wr = $('.js-index-slider');
    if (!$wr.length) return;

    $wr.slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        fade: false,
        speed: 500,
        adaptiveHeight: true,
        accessibility: false,
        prevArrow: _GLOB.slickArrLeftHtml,
        nextArrow: _GLOB.slickArrRightHtml,
    });
});