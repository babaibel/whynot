
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

        if( newScroll <= scroll  && newScroll > 200){
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