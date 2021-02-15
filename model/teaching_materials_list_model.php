<?
    global $pdo;
    $query_result = $pdo->query(
        'SELECT teaching_materials.*, users.full_name as "author_full_name" FROM teaching_materials 
         INNER JOIN users ON teaching_materials.id_user=users.id'
    );
    $t_materials = $query_result->fetchall();
?>