<?php

class Db {
    private $host = ""; //add here the host name (localhost)
    private $user = ""; //mysql username
    private $pwd = "";  //mysql password
    private $dbName = "";   //database name

    protected function connect() {
        $dsn = 'mysql:host='.$this->host.';dbname='.$this->dbName;
        $pdo = new PDO($dsn, $this->user, $this->pwd);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}