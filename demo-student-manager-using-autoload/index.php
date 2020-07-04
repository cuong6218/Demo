<?php

use App\Controller\StudentManager;

require __DIR__ . '/vendor/autoload.php';

$studentManager = new StudentManager();
$students = $studentManager->getAll();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="1">
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Image</th>
        <th>Email</th>
        <th>Address</th>
        <th></th>
    </tr>
    <?php foreach ($students as $key => $student): ?>
        <tr>
            <td><?php echo ++$key ?></td>
            <td><?php echo $student->getName() ?></td>
            <td><img src="" alt=""></td>
            <td><?php echo $student->getEmail() ?></td>
            <td><?php echo $student->getAddress() ?></td>
            <td><a href="">Delete</a></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
