(function ($) {
    "use strict"
    let categoryName = '';
    $('.item-size-value:eq(0)').addClass('active');


    let address = $(location).attr('href')
    $('.menu__item a').removeClass('active');

    // switch (address.slice(address.lastIndexOf("/"))) {
    //     case "/":
    //         $('.menu__item_header a:eq(0)').addClass('active');
    //         $('.menu__item_footer a:first-of-type:eq(0)').addClass('active');
    //         break;
    //     case "/shop":
    //         $('.menu__item_header a:eq(1)').addClass('active');
    //         $('.menu__item_footer a:first-of-type:eq(1)').addClass('active');
    //         break;
    //     case "/brand":
    //         $('.menu__item_header a:eq(2)').addClass('active');
    //         $('.menu__item_footer a:first-of-type:eq(2)').addClass('active');
    //         break;
    //     case "/contact":
    //         $('.menu__item_header a:eq(3)').addClass('active');
    //         $('.menu__item_footer a:first-of-type:eq(3)').addClass('active');
    //         break;
    //     default:
    //         break;
    // }

    $('.woocommerce-pagination ul').addClass('tabs tabs_pages');

    $(window).on('scroll', function () {
        let scroll = $(window).scrollTop();
        if (scroll < 200) {
            $('#back-top').fadeOut(500);
            $(".header").removeClass("sticky-bar");
        } else {
            $('#back-top').fadeIn(500);
            $(".header").addClass("sticky-bar");
        }
    });


    $('#back-top a').on("click", function () {
        $('body,html').animate({
            scrollTop: 0
        }, 400);
        return false;
    });

    $(document).ready(() => {
        $.each($('.item-color-value'), function (index, value) {
            value.style.background = value.getAttribute("value");
        });

        $('.slider').slick({
            arrows: false,
            dots: true,
            adaptiveHeight: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            speed: 1000,
            easing: 'linear',
            infinite: true,
            initialSlide: 0,
            autoplay: true,
            autoplaySpeed: 5000,
            pauseOnHover: true,
            pauseOnFocus: true,
            pauseOnDotsHover: true,
            draggable: true,
            swipe: true,
            touchThreshold: 10,
            touchMove: true,
            waitForAnimate: false,
            centerMode: false,
            variableWidth: false,
            rows: 1,
            slidesPerRow: 1,
            asNavFor: '.slider-big',
            mobileFirst: false

        });
        $('.slider-big').slick({
            arrows: false,
            asNavFor: '.slider'
        });

        $('.slider-team').slick({
            arrows: true,
            dots: true,
            adaptiveHeight: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            speed: 1000,
            easing: 'linear',
            infinite: true,
            initialSlide: 0,
            autoplay: true,
            autoplaySpeed: 5000,
            pauseOnHover: true,
            pauseOnFocus: true,
            pauseOnDotsHover: true,
            draggable: true,
            swipe: true,
            touchThreshold: 10,
            touchMove: true,
            waitForAnimate: false,
            centerMode: false,
            variableWidth: false,
            rows: 1,
            slidesPerRow: 1,
            mobileFirst: false
        });


        $('.offer-btns__arrow').on('click', function () {
            let href = $(this).attr('href');

            $('html, body').animate({
                scrollTop: $(href).offset().top
            }, {
                duration: 700,
                easing: "linear"
            });
            return false;
        })


        $('.header-right__tel-img').on('click', function (e) {
            e.preventDefault();
            $('#wrapper-modal').addClass('active');
        })
        $('#overlay').on('click', function () {
            $('#wrapper-modal').removeClass('active');
        })

        $('.popup-close').on('click', function (e) {
            $('#wrapper-modal').removeClass('active');
        })


        $('.tab-item').on('click', function () {
            const currTab = $(this).index();
            $('.tab-item').removeClass('active');
            $(this).addClass('active');
            return false;
        })

        $('.hamburger').on('click', function () {
            $('#primary-menu').parent().parent().toggleClass("d-none");
            $('#primary-menu').toggleClass("active");
        })

        $('.item-size-value').on('click', function (e) {
            $('.item-size-value').removeClass('active');
            $(this).addClass('active');
        })


        $('.item-color-value').on('click', function () {
            $('.item-color-value').removeClass('active');
            $(this).addClass('active');
        })

        $('.menu__item a').on('click', function () {
            const currTab = $(this).index();
            $('.menu__item a').removeClass('active');
            $(this).addClass('active');
        })

        $('.tab-item_goods').on('click', function () {
            const currTab = $(this).index();
            window.location.href = 'http://localhost/final-wayup/shop/?cat=' + $(this).val();
        })


        $('[data-submit]').on('click', function (e) {
            e.preventDefault();
            $(this).parent('form').submit();

        })
        $.validator.addMethod('regex', function (value, element, regexp) {
            let regEx = new RegExp(regexp);
            return this.optional(element) || regEx.test(value)
        }, 'Проверьте корректность вводимых данных');

        function validateForm(element) {
            element.validate({
                rules: {
                    name: {
                        required: true,
                        regex: /^[a-zA-Zа-яА-ЯёЁ]+$/i
                    },
                    email: {
                        required: true,
                        regex: /^[\w._-]+@\w+\.[a-z]{2,4}$/i
                    },
                    phone: {
                        required: true,
                        minlength: 10,
                        maxlength: 11,
                        regex: /^\+\d+$/
                    }
                },
                messages: {
                    phone: {
                        required: 'Поле обязательно для заполнения',
                        regex: 'Телефон должен быть в формате: +xxxxxxxx'
                    },
                    name: {
                        required: 'Поле обязательно для заполнения',
                    },
                    email: {
                        required: 'Поле обязательно для заполнения',
                        email: 'Неверный формат E-mail'
                    }
                },
                //7. Send forms
                submitHandler: function (form) {
                    let isSuccess = false;
                    let dataForm = $(form);
                    $('#loader').fadeIn();
                    $.ajax({
                        url: dataForm.attr('action'),
                        method: 'post',
                        dataType: 'text',
                        data: dataForm.serialize(),
                        success: function (data) {
                            console.log(data);
                        }
                    })
                        .done(function () {
                            console.log('Success');
                            isSuccess = true;
                        })
                        .fail(function () {
                            console.log('Fail');
                        })
                        .always(function () {
                            setTimeout(function () {
                                 // if (isSuccess) {
                                    $('.message-for-user').fadeIn();
                                 // }
                                $(dataForm).trigger('reset');
                                setTimeout(function () {
                                    $('.message-for-user').fadeOut();
                                }, 1500);
                            }, 1000);

                            $('.message-for-user').on('click', function (e) {
                                $(this).fadeOut();
                            });

                        });

                    return false;
                }
            })

        }

        $('#contact-form,#popup-form').each(function () {
            validateForm($(this))
        })

    })
})(jQuery);