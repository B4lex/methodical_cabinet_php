<?
    $table_name = 'users';
    $fields = 'full_name';
    global $pdo;
    $query = "INSERT INTO $table_name ($fields) VALUES (:full_name)";
    $stmt = $pdo->prepare($query);
    $params = array(
        ':full_name' => $user_full_name
    );
    $stmt->execute($params);
?>