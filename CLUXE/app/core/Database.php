<?php
include '../../app/views/contact-us.php';
include '../../app/views/our-services.php';

class Database {
    private $serverName = "localhost";
    private $username = "root";
    private $password = "root";
    private $dbname = "services";
    private $conn;

    // Get the database connection

    public function connect()
    {
//        $this->conn = null;
//
//        try{
//            $this->conn = new PDO("mysql:host=" . $this->serverName . ";dbname=" . $this->dbname, $this->username, $this->password);
//            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//        } catch(PDOException $exception){
//            echo "Connection error: " . $exception->getMessage();
//        }
//
//        return $this->conn;
    }



}
