<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Becode</title>
</head>
<body>
<?php require 'includes/header.php' ?>
<div class="container">
    <section>
        <table class="table table-striped table-dark">
            <thead>
            <tr>

                <th scope="col">
                    <div class="padding">Name</div>
                </th>
                <th scope="col">Email</th>
                <th scope="col">Class</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($allStudents as $student) {

                echo '<td>' . $student['studentName'] . '</td>';
                echo '<td>' . $student['studentEmail'] . '</td>';
                echo '<td>' . $student['studentID'] . '</td>';
                echo '</tr>';
            } ?>
            </tbody>
        </table>
    </section>
</div>
<section>
    <!--        <h4>Hello --><?php //echo $user->getName()?><!--,</h4>-->
    <p>Put your students here.</p>
</section>
<?php require 'includes/footer.php' ?>
</body>
</html>