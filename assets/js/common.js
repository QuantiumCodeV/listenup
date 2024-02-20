
$(document).ready(function () {
    /**
     * РћС‚СЃР»РµР¶РёРІР°РЅРёРµ РІРІРµРґРµРЅРёСЏ РґР°РЅРЅС‹С… РІ РёРЅРїСѓС‚Р°С…
     */
    $(".container.content").on('keyup','.inputs', function() {
        let nextInput,val,errorId;

        /* СѓРґР°Р»СЏРµРј РєР»Р°СЃСЃ РѕС€РёР±РєРё Сѓ РёРЅРїСѓС‚Р°, РІ РєРѕС‚РѕСЂС‹Р№ РЅР°С‡Р°Р»Рё РІРІРѕРґРёС‚СЊ РёРЅС„РѕСЂРјР°С†РёСЋ */
        if ($(this).hasClass('input-invalid')) {
            let formRow = $(this).closest('.payform__item-row');
            $(this).removeClass('input-invalid');
            $(this).closest('.payform__input').removeClass('invalid-text_error');

            if ($(formRow).has('.payform__input.invalid-text_error').length === 0) {
                $(formRow).removeClass('invalid-text_error');
            }

            let page = $('p#page').text() + 'Page';
            if ($('#' + page + ' #' + this.id + 'Error').length > 0) {
                errorId = this.id + 'Error';
            } else {
                errorId = this.id.split('_');
                if (errorId.length === 2) {
                    errorId = errorId[1];
                } else if (errorId.length === 3) {
                    errorId = errorId[2]
                } else {
                    errorId = errorId[3]
                }
                errorId = errorId + 'Error';
            }
            if (errorId === 'monthError' || errorId === 'yearError') {
                $('#' + page + ' #expireError').text('').css('display', 'none');
            } else {
                $('#' + page + ' #' + errorId).text('').css('display', 'none');
            }
        }

        /* РґСѓР±Р»РёСЂРѕРІР°РЅРёРµ РІРІРµРґРµРЅРЅС‹С… РґР°РЅРЅС‹С… РЅР° РєР°СЂС‚РѕС‡РєРµ РІ РїСЂР°РІРѕРј Р±Р»РѕРєРµ */
        if ($('*').is('#copy_' + this.id)) {
            $('#copy_' + this.id).text(this.value);
        }
        if (this.id === 'cc_month' || this.id === 'cc_year') {
            let expire = $('#cc_month').val() + '/' + $('#cc_year').val();
            $('#copy_cc_expire').text(expire);
            if (errorId) {
                $('#expireError').text('').css('display', 'none');
            }
        }


        if (this.value.length === this.maxLength) {
            // РµСЃР»Рё СЌС‚Рѕ РЅРµ РїР°РЅ, С‚Рѕ РїРµСЂРµС…РѕРґРёРј Рє СЃР»РµРґСѓСЋС‰РµРјСѓ РїРѕР»СЋ
            if (this.id !== 'cc_pan') {
                nextInput = $('input[tabindex=' + (this.tabIndex + 1) + ']');
                nextInput.focus();
                return;
            }
            // РµСЃР»Рё РїРѕР»Рµ РІРІРѕРґР° РЅРѕРјРµСЂР° РєР°СЂС‚С‹, С‚Рѕ РґРѕРїРѕР»РЅРёС‚РµР»СЊРЅРѕ РїСЂРѕРІРµСЂСЏРµРј РїРѕ Р°Р»РіРѕСЂРёС‚РјСѓ Р›СѓРЅР°
            val = $("#cc_pan").val();
            val = val.replace(/\s/g, '');
            if (isLuhn(val)) {
                nextInput = $('input[tabindex=' + (this.tabIndex + 1) + ']');
                nextInput.focus();
            }
        }

        if (this.id === 'cc_pan' || this.id === 'enter_pan_cc_pan') {
            if (this.id === 'cc_pan') {
                val = $("#cc_pan").val();
            } else {
                val = $("#enter_pan_cc_pan").val();
            }
            val = val.replace(/\s/g, '');

            let logoPaymentSystem = getCardType(val);
            setLogo(logoPaymentSystem);

            // 19 - РїРѕС‚РѕРјСѓ С‡С‚Рѕ 16 С†РёС„СЂ Рё 3 РїСЂРѕР±РµР»Р° РјРµР¶РґСѓ СЏС‡РµР№РєР°РјРё РїРѕ 4 С†РёС„СЂС‹
            if (this.value.length === 19 && isLuhn(val)) {
                nextInput = $('input[tabindex=' + (this.tabIndex + 1) + ']');
                nextInput.focus();
            }
        }
    });

    /**
     * РњР°СЃРєР° РІРІРѕРґР° РґР°РЅРЅС‹С… - РІР°Р»РёРґР°С†РёСЏ
     */
    $('#cc_month').mask('00');
    $('#sou_cc_month').mask('00');
    $('#cc_year').mask('00');
    $('#sou_cc_year').mask('00');
    $('#cc_cvv').mask('000');
    $('#sou_cc_cvv').mask('000');
    if(!$('#cc_pan').attr('disabled')) {
        $('#cc_pan').mask('9999 9999 9999 9999 999');
    } else {
        $('#cc_pan').mask('9999 99xx xxxx 9999 999', {translation: {'x': {pattern: /[xX]/}}});
    }
    $('#enter_pan_cc_pan').mask('9999 9999 9999 9999 999');
    $('#cc_name').mask('Z', {translation: {'Z': {pattern: /[a-zA-Z\.\- ]/, recursive: true}}});
    $('#sou_cc_name').mask('Z', {translation: {'Z': {pattern: /[a-zA-Z\.\- ]/, recursive: true}}});

    /**
     * РџРµСЂРµРєСЋС‡РµРЅРёРµ РјРµР¶РґСѓ РІРєР»Р°РґРєР°РјРё - РґРµСЃРєС‚РѕРї
     */
    $(".content__pay-menu").click(function (e) {
        e.preventDefault();
        switchTabs($(e.target).attr("id"));
        switchBlocks($(e.target).attr("id"));
    });


    /**
     * todo - РїСЂРѕРІРµСЂРёС‚СЊ
     * РџРѕСЏРІР»РµРЅРёРµ/СЃРєСЂС‹С‚РёРµ СЃРїРѕСЃРѕР±РѕРІ РѕРїР»Р°С‚С‹ (СЂСѓР±Р»Рё/Р±Р°Р»Р»С‹) РґР»СЏ РєР°СЂС‚ СЃ СЂРµРЅРґР¶РµРј С…Р°Р»РІС‹+
     * РџРѕСЏРІР»РµРЅРёРµ/СЃРєСЂС‹С‚РёРµ СЃРїРѕСЃРѕР±РѕРІ РѕРїР»Р°С‚С‹ (С…Р°Р»РІР°/С…Р°Р»РІР°+/РјРїСЃ) РґР»СЏ С…-РєР°СЂС‚
     */
    $(document).on("input", '#cc_pan', function (e) {
        var val = $(e.target).val();
        val = val.replace(/\s/g, '');
        var length = val.length;
        if (+length >= 8) {
            val = val.substring(0, 8);
            var arrHalvaPlus = $('#mtbHalvaPlusRange').val().split(',');
            var condition = false;
            $.each(arrHalvaPlus, function (index, value) {
                if (value === val) {
                    condition = true;
                }
            });

            if (condition === true && !$('#mtbPaymentType').hasClass('active')) {
                $('#mtbPaymentType').addClass('active');
            }
            if (condition === false && $('#mtbPaymentType').hasClass('active')) {
                $('#mtbPaymentType').removeClass('active');
            }
        }
        if (+length < 8 && $('#mtbPaymentType').hasClass('active')) {
            $('#mtbPaymentType').removeClass('active');
        }
    });


    /**
     *  Р¤РѕРєСѓСЃ РЅР° РїРѕР»Рµ РІРІРѕРґР° РєР°СЂС‚С‹ - РµСЃР»Рё СЌС‚Рѕ РїРѕР»Рµ РїСЂРёСЃСѓС‚СЃС‚РІСѓРµС‚
     */
    if ($('*').is('#cc_pan')) {
        let pan = $('#cc_pan');
        pan.focus();
    }


    /** РћС‚Р»Р°РІР»РёРІР°РµРј РєР»РёРє РїРѕ РєРЅРѕРїРєРµ РѕРїР»Р°С‚РёС‚СЊ */
    $(document).on('click', '#payoutBtn',function (e) {
        e.preventDefault();
        let data = {};
        $("#payoutForm div.blocks.active input").each(function () {
            data[this.name] = $(this).val();
        });

        data['pay'] = 1; // РјРµС‚РєР°, С‡С‚Рѕ РІС‹Р±СЂР°Р»Рё РѕРїР»Р°С‚Сѓ РєР°СЂС‚РѕР№
        data['wt'] = $('input[name = wt ]').val();
        if (data['save_card']) {
            if ($('#save_card').is(':checked')) {
                data['save_card'] = 1;
            } else {
                data['save_card'] = 0;
            }
        }

        if ($("#signed_cards")) {
            data['signed_cards'] = $("#signed_cards").val();
        }
        // Р’Р°Р»РёРґР°С†РёСЏ РЅР° РїСѓСЃС‚РѕС‚Сѓ РїРµСЂРµРґ РѕС‚РїСЂР°РІРєРѕР№ Р·Р°РїСЂРѕСЃР°
        if (validate(data, {"recipient_cc_pan": "panError", 'cc_email': 'emailError',})) {
            ajax(data);
        }
    });

    $(document).on('click', '#add-payout-card-form [type=submit]', (e) => {
        e.preventDefault();

        let data = {};

        $("#add-payout-card-form input").each(function () {
            data[this.name] = $(this).val();
        });

        data['payout'] = 1;

        data['wt'] = $('input[name = wt ]').val();

        if (validate(data, {'payout_card_pan': 'panError', 'payout_card_month': 'monthError', 'payout_card_year': 'yearError'})) {
            ajax(data);
        }
    });

    /** РћС‚Р»Р°РІР»РёРІР°РµРј РєР»РёРє РїРѕ РєРЅРѕРїРєРµ РѕРїР»Р°С‚РёС‚СЊ */
    $(document).on('click', '#payBtn',function (e) {
        e.preventDefault();
        let data = {};
        $("#paymentForm div.blocks.active input").each(function () {
            const $this = $(this);

            data[this.name] = $this.attr('type') === 'checkbox' ? $this.is(':checked') : $(this).val();
        });

        data['pay'] = 1; // РјРµС‚РєР°, С‡С‚Рѕ РІС‹Р±СЂР°Р»Рё РѕРїР»Р°С‚Сѓ РєР°СЂС‚РѕР№
        data['wt'] = $('input[name = wt ]').val();
        if (data['save_card']) {
            if ($('#save_card').is(':checked')) {
                data['save_card'] = 1;
            } else {
                data['save_card'] = 0;
            }
        }

        if ($("#signed_cards")) {
            data['signed_cards'] = $("#signed_cards").val();
        }
        
    });

    /**
     * РљР»РёРє РїРѕ РєРЅРѕРїРєРµ РѕРїР»Р°С‚РёС‚СЊ РїСЂРё РёРЅС‚РµСЂР°РєС‚РёРІРЅРѕРј СЃС†РµРЅР°СЂРёРё - РІРІРѕРґ РєР°СЂС‚С‹ Рё email
     */
    $('#enterPanPayBtn').click(function (e) {
        e.preventDefault();
        let data = {};
        $("#enterPanForm input").each(function () {
            data[this.name] = $(this).val();
        });
        data['pay'] = 1; // РјРµС‚РєР°, С‡С‚Рѕ РІС‹Р±СЂР°Р»Рё РѕРїР»Р°С‚Сѓ РєР°СЂС‚РѕР№
        // РјРµС‚РєР° Рѕ С‚РѕРј, С‡С‚Рѕ Р·Р°РїСЂРѕСЃ РѕС‚РїСЂР°РІР»РµРЅ С‡РµСЂРµР· ajax Рё РѕС‚РІРµС‚ РЅСѓР¶РµРЅ РІ С„РѕСЂРјР°С‚Рµ json
        if (validate(data, validateFields)) {
            ajax(data);
        }
    });

    /** РћС‚Р»Р°РІР»РёРІР°РµРј РєР»РёРє РїРѕ РєРЅРѕРїРєРµ "РѕС‚РІСЏР·Р°С‚СЊ" РїСЂРё СѓРїСЂРѕС‰РµРЅРЅС‹С… РїР»Р°С‚РµР¶Р°С… */
    $('#cancel_sign').click(function (e) {
        let text = $('#simplified_offer_cancel_alert_text').text();
        if (confirm(text)) {
            let data = {};
            $("#paymentForm input").each(function () {
                data[this.name] = $(this).val();
            });

            data['cancelSign'] = 1; // РјРµС‚РєР°, С‡С‚Рѕ РІС‹Р±СЂР°Р»Рё РѕС‚РІСЏР·РєСѓ
            // РјРµС‚РєР° Рѕ С‚РѕРј, С‡С‚Рѕ Р·Р°РїСЂРѕСЃ РѕС‚РїСЂР°РІР»РµРЅ С‡РµСЂРµР· ajax Рё РѕС‚РІРµС‚ РЅСѓР¶РµРЅ РІ С„РѕСЂРјР°С‚Рµ json

            if ($("#signed_cards")) {
                data['signed_cards'] = $("#signed_cards").val();
            }

            if (validate(data, validateFields)) {
                ajax(data);
            }
        }
    });

    /** РћС‚Р»Р°РІР»РёРІР°РµРј РєР»РёРє РїРѕ РєРЅРѕРїРєРµ РѕРїР»Р°С‚РёС‚СЊ РїРѕР·Р¶Рµ */
    $('#payBtnAfter').click(function (e) {
        e.preventDefault();
        // TODO Рє С‡РµСЂС‚СЏРј РІСЃРµ РїРµСЂРµРїРёСЃС‹РІР°С‚СЊ !!!!
        const data = {};
        const eripEmailInput = $("#erip_email");

        data[eripEmailInput.attr('id')] = eripEmailInput.val();
        data['payAfter'] = 1; // РјРµС‚РєР°, С‡С‚Рѕ РІС‹Р±СЂР°Р»Рё РѕРїР»Р°С‚РёС‚СЊ РїРѕР·Р¶Рµ
        data['wt'] = $('input[name = wt ]').val();
        // Р’Р°Р»РёРґР°С†РёСЏ РЅР° РїСѓСЃС‚РѕС‚Сѓ РїРµСЂРµРґ РѕС‚РїСЂР°РІРєРѕР№ Р·Р°РїСЂРѕСЃР°
        if (validate(data, validateFields)) {
            data[eripEmailInput.attr('name')] = eripEmailInput.val();
            delete data[eripEmailInput.attr('id')];
            ajax(data);
        }
    });

    $('#paySelectPayment').click(function (e) {
        e.preventDefault();
        let data = {};
        $("#selectPaymentType input").each(function () {
            data[this.name] = $(this).val();
        });

        let tab = $("#selectPaymentType input[name = tab ]:checked").val();
        let paymentType = '';
        if (tab === 'halva') {
            paymentType = 'halva';
        } else if (tab === 'ipsPayment') {
            paymentType = 'ipsPayment';
        } else if (tab === 'halvaPlus') {
            let halvaPlusType = $("#selectPaymentType input[name = paymentType ]:checked").val();
            paymentType = 'standard';
            if (halvaPlusType === 'bonus') {
                paymentType = 'bonus';
            }
        } else if (tab === 'autocard') {
            paymentType = 'autocard';
        }
        data['paymentType'] = paymentType;
        data['payHalvaPlus'] = 1;
        ajax(data);
    });

    $('#souPayBtn').click(function (e) {
        e.preventDefault();
        let data = {};
        $("#serviceinfoForm input").each(function () {
            data[this.name] = $(this).val();
        });
        data['sou'] = 1;
        // РјРµС‚РєР° Рѕ С‚РѕРј, С‡С‚Рѕ Р·Р°РїСЂРѕСЃ РѕС‚РїСЂР°РІР»РµРЅ С‡РµСЂРµР· ajax Рё РѕС‚РІРµС‚ РЅСѓР¶РµРЅ РІ С„РѕСЂРјР°С‚Рµ json
        if (validate(data, validateFields)) {
            ajax(data);
        }
    });

    $('#souPaymentBtn').click(function (e) {
        e.preventDefault();
        let data = {};
        $("#paymentSouPage form input").each(function () {
            data[this.name] = $(this).val();
        });
        data['souPayment'] = 1;
        // РјРµС‚РєР° Рѕ С‚РѕРј, С‡С‚Рѕ Р·Р°РїСЂРѕСЃ РѕС‚РїСЂР°РІР»РµРЅ С‡РµСЂРµР· ajax Рё РѕС‚РІРµС‚ РЅСѓР¶РµРЅ РІ С„РѕСЂРјР°С‚Рµ json
        if (validate(data, validateFields)) {
            ajax(data);
        }
    });

    $('#afaPay').click(function (e) {
        e.preventDefault();
        let data = {};
        $("#afaPage form input").each(function () {
            data[this.name] = $(this).val();
        });
        data['afaPayment'] = 1;
        // РјРµС‚РєР° Рѕ С‚РѕРј, С‡С‚Рѕ Р·Р°РїСЂРѕСЃ РѕС‚РїСЂР°РІР»РµРЅ С‡РµСЂРµР· ajax Рё РѕС‚РІРµС‚ РЅСѓР¶РµРЅ РІ С„РѕСЂРјР°С‚Рµ json
        if (validate(data, validateFields)) {
            ajax(data);
        }
    });

    $('#email_tooltip, #card_holder_name_tooltip').click(function (e) {
        e.preventDefault();
    });

    /** РћС‚Р»Р°РІР»РёРІР°РµРј РєР»РёРє РїРѕ РєРЅРѕРїРєРµ РїРѕРІС‚РѕСЂРЅРѕР№ РїРѕРїС‹С‚РєРµ РѕРїР»Р°С‚С‹ */
    $('#showTryAgainButton').click(function (e) {
        e.preventDefault();
        let btn = $('#showTryAgainButton')[0];
        // $(btn).button('loading');
        let data = {};
        data['try-again-action'] = 1;// РјРµС‚РєР°, С‡С‚Рѕ РІС‹Р±СЂР°Р»Рё РїРѕРІС‚РѕСЂРёС‚СЊ РїРѕРїС‹С‚РєСѓ
        data['wt'] = $('input[name = wt ]').val();
        ajax(data, btn);
    });

    $('#showCancelButton').click(function (e) {
        e.preventDefault();
        let btn = $('#showCancelButton')[0];
        // $(btn).button('loading');
        let data = {};
        data['cancel-action'] = 1;
        data['wt'] = $('input[name = wt ]').val();
        ajax(data, btn);
    });

    /**
     * РџРµСЂРµРєР»СЋС‡РµРЅРёРµ СЏР·С‹РєР°
     */
    const changeLangEventHandler = e => {

        e.preventDefault();
        const targetLang = $(e.target);
        const activeLang = $('a.change_language.active');
        const hiddenLang = $('#languageForm input[name = change_language]');

        if (targetLang.attr('id') === activeLang.attr('id')) {
            return false;
        }

        targetLang.toggleClass('active');
        activeLang.toggleClass('active');
        hiddenLang.val(targetLang.attr('id'));

        // РџРµСЂРµРІРѕРґ Р°С‚С‚СЂРёР±СѓС‚Р° lang РЅР°РїСЂРёРјРµСЂ РІ РєРЅРѕРїРєРµ apple_pay
        $('div[lang]').each((i,item) => {
            $(item).prop('lang',activeLang);
        });

        const data = {
            translate: 1,
            wt: getWtToken()
        };
        $("#languageForm input").each(function () {
            data[this.name] = $(this).val();
        });

        ajax(data);

    };

    $('a.change_language').on('click', changeLangEventHandler);

    /** РџРѕРґСЃРІРµС‚РєР° СЃРѕРѕС‚РІРµС‚СЃС‚РІСѓСЋС‰РёС… РїРѕР»РµР№ РЅР° РєР°СЂС‚Рµ (РїСЂР°РІС‹Р№ Р±Р»РѕРє) РІ Р·Р°РІРёСЃРёРјРѕСЃС‚Рё РѕС‚ С‚РѕРіРѕ РЅР° РєР°РєРѕРј РїРѕР»Рµ СЃРµР№С‡Р°СЃ С„РѕРєСѓСЃ */
    /*---------------------------------- START ------------------------------------------------------*/
    $('#cc_pan').on('blur', function () {
        $('.card__date_name-line').removeClass('line-hidden').addClass('line-active');
    }).on('focus', function () {
        $('.card__date_name-line').removeClass('line-active').addClass('line-hidden');
    });

    $('#cc_month').on('blur', function () {
        $('.card__number-line').removeClass('line-hidden').addClass('line-active');
    }).on('focus', function () {
        $('.card__number-line').removeClass('line-active').addClass('line-hidden');
    });

    $('#cc_month').on('blur', function () {
        $('.line_name').removeClass('line-hidden').addClass('line-active');
    }).on('focus', function () {
        $('.line_name').removeClass('line-active').addClass('line-hidden');
    });

    $('#cc_year').on('blur', function () {
        $('.card__number-line').removeClass('line-hidden').addClass('line-active');
    }).on('focus', function () {
        $('.card__number-line').removeClass('line-active').addClass('line-hidden');
    });

    $('#cc_year').on('blur', function () {
        $('.line_name').removeClass('line-hidden').addClass('line-active');
    }).on('focus', function () {
        $('.line_name').removeClass('line-active').addClass('line-hidden');
    });

    $('#cc_name').on('blur', function () {
        $('.line_number').removeClass('line-hidden').addClass('line-active');
    }).on('focus', function () {
        $('.line_number').removeClass('line-active').addClass('line-hidden');
    });

    $('#cc_name').on('blur', function () {
        $('.line_date').removeClass('line-hidden').addClass('line-active');
    }).on('focus', function () {
        $('.line_date').removeClass('line-active').addClass('line-hidden');
    });

    $('#cc_cvv').on('focus', function () {
        // e.preventDefault();
        if (!$('.card__back_side').hasClass('card__back_side_active')) {
            $('.card__back_side').addClass('card__back_side_active');
        }
    }).on('blur', function () {
        if ($('.card__back_side').hasClass('card__back_side_active')) {
            $('.card__back_side').removeClass('card__back_side_active');
        }
    });

    /*---------------------------------- END ------------------------------------------------------*/

    /** РџРѕСЏРІР»РµРЅРёРµ Р±Р»РѕРєР° СЃРѕ СЃРїРёСЃРєРѕРј РёРЅС‚РµСЂРЅРµС‚-Р±Р°РЅРєРёРЅРіРѕРІ РґР»СЏ РјРѕР±РёР»СЊРЅРѕР№ РІРµСЂСЃРёРё */
    $('.mobile-bank-btn').on('click', function (e) {
        e.preventDefault();
        if (!$('.content__block-right').hasClass('menu-mobile') && !$('.content__block-right').hasClass('active')) {
            $('.content__block-right').addClass('menu-mobile active');
            $('.content__block-right__erip').addClass(' active');
        }
    });

    /** РЎРєСЂС‹С‚РёРµ Р±Р»РѕРєР° СЃРѕ СЃРїРёСЃРєРѕРј РёРЅС‚РµСЂРЅРµС‚-Р±Р°РЅРєРёРЅРіРѕРІ РґР»СЏ РјРѕР±РёР»СЊРЅРѕР№ РІРµСЂСЃРёРё */
    $('.modal-close button').on('click', function (e) {
        $('.content__block-right').removeClass('menu-mobile active');
    });


    // /* РЎР»Р°Р№РґРµСЂ - РєР°СЂСѓСЃРµР»СЊ */
    // $('.owl-carousel').owlCarousel({
    //     items:1,
    //     loop:false,
    //     nav:false,
    //     dots:true,
    // });
    // //РїРµСЂРµРєР»СЋС‡РµРЅРёРµ СЃР»Р°Р№РґРѕРІ
    // $('.owl-carousel').on('translated.owl.carousel', function (event) {
    //     let el =$(event.target);
    //     let id = $(el).find(".owl-stage-outer .owl-stage .owl-item.active .item").attr('id');
    //     switchTabs(id);
    //     switchBlocks(id);
    // });
    // // РѕСЃС‚Р°РЅР°РІР»РёРІР°РµРј РѕР±РЅРѕРІР»РµРЅРёРµ РєР°СЂСѓСЃРµР»Рё, С‚.Рє. СЃР±СЂР°СЃС‹РІР°СЋС‚СЃСЏ Р°РєС‚РёРІРЅС‹Р№ СЃР»Р°Р№Рґ Рё СЃС‚Р°РІРёС‚СЊ Р°РєС‚РёРІРЅС‹Рј РїРµСЂРІС‹Р№
    // $('.owl-carousel').on('refresh.owl.carousel', function (event) {
    //     event.preventDefault();
    // });
    // $('.owl-carousel').on('refreshed.owl.carousel', function (event) {
    //     event.preventDefault();
    // });


    /**
     * Р’РєР»СЋС‡РµРЅРёРµ РЅСѓР¶РЅРѕРіРѕ Р±Р»РѕРєР° РїСЂРё Р·Р°РіСЂСѓР·РєРµ СЃС‚Р°СЂРЅРёС†С‹ (РІ Р·Р°РІРёСЃРёРјРѕСЃС‚Рё РѕС‚ Р°РєС‚РёРІРЅРѕР№ РІРєР»Р°РґРєРё - РїРѕ СѓРјРѕР»С‡Р°РЅРёСЋ РѕРїР»Р°С‚Р° РєР°СЂС‚РѕР№)
     * */
    initialBlock();
});

