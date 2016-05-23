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

