<?
    global $pdo;
    $query = 'INSERT INTO teaching_materials (title, description, attached_file_link, id_user)
              VALUES (:title, :description, :attached_file_path, :id_user)';
    $stmt = $pdo->prepare($query);
    echo var_dump($stmt);
    $params = array(
        ':title' => $m_title,
        ':description' => $m_description,
        ':attached_file_path' => $attached_file_path,
        ':id_user' => $_SESSION['user_id']
    );
    try {
        $stmt->execute($params);
    } catch(PDOExcetion $e) {
        $error_message = 'Неудалось сохранить запись.';
    }
?>