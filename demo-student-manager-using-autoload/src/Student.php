<?php


namespace App;


class Student
{
    protected $id;
    protected $name;
    protected $email;
    protected $address;
    protected $image;

    public function __construct($name, $email, $address, $image)
    {
        $this->name = $name;
        $this->email = $email;
        $this->address = $address;
        $this->image = $image;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }
}