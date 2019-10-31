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
    <?php require 'includes/header.php'?>
    <form method="post">
        <button name="studentview" id="studentView" value="STUD">STUDENT</button>
        <button name="teacherview" id="teacherView" value="TEACH">TEACHER</button>
        <button name="classview" id="classView" value="CLASS">CLASS</button>
        <button name="edit" id="editData" value="EDIT">EDIT</button>
        <button name="delete" id="deleteData" value="DELETE">DELETE</button>
        <button name="add" id="addData" value="add" > ADD</button>

    </form>



    <section>
<!--        <h4>Hello --><?php //echo $user->getName()?><!--,</h4>-->
        <p>Put your content here.</p>
    </section>
    <?php require 'includes/footer.php'?>
</body>
</html>