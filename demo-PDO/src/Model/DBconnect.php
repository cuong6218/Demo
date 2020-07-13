<?php

namespace App\Model;
use PDO;

class DBconnect {
    
    protected $dsn;

    protected $username;

    protected $password;

    public function __construct()
    {
        $this->dsn = 'mysql:host=localhost;dbname=students;charset=utf8';
        
        $this->username = 'root';
        
        $this->password = '1234Tung@123';
    }

    function connect() {
        $conn = null;
        try {
            $conn = new PDO($this->dsn, $this->username,$this->password);
        } catch(PDOException $e) {
            echo $e->getMessage('loi server');
           
        }
        
        return $conn;
    }

    
    public function getAll() {
        $sql = "SELECT * FROM student";
        $query = $this->connect()->query($sql);
        $query->execute();
        $data = $query->fetchAll();
        return $data;
        
    }


}

// $test = new DBconnect();
// var_dump($test->getAll());
// die();
