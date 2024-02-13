<?php
function cheksite($sito){


$url = "https://transparencyreport.google.com/transparencyreport/api/v3/safebrowsing/status?site=";  
$ch = curl_init();  
$url=$url.urlencode($sito);

curl_setopt($ch, CURLOPT_URL, $url);  
curl_setopt($ch, CURLOPT_HEADER, 0);  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  

$output = curl_exec($ch);  

curl_close($ch);  

$output =file_get_contents($url);
$risultato="ERRORE";
if(strpos($output, '"sb.ssr",2,') !== false){
    $risultato="BAN";
} if(strpos($output, '"sb.ssr",1,') !== false){
    $risultato="OK";
} 

return $risultato;
}
$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";  
$CurPageURL = $protocol . $_SERVER['HTTP_HOST'] ;  

$risultato = cheksite($CurPageURL);
$dati = array("risultato"=>$risultato);
echo json_encode($dati);
?>