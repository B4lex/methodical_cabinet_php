<?php
    $host = '127.0.0.1';
    $db_name = 'mcab_db';
    $user = 'mysql';
    $password = 'mysql';
    $charset = 'utf8';

    $dsn = "mysql:host=$host;dbname=$db_name;charset=$charset";

    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => true,
    ];

    $pdo = new PDO($dsn, $user, $password, $options);
?>