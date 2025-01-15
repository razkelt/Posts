<?php

require base_path('Database.php');

$db = new Database();


$body= $_REQUEST['body'];
$title= $_REQUEST['title'];
$folder=$_REQUEST['folder'];



if (str_contains($body, 'buhbye')) {
    $posts = $db->query('INSERT INTO `posts` (`title`, `body`, `folder`) VALUES (:title, :body, :folder)', 
    [':title' => $title,
    ':body' => $body,
    ':folder' => $folder]);

    header('location: /');
    die();

}

header('location: /');

