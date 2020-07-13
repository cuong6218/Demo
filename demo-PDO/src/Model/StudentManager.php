<?php

namespace App\Model;

class StudentManager {
    protected $conn;

    public function __construct()
    {   
        $db = new DBconnect();
        $this->conn = $db->connect();
    }

    public function getAll() {
        $sql = "SELECT * FROM student";
        $query = $this->conn->query($sql);
        $query->execute();
        $data = $query->fetchAll();
        return $this->getStudentList($data);
    }

    public function getStudentList($data) {
        $arr = [];
        foreach ($data as $key => $item) {
            $student = new Student($item['student_name'], $item['student_age']);
            array_push($arr, $student);
        }
        return $arr;
    }



}