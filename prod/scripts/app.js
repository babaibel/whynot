$(function(){var e=$(".js-f-events");if(e.length){var t=e.find("form"),a=$(".js-fevents-counter"),n=e.data("query-url");_GLOB.refreshFindEventCounter=function(){$.ajax({type:"GET",url:n,data:t.serialize(),success:function(e){var t=JSON.parse(e);a.text(t.eventsCountStr)}})},t.find("input").bind("input change",function(){_GLOB.refreshFindEventCounter()})}}),$(function(){function e(e,t){t.hasClass("_disabled")||("prev"==e&&0!=v&&(v-=1),"next"==e&&v!=p-7&&(v+=1),g.css("left",-(v*b)+"%"),i.css("left",-(v*b)+"%"),0!=v?l.removeClass("_disabled"):l.addClass("_disabled"),v==p-7?c.addClass("_disabled"):c.removeClass("_disabled"))}function t(e){var t,a,n="",s=e.getDate();switch(e.getMonth()){case 0:t="янв";break;case 1:t="фев";break;case 2:t="март";break;case 3:t="апр";break;case 4:t="май";break;case 5:t="июн";break;case 6:t="июл";break;case 7:t="авг";break;case 8:t="сен";break;case 9:t="окт";break;case 10:t="ноя";break;case 11:t="дек"}switch(e.getDay()){case 1:a="пн";break;case 2:a="вт";break;case 3:a="ср";break;case 4:a="чт";break;case 5:a="пт";break;case 6:a="сб";break;case 7:a="вс";break;case 0:a="вс"}return n+=s+" <small>"+t+", "+a+"</small>"}function a(){var e,a=o.get(),n=new Date;n.setDate(n.getDate()+Number(a[0])),r.eq(0).html(t(n)),e=n.getDate()+".",e+=n.getMonth()+1<10?"0"+(n.getMonth()+1):n.getMonth()+1,e+="."+n.getFullYear(),n=new Date,n.setDate(n.getDate()+Number(a[1])),r.eq(1).html(t(n)),e+=" - "+n.getDate()+".",e+=n.getMonth()+1<10?"0"+(n.getMonth()+1):n.getMonth()+1,e+="."+n.getFullYear(),f.val(e)}function n(){var e=o.get();u.css("left",e[0]*b+"%"),u.css("width",(e[1]-e[0])*b+"%")}var s=$(".js-weekrange");if(s.length){var o,r,i=$(".js-weekrange-ui"),l=s.find(".js-weekrange__arr-l"),c=s.find(".js-weekrange__arr-r"),d=s.find(".js-weekrange-date"),g=s.find(".js-weekrange-tracker"),u=s.find(".js-weekrange-v-line"),f=$(".js-f-events-date"),p=d.length,v=0,b=100/7;i.css("width",b*p+"%"),noUiSlider.create(i[0],{start:[0,5],connect:!1,range:{min:0,max:p-1},step:1,tooltips:[!0,!0]}),o=i[0].noUiSlider,r=$(".noUi-tooltip"),o.on("slide",function(){a(),n(),_GLOB.refreshFindEventCounter()}),a(),l.bind("click",function(){e("prev",$(this))}),c.bind("click",function(){e("next",$(this))})}}),$(function(){var e=$(".js-weekrange-datepicker");if(e.length){var t=$(".js-f-events-date"),a=new Date;e.datepicker({inline:!0,minDate:a,onSelect:function(e){t.val(e),_GLOB.refreshFindEventCounter()}})}}),$(function(){var e=$(".js-chkb-dropdown");e.length&&e.each(function(){var e=$(this),t=e.find(".js-chkb-dropdown__btn"),a=e.data("resol");t.bind("click",function(){$W.width()<=_GLOB.breakpoints[a]&&e.toggleClass("_active")})})}),$(function(){var e=$(".js-header-search"),t=$(".js-header-search-trigger");if(t.length){var a=$W.scrollTop();t.bind("click",function(){e.toggleClass("_expanded"),$W.bind("click",function(t){var a=$(t.target);a.closest(".js-header-search").length||(e.removeClass("_expanded"),$W.unbind("click"))})}),$W.scroll(function(){var e=$W.scrollTop();a>=e&&e>200?$B.addClass("_search-open"):$B.removeClass("_search-open"),a=e})}}),$(function(){var e=$(".js-header-menu-btn");e.length&&e.bind("click",function(t){$B.toggleClass("_header-menu-open"),$W.bind("click",function(t){var a=$(t.target);a.closest(".js-header-menu").length||a.closest(e).length||($B.removeClass("_header-menu-open"),$W.unbind("click"))}),t.stopPropagation()})});var $W=$(window),$D=$(document),$H=$("html"),$B=$("body"),_GLOB={breakpoints:{xxl:1920,xl:1599,xx:1500,lx:1400,l:1279,ll:1099,m:979,mm:859,s:767,sm:669,ss:579,xs:479,xxs:320}};$(function(){var e=$('a[href="#!"]');e.length&&e.on("click",function(){return!1})}),$(function(){var e=$(".js-bookmark");e.length&&e.on("click",function(){$(this).toggleClass("active")})}),$(function(){var e=$(".js-cards-filter");if(e.length){var t=$(".js-cards-filter").find("a");t.on("click",function(){$(this).addClass("active"),t.not(this).removeClass("active")})}}),$(function(){function e(e){r=new ymaps.Placemark(e,{balloonContentHeader:"Вы здесь!"},{iconLayout:"default#image",iconImageHref:"../images/svg/marker.svg",iconImageSize:[44,44],iconImageOffset:[-22,-22],balloonPanelMaxMapArea:0}),o.geoObjects.add(r),o.setCenter(e),$.ajax({type:"GET",url:"queries/getClosestOnMap.php",data:{lat:e[0],lon:e[1]},success:function(e){var a=JSON.parse(e);t(a)}})}function t(e){var t=[];d.removeAll(),$.each(e,function(e,a){var n,s;switch(a.type){case"zoo":n="zoo",s="../images/mark-lion.png";break;case"food":n="food",s="../images/mark-gulp.png";break;case"atraction":n="atraction",s="../images/mark-atraction.png"}console.log(s),t[e]=new ymaps.Placemark([a.lat,a.lon],{balloonContentHeader:a.title,balloonContentBody:'<div class="">'+a.html+"</div>"},{iconLayout:"default#image",iconImageHref:s,iconImageSize:[95,65],iconImageOffset:[-26,-32.5],balloonPanelMaxMapArea:0})}),d.add(t),o.geoObjects.add(d)}function a(){navigator.geolocation&&navigator.geolocation.getCurrentPosition?i.get({provider:"browser",mapStateAutoApply:!0}).then(function(t){l=t.geoObjects.get(0).geometry._coordinates,e(l)}):i.get({provider:"yandex",mapStateAutoApply:!0}).then(function(t){l=t.geoObjects.get(0).geometry._coordinates,e(l)})}function n(){i=ymaps.geolocation,o=new ymaps.Map(s,{center:u,zoom:15,controls:[]}),o.controls.add("zoomControl",{"float":"none",position:{top:215,right:20}}),o.behaviors.disable("scrollZoom"),c=function(){return ymaps.templateLayoutFactory.createClass('<div class="eventsCluster">{{ properties.geoObjects.length }}</div>')},d=new ymaps.Clusterer({groupByCoordinates:!1,clusterHideIconOnBalloonOpen:!1,geoObjectHideIconOnBalloonOpen:!1,clusterIcons:[{href:"../images/svg/marker.svg",size:[44,44],offset:[-22,-22]}],clusterIconContentLayout:c(),clusterBalloonItemContentLayout:ymaps.templateLayoutFactory.createClass('<div class="ballon_body">{{ properties.balloonContentBody|raw }}</div><div class="ballon_footer">{{ properties.balloonContentFooter|raw }}</div>')}),a()}var s="js-closest-map";if($("#"+s).length){var o,r,i,l,c,d,g=$(".js-closest-map_btn"),u=[55.75396,37.620393];ymaps.ready(n),g.bind("click",function(){a()})}}),_GLOB.slickArrLeftHtml='<button class="slick-arrow slick-prev"></button>',_GLOB.slickArrRightHtml='<button class="slick-arrow slick-next"></button>',$(function(){var e=$(".js-actions-sl");e.length&&e.slick({slidesToShow:1,slidesToScroll:1,dots:!1,fade:!1,speed:500,adaptiveHeight:!0,prevArrow:_GLOB.slickArrLeftHtml,nextArrow:_GLOB.slickArrRightHtml,swipe:!1,responsive:[{breakpoint:_GLOB.breakpoints.sm,settings:{swipe:!0}}]})}),$(function(){var e=$(".js-recom-sl");e.length&&e.slick({slidesToShow:2,slidesToScroll:2,dots:!1,arrows:!0,adaptiveHeight:!0,prevArrow:'<button class="slick-arrow2 slick-prev"></button>',nextArrow:'<button class="slick-arrow2 slick-next"></button>',swipe:!1,responsive:[{breakpoint:_GLOB.breakpoints.mm,settings:{swipe:!0}},{breakpoint:_GLOB.breakpoints.sm,settings:{slidesToShow:1,slidesToScroll:1,arrows:!1,dots:!0,swipe:!0}}]})});