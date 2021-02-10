<?
    global $pdo;
    $stmt = $pdo->prepare('INSERT INTO scientific_materials (title, description, attached_file_link)
                           VALUES (:title, :description, :attached_file_path)');
    $params = array(
        ':title' => $m_title,
        ':description' => $m_description,
        ':attached_file_path' => $attached_file_path
    );
    try {
        $stmt->execute($params);
    } catch(PDOExcetion $e) {
        $error_message = 'Неудалось сохранить запись.';
    }
?>