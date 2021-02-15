<? 
    if ($_POST) {
        $user_email = $_POST['email'];
        $user_password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $user_is_admin = isset($_POST['is_admin']) ? 1 : 0;
        require 'model/user_creation_model.php';
    }
?>