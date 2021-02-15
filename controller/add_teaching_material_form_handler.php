<?
    require 'utils/files.php';
    $MAX_FILE_SIZE = 10 * 1024 * 1024;
    $MEDIA_DIR = '/media/';

    if ($_POST) {
        $file = $_FILES['attached_file'];
        if ($file['size'] < $MAX_FILE_SIZE) {
            $m_title = $_POST['title'];
            $m_description = $_POST['description'];
            $m_id_type = $_POST['type'];
            $expected_file_path = $MEDIA_DIR.$_SESSION['user_id'].'/teaching_materials/'.$file['name'];
            $attached_file_path = save_file($file, $expected_file_path);
            require 'model/add_teaching_material_model.php';
            
        } else {
            $error_message = "Файл слишком велик. Максимальный размер 10 Мб.";
        }
    }
?>