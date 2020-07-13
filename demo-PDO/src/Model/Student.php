<?php
namespace App\Model;
class Student {
    protected $studentName;

    protected $age;

    public function __construct($studentName, $age)
    {
        $this->studentName = $studentName;
        
        $this->age = $age;
    }



    /**
     * Get the value of studentName
     */ 
    public function getStudentName()
    {
        return $this->studentName;
    }

    /**
     * Set the value of studentName
     *
     * @return  self
     */ 
    public function setStudentName($studentName)
    {
        $this->studentName = $studentName;

        return $this;
    }

    /**
     * Get the value of age
     */ 
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @return  self
     */ 
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }
}