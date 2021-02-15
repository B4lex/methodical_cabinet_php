<?
    $table_name = 'users';
    $fields_to_update = array(
        'full_name', 'photo_path', 
        'id_qualification', 'id_rank'
    );
    $kv_arr = array();

    $params = array(
        ':full_name' => $user_full_name,
        ':id_qualification' => $id_qualification,
        ':id_rank' => $id_rank
    );
    if (isset($img_destination)) {
        $fields_to_update[] = 'photo_path';
        $params[':photo_path'] = $img_destination;
    }

    foreach ($fields_to_update as $field_name) {
        if (isset($params[":$field_name"])) {
            $kv_arr[] =  "$field_name=:$field_name";
        }
    }

    global $pdo;
    $user_id = $_SESSION['user_id'];
    $query = "UPDATE $table_name SET ".implode(', ', $kv_arr)." WHERE id=$user_id";
    $stmt = $pdo->prepare($query);
    $stmt->execute($params);
?>