var $W=$(window),$D=$(document),$H=$("html"),$B=$("body"),_GLOB={};$(function(){var t=$('a[href="#!"]');t.length&&t.on("click",function(){return!1})}),$(function(){var t=$(".js-bookmark");t.length&&t.on("click",function(){$(this).toggleClass("active")})}),$(function(){var t=$(".js-cards-filter");if(t.length){var e=$(".js-cards-filter").find("a");e.on("click",function(){$(this).addClass("active"),e.not(this).removeClass("active")})}}),$(function(){function t(t){a=new ymaps.Placemark(t,{balloonContentHeader:"Вы здесь!"},{iconLayout:"default#image",iconImageHref:"../images/svg/marker.svg",iconImageSize:[44,44],iconImageOffset:[-22,-22],balloonPanelMaxMapArea:0}),i.geoObjects.add(a),i.setCenter(t)}function e(){s.get({provider:"yandex",mapStateAutoApply:!0}).then(function(e){r=e.geoObjects.get(0).geometry._coordinates,t(r)}),s.get({provider:"browser",mapStateAutoApply:!0}).then(function(e){r=e.geoObjects.get(0).geometry._coordinates,t(r)})}function o(){s=ymaps.geolocation,i=new ymaps.Map(n,{center:l,zoom:15,controls:[]}),i.controls.add("zoomControl",{"float":"none",position:{top:215,right:20}}),i.behaviors.disable("scrollZoom"),e()}var n="js-closest-map";if($("#"+n).length){var i,a,s,r,c=$(".js-closest-map_btn"),l=[55.75396,37.620393];ymaps.ready(o),c.bind("click",function(){e()})}}),_GLOB.slickArrLeftHtml='<button class="slick-arrow slick-prev"></button>',_GLOB.slickArrRightHtml='<button class="slick-arrow slick-next"></button>',$(function(){var t=$(".js-index-slider");t.length&&t.slick({slidesToShow:1,slidesToScroll:1,dots:!1,fade:!1,speed:500,adaptiveHeight:!0,accessibility:!1,prevArrow:_GLOB.slickArrLeftHtml,nextArrow:_GLOB.slickArrRightHtml})});