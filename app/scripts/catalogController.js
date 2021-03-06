;(function ($) {
    $.fn.catTabs = function () {
        $(this).each(function () {
            var $this = $(this),
                $btns = $this.find('.js-mr-cat-btn'),
                $tabs = $this.find('.js-mr-cat-tab');

            function onScroll(pPercent) {
                var scroll = $W.scrollTop(),
                    $actTab = $tabs.filter('._active'),
                    $actTabCards = $actTab.find('.js-card'),
                    $actTabSliders = $actTab.find('.js-actions-sl'),
                    percent = pPercent || 0.8;

                $actTabCards.each(function () {
                    var $thisCard = $(this);

                    if (elemInView($thisCard.parent(), percent) || scroll > $thisCard.offset().top) $thisCard.addClass('_animated')
                });

                $actTabSliders.each(function () {
                    var $thisSlider = $(this);

                    if (elemInView($thisSlider, percent) || scroll > $thisSlider.offset().top) $thisSlider.addClass('_animated')
                });
            }


            $btns.bind('click', function (e) {
                var $this = $(this),
                    i = $this.parent().index(),
                    $targetTab = $tabs.eq(i),
                    productsHtml;

                $tabs.removeClass('_active').find('.js-card').removeClass('_animated');
                $tabs.removeClass('_active').find('.js-actions-sl').removeClass('_animated');
                $targetTab.addClass('_active');
                $btns.removeClass('_active').parent().removeClass('_active');
                $this.addClass('_active').parent().addClass('_active');

                $W.scroll();
            });


            $W.scroll(function () {
                onScroll();
            });

            onScroll(1);

        })
    }
})(jQuery);

$(function () {
    var $catTabs = $('.js-catalog-tabs');
    if (!$catTabs.length) return;
    $catTabs.catTabs();
});

$(function () {
    var $cardHidden = $('.js-catalog-loadOut');
    if (!$cardHidden.length) return;

    var $moreBtn = $('.js-show-more'),
        daraMoreBtnUrl = $moreBtn.data('url'),
        $loadOutCont = $('.js-catalog-loadOut');

    function onScroll2() {
        var scroll2 = $W.scrollTop(),
            $actTabCards = $cardHidden.find('.js-card:not(._animated)'),
            $actTabSliders = $cardHidden.find('.js-actions-sl:not(._animated)'),
            percent2 = 0.8;

        $actTabCards.each(function () {
            var $thisCard = $(this);

            if (elemInView($thisCard.parent(), percent2) || scroll2 > $thisCard.offset().top) $thisCard.addClass('_animated')
        });

        $actTabSliders.each(function () {
            var $thisSlider = $(this);

            if (elemInView($thisSlider, percent2) || scroll2 > $thisSlider.offset().top) $thisSlider.addClass('_animated')
        });
    }

    $moreBtn.on('click', function() {

        $.ajax({
            type: 'GET',
            url: daraMoreBtnUrl,
            success: function (html) {

                $loadOutCont.append(html);

                onScroll2(1);
            }
        });
    });

    $W.scroll(function () {
        onScroll2();
    });

    onScroll2(1);
});



$(function () {
    var $filterParam = $('.js-filter-param');
    if(!$filterParam.length) return;

    $filterParam.each(function(){
        var $this = $(this),
            $toggleHead = $this.find('.js-filter-param__btn');

        $toggleHead.bind('click',function(e){
            var status = $this.hasClass('_open');

            $filterParam.not($this).removeClass('_open');
            $this.toggleClass('_open');
            e.stopPropagation();
            $W.bind('click',function(e){
                var $target = $(e.target),
                    checkTarget = !$target.closest('.datepicker--cell').length  && !$target.closest('.datepicker--nav-title').length && !$target.closest('.datepicker--nav-action').length  && !$target.closest($this).length;

                if( checkTarget ){
                    $this.removeClass('_open');
                    $W.unbind('click');
                }
            })
        })

    })

});

$(function () {
    var $filter = $('.js-filter'),
        $filterToggle = $('.js-filter__mob-toggle');
    if (!$filter.length && !$filterToggle.length) return;

    var $filterForm = $('.js-filter-form'),
        $daterangeUI = $filterForm.find('.js-daterange-ui'),
        $selector = $('.js-selector--in-filter');



    $selector.customSelector({
        beforeSelect: function(){
            _POPUPS['catMap'].map.renewData();
        }
    });

    $filterToggle.bind('click',function(){
        $B.toggleClass('_m-filter-open');

        $W.bind('click',function(e){
            var $target = $(e.target),
                checkTarget = !$target.closest($filter).length && !$target.closest('.datepicker--cell').length  && !$target.closest('.datepicker--nav-title').length && !$target.closest('.datepicker--nav-action').length;

            if( checkTarget ){
                $B.removeClass('_m-filter-open');
                $W.unbind('click');
            }
        })
    })

    $W.on('dateRangesInit',function(){
        $daterangeUI[0].noUiSlider.on('slide', function (values, handleNumb, numbValues) {
            _POPUPS['catMap'].map.renewData();
        });
    });
});