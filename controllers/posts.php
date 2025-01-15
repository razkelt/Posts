<?php

require base_path('Database.php');

$db = new Database();





if (!isset($_SESSION['name'])) {
    $posts = $db->query("SELECT * from posts WHERE folder='Post'")->fetchAll(PDO::FETCH_ASSOC);
    view('posts.view.php', 
    ['posts' => $posts]);
    die();
}


$posts = $db->query("SELECT * from posts")->fetchAll(PDO::FETCH_ASSOC);

view('posts.view.php', 
['posts' => $posts]);

?>