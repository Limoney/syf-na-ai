<?php
namespace App\Repository;
use App\Entity\RoomType;
use App\Utility\Database;

class RoomTypeRepository
{
    public function findAll()
    {
        $dbh = Database::getConnection();
        $stmt = $dbh->prepare("select * from RoomType");
        $stmt->execute();
        $data = $stmt->fetchAll(\PDO::FETCH_CLASS, RoomType::class);
        return $data; 
    }
    public function findBy($proertyName, $value)
    {
        $dbh = Database::getConnection();
        $stmt = $dbh->prepare("select * from RoomType where ".$proertyName." = :value");
        $stmt->bindParam(":value", $value);
        $stmt->execute();
        $data = $stmt->fetchAll(\PDO::FETCH_CLASS, RoomType::class);
        return $data;
    }
}