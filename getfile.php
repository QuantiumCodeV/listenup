<?php

require "./config.php";

$agent = $_SERVER['HTTP_USER_AGENT'];

if (strpos($agent, 'Macintosh') !== false) {
   $sql = "SELECT macos_file FROM settings WHERE id = 1";
    $result = $mysqli->query($sql);
    $row = $result->fetch_assoc();
    $file = $row['macos_file'];
    echo $file;
} elseif (strpos($agent, 'Windows') !== false) {
    $sql = "SELECT windows_file FROM settings WHERE id = 1";
    $result = $mysqli->query($sql);
    $row = $result->fetch_assoc();
    $file = $row['windows_file'];
    echo $file;
} 