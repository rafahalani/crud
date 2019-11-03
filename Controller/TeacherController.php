<?php
declare(strict_types=1);


class TeacherController
{
    public function render(array $GET, array $POST) :void
    {
        $database = new Connection();
        $pdo = $database->Connect();
        $dataTeachers = $database->select($pdo, 'SELECT Teacher.teacherName, Teacher.teacherEmail, Teacher.teacherID FROM Teacher');
      //  var_dump($allTeachers);
        $allTeachers = $this->loader($dataTeachers);
        require 'View/teachers.php';
    }
    public function loader($Teachers) :array
    {
       $listOfTeachers = [];
       foreach ($Teachers AS $teacher)
       {
           $listOfTeachers[]= new Teacher($teacher['teacherName'], $teacher['teacherEmail'], $teacher['teacherID']);
       }
       return $listOfTeachers;
    }
}