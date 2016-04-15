_GLOB.slickArrLeftHtml = '<button class="slick-arrow slick-prev"></button>';
_GLOB.slickArrRightHtml = '<button class="slick-arrow slick-next"></button>';


$(function () {
    var $wr = $('.js-actions-sl');
    if (!$wr.length) return;

    $wr.slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        //fade: false,
        //speed: 500,
        adaptiveHeight: true,
        //accessibility: false,
        prevArrow: _GLOB.slickArrLeftHtml,
        nextArrow: _GLOB.slickArrRightHtml,
        swipe: false,
        responsive:[
            {
                breakpoint: _GLOB.breakpoints.sm,
                settings: {
                    swipe: true
                }
            }
        ]
    });
});

$(function () {
    var $wr = $('.js-actions-sl2');
    if (!$wr.length) return;

    $wr.slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        //fade: false,
        //speed: 500,
        adaptiveHeight: true,
        //accessibility: false,
        prevArrow: _GLOB.slickArrLeftHtml,
        nextArrow: _GLOB.slickArrRightHtml,
        swipe: false,
        responsive:[
            {
                breakpoint: _GLOB.breakpoints.sm,
                settings: {
                    swipe: true
                }
            }
        ]
    });
});

$(function () {
    var $recomSl = $('.js-recom-sl');
    if (!$recomSl.length) return;

    $recomSl.slick({
        slidesToShow: 2,
        slidesToScroll: 2,
        dots: false,
        arrows: true,
        adaptiveHeight: true,
        prevArrow: '<button class="slick-arrow2 slick-prev"></button>',
        nextArrow: '<button class="slick-arrow2 slick-next"></button>',
        swipe: false,
        responsive:[
            {
                breakpoint: _GLOB.breakpoints.mm,
                settings: {
                    swipe: true
                }
            },
            {
                breakpoint: _GLOB.breakpoints.sm,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    dots: true,
                    swipe: true
                }
            }
        ]
    });
});