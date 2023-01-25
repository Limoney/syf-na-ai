<?php

namespace App\Entity;

use App\Entity\Building;
use App\Entity\RoomType;

class Location
{
    private int $id;
    private int $roomNumber;
    private RoomType $roomType;
    private int $floorNumber;
    private Building $building;

    /**
     * Get the value of building
     */ 
    public function getBuilding()
    {
        return $this->building;
    }

    /**
     * Set the value of building
     *
     * @return  self
     */ 
    public function setBuilding($building)
    {
        $this->building = $building;

        return $this;
    }

    /**
     * Get the value of floorNumber
     */ 
    public function getFloorNumber()
    {
        return $this->floorNumber;
    }

    /**
     * Set the value of floorNumber
     *
     * @return  self
     */ 
    public function setFloorNumber($floorNumber)
    {
        $this->floorNumber = $floorNumber;

        return $this;
    }

    /**
     * Get the value of room
     */ 
    public function getRoomType()
    {
        return $this->roomType;
    }

    /**
     * Set the value of room
     *
     * @return  self
     */ 
    public function setRoomType($room)
    {
        $this->roomType = $room;

        return $this;
    }

    /**
     * Get the value of roomNumber
     */ 
    public function getRoomNumber()
    {
        return $this->roomNumber;
    }

    /**
     * Set the value of roomNumber
     *
     * @return  self
     */ 
    public function setRoomNumber($roomNumber)
    {
        $this->roomNumber = $roomNumber;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}