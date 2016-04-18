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

                $W.bind('click',function(e){
                    var $target = $(e.target),
                        checkTarget = !$target.closest('.datepicker--cell').length  && !$target.closest('.datepicker--nav-title').length && !$target.closest('.datepicker--nav-action').length && !$target.closest($this).length;
                    if( checkTarget ){
                        $this.removeClass('_active');
                    }
                })
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


$(function () {
    var $datepicker = $('.js-datepicker');
    if(!$datepicker.length) return;

    $datepicker.each(function(){
        var $this = $(this),
            dataInline = $this.data('inline');

        $this.datepicker({
            inline: dataInline
        });
    })

});