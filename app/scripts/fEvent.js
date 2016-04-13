$(function () {
    var $fEvents = $('.js-f-events');
    if (!$fEvents.length) return;

    var $form = $fEvents.find('form'),
        $fEventCounter = $('.js-fevents-counter'),
        dataUrl = $fEvents.data('query-url');

    _GLOB.refreshFindEventCounter = function () {
        $.ajax({
            type: 'GET',
            url: dataUrl,
            data: $form.serialize(),
            success: function (data) {
                var parsedData = JSON.parse(data)

                $fEventCounter.text(parsedData.eventsCountStr );
            }
        })
    };

    $form.find('input').bind('input change',function(){
        _GLOB.refreshFindEventCounter();
    });

});

//weekrange
$(function () {
    var $weekrange = $('.js-weekrange');
    if (!$weekrange.length) return;

    var $rangeUI = $('.js-weekrange-ui'),
        $arrL = $weekrange.find('.js-weekrange__arr-l'),
        $arrR = $weekrange.find('.js-weekrange__arr-r'),
        $wrDates = $weekrange.find('.js-weekrange-date'),
        $wrTracker = $weekrange.find('.js-weekrange-tracker'),
        $wrVline = $weekrange.find('.js-weekrange-v-line'),
        $feInput = $('.js-f-events-date'),
    //$wrInputMax = $weekrange.find('.js-f-events-date-max'),
    //initDate = new Date(),
        datesLength = $wrDates.length,
        currentStepFrom = 0,
    //currentStepTo = 5,
        stepValue = 100 / 7,
        noUiObject,
        $tooltips;


    $rangeUI.css('width', (stepValue * datesLength) + '%');

    noUiSlider.create($rangeUI[0], {
        start: [0, 5],
        connect: false,
        range: {
            'min': 0,
            'max': datesLength - 1
        },
        step: 1,
        tooltips: [true, true]
    });

    noUiObject = $rangeUI[0].noUiSlider;
    $tooltips = $('.noUi-tooltip');


    function arrClick(arrowType, jObj) {
        //var values = noUiObject.get();

        if (jObj.hasClass('_disabled')) return;

        /* if(arrowType == 'prev'){
         if( values[0] > 0) values[0] -= 1;

         if( values[0] )
         }

         if(arrowType == 'next'){
         if( values[1] < 6) values[1] += 1;
         }*/

        //console.log(values)
        // noUiObject.set(values);

        // Шаг влево
        if (arrowType == 'prev' && currentStepFrom != 0) {
            currentStepFrom -= 1;
            //$wrTracker.css('left', -(currentStepFrom * stepValue) + '%');
        }

        // Шаг вправо
        if (arrowType == 'next' && currentStepFrom != datesLength - 7) {
            currentStepFrom += 1;
        }

        // Движение
        $wrTracker.css('left', -(currentStepFrom * stepValue) + '%');
        $rangeUI.css('left', -(currentStepFrom * stepValue) + '%');

        // Регулятор класса
        if (currentStepFrom != 0) {
            $arrL.removeClass('_disabled');
        } else {
            $arrL.addClass('_disabled')
        }

        if (currentStepFrom == datesLength - 7) {
            $arrR.addClass('_disabled');
        } else {
            $arrR.removeClass('_disabled');
        }

    }

    function dateFormating(pDate) {
        var resultStr = '',
            day = pDate.getDate(),
            monthName,
            weekDay;

        switch (pDate.getMonth()) {
            case 0:
            {
                monthName = 'янв';
                break
            }
            case 1:
            {
                monthName = 'фев';
                break
            }
            case 2:
            {
                monthName = 'март';
                break
            }
            case 3:
            {
                monthName = 'апр';
                break
            }
            case 4:
            {
                monthName = 'май';
                break
            }
            case 5:
            {
                monthName = 'июн';
                break
            }
            case 6:
            {
                monthName = 'июл';
                break
            }
            case 7:
            {
                monthName = 'авг';
                break
            }
            case 8:
            {
                monthName = 'сен';
                break
            }
            case 9:
            {
                monthName = 'окт';
                break
            }
            case 10:
            {
                monthName = 'ноя';
                break
            }
            case 11:
            {
                monthName = 'дек';
                break
            }
        }

        switch (pDate.getDay()) {
            case 1:
            {
                weekDay = 'пн';
                break
            }
            case 2:
            {
                weekDay = 'вт';
                break
            }
            case 3:
            {
                weekDay = 'ср';
                break
            }
            case 4:
            {
                weekDay = 'чт';
                break
            }
            case 5:
            {
                weekDay = 'пт';
                break
            }
            case 6:
            {
                weekDay = 'сб';
                break
            }
            case 7:
            {
                weekDay = 'вс';
                break
            }
            case 0:
            {
                weekDay = 'вс';
                break
            }
        }

        resultStr += day + ' <small>' + monthName + ', ' + weekDay + '</small>';


        return resultStr;
    }

    function setDate() {
        var values = noUiObject.get(),
            newDate = new Date(),
            inputVal;

        // 1ая дата
        newDate.setDate(
            newDate.getDate() + Number(values[0])
        );

        $tooltips.eq(0).html(dateFormating(newDate));

        inputVal = newDate.getDate() + '.';
        if (newDate.getMonth() + 1 < 10) {
            inputVal += '0' + (newDate.getMonth() + 1);
        } else {
            inputVal += newDate.getMonth() + 1;
        }
        inputVal += '.' + newDate.getFullYear();

        // 2ая дата
        newDate = new Date();
        newDate.setDate(
            newDate.getDate() + Number(values[1])
        );

        $tooltips.eq(1).html(dateFormating(newDate));

        inputVal += ' - ' + newDate.getDate() + '.';
        if (newDate.getMonth() + 1 < 10) {
            inputVal += '0' + (newDate.getMonth() + 1);
        } else {
            inputVal += newDate.getMonth() + 1;
        }

        inputVal += '.' + newDate.getFullYear();
        $feInput.val(inputVal);
    }

    function setVline() {
        var values = noUiObject.get();

        $wrVline.css('left', (values[0] * stepValue) + '%');
        $wrVline.css('width', ((values[1] - values[0]) * stepValue) + '%');

    }

    noUiObject.on('slide', function () {
        setDate();
        setVline();
        _GLOB.refreshFindEventCounter();
    });

    setDate();

    $arrL.bind('click', function () {
        arrClick('prev', $(this));
    });

    $arrR.bind('click', function () {
        arrClick('next', $(this));
    });

});

$(function () {
    var $wrDatepicker = $('.js-weekrange-datepicker');
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