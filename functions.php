<?php



function routetoController() {
    $routes = [
        '/' => 'controllers/index.php',
        '/posts' => 'controllers/posts.php',
        '/post' => 'controllers/post.php',
        '/store' => 'controllers/store.php',
        '/delete' => 'controllers/delete.php',
        '/edit' => 'controllers/edit.php',
        
    ];
    
    
    $uri = parse_url(($_SERVER['REQUEST_URI']))['path'];

    if (array_key_exists($uri, $routes)) {
        require ($routes[$uri]);
    }

    else {
        require 'error.php';
    }
}

function base_path($path) {
    return BASE_PATH.$path;
}

function view($path, $attributes = []) {
    extract($attributes);
    require BASE_PATH.'views/'.$path;
}


function dd($var) {
    echo('<pre>');  
    echo(var_dump($var));  
    echo('</pre>');

    die();
}

function vd($var) {
    echo('<pre>');  
    echo(var_dump($var));  
    echo('</pre>');
}
