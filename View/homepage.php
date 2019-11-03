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

    <form method="get">
        <input class="btn btn-default" type="submit" name="view" value="students">
        <input class="btn btn-default" type="submit" name="view" value="teachers">
        <input class="btn btn-default" type="submit" name="view" value="classes">
    </form>
    </div>


    <section>
<!--        <h4>Hello --><?php //echo $user->getName()?><!--,</h4>-->

    </section>



    <?php require 'includes/footer.php' ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>