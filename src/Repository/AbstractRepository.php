<?php
/*
namespace App\Repository;

use App\Utility\Database;

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

class AbstractRepository
{
    protected $tableName;
    protected $entityClass;

    public function findAll()
    {
        $dbh = Database::getConnection();
        $stmt = $dbh->prepare("select * from ".$this->tableName);
        $stmt->execute();
        $data = $stmt->fetchAll(\PDO::FETCH_CLASS, $this->entityClass);
        print_r($data);
        return $data; 
    }
    public function findBy($proertyName, $value)
    {
        $dbh = Database::getConnection();
        $stmt = $dbh->prepare("select * from ".$this->tableName." where ".$proertyName." = :value");
        $stmt->bindParam(":value", $value);
        $stmt->execute();
        $data = $stmt->fetchAll(\PDO::FETCH_CLASS, $this->entityClass);
        return $data;
    }
}*/