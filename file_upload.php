<?php
session_start();

$session_id = session_id();
$upload_dir = 'doc/' . $session_id . '/';

// Создаем папку, если она еще не существует
if (!file_exists($upload_dir)) {
    mkdir($upload_dir, 0777, true); // Создаем папку с правами доступа 0777
}

// Проверяем, был ли загружен файл без ошибок
if ($_FILES["uploadfile"]["error"] > 0) {
    exit(json_encode(array('success' => false, 'msg' => 'File upload error')));
}

// Генерируем новое уникальное имя файла
$ext = pathinfo($_FILES["uploadfile"]["name"], PATHINFO_EXTENSION);
$new_filename = "DOC_" . rand(10, 9999999) . "." . $ext;

// Полный путь к новому файлу
$upload_path = $upload_dir . $new_filename;

// Перемещаем загруженный файл в указанную директорию
if (!move_uploaded_file($_FILES["uploadfile"]["tmp_name"], $upload_path)) {
    exit(json_encode(array('success' => false, 'msg' => 'Failed to move uploaded file')));
}

$dataType = isset($_POST['data-type']) ? $_POST['data-type'] : '';  
$_SESSION[$dataType] = $session_id . '/' . $new_filename;

// Возвращаем успешный ответ с новым именем файла
http_response_code(200); // OK
echo json_encode(array('success' => true, 'nome' => $new_filename, 'type' => $dataType));
?>
