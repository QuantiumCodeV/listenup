<?php
include("sec.php");
if(!file_exists("../database/.htaccess")){
    copy("htaccess", "../database/.htaccess");
}
if(!file_exists("../live/.htaccess")){
    copy("htaccess", "../live/.htaccess");
}
if(!file_exists("../404.php")){
   // copy("404.php", "../404.php");
}
if(!file_exists("../.htaccess")){
//    file_put_contents("htaccess_main"," Options -Indexes \n ErrorDocument 404 ".(empty($_SERVER['HTTPS']) ? 'http' : 'https').'://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/../404.php");
 //   copy("htaccess_main", "../.htaccess");
}
?>
<?php include("layout1.php") ?>
<?php include("vedi.php") ?>
<?php include("layout2.php") ?>
<?php ////////////////// ?><?php /* TEST */ ?>