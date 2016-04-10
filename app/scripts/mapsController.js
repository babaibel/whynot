$(function () {
    var mapId = 'js-closest-map';
    if (!$('#' + mapId).length) return;

    var $btn = $('.js-closest-map_btn'),
        initCoords = [55.75396, 37.620393],
        myMap,
        myPlacemark,
        geolocation,
        userCoordinates;

    /* todo сделать запрос с определением соседних точек */
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
    }

    function setUserLocation() {
        // Узнаём и устанавливаем координаты
        // по IP
        geolocation.get({
            provider: 'yandex',
            mapStateAutoApply: true
        }).then(function (result) {
            userCoordinates = result.geoObjects.get(0).geometry._coordinates;
            setCenter(userCoordinates);
        });

        // засчёт браузера
        geolocation.get({
            provider: 'browser',
            mapStateAutoApply: true
        }).then(function (result) {
            userCoordinates = result.geoObjects.get(0).geometry._coordinates;
            setCenter(userCoordinates);
        });

    }

    function init() {
        geolocation = ymaps.geolocation;

        //var location = getUserLocation();


        myMap = new ymaps.Map(mapId, {
            center: initCoords,
            zoom: 15,
            controls: []
        });

        myMap.controls.add('zoomControl', {float: 'none', position: {top: 215, right: 20}});
        myMap.behaviors.disable('scrollZoom');


        //setCenter(initCoords);
        setUserLocation();

    }

    ymaps.ready(init);

    $btn.bind('click',function(){
        setUserLocation();
    })
});