/**
 *  РџРµРµСЂРєР»СЋС‡РµРЅРёРµ РІРєР»Р°РґРѕРє/СЃР»Р°Р№РґРµСЂРѕРІ. РџРµСЂРµРєР»СЋС‡Р°РµРј СЃСЂР°Р·Сѓ Рё РґР»СЏ РјРѕР±РёР»РєРё Рё РґР»СЏ РґРµСЃРєС‚РѕРїР°.
 * @param activeId
 */
function switchTabs(activeId) {
    /* РћР±РµР·Р»РёС‡РёРІР°РµРј activeId - СѓРґР°Р»СЏРµРј РїСЂРµС„РёРєСЃ СѓРєР°Р·С‹РІР°СЋС‰РёР№ РЅР° СЃР»Р°Р№РґРµСЂ РёР»Рё РјРµРЅСЋ (dots_, tab_) */
    activeId = activeId.split('_')[1];
    // switchMobileTabs(activeId);
    switchDesctopTabs(activeId);
}

/**
 * РџРµСЂРµРєР»СЋС‡РµРЅРёРµ СЃР»Р°Р№РґРµСЂРѕРІ Рё С‚РѕС‡РµРє РЅР° СЃР»Р°Р№РґРµСЂРµ
 * @param id
 */
function switchMobileTabs(id) {
    let activeId = 'item_' + id;

    if ($(".owl-item.active .item.active").attr("id") === activeId) {
        return;
    }

    $.each($(".owl-item .item"), function (index, value) {
        if ($(value).hasClass('active')) {
            $(value).removeClass('active');
        }
    });
    $("#" + activeId).addClass('active');
    //РїРѕР»СѓС‡Р°РµРј РёРЅРґРµРєСЃ СЂРѕРґРёС‚РµР»СЏ С‡С‚РѕР±С‹ РїСЂРёСЃРІРѕРёС‚СЊ Р°РєС‚РёРІРЅС‹Р№ РєР»Р°СЃСЃ СЃРѕРѕС‚РІРµС‚СЃС‚РІСѓСЋС‰РµРјСѓ СЃР»Р°Р№РґРµСЂСѓ
    let parent = $("#" + activeId).parent()[0];
    let index = $(parent).index();
    $('.owl-carousel').trigger('to.owl.carousel', index);
}

