<?php
declare(strict_types=1);

class Student
{
    private $studentID;
    private $name;
    private $class;
    private $email;

    public function __construct(string $name, string $email, int $class, int $studentID)
    {
        $this->name = $name;
        $this->class = $class;
        $this->email = $email;
        $this->studentID = $studentID;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function getEmail() : string
    {
        return $this->email;
    }

    public function getClass() : int
    {
        return $this->class;
    }


}