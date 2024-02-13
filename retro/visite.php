<?php
if(isset($_GET['pagina']) && $_GET['pagina']=="index"){
$counter = intval(file_get_contents('visite.txt')) + 1;
file_put_contents('visite.txt', $counter);
return $counter;
}
?>