/**
 * РџРµСЂРµРєР»СЋС‡РµРЅРёРµ РІРєР»Р°РґРѕРє РјРµРЅСЋ
 * @param activeId
 */
function switchDesctopTabs(activeId) {
    activeId = 'tab_' + activeId;
    if ($(".content__pay-menu a.active").attr("id") === activeId) {
        return;
    }
    $.each($(".content__pay-menu a"), function (index, value) {
        if ($(value).hasClass('active')) {
            $(value).removeClass('active');
        }
    });
    $("#" + activeId).addClass('active');
}

/**
 * РџРµСЂРІРѕРЅР°С‡Р°Р»СЊРЅРѕРµ РІРєР»СЋС‡РµРЅРёРµ Р±Р»РѕРєРѕРІ РЅР° СЃС‚СЂР°РЅРёС†Рµ
 */
function initialBlock() {

    // OnChangeSignedCards();

    let page = $('p#page').text();
    if (page === 'dummy') {
        $('.preload-wpap').css('display', 'flex');
        $('#dummyPage #url_hash').val(self.document.location.hash);
        $('form#qrForm').submit();
        return;
    }

    /* РїРѕР»СѓС‡Р°РµРј Р°РєС‚РёРІРЅСѓСЋ РІРєР»Р°РґРєСѓ Р±РµР· РїСЂРµС„РёРєСЃР° */
    let activeTab = $(".content__pay-menu a.active")[0];
    if (activeTab) {
        activeTab = $(activeTab).attr("id").split('_')[1];
        /* РІРєР»СЋС‡Р°РµРј Р±Р»РѕРєРё */
        $('#left_block_' + activeTab).addClass('active');
        $('#right_block_' + activeTab).addClass('active');

        /* РЅР°СЃС‚СЂРёРІР°РµРј СЃР»Р°Р№РґРµСЂ */
        let activeSlide = $('#item_' + activeTab).parent()[0];
        $(activeSlide).addClass('active');
    }
    // fillingData({'page':page});

    // $(el).css('box-shadow','none');

    changePage({'page': page});
    if (page === 'error') {
        // fillingErrorFields
        let fields = $('#errorPage .payment_receipt__description');
        $.each(fields, function (index, value) {
            if (!$(value).text() || $(value).text().trim() === '') {
                let el = $(value).parent()[0];
                $(el).addClass('hidden');
            }
        });

        const showReturnButtonSuccess = $('#showReturnButtonSuccess');
        const showReturnButtonError = $('#showReturnButtonError');
        const showReturnButtonLaterOrder = $('#showReturnButtonLaterOrder');
        const showTryAgainButton = $('#showTryAgainButton');
        const showCancelButton = $('#showCancelButton');

        /* РєРЅРѕРїРєРё */
        showReturnButtonSuccess.css('display', 'none');
        showReturnButtonError.css('display', 'none');
        showReturnButtonLaterOrder.css('display', 'none');

        showTryAgainButton.css('display', 'none');
        showCancelButton.css('display', 'none');

        if (showReturnButtonSuccess.attr('href') !== '') {
            showReturnButtonSuccess.css('display', 'block');
        }

        if (showReturnButtonError.attr('href') !== '') {
            showReturnButtonError.css('display', 'block');
        }

        if (showReturnButtonLaterOrder.attr('href') !== '') {
            showReturnButtonLaterOrder.css('display', 'block');
        }
    }

    addClassesToContent();

    /* РњРµРЅСЏРµРј РІ РЅР°Р·РІР°РЅРёРё С„РёСЂРјС‹ РїСЂРѕР±РµР»С‹ РЅР° РЅРµСЂР°Р·СЂС‹РІРЅС‹Рµ РїСЂРѕР±РµР»С‹ */
    $.each($('#privatPolici div.modal-body__privatPolici .field-translate'), function (i, val) {
        let id = $(val).attr('id');
        if (id === 'polices_text1' || id === 'polices_text3' || id === 'polices_text11' || id === 'polices_text12' || id === 'polices_text13') {
            let text;
            let primaryText = $(val).text();
            $(val).text('');
            let webpay = '<span>РћРћРћ&nbsp;В«Р’РµР±&nbsp;РџСЌР№В»</span>';
            let webpayCaps = '<span>РћРћРћ&nbsp;В«Р’Р•Р‘&nbsp;РџР­Р™В»</span>';
            let pcidss = '<span>PCI&nbsp;DSS</span>';
            text = primaryText.replace(/РћРћРћ В«Р’РµР± РџСЌР№В»/g, webpay);
            text = text.replace(/РћРћРћ В«Р’Р•Р‘ РџР­Р™В»/g, webpayCaps);
            text = text.replace(/PCI DSS/g, pcidss);
            $(val).append(text);
        }
    });

}

/**
 * РџРµРµСЂРєР»СЋС‡РµРЅРёРµ Р±Р»РѕРєРѕРІ СЃРѕ СЃРїРѕСЃРѕР±Р°РјРё РѕРїР»Р°С‚С‹
 */
