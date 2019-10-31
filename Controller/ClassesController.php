<?php
declare(strict_types=1);

class ClassesController
{
    public function render(array $GET, array $POST)
    {
     $database = new Connection();
     $pdo = $database->Connect();
     $allClasses = $database->select($pdo,'SELECT * FROM Class');
     var_dump($allClasses);
     require './View/teachers.php';
    }
}