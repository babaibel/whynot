function scrollingTrigger(t){var e={offset:1.4,animClass:"_animation",afterScroll:function(){}},t=$.extend({},e,t||{}),n=$(".js-scroll-trigger");$W.on("scroll",function(e){n.each(function(e,n){var a=$W.scrollTop(),o=$W.height(),s=$(n).offset().top,i=$(n).height();a>s-o+i/t.offset&&($(n).hasClass(t.animClass)||$(n).addClass(t.animClass))})}),$W.scroll()}function elemInView(t,e){if($(t).length){var n=$(t),a=e||.9,o=$(document).scrollTop(),s=n.offset().top,i=$(window).height(),r=s-i*a,c=s+n.height()*a;return o>r&&c>o}}!function(t){t.fn.catTabs=function(){t(this).each(function(){function e(e){var n=$W.scrollTop(),a=o.filter("._active"),s=a.find(".js-card"),i=a.find(".js-actions-sl"),r=e||.8;s.each(function(){var e=t(this);(elemInView(e.parent(),r)||n>e.offset().top)&&e.addClass("_animated")}),i.each(function(){var e=t(this);(elemInView(e,r)||n>e.offset().top)&&e.addClass("_animated")})}var n=t(this),a=n.find(".js-mr-cat-btn"),o=n.find(".js-mr-cat-tab");a.bind("click",function(e){var n=t(this),s=n.parent().index(),i=o.eq(s);o.removeClass("_active").find(".js-card").removeClass("_animated"),o.removeClass("_active").find(".js-actions-sl").removeClass("_animated"),i.addClass("_active"),a.removeClass("_active").parent().removeClass("_active"),n.addClass("_active").parent().addClass("_active"),$W.scroll()}),$W.scroll(function(){e()}),e(1)})}}(jQuery),$(function(){var t=$(".js-catalog-tabs");t.length&&t.catTabs()}),$(function(){var t=$(".js-filter-param");t.length&&t.each(function(){var e=$(this),n=e.find(".js-filter-param__btn");n.bind("click",function(n){e.hasClass("_open");t.not(e).removeClass("_open"),e.toggleClass("_open"),n.stopPropagation(),$W.bind("click",function(t){var n=$(t.target),a=!(n.closest(".datepicker--cell").length||n.closest(".datepicker--nav-title").length||n.closest(".datepicker--nav-action").length||n.closest(e).length);a&&(e.removeClass("_open"),$W.unbind("click"))})})})}),$(function(){var t=$(".js-filter"),e=$(".js-filter__mob-toggle");(t.length||e.length)&&e.bind("click",function(){$B.toggleClass("_m-filter-open"),$W.bind("click",function(e){var n=$(e.target),a=!(n.closest(t).length||n.closest(".datepicker--cell").length||n.closest(".datepicker--nav-title").length||n.closest(".datepicker--nav-action").length);a&&($B.removeClass("_m-filter-open"),$W.unbind("click"))})})}),$(function(){var t=$(".js-f-events");if(t.length){var e=t.find("form"),n=$(".js-fevents-counter"),a=t.find(".js-daterange-ui"),o=t.find(".js-daterange_input"),s=t.find(".js-f-events-date"),i=t.data("query-url");_GLOB.refreshFindEventCounter=function(){$.ajax({type:"GET",url:i,data:e.serialize(),success:function(t){var e=JSON.parse(t);n.text(e.eventsCountStr)}})},e.find("input").bind("input change",function(){_GLOB.refreshFindEventCounter()}),$W.on("dateRangesInit",function(){s.val(o.val()),a[0].noUiSlider.on("slide",function(t,e,n){s.val(o.val()),_GLOB.refreshFindEventCounter()})})}}),$(function(){var t=$(".js-daterange-datepicker");if(t.length){var e=$(".js-f-events-date"),n=new Date;t.datepicker({inline:!0,minDate:n,onSelect:function(t){e.val(t),_GLOB.refreshFindEventCounter()}})}}),jQuery.extend(jQuery.validator.messages,{required:"Введите данные.",remote:"Пожалуйста, введите правильное значение.",email:"Пожалуйста, введите корректный адрес электронной почты.",url:"Пожалуйста, введите корректный URL.",date:"Пожалуйста, введите корректную дату.",dateISO:"Пожалуйста, введите корректную дату в формате ISO.",number:"Пожалуйста, введите число.",digits:"Пожалуйста, вводите только цифры.",creditcard:"Пожалуйста, введите правильный номер кредитной карты.",equalTo:"Пожалуйста, введите такое же значение ещё раз.",extension:"Пожалуйста, выберите файл с правильным расширением.",maxlength:$.validator.format("Пожалуйста, введите не больше {0} символов."),minlength:$.validator.format("Пожалуйста, введите не меньше {0} символов."),rangelength:$.validator.format("Пожалуйста, введите значение длиной от {0} до {1} символов."),range:$.validator.format("Пожалуйста, введите число от {0} до {1}."),max:$.validator.format("Пожалуйста, введите число, меньшее или равное {0}."),min:$.validator.format("Пожалуйста, введите число, большее или равное {0}.")}),jQuery.validator.addMethod("email",function(t,e){return this.optional(e)||/^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*[.][a-zA-Z0-9-]{1,8}$/.test(t)},"Неверный формат."),jQuery.validator.addMethod("tel",function(t,e){return this.optional(e)||/^((8|\+7|\+8)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/.test(t)},"Неверный формат."),jQuery.validator.addClassRules("js_field_digits",{digits:!0}),$(function(){var t=$(".js-rating");if(t.length){var e=t.find("input"),n=t.find("input:checked").val();e.bind("click",function(){var a=$(this).val();e.prop("checked",!1),$(this).prop("checked",!0),t.removeClass("rating--"+n),t.addClass("rating--"+a),n=a})}}),$(function(){var t=$(".js-form");t.length&&t.validationManager()}),function(t){t.fn.validationManager=function(){t(this).each(function(){var e=t(this),n={errorClass:"input-error",validClass:"input-success",focusCleanup:!1,focusInvalid:!1,errorElement:"span",ignore:".ignore"};e.validate(n)})}}(jQuery),$(function(){var t=$(".js-chkb-dropdown");t.length&&t.each(function(){var t=$(this),e=t.find(".js-chkb-dropdown__btn"),n=t.data("resol");e.bind("click",function(){$W.width()<=_GLOB.breakpoints[n]&&(t.toggleClass("_active"),$W.bind("click",function(e){var n=$(e.target),a=!(n.closest(".datepicker--cell").length||n.closest(".datepicker--nav-title").length||n.closest(".datepicker--nav-action").length||n.closest(t).length);a&&t.removeClass("_active")}))})})}),$(function(){var t=$(".js-daterange");if(t.length){var e=new Event("dateRangesInit");t.each(function(){function t(t){var e,n,a="",o=t.getDate();switch(t.getMonth()){case 0:e="янв";break;case 1:e="фев";break;case 2:e="март";break;case 3:e="апр";break;case 4:e="май";break;case 5:e="июн";break;case 6:e="июл";break;case 7:e="авг";break;case 8:e="сен";break;case 9:e="окт";break;case 10:e="ноя";break;case 11:e="дек"}switch(t.getDay()){case 1:n="пн";break;case 2:n="вт";break;case 3:n="ср";break;case 4:n="чт";break;case 5:n="пт";break;case 6:n="сб";break;case 7:n="вс";break;case 0:n="вс"}return a+=o+" <small>"+e,a+='<span class="daterange__day-wr">, <span class="daterange__day">'+n+"</span></span>",a+="</small>"}function e(){var e,n=s.get(),a=new Date;a.setDate(a.getDate()+Number(n[0])),i.eq(0).html(t(a)),e=a.getDate()+".",e+=a.getMonth()+1<10?"0"+(a.getMonth()+1):a.getMonth()+1,e+="."+a.getFullYear(),a=new Date,a.setDate(a.getDate()+Number(n[1])),i.eq(1).html(t(a)),e+=" - "+a.getDate()+".",e+=a.getMonth()+1<10?"0"+(a.getMonth()+1):a.getMonth()+1,e+="."+a.getFullYear(),c.val(e)}function n(){var t=s.get();p.css("left",t[0]*a+"%"),p.css("width",(t[1]-t[0])*a+"%")}var a,o,s,i,r=$(this),c=r.find(".js-daterange_input"),l=$(".js-daterange-ui"),d=r.find(".js-daterange-tracker"),p=r.find(".js-daterange-v-line"),u=($(".js-f-events-date"),new Date),f=new Date;f.setMonth(f.getMonth()+3),o=(f-u)/1e3/60/60/24,a=100/o;for(var h,g=0;8>g;++g)g&&u.setDate(u.getDate()+o/6.5),h='<div class="daterange__line-item js-daterange-date">'+t(7==g?f:u)+"</div>",d.append(h);noUiSlider.create(l[0],{start:[0,o],connect:!1,range:{min:0,max:o},step:1,tooltips:[!0,!0]}),s=l[0].noUiSlider,i=r.find(".noUi-tooltip"),s.on("slide",function(t,a,o){e(),n()}),e()}),$W[0].dispatchEvent(e)}}),$(function(){var t=$(".js-passw-input");t.length&&t.each(function(){var t=$(this),e=t.find(".js-password-toggle"),n=$(this).find("input");e.bind("click",function(){var e=t.hasClass("_pass-visible");e?(t.removeClass("_pass-visible"),n.attr("type","password")):(t.addClass("_pass-visible"),n.attr("type","text"))})})}),$(function(){var t=$(".js-datepicker");t.length&&t.each(function(){var t=$(this),e=t.data("inline");t.datepicker({inline:e})})}),function(t){t.fn.imgSimpleUpload=function(e){var n=t(this),a=n.find('input[type="file"]'),o=n.data("min-w"),s=n.data("min-w");a.bind("change input",function(t){var i=new FileReader,r=a[0].files[0];i.onload=function(t){return function(t){var i=t.target.result,r=new Image;return r.src=i,r.width<o&&r.height<s?void a.val(""):("bg"==e.type&&n.css("background-image","url('"+i+"')"),"img"==e.type&&n.html('<img src="'+i+'">'),void n.addClass("_loaded"))}}(r),i.readAsDataURL(r)})}}(jQuery),function(t){t.fn.onlyListedKeys=function(e){t(this).each(function(){var n=t(this),a=n.val();n.bind("change input",function(){var t=n.val();e.test(t)?a=t:n.val(a)})})}}(jQuery),$(function(){var t=$(".js-ava-upload");t.length&&t.each(function(){var t=$(this);$(this).imgSimpleUpload({target:t,type:"bg"})})}),$(function(){var t=$(".js-only-digits");t.length&&t.onlyListedKeys(/^([0-9](\.)?(-)?(,)?){0,}$/)}),$(function(){var t=$(".js-header-search"),e=$(".js-header-search-trigger");if(e.length){var n=$W.scrollTop();e.bind("click",function(){t.toggleClass("_expanded"),$W.bind("click",function(e){var n=$(e.target);n.closest(".js-header-search").length||(t.removeClass("_expanded"),$W.unbind("click"))})}),$W.scroll(function(){var t=$W.scrollTop();n>=t&&t>0?$B.addClass("_search-open"):$B.removeClass("_search-open"),n=t})}}),$(function(){var t=$(".js-header-menu-btn");t.length&&t.bind("click",function(e){$B.toggleClass("_header-menu-open"),$W.bind("click",function(e){var n=$(e.target);n.closest(".js-header-menu").length||n.closest(t).length||($B.removeClass("_header-menu-open"),$W.unbind("click"))}),e.stopPropagation()})}),$(function(){var t=$(".js-sticky-header");if(t.length){var e=$W.scrollTop();$W.scroll(function(){var t=$W.scrollTop();t>86?$B.addClass("_stycky-header"):$B.removeClass("_stycky-header"),e=t})}}),$(function(){var t=$(".js-header-submenu");if(t.length){var e=t.children(".header-nav__link");e.bind("click",function(){if($W.outerWidth()<=579)return e.not(this).closest(".js-header-submenu").removeClass("_open"),$(this).closest(".js-header-submenu").toggleClass("_open"),!1;var t=$(this).children(".header-nav__link").attr("href");document.location.href=t.value})}}),$(function(){var t=$(".js-item-map-btn");t.length&&t.on("click",function(){return $(this).hide(),$(this).siblings(".js-item-map-input").fadeIn().find(".js-roadmap-input").focus(),!1})}),function(t){t.fn.roadMap=function(){function e(){c=new ymaps.Map("roadMap",{center:[o,s],zoom:15,controls:[]});var t=new ymaps.GeoObjectCollection({},{iconLayout:"default#image",iconImageHref:"../images/mark-gulp.png",iconImageSize:[96,65],iconImageOffset:[-28,-65]});t.add(new ymaps.Placemark([+o,+s])),c.geoObjects.add(t)}function n(){var t=r.val();l&&c.geoObjects.remove(l.getPaths()),ymaps.route([[o,s],"Москва "+t],{mapStateAutoApply:!0}).then(function(t){l=t,l.getPaths().options.set({strokeColor:"#0ab178",strokeWidth:3}),c.geoObjects.add(l.getPaths())});var e=ymaps.geocode("Москва "+t,{json:!0});e.then(function(t){var e=t.GeoObjectCollection.featureMember[0];e.GeoObject.Point.pos.split(" ")})}var a=this,o=a.attr("data-point-lat"),s=a.attr("data-point-lon"),i=t(".js-roadmap-form"),r=t(".js-roadmap-input");ymaps.ready(e);var c,l;i.bind("submit",function(t){return n(),t.preventDefault(),!1})}}(jQuery),$(function(){var t=$("#roadMap");t.length&&t.roadMap()});var $W=$(window),$D=$(document),$H=$("html"),$B=$("body"),_POPUPS={},_GLOB={breakpoints:{xxl:1920,xl:1599,xx:1500,lx:1400,l:1279,ll:1099,m:979,mm:859,s:767,sm:669,ss:579,xs:479,xxs:320}};$(function(){var t=$(".js-bookmark");t.length&&t.on("click",function(){$(this).hasClass("_active")?($(this).removeClass("_active"),$(this).next(".js-bookmark-tooltip").removeClass("_active")):($(this).addClass("_active"),$(this).next(".js-bookmark-tooltip").addClass("_active"))})}),$(function(){var t=$(".js-bookmark-lk");t.length&&t.on("click",function(){$(this).next(".js-bookmark-tooltip").toggleClass("_active")})}),$(function(){var t=$(".js-close-tooltip");t.length&&t.on("click",function(){$(this).closest(".js-bookmark-tooltip").removeClass("_active")})}),$(function(){var t=$(".js-cards-filter");if(t.length){var e=$(".js-cards-filter").find("a");e.on("click",function(){$(this).addClass("active"),e.not(this).removeClass("active")})}}),$(function(){var t=$(".js-alert");if(t.length){var e=t.find(".js-alert-close");e.on("click",function(){t.slideUp()})}}),$(function(){var t=$(".js-delete-card");t.length&&t.on("click",function(){var t=$(this);t.closest(".materials-grid__col").addClass("_deleting"),setTimeout(function(){t.closest(".materials-grid__col").remove()},250)})}),$(function(){var t=$(".js-org-enter");t.length&&t.addClass("_animation")}),$(function(){var t=$(".js-contacts");t.length&&t.addClass("_animation")}),$(function(){var t=$(".js-parallax");t.length&&t.each(function(){var t=$(this);$(window).scroll(function(){var e=-($W.scrollTop()/t.data("speed")),n="center "+e+"px";t.css({backgroundPosition:n})})})}),setTimeout(function(){scrollingTrigger()},500),$(function(){var t=$(".js-comment-new-btn");t.length&&t.on("click",function(){targetIt=$(this),targetIt.closest(".comments-wr").find(".js-comment-new").slideDown(300)})}),$(function(){var t=$(".js-show-comment");t.length&&t.on("click",function(){targetIt=$(this),targetIt.addClass("_animation"),setTimeout(function(){targetIt.removeClass("_animation"),$(".js-comment-hidden ._hidden").css("display","block"),setTimeout(function(){$(".js-comment-hidden ._hidden").removeClass("_hidden")},100)},1500)})}),$(function(){var t=$(".js-show-cards");t.length&&t.on("click",function(){targetIt=$(this),targetIt.addClass("_animation"),setTimeout(function(){targetIt.removeClass("_animation"),$(".js-cards-hidden ._hidden").css("display","flex"),setTimeout(function(){$(".js-cards-hidden ._hidden").removeClass("_hidden")},100)},1500)})});var scrollbarW=0,scrollbarWidth=function(){if($H.hasClass("no-touch")){var t=$("<div>").css({height:"50px",width:"50px"}),e=$("<div>").css({height:"200px"});$("body").append(t.append(e));var n=$("div",t).innerWidth();t.css("overflow-y","scroll");var a=$("div",t).innerWidth();$(t).remove(),scrollbarW=n-a}}();$(function(){var t=$(".js-popup-mid-btn");t.length&&t.magnificPopup({preloader:!1,mainClass:"mfp-zoom-out",removalDelay:300,type:$(this).data("type")||"inline",callbacks:{open:function(){$B.addClass("_popup"),$("._stycky-header .header-bot-wr").css({width:"auto",right:scrollbarW})},close:function(){$B.removeClass("_popup"),$("._stycky-header .header-bot-wr").css({width:"100%",right:"auto"})},afterClose:function(){$("#popup-sps").removeClass("_animation")}}})}),$(function(){var t=$("#feedback-form");t.length&&t.submit(function(){return $.magnificPopup.open({items:{src:"#popup-sps"},type:"inline"}),setTimeout(function(){$("#popup-sps").addClass("_animation")},100),setTimeout(function(){$.magnificPopup.close()},3e3),!1})}),$(function(){var t=$(".js-filter-tag-close");t.length&&t.on("click",function(){targetIt=$(this),targetIt.closest(".filter-tag").addClass("_deleting"),setTimeout(function(){targetIt.closest(".filter-tag").remove()},250)})}),$(function(){var t=$(".js-promo:last");if(t.length){var e=$(".js-after-promo:last"),n=$(".js-sticky-header").outerHeight(),a=t.outerHeight()-n;e.css("marginTop",a),$W.on("resize",function(){a=t.outerHeight()-n,e.css("marginTop",a)})}}),$(function(){var t=$(".js-text-edit-btn");t.length&&t.on("click",function(){var t=$(this),e=t.text(),n=t.closest(".js-text-edit"),a=n.find(".js-text-edit-hide"),o=a.find(".js-text-edit-input");n.addClass("_editing"),o.val(e).focus()})}),$(function(){var t=$(".js-text-edit-save");t.length&&t.on("click",function(){var t=$(this),e=t.closest(".js-text-edit"),n=e.find(".js-text-edit-btn"),a=e.find(".js-text-edit-hide"),o=a.find(".js-text-edit-input").val();e.removeClass("_editing"),""==o&&(o="Изменить"),n.text(o)})}),$(function(){var t=$(".js-text-edit-close");t.length&&t.on("click",function(){var t=$(this),e=t.closest(".js-text-edit");e.removeClass("_editing")})}),$(function(){var t=$(".js-phone-validate");t.length&&t.inputmask({mask:"+7 (999) 999-9999"})}),$(function(){var t=$(".js-url-validate");t.length&&t.inputmask("http://pochemybi.net/aaaaaaaaaaaaaaa")}),$(function(){var t=$("#metro");if(t.length){var e=t.find("option[data-color]"),n=[];e.each(function(){var t=$(this).data("color"),e=$(this).val();n.push({color:t,name:e})}),t.selectize({openOnFocus:!1,options:n,render:{option:function(t,e){return'<div class="option"><div class="option__text"><span class="option__color option__color-'+e(t.color)+'"></span>'+e(t.name)+"</div></div>"}}})}}),$(function(){var t=$(".js-date-add");if(t.length){var e=t.closest(".js-date-wr"),n=e.find(".js-date-table"),a='<div class="form-row__col-wr form-row__col-wr--title"><div class="form-row__col form-row__col--w60"><div class="form-row__name-co l"><div class="form-row__name">Дата*</div></div></div><div class="form-row__col form-row__col--w40"><div class="form-row__name-col"><div class="form-row__name">Время*</div></div></div></div>',o='<div class="form-row__col-wr js-date-checkbox"><label class="checkbox-label"><span class="checkbox"><input type="checkbox"><span class="checkbox__view"></span></span><span class="checkbox-label__txt">Время всегда одинаковое</span></label></div>';t.datepicker({onSelect:function(t,s,i){if(s.length>1){var r,c=(s[1]-s[0])/1e3/60/60/24+1,l=s[0];for(n.empty(),r=0;c>r;r++){0==r?l.setDate(l.getDate()):l.setDate(l.getDate()+1);var d=l.getDate(),p=l.getMonth()+1,u=l.getFullYear();10>d&&(d="0"+d),10>p&&(p="0"+p);var f=d+"."+p+"."+u,h='<div class="form-row__col-wr"><div class="form-row__col form-row__col--w60"><div class="form-row__content-col"><div class="form-row__content"><div class="input-cont"><input  type="text" class="input" disabled value="'+f+'"></div></div></div></div><div class="form-row__col form-row__col--w40"><div class="form-row__content-col"><div class="form-row__content"><div class="input-cont"><input class="input js-date-time" type="text"></div></div></div></div></div>',g=a+h+o;0==r?n.append(g):n.append(h)}e.addClass("_hide-time")}else e.removeClass("_hide-time"),n.empty()}}),$B.on("change",".js-date-time",function(){if($(".js-date-checkbox input").is(":checked")){var t=$(this).val();$(".js-date-time").not(this).val(t)}}),$B.on("change",".js-date-checkbox input",function(){if($(this).is(":checked")){var t,n=e.find(".js-date-time");console.log(n),n.each(function(){return""==!$(this).val()?(t=$(this).val(),console.log(t),!1):void 0}),$(".js-date-time").val(t)}})}}),$(function(){function t(t){i=new ymaps.Placemark(t,{balloonContentHeader:"Вы здесь!"},{iconLayout:"default#image",iconImageHref:"../images/svg/marker.svg",iconImageSize:[44,44],iconImageOffset:[-22,-22],balloonPanelMaxMapArea:0}),s.geoObjects.add(i),s.setCenter(t),$.ajax({type:"GET",url:"queries/getClosestOnMap.php",data:{lat:t[0],lon:t[1]},success:function(t){var n=JSON.parse(t);e(n)}})}function e(t){var e=[];d.removeAll(),$.each(t,function(t,n){var a,o;switch(n.type){case"zoo":a="zoo",o="../images/mark-lion.png";break;case"food":a="food",o="../images/mark-gulp.png";break;case"attraction":a="attraction",o="../images/mark-attraction.png"}e[t]=new ymaps.Placemark([n.lat,n.lon],{balloonContentHeader:n.title,balloonContentBody:'<div class="">'+n.html+"</div>"},{iconLayout:"default#image",iconImageHref:o,iconImageSize:[95,65],iconImageOffset:[-26,-32.5],balloonPanelMaxMapArea:0})}),d.add(e),s.geoObjects.add(d)}function n(){navigator.geolocation&&navigator.geolocation.getCurrentPosition?r.get({provider:"browser",mapStateAutoApply:!0}).then(function(e){c=e.geoObjects.get(0).geometry._coordinates,t(c)}):r.get({provider:"yandex",mapStateAutoApply:!0}).then(function(e){c=e.geoObjects.get(0).geometry._coordinates,t(c)})}function a(){r=ymaps.geolocation,s=new ymaps.Map(o,{center:u,zoom:15,controls:[]}),s.controls.add("zoomControl",{"float":"none",position:{top:215,right:20}}),s.behaviors.disable("scrollZoom"),l=function(){return ymaps.templateLayoutFactory.createClass('<div class="eventsCluster">{{ properties.geoObjects.length }}</div>')},d=new ymaps.Clusterer({groupByCoordinates:!1,clusterHideIconOnBalloonOpen:!1,geoObjectHideIconOnBalloonOpen:!1,clusterIcons:[{href:"../images/svg/marker.svg",size:[44,44],offset:[-22,-22]}],clusterIconContentLayout:l(),clusterBalloonItemContentLayout:ymaps.templateLayoutFactory.createClass('<div class="ballon_body">{{ properties.balloonContentBody|raw }}</div><div class="ballon_footer">{{ properties.balloonContentFooter|raw }}</div>')}),n()}var o="js-closest-map";if($("#"+o).length){var s,i,r,c,l,d,p=$(".js-closest-map_btn"),u=[55.75396,37.620393];ymaps.ready(a),p.bind("click",function(){n()})}}),function(t){function e(e,n){this.elem=e,this.elemId=e.attr("id"),this.yMap,this.currentData,this.userLocation,this.settings={},this.settings=t.extend(this.settings,n);var a=this;t(this),this.settings;ymaps.ready(function(){a.initMap()})}e.prototype.initMap=function(t){this.setUserLocation(!0)},e.prototype.setUserLocation=function(t){var e=this,n=ymaps.geolocation;navigator.geolocation&&navigator.geolocation.getCurrentPosition?n.get({provider:"browser",mapStateAutoApply:!0}).then(function(n){e.userLocation=n.geoObjects.get(0).geometry._coordinates,t&&(e.createMap(),e.setData())}):n.get({provider:"yandex",mapStateAutoApply:!0}).then(function(n){e.userLocation=n.geoObjects.get(0).geometry._coordinates,t&&(e.createMap(),e.setData())})},e.prototype.setData=function(e){var n=this;t.ajax({url:n.settings.url,type:"GET",data:{lat:n.userLocation[0],lon:n.userLocation[1]},async:!1}).success(function(t){var e=JSON.parse(t);n.currentData=e,n.setMarks()})},e.prototype.createMap=function(){var t=this;t.yMap=new ymaps.Map(t.elemId,{center:t.userLocation,zoom:13,controls:[]}),t.yMap.controls.add("zoomControl",{"float":"none",position:{top:130,left:20}})},e.prototype.setMarks=function(){var e,n,a,o=this,s=o.yMap,i=o.currentData.marks,r=[];e=new ymaps.Placemark(o.userLocation,{balloonContentHeader:"Вы здесь!"},{iconLayout:"default#image",iconImageHref:"../images/svg/marker.svg",iconImageSize:[44,44],iconImageOffset:[-22,-22],balloonPanelMaxMapArea:0}),s.geoObjects.add(e),a=function(){return ymaps.templateLayoutFactory.createClass('<div class="eventsCluster">{{ properties.geoObjects.length }}</div>')},n=new ymaps.Clusterer({groupByCoordinates:!1,clusterHideIconOnBalloonOpen:!1,geoObjectHideIconOnBalloonOpen:!1,clusterIcons:[{href:"../images/svg/marker.svg",size:[44,44],offset:[-22,-22]}],clusterIconContentLayout:a(),clusterBalloonItemContentLayout:ymaps.templateLayoutFactory.createClass('<div class="ballon_body">{{ properties.balloonContentBody|raw }}</div><div class="ballon_footer">{{ properties.balloonContentFooter|raw }}</div>')}),t.each(i,function(t,e){var n,a;switch(e.type){case"zoo":n="zoo",a="../images/mark-lion.png";break;case"food":n="food",a="../images/mark-gulp.png";break;case"attraction":n="attraction",a="../images/mark-attraction.png"}r[t]=new ymaps.Placemark([e.lat,e.lon],{balloonContentHeader:e.title,balloonContentBody:'<div class="">'+e.html+"</div>"},{iconLayout:"default#image",iconImageHref:a,iconImageSize:[95,65],iconImageOffset:[-26,-32.5],balloonPanelMaxMapArea:0})}),n.add(r),o.yMap.geoObjects.add(n)},e.prototype.renewData=function(t){var e=this;e.setData(t)},t.fn.catalogMap=function(n){var a=t(this),o=new e(a,n);return o}}(jQuery),$(function(){function t(t,e){this.popup=t,this.openStatus=!1,this.settings={closeSelector:".js-popup-closer"};var n=this.settings,a=this;for(var o in e)this.settings[o]=e[o];if(n.toStick&&(this.toStick=n.toStick,$W.resize(function(){a.setStick()}),$W.scroll(function(){a.setStick()})),this.settings.centerX&&(this.centerX=n.centerX,$W.resize(function(){a.setCenterX()}),$W.scroll(function(){a.setCenterX()})),n.closeSelector){var s=this.popup.find(n.closeSelector);s&&this.popup.find(n.closeSelector).bind("click",function(){a.close()})}}t.prototype.setStick=function(){var t,e,n=this.toStick,a=n.offset(),o=this.settings.vertical,s=this.settings.horizontal;o&&a&&(t=a[o[0]],"bottom"==o[0]&&(t=$W.height()-a.top-n.outerHeight(),this.popup.css("top","initial")),"out"==o[1]&&("bottom"==o[0]?t-=n.outerHeight():t+=n.outerHeight()),this.popup.css(o[0],t)),s&&a&&(e=a[s[0]],"right"==s[0]&&(e=$W.width()-a.left-n.outerWidth(),this.popup.css("left","initial")),"out"==s[1]&&("right"==s[0]?e-=n.outerWidth():e+=n.outerWidth()),this.popup.css(s[0],e))},t.prototype.setCenterX=function(){var t=0,e=this.popup.outerHeight(),n=$W.height();t=e>n?0:(n-e)/2,"absolute"==this.popup.css("position")&&(t+=$W.scrollTop()),this.popup.css("top",t)},t.prototype.open=function(t){var e=this;this.settings.toStick&&this.setStick(),this.settings.centerX&&this.setCenterX(),this.popup.addClass("_active"),$W.bind("click",function(t){$(t.target).closest(e.popup).length||(e.close(),$W.unbind("click"))}),this.settings.onOpen&&this.settings.onOpen(e),t&&t.stopPropagation(),this.openStatus=!0},t.prototype.close=function(){this.popup.removeClass("_active"),this.openStatus=!1},t.prototype.toggle=function(t){this.openStatus?this.close(t):this.open(t)},$(".js-popup").each(function(){var e=$(this),n=e.data("popup-name");_POPUPS[n]=new t(e)}),_POPUPS.login=new t($(".js-popup-login"),{toStick:$('.js-popup-btn[data-popup-name="login"]'),horizontal:["right","in"],vertical:["top","out"]}),_POPUPS.reg=new t($(".js-popup-reg"),{toStick:$('.js-popup-btn[data-popup-name="reg"]'),horizontal:["right","in"],vertical:["top","out"]}),_POPUPS.subscribe=new t($(".js-popup-subs"),{toStick:$('.js-popup-btn[data-popup-name="subscribe"]'),horizontal:["left","in"],vertical:["top","out"]}),_POPUPS.subscribe2=new t($(".js-popup-subs2"),{toStick:$('.js-popup-btn[data-popup-name="subscribe2"]'),horizontal:["right","in"],vertical:["top","out"]}),_POPUPS.catMap=new t($(".js-popup-cat-map"),{})}),$(function(){var t=$(".js-popup-btn");t.length&&t.each(function(){var t=$(this),e=t.data("popup-name");t.bind("click",function(t){_POPUPS.login.close(),_POPUPS.reg.close(),_POPUPS.subscribe.close(),_POPUPS.subscribe2.close(),_POPUPS[e].toggle(t)})})}),$(function(){var t=$(".js-catalog-map");t.length&&t.each(function(){var t=$(this),e=t.catalogMap({url:t.data("url")});_POPUPS.catMap.map=e})}),function(t){t.fn.customSelector=function(e){t(this).each(function(){function n(){s.toggle(),a.toggleClass("_open")}var a=t(this),o=a.find(".js-selector-current"),s=a.find(".js-selector-options"),i=a.find(".js-selector-input").length?a.find(".js-selector-input"):a.find('input[type="hidden"]'),r={};for(var c in e)r[c]=e[c];o.bind("click",function(e){i.prop("disabled")||(n(),$W.bind("click",function(e){a.hasClass("_open")&&!t(e.target).closest(a).length&&(n(),$D.unbind("click"))}),e.preventDefault())}),s.find(".js-selector-option").bind("click",function(){var e=t(this),a=e.data("option-name")||e.text();if(r.beforeSelect){var c=r.beforeSelect(e,s.find(".js-selector-option"),t.trim(a));if(0==c)return!1}if(o.html(t(this).html()),i&&i.val(a),n(),r.afterSelect){var l=r.afterSelect(e,s.find(".js-selector-option"));if(0==l)return!1}})})}}(jQuery),function(){var t=$(".js-selector");t.length&&t.customSelector({beforeSelect:function(){console.log("before select")}})}(jQuery),_GLOB.slickArrLeftHtml='<button class="slick-arrow slick-prev"></button>',_GLOB.slickArrRightHtml='<button class="slick-arrow slick-next"></button>',$(function(){var t=$(".js-actions-sl");t.length&&t.slick({slidesToShow:1,slidesToScroll:1,dots:!1,adaptiveHeight:!0,prevArrow:_GLOB.slickArrLeftHtml,nextArrow:_GLOB.slickArrRightHtml,swipe:!1,responsive:[{breakpoint:_GLOB.breakpoints.sm,settings:{swipe:!0}}]})}),$(function(){var t=$(".js-actions-sl2");t.length&&t.slick({slidesToShow:1,slidesToScroll:1,dots:!0,autoplay:!0,autoplaySpeed:3e3,adaptiveHeight:!0,prevArrow:_GLOB.slickArrLeftHtml,nextArrow:_GLOB.slickArrRightHtml,swipe:!1,responsive:[{breakpoint:_GLOB.breakpoints.sm,settings:{swipe:!0}}]})}),$(function(){var t=$(".js-recom-sl");t.length&&t.slick({slidesToShow:2,slidesToScroll:2,dots:!1,arrows:!0,adaptiveHeight:!0,prevArrow:'<button class="slick-arrow2 slick-prev"></button>',nextArrow:'<button class="slick-arrow2 slick-next"></button>',swipe:!1,responsive:[{breakpoint:_GLOB.breakpoints.mm,settings:{swipe:!0}},{breakpoint:_GLOB.breakpoints.sm,settings:{slidesToShow:1,slidesToScroll:1,arrows:!1,dots:!0,swipe:!0}}]})});