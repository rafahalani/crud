<?php


class TeacherController
{
    public function render(array $GET, array $POST)
    {
        $database = new Connection();
        $pdo = $database->Connect();
        $allTeachers = $database->select($pdo, 'SELECT * FROM Teacher');
        var_dump($allTeachers);
        require './View/teachers.php';
    }
}