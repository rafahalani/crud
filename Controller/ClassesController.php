<?php
declare(strict_types=1);

class ClassesController
{
    public function render(array $GET, array $POST) :void
    {
     $database = new Connection();
     $pdo = $database->Connect();
     $allClasses = $database->select($pdo,'SELECT Class.className, Class.classID, Class.Location FROM Class');
    // var_dump($allClasses);
     require './View/classes.php';
    }
}