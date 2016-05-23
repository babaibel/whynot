;(function ($) {
    $.fn.catTabs = function () {
        $(this).each(function () {
            var $this = $(this),
                $btns = $this.find('.js-mr-cat-btn'),
                $tabs = $this.find('.js-mr-cat-tab');

            function onScroll(pPercent) {
                var scroll = $W.scrollTop(),
                    $actTab = $tabs.filter('._active'),
                    $actTabCards = $actTab.find('.js-card'),
                    $actTabSliders = $actTab.find('.js-actions-sl'),
                    percent = pPercent || 0.8;

                $actTabCards.each(function () {
                    var $thisCard = $(this);

                    if (elemInView($thisCard.parent(), percent) || scroll > $thisCard.offset().top) $thisCard.addClass('_animated')
                });

                $actTabSliders.each(function () {
                    var $thisSlider = $(this);

                    if (elemInView($thisSlider, percent) || scroll > $thisSlider.offset().top) $thisSlider.addClass('_animated')
                });
            }


            $btns.bind('click', function (e) {
                var $this = $(this),
                    i = $this.parent().index(),
                    $targetTab = $tabs.eq(i),
                    productsHtml;

                $tabs.removeClass('_active').find('.js-card').removeClass('_animated');
                $tabs.removeClass('_active').find('.js-actions-sl').removeClass('_animated');
                $targetTab.addClass('_active');
                $btns.removeClass('_active').parent().removeClass('_active');
                $this.addClass('_active').parent().addClass('_active');

                $W.scroll();
            });


            $W.scroll(function () {
                onScroll();
            });

            onScroll(1);

        })
    }
})(jQuery);

$(function () {
    var $catTabs = $('.js-catalog-tabs');
    if (!$catTabs.length) return;
    $catTabs.catTabs();
});

// $(function () {
//     var $cardHidden = $('.js-cards-hidden');
//     if (!$cardHidden.length) return;

//     function onScroll(pPercent) {
//         var scroll = $W.scrollTop(),
//             $actTabCards = $cardHidden.find('.js-card'),
//             $actTabSliders = $cardHidden.find('.js-actions-sl'),
//             percent = pPercent || 0.8;

//         $actTabCards.each(function () {
//             var $thisCard = $(this);

//             if (elemInView($thisCard.parent(), percent) || scroll > $thisCard.offset().top) $thisCard.addClass('_animated')
//         });

//         $actTabSliders.each(function () {
//             var $thisSlider = $(this);

//             if (elemInView($thisSlider, percent) || scroll > $thisSlider.offset().top) $thisSlider.addClass('_animated')
//         });
//     }

//     $W.scroll(function () {
//         onScroll();
//     });

