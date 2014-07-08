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
    component = document.getElementById('produit-slider'),
    sliderInfos = document.getElementById('produit-slider-infos'),
    items = component.querySelector('ul.itemwrap').children,
    current = 0,
    itemsCount = items.length,
    nav = component.querySelector('.produit-slider-nav'),
    navNext = nav.querySelector('.nav-next'),
    navPrev = nav.querySelector('.nav-prev'),
    isAnimating = false;

    function init() {
        navNext.addEventListener( 'click', function( ev ) { ev.preventDefault(); navigate( 'next' ); } );
        navPrev.addEventListener( 'click', function( ev ) { ev.preventDefault(); navigate( 'prev' ); } );
    }

    function navigate(dir) {
        if (isAnimating)
            return false;
        isAnimating = true;
        var cntAnims = 0;

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


        $(sliderInfos).fadeOut(250, function() {
            $(sliderInfos).find('.produit-nom').text($(nextItem).data('nom'));
            $(sliderInfos).find('.produit-description').text($(nextItem).data('description'));
            $(sliderInfos).find('.produit-poids').text($(nextItem).data('poids'));
            $(sliderInfos).find('.produit-quantite').text($(nextItem).data('quantite'));
            $(sliderInfos).find('.produit-prix').text($(nextItem).data('prix'));
            $(sliderInfos).find('.produit-lien-panier').attr('href', $(nextItem).data('lien-panier'));
            $(this).fadeIn();
        });
    }

    init();
})();
