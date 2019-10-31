<?php
declare(strict_types=1);

//include all your model files here
require 'Model/User.php';
//include all your controllers here
require 'Controller/HomepageController.php';

//you could write a simple IF here based on some $_GET or $_POST vars, to choose your controller
//this file should never be more than 20 lines of code!
$controller = new HomepageController();
$controller->render($_GET, $_POST);


if(isset($_POST['studentview']) && $_POST['studentview'] == 'STUD') {
    require 'Student.php';
} else {
    echo 'test';
}

if(isset($_POST['teacherview']) && $_POST['teacherview'] == 'TEACH') {
    require 'Teacher.php';
} else {
    echo 'hello';
}

if(isset($_POST['classview']) && $_POST['classview'] == 'CLASS') {
    require 'Classes.php';
} else {
    echo 'world';
}



if(isset($_POST['add']) && $_POST['add'] == 'add') {
    require 'add-form.php';
} else {
    echo 'ADD';
}
