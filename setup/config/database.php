<?php

namespace setup\config;

use Dotenv\Dotenv;
// library PDO mysql
use PDO;
use PDOException;

class database {
    private PDO $pdo;

    public function __construct()
    {
         Dotenv::createImmutable(__DIR__.'/../..')->load();

         $port = $_ENV['DB_PORT'];
         $database = $_ENV['DB_DATABASE'];
         $username = $_ENV['DB_USERNAME'];
         $password = $_ENV['DB_PASSWORD'];
    
        try {
            $this->pdo = new PDO("mysql:host=" . ($_ENV['DB_HOST']) . ";port=$port;dbname=$database", $username, $password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Cant connect to database " . $e;
        }

        
    }

    public function getPDO(): PDO
    {
        return $this->pdo;
    }
}


