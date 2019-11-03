<?php
declare(strict_types=1);

class ClassesController
{
    public function render(array $GET, array $POST) :void
    {
     $database = new Connection();
     $pdo = $database->Connect();
     $classesData = $database->select($pdo,'SELECT Class.className, Class.classID, Class.Location FROM Class');
     $allClasses = $this->loader($classesData);
     // var_dump($allClasses);

     require 'View/classes.php';
    }
    public function loader($Classes) : array
    {
        $listOfClasses =[];
        foreach ($Classes AS $class)
        {
            $listOfClasses[] = new Classes($class['className'],$class['Location'],$class['classID']);
        }

    return $listOfClasses;
    }

}