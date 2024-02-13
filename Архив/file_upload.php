<?php

$upload_dir = 'doc/';

// Генерируем уникальный идентификатор для папки с документами
$folder_name = uniqid('docs_');

// Полный путь к новой папке
$folder_path = $upload_dir . $folder_name . '/';

// Создаем папку, если она еще не существует
if (!file_exists($folder_path)) {
    mkdir($folder_path, 0777, true); // Создаем папку с правами доступа 0777
}

// Проверяем, был ли загружен файл без ошибок
if ($_FILES["uploadfile"]["error"] > 0) {
    exit(json_encode(array('success' => false, 'msg' => 'File upload error')));
}

// Генерируем новое уникальное имя файла
$ext = pathinfo($_FILES["uploadfile"]["name"], PATHINFO_EXTENSION);
$new_filename = "DOC_" . rand(10, 9999999) . "." . $ext;

// Полный путь к новому файлу
$upload_path = $folder_path . $new_filename;

// Перемещаем загруженный файл в указанную директорию
if (!move_uploaded_file($_FILES["uploadfile"]["tmp_name"], $upload_path)) {
    exit(json_encode(array('success' => false, 'msg' => 'Failed to move uploaded file')));
}

$dataType = isset($_POST['data-type']) ? $_POST['data-type'] : '';  
$_SESSION[$dataType] = $folder_name . '/' . $new_filename;

// Возвращаем успешный ответ с новым именем файла
http_response_code(200); // OK
echo json_encode(array('success' => true, 'nome' => $new_filename, 'type' => $dataType));

?>
