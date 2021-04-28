<?php

class Db {
    private $host = "127.0.0.1:3306";
    private $user = "root";
    private $pwd = "gabi0637336787";
    private $dbName = "first";

    protected function connect() {
        $dsn = 'mysql:host='.$this->host.';dbname='.$this->dbName;
        $pdo = new PDO($dsn, $this->user, $this->pwd);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}