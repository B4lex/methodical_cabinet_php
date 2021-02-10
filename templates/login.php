<?  
    if (isset($_SESSION['authorized'])) {
        header('Location: /cabinet');
    }
    require 'controller/login_form_handler.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <title>Login</title>
</head>
<body>
    <? if (isset($error_message)): ?>
        <div class="alert alert-danger mb-1" role="alert">
            <?=$error_message ?>
        </div>
    <? endif ?>
    <form method="POST">
        <p>
            <input type="email" name='email' placeholder="Электронная почта" required>
        </p>
        <p>
            <input type="password" name='password' placeholder="Пароль" required>
        </p>
        <button type="submit" class='btn btn-primary'>Войти</button>
    </form>
</body>
</html>