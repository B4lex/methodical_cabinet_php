<?
    $MAX_FILE_SIZE = 10 * 1024 * 1024;
    $MEDIA_DIR = '/media/';

    if ($_POST) {
        $file = $_FILES['attached_file'];
        if ($file['size'] < $MAX_FILE_SIZE) {
            $m_title = $_POST['title'];
            $m_description = $_POST['description'];
            $attached_file_path = $MEDIA_DIR.$file['name'];
            require 'model/add_scientific_material_model.php';
            move_uploaded_file($file['tmp_name'], $_SERVER['DOCUMENT_ROOT'].$attached_file_path);
        } else {
            $error_message = "Файл слишком велик. Максимальный размер 10 Мб.";
        }
    }
?>