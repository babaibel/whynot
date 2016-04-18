
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
});