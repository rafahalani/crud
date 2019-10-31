<?php
declare(strict_types=1);

class StudentController
{
    public function render(array $GET, array $POST)
    {
        $database = new Connection();
        $pdo = $database->Connect();
        $allStudents = $database->select($pdo, 'SELECT * FROM Student');
        var_dump($allStudents);
        require './View/student.php';
    }
}