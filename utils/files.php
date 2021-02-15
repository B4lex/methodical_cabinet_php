<?
    function save_file($file, $destination, $filename_counter=0) {
        # destination is relative path
        if (file_exists($destination)) {
            save_file($file, $destination, ++$filename_counter);
        } else {
            if ($filename_counter !== 0) {
                $destination .= '_'.$filename_counter;
            }
            move_uploaded_file($file['tmp_name'], $_SERVER['DOCUMENT_ROOT'].$destination);
            return $destination;
        }
    }

    function init_user_folders($user_id) {
        $MEDIA_ROOT = $_SERVER['DOCUMENT_ROOT'].'/media/';
        $paths = [
            $MEDIA_ROOT.$user_id, 
            $MEDIA_ROOT.$user_id.'/teaching_materials', 
            $MEDIA_ROOT.$user_id.'/scientific_materials'
        ];
        foreach ($paths as $path) {
            if (!is_dir($path)) {
                mkdir($path);
            }
        }
    }
?>