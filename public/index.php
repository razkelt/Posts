<?php

session_start();


// Check if this is a fresh visit (no referer) and not a post/login request
if (!isset($_SERVER['HTTP_REFERER']) && $_SERVER['REQUEST_METHOD'] !== 'POST') {
    $_SESSION = [];
    session_unset();
}


const BASE_PATH = __DIR__.'/../';

require BASE_PATH.'functions.php';
require base_path('Router.php');
//vd($_SESSION);

$uri = parse_url(($_SERVER['REQUEST_URI']))['path'];
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

require base_path('routes.php');
$router->route($uri, $method);







