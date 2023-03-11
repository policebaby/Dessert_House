<?php


class DBConnection {

    // Setting
    private $hostname = "localhost";
    private $port = 3307;
    private $dbname = "";
    private $username = "root";
    private $password = "";


    public function connect() {
        #//Connection Connect
        $pdo = new PDO(
            "mysql:host=$this->hostname;
            port = $this->port;
        dbname = $this->dbname",
        $this->username,
            $this->password
        );

        // if error occurs, php show
        $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
        return $pdo;
    }
}