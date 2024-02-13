<?php
$jsontk = @file_get_contents("jsontk.txt");
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
global $opt;

    $ip = getUserIP();

    $details = json_decode(file_get_contents("http://ipinfo.io/$ip".$jsontk));
    var_dump($details);

?>