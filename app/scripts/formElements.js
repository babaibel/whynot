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

$(function () {
    var $passToggle = $('.js-passw-input');
    if(!$passToggle.length) return;

    $passToggle.each(function(){
        var $this = $(this),
            $btn = $this.find('.js-password-toggle'),
            $input = $(this).find('input');

        $btn.bind('click',function(){
            var status = $this.hasClass('_pass-visible');

            if(status){
                $this.removeClass('_pass-visible');
                $input.attr('type','password');
            }else{
                $this.addClass('_pass-visible');
                $input.attr('type','text');
            }
        })
    })

});