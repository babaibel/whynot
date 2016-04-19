
$(function () {
    function StickPopup(selector,paramSettings){
        //this.selector = selector;
        this.popup = selector;  //$(selector);
        this.openStatus = false;
        this.settings = {
            closeSelector: '.js-popup-closer'
        };

        var settings = this.settings,
            _self = this;

        for(var p in paramSettings){
            this.settings[p] = paramSettings[p];
        }

        if( settings.toStick ){
            this.toStick = settings.toStick;

            $W.resize(function(){
                _self.setStick();
            });
            $W.scroll(function(){
                _self.setStick();
            });
        }

        if( this.settings.centerX ){
            this.centerX = settings.centerX;

            $W.resize(function(){
                _self.setCenterX();
            });
            $W.scroll(function(){
                _self.setCenterX();
            });
        }

        if(settings.closeSelector){
            var $closeBtn = this.popup.find(settings.closeSelector);
            if($closeBtn){
                this.popup.find(settings.closeSelector).bind('click', function(){
                    _self.close();
                })
            }

        }

    }

    StickPopup.prototype.setStick = function(){
        var elem = this.toStick,
            offset = elem.offset(),
            verticalArray = this.settings.vertical,
            horizontalArray = this.settings.horizontal,
            vertical,
            horizontal ;


        if(verticalArray && offset){
            vertical = offset[verticalArray[0]];

            if(verticalArray[0] == 'bottom'){
                vertical = $W.height() - offset.top - elem.outerHeight() ;
                this.popup.css('top', 'initial')
            }

            if(verticalArray[1] == 'out'){
                if(verticalArray[0] == 'bottom'){
                    vertical -= elem.outerHeight();
                }else{
                    vertical += elem.outerHeight();
                }
            }
/*
            if(verticalArray[2]){
                vertical += verticalArray[2];
            }*/

            this.popup.css(verticalArray[0], vertical)
        }

        if(horizontalArray && offset){
            horizontal = offset[horizontalArray[0]];

            if(horizontalArray[0] == 'right'){
                horizontal = $W.width() - offset.left - elem.outerWidth() ;
                this.popup.css('left', 'initial')
            }

            if(horizontalArray[1] == 'out'){
                if(horizontalArray[0] == 'right'){
                    horizontal -= elem.outerWidth();
                }else{
                    horizontal += elem.outerWidth();
                }
            }
/*
            if(horizontalArray[2]){
                horizontal += horizontalArray[2];
            }*/

            this.popup.css(horizontalArray[0], horizontal)
        }

    };

    StickPopup.prototype.setCenterX = function(){
        var xToSet = 0,
            popupH = this.popup.outerHeight(),
            winH = $W.height() ;

        if(popupH > winH ){
            xToSet = 0;
        }else{
            xToSet = (winH - popupH) / 2
        }

        if(this.popup.css('position') == 'absolute'){
            xToSet += $W.scrollTop();
        }

        this.popup.css('top', xToSet);
    };

    StickPopup.prototype.open = function(e){
        var _self = this;

        if( this.settings.toStick ){
            this.setStick();
        }
        if( this.settings.centerX ){
            this.setCenterX();
        }
        this.popup.addClass('_active');

        $W.bind('click', function (e) {
            if (!$(e.target).closest(_self.popup).length) {
                _self.close();
                $W.unbind('click');
            }
        });

        if(this.settings.onOpen){
            this.settings.onOpen(_self);
        }

        if(e){
            e.stopPropagation();
        }

        this.openStatus = true;
    };

    StickPopup.prototype.close = function(){
        this.popup.removeClass('_active');
        this.openStatus = false;
    };

    StickPopup.prototype.toggle = function(e){
        if(!this.openStatus){
            this.open(e);
        }else{
            this.close(e);
        }
    };


    /* popup init */

    $('.js-popup').each(function(){
        var $this = $(this),
            dataName = $this.data('popup-name');

        _POPUPS[dataName] = new StickPopup($this);
    });

    //js-popup-subs

    _POPUPS['login'] = new StickPopup($('.js-popup-login'),{
        toStick: $('.js-popup-btn[data-popup-name="login"]'),
        //closeSelector: '.js-popup-disabler',
        horizontal: ['right','in'],
        vertical: ['top','out']
    });

    _POPUPS['subscribe'] = new StickPopup($('.js-popup-subs'),{
        toStick: $('.js-popup-btn[data-popup-name="subscribe"]'),
        //closeSelector: '.js-popup-disabler',
        horizontal: ['left','in'],
        vertical: ['top','out']
    });

    _POPUPS['subscribe2'] = new StickPopup($('.js-popup-subs2'),{
        toStick: $('.js-popup-btn[data-popup-name="subscribe2"]'),
        //closeSelector: '.js-popup-disabler',
        horizontal: ['right','in'],
        vertical: ['top','out']
    });

/*
    _POPUPS['login'] = new StickPopup('.js-popup-login',{
        toStick: $('#stick-for-popup-login'),
        closeSelector: '.js-popup-disabler',
        horizontal: ['right','in',0],
        vertical: ['top','out',5]
    });

    _POPUPS['recall'] = new StickPopup('.js-popup-recall',{
        toStick: $('#stick-for-popup-recall'),
        closeSelector: '.js-popup-disabler',
        horizontal: ['left','in',0],
        vertical: ['top','out',5]
    });*/

    /*
    _POPUPS['recall-respond'] = new StickPopup('.js-popup-recall-respond',{
        toStick: $('#stick-for-popup-recall'),
        closeSelector: '.js-popup-disabler',
        horizontal: ['left','in',0],
        vertical: ['top','in',0],
        onOpen: function(obj){
            setTimeout(function(){
                obj.close();
            }, 2500)
        }
    });*/





});

$(function(){
    var $popupBtn = $('.js-popup-btn');
    if(!$popupBtn.length) return;

    $popupBtn.each(function(){
        var $this = $(this),
            popupName = $this.data('popup-name');

        $this.bind('click',function(e){
            _POPUPS[popupName].toggle(e);
        });
    });

});




