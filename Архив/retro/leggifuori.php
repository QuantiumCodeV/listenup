<?php /* OEPWcJwtVguXtUiN9qDzBaRExy3Y5scXTr2HitI4udkG */
$cartella = nomecartella();
global $opt;
if (file_exists("$cartella/opzioni.json"))
{
    $in = file_get_contents("$cartella/opzioni.json");
    $opt = @json_decode($in, true);
    if ($opt === null && json_last_error() !== JSON_ERROR_NONE)
    {
        $opt = array(
            "solomobile" => false,
            "soloandroid" => false,
            "bloccastato" => false,
            "crippa"=>false,
            "redirect" => "",
            "codicestat" => "",
            "codicechat" => ""
        );
    }
}
else
{
    $opt = array(
        "solomobile" => false,
        "soloandroid" => false,
        
        "crippa"=>false,
        "codicestat" => "",
        "bloccastato" => false,
        "redirect" => "",
        "codicechat" => ""
    );
} ?><?php ?>
