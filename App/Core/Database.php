<?php

namespace App\Core;
use PDO;
use PDOException;

class DataBase {
    private $connection;
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
            $this->connection = new PDO($dsn, $username, $password, [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);
            $this->connection->exec("SET NAMES 'UTF8'");
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }
    public static function get_instance(){
        if(self::$instance==null){
            self::$instance = new self();
        }
        return self::$instance;
    }
}