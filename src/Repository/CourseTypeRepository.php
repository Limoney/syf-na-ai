<?php
namespace App\Repository;
use App\Entity\CourseType;
use App\Utility\Database;

class CourseTypeRepository
{
    public function findAll()
    {
        $dbh = Database::getConnection();
        $stmt = $dbh->prepare("select * from CourseType");
        $stmt->execute();
        $data = $stmt->fetchAll(\PDO::FETCH_CLASS, CourseType::class);
        return $data; 
    }
    public function findBy($proertyName, $value)
    {
        $dbh = Database::getConnection();
        $stmt = $dbh->prepare("select * from CourseType where ".$proertyName." = :value");
        $stmt->bindParam(":value", $value);
        $stmt->execute();
        $data = $stmt->fetchAll(\PDO::FETCH_CLASS, CourseType::class);
        return $data;
    }
}