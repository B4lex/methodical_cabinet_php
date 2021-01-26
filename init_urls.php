<?php
    require_once 'router.php';

    $router = new Router('templates/page_not_found.php');

    $router->add('^/test$', function() {
        require 'templates/test.php';
    });

    $router->add('^/$', function() {
        require 'templates/main_page.php';
    });

    $router->start();

?>
