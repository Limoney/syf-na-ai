<?php

namespace App\Entity;
use App\Entity\CourseType;

class Course
{
    private int $id;
    private string $name;
    private CourseType $courseType;

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
     * Get the value of courseType
     */ 
    public function getCourseType()
    {
        return $this->courseType;
    }

    /**
     * Set the value of courseType
     *
     * @return  self
     */ 
    public function setCourseType($courseType)
    {
        $this->courseType = $courseType;

        return $this;
    }
}