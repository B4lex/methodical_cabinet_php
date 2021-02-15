<?
    global $pdo;
    $ranks = $pdo->query('SELECT * FROM ranks')->fetchall();
    $qualifications = $pdo->query('SELECT * FROM qualifications')->fetchall();
?>