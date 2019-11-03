<?php
declare(strict_types=1);
class StudentController
{
    public function render(array $GET, array $POST): void
    {
        $database = new Connection();
        $pdo = $database->Connect();
        $dataStudents = $database->select($pdo, 'SELECT Student.studentName, Student.studentID, Student.studentEmail FROM Student');
        //$allStudents = $database->select($pdo, 'SELECT * FROM Student');
        $allStudents = $this->loader($dataStudents);
        //  var_dump($allStudents);
        require 'View/student.php';
    }
    public function loader($Students): array
    {
        $listOfStudents = [];
        foreach ($Students AS $student)
        {
            $listOfStudents[] = new Student($student['studentName'], $student['studentEmail'], $student['studentID']);
        }
        return $listOfStudents;
    }
}