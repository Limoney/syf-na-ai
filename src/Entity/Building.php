<?php

namespace App\Entity;

class Building
{
    private int $id;
    private string $name;
    private string $buildingImagePath;
    private string $mapImagePath;
    private string $address;
    private array $locations;

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

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

    /**
     * Get the value of address
     */ 
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set the value of address
     *
     * @return  self
     */ 
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get the value of mapImagePath
     */ 
    public function getMapImagePath()
    {
        return $this->mapImagePath;
    }

    /**
     * Set the value of mapImagePath
     *
     * @return  self
     */ 
    public function setMapImagePath($mapImagePath)
    {
        $this->mapImagePath = $mapImagePath;

        return $this;
    }

    /**
     * Get the value of buildingImagePath
     */ 
    public function getBuildingImagePath()
    {
        return $this->buildingImagePath;
    }

    /**
     * Set the value of buildingImagePath
     *
     * @return  self
     */ 
    public function setBuildingImagePath($buildingImagePath)
    {
        $this->buildingImagePath = $buildingImagePath;

        return $this;
    }

    /**
     * Get the value of locations
     */ 
    public function getLocations()
    {
        return $this->locations;
    }

    /**
     * Set the value of locations
     *
     * @return  self
     */ 
    public function setLocations($locations)
    {
        $this->locations = $locations;

        return $this;
    }

    public function addLocation($location)
    {
        if(!in_array($location,$this->locations))
            $this->locations[] = $location;
        return $this;
    }
}