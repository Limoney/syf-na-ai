<?php
namespace App\Repository;
use App\Entity\Course;
use App\Repository\CourseTypeRepository;
use App\Utility\Database;

class CourseRepository
{
    public function findAll()
    {
        $dbh = Database::getConnection();
        $stmt = $dbh->prepare("select * from Course");
        $stmt->execute();
        $data = $stmt->fetchAll(\PDO::FETCH_CLASS, Course::class);
        $courseTypeRepository = new CourseTypeRepository();
        foreach ($data as $elem) 
        {
            $elem->setCourseType($courseTypeRepository->findBy("id", $elem->courseTypeId)[0]);
        }
        return $data; 
    }
    public function findBy($proertyName, $value)
    {
        $dbh = Database::getConnection();
        $stmt = $dbh->prepare("select * from Course where ".$proertyName." = :value");
        $stmt->bindParam(":value", $value);
        $stmt->execute();
        $data = $stmt->fetchAll(\PDO::FETCH_CLASS, Course::class);
        $courseTypeRepository = new CourseTypeRepository();
        foreach ($data as $elem) 
        {
            $elem->setCourseType($courseTypeRepository->findBy("id", $elem->courseTypeId)[0]);
        }
        return $data;
    }
}