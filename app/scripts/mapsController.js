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

        console.log(pCoords);

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
        console.log(eventsArray);

        var eventPlacemarks = [],
            clusterIcon = function(){
                return ymaps.templateLayoutFactory.createClass(
                    '<div class="eventsCluster">{{ properties.geoObjects.length }}</div>');
            },
            clusterer;



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
                case 'atraction':
                {
                    classMod = 'atraction';
                    markHref = '../images/mark-atraction.png';
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
console.log(markHref)
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

    $btn.bind('click', function () {
        setUserLocation();
    })
});
