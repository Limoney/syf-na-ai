<?php

namespace App\Utility;

class Database
{
    private static $servername = "db.zut.edu.pl:3306";
    private static $username = "XXX";
    private static $password = "XXX";
    public static function getConnection(): \PDO
    {
        try 
        {
            $connection = new \PDO("mysql:host=".self::$servername.";dbname=".self::$username.";charset=utf8mb4", self::$username, self::$password);
            $connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $connection->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_OBJ);
            return $connection;
        }
        catch(\PDOException $e) 
        {
            echo "Connection failed: " . $e->getMessage();
            die();
        }
    }
}