<?
    global $pdo;
    $query_result = $pdo->query('SELECT * FROM scientific_materials');
    $s_materials = $query_result->fetchall();
?>