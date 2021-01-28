<? ob_start() ?>
<section class="dynamic-content">
    <form method="POST" enctype="multipart/form-data">
        <p class="form-floating">
            <label for="full_name">ФИО: </label>
            <input type="text" name="full_name" class="form-control">
        </p>
        <p>
            <label for="photo">Фото: </label>
            <input type="file" name="photo"class="form-control">
        </p>
        <p class="form-floating">
            <label for="qualification_category">Квалификация: </label>
            <input type="text" name="qualification_category" class="form-control">
        </p>
        <p class="form-floating">
            <label for="teaching_rank">Категория: </label>
            <input type="text" name="teaching_rank" class="form-control">
        </p>
        <p class="form-floating">
            <label for="experience">Опыт: </label>
            <input type="number" name="experience" class="form-control">
        </p>
        <p class="form-floating">
            <label for="subject">Предмет: </label>
            <input type="text" name="subject" class="form-control">
        </p>
        <p class="form-floating">
            <label for="awards">Награды: </label>
            <input type="text" name="awards" class="form-control">
        </p>
        <p class="form-floating">
            <label for="social_links">Социальные сети: </label>
            <input type="text" name="social_links" class="form-control">
        </p>
        <p class="form-floating">
            <label for="yt_link">YouTube: </label>
            <input type="text" name="yt_link" class="form-control">
        </p>
    </form>
</section>
<?
    $content = ob_get_clean();
    $title = 'Редактирование личной информации';
    require 'templates/cabinet/index.php';
?>