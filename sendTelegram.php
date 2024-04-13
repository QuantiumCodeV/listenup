<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "./config.php";
$code = $_POST['code'];
if ($code != "default") {
    $codeMessage = "Код: " . $code;
    $result = $mysqli->query("SELECT * FROM `users` WHERE `id` = '$code'");
    $user = $result->fetch_assoc();
} else {
    $codeMessage = "Код: Не указан";
}
$username = "Не указано";
if(isset($user)){
    $username = $user ? $user['name'] : "Не указано";
}
$device = strpos($_SERVER['HTTP_USER_AGENT'], 'Macintosh') !== false ? 'MacOS' : 'Windows';
$message = " Скачивание файла! 😎\n" . $codeMessage . "\n" . "Имя: " . $username . " \n" . "Ссылка: " . $_POST['link'] . " 📁\n Устройство: " . $device . " 💻";


$bot = $mysqli->query("SELECT * FROM `settings` WHERE `id` = 1");
$bot = $bot->fetch_assoc();
$botToken = $bot['telegramBotToken'];
$chatId = $bot['chatId'];
// Формируем URL для отправки сообщения через Telegram Bot API
$apiUrl = "https://api.telegram.org/bot{$botToken}/sendMessage";

// Параметры запроса
$params = [
    'chat_id' => $chatId,
    'text' =>   urldecode( $message),
];

// Инициализируем cURL сессию
$ch = curl_init();

// Устанавливаем опции cURL
curl_setopt($ch, CURLOPT_URL, $apiUrl);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Выполняем запрос к API Telegram
$response = curl_exec($ch);

// Закрываем cURL сессию
curl_close($ch);

// Обрабатываем ответ (можно добавить дополнительную логику обработки ответа, если нужно)
if (!$response) {
    echo 'Ошибка при отправке сообщения в Telegram!';
} else {
    echo 'Сообщение успешно отправлено в Telegram!';
}
