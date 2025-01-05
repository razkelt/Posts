<?php

require base_path('Database.php');


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $db=new Database();
    $username = $_POST['username'];

    $user = $db->query('select * from records where username = :username', ['username' => $username])->fetch(PDO::FETCH_ASSOC);
    $posts = $db->query('select * from posts')->fetchAll(PDO::FETCH_ASSOC);
        
    if (password_verify($_POST['password'], $user['password'])) {
;
        session_regenerate_id(true);
        $_SESSION['name'] = 'mohit';

        header("location: /posts");
        die();
    }

    

}
view ('login.view.php');