//     onScroll(1);
// });



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
        currentRange = [0, 5],
        currentStepFrom = 0,
    //currentStepTo = 5,
        stepValue = 100 / 7,
        noUiObject,
        $tooltips;


    $rangeUI.css('width', (stepValue * datesLength) + '%');

    noUiSlider.create($rangeUI[0], {
        start: currentRange,
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

    function  arrowsClass(){
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

    function arrClick(arrowType, jObj) {
        var $arrow = (arrowType == 'prev') ? $arrL : $arrR ;

        if ($arrow.hasClass('_disabled')) return;


        // Шаг влево
        if (arrowType == 'prev' && currentStepFrom != 0) {
            currentStepFrom -= 1;
        }

        // Шаг вправо
        if (arrowType == 'next' && currentStepFrom != datesLength - 7) {
            currentStepFrom += 1;
        }

        // Движение
        $wrTracker.css('left', -(currentStepFrom * stepValue) + '%');
        $rangeUI.css('left', -(currentStepFrom * stepValue) + '%');

        arrowsClass();
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

    noUiObject.on('slide', function (values,handleNumb,numbValues) {
        //var handleType = handleNumb ? 'next' : 'prev',
        /*var  vector;

        if(numbValues[0] > currentRange[0] || numbValues[1] > currentRange[1]){
            vector = 'next';
        }
        if(numbValues[0] < currentRange[0] || numbValues[1] < currentRange[1]){
            vector = 'prev';
        }*/

        setDate();
        setVline();
        arrowsClass();
        _GLOB.refreshFindEventCounter();



        // 2 handler
        if(handleNumb){
            if(numbValues[1] > currentStepFrom + 6 ){
                arrClick('next');

            }else if( numbValues[1] < currentStepFrom   ){
                arrClick('prev');
            }
            return;
        }
        if(!handleNumb){
            if(numbValues[0] > currentStepFrom + 6 ){
                arrClick('next');

            }else if( numbValues[0] < currentStepFrom   ){
                arrClick('prev');
            }
            return;
        }

        currentRange = numbValues;
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
// Validation plugin and more
jQuery.extend( jQuery.validator.messages, {
    required: "Введите данные.",
    remote: "Пожалуйста, введите правильное значение.",
    email: "Пожалуйста, введите корректный адрес электронной почты.",
    url: "Пожалуйста, введите корректный URL.",
    date: "Пожалуйста, введите корректную дату.",
    dateISO: "Пожалуйста, введите корректную дату в формате ISO.",
    number: "Пожалуйста, введите число.",
    digits: "Пожалуйста, вводите только цифры.",
    creditcard: "Пожалуйста, введите правильный номер кредитной карты.",
    equalTo: "Пожалуйста, введите такое же значение ещё раз.",
    extension: "Пожалуйста, выберите файл с правильным расширением.",
    maxlength: $.validator.format( "Пожалуйста, введите не больше {0} символов." ),
    minlength: $.validator.format( "Пожалуйста, введите не меньше {0} символов." ),
    rangelength: $.validator.format( "Пожалуйста, введите значение длиной от {0} до {1} символов." ),
    range: $.validator.format( "Пожалуйста, введите число от {0} до {1}." ),
    max: $.validator.format( "Пожалуйста, введите число, меньшее или равное {0}." ),
    min: $.validator.format( "Пожалуйста, введите число, большее или равное {0}." )
} );


// Email
jQuery.validator.addMethod("email", function (value, element) {
        return this.optional(element) || /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*[.][a-zA-Z0-9-]{1,8}$/.test(value);
    },
    "Неверный формат.");

// Telephone
jQuery.validator.addMethod("tel", function (value, element) {
        return this.optional(element) || /^((8|\+7|\+8)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/.test(value);
    },
    "Неверный формат.");

// Validation for class
jQuery.validator.addClassRules('js_field_digits', {
    digits: true
});

$(function () {
    var $form = $('.js-form');
    if (!$form.length) return;

    $form.validationManager();
});

(function ($) {
    $.fn.validationManager = function () {
        $(this).each(function () {
            var $this = $(this),
                //valid_case = $this.data('validation-case'),
                options = {
                    errorClass: "input-error",
                    validClass: "input-success",
                    focusCleanup: false,
                    focusInvalid: false,
                    errorElement: 'span',
                    ignore: '.ignore'
                };


            $this.validate(options);

        });
    }
})(jQuery);

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

        if( newScroll <= scroll  && newScroll > 0){
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

$(function () {
    var $hSearch = $('.js-sticky-header')
    if(!$hSearch.length) return;

    var scroll = $W.scrollTop();

    $W.scroll(function(){
        var newScroll = $W.scrollTop();

        if( newScroll > 86){
            $B.addClass('_stycky-header');
        }else{
            $B.removeClass('_stycky-header');
        }
        scroll = newScroll;
    });

});

$(function () {
    var $hSubmenu = $('.js-header-submenu');
    if(!$hSubmenu.length) return;

    var $hSubmenuLink = $hSubmenu.children('.header-nav__link');

    $hSubmenuLink.bind('click',function(){
        if ($W.outerWidth() <= 579){
            $hSubmenuLink.not(this).closest('.js-header-submenu').removeClass('_open');
            $(this).closest('.js-header-submenu').toggleClass('_open');
            return false;
        } else{
            var url = $(this).children('.header-nav__link').attr('href');
            document.location.href = url.value;
        }
        
    });
});




$(function () {
	var $btn = $('.js-item-map-btn');
	if (!$btn.length) return;

	$btn.on('click', function() {
		$(this).hide();
		$(this).siblings('.js-item-map-input').fadeIn().find('.js-roadmap-input').focus();
		return false;
	});
});

(function ($) {
	$.fn.roadMap = function () {
		var that = this,
			lat = that.attr('data-point-lat'),
			lon = that.attr('data-point-lon'),
			$form = $('.js-roadmap-form'),
			$input = $('.js-roadmap-input');

		ymaps.ready(init);

		var myMap,
			currentRoute;

		function init() {
			myMap = new ymaps.Map("roadMap", {
				center: [lat, lon],
				zoom: 15,
				controls: []
			});

			var myCollectionBlue = new ymaps.GeoObjectCollection({}, {
				iconLayout: 'default#image',
				iconImageHref: '../images/mark-gulp.png',
				iconImageSize: [96, 65],
				iconImageOffset: [-28, -65]
			});

			myCollectionBlue.add(new ymaps.Placemark([+lat, +lon]));

			myMap.geoObjects.add(myCollectionBlue);

		}

		function setRoadWay() {
			var value = $input.val(),
				yaHref = function (pLat, pLon) {
					var result = 'yandexnavi://build_route_on_map' +
						'?lat_from=' + pLat + '&lon_from=' + pLon +
						'&lat_to=' + lat + '&lon_to=' + lon;
					return result;
				};

			if (currentRoute) {
				myMap.geoObjects.remove(currentRoute.getPaths());
			}

			ymaps.route([
				[lat, lon], 'Москва ' + value
			], {
				mapStateAutoApply: true
			}).then(
				function (route) {
					currentRoute = route;
					currentRoute.getPaths().options.set({
						strokeColor: '#0ab178', strokeWidth: 3
					});
					myMap.geoObjects.add(currentRoute.getPaths());
				}
			);


			var geocoder = ymaps.geocode("Москва " + value, {json: true});

			geocoder.then(function (res) {
				var firstGeoObj = res.GeoObjectCollection.featureMember[0],
					pos = firstGeoObj.GeoObject.Point.pos.split(' ');

			});

		}

		$form.bind('submit', function (e) {
			setRoadWay();
			e.preventDefault();
			return false;
		})
	};
})(jQuery);

$(function () {
	var $map = $('#roadMap');
	if (!$map.length) return;

	$map.roadMap();
});
var $W = $(window),
	$D = $(document),
	$H = $('html'),
	$B = $('body'),
	_POPUPS = {},
	_GLOB = {
		breakpoints: {
			'xxl':1920,
			'xl':1599,
			'xx':1500,
			'lx':1400,
			'l':1279,
			'll':1099,
			'm':979,
			'mm':859,
			's':767,
			'sm':669,
			'ss':579,
			'xs':479,
			'xxs':320,
		}
	};

/* Обнуляет действие заглушек в ссылках
$(function () {
	var $link = $('a[href="#!"]');
	if (!$link.length) return;
	$link.on('click', function() {return false});
});*/


// $(function () {
// 	var $btn = $('.js-bookmark');
// 	if (!$btn.length) return;

// 	$btn.on('click', function() {
// 		$(this).toggleClass('active');
// 	});
// });

// Открытие тултипа добавления и удаление для обычных страниц
$(function () {
	var $btn = $('.js-bookmark');
	if (!$btn.length) return;

	$btn.on('click', function() {
		if( $(this).hasClass('_active')){
			$(this).removeClass('_active');
			$(this).next('.js-bookmark-tooltip').removeClass('_active');
		} else{
			$(this).addClass('_active');
			$(this).next('.js-bookmark-tooltip').addClass('_active');
		}
		
	});
});

// Открытие тултипа удаления карточки товара из избранного в ЛК
$(function () {
	var $btn = $('.js-bookmark-lk');
	if (!$btn.length) return;

	$btn.on('click', function() {
		$(this).next('.js-bookmark-tooltip').toggleClass('_active');
	});
});

// Закрытие тултипа карточки товара
$(function () {
	var $btn = $('.js-close-tooltip');
	if (!$btn.length) return;

	$btn.on('click', function() {
		$(this).closest('.js-bookmark-tooltip').removeClass('_active');
	});
});

$(function () {
	var $wr = $('.js-cards-filter');
	if (!$wr.length) return;
	var $item = $('.js-cards-filter').find('a');

	$item.on('click', function() {
		$(this).addClass('active');
		$item.not(this).removeClass('active');
	});
});

// Закрытие большой информационной подсказки
$(function () {
	var $wr = $('.js-alert');
	if (!$wr.length) return;
	var $item = $wr.find('.js-alert-close');

	$item.on('click', function() {
		$wr.slideUp();
	});
});


//Анимация удаление карточки из избранного 
$(function () {
	var $btn = $('.js-delete-card');
	if (!$btn.length) return;

	$btn.on('click', function() {
		$this = $(this);
		$this.closest('.materials-grid__col').addClass("_deleting");
		setTimeout(function() {

			// заглушка удаления
			$this.closest('.materials-grid__col').remove();
		}, 250);
	});
});

//Анимация страницы входа организатора
$(function () {
	var $pOrgEnter = $('.js-org-enter');
	if (!$pOrgEnter.length) return;
	$pOrgEnter.addClass('_animation');
});

//Анимация страницы контакты
$(function () {
	var $pContacts = $('.js-contacts');
	if (!$pContacts.length) return;
	$pContacts.addClass('_animation');
});

$(function () {
	var $parallax = $('.js-parallax');
	if (!$parallax.length) return;
	$parallax.each(function(){
		var $bgobj = $(this); // создаем объект
		$(window).scroll(function() {
			var yPos = -($W.scrollTop() / $bgobj.data('speed')); // вычисляем коэффициент 
			// Присваиваем значение background-position
			var coords = 'center '+ yPos + 'px';
			// Создаем эффект Parallax Scrolling
			$bgobj.css({ backgroundPosition: coords });
		});
	});
});

setTimeout(function(){
    scrollingTrigger();
}, 500)

function scrollingTrigger(options) {
    var defaults = {
        offset : 1.4,
        animClass: '_animation',
        afterScroll: function() {}
    };
    var options = $.extend({}, defaults, options || {});

    var $target = $('.js-scroll-trigger');

    $W.on('scroll', function(e) {
        $target.each(function(index, el) {
            var wScroll = $W.scrollTop();
            var wHeight = $W.height();
            var pTop = $(el).offset().top;
            var pHeight = $(el).height();

            if (wScroll > pTop - wHeight + pHeight/options.offset) {

                if ( !$(el).hasClass(options.animClass) ) {
                    $(el).addClass(options.animClass);
                }
            }
        });

    });
    $W.scroll();
}

function elemInView(selector, pPercents) {
    if ($(selector).length) {
        var s = $(selector),
            percents = pPercents || 0.9,
            scroll = $(document).scrollTop(),
            offs = s.offset().top,
            win = $(window).height(),
            start = offs - (win * percents),
            stop = offs + (s.height() * percents);

        if (scroll > start && scroll < stop) {
            return true;
        } else {
            return false;
        }
    }
}


// Добавление комментария
$(function () {
	var $btn = $('.js-comment-new-btn');
	if (!$btn.length) return;

	$btn.on('click', function() {
		$this = $(this);
		$this.closest('.comments-wr').find('.js-comment-new').slideDown(300);
	});
});

// Плавная подгрузка комментириев
$(function () {
	var $btn = $('.js-show-comment');
	if (!$btn.length) return;

	$btn.on('click', function() {
		$this = $(this);
		$this.addClass('_animation');

		// Заглушка на время загрузки
		setTimeout(function() {
			$this.removeClass('_animation');
			$('.js-comment-hidden ._hidden').css('display','block');

			// Для плавного появления
			setTimeout(function() {
				$('.js-comment-hidden ._hidden').removeClass('_hidden');
			}, 100);
		}, 1500);
	});
});

// Плавная подгрузка карточек товара
$(function () {
	var $btn = $('.js-show-cards');
	if (!$btn.length) return;

	$btn.on('click', function() {
		$this = $(this);
		$this.addClass('_animation');

		// Заглушка на время загрузки
		setTimeout(function() {
			$this.removeClass('_animation');
			$('.js-cards-hidden ._hidden').css('display','flex');

			// Для плавного появления
			setTimeout(function() {
				$('.js-cards-hidden ._hidden').removeClass('_hidden');
			}, 100);
		}, 1500);
	});
});


//Ширина скроллбара с глобальной переменной
var scrollbarW = 0;
var scrollbarWidth = function () {
    if ( $H.hasClass('no-touch')){
        var block = $('<div>').css({'height':'50px','width':'50px'}),
            indicator = $('<div>').css({'height':'200px'});

        $('body').append(block.append(indicator));
        var w1 = $('div', block).innerWidth();    
        block.css('overflow-y', 'scroll');
        var w2 = $('div', block).innerWidth();
        $(block).remove();
        scrollbarW = (w1 - w2);
    }
}();

// открытие основных попапов
$(function () {
    var $btn = $('.js-popup-mid-btn');
    if (!$btn.length) return;

    $btn.magnificPopup({
        preloader: false,
        mainClass: 'mfp-zoom-out',
        removalDelay: 300,
        type: $(this).data('type') || 'inline',
        callbacks: {
            open: function () {
		        $B.addClass('_popup');
		        $('._stycky-header .header-bot-wr').css({'width':'auto','right':scrollbarW})
		    },
		    close: function () {
		        $B.removeClass('_popup');
		        $('._stycky-header .header-bot-wr').css({'width':'100%','right':'auto'})
		    },
		    afterClose: function () {
		    	$('#popup-sps').removeClass("_animation");
		    }
        }
    });
});

// показ спасибо после отправки формы
$(function () {
	var $form = $('#feedback-form');
    if (!$form.length) return;

    $form.submit(function(){
    	$.magnificPopup.open({
			items: {
				src: '#popup-sps'
			},
			type: 'inline'
		});
		setTimeout(function() {
			$('#popup-sps').addClass("_animation");
		}, 100);

		setTimeout(function() {
			$.magnificPopup.close();
		}, 3000);
		
		
    	return false;
    });

});

// Плавная подгрузка комментириев
$(function () {
	var $btn = $('.js-filter-tag-close');
	if (!$btn.length) return;

	$btn.on('click', function() {
		$this = $(this);
		$this.closest('.filter-tag').addClass("_deleting");
		setTimeout(function() {

			// заглушка удаления
			$this.closest('.filter-tag').remove();
		}, 250);
	});
});

//паралакс картинки
$(function () {
    var $imgPromo = $('.js-promo:last');

    if (!$imgPromo.length) return;

    var $afterPromoContent = $('.js-after-promo:last');
    var headerHeight = $('.js-sticky-header').outerHeight();
    var imgPromoHeight = $imgPromo.outerHeight() - headerHeight;
    $afterPromoContent.css('marginTop', imgPromoHeight);

    $W.on('resize', function () {
        imgPromoHeight = $imgPromo.outerHeight() - headerHeight;
        $afterPromoContent.css('marginTop', imgPromoHeight);
    });
});

// Редактировать текст
$(function () {
	var $btn = $('.js-text-edit-btn');
	if (!$btn.length) return;

	$btn.on('click', function() {
		var $this = $(this),
			text = $this.text(),
			$wr = $this.closest('.js-text-edit'),
			$hide = $wr.find('.js-text-edit-hide'),
			$input = $hide .find('.js-text-edit-input');

		$wr.addClass('_editing');
		$input.val(text).focus();

	});
});

// Сохранить текст
$(function () {
	var $btn = $('.js-text-edit-save');
	if (!$btn.length) return;

	$btn.on('click', function() {
		var $this = $(this),
			$wr = $this.closest('.js-text-edit'),
			$link = $wr.find('.js-text-edit-btn'),
			$hide = $wr.find('.js-text-edit-hide'),
			inputText = $hide .find('.js-text-edit-input').val();

		$wr.removeClass('_editing');
		if( inputText == ""){
			inputText = "Изменить"
		}
		$link.text(inputText);

	});
});

// Отменить изменения
$(function () {
	var $btn = $('.js-text-edit-close');
	if (!$btn.length) return;

	$btn.on('click', function() {
		var $this = $(this),
			$wr = $this.closest('.js-text-edit')

		$wr.removeClass('_editing');

	});
});

$(function () {
    var $phone = $('.js-phone-validate');
    if (!$phone.length) return;

	// TODO
    //$phone.inputmask({"mask": "+7 (999) 999-9999"});
});

$(function () {
    var $url = $('.js-url-validate');
    if (!$url.length) return;

    $url.inputmask("http://pochemybi.net/aaaaaaaaaaaaaaa"); 
});

$(function () {
    var $metro = $('#metro');
    if (!$metro.length) return;

	var $metroList = $metro.find('option[data-color]'),
		metroListOpt=[];

	console.log($metroList);

	$metroList.each(function() {
		color = $(this).data('color');
		name = $(this).val();
		metroListOpt.push({color,name})
	});

	$metro.selectize({
		openOnFocus: false,
		options: metroListOpt,
		render: {
		    option: function (item, escape) {
		        return '<div class="option">' +
		                '<div class="option__text">' +
		                    '<span class="option__color option__color-' + escape(item.color) + '"></span>' + escape(item.name) +
		               '</div>' +
		            '</div>';
		    }
		}
	});
});


/* изменение дат и времени мероприятия */
$(function () {
    var $input = $('.js-date-add');
    if (!$input.length) return;

    var $inputWr = $input.closest('.js-date-wr'),
    	$dateTableWr = $inputWr.find('.js-date-table');

    /* заголовоки */
	var firstRowStr = '<div class="form-row__col-wr form-row__col-wr--title">' + 
						'<div class="form-row__col form-row__col--w60">' +
							'<div class="form-row__name-co l">' +
								'<div class="form-row__name">Дата*</div>' + 
							'</div>'+
						'</div>'+
						'<div class="form-row__col form-row__col--w40">' +
							'<div class="form-row__name-col">' +
								'<div class="form-row__name">Время*</div>' + 
							'</div>'+
						'</div>' +
					'</div>';
	/* строка с чекбоксом */
	var checkRowStr = '<div class="form-row__col-wr js-date-checkbox"><label class="checkbox-label">'+
							'<span class="checkbox"><input type="checkbox"><span class="checkbox__view"></span></span>'+
							'<span class="checkbox-label__txt">Время всегда одинаковое</span>'+
						'</label></div>';

    $input.datepicker({
		onSelect: function(formattedDate, date, inst) {
			if (date.length > 1) {
				/* кол-во дней в выбранном диапазоне*/
				var days = ((date[1] - date[0])/1000/60/60/24) + 1;
				var day = date[0];
				var i;

				/* очищаем контейнер*/
				$dateTableWr.empty();

				for (i = 0; i < days; i++) {
					/* перебираем все дни*/
					if ( i==0){
						day.setDate(day.getDate());
					} else{
						day.setDate(day.getDate() + 1);
					}

					/* приводим дату к формату дд.мм.гггг*/
					var dayN = day.getDate();
					var monthN = day.getMonth() + 1;
					var yearN = day.getFullYear();
					if (dayN < 10) {
						dayN = "0" + dayN;
					}
					if (monthN < 10) {
						monthN = "0" + monthN;
					}
					var dateN = dayN + "." + monthN + "." + yearN;

					/*строка с переменной даты*/
					var rowStr = '<div class="form-row__col-wr">' + 
									'<div class="form-row__col form-row__col--w60">' +
										'<div class="form-row__content-col">' +
											'<div class="form-row__content">' + 
												'<div class="input-cont">'+ 
													'<input  type="text" class="input" disabled value="' + dateN +  '">' +
												'</div>'+
											'</div>'+
										'</div>'+
									'</div>'+
									'<div class="form-row__col form-row__col--w40">' +
										'<div class="form-row__content-col">' +
											'<div class="form-row__content">'+
												'<div class="input-cont">' +
													'<input class="input js-date-time" type="text">'+
												'</div>' +
											'</div>' +
										'</div>' +
									'</div>' +
								'</div>';

					var firstRow = firstRowStr + rowStr + checkRowStr;
					/* добавляем к первойстроке заголовки и чекбокс */
					if ( i==0){
						$dateTableWr.append(firstRow);
					} else{
						$dateTableWr.append(rowStr);
					}
				}
				/* прячем первое поле с вренем*/
				$inputWr.addClass('_hide-time');
			} else{
				$inputWr.removeClass('_hide-time');
				$dateTableWr.empty();
			}
		}
	})

	$B.on("change", ".js-date-time", function() {
		if($('.js-date-checkbox input').is(':checked')){
			var timeVal = $(this).val();
			$('.js-date-time').not(this).val(timeVal);
		}
	});

	$B.on("change", ".js-date-checkbox input", function() {
		if($(this).is(':checked')){
			var $timeVals = $inputWr.find('.js-date-time'),
				timeVal;
			console.log($timeVals);
			$timeVals.each(function(){
				if ( !$(this).val() == ""){
					timeVal = $(this).val();
					console.log(timeVal);
					return false;
				}
			})
			$('.js-date-time').val(timeVal);
		}
	});


});


$(function () {
    var mapId = 'js-closest-map';
    if (!$('#' + mapId).length) return;

    var $btn = $('.js-closest-map_btn'),
        initCoords = [55.75396, 37.620393],
        myMap,
        myPlacemark,
        geolocation,
        userCoordinates,
        clusterIcon,
        clusterer;


    function setCenter(pCoords) {
        myPlacemark = new ymaps.Placemark(pCoords,
            {
                balloonContentHeader: 'Вы здесь!',
            }, {
                iconLayout: 'default#image',
                iconImageHref: '../images/svg/marker.svg',
                iconImageSize: [44, 44],
                iconImageOffset: [-22, -22],
                balloonPanelMaxMapArea: 0
            });

        myMap.geoObjects.add(myPlacemark);
        myMap.setCenter(pCoords);


        $.ajax({
            type: 'GET',
            url: 'queries/getClosestOnMap.php', // todo
            data: {lat: pCoords[0], lon: pCoords[1]},
            success: function (data) {
                var parsedData = JSON.parse(data);
                setEventMarks(parsedData);
            }
        })
    }

    function setEventMarks(eventsArray) {

        var eventPlacemarks = [];

        clusterer.removeAll();

        $.each(eventsArray, function (i, elem) {
            var item,
                itemLayout,
                classMod,
                markHref;

            switch (elem.type) {
                case 'zoo':
                {
                    classMod = 'zoo';
                    markHref = '../images/mark-lion.png';
                    break
                }
                case 'food':
                {
                    classMod = 'food';
                    markHref = '../images/mark-gulp.png';
                    break
                }
                case 'attraction':
                {
                    classMod = 'attraction';
                    markHref = '../images/mark-attraction.png';
                    break
                }
            }

            /*itemLayout = ymaps.templateLayoutFactory.createClass(
                '<div class="mapEvent mapEvent--' + classMod + '"></div>', {
                    build: function () {
                        this.constructor.superclass.build.call(this);
                        this._$element = $('.mapEvent');
                        //this._$element.find('.js-doc-card-close')
                        //    .on('click', $.proxy(this.onCloseClick, this));
                    },
                    onCloseClick: function (e) {
                        e.preventDefault();
                        this.events.fire('userclose');
                    }
                }
            );*/

            eventPlacemarks[i] = new ymaps.Placemark([elem.lat, elem.lon],
                {
                    balloonContentHeader: elem.title,
                    balloonContentBody: '<div class="">' + elem.html + '</div>', // todo
                }, {
                    iconLayout: 'default#image',
                    iconImageHref: markHref, //'../images/svg/marker.svg',
                    iconImageSize: [95, 65],
                    iconImageOffset: [-26, -32.5],
                    //balloonLayout: balloonContentLayout,
                    balloonPanelMaxMapArea: 0
                });



        });

        clusterer.add(eventPlacemarks);
        myMap.geoObjects.add(clusterer);
    }

    function setUserLocation() {
        // Узнаём и устанавливаем координаты

        // засчёт браузера
        if (navigator.geolocation && navigator.geolocation.getCurrentPosition) {
            geolocation.get({
                provider: 'browser',
                mapStateAutoApply: true
            }).then(function (result) {
                userCoordinates = result.geoObjects.get(0).geometry._coordinates;
                setCenter(userCoordinates);
            });
        } else {
            // по IP
            geolocation.get({
                provider: 'yandex',
                mapStateAutoApply: true
            }).then(function (result) {
                userCoordinates = result.geoObjects.get(0).geometry._coordinates;
                setCenter(userCoordinates);
            });
        }

    }

    function init() {
        geolocation = ymaps.geolocation;

        myMap = new ymaps.Map(mapId, {
            center: initCoords,
            zoom: 15,
            controls: []
        });

        myMap.controls.add('zoomControl', {float: 'none', position: {top: 215, right: 20}});
        myMap.behaviors.disable('scrollZoom');

        clusterIcon = function(){
            return ymaps.templateLayoutFactory.createClass(
                '<div class="eventsCluster">{{ properties.geoObjects.length }}</div>');
        };

        clusterer = new ymaps.Clusterer({
            //preset: 'twirl#invertedGreenClusterIcons',
            groupByCoordinates: false,
            clusterHideIconOnBalloonOpen: false,
            geoObjectHideIconOnBalloonOpen: false,
            clusterIcons: [
                {
                    href: '../images/svg/marker.svg',
                    size: [44, 44],
                    offset: [-22, -22]
                }
            ],
            clusterIconContentLayout: clusterIcon(),
            clusterBalloonItemContentLayout: ymaps.templateLayoutFactory.createClass(
                //'<h2>{{ properties.balloonContentHeader|raw }}</h2>' +
                '<div class="ballon_body">{{ properties.balloonContentBody|raw }}</div>' +
                '<div class="ballon_footer">{{ properties.balloonContentFooter|raw }}</div>'
            )
        });

        setUserLocation();
    }

    ymaps.ready(init);

    $btn.bind('click', function () {
        setUserLocation();
    })
});

// Catalog map


(function ($) {

    function CatalogMap($elem,paramSettings){
        this.elem = $elem;
        this.elemId = $elem.attr('id');
        this.yMap;
        this.currentData;
        this.userLocation;
        this.settings = {};

        this.settings = $.extend( this.settings, paramSettings);

        // сокращение доступа к параметрам объекта
        var thisObj = this,
            $obj = $(this),
            settings = this.settings;

        // инициализация
        ymaps.ready(function () {
            thisObj.initMap();
        })
    }


    // Methods

    // инициализация карты
    CatalogMap.prototype.initMap = function (pQuery) {
        this.setUserLocation(true);
    };

    // Узнаём где находится пользователь и если pCreateMap = true, то создаём карту.
    // Т.к. у ymaps api нет возможности выключить асинхронность, то карта создаётся в этмо методе, после ответа сервера.
    CatalogMap.prototype.setUserLocation = function (pCreateMap) {
        var thisObj = this,
            geolocation = ymaps.geolocation;

        // Узнаём и устанавливаем координаты

        // засчёт браузера
        if (navigator.geolocation && navigator.geolocation.getCurrentPosition) {
            geolocation.get({
                provider: 'browser',
                mapStateAutoApply: true
            }).then(function (result) {
                thisObj.userLocation = result.geoObjects.get(0).geometry._coordinates;

                if(pCreateMap){
                    thisObj.createMap();
                    thisObj.setData();
                }
            });
        } else {
            // по IP
            geolocation.get({
                provider: 'yandex',
                mapStateAutoApply: true
            }).then(function (result) {
                thisObj.userLocation = result.geoObjects.get(0).geometry._coordinates;

                if(pCreateMap){
                    thisObj.createMap();
                    thisObj.setData();
                }
            });
        }
    };

    CatalogMap.prototype.setData = function (pQuery) {
        var thisObj = this;

        $.ajax({
            url: thisObj.settings.url,
            type: 'GET',
            data: {'lat': thisObj.userLocation[0],'lon': thisObj.userLocation[1]},
            async: false,
        }).success(function (data) {
            var parsedData = JSON.parse(data);
            thisObj.currentData = parsedData;
            thisObj.setMarks();
        });
    };

    CatalogMap.prototype.createMap = function () {
        var thisObj = this;

        thisObj.yMap = new ymaps.Map(thisObj.elemId, {
            center: thisObj.userLocation,
            zoom: 13,
            controls: []
        });

        thisObj.yMap.controls.add('zoomControl',
            {float: 'none', position: {top: 130, left: 20}});
    };


    // Установка точек //, кроме точки пользователя
    CatalogMap.prototype.setMarks = function () {
        var thisObj = this,
            //settings = thisObj.settings,
            currentMap = thisObj.yMap,
            placemarksData = thisObj.currentData.marks,
            placemarksArray = [],
            userPlacemark,
            clusterer,
            clusterIcon;

        userPlacemark = new ymaps.Placemark(thisObj.userLocation,
            {
                balloonContentHeader: 'Вы здесь!',
            }, {
                iconLayout: 'default#image',
                iconImageHref: '../images/svg/marker.svg',
                iconImageSize: [44, 44],
                iconImageOffset: [-22, -22],
                balloonPanelMaxMapArea: 0
            });

        currentMap.geoObjects.add(userPlacemark);
        //myMap.setCenter(pCoords);

        clusterIcon = function(){
            return ymaps.templateLayoutFactory.createClass(
                '<div class="eventsCluster">{{ properties.geoObjects.length }}</div>');
        };

        clusterer = new ymaps.Clusterer({
            //preset: 'twirl#invertedGreenClusterIcons',
            groupByCoordinates: false,
            clusterHideIconOnBalloonOpen: false,
            geoObjectHideIconOnBalloonOpen: false,
            clusterIcons: [
                {
                    href: '../images/svg/marker.svg',
                    size: [44, 44],
                    offset: [-22, -22]
                }
            ],
            clusterIconContentLayout: clusterIcon(),
            clusterBalloonItemContentLayout: ymaps.templateLayoutFactory.createClass(
                '<div class="ballon_body">{{ properties.balloonContentBody|raw }}</div>' +
                '<div class="ballon_footer">{{ properties.balloonContentFooter|raw }}</div>'
            )
        });

        //clusterer.removeAll();

        $.each(placemarksData, function (i, elem) {
            var item,
                itemLayout,
                classMod,
                markHref;

            switch (elem.type) {
                case 'zoo':
                {
                    classMod = 'zoo';
                    markHref = '../images/mark-lion.png';
                    break
                }
                case 'food':
                {
                    classMod = 'food';
                    markHref = '../images/mark-gulp.png';
                    break
                }
                case 'attraction':
                {
                    classMod = 'attraction';
                    markHref = '../images/mark-attraction.png';
                    break
                }
            }

            placemarksArray[i] = new ymaps.Placemark([elem.lat, elem.lon],
                {
                    balloonContentHeader: elem.title,
                    balloonContentBody: '<div class="">' + elem.html + '</div>', // todo
                }, {
                    iconLayout: 'default#image',
                    iconImageHref: markHref, //'../images/svg/marker.svg',
                    iconImageSize: [95, 65],
                    iconImageOffset: [-26, -32.5],
                    //balloonLayout: balloonContentLayout,
                    balloonPanelMaxMapArea: 0
                });

        });

        clusterer.add(placemarksArray);
        thisObj.yMap.geoObjects.add(clusterer);

    };

    CatalogMap.prototype.renewData = function (pQuery) {
        // TODO дописать функционал, добавить ивенты при сортировке и настроить удаление старых меток
        var thisObj = this;

        thisObj.setData(pQuery);
    };


    // jquery plugin
    $.fn.catalogMap = function (settings) {
        var $this = $(this),
            object = new CatalogMap($this,settings);

        return object;
    }

})(jQuery);






$(function () {
    function StickPopup(selector,paramSettings){
        //this.selector = selector;
        this.popup = selector;  //$(selector);
        this.openStatus = false;
        this.settings = {
            closeSelector: '.js-popup-closer'
        };

        var settings = this.settings,
            _self = this;

        for(var p in paramSettings){
            this.settings[p] = paramSettings[p];
        }

        if( settings.toStick ){
            this.toStick = settings.toStick;

            $W.resize(function(){
                _self.setStick();
            });
            $W.scroll(function(){
                _self.setStick();
            });
        }

        if( this.settings.centerX ){
            this.centerX = settings.centerX;

            $W.resize(function(){
                _self.setCenterX();
            });
            $W.scroll(function(){
                _self.setCenterX();
            });
        }

        if(settings.closeSelector){
            var $closeBtn = this.popup.find(settings.closeSelector);
            if($closeBtn){
                this.popup.find(settings.closeSelector).bind('click', function(){
                    _self.close();
                })
            }

        }

    }

    StickPopup.prototype.setStick = function(){
        var elem = this.toStick,
            offset = elem.offset(),
            verticalArray = this.settings.vertical,
            horizontalArray = this.settings.horizontal,
            vertical,
            horizontal ;


        if(verticalArray && offset){
            vertical = offset[verticalArray[0]];

            if(verticalArray[0] == 'bottom'){
                vertical = $W.height() - offset.top - elem.outerHeight() ;
                this.popup.css('top', 'initial')
            }

            if(verticalArray[1] == 'out'){
                if(verticalArray[0] == 'bottom'){
                    vertical -= elem.outerHeight();
                }else{
                    vertical += elem.outerHeight();
                }
            }
/*
            if(verticalArray[2]){
                vertical += verticalArray[2];
            }*/

            this.popup.css(verticalArray[0], vertical)
        }

        if(horizontalArray && offset){
            horizontal = offset[horizontalArray[0]];

            if(horizontalArray[0] == 'right'){
                horizontal = $W.width() - offset.left - elem.outerWidth() ;
                this.popup.css('left', 'initial')
            }

            if(horizontalArray[1] == 'out'){
                if(horizontalArray[0] == 'right'){
                    horizontal -= elem.outerWidth();
                }else{
                    horizontal += elem.outerWidth();
                }
            }
/*
            if(horizontalArray[2]){
                horizontal += horizontalArray[2];
            }*/

            this.popup.css(horizontalArray[0], horizontal)
        }

    };

    StickPopup.prototype.setCenterX = function(){
        var xToSet = 0,
            popupH = this.popup.outerHeight(),
            winH = $W.height() ;

        if(popupH > winH ){
            xToSet = 0;
        }else{
            xToSet = (winH - popupH) / 2
        }

        if(this.popup.css('position') == 'absolute'){
            xToSet += $W.scrollTop();
        }

        this.popup.css('top', xToSet);
    };

    StickPopup.prototype.open = function(e){
        var _self = this;

        if( this.settings.toStick ){
            this.setStick();
        }
        if( this.settings.centerX ){
            this.setCenterX();
        }
        this.popup.addClass('_active');

        $W.bind('click', function (e) {
            if (!$(e.target).closest(_self.popup).length) {
                _self.close();
                $W.unbind('click');
            }
        });

        if(this.settings.onOpen){
            this.settings.onOpen(_self);
        }

        if(e){
            e.stopPropagation();
        }

        this.openStatus = true;
    };

    StickPopup.prototype.close = function(){
        this.popup.removeClass('_active');
        this.openStatus = false;
    };

    StickPopup.prototype.toggle = function(e){
        if(!this.openStatus){
            this.open(e);
        }else{
            this.close(e);
        }
    };


    /* popup init */

    $('.js-popup').each(function(){
        var $this = $(this),
            dataName = $this.data('popup-name');

        _POPUPS[dataName] = new StickPopup($this);
    });

    //js-popup-subs

    _POPUPS['login'] = new StickPopup($('.js-popup-login'),{
        toStick: $('.js-popup-btn[data-popup-name="login"]'),
        //closeSelector: '.js-popup-disabler',
        horizontal: ['right','in'],
        vertical: ['top','out']
    });

    _POPUPS['reg'] = new StickPopup($('.js-popup-reg'),{
        toStick: $('.js-popup-btn[data-popup-name="reg"]'),
        //closeSelector: '.js-popup-disabler',
        horizontal: ['right','in'],
        vertical: ['top','out']
    });

    _POPUPS['subscribe'] = new StickPopup($('.js-popup-subs'),{
        toStick: $('.js-popup-btn[data-popup-name="subscribe"]'),
        //closeSelector: '.js-popup-disabler',
        horizontal: ['left','in'],
        vertical: ['top','out']
    });

    _POPUPS['subscribe2'] = new StickPopup($('.js-popup-subs2'),{
        toStick: $('.js-popup-btn[data-popup-name="subscribe2"]'),
        //closeSelector: '.js-popup-disabler',
        horizontal: ['right','in'],
        vertical: ['top','out']
    });

    _POPUPS['catMap'] = new StickPopup($('.js-popup-cat-map'),{

    });




/*
    _POPUPS['login'] = new StickPopup('.js-popup-login',{
        toStick: $('#stick-for-popup-login'),
        closeSelector: '.js-popup-disabler',
        horizontal: ['right','in',0],
        vertical: ['top','out',5]
    });

    _POPUPS['recall'] = new StickPopup('.js-popup-recall',{
        toStick: $('#stick-for-popup-recall'),
        closeSelector: '.js-popup-disabler',
        horizontal: ['left','in',0],
        vertical: ['top','out',5]
    });*/

    /*
    _POPUPS['recall-respond'] = new StickPopup('.js-popup-recall-respond',{
        toStick: $('#stick-for-popup-recall'),
        closeSelector: '.js-popup-disabler',
        horizontal: ['left','in',0],
        vertical: ['top','in',0],
        onOpen: function(obj){
            setTimeout(function(){
                obj.close();
            }, 2500)
        }
    });*/

});

$(function(){
    var $popupBtn = $('.js-popup-btn');
    if(!$popupBtn.length) return;

    $popupBtn.each(function(){
        var $this = $(this),
            popupName = $this.data('popup-name');

        $this.bind('click',function(e){
            _POPUPS['login'].close();
            _POPUPS['reg'].close();
            _POPUPS['subscribe'].close();
            _POPUPS['subscribe2'].close();
            _POPUPS[popupName].toggle(e);
        });
    });

});

$(function () {
    var $mapCatPopup = $('.js-catalog-map');
    if (!$mapCatPopup.length) return;


    $mapCatPopup.each(function(){
        var $this = $(this),
            pluginObj = $this.catalogMap({
                url: $this.data('url')
            });

        _POPUPS['catMap'].map = pluginObj;
    })

});





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
        beforeSelect: function(){
            console.log('before select')
        }
    });

})(jQuery);
_GLOB.slickArrLeftHtml = '<button class="slick-arrow slick-prev"></button>';
_GLOB.slickArrRightHtml = '<button class="slick-arrow slick-next"></button>';


$(function () {
    var $wr = $('.js-actions-sl');
    if (!$wr.length) return;

    $wr.slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        //fade: false,
        //speed: 500,
        adaptiveHeight: true,
        //accessibility: false,
        prevArrow: _GLOB.slickArrLeftHtml,
        nextArrow: _GLOB.slickArrRightHtml,
        swipe: false,
        responsive:[
            {
                breakpoint: _GLOB.breakpoints.sm,
                settings: {
                    swipe: true
                }
            }
        ]
    });
});

$(function () {
    var $wr = $('.js-actions-sl2');
    if (!$wr.length) return;

    $wr.slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        autoplay: true,
        autoplaySpeed: 3000,
        //fade: false,
        //speed: 500,
        adaptiveHeight: true,
        //accessibility: false,
        prevArrow: _GLOB.slickArrLeftHtml,
        nextArrow: _GLOB.slickArrRightHtml,
        swipe: false,
        responsive:[
            {
                breakpoint: _GLOB.breakpoints.sm,
                settings: {
                    swipe: true
                }
            }
        ]
    });
});

$(function () {
    var $recomSl = $('.js-recom-sl');
    if (!$recomSl.length) return;

    $recomSl.slick({
        slidesToShow: 2,
        slidesToScroll: 2,
        dots: false,
        arrows: true,
        adaptiveHeight: true,
        prevArrow: '<button class="slick-arrow2 slick-prev"></button>',
        nextArrow: '<button class="slick-arrow2 slick-next"></button>',
        swipe: false,
        responsive:[
            {
                breakpoint: _GLOB.breakpoints.mm,
                settings: {
                    swipe: true
                }
            },
            {
                breakpoint: _GLOB.breakpoints.sm,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    dots: true,
                    swipe: true
                }
            }
        ]
    });
});