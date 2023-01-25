<?php
namespace App\Repository;
use App\Entity\Location;
use App\Utility\Database;
use App\Repository\RoomTypeRepository;
use App\Repository\BuildingRepository;

class LocationRepository
{
    public function findAll()
    {
        $dbh = Database::getConnection();
        $stmt = $dbh->prepare("select * from Location");
        $stmt->execute();
        $data = $stmt->fetchAll(\PDO::FETCH_CLASS, Location::class);

        $roomTypeRepository = new RoomTypeRepository();
        $buildingRepository = new BuildingRepository();
        foreach ($data as $elem) 
        {
            $elem->setRoomType($roomTypeRepository->findBy("id", $elem->roomTypeId)[0]);
            $elem->setBuilding($buildingRepository->findBy("id", $elem->buildingId)[0]);
        }
        return $data; 
    }
    public function findBy($proertyName, $value, $orderby=null)
    {
        $dbh = Database::getConnection();
        $sql = "select * from Location where ".$proertyName." = :value";
        if($orderby)
            $sql .= " order by ".$orderby;
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(":value", $value);
        $stmt->execute();
        $data = $stmt->fetchAll(\PDO::FETCH_CLASS, Location::class);
        $roomTypeRepository = new RoomTypeRepository();
        $buildingRepository = new BuildingRepository();
        foreach ($data as $elem) 
        {
            $elem->setRoomType($roomTypeRepository->findBy("id", $elem->roomTypeId)[0]);
            $elem->setBuilding($buildingRepository->findBy("id", $elem->buildingId)[0]);
        }
        return $data;
    }
}