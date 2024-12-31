<?php

Class Database {

    public $connection;

    public function __construct()
    {
        $this->connection = new PDO("mysql:dbname=posts;host=localhost;port=3306;user=root");
    }
    
    public function query($query, $params = []) {
        $statement = $this->connection->prepare($query);
        $statement->execute($params);
        
        return $statement;
    }



}