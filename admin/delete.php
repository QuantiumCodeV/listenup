<?php
require("../database/config.php");

header('Content-Type: application/json');

$response = ['status' => 'error'];

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM logs WHERE id = $id";

    if ($mysqli->query($sql)) {
        $response['status'] = 'ok';
    } else {
        $response['error'] = $mysqli->error;
    }
}

echo json_encode($response);
?>