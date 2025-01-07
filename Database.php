<?php

class Database{

    public $pdo;
    
    public function __construct($config){
        $dsn = "mysql:" . http_build_query($config, "", ";" );
        $this->pdo = new PDO($dsn);
        $this->pdo->setAttribute(19,2);
    }

    public function query($sql, $params){
        // 1. sagatavot vaicajumu (statement)
        $statement = $this->pdo->prepare($sql);
        // 2. Izpildit statement
        $statement->execute($params);
        // 3. dabut rezultatu
        return $statement;
    }
}