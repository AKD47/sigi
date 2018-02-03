$(document).ready(function(){

    /*mobile menu*/
    $(document).on('click', '#mobile-menu', function (event) {
        event.preventDefault();
        var menu = $(this).next('.header__nav'),
            submenu = menu.next('.header__submenu');
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

    /*send message modal*/
    $(document).on('click', '.contacts-modal', function () {
        event.preventDefault();
        $('#overlay').fadeIn(400,
            function () {
                $('.modal__contacts').css('display', 'block').animate({opacity: 1}, 200);
            });
    });
    $(document).on('click', '#overlay', function () {
        $('.modal__contacts').animate({opacity: 0}, 200,
            function () {
                $(this).css('display', 'none');
                $('#overlay').fadeOut(400);
            }
        );
    });
    /*close*/
});

//preloader
;(function ($) {

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
})(jQuery);

$(window).on('load', function() {
    var mainHead = $('.header'),
        topBanner = $('.top-banner');
    if ( topBanner.length != 0 ) {
        mainHead.addClass('js-head-bg');
    } else {
        mainHead.removeClass('js-head-bg');
    }
});