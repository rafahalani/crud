<?php
declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

//include all your model files here
require 'Model/Connection.php';
require 'Model/Student.php';

//include all your controllers here
require 'Controller/HomepageController.php';
require 'Controller/StudentController.php';
require 'Controller/TeacherController.php';
require 'Controller/ClassesController.php';



//you could write a simple IF here based on some $_GET or $_POST vars, to choose your controller
//this file should never be more than 20 lines of code!
$controller = new HomepageController();

if (isset($_GET['view'])){
    if ($_GET['view'] === 'students'){
        $controller = new StudentController();
        if (isset($_GET['studentName']) && ($_GET['studentEmail']) && ($_GET['studentID'])) {
            $connect = new Connection();
            $connection = $connect->insertNewStudent();
        }
    } elseif ($_GET['view'] === 'teachers'){
        $controller = new TeacherController();
    } elseif ($_GET['view'] === 'classes'){
        $controller = new ClassesController();
    }
}
$controller->render($_GET, $_POST);




/*if(!isset($_POST)) {
    $studentName = $_POST['studentName'];
    $studentEmail = $_POST['studentEmail'];
    $studentID = $_POST['studentID'];
}*/




