
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