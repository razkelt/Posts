<?php





require base_path('Database.php');

$db = new Database();
$id = $_REQUEST['id'];

if (!isset($_SESSION['name'])) {
$post = $db->query("select * from posts where id = :id and folder='Post'", ['id' => $id])->fetch(PDO::FETCH_ASSOC);
view ('post.view.php', [
    'post' => $post 
]);
    die();
}



$post = $db->query("select * from posts where id = :id", ['id' => $id])->fetch(PDO::FETCH_ASSOC);
view ('post.view.php', [
    'post' => $post
]);