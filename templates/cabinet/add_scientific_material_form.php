<?
    ob_start();
    $title = 'Добавление научного материала';
    $sub_title = 'Добавление научного материала';
    require $_SERVER['DOCUMENT_ROOT'].'/controller/add_scientific_material_form_handler.php';
    require 'model/material_types.php';
?>
<section class="dynamic-content">
    <? if (isset($error_message)): ?>
    <div class="alert alert-danger mb-1" role="alert">
        <?=$error_message ?>
    </div>
    <? endif ?>
    <form method="POST" enctype="multipart/form-data">
        <p class="form-floating">
            <input type="text" name="title" class="form-control" required>
            <label for="title">Название: </label>
        </p>
        <p class="form-floating">
            <input type="text" name="description" class="form-control" required>
            <label for="desription">Описание: </label>
        </p>
        <p>
            <label for="type">Тип: </label>
            <select name="type" class="form-select">
                <? foreach ($scientific_material_types as $type): ?>
                <option value="<?= $type['id'] ?>"><?= $type['name'] ?></option>
                <? endforeach ?>
            </select>
        </p>
        <p>
            <label for="attached_file">Файл: </label>
            <input type="file" name="attached_file" class="form-control" required>
        </p>
        <button class="btn btn-primary">Добавить</button>
    </form>
</section>
<?
    $content = ob_get_clean();
    require 'templates/cabinet/index.php'
?>