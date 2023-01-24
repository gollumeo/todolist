<?php

namespace App\Core;

use App\config\Config as CONFIG;
use PDO;
use PDOException;

class Database
{
    private static $instance;
    private $conn;

    private function __construct()
    {
        try {
            $this->conn = new PDO('mysql:host=' . CONFIG::$DB_HOST . ';dbname=' . CONFIG::$DB_NAME, CONFIG::$DB_USER, CONFIG::$DB_PASS);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Connection Error: ' . $e->getMessage();
        }
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function getConnection()
    {
        return $this->conn;
    }

    public function close()
    {
        $this->conn = null;
    }
}
