<?php

namespace App\Entity;

class StudentGroup
{
    private int $id;
    private int $groupNumber;
    

    /**
     * Get the value of groupNumber
     */ 
    public function getGroupNumber()
    {
        return $this->groupNumber;
    }

    /**
     * Set the value of groupNumber
     *
     * @return  self
     */ 
    public function setGroupNumber($groupNumber)
    {
        $this->groupNumber = $groupNumber;

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