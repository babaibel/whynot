;(function ($) {
    $.fn.imgSimpleUpload = function (settings) {
        var $this = $(this),
            $input = $this.find('input[type="file"]'),
            dataMinW = $this.data('min-w'),
            dataMinH = $this.data('min-w');

        $input.bind('change input', function (e) {
            var reader = new FileReader(),
                file = $input[0].files[0];

            reader.onload = (function (thisFile) {
                return function (e) {
                    var strDataUrl = e.target.result,
                        newImg = new Image;

                    newImg.src = strDataUrl;

                    if(newImg.width < dataMinW && newImg.height < dataMinH){
                        $input.val('');
                        return;
                    }

                    if (settings.type == 'bg') {
                        $this.css('background-image',"url('" + strDataUrl + "')");
                    }
                    if (settings.type == 'img') {
                        $this.html(
                            '<img src="' + strDataUrl + '">'
                        );
                    }

                    $this.addClass('_loaded');
                }
            })(file);

            reader.readAsDataURL(file);
        })
    }
})(jQuery);


// запрет на ввод определенных символов
(function ($) {
    $.fn.onlyListedKeys = function (regexp) {
        $(this).each(function () {
            var $this = $(this),
                oldValue = $this.val();

            $this.bind('change input', function () {
                var newValue = $this.val();

                if (!regexp.test(newValue)) {
                    $this.val(oldValue);
                } else {
                    oldValue = newValue;
                }

            });
        });
    }
})(jQuery);

$(function () {
    var $avaUpload = $('.js-ava-upload');
    if (!$avaUpload.length) return;
    $avaUpload.each(function () {
        var $this = $(this);

        $(this).imgSimpleUpload({
            target: $this,
            type: 'bg' //img
        });
    })

});

$(function () {
    var $onlyDigits = $('.js-only-digits');
    if (!$onlyDigits.length) return;
    $onlyDigits.onlyListedKeys(/^([0-9](\.)?(-)?(,)?){0,}$/);

});