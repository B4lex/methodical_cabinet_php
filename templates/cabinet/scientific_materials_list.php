<?
    ob_start();
    $title = 'Научные материалы';
    $sub_title = 'Научные материалы';
    require 'model/scientific_materials_list_model.php'
?>
    <section class='dynamic-content'>
        <? foreach ($s_materials as $material): ?>
            <div class='material-unit'>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?=$material['title']?></h5>
                        <h6 class="card-title">Автор материала: <?=$material['author_full_name']?></h6>
                        <p class="card-text"><?=$material['description']?></p>
                        <a href="<?=$material['attached_file_link']?>" class="card-link">Ссылка на прикреплённый файл</a>
                    </div>
                </div>
            </div>
        <? endforeach ?>
    </section>
<?
    $content = ob_get_clean();
    require 'templates/cabinet/index.php';
?> 