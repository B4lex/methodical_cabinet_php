<? 
    require_once 'model/current_user_data.php';
    if (!$current_user_data['is_admin']):
        header('HTTP/1.1 404 Not Found');
        require 'templates/page_not_found.php';
    else:
        require 'controller/user_creation_form_handler.php';
        ob_start();
        $title = 'Создание пользователя';
        $sub_title = 'Создание пользователя';
?>
<section class="dynamic-content m-3">
    <? if (isset($success_message)): ?>
        <div class="alert alert-success mb-1" role="alert">
            <?=$success_message ?>
        </div>
    <? endif ?>
    <? if (isset($error_message)): ?>
        <div class="alert alert-danger mb-1" role="alert">
            <?=$error_message ?>
        </div>
    <? endif ?>
    <form method="POST">
        <p>
            <input type="email" name="email" placeholder="Электронная почта" required>
        </p>
        <p>
            <input type="password" name="password" placeholder="Пароль" required>
        </p>
        <p>
            <label for="is_admin">Администратор?</label>
            <input type="checkbox" name="is_admin">
        </p>
        <button class="btn btn-primary">Создать</button>
    </form>
</section>
<?
        $content = ob_get_clean();
        require 'templates/cabinet/index.php';
    endif;
?>