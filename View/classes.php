<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <title>Becode</title>
</head>
<body>
<?php require 'includes/header.php' ?>
<div class="container">
<section>
    <table  class="table table-striped table-dark">
        <thead>
        <tr>
            <th scope="col"><div class="padding">Name</div></th>
            <th scope="col">ID</th>
            <th scope="col">Location</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($allClasses as $class) {

            echo '<td>' . $class['className'] . '</td>';
            echo '<td>' . $class['classID'] . '</td>';
            echo '<td>' . $class['Location'] . '</td>';
            echo '<td>' . '<input class="btn btn-danger" type="submit" name="view" value="delete">' . '</td>';
            echo '<td>' . '<input class="btn btn-info" type="submit" name="view" value="add">' . '</td>';
            echo '</tr>';
        } ?>
        </tbody>
    </table>
</section>

</div>
<section>
    <!--        <h4>Hello --><?php //echo $user->getName()?><!--,</h4>-->
    <p>Put your Classes here.</p>
</section>
<?php require 'includes/footer.php' ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>
