<? 
    require_once 'model/current_user_data.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="templates/cabinet/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;1,300&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <title><?=(isset($title) ? $title : 'Личный кабинет')?></title>
</head>


<body>

    <div class="page-wrapper">

        <div class="container">
            <header class="header">
                <div class="head-upper">
                    <img src="<?= $current_user_data['photo_path'] ?>" alt="">
                    <h1 class="title">
                        <?= $current_user_data['full_name'] ?>
                    </h1>
                </div>
                <div class="head-lower">
                    <h1 class="title"><?= $current_user_data['full_name'] ?></h1>
                    <p class="head-info"><?= $current_user_data['qualification_category'] ?></p>

                </div>
            </header>
            <div class="page-content">
                <div class="side-bar">
                    <ul>
                        <li class="side-bar-menu" id="btn"><a href="/edit_profile">Общая информация</a>
                        </li>
                        <li class="side-bar-menu" id="btn"><a href="/teaching_materials"> Учебные материлы</a>
                        </li>
                        <li class="side-bar-menu" id="btn"><a href="/scientific_materials"> Публикации</a>
                        </li>
                        <li class="side-bar-menu" id="btn"><a href="/add_teaching_material"> Добавить учебный материал</a>
                        </li>
                        <li class="side-bar-menu" id="btn"><a href="/add_scientific_material"> Добавить публикацию</a></li>

                    </ul>
                </div>
                <div class="news-line">
                    <div class="news-title">
                        <h1 class="title">
                            <?= $sub_title ?>
                        </h1>
                    </div>
                    <?= $content ?>
                </div>
            </div>
        </div>

    </div>
    <div class="mobile-nav">
        <ul>
            <li class="mobile-nav-link"><button>+</button></li>
            <li class="mobile-nav-link"><button>+</button></li>
            <li class="mobile-nav-link"><button>+</button></li>
            <li class="mobile-nav-link"><button>+</button></li>
        </ul>
    </div>
</body>

</html>