<?php
namespace App\Core;
use PDO;
use PDOException;

class Database {
    private static $instance;
    private $conn;

    private function __construct() {            
        try {
            $this->conn = new PDO('mysql:host=' . 'db-todolist.cld0mu6jdw4b.eu-west-3.rds.amazonaws.com' . ';dbname=' . 'todolist', 'admin', 'K35zNf7ACwwDSUcvh6F5');
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo 'Connection Error: ' . $e->getMessage();
        }
    }

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->conn;
    }

    public function close() {
        $this->conn = null;
    }
}
