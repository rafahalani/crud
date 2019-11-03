<?php
require 'View/studentform.php';
$crud = new Crud();
//$validation = new Validation();
if(isset($_GET['Add'])) {
    $studentName = $crud->$_GET['name'];
    $studentID = $crud->$_GET['id'];
    $studentEmail = $crud->$_GET['email'];
    // $classID = $crud->$_POST['classID'];
    //insert data to database
    $result = $crud->execute("INSERT INTO crud.Student(studentName,studentEmail,studentID) VALUES('$studentName','$studentEmail','$studentID')");
    //display success message
    echo "<font color='green'>Data added successfully.";
    echo "<br/><a href='index.php'>View Result</a>";
}