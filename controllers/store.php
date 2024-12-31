<?php

require base_path('Database.php');

$db = new Database();

if ($_SERVER['REQUEST_METHOD'] == "POST" && !isset($method)) {
    $body= $_REQUEST['post'];
    $title= $_REQUEST['title'];
    
    
    $posts = $db->query('INSERT INTO `posts` (`title`, `body`) VALUES (:title, :body)', 
    [':title' => $title,
    ':body' => $body]);

    header('location: /posts');
    die();
}


