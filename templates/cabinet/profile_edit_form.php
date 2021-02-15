<?
    $title = 'Общая информация';
    $sub_title = 'Редактирование личной информации';
    ob_start();
    require 'controller/profile_edit_form_handler.php';
    require 'model/current_user_data.php';
    require 'model/teacher_options.php';
?>
<section class="dynamic-content">
    <? if (isset($error_message)): ?>
    <div class="alert alert-danger mb-1" role="alert">
        <?=$error_message ?>
    </div>
    <? endif ?>
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
        <p>
            <label for="qualification" class="mb-2">Квалификация: </label>
            <select name="qualification" class="form-select">
                <? foreach ($qualifications as $qual): ?>
                <option value="<?= $qual['id'] ?>"
                    <?= $current_user_data['id_qualification'] === $qual['id'] ? 'selected' : '' ?>><?= $qual['name'] ?>
                </option>
                <? endforeach ?>
            </select>
        </p>
        <p>
            <label for="rank" class="mb-2">Педагогическое звание: </label>
            <select name="rank" class="form-select">
                <? foreach ($ranks as $rank): ?>
                <option value="<?= $rank['id'] ?>"
                    <?= $current_user_data['id_rank'] === $rank['id'] ? 'selected' : '' ?>><?= $rank['name'] ?>
                </option>
                <? endforeach ?>
            </select>
        </p>
        <p class="form-floating">
            <button type="submit" class="btn btn-primary mb-1">Применить изменения</button>
    </form>
</section>
<?
    $content = ob_get_clean();
    require 'templates/cabinet/index.php';
?>