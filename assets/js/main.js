$(document).ready(function () {
    //available payment options
    let paymentPageMenu = $('#paymentPage .content__pay-menu');
    const countOptions = paymentPageMenu.children('a').length;

    if (countOptions > 0) {
        paymentPageMenu.children('a').css('width', function () {
            return (100 / countOptions) + '%';
        });
    } else {
        paymentPageMenu.css('display', 'none');
    }

    // show block orderInfo
    $('.payform__infoID').click(function () {
        if ($('.orderInfo__wrapper').css('display') === 'none') {
            $('.orderInfo__wrapper').css('display', 'block');

            if ($(window).width() > 768) {
                $('.wrap-text__custom').css('display', 'none');
                $('.content__block-right_cardPayment').css('display', 'none');
            }

            if ($(window).width() <= 768) {
                $('.overlay').css('display', 'block');
            }
        } else {
            if ($(window).width() > 768) {
                $('.orderInfo__wrapper').css('display', 'none');
                $('.wrap-text__custom').css('display', 'block');
                $('.content__block-right_cardPayment').css('display', 'block');
            }
        }
    });

    // close orderInfo
    $('.closeOrderInfo').click(function () {
        if ($(window).width() > 768) {
            $('.orderInfo__wrapper').css('display', 'none');
            $('.wrap-text__custom').css('display', 'block');
            $('.content__block-right_cardPayment').css('display', 'block');
        } else {
            $('.orderInfo__wrapper').css('display', 'none');
            $('.overlay').css('display', 'none');
        }
    });

    //highlight input
    $('.payform__input input').on('focus', function () {
        $(this).parent().addClass('input__active')
    }).on('blur', function () {
        $(this).parent().removeClass('input__active');
    });

    //show cvv card
    $('#cc_cvv').on('focus', function () {
        if (!$('.card__back_side').hasClass('card__back_side-active')) {
            $('.card__back_side').addClass('card__back_side-active');
        }
    }).on('blur', function () {
        if ($('.card__back_side').hasClass('card__back_side-active')) {
            $('.card__back_side').removeClass('card__back_side-active');
        }
    });

    //show additional text mobile
    $('#add_info_open').click(function (e) {
        e.preventDefault();

        if ($('.wrap-text__custom').css('display') === 'none') {
            $('.wrap-text__custom').css('display', 'block');
            $('.overlay').css('display', 'block');
        }
    });

    //close additional text mobile
    $('.closeCustomText').click(function () {
        $('.wrap-text__custom').css('display', 'none');
        $('.overlay').css('display', 'none');
    });

    $('.overlay').click(function () {
        if ($('.wrap-text__custom').css('display') === 'block') {
            $('.wrap-text__custom').css('display', 'none');
        }

        if ($('.orderInfo__wrapper').css('display') === 'block') {
            $('.orderInfo__wrapper').css('display', 'none');
        }

        if ($('.internet-banking').css('display') === 'block') {
            $('.internet-banking').css('display', 'none');
        }

        $('.overlay').css('display', 'none');
    });

    // select payment type halva+
    $('.selectPaymentType input').click(function () {
        if ($(this).is('#tab_halva_plus') && !$('.halva-select-wrap').hasClass('halva-select-wrap-active')) {
            $('.halva-select-wrap').addClass('halva-select-wrap-active');
        } else if ($(this).attr('name') !== 'paymentType') {
            $('.halva-select-wrap').removeClass('halva-select-wrap-active');
        }
    });

    $('.halva-select-wrap__line').click(function(e) {
        if ($(e.target).hasClass('halva-select__name') && !$(this).children('input').is(':checked')) {
            $(this).children('input').prop('checked', true);
        }
    });

    //show internet-banking mobile view
    $('.ib_btn').click(function () {
        if ($('.internet-banking').css('display') === 'none') {
            $('.internet-banking').css('display', 'block');
            $('.overlay').css('display', 'block');
        }
    });

    //close internet-banking mobile view
    $('.closeIB').click(function () {
        $('.internet-banking').css('display', 'none');
        $('.overlay').css('display', 'none');
    });

    //show error message if input is empty
    $('button[type="submit"], button#cancel_sign').click(function (e) {
        e.preventDefault();

        let targetEvent = e.target;
        let targetForm = $(targetEvent).closest('.payform');
        let formInpunts = $(targetForm).find('.payform__item-row input');

        $(formInpunts).each(function () {
            if (this.value === '') {
                $($(this).closest('.payform__item-row').addClass('invalid-text_error'));
                $($(this).parent('.payform__input')).addClass('invalid-text_error');
                $($(this).siblings('.invalid-text')).css('display', 'block');
            }
        })

        if ($('.select_current').text() === '') {
            $('.payform__item-row').addClass('invalid-text_error');
            $($('.select').parent('.payform__input')).addClass('invalid-text_error');
            $($('.select').siblings('.invalid-text')).css('display', 'block');
        }
    });

    //choose currency QR form
    $('.select').click(function () {
        if (!$('.select').hasClass('is-active')) {
            $('.select').addClass('is-active');
        } else {
            $('.select').removeClass('is-active');
        }

        $('.select_item').click(function () {
            let text = $(this).text();
            $('.select_current').text(text);
        });
    });

    //tooltips
    $(function () {
        $('.input_tooltip').tooltip({
            trigger: 'hover',
            placement: 'bottom',
        });
    });

    // overlayScrollbars
    customScrollBar('.wrap-text__custom');
    customScrollBar('.orderInfo__wrapper');
    customScrollBar('.internet-banking');
    customScrollBar('.payment_receipt__thirdBlock');

    function customScrollBar(elem) {
        $(elem).overlayScrollbars({
            className: 'os-theme-thin-dark',
            overflowBehavior : {
                x : "hidden",
                y : "scroll"
              }
        });
    }
});