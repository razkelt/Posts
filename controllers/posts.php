<?php


if (!isset($_SESSION['name'])) {
    echo("Session doesn't exist, create one.");
    require base_path('controllers/login.php');
    die();
}

require base_path('Database.php');

$db = new Database();
$posts = $db->query("SELECT * from posts")->fetchAll(PDO::FETCH_ASSOC);


view('posts.view.php', 
['posts' => $posts]);

?>