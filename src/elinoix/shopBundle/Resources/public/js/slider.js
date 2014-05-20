(function() {
    var support = {animations: Modernizr.cssanimations},
    animEndEventNames = {
        'WebkitAnimation': 'webkitAnimationEnd',
        'OAnimation': 'oAnimationEnd',
        'msAnimation': 'MSAnimationEnd',
        'animation': 'animationend'
    },
    // animation end event name
    animEndEventName = animEndEventNames[ Modernizr.prefixed('animation') ],
            component = document.getElementById('slider'),
            sliderInfos = document.getElementById('slider-infos'),
            items = component.querySelector('ul.itemwrap').children,
            current = 0,
            itemsCount = items.length,
            nav = component.querySelector('.slider-nav'),
            navNext = nav.querySelector('.nav-next'),
            navPrev = nav.querySelector('.nav-prev'),
            navExpand = nav.querySelector('.nav-expand'),
            isAnimating = false;

    function init() {
        navNext.addEventListener( 'click', function( ev ) { ev.preventDefault(); navigate( 'next' ); } );
        navPrev.addEventListener( 'click', function( ev ) { ev.preventDefault(); navigate( 'prev' ); } );
        navExpand.addEventListener( 'click', toggleExpand );
    }

    function navigate(dir) {
        if (isAnimating)
            return false;
        isAnimating = true;
        var cntAnims = 0;

        $(sliderInfos).fadeOut(750, function() {
            $(this).fadeIn();
        });
        var currentItem = items[ current ];

        if (dir === 'next') {
            current = current < itemsCount - 1 ? current + 1 : 0;
        }
        else if (dir === 'prev') {
            current = current > 0 ? current - 1 : itemsCount - 1;
        }

        var nextItem = items[ current ];

        var onEndAnimationCurrentItem = function() {
            this.removeEventListener(animEndEventName, onEndAnimationCurrentItem);
            $(this).removeClass('current');
            $(this).removeClass(dir === 'next' ? 'navOutNext' : 'navOutPrev');
            ++cntAnims;
            if (cntAnims === 2) {
                isAnimating = false;
            }
        }

        var onEndAnimationNextItem = function() {
            this.removeEventListener(animEndEventName, onEndAnimationNextItem);
            $(this).addClass('current');
            $(this).removeClass(dir === 'next' ? 'navInNext' : 'navInPrev');
            ++cntAnims;
            if (cntAnims === 2) {
                isAnimating = false;
            }
        }

        if (support.animations) {
            currentItem.addEventListener(animEndEventName, onEndAnimationCurrentItem);
            nextItem.addEventListener(animEndEventName, onEndAnimationNextItem);
        }
        else {
            onEndAnimationCurrentItem();
            onEndAnimationNextItem();
        }

        $(currentItem).addClass(dir === 'next' ? 'navOutNext' : 'navOutPrev');
        $(nextItem).addClass(dir === 'next' ? 'navInNext' : 'navInPrev');
    }

    function toggleExpand() {
        $(sliderInfos).fadeOut(300, function() {
            if ($(component).hasClass('slider-small')) {
                $(component).removeClass('slider-small');
                $(navExpand).removeClass('fa-plus').addClass('fa-minus');
            }
            else {
                $(component).addClass('slider-small');
                $(navExpand).removeClass('fa-minus').addClass('fa-plus');
            }
            $(this).fadeIn();
        });
    }

    init();
})();