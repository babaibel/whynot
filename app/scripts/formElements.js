$(function () {
    var $chkbDropdown = $('.js-chkb-dropdown');
    if(!$chkbDropdown.length) return;

    $chkbDropdown.each(function(){
        var $this = $(this),
            $head = $this.find('.js-chkb-dropdown__btn'),
            dataResol = $this.data('resol');

        $head.bind('click',function(){
            if($W.width() <= _GLOB.breakpoints[dataResol]){
                $this.toggleClass('_active');
            }
        })
    })

});