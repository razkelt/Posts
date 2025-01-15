<?php



$router= new Router;

$router->get('/', 'controllers/index.php');
$router->get('/edit', 'controllers/edit.php');
$router->post('/login', 'controllers/login.php');
$router->get('/logout', 'controllers/logout.php');
$router->get('/posts', 'controllers/posts.php');
$router->get('/post', 'controllers/post.php');

$router->post('/store', 'controllers/store.php');
$router->delete('/delete', 'controllers/delete.php')->auth();
$router->patch('/edit', 'controllers/edit.php')->auth();
$router->post('/edit', 'controllers/edit.php')->auth();





