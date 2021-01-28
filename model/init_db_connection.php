<?php
    $host = 'localhost';
    $db_name = 'mcab_db';
    $user = 'mysql';
    $password = 'mysql';
    $charset = 'utf8mb4';

    $dsn = 'mysql:host=$host;dbname=$db_name;charset=$charset';

    $pdo = new PDO($dsn, $user, $password);
?>