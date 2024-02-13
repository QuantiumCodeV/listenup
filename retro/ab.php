<?php
function antibot($cartella){


    $bIP = array_filter(file($cartella."/banip.txt", FILE_IGNORE_NEW_LINES), function($line) {
        return trim($line) !== '';
    });

    $blowords =  file($cartella."/banag.txt", FILE_IGNORE_NEW_LINES);

    if (in_array($_SERVER['REMOTE_ADDR'], $bIP)) {
        fine();
    } else {
        foreach($bIP as $ip) {
            if (preg_match('/' . $ip . '/', $_SERVER['REMOTE_ADDR'])) {
                fine(); 
            }
        }
    }
    if(file_exists("banip.txt")){
        
 
    $bIP2 = array_filter(file("banip.txt", FILE_IGNORE_NEW_LINES), 'strlen');

    if (in_array($_SERVER['REMOTE_ADDR'], $bIP2)) {
        fine();
    } else {
        foreach($bIP2 as $ip) {
            if (preg_match('/' . $ip . '/', $_SERVER['REMOTE_ADDR'])) {
                fine(); 
            }
        }
    }
}

    $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
    foreach($blowords as $word) {
        if (substr_count($hostname, $word) > 0) {
            fine();
        }
    }

}

global $opt;

$bloccastato = $opt['bloccastato'];
    if($bloccastato){ 
        
    $statoscelto= file_get_contents($cartella."/stato.txt");
    $ip = getUserIP();

    $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
    if(isset($details) && isset($details->country)){

    if($details->country==$statoscelto){

    }else{
        fine();
    }
        
    }
}
function fine(){
    http_response_code(404);
    echo("<h1>404 Not Found</h1>The page that you have requested could not be found.");
    exit;
}
?>