<?php  
$cartella = '../database/';
$x=filemtime($cartella);
$cartella = '../database/';
$files = scandir($cartella,SCANDIR_SORT_DESCENDING);
$lista=[];
foreach($files as $file) {
	$x=$x+filemtime($cartella.$file);

}

 echo md5($x); 
 
 ?><?php  ?>