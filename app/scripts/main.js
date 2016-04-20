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


$(function () {
	var $btn = $('.js-bookmark');
	if (!$btn.length) return;

	$btn.on('click', function() {
		$(this).toggleClass('active');
	});
});

// Открытие тултипа удаления карточки товара из избранного
$(function () {
	var $btn = $('.js-bookmark-remove');
	if (!$btn.length) return;

	$btn.on('click', function() {
		$(this).next('.js-bookmark-tooltip').addClass('_active');
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
        offset : 1.5,
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