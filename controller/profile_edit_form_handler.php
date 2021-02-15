<?php
    $MAX_PHOTO_SIZE = 5 * 1024 * 1024;
    $MEDIA_DIR = '/media/';
    
    if($_POST) {
        $success = true;
        $user_full_name = $_POST['full_name'];
        $id_qualification = $_POST['qualification'];
        $id_rank = $_POST['rank'];
        $photo_file = $_FILES['photo'];
        if (file_exists($photo_file['tmp_name'])) {
            if (getimagesize($photo_file['tmp_name']) !== false && $photo_file['size'] < $MAX_PHOTO_SIZE) {
                $rel_upload_dir = $MEDIA_DIR.$_SESSION['user_id'].'/'; 
                if(!file_exists($_SERVER['DOCUMENT_ROOT'].$rel_upload_dir)) {
                    mkdir($_SERVER['DOCUMENT_ROOT'].$rel_upload_dir);
                }
                $img_ext = pathinfo($photo_file['name'], PATHINFO_EXTENSION); 
                $img_destination = $rel_upload_dir.'profile_image.'.$img_ext;
                move_uploaded_file($photo_file['tmp_name'], $_SERVER['DOCUMENT_ROOT'].$img_destination);
            } else {
                $success = false;
                $error_message = 'Ошибка. Размер фото не должен превышать 5 Мб.';
            }
        }
        if ($success) {
            require 'model/profile_edit_model.php';
        }
    }
?>