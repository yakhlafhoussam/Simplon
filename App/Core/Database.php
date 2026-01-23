<?php

namespace App\Core;

use PDO;
use PDOException;

class DataBase
{
    private $conn;
    private static $instance;
    private function __construct()
    {
        $servername = 'localhost';
        $port = 5432;
        $dbname = 'simplon';
        $username = 'postgres';
        $password = 'houssam.123.321';
        $dsn = "pgsql:host={$servername};port={$port};dbname={$dbname}";
        try {
            $this->conn = new PDO($dsn, $username, $password, [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);
            $this->conn->exec("SET NAMES 'UTF8'");
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }
    public static function get_instance()
    {
        if (self::$instance == null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function insertAndGetId($query, $params = [])
    {
        $stmt = $this->conn->prepare($query);
        $stmt->execute($params);
        return $stmt->fetchColumn();
    }


    public function query($query, $params = [])
    {
        $stmt = $this->conn->prepare($query);
        $stmt->execute($params);
        if (str_starts_with(strtolower(trim($query)), 'select')) {
            $result = $stmt->fetchAll();
            return $result;
        }
    }
}
