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
            <th scope="col">
                <div class="padding">Name</div>
            </th>
            <th scope="col">ID</th>
            <th scope="col">Location</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($allClasses as $class) {

            echo '<td>' . $class['className'] . '</td>';
            echo '<td>' . $class['classID'] . '</td>';
            echo '<td>' . $class['Location'] . '</td>';
            echo '</tr>';
        } ?>
        </tbody>
    </table>
</section>


<section>
    <!--        <h4>Hello --><?php //echo $user->getName()?><!--,</h4>-->
    <p>Put your Classes here.</p>
</section>
<?php require 'includes/footer.php' ?>
</body>
</html>
