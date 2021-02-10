<?
    global $pdo;
    $query = 'SELECT * FROM users WHERE id='.$_SESSION['user_id'];
    $current_user_data = $pdo->query($query)->fetch();
?>