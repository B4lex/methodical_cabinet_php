<?
    global $pdo;
    $teaching_material_types = $pdo->query('SELECT * FROM teaching_material_type')->fetchall();
    $scientific_material_types = $pdo->query('SELECT * FROM scientific_material_type')->fetchall()
?>