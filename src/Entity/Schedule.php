<?php

namespace App\Entity;

use App\Entity\Professor;
use App\Entity\StudentGroup;
use App\Entity\Location;
use App\Entity\Course;

class Schedule
{
    private int $id;
    private string $start_time;
    private string $end_time;
    private Professor $professor;
    private StudentGroup $studentGroup;
    private Location $location;
    private Course $course;

    /**
     * Get the value of course
     */ 
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * Set the value of course
     *
     * @return  self
     */ 
    public function setCourse($course)
    {
        $this->course = $course;

        return $this;
    }

    /**
     * Get the value of location
     */ 
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set the value of location
     *
     * @return  self
     */ 
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get the value of studentGroup
     */ 
    public function getStudentGroup()
    {
        return $this->studentGroup;
    }

    /**
     * Set the value of studentGroup
     *
     * @return  self
     */ 
    public function setStudentGroup($studentGroup)
    {
        $this->studentGroup = $studentGroup;

        return $this;
    }

    /**
     * Get the value of professor
     */ 
    public function getProfessor()
    {
        return $this->professor;
    }

    /**
     * Set the value of professor
     *
     * @return  self
     */ 
    public function setProfessor($professor)
    {
        $this->professor = $professor;

        return $this;
    }

    /**
     * Get the value of end_time
     */ 
    public function getEnd_time()
    {
        return $this->end_time;
    }

    /**
     * Set the value of end_time
     *
     * @return  self
     */ 
    public function setEnd_time($end_time)
    {
        $this->end_time = $end_time;

        return $this;
    }

    /**
     * Get the value of start_time
     */ 
    public function getStart_time()
    {
        return $this->start_time;
    }

    /**
     * Set the value of start_time
     *
     * @return  self
     */ 
    public function setStart_time($start_time)
    {
        $this->start_time = $start_time;

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