function switchBlocks(activeId) {
    /* РѕРїСЂРµРґРµР»СЏРµРј РјРѕР±РёР»РєР° РёР»Рё РґРµСЃРєС‚РѕРї */
    let device = activeId.split('_')[0];

    //РїРѕР»СѓС‡Р°РµРј id Р°РєС‚РёРІРЅРѕРіРѕ Р±Р»РѕРєР°
    var activeBlockId = 'block_' + activeId.split('_')[1];
    if ($(".blocks.active").attr("id") === 'left_' + activeBlockId) {
        return;
    }
    $.each($("div.blocks"), function (index, value) {
        if ($(value).hasClass('active')) {
            $(value).removeClass('active');
        }
    });
    // if ($('.content__block-right').hasClass('menu-mobile active')) {
    //     $('.content__block-right').removeClass('menu-mobile active');
    // }
    $("#left_" + activeBlockId).addClass('active');
    $("#right_" + activeBlockId).addClass('active');

    addClassesToContent();
}


function resetBtn() {
    $('.btn').button('reset');
}

function showTimer(finalTimestamp, expiredMessage) {
    $('#clock').countdown(finalTimestamp)
        .on('update.countdown', function (event) {
            $(this).text(event.strftime('%M:%S'));
        })
        .on('finish.countdown', function () {
            $(this).removeClass('active');
            $(this).addClass('text-danger');
            $(this).text(expiredMessage);
        });
}


function setCC_pan(cc_pan) {
    document.getElementsByName('cc_pan')[0].value = cc_pan;
}

function setCC_name(cc_name) {
    document.getElementsByName('cc_name')[0].value = cc_name;
}

function setCC_cvv(cc_cvv) {
    document.getElementsByName('cc_cvv')[0].value = cc_cvv;
}

function setCC_expire(cc_expire_month, cc_expire_year) {
    document.getElementsByName('cc_month')[0].value = cc_expire_month;
    document.getElementsByName('cc_year')[0].value = cc_expire_year;
}

function getWtToken() {
    return $('input[name = wt ]').val()
}

function getClientOptions() {
    const data = {};
    const date = new Date();
    data.javaScriptEnabled = $('#javascriptDisabled').text().trim() === '' ? 1 : 0;
    data.javaEnabled = window.navigator.javaEnabled() ? 1 : 0;
    data.userAgent = window.navigator.userAgent;
    data.language = window.navigator.language;
    data.screenHeight = $(window).height();
    data.screenWidth = $(window).width();
    data.screenColorDepth = window.screen.colorDepth;
    data.timeZone = date.getTimezoneOffset();

    return data;
}



function ajax(data) {
    data = Object.assign(data, getClientOptions());
    data.ajax = 1;
    // РІРєР»СЋС‡Р°РµРј РїСЂРµР»РѕСѓРґРµСЂ
    $('.preload-wpap').css('display', 'flex');
    $.ajax({
        url: '#',
        type: 'POST',
        dataType: 'json',
        data: data,
        success: response => ajaxSuccess(response, data),
        error: ajaxError
    });
}

function promiseAjax(data, url = '') {
    data = Object.assign(data, getClientOptions());
    data.ajax = 1;
    // РІРєР»СЋС‡Р°РµРј РїСЂРµР»РѕСѓРґРµСЂ
    $('.preload-wpap').css('display', 'flex');
    return $.ajax({
        url: url,
        type: 'POST',
        dataType: 'json',
        data: data,
    });
}

function ajaxSuccess(response, data) {
    if (response.hasOwnProperty('wsbRedirect')) {
        const form = document.createElement("form");
        form.setAttribute("method", "POST");
        form.setAttribute("action", response.wsbCancelReturnUrl || response.wsbReturnUrl);
        for (const key in response) {
            const input = document.createElement('input');
            input.name = key;
            input.value = response[key];
            form.appendChild(input);
        }
        document.body.appendChild(form);
        form.submit();
        return
    }
    //РѕР±РЅРѕРІР»СЏРµРј Р·РЅР°С‡РµРЅРёРµ С‚РѕРєРµРЅР° РїРѕР»СѓС‡РµРЅРЅРѕРіРѕ РѕС‚ СЃРµСЂРІРµСЂР°
    if (response.hasOwnProperty('tokenName') && response.hasOwnProperty('token')) {
        $.each($('input[name = ' + response.tokenName + ']'), function (i, el) {
            $(el).val(response.token);
        });
    }
    if (response.page) {
        $('#page').text(response['page']);
    }
    if (
        data.pay
        || data.payout
        || data.applePayToken
        || data.payHalvaPlus
        || data.payAfter
        || data.sou
        || data.souPayment
        || data.afaPayment
    ) {
        checkErrors(response);
        translateFields(response);
        fillingData(response);
        changePage(response);
    }

    if (data.translate) {
        translateRequiredErrors();
        translateFields(response);
    }
    if (data['try-again-action']) {
        changePage(response);
    }
    if (data.cancelSign) {
        deleteSignedCard(data.signed_cards);
    }

    // РІС‹РєР»СЋС‡Р°РµРј РїСЂРµР»РѕСѓРґРµСЂ
    $('.preload-wpap').css('display', 'none');

    addClassesToContent();

    if (response.page === 'halvaplustype') {
        hideLanguageForm()
    }
}

function hideLanguageForm() {
    $('#languageForm').hide();
}

function deleteSignedCard(key) {
    $('#signed_card_' + key).closest('div').remove();
    OnChangeSignedCards();
}

function ajaxError(error) {
    //console.error('ajaxError', error);
    let data = {};
    data.page = 'systemerror';
    changePage(data);
    // РІС‹РєР»СЋС‡Р°РµРј РїСЂРµР»РѕСѓРґРµСЂ
    $('.preload-wpap').css('display', 'none');
}

/**
 * РћС‡РёС‰Р°С‰РµС‚ РїРѕР»СЏ РІРІРѕРґР° РєР°СЂС‚РѕС‡РЅС‹С… РґР°РЅРЅС‹С… РґР»СЏ РїРѕРІС‚РѕСЂРЅРѕР№ РїРѕРїС‹С‚РєРё РїСЂРѕРёР·РІРµСЃС‚Рё РїР»Р°С‚РµР¶
 */
function cleanFields() {
    $('#cc_pan').val('');
    $('#cc_name').val('');
    $('#cc_month').val('');
    $('#cc_year').val('');
    $('#cc_cvv').val('');
}

/**
 * РџСЂРѕРІРµСЂРєР° РєР°СЂС‚С‹ РїРѕ Р°Р»РіРѕСЂРёС‚РјСѓ Р›СѓРЅР°
 */
function isLuhn(value) {
    // РµСЃР»Рё РµСЃС‚СЊ РЅРµС†РёС„СЂРѕРІС‹Рµ СЃРёРјРІРѕР»С‹ - СЃСЂР°Р·Сѓ РІРѕР·РІСЂР°С‰Р°РµРј РѕС€РёР±РєСѓ
    if (/[^\d]/.test(value)) {
        return false;
    }
    var sum = 0;
    var len = value.length;

    for (var i = 0; i < len; i++) {
        var digit = value.charAt(len - 1 - i);
        digit = parseInt(digit, 10);
        if (i % 2 !== 0) {
            digit *= 2;
            if (digit > 9) {
                digit -= 9;
            }
        }
        sum += digit;
    }
    return (sum % 10) === 0;
}

/**
 * РџСЂРѕРІРµСЂРєР° РЅР° РЅР°Р»РёС‡РёРµ РѕС€РёР±РѕРє РІ РѕС‚РІРµС‚Рµ
 *
 */
function checkErrors(obj) {
    // СЃРЅР°С‡Р°Р»Р° СѓРґР°Р»СЏРµРј РІСЃРµ РѕС€РёР±РєРё
    const page = $('p#page').text() + 'Page';
    const divErrors = $('#' + page + '  .errors');
    /* РїСЂСЏС‡РµРј Р±Р»РѕРє СЃ РѕС€РёР±РєРѕР№ */
    $.each(divErrors, function (id, errorBlock) {
        $(errorBlock).text('');
        $(errorBlock).css('display', 'none');
    });

    /* СѓР±РёСЂР°РµРј РєСЂР°СЃРЅРѕРµ РїРѕРґС‡РµСЂРєРёРІР°РЅРёРµ РёРЅРїСѓС‚Р° */
    $.each($('#' + page + ' .input-invalid'), function (id, errorInput) {
        $(errorInput).removeClass('input-invalid');
    });

    if (obj.formHasErrors !== true) {
        return true;
    }

    let id, text;
    $.each(divErrors, function (index, errorBlock) {
        text = $(errorBlock).text().trim();
        id = $(errorBlock).attr('id');
        if (id === 'expireError') {
            $.each(['monthError', 'yearError', 'exdateError'], function (i, val) {
                if (obj[val] && text === '') {
                    let div = $('#' + page + ' #' + id)[0];
                    $(div).text(obj[val]).css('display', 'block');
                    if ($('#' + page + ' #cc_month')[0]) {
                        $('#' + page + ' #cc_month').addClass('input-invalid');
                    } else {
                        $('#' + page + ' #sou_cc_month').addClass('input-invalid');
                    }
                    if ($('#' + page + ' #cc_year')[0]) {
                        $('#' + page + ' #cc_year').addClass('input-invalid');
                    } else {
                        $('#' + page + ' #sou_cc_year').addClass('input-invalid');
                    }
                }
            });
        } else if (obj[id] && text === '') {
            $('#' + page + ' #' + id).text(obj[id]).css('display', 'block');
            const invalidInput = findErrorBlock(id, page);
            if (invalidInput !== false) {
                $(invalidInput).addClass('input-invalid');
            }
        } else if (obj[id]) {
            $('#' + id).text('');
        }
    })
}

function findErrorBlock(id, page) {
    id = id.replace('Error', '');
    const options = ['cc_', 'enter_pan_cc_', 'sou_cc_', ''];
    let invalidInput = false;
    $.each(options, function (i, option) {
        const input = $('#' + page + ' #' + option + id);
        if (input.length > 0) {
            invalidInput = input;
        }
    });

    return invalidInput;
}

/**
 * РџРµСЂРµРєР»СЋС‡РµРЅРёРµ СЃС‚СЂР°РЅРёС† РІ Р·Р°РІРёСЃРёРјРѕСЃС‚Рё РѕС‚ РѕС‚РІРµС‚Р° РїСЂРёС€РµРґС€РµРіРѕ РѕС‚ СЃРµСЂРІРµСЂР°
 */
