<?php


class DBConnection {

    // Setting
    private $hostname = "localhost";
    private $port = 3306;
    private $dbname = "desserthouse_db";
    private $username = "root";
    private $password = "";


    public function connect() {
        #//Connection Connect
        $pdo = new PDO("mysql:host=$this->hostname;port=$this->port;dbname=$this->dbname",$this->username,$this->password);

        // if error occurs, php show
        $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
        return $pdo;
    }
}