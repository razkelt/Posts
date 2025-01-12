<?php

session_start();


// Check if this is a fresh visit (no referer) and not a post/login request
if (!isset($_SERVER['HTTP_REFERER']) && $_SERVER['REQUEST_METHOD'] !== 'POST') {
    $_SESSION = [];
    session_unset();
}


const BASE_PATH = __DIR__.'/../';

require BASE_PATH.'functions.php';
vd($_SESSION);

routetoController();






