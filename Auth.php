<?php

//get the status of current login
class Auth {
    public function auth() {
        if (!isset($_SESSION['name'])) {
            header('location: /login');
        }
    }
}
//before routing, verify if login required
