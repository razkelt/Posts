<?php

vd(!isset($_SESSION));


require base_path('Database.php');

$db = new Database();


if ($_SERVER['REQUEST_METHOD'] == "POST" && !isset($method)) {
    $id = $_GET['id'];
    $post = $db->query('select * from posts where id = :id', ['id' => $id])->fetch(PDO::FETCH_ASSOC);

    view('index.view.php', ['post' => $post]);
    die();
    
    
}

$posts = $db->query("SELECT * from posts")->fetchAll(PDO::FETCH_ASSOC);


view('index.view.php');