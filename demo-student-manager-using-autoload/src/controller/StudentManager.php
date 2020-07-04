<?php
namespace App\Controller;

use App\Database\DBConnect;
use App\Student;

class StudentManager
{
    protected $database;
    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM students";
        $stmt = $this->database->query($sql);
        $result = $stmt->fetchAll();
        $arr = [];
        foreach ($result as $item) {
            $student = new Student($item['name'], $item['email'], $item['address'], $item['image']);
            $student->setId($item['id']);
            array_push($arr, $student);
        }

        return $arr;
    }
}