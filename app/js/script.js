$(document).ready(function () {

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

    /*camp slider*/
    $('.camps__slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        dots: false,
        arrows: true,
        autoplay: true,
        autoplaySpeed: 4000
    });
    /*close*/

    /*show hover camp element*/
    $(document).on('click', '.camps__element > .descr > .descr__more', function (event) {
        event.preventDefault();
        var hover_block = $(this).closest('.camps__element').next('.camps__hover-element');
        if ($(this).hasClass('js-show-hover-block')) {
            $(this).removeClass('js-show-hover-block').text('vice');
            hover_block.removeClass('js-show-block').slideUp(400);
        } else {
            $('.camps__element > .descr > .descr__more').removeClass('js-show-hover-block').text('vice');
            $('.camps__hover-element').removeClass('js-show-block').slideUp(400);
            $(this).addClass('js-show-hover-block').text('zavřít');
            hover_block.addClass('js-show-block').slideDown(400);
            $('.camps__slider').slick('refresh');
        }
    });
    /*close*/

    /*contacts form validation*/
    $('#contacts-form-name, #contacts-form-email, #contacts-form-subject, #contacts-form-message').unbind().blur(function () {

        var id = $(this).attr('id');
        var val = $(this).val();

        switch (id) {
            case 'contacts-form-name':
                var rv_name = /^[a-zA-Zа-яА-Я]+$/;
                if (val.length > 2 && val != '' && rv_name.test(val)) {
                    $(this).removeClass('error').addClass('not_error');
                } else {
                    $(this).removeClass('not_error').addClass('error');
                }
                break;

            case 'contacts-form-email':
                var rv_email = /^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;
                if (val != '' && rv_email.test(val)) {
                    $(this).removeClass('error').addClass('not_error');
                } else {
                    $(this).removeClass('not_error').addClass('error');
                }
                break;

            case 'contacts-form-subject':
                var rv_name = /^[a-zA-Zа-яА-Я]+$/;
                if (val.length > 2 && val != '' && rv_name.test(val)) {
                    $(this).removeClass('error').addClass('not_error');
                } else {
                    $(this).removeClass('not_error').addClass('error');
                }
                break;

            case 'contacts-form-message':
                if (val != '' && val.length < 5000) {
                    $(this).removeClass('error').addClass('not_error');
                } else {
                    $(this).removeClass('not_error').addClass('error');
                }
                break;

        } // end switch(...)

    }); // end blur()
    $('#contacts-form').submit(function (event) {
        event.preventDefault();
        var name = $('#contacts-form-name').val(),
            mail = $('#contacts-form-email').val(),
            subject = $('#contacts-form-subject').val(),
            message = $('#contacts-form-message').val();
        $.ajax({
            url: myajax.url,
            type: "POST",
            data: {
                action: 'contact',
                name: name,
                mail: mail,
                subject: subject,
                message: message
            },
            success: function (data) {
                $('#contact-form input:text, textarea').val('').removeClass('error, not_error').text('');
                // alert(data);
            }
        }); // end ajax({...})
        return false;
    }); // end submit()
    /*close*/
});

$(window).on('load', function () {
    var mainHead = $('.header'),
        topBanner = $('.top-banner');
    if (topBanner.length != 0) {
        mainHead.addClass('js-head-bg');
    } else {
        mainHead.removeClass('js-head-bg');
    }
});