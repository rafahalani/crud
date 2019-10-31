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

                echo '<td>' . $student->getstudentName() . '</td>';
                echo '<td>' . $student->getstudentEmail() . '</td>';
                echo '<td>' . $student->getstudentID() . '</td>';
                echo '<td>' . '<input class="btn btn-danger" type="submit" name="view" value="delete">' . '</td>';
                echo '<td>' . '<input class="btn btn-info" type="submit" name="view" value="edit">' . '</td>';
                echo '</tr>';
            } ?>
            </tbody>
        </table>
    </section>
</div>

<?php
if (isset($_GET['form'])){
if ($_GET['form'] === 'Add') {

}
}
?>

<div class="container">
    <section>

        <input class="btn btn-primary" type="submit" name="form" value="Add">
    </section>
</div>


<?php require 'includes/footer.php' ?>
</body>
</html>