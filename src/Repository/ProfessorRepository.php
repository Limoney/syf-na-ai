<?php
namespace App\Repository;

use App\Entity\Professor;
use App\Utility\Database;

class ProfessorRepository
{
    public function findAll()
    {
        $dbh = Database::getConnection();
        $stmt = $dbh->prepare("select * from Professor");
        $stmt->execute();
        $data = $stmt->fetchAll(\PDO::FETCH_CLASS, Professor::class);
        $this->fillRelations($data);
        return $data; 
    }
    public function findBy($proertyName, $value)
    {
        $dbh = Database::getConnection();
        $stmt = $dbh->prepare("select * from Professor where ".$proertyName." = :value");
        $stmt->bindParam(":value", $value);
        $stmt->execute();
        $data = $stmt->fetchAll(\PDO::FETCH_CLASS, Professor::class);
        $this->fillRelations($data);
        return $data;
    }

    public function findByFullName($firstName, $lastName)
    {
        $dbh = Database::getConnection();
        $stmt = $dbh->prepare("select * from Professor where firstName = :fname and lastName = :lname");
        $stmt->execute([":fname" => $firstName, ":lname" => $lastName]);
        $data = $stmt->fetchAll(\PDO::FETCH_CLASS, Professor::class);
        $this->fillRelations($data);
        return $data;
    }
    private function fillRelations(array &$data) : void
    {
        $locationRepository = new LocationRepository();
        foreach ($data as $elem) 
        {
            $elem->setLocation($locationRepository->findBy("id", $elem->locationId)[0]);
        }
    }

}