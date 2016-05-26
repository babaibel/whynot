(function ($) {
    $.fn.customSelector = function (settings) {
        $(this).each(function () {
            var $this = $(this),
                $current = $this.find('.js-selector-current'),
                $options = $this.find('.js-selector-options'),
                $input =
                    $this.find('.js-selector-input').length ? $this.find('.js-selector-input') : $this.find('input[type="hidden"]'),
                defaultSetting = {};

            for (var p in settings) {
                defaultSetting[p] = settings[p];
            }

            function toggleList() {
                $options.toggle();
                $this.toggleClass('_open');
            }

            $current.bind('click', function (e) {
                if($input.prop('disabled')) return;

                toggleList();

                $W.bind('click', function (e) {
                    if ($this.hasClass('_open') && !$(e.target).closest($this).length) {
                        toggleList();
                        $D.unbind('click');
                    }
                });

                e.preventDefault();
            });

            $options.find('.js-selector-option').bind('click', function () {
                var $option = $(this);
                var valForInput = $option.data('option-name') || $option.text();

                if (defaultSetting.beforeSelect) {
                    var callbackBeforeResult =  defaultSetting.beforeSelect($option, $options.find('.js-selector-option'), $.trim(valForInput));

                    if(callbackBeforeResult == false){
                        return false;
                    }
                }

                $current.html($(this).html());


                if ($input) {
                    $input.val(valForInput);
                }

                toggleList();

                if (defaultSetting.afterSelect) {
                    var callbackAfterResult = defaultSetting.afterSelect($option, $options.find('.js-selector-option'));

                    if(callbackAfterResult == false){
                        return false;
                    }
                }
            })

        })
    }
})(jQuery);


(function(){
    var $select = $('.js-selector');

    if(!$select.length) return;

    $select.customSelector({
    });

})(jQuery);