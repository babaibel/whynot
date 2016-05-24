

$(function () {
    var $fEvents = $('.js-f-events');
    if (!$fEvents.length) return;

    var $form = $fEvents.find('form'),
        $fEventCounter = $('.js-fevents-counter'),
        $daterangeUI = $fEvents.find('.js-daterange-ui'),
        $daterangeInput = $fEvents.find('.js-daterange_input'),
        $dateFinalInput = $fEvents.find('.js-f-events-date'),
        dataUrl = $fEvents.data('query-url');

    _GLOB.refreshFindEventCounter = function () {
        $.ajax({
            type: 'GET',
            url: dataUrl,
            data: $form.serialize(),
            success: function (data) {
                var parsedData = JSON.parse(data)

                $fEventCounter.text(parsedData.eventsCountStr);
            }
        })
    };

    $form.find('input').bind('input change', function () {
        _GLOB.refreshFindEventCounter();
    });




    $W.on('dateRangesInit',function(){
        $dateFinalInput.val(
            $daterangeInput.val()
        );

        $daterangeUI[0].noUiSlider.on('slide', function (values, handleNumb, numbValues) {
            $dateFinalInput.val(
                $daterangeInput.val()
            );
            _GLOB.refreshFindEventCounter();
        });
    });


});

$(function () {
    var $wrDatepicker = $('.js-daterange-datepicker');
    if (!$wrDatepicker.length) return;

    var $feInput = $('.js-f-events-date'),
    //dataInline = $wrDatepicker.data('inline'),
        nowDate = new Date();

    $wrDatepicker.datepicker({
        inline: true,
        minDate: nowDate,
        onSelect: function (val) {
            $feInput.val(val);
            _GLOB.refreshFindEventCounter();
        }
    });
});