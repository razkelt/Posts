<?php

require base_path('Database.php');



$db=new Database();

$username = $_POST['username'];

$user = $db->query('select * from records where username = :username', ['username' => $username])->fetch(PDO::FETCH_ASSOC);

if (password_verify($_POST['password'], $user['password'])) {
    session_start();
    $_SESSION['name'] = 'mohit';
    header('location: /posts');
}

view ('login.view.php');