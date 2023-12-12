<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '../Config/config.php';
class Clientes{

    private $hostname;
    private $username;
    private $password;
    private $dbname;
    private $conn;

    public function __construct(){
        $this->hostname = HOST_NAME;
        $this->username = USER_NAME;
        $this->password = PASSWORD;
        $this->dbname = DB_NAME;

        $this->conn = new \PDO("mysql:host=$this->hostname;dbname=$this->dbname", $this->username, $this->password);
    }

    function all(){
        $query = "SELECT * FROM clientes";
        $stmt = $this->conn->prepare($query);

        try {
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}