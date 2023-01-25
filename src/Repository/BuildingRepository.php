<?php
namespace App\Repository;
use App\Entity\Building;
use App\Utility\Database;
use App\Entity\Location;

class BuildingRepository
{
    public function findAll()
    {
        $dbh = Database::getConnection();
        $stmt = $dbh->prepare("select * from Building");
        $stmt->execute();
        $data = $stmt->fetchAll(\PDO::FETCH_CLASS, Building::class);
        return $data; 
    }
    public function findBy($proertyName, $value)
    {
        $dbh = Database::getConnection();
        $stmt = $dbh->prepare("select * from Building where ".$proertyName." = :value");
        $stmt->bindParam(":value", $value);
        $stmt->execute();
        $data = $stmt->fetchAll(\PDO::FETCH_CLASS, Building::class);
        return $data;
    }
}