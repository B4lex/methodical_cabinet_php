<?
    global $pdo;
    $query_result = $pdo->query('SELECT * FROM teaching_materials');
    $t_materials = $query_result->fetchall();
?>