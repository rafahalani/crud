<?php



class Classes
{

    private $classID;
    private $className;
    private $teacherID;
    private $Location;


    public function __construct(string $className, string $Location, int $teacherID, int $classID)
    {
        $this->className = $className;
        $this->teacherID = $teacherID;
        $this->Location = $Location;
        $this->classID = $classID;
    }

    public function getclassName(): string
    {
        return $this->className;
    }


    public function getteacherID(): int
    {
        return $this->teacherID;
    }

    public function getLocation(): string
    {
        return $this->Location;
    }

    public function getclassID(): int
    {
        return $this->classID;
    }

}
