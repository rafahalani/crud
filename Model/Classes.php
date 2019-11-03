<?php



class Classes
{

    private $classID;
    private $className;

    private $Location;


    public function __construct(string $className, string $Location, int $classID)
    {
        $this->className = $className;
        $this->Location = $Location;
        $this->classID = $classID;
    }

    public function getclassName(): string
    {
        return $this->className;
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
