$(function () {
    var mapId = 'js-closest-map';
    if (!$('#' + mapId).length) return;

    var $btn = $('.js-closest-map_btn'),
        initCoords = [55.75396, 37.620393],
        myMap,
        myPlacemark,
        geolocation,
        userCoordinates,
        userPlacemarkCollection,
        clusterIcon,
        clusterer;


    function setCenter(pCoords) {

        if(userPlacemarkCollection) userPlacemarkCollection.removeAll();

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

        userPlacemarkCollection.add(myPlacemark);
        myMap.geoObjects.add(userPlacemarkCollection);
        myMap.setCenter(pCoords);

        $.ajax({
            type: 'GET',
            url: 'queries/getClosestOnMap.php',
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
        var status = false;
        // Узнаём и устанавливаем координаты

        function yaIPLocation() {
            geolocation.get({
                provider: 'yandex',
                mapStateAutoApply: true
            }).then(function (result) {
                userCoordinates = result.geoObjects.get(0).geometry._coordinates;
                setCenter(userCoordinates);
                console.log('ip detection')
            });
        }
        
        // засчёт браузера
        if (navigator.geolocation && navigator.geolocation.getCurrentPosition) {
            navigator.geolocation.getCurrentPosition(
                // Successful callback
                function(){
                    geolocation.get({
                        provider: 'browser',
                        mapStateAutoApply: true
                    }).then(function (result) {
                        status = true;
                        userCoordinates = result.geoObjects.get(0).geometry._coordinates;
                        setCenter(userCoordinates);
                        console.log('browser detection')
                    });
                },
                //error callback
                function(){
                    yaIPLocation();
                }
            );
        }else{
            yaIPLocation();
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

        userPlacemarkCollection = new ymaps.GeoObjectCollection();

        clusterIcon = function () {
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
                '<h2>{{ properties.balloonContentHeader|raw }}</h2>' +
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

    function CatalogMap($elem, paramSettings) {
        this.elem = $elem;
        this.elemId = $elem.attr('id');
        this.yMap;
        this.currentData;
        this.userLocation;
        this.userLocationMark;
        this.settings = {};

        this.settings = $.extend(this.settings, paramSettings);

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
            geolocation = ymaps.geolocation,
            status;

        // Узнаём и устанавливаем координаты

        function yaIPLocation() {
            geolocation.get({
                provider: 'yandex',
                mapStateAutoApply: true
            }).then(function (result) {
                thisObj.userLocation = result.geoObjects.get(0).geometry._coordinates;
                if (pCreateMap) {
                    thisObj.createMap();
                    thisObj.setData();
                }
            });
        }

        // засчёт браузера
        if (navigator.geolocation && navigator.geolocation.getCurrentPosition) {
            navigator.geolocation.getCurrentPosition(
                // Successful callback
                function(){
                    geolocation.get({
                        provider: 'browser',
                        mapStateAutoApply: true
                    }).then(function (result) {
                        thisObj.userLocation = result.geoObjects.get(0).geometry._coordinates;

                        if (pCreateMap) {
                            thisObj.createMap();
                            thisObj.setData();
                        }
                    });
                },
                //error callback
                function(){
                    yaIPLocation();
                }
            );
        }else{
            yaIPLocation();
        }



    };

    CatalogMap.prototype.setData = function (pQuery) {
        var thisObj = this,
            filterData = $('.js-filter-form').serialize(),
            fullData = filterData + "&lat=" + thisObj.userLocation[0] + "&lon=" + thisObj.userLocation[1];

        if (pQuery) {
            for (var p in pQuery) {
                fullData += '&' + p + '=' + pQuery[p];
            }
        }

        $.ajax({
            url: thisObj.settings.url,
            type: 'GET',
            data: fullData,
            async: false,
        }).success(function (data) {
            var parsedData = JSON.parse(data);
            thisObj.currentData = parsedData;
            thisObj.setMarks();
        });
    };

    CatalogMap.prototype.createMap = function () {
        var thisObj = this,
            clusterIcon;

        thisObj.yMap = new ymaps.Map(thisObj.elemId, {
            center: thisObj.userLocation,
            zoom: 13,
            controls: []
        });

        thisObj.yMap.controls.add('zoomControl',
            {float: 'none', position: {top: 130, left: 20}});

        clusterIcon = function () {
            return ymaps.templateLayoutFactory.createClass(
                '<div class="eventsCluster">{{ properties.geoObjects.length }}</div>');
        };

        var clusterer = new ymaps.Clusterer({
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

        thisObj.clusterer = clusterer;

        thisObj.yMap.geoObjects.add(thisObj.clusterer);
    };


    // Установка точек //, кроме точки пользователя
    CatalogMap.prototype.setMarks = function () {
        var thisObj = this,
        //settings = thisObj.settings,
            currentMap = thisObj.yMap,
            placemarksData = thisObj.currentData.marks,
            placemarksArray = [],
            userPlacemark;

        /*if(thisObj.userLocationMark){
            thisObj.userLocationMark.remove();
        }*/

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

        //thisObj.userLocationMark = userPlacemark;

        currentMap.geoObjects.add(userPlacemark);

        thisObj.clusterer.removeAll();

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

        //placemarksArray.push(userPlacemark);

        thisObj.clusterer.add(placemarksArray);
        thisObj.yMap.geoObjects.add(thisObj.clusterer);

    };

    CatalogMap.prototype.renewData = function (pQuery) {
        var thisObj = this;
        thisObj.setData(pQuery);
    };


    // jquery plugin
    $.fn.catalogMap = function (settings) {
        var $this = $(this),
            object = new CatalogMap($this, settings);

        return object;
    }

})(jQuery);




