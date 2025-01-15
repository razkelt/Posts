<?php

//i need the request uri, method from server side
//i need request uri, method and associated controller from my side
//i route


//class function/method for GET POST PATCH DELETE to add method attribute for routing

class Router {
    
    protected $routes = [];

    public function add($uri, $controller, $method) {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method,
            'auth' => null
        ];
        //vd($this);
        return $this;
    }

    public function get($uri, $controller) {
       return $this->add($uri, $controller, 'GET');
    }

    public function post($uri, $controller) {
        return $this->add($uri, $controller, 'POST');
    }

    public function patch($uri, $controller) {
        return $this->add($uri, $controller, 'PATCH');
    }

    public function delete($uri, $controller) {
        return $this->add($uri, $controller, 'DELETE');
    }

    public function auth() {
        if (!isset($_SESSION['name'])) {
            (($this->routes)[(array_key_last($this->routes))])['auth']='auth';
            return $this;
        }
        else {
            return $this;
        }
    }
    

    public function route($uri, $method=[]) {
        foreach (($this->routes) as $route) {
            if ($route['uri'] == $uri && $route['method'] == $method && !isset($route['auth'])) {
                require $route['controller'];
                die();
            }
        }
        
            require base_path('controllers/login.php');
        }
        } 
    




