<?php 


require base_path('Database.php');

$db = new Database();
$id = $_REQUEST['id'];



$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

if ($method == 'POST') {
    $post = $db->query('select * from posts where id = :id', ['id' => $id])->fetch(PDO::FETCH_ASSOC);
    
    require base_path('views/edit.view.php', [
        'post' => $post,
        'id' => $id
    ]); 

}

elseif ($method == 'PATCH') {
    $title = $_POST['title'];
    $body = $_POST['body'];
    
    $db->query('UPDATE posts SET title=:title, body=:body where id=:id', [
        'title' => $title,
        'body' => $body,
        'id' => $id
    ]);
    
    header('location: /posts');
}




?>