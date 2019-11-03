<?php
declare(strict_types=1);
class AddController
{
    public function render(array $GET, array $POST): void
    {
        $database = new Connection();
        $pdo = $database->Connect();
        $dataStudents = $database->select($pdo, 'SELECT Student.studentName, Student.studentID, Student.studentEmail FROM Student');
        //$allStudents = $database->select($pdo, 'SELECT * FROM Student');
        $allStudents = $this->loader($dataStudents);
        //  var_dump($allStudents);
        require 'View/studentform.php';
    }
    public function createNewStudent(array $POST, Connection $database, PDO $pdo): void
    {
        $newStudent = new Student($POST['studentName'], $POST['studentEmail'], $POST['studentID']);
        $database->insertNewStudent($pdo, $newStudent);
        require 'View/studentform.php';
    }
}