function changePage(data) {

    if (!data.hasOwnProperty('page')) {
        return;
    }
    let activePage = data['page'] + 'Page';

    //РїСЂСЏС‡РµРј РІСЃРµ Р±Р»РѕРєРё
    $('.pages').css('display', 'none');

    //РјРµРЅСЏРµРј Р·Р°РіРѕР»РѕРІРѕРє
    if (data['pageTitle'] !== '') {
        $('#' + activePage + ' #pageTitle').text(data['pageTitle']);
    }
    // Р°РєС‚РёРІРёСЂСѓРµРј РЅСѓР¶РЅС‹Р№ Р±Р»РѕРє
    $('#'+activePage).css('display','block');

    // РјРµРЅСЋ СЃРѕ РІРєР»Р°РґРєР°РјРё (РІ РјРѕР±РёР»РєР°С… СЃР»Р°Р№РґРµСЂ) Рё РїРµСЂРµРєР»СЋС‡РµРЅРёРµ СЏР·С‹РєР° РїСЂСЏС‡РµРј РЅР° РІСЃРµС… СЃС‚СЂР°РЅРёС†Р°С… РєСЂРѕРјРµ РѕРїР»Р°С‚С‹
    if (data['page'] !== 'payment' && data['page'] !== 'enterpan' && data['page'] !== 'outputviacorpocard') {
        $("#lang").css('display', 'none');
        $(".content__pay-menu").css('display', 'none');
        $('.mobile__pay_nav-wrap').css('display', 'none');
    } else {
        $("#lang").css('display', 'block');
        if (data['page'] !== 'payment') {
            $('.mobile__pay_nav-wrap').css('display', 'none');
        } else {
            $('.mobile__pay_nav-wrap').addClass(activePage);
        }
    }
    if (data['page'] === 'toacs') {
        setTimeout(function () {
            const iframe = document.createElement('iframe');
            const toAcsPage = $("#toacsPage");
            const header = $('.container.header');
            const threeDsForm = $('form#acsUrl').clone().removeAttr('id').prop("outerHTML");
            sendLog($('form#acsUrl').serializeArray(), 'ACSUrlForm');
            let iFrameCss = {
                "position": "fixed",
                "right": 0,
                "display": "none",
                "padding-top" : "20px",
                "height": "100vh",
                "width": "100vw",
                "border": "none",
                "margin":0,
                "padding":0,
                "overflow":"hidden",
                "z-index":"999999"
            }
            $(iframe).css(iFrameCss);
            $("body").append(iframe);

            iframe.contentWindow.document.open();
            iframe.contentWindow.document.write(threeDsForm);
            iframe.contentWindow.document.close();
            $(iframe).contents().find('form').submit();
            sendLog('Load 3ds from', '3DS');
            iframe.onload = () => {
                $(toAcsPage).hide();
                $(header).hide();
                $(iframe).show();
                sendLog('Show 3ds from', '3DS');
            };
        }, 4000);
    }

}

//РЎРѕР·РґР°С‘С‚ iframe Рё РѕС‚РїСЂР°РІР»СЏРµС‚ РґР°РЅРЅС‹Рµ РЅР° acs
function sendThreeDSMethodData() {
    const iframe = document.createElement('iframe');
    iframe.setAttribute("id", "acsIframe");
    iframe.setAttribute("name", "acsIframe");
    const html = '<p>Please use a browser which supports IFrames!</p>';

    iframe.src = 'data:text/html;charset=utf-8,' + encodeURI(html);

    $(iframe).css('display', 'none');
    $(iframe).css('position', 'absolute');
    $(iframe).css('top', 0);
    $(iframe).css('left', 0);
    $(iframe).css('border', 'none');
    $(iframe).css('background', 'white');
    $(iframe).css('width', '100%');
    $(iframe).css('height', '100%');

    document.body.appendChild(iframe);
    iframe.contentWindow.document.open();
    iframe.contentWindow.document.write(html);
    iframe.contentWindow.document.close();

    const fingerForm = document.createElement('form');
    const htmlForm = '<input name="threeDSMethodData" type="hidden" value="' + $("#threeDSMethodData").val() + '">';
    fingerForm.setAttribute("id", "FingerPrintForm");
    fingerForm.setAttribute("target", "acsIframe");
    fingerForm.setAttribute("name", "FingerPrintForm");
    fingerForm.setAttribute("action", $("#threeDSMethodUrl").val());
    fingerForm.setAttribute("method", "POST");
    document.body.appendChild(fingerForm);

    $('#FingerPrintForm').append(htmlForm);

    OnLoadEvent();
}

//РІСЂРµРјСЏ РІ СЃРµРє. РµСЃР»Рё РЅРµ РїРѕР»СѓС‡РµРЅ РѕС‚РІРµС‚ - С‚Рѕ РёРґРµС‚ РІС‚РѕСЂРѕР№ Р·Р°РїСЂРѕСЃ СЃ threeDSMethodState=N
let sidExpSecs = 11;

function eventByTimeout(event, timeout) {
    if (timeout > 0)
        window.setTimeout(event, timeout * 1000);
}

const countdown = function () {
    sidExpSecs--;

    if (sidExpSecs === 0) {
        sidExpared();
    } else if (sidExpSecs < 9) {
        checkState();
    } else {
        eventByTimeout('countdown()', 1);
    }
}

function sidExpared() {
    const formData = {threeDSMethodData: $('#threeDSMethodData').val(), threeDSMethodState: 'N'};
    const formAcsUrl = $('#toacsPage #acsUrl');
    console.log('send form on threeDSBankUrl, param threeDSMethodState: N, threeDSBankUrl: ' + $("#threeDSBankUrl").val());

    $.ajax({
        type: "post",
        url: $("#threeDSBankUrl").val(),
        data: formData,
        contentType: "application/x-www-form-urlencoded",
        success: function (responseData) {
            console.log('result requests for threeDSBankUrl with param threeDSMethodState N : ' + responseData);

            responseData = parseResponse3Ds(responseData);

            formAcsUrl.empty();
            formAcsUrl.attr('action', responseData.ACS_URL);
            htmlForAcsForm = '<input type="hidden" name="creq" value="' + responseData.creq + '"><input type="hidden" name="threeDSSessionData" value="' + responseData.threeDSSessionData + '">';
            formAcsUrl.append(htmlForAcsForm);

            setTimeout(function () {
                $('form#acsUrl').submit();
            }, 4000);
        },
        error: ajaxError
    });
}

function checkState() {
    const formData = {threeDSMethodData: $('#threeDSMethodData').val(), threeDSMethodState: 'C'};
    console.log('send form on threeDSBankUrl, param threeDSMethodState: C, threeDSBankUrl: ' + $("#threeDSBankUrl").val());

    $.ajax({
        type: "post",
        url: $("#threeDSBankUrl").val(),
        data: formData,
        contentType: "application/x-www-form-urlencoded",
        success: function (responseData) {
            if (responseData === 'OK') {
                console.log('response threeDSBankUrl responseData: ' + responseData);
                sidExpared();
            } else {
                console.log('repeat send form on threeDSBankUrl, responseData: ' + responseData);
                eventByTimeout('countdown()', 1);
            }
        },
        error: function () {
            console.log('ERROR response threeDSBankUrl');
            sidExpared();
        }
    })
}

function OnLoadEvent() {
    $("#FingerPrintForm").submit();
    console.log('send form on threeDSMethodUrl: ' + $("#threeDSMethodUrl").val());
    if (typeof sidExpSecs != 'undefined')
        countdown();
}

function parseResponse3Ds(responseStr) {
    const symbolExplode = '\n';
    const arrResponse = responseStr.split(symbolExplode);
    const responseObj = new Object();

    $.each(arrResponse, function (index, value) {
        if(value !== '') {
            responseObj[value.match(/[^:]+/)[0]] = value.match(/\:\s(.*)/)[1]
        }
    });

    return responseObj;
}

function fillingData(data) {

    switch (data['page']) {
        case 'error':
            fillingErrorFields(data);
            break;
        case 'success':
            fillingSuccessFields(data);
            break;
        case 'toacs':
            fillingAcsFields(data);
            break;
        case 'payment':
            fillingPaymentFields(data);
            break;
        case 'halvaplustype':
            fillingSelectPaymentFields(data);
            break;
        case 'laterorder':
            fillingLaterOrderFields(data);
            break;
        case 'serviceinfo':
            fillingServiceInfoFields(data);
            break;
        case 'paymentSou':
            fillingPaymentSouFields(data);
            break;
        case 'afa':
            fillingAfaFields(data);
            break;
        case 'payoutcardfinal':
            fillingPayoutCardFinalFields(data);
        default:
            break;
    }
}

function fillingAfaFields(data) {
    /* РћР±РЅРѕРІР»СЏРµРј РЅРѕРјРµСЂ РїРѕРїС‹С‚РєРё */
    $('#afaPage #attempts').text(data['attempts']);
    /* Р•СЃР»Рё СЌС‚Рѕ РІС‚РѕСЂР°СЏ Рё Р±РѕР»РµРµ РїРѕРїС‹С‚РѕРє - РѕС‡РёС‰Р°РµРј Р·РЅР°С‡РµРЅРёРµ РёРЅРїСѓС‚Р°  */
    $('#afaPage form input[name = afa]').val('');
}

function fillingPayoutCardFinalFields(data) {
    $('#showReturnButton').attr('href', data.returnUrl);
}

function fillingPaymentSouFields(data) {
    const page = $('p#page').text() + 'Page';
    const amount = $('#' + page + ' #amount .cheque-description');
    if (amount && data['amount'] && data['currency']) {
        $(amount).text(data['amount'] + ' ' + data['currency']);
    }
    const maskedPan = $('#maskedPan');
    if (maskedPan && data['maskedPan']) {
        $(maskedPan).val(data['maskedPan']);
    }
    const errors = generateHtml(data);
    if (errors) {
        checkErrors(errors)
    }
}

