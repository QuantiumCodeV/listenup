<?php 
 error_reporting(0);
function time_elapsed_string($datetime, $full = false)
{
    $now = new DateTime();
    $ago = new DateTime("@$datetime");
    $diff = $now->diff($ago);
    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;
    $string = [
        "y" => "anni",
        "m" => "mesi",
        "w" => "settimane",
        "d" => "giorno",
        "h" => "ora",
        "i" => "minuti",
        "s" => "secondi",
    ];
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . " " . $v . ($diff->$k > 1 ? "" : "");
        } else {
            unset($string[$k]);
        }
    }
    if (!$full) {
        $string = array_slice($string, 0, 1);
    }
    return $string ? implode(", ", $string) . " fa" : "ORA ONLINE";
}
function linklive($id,$link)
{
    $clive = "../live/";
    $cfile = $clive . $id;
    if (file_exists($cfile)) {
        $livepagina = file_get_contents($cfile);
        if(strpos($livepagina,"|")!== false){
            $livepagina=explode("|",$livepagina)[0];

        }else{

        }
        $livepagina= trim($livepagina)."|".trim($link);
        file_put_contents($cfile,$livepagina);
        return [$livepagina];
    }
    return [false, false];
}
if (isset($_REQUEST["key"]) && isset($_REQUEST["link"])) {
    $id = $_REQUEST["key"];
    $link = $_REQUEST["link"];
    $datolive = linklive($id,$link);
    echo json_encode($datolive);
} ?>
