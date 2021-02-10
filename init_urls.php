<?php
    require_once 'router.php';
    require 'utils/access_handler.php';

    $router = new Router('templates/page_not_found.php');

    $router->add('^/$', function() {
        require 'templates/main_page.php';
    });

    $router->add('^/login$', function() {
        require 'templates/login.php';
    });

    $router->add('^/cabinet$', function() {
        require_authorization('templates/cabinet/index.php');
    });

    $router->add('^/edit_profile$', function() {
        require_authorization('templates/cabinet/profile_edit_form.php');
    });

    $router->add('^/add_teaching_material$', function() {
        require_authorization( 'templates/cabinet/add_teaching_material_form.php');
    });

    $router->add('^/teaching_materials$', function() {
        require_authorization('templates/cabinet/teaching_materials_list.php');
    });

    $router->add('^/add_scientific_material$', function() {
        require_authorization('templates/cabinet/add_scientific_material_form.php');
    });

    $router->add('^/scientific_materials$', function() {
        require_authorization('templates/cabinet/scientific_materials_list.php');
    });


    $router->start();

?>
