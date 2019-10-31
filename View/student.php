<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Becode</title>
</head>
<body>
<?php require 'includes/header.php' ?>

<section>
<table class="table table-striped table-dark">
    <thead>
    <tr>

        <th scope="col"><div class="padding">Name</div></th>
        <th scope="col">Email</th>
        <th scope="col">Class</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($allStudents as  $student) {

        echo '<td>'.$student['studentName'].'</td>';
        echo '<td>'.$student['studentEmail'].'</td>';
        echo '<td>'.$student['studentID'].'</td>';
        echo '</tr>';
    } ?>
    </tbody>
</table>
</section>
<section>
    <!--        <h4>Hello --><?php //echo $user->getName()?><!--,</h4>-->
    <p>Put your students here.</p>
</section>
<?php require 'includes/footer.php' ?>
</body>
</html>