<?
    $title = 'Общая информация';
    $sub_title = 'Редактирование личной информации';
    ob_start();
    require 'controller/profile_edit_form_handler.php';
    require 'model/current_user_data.php';
?>
<section class="dynamic-content">
    <form method="POST" enctype="multipart/form-data">
        <p class="form-floating">
            <input type="text" name="full_name" class="form-control" value="<?= $current_user_data['full_name'] ?>">
            <label for="full_name">ФИО: </label>
        </p>
        <p>
            <label for="photo">Фото: </label><br>
            <img src=<?= $current_user_data['photo_path'] ?> style="height: 200px;" class="m-2">
            <input type="file" name="photo" class="form-control">
        </p>
        <p class="form-floating">
            <input type="text" name="qualification_category" class="form-control" value=<?= $current_user_data['qualification'] ?>>
            <label for="qualification_category">Квалификация: </label>
        </p>
        <p class="form-floating">
            <input type="text" name="teaching_rank" class="form-control" value=<?= $current_user_data['category'] ?>>
            <label for="teaching_rank">Категория: </label>
        </p>
        <p class="form-floating">
        <button type="submit" class="btn btn-primary mb-1">Применить изменения</button>
    </form>
</section>
<?
    $content = ob_get_clean();
    require 'templates/cabinet/index.php';
?>