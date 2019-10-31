<?php
//including the database connection file
include_once("Crud.php");
//include_once("Validation.php");

require_once '/var/www/php-crud/View/includes/add.php';

$crud = new Crud();

//$validation = new Validation();

if(isset($_POST['Add'])) {
    $studentName = $crud->$_POST['name'];
    $studentID = $crud->$_POST['id'];
    $studentEmail = $crud->$_POST['email'];
    $classID = $crud->$_POST['classID'];

    //insert data to database
    $result = $crud->execute("INSERT INTO crud.Student(studentName,studentEmail,studentID,classID) VALUES('$studentName','$studentEmail','$studentID','$classID')");

    //display success message
    echo "<font color='green'>Data added successfully.";
    echo "<br/><a href='index.php'>View Result</a>";

}
?>