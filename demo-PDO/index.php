<?php
require __DIR__."/vendor/autoload.php";
use App\Controller\StudentController;

$controller = new StudentController();
$controller->viewList();