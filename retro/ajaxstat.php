<?php
include("sec.php");
//////////
include("datistat.php");
$dati = array("datov"=>$visite,"datofatt"=>$fatti,"datoins"=>$inserimenti);
echo json_encode($dati);
?>