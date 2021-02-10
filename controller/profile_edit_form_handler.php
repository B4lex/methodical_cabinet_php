<?php
    $MAX_PHOTO_SIZE = 5 * 1024 * 1024;
    if($_POST) {
        $user_full_name = $_POST['full_name'];
        $photo_file = $_FILES['photo'];
        if (isset($photo_file) && $photo_file['size'] < $MAX_PHOTO_SIZE) {
            
        } else {
            $error_message = 'Размер фото не должен превышать 5 Мб.';
        }
        require 'model/profile_edit_model.php';
    }
?>