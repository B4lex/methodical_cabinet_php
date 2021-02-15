<?
    global $pdo;
    $authenticated = false;
    $user_id = null;
    if (isset($user_email) && isset($user_password_hash)) {
        $q_result = $pdo->query("SELECT id FROM users 
                                 WHERE mail='${user_email}' AND password_hash='${user_password_hash}'");
        $existing_user = $q_result->fetch();                     
        if (!empty($existing_user)) {
            $authenticated = true;
            $user_id = $existing_user['id'];
        }
    }
?>