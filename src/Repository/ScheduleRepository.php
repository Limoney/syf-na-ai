<?php
namespace App\Repository;
use App\Utility\Database;
use App\Entity\Schedule;

class ScheduleRepository
{
    public function findAll()
    {
        $dbh = Database::getConnection();
        $stmt = $dbh->prepare("select * from Schedule");
        $stmt->execute();
        $data = $stmt->fetchAll(\PDO::FETCH_CLASS, Schedule::class);
        $this->fillRelations($data);
        return $data; 
    }
    public function findBy($proertyName, $value)
    {
        $dbh = Database::getConnection();
        $stmt = $dbh->prepare("select * from Location where ".$proertyName." = :value");
        $stmt->bindParam(":value", $value);
        $stmt->execute();
        $data = $stmt->fetchAll(\PDO::FETCH_CLASS, Schedule::class);
        $this->fillRelations($data);
        return $data;
    }

    private function fillRelations(array &$schedules) : void
    {
        $professorRepository = new ProfessorRepository();
        $studentGroupRepository = new StudentGroupRepository();
        $locationRepository = new LocationRepository();
        $courseRepository = new CourseRepository();
        foreach ($schedules as $elem) 
        {
            $elem->setProfessor($professorRepository->findBy("id", $elem->professorId)[0]);
            $elem->setStudentGroup($studentGroupRepository->findBy("id", $elem->studentGroupId)[0]);
            $elem->setLocation($locationRepository->findBy("id", $elem->locationId)[0]);
            $elem->setCourse($courseRepository->findBy("id", $elem->courseId)[0]);
        }
    }
}