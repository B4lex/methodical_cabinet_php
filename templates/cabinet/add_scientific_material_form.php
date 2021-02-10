<?
    ob_start();
    $title = 'Добавление научного материала';
    $sub_title = 'Добавление научного материала';
    require $_SERVER['DOCUMENT_ROOT'].'/controller/add_teaching_material_form_handler.php';
?>
<section class="dynamic-content">
    <? if (isset($error_message)): ?>
        <div class="alert alert-danger mb-1" role="alert">
            <?=$error_message ?>
        </div>
    <? endif ?>
    <form method="POST" enctype="multipart/form-data">
        <p class="form-floating">
            <label for="title">Название: </label>
            <input type="text" name="title" class="form-control">
        </p>
        <p class="form-floating">
            <label for="desription">Описание: </label>
            <input type="text" name="description" class="form-control">
        </p>
        <p>
            <label for="attached_file">Файл: </label>
            <input type="file" name="attached_file" class="form-control">
        </p>
        <button class="btn btn-primary">Добавить</button>
    </form>
</section>
<?
    $content = ob_get_clean();
    require 'templates/cabinet/index.php'
?>