<?php





require base_path('Database.php');

$db = new Database();
$id = $_REQUEST['id'];
$post = $db->query('select * from posts where id = :id', ['id' => $id])->fetch(PDO::FETCH_ASSOC);




// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $db->query('delete from posts where id = :id', ['id' => $id]);
//     header('location: /posts');
//     die();

// }


view ('post.view.php', [
    'post' => $post
]);