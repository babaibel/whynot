var $W = $(window),
	$D = $(document),
	$H = $('html'),
	$B = $('body');

/* Обнуляет действие заглушек в ссылках */
$(function () {
	var $link = $('a[href="#!"]');
	if (!$link.length) return;
	$link.on('click', function() {return false});
});


$(function () {
    if(!$('#js-index-map').length) return;

    var myMap, 
        myPlacemark;

    function init(){ 
        myMap = new ymaps.Map("js-index-map", {
            center: [55.7891, 37.7079],
            zoom: 15,
            controls: []
        }); 

        myMap.controls.add('zoomControl', {float: 'none', position: { top: 215, right: 20 } });
        
        myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
            balloonContentBody: [
                '<address class="balloon-default">',
                '<h3 class="balloon-default__title"><strong>Calltracking.ru</strong></h3>',
                '<p>Адрес: 107023, Москва, ул. Электрозаводская, владение 24</p>',
                '</address>'
            ].join('')
        }, {
            iconLayout: 'default#image',
            iconImageHref: '../images/svg/marker.svg',
            iconImageSize: [59, 68],
            iconImageOffset: [-25, -68]
        });
        
        myMap.geoObjects.add(myPlacemark);
        myMap.behaviors.disable('scrollZoom');

    }

    ymaps.ready(init);
});


$(function () {
	var $btn = $('.js-bookmark');
	if (!$btn.length) return;

	$btn.on('click', function() {
		$(this).toggleClass('active');
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
    var $wr = $('.js-index-slider');
    if (!$wr.length) return;

    $wr.slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        fade: false,
        speed: 500,
        adaptiveHeight: true,
        accessibility: false
    });
});
