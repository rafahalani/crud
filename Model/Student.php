<?php
declare(strict_types=1);

class Student
{
    private $studentID;
    private $studentName;
   // private $class;
    private $studentEmail;

    /**
     * Student constructor.
     */
    public function __construct(string $studentName, string $studentEmail,int $studentID)
    {
        $this->studentName = $studentName;
        $this->studentEmail = $studentEmail;
        $this->studentID = $studentID;

    }

    /**
     * @return int
     */
    public function getStudentID(): int
    {
        return $this->studentID;
    }

    /**
     * @return string
     */
    public function getStudentName(): string
    {
        return $this->studentName;
    }

    /**
     * @return string
     */
    public function getStudentEmail(): string
    {
        return $this->studentEmail;
    }


}