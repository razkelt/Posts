<?php

require base_path('Database.php');

$db = new Database();
$posts = $db->query("SELECT * from posts")->fetchAll(PDO::FETCH_ASSOC);


view('posts.view.php', 
['posts' => $posts]);

?>