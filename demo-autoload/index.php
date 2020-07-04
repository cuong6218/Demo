<?php
require __DIR__ . '/vendor/autoload.php';
use App\Controller\UserController;
use App\Model\Database;
$user = new UserController();
$user->demo();
$data = new Database();
$data->display();