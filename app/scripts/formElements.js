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

//daterange
$(function () {
    var $daterange = $('.js-daterange');
    if (!$daterange.length) return;

    // var dTevent = new Event('dateRangesInit');
    var dTevent = document.createEvent("Event");
    dTevent.initEvent("dateRangesInit", false, false);

    $daterange.each(function(){
        var $this = $(this),
            $mainInput = $this.find('.js-daterange_input'),
            $rangeUI = $('.js-daterange-ui'),
            $wrTracker = $this.find('.js-daterange-tracker'),
            $wrVline = $this.find('.js-daterange-v-line'),
            $feInput = $('.js-f-events-date'),
            startDate = new Date(),
            finalDate = new Date(),
            stepValue,
            daysDif,
            noUiObject,
            $tooltips;

        finalDate.setMonth(finalDate.getMonth() + 3);

        daysDif = (finalDate - startDate) / 1000 / 60 / 60 / 24;

        stepValue = 100 / daysDif;

        for (var i = 0, stepHtml; i < 8; ++i) {

            if (i) startDate.setDate(startDate.getDate() + (daysDif / 6.5));

            stepHtml = '<div class="daterange__line-item js-daterange-date">' +
                dateFormating(i == 7 ? finalDate : startDate) +
                '</div>';
            $wrTracker.append(stepHtml)
        }


        noUiSlider.create($rangeUI[0], {
            start: [0, daysDif ],
            connect: false,
            range: {
                'min': 0,
                'max': daysDif
            },
            step: 1,
            tooltips: [true, true]
        });

        noUiObject = $rangeUI[0].noUiSlider;
        $tooltips = $this.find('.noUi-tooltip');

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

            resultStr += day + ' <small>' + monthName;
            resultStr += '<span class="daterange__day-wr">, <span class="daterange__day">' + weekDay + '</span></span>';
            resultStr +=  '</small>';


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
            $mainInput.val(inputVal);
        }

        function setVline() {
            var values = noUiObject.get();

            $wrVline.css('left', (values[0] * stepValue) + '%');
            $wrVline.css('width', ((values[1] - values[0]) * stepValue) + '%');
        }

        noUiObject.on('slide', function (values, handleNumb, numbValues) {
            setDate();
            setVline();
            //_GLOB.refreshFindEventCounter();
        });

        setDate();
    });

    $W[0].dispatchEvent(dTevent);

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