<?php
declare(strict_types=1);
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);
//require 'connection.php';

if(!isset($_GET)){
    if ($_SERVER['REQUEST_METHOD'] === 'GET'){
        $studentName = $_GET['studnetName'];
        $studentEmail = $_GET['studnetEmail'];
        $studentID= $_GET['studnetID'];

$connect = new StudentController();
$connection = $connect->render();
        try{
            $prepare = $connection->prepare('INSERT INTO Student(studentName, studentEmail, studentID) VALUES (:studentName, :studentEmail, studentID)');
            $var = $prepare->excute([$studentName,$studentEmail,$studentID]);
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (string)$e->getCode());
        }

    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>studentform</title>
</head>
<body>
<div class="container">
<div class="m-5 bg-light">
    <h3>Please enter the new student</h3>
    <form action="" method="get">

        </br>
        <label for="studentName">studentName:</label>
        <input name="studentName" id="studentName" type="text" maxlength="255" required/></br>

        </br>
        <label for="studentEmail">studentEmail:</label>
        <input name="studentEmail" id="studentEmail" type="text" maxlength="255" required/></br>

        </br>
        <label for="studentID">studentID</label>
        <input name="sudentID" id="studentID" type="text" maxlength="255" required/></br>

        </br>
        <input class="btn btn-info" type="submit" value="submit"/></br>
    </form>
</div>
</div>
</body>
</html>