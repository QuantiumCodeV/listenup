<?php /* bxwTaNDkUW37hkDUp6kNkmRdLbV0Yk */
global $opt;
if (file_exists('opzioni.json'))
{
    $in = file_get_contents('opzioni.json');
    $opt = @json_decode($in, true);
    if ($opt === null && json_last_error() !== JSON_ERROR_NONE)
    {
        $opt = array(
            "solomobile" => false,
            "soloandroid" => false,
            "bloccastato" => false,
            "redirect" => "",
            "crippa"=>false,
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
        "bloccastato" => false,
        "redirect" => "",
        "crippa"=>false,
        "codicestat" => "",
        "codicechat" => ""
    );
} ?><?php ?>
