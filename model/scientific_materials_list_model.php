<?
    global $pdo;
    $query_result = $pdo->query(
        'SELECT scientific_materials.*, users.full_name as "author_full_name" FROM scientific_materials 
         INNER JOIN users ON scientific_materials.id_user=users.id'
    );
    $s_materials = $query_result->fetchall();
?>