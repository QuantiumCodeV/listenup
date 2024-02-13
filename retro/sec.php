<?php  /* OrVZfY7erCaMVPq3q9ykng9X7KPgghPVis1Z62lpmvBNg */  
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$uscire=false; if(!isset($_SESSION["login"]))

{ $uscire=true; }else{ if($_SESSION["login"]!=true){ $uscire=true; } }
 if(isset($_COOKIE["loggato1"])){ if($_COOKIE["loggato1"]=="loggato1")
 { $uscire=false; } } if($uscire){ header("Location: login.php"); die();
  } ?><?php  ?>