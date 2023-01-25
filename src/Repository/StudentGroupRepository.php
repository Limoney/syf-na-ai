<?php
namespace App\Repository;
use App\Entity\StudentGroup;
use App\Utility\Database;

class StudentGroupRepository
{
    public function findAll()
    {
        $dbh = Database::getConnection();
        $stmt = $dbh->prepare("select * from StudentGroup");
        $stmt->execute();
        $data = $stmt->fetchAll(\PDO::FETCH_CLASS, StudentGroup::class);
        return $data; 
    }
    public function findBy($proertyName, $value)
    {
        $dbh = Database::getConnection();
        $stmt = $dbh->prepare("select * from StudentGroup where ".$proertyName." = :value");
        $stmt->bindParam(":value", $value);
        $stmt->execute();
        $data = $stmt->fetchAll(\PDO::FETCH_CLASS, StudentGroup::class);
        return $data;
    }
}