
$(function () {
    var $hSearch = $('.js-header-search'),
        $hSearchBtn = $('.js-header-search-trigger');
    if(!$hSearchBtn.length) return;

    var scroll = $W.scrollTop();

    $hSearchBtn.bind('click',function(){
        $hSearch.toggleClass('_expanded');
        $W.bind('click', function(e){
            var $target = $(e.target);

            if(!$target.closest('.js-header-search').length ){
                $hSearch.removeClass('_expanded');
                $W.unbind('click');
            }
        })
    });

    $W.scroll(function(){
        var newScroll = $W.scrollTop();

        if( newScroll <= scroll  && newScroll > 0){
            $B.addClass('_search-open');
        }else{
            $B.removeClass('_search-open');
        }
        scroll = newScroll;
    });

});

$(function () {
    var $hMenuhBtn = $('.js-header-menu-btn');

    if(!$hMenuhBtn.length) return;

    $hMenuhBtn.bind('click',function(e){
        $B.toggleClass('_header-menu-open');


        $W.bind('click', function(e){
            var $target = $(e.target);
            if(!$target.closest('.js-header-menu').length && !$target.closest($hMenuhBtn).length){
                $B.removeClass('_header-menu-open');
                $W.unbind('click');
            }
        });

        e.stopPropagation();
    });
});

$(function () {
    var $hSearch = $('.js-sticky-header')
    if(!$hSearch.length) return;

    var scroll = $W.scrollTop();

    $W.scroll(function(){
        var newScroll = $W.scrollTop();

        if( newScroll > 86){
            $B.addClass('_stycky-header');
        }else{
            $B.removeClass('_stycky-header');
        }
        scroll = newScroll;
    });

});