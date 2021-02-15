<?
    global $pdo;
    $q_result = $pdo->query("SELECT * FROM users WHERE mail='$user_email'");
    if ($q_result->fetch() === false) {
        $stmt = $pdo->prepare("INSERT INTO users (mail, password_hash, is_admin) VALUES (?, ?, ?)");
        $stmt->execute([$user_email, $user_password_hash, $user_is_admin]);
        $user_id = $pdo->query("SELECT LAST_INSERT_ID()")->fetch()['LAST_INSERT_ID()'];
        require 'utils/files.php';
        init_user_folders($user_id);
        $success_message = "Пользователь с электронной почтой $user_email успешно создан.";
    } else {
        $error_message = 'Пользователь с таким электронным адресом уже существует.';
    }
?>