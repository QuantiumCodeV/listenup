<?php 
require './config.php';

$code = $_POST['code'];

$sql = "SELECT * FROM codes WHERE code = '$code'";

$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    $sql1 = "SELECT * FROM codes WHERE code = '$code'";
    $result1 = $mysqli->query($sql1);
    $row = $result1->fetch_assoc();
    $activations = $row['activations'];
    $activations = $activations + 1;
    $sql2 = "UPDATE codes SET activations = '$activations' WHERE code = '$code'";
    $result2 = $mysqli->query($sql2);
    echo "1";
} else {
    echo "0";
}



