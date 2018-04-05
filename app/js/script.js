$(document).ready(function(){

    /*preloader*/
    var preloader = {
        open: function () {
            $('body').addClass('hidden-overflow');
            $('.js-open').fadeIn('fast');
        },
        close: function () {
            $('body').removeClass('hidden-overflow');
            $('.js-open').fadeOut('fast');
        }
    };

    preloader.open();

    $(window).on('load', function () {
        setTimeout(function () {
            preloader.close();
        }, 400);
    });
    /*close*/

    /*mobile menu*/
    $(document).on('click', '#mobile-menu', function (event) {
        event.preventDefault();
        var menu = $(this).closest('.header__navigation').find('.header__nav'),
            submenu = $(this).closest('.header__navigation').find('.header__submenu');
        if ($(this).hasClass('js-trigger-active')) {
            $(this).removeClass('js-trigger-active');
            menu.slideUp('slow');
            submenu.slideUp('slow');
        } else {
            $(this).addClass('js-trigger-active');
            menu.slideDown('slow');
            submenu.slideDown('slow');
        }
        return false;
    });
    if (window.innerWidth < 756) {
        $(document).mouseup(function (event) {
            var block = $('.header__navigation');
            if (!block.is(event.target)
                && block.has(event.target).length === 0) {
                $('#mobile-menu').removeClass('js-trigger-active');
                $('.header__nav').slideUp('500');
                $('.header__submenu').slideUp('500');
            }
        });
    }
    /*close*/
});

$(window).on('load', function() {
    var mainHead = $('.header'),
        topBanner = $('.top-banner');
    if ( topBanner.length != 0 ) {
        mainHead.addClass('js-head-bg');
    } else {
        mainHead.removeClass('js-head-bg');
    }
});