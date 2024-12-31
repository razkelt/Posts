<?php

class Container {
    public $bindings = [];

    public function bind($container, $function) {
        $this->bindings[$container]= $function;
    }

    public function resolve($contain) {
        if (array_key_exists($contain,[$this->bindings])) {
                return call_user_func($this->bindings[$contain]);
        }
    }

}



?>