<?php 


require base_path('Database.php');

$db = new Database();
$id = $_REQUEST['id'];


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db->query('delete from posts where id = :id', ['id' => $id]);
    header('location: /posts');
    die();

}



?>