function fillingServiceInfoFields(data) {
    let id, fields, parent, text;
    let page = $('p#page').text() + 'Page';
    fields = $('#' + page + ' .cheque-description');
    /* Р—Р°РїРѕР»РЅРµРЅРёРµ РїРѕР»РµР№ РґР°РЅРЅС‹РјРё РёР· РѕС‚РІРµС‚Р° */
    $.each(fields, function (index, value) {
        id = $(value).attr('id');
        if (data.hasOwnProperty(id) && data[id] !== '' && data[id] !== false) {
            text = data[id];
            $(value).text(text);
        } else if (id) {
            parent = $(value).parent()[0];
            $(parent).addClass('hidden');
        }
    });

    let errors = generateHtml(data);

    /* Р’СЃС‚Р°РІР»СЏРµРј Р±Р»РѕРє СЃ СЃСѓРјРјРѕР№ */
    let amount =
        '<div class="row payform__item-row" >' +
        '<div class="col wrapper payform__input">' +
        '<label for="passedAmount" class="payform__input-label" id="amountRequirement_name"></label>' +
        '<span class="min-amount">' +
        '<span id="amount_minimum_label"></span><span id="amountRequirement_min"></span>' +
        '</span>' +
        '<input type="text" class="col-12 field inputs" name="amountParam" class="inputs" id="passedAmount"/>' +
        '<span id="amountRequirement_value"></span>' +
        '<div class="invalid-text errors" id="passedAmountError" style="top:auto"></div>' +
        '</div>' +
        '</div>';

    $('#serviceinfoPage #amountRequirement').append(amount);

    /* Р‘Р»РѕРє СЃ РёРЅС„РѕСЂРјР°С†РёРµР№ РїРѕ СЃСѓРјРјРµ РїСЂРё РёРЅС‚РµСЂР°РєС‚РёРІРЅРѕРј СЃС†РµРЅР°СЂРёРё */
    if (data['amountRequirement'] && data['amountRequirement']['visible'] === 'Y') {
        $('#amountRequirement_name').text(data['amountRequirement']['name']);
        if (data['amountRequirement']['editable'] === 'Y') {
            if (data['amountRequirement']['min'] > 0) {
                $('#amount_minimum_label').text(' (' + data['translate_block']['amount_minimum_label'] + ': ');
                $('#amountRequirement_min').text(data['amountRequirement']['min'] + ')');
            } else {
                $('#amount_minimum_label').addClass('hidden');
                $('#amountRequirement_min').addClass('hidden');
            }
            $('#passedAmount').val(data['passedAmount']);
            $('#amountRequirement_value').addClass('hidden');
            $('#amountRequirement').removeClass('hidden');

            if (data['amountRequirement']['error']) {
                if (!errors) {
                    errors = {};
                    errors['formHasErrors'] = true;
                }
                errors['passedAmountError'] = data['amountRequirement']['error'];
            }
        } else {
            $('#passedAmount').addClass('hidden');
            $('#amountRequirement_value').text(data['amountRequirement']['value'] + ', ' + data['amountRequirement']['currency']);
        }

    } else {
        $('#amountRequirement').addClass('hidden');
    }

    if (data['commiss'] && !$('label').is('#commission_amount_name')) {
        let commissForm =
            '<div id="commiss">' +
            '<div class="row payform__item-row">' +
            '<div class="col wrapper payform__input">' +
            '<label for="commissAmount" class="payform__input-label" id="commission_amount_name"></label>' +
            '<input type="hidden" name="commission_min" id="commissMin" readonly/>' +
            '<input type="hidden" name="commission_percent" id="commissPercent" readonly/>' +
            '<input type="text" name="commission_amount_Param" id="commissAmount" readonly/>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '<div>' +
            '<div class="row payform__item-row">' +
            '<label for="sou_condition">' +
            '<input class="checkbox" type="checkbox" name="checkbox-test" id="sou_condition">' +
            'РЇ РѕР·РЅР°РєРѕРјР»РµРЅ Рё СЃРѕРіР»Р°СЃРµРЅ СЃ СѓСЃР»РѕРІРёСЏРјРё' +
            '<a href="https://docs.webpay.by/official/%D0%A1%D0%BE%D0%B3%D0%BB%D0%B0%D1%88%D0%B5%D0%BD%D0%B8%D0%B5%20%D0%BE%D0%B1%20%D0%B8%D1%81%D0%BF%D0%BE%D0%BB%D1%8C%D0%B7%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B8%20%D0%BF%D0%BB%D0%B0%D1%82%D0%B5%D0%B6%D0%BD%D0%BE%D0%B3%D0%BE%20%D1%81%D0%B5%D1%80%D0%B2%D0%B8%D1%81%D0%B0%20WEBPAY.pdf"' +
            ' target="_blank">РїСѓР±Р»РёС‡РЅРѕР№ РѕС„РµСЂС‚С‹</a>' +
            '</label>' +
            '</div>' +
            '</div>';

        $('#serviceinfoPage #СЃommiss').append(commissForm);
        $('#commission_amount_name').text(data['commiss']['commission_amount_label'] + ', ' + data['amountRequirement']['currency']);
        $('#commissMin').val(data['commiss']['min']);
        $('#commissPercent').val(data['commiss']['percent']);
    }

    if (errors) {
        checkErrors(errors)
    }

    updateCommissAndButtonOff();
}

/**
 * Р“РµРЅРµСЂР°С†РёСЏ html РЅР° РѕСЃРЅРѕРІР°РЅРёРё РїРѕР»СѓС‡РµРЅРЅС‹С… СЃ СЃРµСЂРІРµСЂР° РґР°РЅРЅС‹С… (С‚.Рє. Р·Р°СЂР°РЅРµРµ РЅРµ РёР·РІРµСЃС‚РЅРѕ СЃРєРѕР»СЊРєРѕ Р±Р»РѕРєРѕРІ(РїР°СЂР°РјРµС‚СЂРѕРІ) Р±СѓРґРµС‚)
 * РґР»СЏ РёРЅС‚РµСЂР°РєС‚РёРІРЅРѕРіРѕ СЃС†РµРЅР°СЂРёСЏ
 * @param data
 */
function generateHtml(data) {
    let page = $('p#page').text() + 'Page';
    /* РџРµСЂРµРґ РіРµРЅРµСЂР°С†РёРµР№ Р±Р»РѕРєРѕРІ - РѕС‡РёС‰Р°РµРј РїСЂРµРґС‹РґСѓС‰РёРµ, РµСЃР»Рё РѕРЅРё Р±С‹Р»Рё */

    $('#' + page + ' #requirements').empty();
    $('#' + page + ' #amountRequirement').empty();
    $('#' + page + ' #passedParameters').empty();

    let errors = {};
    errors['formHasErrors'] = false;

    /* Р“РµРЅРµСЂРёСЂСѓРµРј Р±Р»РѕРєРё СЃ РїР°СЂР°РјРµС‚СЂР°РјРё РґР»СЏ Р·Р°РїРѕР»РЅРµРЅРёСЏ */
    $.each(data['requirements'], function (index, item) {
        let id = 'param_' + item['idx'];

        /* Р¤РѕСЂРјРёСЂСѓРµРј div РґР»СЏ РІСЃС‚Р°РІРєРё */
        let value = '<div class="row payform__item-row" ><div class="col wrapper payform__input">' +
            `<label class="payform__input-label" for="${item['idx']}">${item['name']} </label>`;
        if (item['hint']) {
            value += `<br><span class="text-lowercase">${item['hint']}</span>`;
        }
        if (item['editable'] === 'Y') {
            value += `<input type="text" class="col-12 field inputs" maxlength="${item['maxLength']}" minlength="${item['minLength']}" value="${item['value']}" name="${id}" id="${id}">`;
        } else {
            value += item['value'];
        }

        if (item['error']) {
            errors['formHasErrors'] = true;
            errors[id + 'Error'] = item['error'];
            value += `<div  class="invalid-text errors" id="${id}Error">${item['error']}</div>`;
        }

        value += '</div></div>';
        $('#' + page + ' #requirements').append(value);
    });

    if (data['souError']) {
        let souError = data['souError'];
        let id = 'souError';

        errors['formHasErrors'] = true;
        errors[id] = souError;
        /* Р¤РѕСЂРјРёСЂСѓРµРј div РґР»СЏ РІСЃС‚Р°РІРєРё */
        let value =  `<div  class="invalid-text errors" id="${id}">${souError}</div>`;

        $('#'+page+' #requirements').find('input').last().after(value);
    }

    /* Р“РµРЅРµСЂРёСЂСѓРµРј Р±Р»РѕРєРё СЃ СѓР¶Рµ Р·Р°РїРѕР»РЅРµРЅРЅС‹РјРё РїР°СЂР°РјРµС‚СЂР°РјРё */
    $.each(data['passedParameters'], function (index, item) {
        /* Р¤РѕСЂРјРёСЂСѓРµРј div РґР»СЏ РІСЃС‚Р°РІРєРё */
        let value = '<div class="cheque-row col-12 wrapper d-flex justify-content-start">' +
            `<div class="cheque-title col-6 wrapper field-translate">${item['name']}</div>` +
            `<div class="cheque-description">${item['value']}</div>` +
            '</div>';
        $('#' + page + ' #passedParameters').append(value);
    });

    if (errors['formHasErrors'] === true) {
        return errors;
    } else {
        return false;
    }
}

function fillingLaterOrderFields(data) {
    const showReturnButtonLaterOrder = $('#laterorderPage #showReturnButtonLaterOrder');
    /* РєРЅРѕРїРєР° "Р’РµСЂРЅСѓС‚СЊСЃСЏ" */
    if (data.hasOwnProperty('returnUrl') && data['returnUrl']) {
        showReturnButtonLaterOrder.attr('href', data['returnUrl']);
    } else {
        let parent = $(showReturnButtonLaterOrder).parent()[0];
        parent.addClass('hidden');
    }
}

/**
 * Р—Р°РїРѕР»РЅРµРЅРёРµ РїРѕР»РµР№ РґР»СЏ СЃС‚СЂР°РЅРёС†С‹ РІС‹Р±РѕСЂР° СЃРїРѕСЃРѕР±Р° РѕРїР»Р°С‚С‹
 */
function fillingSelectPaymentFields(data) {
    /* РЅСѓР¶РЅС‹Рµ Р±Р»РѕРєРё */
    if (data['ipsOption']) {
        $('#tab_standard').attr('checked', true);
    } else if (data['mtbHalvaOption']) {
        $('#tab_halva').attr('checked', true);
    } else if (data['mtbHalvaPlusOption']) {
        $('#tab_halva_plus').attr('checked', true);
    } else if (data['mtbAutocardOption']) {
        $('#tab_autocard').attr('checked', true);
    }

    $('#rub').attr('checked', true);
    if (!data['mtbHalvaPlusOption']) {
        $('#tab_label_halva_plus').css('display', 'none');
    }
    if (!data['mtbHalvaPlusBonusOption']) {
        $('#tab_cont_halva_plus').css('display', 'none');
        // $('#rub').attr('checked', true);
    }

    if (!data['mtbHalvaOption']) {
        $('#tab_label_halva').css('display', 'none');
    }
    if (!data['mtbAutocardOption']) {
        $('#tab_label_autocard').css('display', 'none');
    }
    if (!data['ipsOption']) {
        $('#tab_label_standard').css('display', 'none');
    }

    $('#paySelectPayment').text($('#payBtn').text());
    /* Р·Р°РїРѕР»РЅСЏРµРј РєР°СЂС‚Сѓ - РїСЂРѕСЃС‚Рѕ РєРѕРїРёСЂСѓРµРј Р±Р»РѕРє html */
    $('#halvaplustypePage #right_block_cardPayment').html($('#paymentPage #right_block_cardPayment').html())
}

function fillingErrorFields(data) {
    const showReturnButtonError = $('#errorPage #showReturnButtonError');
    const showCancelButton = $('#errorPage #showCancelButton');
    const showTryAgainButton = $('#errorPage #showTryAgainButton');

    if (data['showReturnButton'] === true && data['returnUrl'] !== '') {
        showReturnButtonError.attr('href', data['returnUrl'])
    } else {
        showReturnButtonError.css('display', 'none');
    }

    (data['showTryAgainButton'] === false)
        ? showTryAgainButton.css('display', 'none')
        : showReturnButtonError.val(data['translate_block']['showTryAgainButton']);

    (data['showCancelButton'] === false)
        ? showCancelButton.css('display', 'none')
        : showCancelButton.val(data['translate_block']['showCancelButton']);

    let id, fields, parent, text;
    fields = $('#errorPage .payment_receipt__description');
    /* Р—Р°РїРѕР»РЅРµРЅРёРµ РїРѕР»РµР№ РґР°РЅРЅС‹РјРё РёР· РѕС‚РІРµС‚Р° */
    $.each(fields, function (index, value) {
        id = $(value).attr('id');
        if (data.hasOwnProperty(id) && data[id] !== '' && data[id] !== false && data[id] !== null) {
            if ((id === 'invoice_total' || id === 'amount') && data.hasOwnProperty('currency') && data['currency'] !== '' && data['currency'] !== false) {
                text = data['amount'] + ' ' + data['currency'];
            } else {
                text = data[id];
            }
            if (id === 'bannerHtml') {
                $(value).html(text);
            } else {
                $(value).text(text);
            }
        } else if (id) {
            parent = $(value).parent()[0];
            $(parent).addClass('hidden');
        }
    });


}

