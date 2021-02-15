<?
    if ($_POST) {
        $user_email = $_POST['email'];
        // $user_password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $user_password_hash = $_POST['password'];
        require 'model/login_model.php';
        if ($authenticated) {
            $_SESSION['authorized'] = true;
            $_SESSION['user_id'] = $user_id;
            header('Location: /cabinet');
        } else {
            $error_message = 'Неверный логин или пароль.';
        }
    }
?>
