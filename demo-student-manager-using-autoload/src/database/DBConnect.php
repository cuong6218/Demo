<?php
namespace App\Database;

use PDO;
use PDOException;

class DBConnect
{
    protected $dsn;
    protected $username;
    protected $password;

    public function __construct()
    {
        $this->dsn = "mysql:host=localhost;dbname=student_manager";
        $this->username = "root";
        $this->password = "123456@Abc";
    }

    public function connect()
    {
        try {
            return new PDO($this->dsn, $this->username, $this->password);
        }catch (PDOException $exception) {
            echo  $exception->getMessage();
            exit();
        }
    }
}