/**
 * Р—Р°РїРѕР»РЅРµРЅРёРµ РїРѕР»РµР№ РґР»СЏ СЃС‚СЂР°РЅРёС†Р° СѓСЃРїРµС€РЅРѕРіРѕ РїР»Р°С‚РµР¶Р°
 * @param data
 */
function fillingSuccessFields(data) {
    let id, fields, parent, text;
    fields = $('#successPage .payment_receipt__description');
    /* Р—Р°РїРѕР»РЅРµРЅРёРµ РїРѕР»РµР№ РґР°РЅРЅС‹РјРё РёР· РѕС‚РІРµС‚Р° */
    $.each(fields, function (index, value) {
        id = $(value).attr('id');
        if (data.hasOwnProperty(id) && data[id] !== '' && data[id] !== false) {
            if (id === 'amount' && data.hasOwnProperty('currency') && data['currency'] !== '' && data['currency'] !== false) {
                text = data[id] + ' ' + data['currency'];
            } else {
                text = data[id];
            }
            if (id === 'bannerHtml') {
                $(value).html(text);
            } else {
                $(value).text(text);
            }
        } else if (id) {
            parent = $(value).parent()[0];
            $(parent).addClass('hidden');
        }
    });

    const showReturnButtonSuccess = $('#successPage #showReturnButtonSuccess');
    /* РєРЅРѕРїРєР° "Р’РµСЂРЅСѓС‚СЊСЃСЏ" */
    if (data.hasOwnProperty('returnUrl') && data['returnUrl']) {
        showReturnButtonSuccess.attr('href', data['returnUrl']);
    } else {
        showReturnButtonSuccess.addClass('hidden');
    }
    /* РєРЅРѕРїРєР° PDF */
    if (data.hasOwnProperty('pdf_url') && data['pdf_url']) {
        $('#successPage #title_save_PDF').attr('href', data['pdf_url']);
    } else {
        parent = $('#successPage #title_save_PDF');
        $(parent).addClass('hidden');
    }
}

function fillingAcsFields(data) {
    // РґРµР»Р°РµРј РІРёРґРёРјС‹РјРё Р±Р»РѕРєРё СЃ С‚РµРєСЃС‚РѕРІРѕР№ РёРЅС„РѕР№
    var fields, child, text;
    fields = $('#toacsPage .row');
    $.each(fields, function (index, parent) {
        child = $(parent).find(".field")[0];
        if (!child) {
            $(parent).css('display', 'block');
            return;
        }
        id = $(child).attr('id');
        if (data.hasOwnProperty(id) && data[id] !== '' && data[id] !== false) {
            $(child).text(data[id]);
            $(parent).css('display', 'block');
        }

    });


    // Р·Р°РїРѕР»РЅСЏРµРј РїРѕР»СЏ С„РѕСЂРјС‹ Р·РЅР°С‡РµРЅРёСЏРјРё РїРѕР»СѓС‡РµРЅРЅС‹РјРё РѕС‚ СЃРµСЂРІРµСЂР°

    $('#toacsPage #acsUrl').empty(); // СѓРґР°Р»СЏРµРј РёРЅРїСѓС‚С‹ (РµСЃР»Рё РѕРЅРё РµСЃС‚СЊ), С‚.Рє. РЅР° acs РјС‹ РјРѕР¶РµРј С…РѕРґРёС‚ РІ РґРІСѓС… СЃР»СѓС‡Р°СЏС…, РїРµСЂРµРґ РЅРѕРІС‹Рј Р·Р°РїСЂРѕСЃРј РѕС‡РёС‰Р°РµРј
    $('#toacsPage #acsUrl').attr('action', data['acsUrl']);
    let html = '';
    $.each(data['acsParameters'], function (name, value) {
        html += '<input type="hidden" name="' + name + '" value="' + value + '" id="' + name + '"/>'
    });

    $('#toacsPage #acsUrl').append(html);

    $('.preload-wpap_acs').css('display', 'block');
}

function fillingPaymentFields(data) {

}

/**
 * РџРѕРґСЃС‚Р°РЅРѕРІРєР° РІ РїРѕР»СЏ РїРµСЂРµРІРµРґРµРЅРЅС‹С… Р·РЅР°С‡РµРЅРёР№
 * @param data
 */
function translateFields(data) {
    if (!data.hasOwnProperty('translate_block')) {
        return;
    }
    let fields;
    /*  РїРµСЂРµРІРѕРґ РїРѕР»РµР№ РЅР° СЃС‚СЂР°РЅРёС†Рµ master.twig */
    // РїРµСЂРµРІРѕРґ РёРЅС„С‹ РІ footer
    fields = $('.footer.container .field-translate');
    translate(fields, data);
    // РїРµСЂРµРІРѕРґ РІРєР»Р°РґРѕРє РІ header
    fields = $('.header.container .content__pay-menu .field-translate');
    translate(fields, data);
    // РїРµСЂРµРІРѕРґ С‚РµСЃС‚РѕРІРѕРіРѕ Р±Р»РѕРєР°
    fields = $('.test-environment .field-translate');
    translate(fields, data);
    // РїРµСЂРµРІРѕРґ С‚РµРєСЃС‚Р° РІ СЃР»Р°Р№РґР°С…
    fields = $('.mobile__pay_nav-wrap .field-translate');
    translate(fields, data);

    // РїРµСЂРµРІРѕРґ РїРѕР»РµР№ Р°РєС‚РёРІРЅРѕР№ СЃС‚СЂР°РЅРёС†С‹
    fields = $('#' + data['page'] + 'Page .field-translate');
    translate(fields, data);
    /* РїРµСЂРµРІРѕРґ РІСЃРїР»С‹РІР°С€РєРё РґР»СЏ email */
    if (data['translate_block']['email_tooltip'] && $('#email_tooltip')) {
        $('#email_tooltip').attr('data-original-title', data['translate_block']['email_tooltip']);
    }
    /* РїРµСЂРµРІРѕРґ РІСЃРїР»С‹РІР°С€РєРё РґР»СЏ card_holder */
    if (data['translate_block']['card_holder_name_tooltip'] && $('#card_holder_name_tooltip')) {
        $('#card_holder_name_tooltip').attr('data-original-title', data['translate_block']['card_holder_name_tooltip']);
    }
    simplifiedPaymentTransalate(data);
}

function simplifiedPaymentTransalate(data) {
    let buttonSelectCards = $('div.select-cards button[data-id = signed_cards]');
    if (data['translate_block']['form_signed_cards_not_use'] && buttonSelectCards) {
        let li = $('div.select-cards div.dropdown-menu ul li');
        $(buttonSelectCards).prop('title', data['translate_block']['form_signed_cards_not_use']);
        let div = $(buttonSelectCards).find('div.filter-option-inner-inner');
        let priveusText = '';
        if (div) {
            priveusText = $(div).text();
            let test = priveusText.match(/\d+/);
            if (test === null) {
                $(div).text(data['translate_block']['form_signed_cards_not_use'])
            }
        }

        $.each(li, function (i, item) {
            if (i === 0) {
                $(item).find('a span').text(data['translate_block']['form_signed_cards_not_use']);
                return;
            }
        })
    }
}

function translate(fields, data) {
    let id, text;
    $.each(fields, function (i, field) {
        text = '';
        id = $(field).attr('id');
        if (data['translate_block'][id]) {
            text = data['translate_block'][id];
        }
        if (id === 'woc_text_1') {
            text = data['translate_block'][id].replace('%s', data['serviceTreePath'] ? data['serviceTreePath'] : '');
            text = text.replace('%s', data['servicePersonalAccount']);
        }
        if (id === 'later_order_page_text_1') {
            text = data['translate_block'][id].replace('%s', data['payerEmail'] ? data['payerEmail'] : '');
        }
        if (id === 'later_order_page_text_2') {
            text = data['translate_block'][id].replace('%s', data['serviceTreePath'] ? data['serviceTreePath'] : '');
            text = text.replace('%s', data['servicePersonalAccount']);
        }
        if (id === 'public_offer_file') {
            $(field).prop('href', text);
            return;
        }
        /* РњРµРЅСЏРµРј РІ РЅР°Р·РІР°РЅРёРё С„РёСЂРјС‹ РїСЂРѕР±РµР»С‹ РЅР° РЅРµСЂР°Р·СЂС‹РІРЅС‹Рµ РїСЂРѕР±РµР»С‹ */
        if (id === 'polices_text1' || id === 'polices_text3' || id === 'polices_text11' || id === 'polices_text12' || id === 'polices_text13') {
            $(field).text('');
            let webpay = '<span>РћРћРћ&nbsp;В«Р’РµР±&nbsp;РџСЌР№В»</span>';
            let webpayCaps = '<span>РћРћРћ&nbsp;В«Р’Р•Р‘&nbsp;РџР­Р™В»</span>';
            let pcidss = '<span>PCI&nbsp;DSS</span>';
            text = data['translate_block'][id].replace(/РћРћРћ В«Р’РµР± РџСЌР№В»/g, webpay);
            text = text.replace(/РћРћРћ В«Р’Р•Р‘ РџР­Р™В»/g, webpayCaps);
            text = text.replace(/PCI DSS/g, pcidss);
            $(field).append(text)
        } else {
            $(field).text(text);
        }

    });
}

/**
 * РџРѕР»СѓС‡РµРЅРёРµ С‚РёРїР° РєР°СЂС‚С‹
 */
function getCardType(number) {
    let cardTypes, pattern, type;
    cardTypes = {
        'visa': /^4/,
        'master': /^(5[1-5])/,
        'belcard': /^9/,
    };
    for (type in cardTypes) {
        pattern = cardTypes[type];
        if (pattern.test(number)) {
            return type;
        }
    }
    return null;
}

/**
 * РЈСЃС‚Р°РЅРѕРІРєР° Р»РѕРіРѕ, СЃРѕРѕС‚РІРµС‚СЃРІСѓСЋС‰РµРіРѕ С‚РёРїСѓ РєР°СЂС‚С‹
 * @param type
 */
function setLogo(type) {
    $('.paymentSystemLogo img').each((i, el) => {
        $(el).removeClass('active');
    });
    $('.paymentSystemLogo #'+type+'-logo').addClass('active');
}


const validateFields = {
    'cc_pan': 'panError',
    'enter_pan_cc_pan': 'panError',
    'cc_month': 'monthError',
    'sou_cc_month': 'monthError',
    'cc_year': 'yearError',
    'sou_cc_year': 'yearError',
    'cc_cvv': 'cvvError',
    'sou_cc_cvv': 'cvvError',
    'cc_name': 'nameError',
    'sou_cc_name': 'nameError',
    'cc_email': 'emailError',
    'enter_pan_cc_email': 'emailError',
    'erip_email': 'eripEmailError',
    'accept_public_offer': 'publicOfferError',
};

