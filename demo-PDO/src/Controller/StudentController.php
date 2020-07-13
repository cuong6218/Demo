<?php

namespace App\Controller;
use App\Model\StudentManager;


class StudentController {
    protected $studentData;

    public function __construct()
    {
        $this->studentData = new StudentManager();

    }

    function viewList() {
        $listStudent =  $this->studentData->getAll();
        include('src/View/list.php');
    }

}