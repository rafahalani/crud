<?php
declare(strict_types=1);


class TeacherController
{
    public function render(array $GET, array $POST) :void
    {
        $database = new Connection();
        $pdo = $database->Connect();
        $allTeachers = $database->select($pdo, 'SELECT Teacher.teacherName, Teacher.teacherEmail, Teacher.teacherID FROM Teacher');
      //  var_dump($allTeachers);
        require './View/teachers.php';
    }
}