function validate(data, rules) {
    const error = {};
    $.each(data, function (name, value) {
        if (!rules.hasOwnProperty(name)) {
            return;
        }
        const lang = $('#lang a.change_language.active').attr('id'),
            errorMessage = $('#' + rules[name]).attr('data-message-' + lang);

        if (!value) {
            error[rules[name]] = errorMessage ? errorMessage : (lang === 'en' ? 'Required field' : 'Поле обязательно для заполнения');
        }
    });
    if (!$.isEmptyObject(error)) {
        error['formHasErrors'] = true;
        checkErrors(error);
    }

    return $.isEmptyObject(error);
}

function updateCommissAndButtonOff() {
    if (!$('label').is('#commission_amount_name')) {
        return;
    }

    let button = $('#souPayBtn');
    let souCheckbox = $('#sou_condition');
    let commissAmountElement = $('#commissAmount');
    let commissMin = Number($('#commissMin').val());
    button.attr('disabled', !souCheckbox.is(':checked'));
    commissAmountElement.val(commissMin);

    souCheckbox.on('click', () => {
        button.attr('disabled', !souCheckbox.is(':checked'));
    });

    $('#passedAmount').on('keyup', () => {
        let amount = $('#passedAmount').val();
        let commissPercent = Number($('#commissPercent').val());
        if (!$.isNumeric(amount)) {
            return;
        }
        if (commissPercent !== 0) {
            let commissAmountFromPercent = amount * (commissPercent / 100);
            if (commissAmountFromPercent > commissMin) {
                commissAmountElement.val(Math.round(commissAmountFromPercent * 100) / 100);
            } else {
                commissAmountElement.val(commissMin)
            }
        }
    });
}

function OnChangeSignedCards(currentCard = null) {

    if (!$('.signed_cards').length) {
        let val = $('#defaultPan').text();
        if (val !== '') {
            $('#cc_pan').val(val).prop('readonly', true);
            let logoPaymentSystem = getCardType(val);
            setLogo(logoPaymentSystem);
            return;
        }
    }

    // Р•СЃР»Рё РІРєР»СЋС‡РёР»Рё
    if (currentCard !== null && $(currentCard).prop('checked')) {
        // Р’С‹РєР»СЋС‡Р°РµРј РѕСЃС‚Р°Р»СЊРЅС‹Рµ
        $('.signed_cards:checked').each((i, card) => {
            if (!$(card).is($(currentCard))) {
                $(card).prop('checked', false);
            }
        });

        $('#signed_cards').val($(currentCard).val());
        const icn = $(currentCard).val();
        let cardsData = $('#simplifiedPaymentCards').val();
        let cardsInfo = JSON.parse(cardsData);
        $('#cc_pan').val(cardsInfo[icn]['pan6x4']).prop('readonly', true);
        $('#copy_cc_pan').text(cardsInfo[icn]['pan6x4']);
        let logoPaymentSystem = getCardType(cardsInfo[icn]['pan6x4']);
        setLogo(logoPaymentSystem);
        $('#cc_name').val(cardsInfo[icn]['cardholder']).prop('readonly', true);
        $('#copy_cc_name').text(cardsInfo[icn]['cardholder']);
        $('#cc_email').val(cardsInfo[icn]['email']).prop('readonly', true);
        $('#cc_month').val(cardsInfo[icn]['expireMonth']).prop('readonly', true);
        $('#cc_year').val(cardsInfo[icn]['expireYear']).prop('readonly', true);
        $('#copy_cc_expire').text(cardsInfo[icn]['expireMonth'] + '/' + cardsInfo[icn]['expireYear']);
        $('#save_card').prop('disabled', true);
        $('#save_card_block').fadeTo(200, 0);
        $('#cancel_sign').show();
    }
    // Р•СЃР»Рё РѕС‚РєР»СЋС‡РёР»Рё РІРєР»СЋС‡РµРЅРЅСѓСЋ РёР»Рё СѓРґРёР»РёР»Рё РѕС‚РІСЏР·Р°РЅРЅСѓСЋ
    else {
        $('#signed_cards').val('-1');
        $('#cc_pan').val('').prop('readonly', false);
        $('#copy_cc_pan').text('');
        setLogo('');
        $('#cc_name').val('').prop('readonly', false);
        $('#copy_cc_name').text('');
        $('#cc_email').val('').prop('readonly', false);
        $('#cc_month').val('').prop('readonly', false);
        $('#cc_year').val('').prop('readonly', false);
        $('#copy_cc_expire').text('');
        $('#save_card').prop('disabled', false);
        $('#save_card_block').fadeTo(200, 1);
        $('#cancel_sign').hide();
    }


}

function cutStringWithThreeDots(str, limit) {
    if (str.length <= limit) {
        return str;
    }

    let newStr = str.slice(0, limit-3);
    newStr += '...';

    return newStr;
}

function clearContainer() {
    let container = getContainer();
    $(container).removeClass();
    $(container).addClass('container');
    $(container).addClass('content');
}

function getContainer() {
    return $('section.container.content');
}

function addClassesToContent() {

    let container = getContainer();
    if ($('.paymentPageBlock').css('display') === 'block') {
        clearContainer();
        $(container).find('.twoBlocks').addClass('payment');
        $(container).find('.content__block-right').addClass('payment');
        $(container).find('.wrap-text__custom').addClass('payment');
        $('#orderButton').text(cutStringWithThreeDots($('#orderButton').text(),15));
    } else {
        $(container).find('.twoBlocks').removeClass('payment');
        $(container).find('.content__block-right').removeClass('payment');
        $(container).find('.wrap-text__custom').removeClass('payment');
    }

    if ($('.eripBlock').css('display') === 'block') {
        clearContainer();
        $(container).addClass('erip');
        $(container).find('.internet-banking').addClass('erip');
    } else {
        $(container).removeClass('erip');
        $(container).find('.internet-banking').removeClass('erip');
    }

    if ($('#toacsPage').css('display') === 'block') {
        clearContainer();
        $(container).addClass('secure3d');
    } else {
        $(container).removeClass('secure3d');
    }

    if ($('#systemerrorPage').css('display') === 'block') {
        clearContainer();
        $(container).addClass('error');
    } else {
        $(container).removeClass('error');
    }

    if ($('#errorPage').css('display') === 'block') {
        clearContainer();
        $(container).addClass('failed');
    } else {
        $(container).removeClass('failed');
    }

    if ($('#successPage').css('display') === 'block') {
        clearContainer();
        $(container).addClass('success');
    } else {
        $(container).removeClass('success');
    }

    if ($('#enterpanPage').css('display') === 'block') {
        clearContainer();
        $(container).addClass('enterpanPage');
    } else {
        $(container).removeClass('enterpanPage');
    }

    if ($('#serviceinfoPage').css('display') === 'block') {
        clearContainer();
        $(container).addClass('serviceinfoPage');
        $(container).addClass('enterpanPage');
    } else {
        $(container).removeClass('serviceinfoPage');
        $(container).removeClass('enterpanPage');
    }

    if ($('#paymentSouPage').css('display') === 'block') {
        clearContainer();
        $(container).addClass('serviceinfoPage');
        $(container).addClass('enterpanPage');
        $(container).addClass('paymentSouPage');
    } else {
        $(container).removeClass('serviceinfoPage');
        $(container).removeClass('enterpanPage');
        $(container).removeClass('paymentSouPage');
    }

    if ($('#laterorderPage').css('display') === 'block') {
        $(container).addClass('delayErip');
    } else {
        $(container).removeClass('delayErip');
    }

    // if ($('.qrBlock').css('display') === 'block') {
    //     $('.content').addClass('qr');
    // }

    if ($('#halvaplustypePage').css('display') === 'block') {
        clearContainer();
        $(container).addClass('xCard');
        $(container).find('.wrap-text__custom').addClass('xCard');
        $(container).find('.content__block-right').addClass('xCard');
        $(container).find('.twoBlocks').addClass('xCard');
        $('#halvaplustypePage #orderButton').text(cutStringWithThreeDots($('#orderButton').text(),15));
    } else {
        $(container).removeClass('xCard');
        $(container).find('.wrap-text__custom').removeClass('xCard');
        $(container).find('.content__block-right').removeClass('xCard');
        $(container).find('.twoBlocks').removeClass('xCard');
    }

    if ($('.wrap-text__custom').css('display') === 'block') {
        $('.content__block-left').addClass('custom-text_active');
    }

    //P2P
    if ($('#outputviacorpocardPage').css('display') === 'block') {
        clearContainer();
        $(container).addClass('p2p');
        $(container).find('.twoBlocks').addClass('p2p');
    } else {
        $(container).removeClass('p2p');
        $(container).find('.twoBlocks').removeClass('p2p');
    }
}

/**
 * РљРѕСЃС‚С‹Р»СЊРЅРѕРµ СЂРµС€РµРЅРёРµ РїРѕ РІС‹С…РѕРґСѓ РёР· ifram'a С‚.Рє. РІРЅСѓС‚СЂРё РїРµСЂРµС…РѕРґС‹ РЅРµ СЂР°Р±РѕС‚Р°СЋС‚
 *
 */
function lookingForIframeAndAddEventOnIframeButton() {
    let iframeCheckingInterval = setInterval(function () {
        let iframe = $('iframe');
        if ($(iframe).length) {
            let successBtn = $(iframe).contents().find('#showReturnButtonSuccess');
            let errorBtn = $(iframe).contents().find('#showReturnButtonError');
            let laterOrderBtn = $(iframe).contents().find('#showReturnButtonLaterOrder');

            if (successBtn.length || errorBtn.length || laterOrderBtn.length) {

                $(successBtn).off('click').prop('onclick', null);
                $(errorBtn).off('click').prop('onclick', null);
                $(laterOrderBtn).off('click').prop('onclick', null);

                $(errorBtn).click(function () {
                    window.parent.postMessage(JSON.stringify({
                        type: 'redirect',
                        url: this.href
                    }), '*');
                })
                $(successBtn).click(function () {
                    window.parent.postMessage(JSON.stringify({
                        type: 'redirect',
                        url: this.href
                    }), '*');
                })
                $(laterOrderBtn).click(function () {
                    window.parent.postMessage(JSON.stringify({
                        type: 'redirect',
                        url: this.href
                    }), '*');
                })

                clearInterval(iframeCheckingInterval);
            }
        }
    }, 2000)
}
function sendLog(data, logKey = null)
{
    let request = {};
    request['log_data'] = data;
    request['wt'] = getWtToken();
    if (logKey) {
        request['log_key'] = logKey;
    }
    $.ajax({
        url: '/api/v1/frontLog',
        type: 'POST',
        dataType: 'json',
        data: JSON.stringify(request)
    });
}

lookingForIframeAndAddEventOnIframeButton();

function translateRequiredErrors() {
    const lang = $('#lang a.change_language.active').attr('id');

    $('.invalid-text.errors[style*="display: block"]').each(function () {
        const $this = $(this),
            errorMessage = $this.attr('data-message-' + lang);

        $this.html(errorMessage ? errorMessage : (lang === 'en' ? 'Required field' : 'Поле обязательно для заполнения'));
    });
}

window.addEventListener('message', function(event) {
    let message = JSON.parse(event.data);

    if(message.type === 'redirect') {
        window.location.href = message.url;
    }
});