<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>STT</th>
            <th>Name</th>
            <th>Age</th>

        </tr>
        <?php if(empty($listStudent)) : ?>
        <tr>
            <td>No data</td>
        </tr>
        <?php else: ?>
            <?php foreach($listStudent as $key=>$student): ?>
            <tr>
                <td><?php echo ++$key ?></td>
                <td><?php echo $student->getStudentName() ?></td>
                <td><?php echo $student->getAge() ?></td>
            
            
            </tr>
            <?php endforeach; ?>
            <?php endif ;?>
    </table>
</body>
</html>