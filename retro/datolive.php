<?php /* DVG3GXk1asMGWI6yG1LmtbOimwe0UsHKG7DV */ error_reporting(0);
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
    return $string ? implode(", ", $string) . " fa" : " online ";
}
function live($id)
{
    $clive = "../live/";
    $cfile = $clive . $id;
    if (file_exists($cfile)) {
        $livepagina = file_get_contents($cfile);
        $livetempo = filemtime($cfile);
        $tempo = time_elapsed_string($livetempo);
        $chiama = false;
        if (strpos($livepagina, "chiama") !== false) {
            $chiama = true;
        }
        if(strpos($livepagina,"|")!== false){
            $p1=explode("|",$livepagina)[0];
            $p2=explode("|",$livepagina)[1];
        $livepagina= "da <b class='npage'>".$p1. "</b> a <b class='npage'>".$p2."</b>";
        }else{
            $livepagina= "su <b class='npage'>".$livepagina."</b>";
        }
        
        return [$livepagina, $livetempo, $tempo, $chiama];
    }
    return [false, false];
}
if (isset($_REQUEST["id"])) {
    $id = $_REQUEST["id"];
    $datolive = live($id);
    echo json_encode($datolive);
} ?>
