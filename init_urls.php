<?php
    require_once 'router.php';

    $router = new Router('templates/page_not_found.php');

    $router->add('^/cabinet$', function() {
        require 'templates/cabinet/index.php';
    });

    $router->add('^/$', function() {
        require 'templates/main_page.php';
    });

    $router->add('^/edit_profile$', function() {
        require 'templates/cabinet/profile_edit_form.php';
    });

    $router->start();

?>
