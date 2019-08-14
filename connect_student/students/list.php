<?php

include_once '../DBConnect.php';
include_once '../Student.php';
include_once '../DBStudent.php';

$studentDb = new DBStudent();
$students = $studentDb->getAll();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Manger</title>
</head>
<body>
<h1>Student manger</h1>
<form>
    <table border="1" cellspacing="0">
        <tr>
            <th>Stt</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>
        <?php foreach ($students as $key => $student): ?>
            <tr>
                <td><?php echo ++$key; ?></td>
                <td><?php echo $student->getName(); ?></td>
                <td><?php echo $student->getPhone(); ?></td>
                <td><?php echo $student->getAddress(); ?></td>
                <td><span><a href="delete.php?id=<?php echo $student->getId(); ?>">Delete</a></span></td>
                <td><span><a href="update.php?id=<?php echo $student->getId(); ?>">Update</a></span></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <a href="add.php" type="button">Add</a>

</form>


</body>
</html>

