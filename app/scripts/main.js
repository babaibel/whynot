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

$(function () {
	var $btn = $('.js-bookmark-remove');
	if (!$btn.length) return;

	$btn.on('click', function() {
		$(this).next('.js-bookmark-tooltip').addClass('_active');
	});
});

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

$(function () {
	var $wr = $('.js-alert');
	if (!$wr.length) return;
	var $item = $wr.find('.js-alert-close');

	$item.on('click', function() {
		$wr.slideUp();
	});
});

$(function () {
	var $btn = $('.js-delete-card');
	if (!$btn.length) return;

	$btn.on('click', function() {
		$this = $(this);
		$this.closest('.materials-grid__col').addClass("_deleting");
		setTimeout(function() { 
			$this.closest('.materials-grid__col').remove();
		}, 250);
	});
});

//org-enter
$(function () {
    var $pOrgEnter = $('.js-org-enter');
    if (!$pOrgEnter.length) return;
    $pOrgEnter.addClass('_animation');
});

